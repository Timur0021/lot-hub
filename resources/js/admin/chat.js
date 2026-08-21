document.addEventListener('DOMContentLoaded', () => {
    const messagesContainer = document.getElementById('chat-messages');
    const messageInput = document.getElementById('chat-message-input');
    const chatForm = document.getElementById('chat-form');

    if (!messagesContainer || !messageInput || !chatForm) {
        return;
    }

    const currentUserId = window.chatUserId;

    if (!currentUserId) {
        console.warn('⚠️ chatUserId is not defined');
        return;
    }

    let receiverId = null;
    let receiverAvatar = null;

    console.log('👤 CURRENT ADMIN:', currentUserId);

    function appendMessage(message) {
        const senderId = Number(message.sender_id);
        const currentId = Number(currentUserId);

        const isMine = senderId === currentId;

        console.log('💬 RENDER MESSAGE:', {
            id: message.id,
            sender_id: senderId,
            current_user_id: currentId,
            isMine: isMine,
            sender: message.sender,
        });

        const wrapper = document.createElement('div');

        wrapper.classList.add('direct-chat-msg');

        if (!isMine) {
            wrapper.classList.add('right');
        }

        const senderName =
            message.sender?.name ?? 'Unknown';

        const senderLastName =
            message.sender?.last_name ?? '';

        const fullName =
            `${senderName} ${senderLastName}`.trim();

        let avatar;

        if (isMine) {
            avatar =
                message.sender?.avatar ||
                window.currentUserAvatar ||
                '/assets/dist/img/user2-160x160.jpg';
        } else {
            avatar =
                message.sender?.avatar ||
                receiverAvatar ||
                '/assets/dist/img/user2-160x160.jpg';
        }

        const createdAt =
            message.created_at
                ? new Date(message.created_at)
                    .toLocaleString('uk-UA')
                : '';

        wrapper.innerHTML = `
        <div class="direct-chat-infos clearfix">

            <span class="direct-chat-name ${
            isMine
                ? 'float-right'
                : 'float-left'
        }">
                ${escapeHtml(fullName)}
            </span>

            <span class="direct-chat-timestamp ${
            isMine
                ? 'float-left'
                : 'float-right'
        }">
                ${createdAt}
            </span>

        </div>

        <img
            class="direct-chat-img"
            src="${escapeHtml(avatar)}"
            alt="${escapeHtml(fullName)}"
        >

        <div class="direct-chat-text">
            ${escapeHtml(message.body)}
        </div>
    `;

        messagesContainer.appendChild(wrapper);

        messagesContainer.scrollTop =
            messagesContainer.scrollHeight;
    }


    function escapeHtml(text) {
        const div = document.createElement('div');

        div.textContent = text ?? '';

        return div.innerHTML;
    }


    function clearMessages() {
        messagesContainer.innerHTML = '';
    }

    async function loadMessages(userId) {
        clearMessages();

        try {
            const response = await fetch(
                `/admin/chat/messages/${userId}`,
                {
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                    }
                }
            );

            if (!response.ok) {
                throw new Error(`HTTP ${response.status}`);
            }

            const data = await response.json();

            console.log('💬 CHAT HISTORY:', data);
            console.log('💬 CHAT HISTORY TYPE:', typeof data);
            console.log('💬 IS ARRAY:', Array.isArray(data));

            let messages;

            if (Array.isArray(data)) {
                messages = data;
            } else if (Array.isArray(data.messages)) {
                messages = data.messages;
            } else if (Array.isArray(data.data)) {
                messages = data.data;
            } else {
                console.error('❌ Unexpected messages response:', data);
                return;
            }

            messages.forEach(message => {
                appendMessage(message);
            });

        } catch (error) {
            console.error(
                '❌ Failed to load messages:',
                error
            );
        }
    }

    document.querySelectorAll('.chat-contact')
        .forEach(contact => {
            contact.addEventListener('click', async (event) => {
                event.preventDefault();

                receiverId =
                    Number(contact.dataset.chatUserId);

                const receiverName =
                    contact.dataset.chatUserName;

                receiverAvatar =
                    contact.dataset.chatUserAvatar ||
                    '/assets/dist/img/user2-160x160.jpg';

                console.log(
                    '👤 SELECTED CONTACT:',
                    receiverId,
                    receiverName
                );

                const title =
                    document.getElementById('chat-current-user');

                if (title) {
                    title.textContent =
                        `with ${receiverName}`;
                }

                await loadMessages(receiverId);
            });
        });

    if (window.lastChatUserId) {
        const lastContact = document.querySelector(
            `.chat-contact[data-chat-user-id="${window.lastChatUserId}"]`
        );

        if (lastContact) {
            lastContact.click();
        }
    }

    chatForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        if (!receiverId) {
            alert('Select a contact first');
            return;
        }

        const body = messageInput.value.trim();

        if (!body) {
            return;
        }

        try {
            const response = await fetch(
                '/admin/chat/messages',
                {
                    method: 'POST',

                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',

                        'X-CSRF-TOKEN':
                            document
                                .querySelector('meta[name="csrf-token"]')
                                .getAttribute('content'),

                        'X-Requested-With':
                            'XMLHttpRequest',
                    },


                    body: JSON.stringify({
                        receiver_id: receiverId,
                        body: body,
                    }),
                }
            );

            if (!response.ok) {
                const errorText = await response.text();

                console.error(
                    '❌ SEND ERROR:',
                    errorText
                );

                throw new Error(
                    `HTTP ${response.status}`
                );
            }

            const data = await response.json();

            console.log(
                '📤 MESSAGE SENT:',
                data
            );


            const message = data.data ?? data;

            appendMessage(message);

            messageInput.value = '';
        } catch (error) {
            console.error(
                '❌ Failed to send message:',
                error
            );
        }
    });

    console.log(
        `📡 SUBSCRIBE: chat.${currentUserId}`
    );

    window.Echo
        .private(`chat.${currentUserId}`)
        .listen('.message.sent', (event) => {
            console.log(
                '📨 MESSAGE RECEIVED:',
                event
            );

            const message =
                event.message ?? event.data ?? event;

            if (
                receiverId &&
                Number(message.sender_id) === Number(receiverId)
            ) {
                appendMessage(message);
            }
        });
});
