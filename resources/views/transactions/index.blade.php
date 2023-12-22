@extends('layouts.master')

@section('title', 'Daftar Transaksi')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Daftar Transaksi</h2>
            <p><a href="{{ route('transactions.create') }}" class="btn btn-primary">Buat Transaksi Baru</a></p>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Nominal</th>
                        <th>Tujuan</th>
                        <th>ID Akun</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->kategori }}</td>
                            <td>{{ $transaction->nominal }}</td>
                            <td>{{ $transaction->tujuan }}</td>
                            <td>{{ $transaction->account_id }}</td>
                            <td>
                                <!-- Add action buttons as needed -->
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Data Transaksi tidak ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <a href="{{ route('index') }}" class="btn btn-secondary">Kembali ke Beranda</a>
        </div>
    </div>
@endsection
