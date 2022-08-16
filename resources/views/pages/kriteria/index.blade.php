@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="row">
            <div class="col-sm-4">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="font-weight-bold text-primary">
                            <p>Tambah Kriteria</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kriteria.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="">Nama Kriteria</label>
                                <input type="text" name="nama_kriteria" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Atrribut</label>
                                <input type="text" name="atribut" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Bobot</label>
                                <input type="number" name="bobot" class="form-control">
                            </div>

                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <button class="btn btn-block btn-success" type="submit">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="font-weight-bold text-primary">
                            <p>List Kriteria</p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kriteria</th>
                                        <th>Atribut</th>
                                        <th>Bobot</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kriteria as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->nama_kriteria }}</td>
                                        <td>{{ $item->atribut }}</td>
                                        <td>{{ $item->bobot }}</td>
                                        <td>
                                            <a href="{{ route('kriteria.show', $item->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-sm fa-eye"></i>
                                            </a>

                                            <a href="{{ route('kriteria.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-sm fa-pencil-alt"></i>
                                            </a>

                                            <a href="{{ route('kriteria.destroy', $item->id) }}" class="btn btn-sm btn-danger">
                                                <i class="fas fa-sm fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
