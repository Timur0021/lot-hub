<div class="mb-3">
    <label class="form-label">Photo</label>

    <div class="d-flex align-items-center gap-4">
        <div>
            @php
                $avatar = isset($admin)
                    ? $admin->getFirstMediaUrl('avatar')
                    : null;
            @endphp

            <img
                src="{{ $avatar ?: 'https://ui-avatars.com/api/?name=User' }}"
                class="rounded-circle border"
                style="width: 100px; height: 100px; object-fit: cover;"
                id="avatarPreview"
                alt="avatar"
            >
        </div>

        <div class="ms-auto d-flex flex-column align-items-end">

            <input
                type="file"
                name="avatar"
                id="avatarInput"
                class="d-none"
                accept="image/*"
                onchange="previewAvatar(event)"
            >

            <label for="avatarInput" class="btn btn-outline-primary btn-sm px-3">
                Upload photo
            </label>

            <div class="text-muted small mt-2 text-end">
                JPG, PNG, WEBP (max 2MB)
            </div>

        </div>

    </div>

    @error('avatar')
        <span class="invalid-feedback d-block">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label">Name</label>
    <input
        type="text"
        name="name"
        class="form-control"
        value="{{ old('name', $admin->name ?? '') }}"
    >

    @error('name')
        <span class="invalid-feedback d-block">
                {{ $message }}
        </span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Last Name</label>
    <input
        type="text"
        name="last_name"
        class="form-control"
        value="{{ old('last_name', $admin->last_name ?? '') }}"
    >

    @error('last_name')
        <span class="invalid-feedback d-block">
            {{ $message }}
        </span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Email address</label>
    <input
        type="email"
        name="email"
        class="form-control"
        placeholder="name@example.com"
        value="{{ old('email', $admin->email ?? '') }}"
    >

    @error('email')
        <span class="invalid-feedback d-block">
            {{ $message }}
        </span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control">

    @error('password')
        <span class="invalid-feedback d-block">
            {{ $message }}
        </span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control">
</div>

<div class="mb-3">
    <label for="role" class="form-label">Role</label>

    @if($roles->isEmpty())
        <div class="alert alert-danger">
            No roles found. Please create a role first.
        </div>
    @else
        <select name="role" id="role" class="form-control">
            <option value="">Select role</option>

            @foreach($roles as $role)
                <option
                    value="{{ $role->id }}"
                    @selected(
                        old(
                            'role',
                            isset($admin)
                                ? $admin->roles->first()?->id
                                : null
                        ) == $role->id
                    )
                >
                    {{ $role->name }}
                </option>
            @endforeach
        </select>

        @error('role')
            <span class="invalid-feedback d-block">
                {{ $message }}
            </span>
        @enderror
    @endif
</div>

<button type="submit" class="btn btn-primary">
    {{ isset($admin) ? 'Update Admin' : 'Create Admin' }}
</button>

<script>
    function previewAvatar(event) {
        const reader = new FileReader();
        reader.onload = function () {
            document.getElementById('avatarPreview').src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
