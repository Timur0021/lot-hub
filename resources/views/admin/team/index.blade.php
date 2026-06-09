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

                        <div class="input-group" style="width: 300px;">
                            <input type="text" name="table_search"
                                   class="form-control form-control-lg"
                                   placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Role</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($admins as $admin)
                                <tr>
                                    <td>{{ $admin->id }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td><span class="tag tag-success">{{ $admin->role }}</span></td>
                                    <td>{{ $admin->created_at->timezone('Europe/Kyiv')->format('d.m.Y') }}</td>
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
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
