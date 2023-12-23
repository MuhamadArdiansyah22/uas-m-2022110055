@extends('layouts.master')

@section('title', 'Daftar Transaksi')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Daftar Transaksi</h2>
            <p><a href="{{ route('transactions.create') }}" class="btn btn-primary">Buat Transaksi Baru</a></p>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="bg-primary text-white">ID</th>
                        <th class="bg-primary text-white">Kategori</th>
                        <th class="bg-primary text-white">Nominal</th>
                        <th class="bg-primary text-white">Tujuan</th>
                        <th class="bg-primary text-white">ID Akun</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transactions as $transaction)
                        <tr>
                            <td class="bg-light">{{ $transaction->id }}</td>
                            <td class="bg-light">{{ $transaction->kategori }}</td>
                            <td class="bg-light">{{ $transaction->nominal }}</td>
                            <td class="bg-light">{{ $transaction->tujuan }}</td>
                            <td class="bg-light">{{ $transaction->account_id }}</td>
                            <td class="bg-light">
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="bg-light">Data Transaksi tidak ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <a href="{{ route('index') }}" class="btn btn-secondary">Kembali ke Beranda</a>
        </div>
    </div>
@endsection
