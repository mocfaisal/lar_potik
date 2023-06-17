@extends('backend.layouts.index')
@section('app.title', 'Dokter')

{{-- Resources --}}
{{-- External Code --}}
@section('private.css.file')

@endsection

@section('private.js.file')

@endsection

{{-- Internal Code --}}
@section('private.css.code')

@endsection

@section('private.js.code')

@endsection

{{-- Content --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">List Dokter</h4>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-2">
                    <a class="btn icon btn-primary rounded-pill" href="{{ route('dokter.create') }}">
                        <i class="bi bi-plus-circle"></i> Add Data
                    </a>
                </div>
            </div>

            <hr>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telp.</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
@endsection
