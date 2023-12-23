@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Data Akun</h5>
                    <p class="card-text h2">{{ $jumlahAccount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 bg-success text-white">
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
                <div class="card-header bg-info">
                    <h5 class="card-title">List Akun</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
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


    </table>


@endsection
