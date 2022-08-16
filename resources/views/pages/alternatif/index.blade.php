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
                            <p>Tambah Alternatif</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('alternatif.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="">Nama Alternatif</label>
                                <input type="text" name="nama_alternatif" class="form-control">
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
                            <p>List Alternatif</p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Alternatif</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->nama_alternatif }}</td>
                                        <td>
                                            <a href="{{ route('alternatif.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-sm fa-pencil-alt"></i>
                                            </a>

                                            <form action="" method="POST" style="display: inline-block">
                                                @csrf
                                                @method('delete')

                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    <i class="fas fa-sm fa-trash-alt"></i>
                                                </button>
                                            </form>
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
