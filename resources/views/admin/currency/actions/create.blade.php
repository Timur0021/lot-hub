@extends('admin.layouts.app')
@section('title', 'Currency')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Currency</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.currency.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('admin.currency.actions._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
