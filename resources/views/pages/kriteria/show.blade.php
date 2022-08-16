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
                            <p>Tambah Crips</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('crips.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="">Nama Crips</label>
                                <input type="text" name="nama_crips" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Bobot Crips</label>
                                <input type="number" name="bobot_crips" class="form-control">
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
                            <p>List Crips</p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Crips</th>
                                        <th>Bobot Crips</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
