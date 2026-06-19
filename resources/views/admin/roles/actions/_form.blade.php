@csrf

@if(isset($role))
    @method('PUT')
@endif

<div class="mb-3">
    <label class="form-label">Role Name</label>

    <input
        type="text"
        name="name"
        class="form-control @error('name') is-invalid @enderror"
        value="{{ old('name', $role->name ?? '') }}"
        placeholder="Enter role name"
    >

    @error('name')
    <span class="invalid-feedback">
            {{ $message }}
        </span>
    @enderror
</div>

<button type="submit" class="btn btn-primary">
    {{ isset($role) ? 'Update Role' : 'Create Role' }}
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
