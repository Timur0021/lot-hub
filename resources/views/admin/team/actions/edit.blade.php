@extends('admin.layouts.app')
@section('title', 'Edit Admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Admin</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.team.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        @include('admin.team.actions._form', [
                            'admin' => $admin
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
