@extends('admin.layouts.app')
@section('title', 'Role Permissions')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Permissions for role: <b>{{ $role->name }}</b>
                    </h3>
                </div>

                <form action="{{ route('admin.roles.permissions.update', $role->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        @foreach($permissions as $model => $perms)
                            <div class="mb-4 p-3 border rounded">
                                <h5 class="mb-3 text-primary">
                                    {{ ucfirst($model) }}
                                </h5>

                                <div class="row">
                                    @foreach($perms as $permission)
                                        <div class="col-md-3">
                                            <label class="permission-card">
                                                <input
                                                    class="permission-input"
                                                    type="checkbox"
                                                    name="permissions[]"
                                                    value="{{ $permission->name }}"
                                                    {{ in_array($permission->name, $rolePermissions) ? 'checked' : '' }}
                                                >

                                                <div class="permission-body">
                                                    {{ \App\Services\Admin\PermissionService::make($permission->name) }}
                                                </div>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-success">
                            Save permissions
                        </button>

                        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">
                            Back
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
<style>
    .permission-card {
        display: block;
        cursor: pointer;
        margin-bottom: 12px;
    }

    .permission-input {
        display: none;
    }

    .permission-body {
        padding: 14px 18px;
        border: 1px solid #dee2e6;
        border-radius: 12px;
        font-size: 15px;
        background: #fff;
        transition: all 0.2s ease;
    }

    .permission-card:hover .permission-body {
        border-color: #0d6efd;
        box-shadow: 0 2px 10px rgba(13,110,253,0.12);
    }

    .permission-input:checked + .permission-body {
        background: #0d6efd;
        color: #fff;
        border-color: #0d6efd;
        font-weight: 600;
    }
</style>
