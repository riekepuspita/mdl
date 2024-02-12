@extends('layout.app')

@section('title')
    Data Penyewa
@endsection

@section('content')
    @include('layout.header')
    @include('layout.sidebar')
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <a href="{{ route('dasbor') }}"></a>
                    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                            <div class="d-flex flex-column flex-column-fluid">
                                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                                    <div id="kt_app_toolbar_container"
                                        class="app-container container-xxl d-flex flex-stack">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div clas="row">
                                    <!doctype html>
                                    <html lang="en">

                                    <head>
                                        <!-- Required meta tags -->
                                        <meta charset="utf-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1">

                                        <!-- Bootstrap CSS -->
                                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                                            rel="stylesheet"
                                            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                                            crossorigin="anonymous">

                                        <title>MDL TRANSPORT</title>
                                    </head>

                                    <body>
                                        <h1 class="text-center mb-4">Data Penyewa</h1>
                                        <div class="container">
                                            <a href="/tambahpenyewa" type="button" class="btn btn-success">Tambah Data</a>
                                            <div class="row">
                                                @if ($message = Session::get('sucess'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @else
                                                @endif
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Jenis Kelamin</th>
                                                            <th scope="col">Alamat</th>
                                                            <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $no = 1;
                                                        @endphp
                                                        @foreach ($data as $row)
                                                            <tr>
                                                                <th scope="row">{{ $no++ }}</th>
                                                                <td>{{ $row->nama }}</td>
                                                                <td>{{ $row->jeniskelamin }}</td>
                                                                <td>{{ $row->alamat }}</td>
                                                                <td>
                                                                    <a href="/tampilkandata/{{ $row->id }}"
                                                                        class="btn btn-warning">Edit</a>
                                                                    <a href="/delete/{{ $row->id }}"
                                                                        class="btn btn-danger">Delete</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>



                                        <!-- Optional JavaScript; choose one of the two! -->

                                        <!-- Option 1: Bootstrap Bundle with Popper -->


                                        <!-- Option 2: Separate Popper and Bootstrap JS -->
                                        <!--
                                                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                                                                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
                                                            </script>
                                                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                                                                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
                                                            </script>
                                                            -->
                                    </body>

                                    </html>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layout.footer')
    </div>
    </div>
@endsection

@section('script')
    <script>
        swal("Hello world!");
    </script>
@endsection
