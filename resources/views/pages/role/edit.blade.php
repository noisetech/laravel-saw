@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow">
            <div class="card-header">
                <div class="d-flex justify-content-start">
                    <div class="font-weight-bold text-dark">
                        <p>Form Ubah</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('role.update', $item->id) }}" method="POST">
                    @csrf
                    @method('put')

                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Level</label>
                                <select name="name" class="form-control">
                                    <option value="{{ $item->name }}">Data Sebelumnya({{ $item->name }})</option>
                                    <option value="admin">Admin</option>
                                    <option value="tukang">Tukang</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" cols="30" rows="10">{{ $item->deskripsi }}</textarea>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row justify-content-center mt-4">
                            <div class="col-sm-4">
                                <button class="btn btn-block btn-primary" type="submit">
                                    Simpan <i class="fas fa-sm fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
