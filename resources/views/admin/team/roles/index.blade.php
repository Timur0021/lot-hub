@extends('admin.layouts.app')
@section('title', 'Roles')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Admins Table</h3>

                    <div class="card-tools d-flex align-items-center gap-2">
                        <a href="{{ route('admin.roles.create') }}" type="button" class="btn btn-outline-primary btn-lg px-4 mr-4">
                            Create
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Guard Name
                            </th>
                            <th>
                                Date
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($roles as $role)
                                <tr>
                                    <td>
                                        {{ $role->id }}
                                    </td>
                                    <td>
                                        {{ $role->name }}
                                    </td>
                                    <td>
                                        {{ $role->guard_name }}
                                    </td>
                                    <td>
                                        {{ $role->created_at->timezone('Europe/Kyiv')->format('d.m.Y') }}
                                    </td>
                                    <td>
                                        <a
                                            href="{{ route('admin.roles.edit', $role->id) }}"
                                            class="btn btn-sm btn-primary"
                                        >
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </a>
                                        <form
                                            action="{{ route('admin.roles.delete', $role->id) }}"
                                            method="POST"
                                            style="display:inline-block"
                                            onsubmit="return confirm('Are you sure?')"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                            </button>
                                        </form>
                                        <a
                                            href="{{ route('admin.roles.permissions', $role->id) }}"
                                            class="btn btn-sm btn-warning"
                                        >
                                            <i class="fas fa-key"></i>
                                            Permissions
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="100%">
                                        <div class="alert alert-danger mb-0">
                                            Admins not found
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <x-admin.pagination :paginator="$roles" />
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
