@extends('admin.layouts.app')
@section('title', 'Currency')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Currencies Table</h3>

                    <div class="card-tools d-flex align-items-center gap-2">
                        @can('currencys.create')
                            <a
                                href="{{ route('admin.currency.create') }}"
                                class="btn btn-outline-primary btn-lg px-4 mr-4"
                            >
                                Create
                            </a>
                        @endcan
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
                                Code
                            </th>
                            <th>
                                Symbol
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Rate
                            </th>
                            <th>
                                Is base
                            </th>
                            <th>
                                Active
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
                            @forelse($currencies as $currency)
                                <tr>
                                    <td>
                                        {{ $currency->id}}
                                    </td>
                                    <td>
                                        {{ $currency->code}}
                                    </td>
                                    <td>
                                        {{ $currency->symbol}}
                                    </td>
                                    <td>
                                        {{ $currency->name}}
                                    </td>
                                    <td>
                                        {{ $currency->rate}}
                                    </td>
                                    <td>
                                        <x-admin.boolean-badge :value="$currency->is_base" />
                                    </td>
                                    <td>
                                        <x-admin.boolean-badge :value="$currency->active" />
                                    </td>
                                    <td>
                                        {{ $currency->created_at->timezone('Europe/Kyiv')->format('d.m.Y') }}
                                    </td>
                                    <td>
                                        @can('currencys.update')
                                            <a
                                                href="{{ route('admin.currency.edit', $currency->id) }}"
                                                class="btn btn-sm btn-primary"
                                            >
                                                <i class="fas fa-edit"></i>
                                                Edit
                                            </a>
                                        @endcan
                                        @can('currencys.delete')
                                            <form
                                                action="{{ route('admin.currency.delete', $currency->id) }}"
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
                                        @endcan
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="100%">
                                        <div class="alert alert-danger mb-0">
                                            Currencies not found
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
