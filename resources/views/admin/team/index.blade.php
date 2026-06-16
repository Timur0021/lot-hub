@extends('admin.layouts.app')
@section('title', 'Team')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Admins Table</h3>

                    <div class="card-tools d-flex align-items-center">
                        <a href="{{ route('admin.team.create') }}" type="button" class="btn btn-outline-primary btn-lg px-4  mr-4">
                            Create
                        </a>

                        <form method="GET" action="{{ route('admin.team.index') }}" class="d-flex">
                            <x-admin.search-input name="admin_search" width="350px"/>
                        </form>
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
                                Avatar
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Last Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Role
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
                            @forelse($admins as $admin)
                                <tr>
                                    <td>
                                        {{ $admin->id }}
                                    </td>
                                    <td>
                                        <img
                                            src="{{ $admin->getFirstMediaUrl('avatar') ?: asset('assets/dist/img/user2-160x160.jpg') }}"
                                            style="width: 50px; height: 50px; object-fit: cover;"
                                            class="rounded-circle"
                                            alt="image"
                                        >
                                    </td>
                                    <td>
                                        {{ $admin->name }}
                                    </td>
                                    <td>
                                        {{ $admin->last_name }}
                                    </td>
                                    <td>
                                        {{ $admin->email }}
                                    </td>
                                    <td>
                                        <span class="tag tag-success">
                                            {{ $admin->role }}
                                        </span>
                                    </td>
                                    <td>
                                        {{ $admin->created_at->timezone('Europe/Kyiv')->format('d.m.Y') }}
                                    </td>
                                    <td>
                                        <a
                                            href="{{ route('admin.team.edit', $admin->id) }}"
                                            class="btn btn-sm btn-primary"
                                        >
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </a>
                                        <form
                                            action="{{ route('admin.team.delete', $admin->id) }}"
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

                <x-admin.pagination :paginator="$admins" />
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
