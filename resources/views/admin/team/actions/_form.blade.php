@csrf

@if(isset($admin))
    @method('PUT')
@endif

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
