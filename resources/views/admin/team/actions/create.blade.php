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
                    <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
                        @include('admin.team.actions._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
