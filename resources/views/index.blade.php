@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Data Akun Terdaftar</h5>
                    <p class="card-text h2">{{ $jumlahAccount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Data Transaksi</h5>
                    <p class="card-text h2">{{ $jumlahTransaksi }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">List Akun</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $account)
                                <tr>
                                    <td>{{ $account->id }}</td>
                                    <td>{{ $account->nama }}</td>
                                    <td>{{ $account->jenis }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">List Transaksi</h5>
                </div>
                <div class="card-body">
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
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->kategori }}</td>
                                    <td>{{ $transaction->nominal }}</td>
                                    <td>{{ $transaction->tujuan }}</td>
                                    <td>{{ $transaction->account_id }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="{{ route('transactions.index') }}" class="btn btn-primary">Ke Master Transaction</a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('accounts.index') }}" class="btn btn-primary">Ke Master Account</a>
        </div>
    </div>
@endsection
