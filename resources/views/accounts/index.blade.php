@extends('layouts.master')

@section('title', 'Daftar Akun')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Daftar Akun</h2>
            <p><a href="{{ route('accounts.create') }}" class="btn btn-primary">Buat Akun Baru</a></p>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="bg-info text-white">ID</th>
                        <th class="bg-info text-white">Nama</th>
                        <th class="bg-info text-white">Jenis</th>
                        <th class="bg-info text-white">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($accounts as $account)
                        <tr>
                            <td class="bg-light">{{ $account->id }}</td>
                            <td class="bg-light">{{ $account->nama }}</td>
                            <td class="bg-light">{{ $account->jenis }}</td>
                            <td class="bg-light">
                                <a href="{{ route('accounts.edit', $account->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('accounts.destroy', $account->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Yakin mau hapus Akun ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="bg-light">Data Akun tidak ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <a href="{{ route('index') }}" class="btn btn-secondary">Kembali ke Beranda</a>
        </div>
    </div>
@endsection
