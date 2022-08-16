@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header">
                <div class="font-weight-bold text-primary">
                    <p>Form Tambah</p>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('kriteria.update', $item->id) }}" method="POST">
                    @csrf
                    @method('put')

                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Nama Kriteria</label>
                                <input type="text" name="nama_kriteria" class="form-control" value="{{ $item->nama_kriteria }}">
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Atribut</label>
                                <input type="text" name="nama_kriteria" class="form-control" value="{{ $item->atribut }}">
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Bobot</label>
                                <input type="text" name="bobot" class="form-control" value="{{ $item->bobot }}">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-4">
                                <button class="btn btn-block btn-primary">
                                    Ubah
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
