@extends('backend.layouts.index')
@section('app.title', 'Obat')

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
            <h4 class="card-title">List Obat</h4>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-2">
                    <a class="btn icon btn-primary rounded-pill" href="{{ route('obat.create') }}">
                        <i class="bi bi-plus-circle"></i> Add Data
                    </a>
                </div>
            </div>

            <hr>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td rowspan="2" style="vertical-align: middle; text-align: center;">No</td>
                            <td colspan="2" style="vertical-align: middle; text-align: center;">Nama</td>
                            <td rowspan="2" style="vertical-align: middle; text-align: center;">Golongan</td>
                            <td rowspan="2" style="vertical-align: middle; text-align: center;">Bentuk Sediaan</td>
                            <td rowspan="2" style="vertical-align: middle; text-align: center;">Action</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: middle; text-align: center;">Dagang</td>
                            <td style="vertical-align: middle; text-align: center;">Generik</td>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
@endsection
