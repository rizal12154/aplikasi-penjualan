@extends('layouts.template')

@section('title', 'List User')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah User</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $get)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $get->name }}</td>
                                    <td>{{ $get->username }}</td>
                                    <td>{{ $get->email }}</td>
                                    <td>{{ $get->role }}</td>
                                    <td>{{ $get->status }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/tambah_master"><i
                                                        class="ri-pencil-line me-1"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" href="/hapus"><i
                                                        class="ri-delete-bin-7-line me-1"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
