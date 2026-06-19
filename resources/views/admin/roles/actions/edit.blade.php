@extends('admin.layouts.app')
@section('title', 'Role')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Role</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        @include('admin.roles.actions._form', [
                            'role' => $role
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
