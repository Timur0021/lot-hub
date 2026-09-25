@extends('admin.layouts.app')
@section('title', 'Settings')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Settings Table</h3>

                    <div class="card-tools d-flex align-items-center gap-2">
{{--                        <x-admin.per-page />--}}

{{--                        @can('admins.create')--}}
{{--                            <a--}}
{{--                                href="{{ route('admin.team.create') }}"--}}
{{--                                class="btn btn-outline-primary btn-lg px-4 mr-4"--}}
{{--                            >--}}
{{--                                Create--}}
{{--                            </a>--}}
{{--                        @endcan--}}

{{--                        <x-admin.search-input name="admin_search" width="350px"/>--}}
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
                                Name
                            </th>
                            <th>
                                Date
                            </th>
{{--                            <th>--}}
{{--                                Actions--}}
{{--                            </th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Якийсь буде текст
                            </td>
                            <td>
                                21.10.2026
                            </td>
                        </tr>
{{--                        @forelse($admins as $admin)--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    {{ $admin->id }}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <img--}}
{{--                                        src="{{ $admin->getFirstMediaUrl('avatar') ?: asset('assets/dist/img/user2-160x160.jpg') }}"--}}
{{--                                        style="width: 50px; height: 50px; object-fit: cover;"--}}
{{--                                        class="rounded-circle"--}}
{{--                                        alt="image"--}}
{{--                                    >--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{ $admin->name }}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{ $admin->last_name }}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{ $admin->email }}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                        <span class="tag tag-success">--}}
{{--                                            {{ $admin->role }}--}}
{{--                                        </span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{ $admin->created_at->timezone('Europe/Kyiv')->format('d.m.Y') }}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    @can('admins.update')--}}
{{--                                        <a--}}
{{--                                            href="{{ route('admin.team.edit', $admin->id) }}"--}}
{{--                                            class="btn btn-sm btn-primary"--}}
{{--                                        >--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                            Edit--}}
{{--                                        </a>--}}
{{--                                    @endcan--}}
{{--                                    @can('admins.delete')--}}
{{--                                        <form--}}
{{--                                            action="{{ route('admin.team.delete', $admin->id) }}"--}}
{{--                                            method="POST"--}}
{{--                                            style="display:inline-block"--}}
{{--                                            onsubmit="return confirm('Are you sure?')"--}}
{{--                                        >--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}

{{--                                            <button type="submit" class="btn btn-sm btn-danger">--}}
{{--                                                <i class="fas fa-trash"></i>--}}
{{--                                                Delete--}}
{{--                                            </button>--}}
{{--                                        </form>--}}
{{--                                    @endcan--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @empty--}}
{{--                            <tr>--}}
{{--                                <td colspan="100%">--}}
{{--                                    <div class="alert alert-danger mb-0">--}}
{{--                                        Admins not found--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforelse--}}
                        </tbody>
                    </table>
                </div>

{{--                <x-admin.pagination :paginator="$admins" />--}}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
