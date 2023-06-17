@extends('backend.layouts.index')
@section('app.title', 'obat - Create')

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

    <script>
        $('#btn_save').on('click', function(e) {
            var form = $('#frm_master');

            $.ajax({
                url: "{{ route('obat.add') }}",
                type: 'post',
                data: form.serializeArray()
            }).done(function(response) {

                var msg = response.msg ?? 'Unknow Error';

                if (response.success) {

                    Swal.fire(
                        'Success',
                        msg,
                        'success'
                    );
                } else {
                    Swal.fire(
                        'Error',
                        msg,
                        'error'
                    );
                }
            });


        });
    </script>

@endsection

{{-- Content --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah obat</h4>
        </div>
        <div class="card-body">

            <form class="form form-vertical" id="frm_master" method="POST">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nm_dagang">Nama Dagang</label>
                                <input type="text" class="form-control" name="nm_dagang" id="nm_dagang"
                                    placeholder="Nama Dagang">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="nm_generik">Nama Generik</label>
                                <input type="text" class="form-control" name="nm_generik" id="nm_generik"
                                    placeholder="Nama Generik">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="golongan_obat">Golongan Obat</label>
                                <select class="form-select choices multiple-remove" name="golongan_obat" id="golongan_obat"
                                    multiple="multiple">
                                    <option>IT</option>
                                    <option>Blade Runner</option>
                                    <option>Thor Ragnarok</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="dosis">Dosis</label>
                                <input type="text" class="form-control" name="dosis" id="dosis"
                                    placeholder="Dosis">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="bentuk_sediaan">Bentuk Sediaan</label>
                                <input type="text" class="form-control" name="bentuk_sediaan" id="bentuk_sediaan"
                                    placeholder="Ex : tablet, botol, kapsul">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="pabrik">Pabrik</label>
                                <input type="text" class="form-control" name="pabrik" id="pabrik"
                                    placeholder="Ex : PT. xxx">
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="harga_beli">Harga Beli</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="text" class="form-control" name="harga_beli" id="harga_beli"
                                        placeholder="Harga Beli">
                                    <span class="input-group-text">,-</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="harga_beli">Harga Jual</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="text" class="form-control" name="harga_jual" id="harga_jual"
                                        placeholder="Harga Jual">
                                    <span class="input-group-text">,-</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
                                <label for="keterangan">Keterangan</label>
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary me-1 mb-1" id="btn_save"> Save </button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1"> Reset </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
