@extends('admin.layouts.app')
@section('title', 'Edit Currency')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Currency</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.currency.update', $currency->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        @include('admin.currency.actions._form', [
                            'currency' => $currency
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
