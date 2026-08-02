@extends('admin.layouts.app')
@section('title', 'Currency')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Currencies Table</h3>

                    <div class="card-tools d-flex align-items-center gap-2">
                        <x-admin.per-page />

                        @can('currencys.create')
                            <a
                                href="{{ route('admin.currency.create') }}"
                                class="btn btn-outline-primary btn-lg px-4 mr-4"
                            >
                                Create
                            </a>
                        @endcan

                        <x-admin.search-input name="admin_search" width="350px"/>
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
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    USD
                                </td>
                                <td>
                                    $
                                </td>
                                <td>
                                    1.00
                                </td>
                                <td>
                                    Yes
                                </td>
                                <td>
                                    Yes
                                </td>
                                <td>
                                    2023-01-01
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
