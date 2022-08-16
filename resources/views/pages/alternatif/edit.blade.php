@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header">
                <div class="font-weight-bold text-primary">
                    <p>Form Ubah</p>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('alternatif.update', $item->id) }}" method="POST">
                    @csrf
                    @method('put')

                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Nama Alternatif</label>
                                <input type="text" name="nama_alternatif" class="form-control" value="{{ $item->nama_alternatif }}">
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
