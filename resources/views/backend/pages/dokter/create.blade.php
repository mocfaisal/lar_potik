@extends('backend.layouts.index')
@section('app.title', 'Dokter - Create')

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
                url: "{{ route('dokter.add') }}",
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
            <h4 class="card-title">Tambah Dokter</h4>
        </div>
        <div class="card-body">

            <form id="frm_master" class="form form-vertical" method="POST">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="no_sip">No SIP (Surat Izin Praktek)</label>
                                <input type="text" id="no_sip" class="form-control" name="no_sip"
                                    placeholder="No SIP (Surat Izin Praktek)" />
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="no_str">No STR (Surat Tanda Registrasi)</label>
                                <input type="text" id="no_str" class="form-control" name="no_str"
                                    placeholder="No STR (Surat Tanda Registrasi)" />
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <div class="row">

                                    <div class="col-2">
                                        <input type="text" id="gelar_awal" class="form-control" name="gelar_awal"
                                            placeholder="Gelar. Ex: dr, drg" />
                                    </div>

                                    <div class="col-4">
                                        <input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap"
                                            placeholder="Nama Lengkap" />
                                    </div>

                                    <div class="col-2">
                                        <select name="gelar_akhir" id="gelar_akhir" class="form-control">
                                            <option value="">Tidak ada</option>
                                        </select>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email_dokter">Email</label>
                                <input type="email" id="email_dokter" class="form-control" name="email_dokter"
                                    placeholder="Email" />
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input type="text" id="no_hp" class="form-control" name="no_hp"
                                    placeholder="Format : +62 12341234" />
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat, Tanggal Lahir</label>
                                <div class="row">
                                    <div class="col-4">
                                        <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir"
                                            placeholder="Tempat Lahir" />
                                    </div>
                                    <div class="col-2">
                                        <input type="date" id="tgl_lahir" class="form-control" name="tgl_lahir"
                                            placeholder="Tanggal Lahir" />
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control"></textarea>
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
