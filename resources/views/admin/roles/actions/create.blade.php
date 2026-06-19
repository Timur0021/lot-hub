@extends('admin.layouts.app')
@section('title', 'Role')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Role</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.roles.store') }}" method="POST">
                        @include('admin.roles.actions._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
