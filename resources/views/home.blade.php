@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (auth()->user()->role=="admin")
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-hover" id="default-datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>TTL</th>
                                    <th>Alamat</th>
                                    <th>Asal Sekolah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th>{{$loop->iteration}}</th>
                                        <td>{{$user['name']}}</td>
                                        <td>{{$user['email']}}</td>
                                        <td>{{$user['tempat_lahir']}}, {{date('d F Y', strtotime($user['tanggal_lahir']))}}</td>
                                        <td>{{$user['alamat_kota']}}, {{$user['alamat_provinsi']}}</td>
                                        <td>{{$user['asal_sekolah']}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h5>Anda sudah terdaftar.</h5>
                    @endif
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
