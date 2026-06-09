@extends('admin.layouts.app')
@section('title', 'Team')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Admin</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.team.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">

                            @error('name')
                                <span class="invalid-feedback d-block">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="name@example.com" value="{{ old('email') }}">

                            @error('email')
                                <span class="invalid-feedback d-block">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" value="{{ old('password') }}">

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
                                    <option value="">Selected role</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}"
                                            {{ old('role') == $role->id ? 'selected' : '' }}>
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
                            Create Admin
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
