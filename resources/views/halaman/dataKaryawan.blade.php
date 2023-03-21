@extends('Template.beranda')
@section('title', 'Data Karyawan')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Data Karyawan</h5>
            </div>
            <!-- <div class="row">
                <div class="col card-header">
                    <div class="input-group">
                        <form action="/dataKaryawan/search" method="GET">
                            <div class="input-group input-group-lg">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" value="SEARCH">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                                <div class="col-10">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Search..." name="search" value="{{ old('search') }}">
                                </div>
                        </form>
                    </div>-->
        </div> 
    <div class="card-body">
        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
            <div class="dataTable-container">
                <table class="table table-striped table-bordered table-hover dataTable-table" id="table_Karyawan">
                    <thead>
                        <tr class="bg-primary text-center text-white">
                            <th><button type="button" data-toggle="modal" data-target="#quoteForm"
                                class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data" style="border: 1px solid white;  width: 110px;">
                                <i class="fa fa-plus"></i>
                                Tambah
                            </button></th>
                            <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>NIK</th>
                            <th>Nama Jabatan</th>
                            <th>Status</th>
                            <th>Dibuat Oleh</th>
                            <th>Diubah Oleh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datakaryawan as $item)
                        <tr>
                            @if ($item->status_data_karyawan == 1)
                            <a href="" class="btn btn-sm btn danger"></a>
                            @else
                            <a href="" class="btn btn-sm btn success"></a>
                            @endif
                            <td>
                                <div class="col-group" style="display: flex; justify-content: space-between; padding-right: 7px; padding-left: 7px;">
                                    <button type="button" data-toggle="modal" data-target="#quoteFormEdit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data"
                                        class="btn btn-warning" data-id="{{ $item->id_karyawan }}"
                                        data-nama="{{ $item->nama_karyawan }}" data-nik="{{ $item->nik }}"
                                        data-jabatan="{{ $item->id_jabatan }}" data-id_jabatan = "{{ $item->id_jabatan }}">
                                        <i class="fa fa-edit"></i>
                                    </button>

                                    <button type="button" data-toggle="modal" data-id="{{ $item->id_karyawan }}" data-status_data_karyawan="{{ $item->status_data_karyawan }}"
                                        data-target="#quoteFormTrash" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                </div>
                            </td>
                            <td>{{ $item->id_karyawan}}</td>
                            <td>{{ $item->nama_karyawan}}</td>
                            <td>{{ $item->nik}}</td>
                            <td>{{ $item->desc_jabatan}}</td>
                            <td>{{ ($item->status_data_karyawan == 1) ? 'Aktif' : 'Non Aktif'}}</td>
                            <td>{{ $item->created_by}}</td>
                            <td>{{ $item->updated_by}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- {{ $datakaryawan->links() }} --}}


        </div>
    </div>
    </div>
    </table>
</section>

<!--GET a QUOTE MODAL Tambah-->
<div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Karyawan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <!-- <div class="alert alert-danger" style="display:none"></div> -->
                <form action="{{route('simpandataKaryawan')}}" method="post" id="dataKaryawanForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_karyawan">Nama Karyawan<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_karyawan" name="nama_karyawan" type="text" placeholder="Nama Karyawan" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nik" >NIK<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nik" name="nik" type="text" placeholder="NIK"  value="{{ $kode }}" readonly="readonly" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_jabatan">Nama Jabatan<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_jabatan" data-live-search="true" class="form-select">
                                <option value="">- Pilih -</option>
                                @foreach($jabatan as $row)
                                <option value="{{$row->id_jabatan}}"
                                    {{ old('jabatan')==$row->id_jabatan?'selected' :null}}>{{$row->desc_jabatan}}
                                </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-12"><br>
                            <button class="btn btn-success" style="float: right;" type="submit">
                                <i class="fa fa-save"></i>
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--GET a QUOTE MODAL edit-->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Karyawan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updatedatakaryawan') }}" id="editForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <input class="form-control" id="id_karyawan" name="editid_karyawan" type="text"
                            placeholder="ID Karyawan" required="" hidden="true" />
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editnama_karyawan">Nama Karyawan<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_karyawan" name="editnama_karyawan" type="text"
                                placeholder="Nama Karyawan" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editnik">NIK<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nik" name="editnik" type="text" placeholder="NIK" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editid_jabatan">Nama Jabatan<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="editid_jabatan" id="jabatan_id" data-live-search="true" class="form-select">
                            <option value="">- Pilih -</option>    
                            @foreach($jabatan as $row)
                                <option value="{{$row->id_jabatan}}" {{ old('jabatan')==$row->id_jabatan?'selected' :null}}>{{$row->desc_jabatan}}</option>
                                @endforeach
                            </select>    
                            <div class="invalid-feedback">
                            </div>

                        </div>
                        <div class="form-group col-lg-12"><br>
                            <button class="btn btn-success" style="float: right;" type="submit">
                                <i class="fa fa-save"></i>
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--GET a QUOTE MODAL Trash -->
<div class="modal fade" id="quoteFormTrash" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Karyawan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('deletedatakaryawan') }}">
                    {{ csrf_field() }}
                    <input class="form-control" id="id_karyawan" name="id_karyawan" type="text" placeholder="ID"
                        required="" hidden="true" />
                    <div class="row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold text-small" for="status_data_karyawan">Status Data
                                Karyawan<span class="text-primary ml-1">*</span></label>
                            <select name="status_data_karyawan" id="status_data_karyawan" class="form-select"
                                data-live-search="true">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label class="font-weight-bold text-small" for="ket">Keterangan Hapus<span
                                    class="text-primary ml-1">*</span></label>
                            <textarea class="form-control" id="ket" type="text" placeholder="Keterangan Hapus"
                                required=""></textarea>
                        </div>
                        <div class="form-group col-lg-12"><br>
                            <button class="btn btn-success" style="float: right;" type="submit">
                                <i class="fa fa-save"></i>
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@push('script')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script.js') }}"></script>

     -->
<script>

var table = $("#table_Karyawan").DataTable({
        "columnDefs": [{
            "targets": 5,
            "createdCell": function (td, cellData, rowData, row, col) {
                // console.log(td);
                // console.log(cellData);
                // console.log(row);
                // console.log(col);
                var span = document.createElement('span');
                span.innerHTML = cellData;
                // badge:empty{display:none}.btn .badge{position:relative;top:-1px}
                span.style.borderRadius = '.25rem';
                span.style.padding = '.35em .65em';
                span.style.fontSize = '.85em';
                span.style.color = '#fff';
                span.style.fontWeight = '700';
                span.style.lineHeight = '1';
                span.style.textAlign = 'center';
                span.style.whiteSpace = 'nowrap';
                span.style.verticalAlign = 'baseline';
                span.style.display = 'inline-block';
                span.style.top = '-1px';
                if (rowData[5] == 'Aktif') {
                    span.style.backgroundColor = '#198754';
                } else {
                    span.style.backgroundColor = '#dc3545';
                }
                td.innerHTML = '';
                td.appendChild(span);
            }
        }],
        initComplete: function () {
            this.api().columns([2, 3, 4, 5, 6, 7]).every(function () {
                var column = this;
                var option =
                    '<select class="btn btn-primary flex-grow-1 " style="margin-right: 5px "><option value=""></option></select>';
                if (column[0] == 2) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Nama Karyawan</option></select>';
                }
                if (column[0] == 3) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">NIK</option></select>';
                }
                if (column[0] == 4) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Nama Jabatan</option></select>';
                }
                if (column[0] == 5) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Status</option></select>';
                }
                if (column[0] == 6) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Dibuat Oleh</option></select>';
                }
                if (column[0] == 7) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;" ><option value="">Diubah Oleh</option></select>';
                }
                var select = $(option)
                    // .appendTo( $('#search_test') )
                    .appendTo($(column.header()).empty())
                    .on('change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
                        console.log(val);
                        column
                            .search(val ? '^' + val + '$' : '', true, false)
                            .draw();
                    });

                column.data().unique().sort().each(function (d, j) {
                    var nilai = d;
                    // if (column[0] == 18) {
                    //     console.log(d);
                    //     const myArray = d.split("\n");
                    //     let word = myArray[1];
                    //     nilai = word.replace(/\s/g, '');
                    // }

                    select.append('<option value="' + d + '">' + d + '</option>')
                });
            });
        }
    });

  // ketika modal ditampilkan
  $('#quoteForm').on('show.bs.modal', function () {
    // buat permintaan AJAX untuk mendapatkan kode aset
    $.ajax({
      url: '/getKodeNik',
      type: 'GET',
      success: function(data) {
        // tetapkan nilai kode aset ke input kode aset
        $('#nik').val(data);
      }
    });
  });
   
    $('#dataKaryawanForm, #editForm').submit(function (e) {
        // alert("hooww");
        e.preventDefault(); // hindari pengiriman form standar
        var form = $(this);
        var url = form.attr('action');
        var formData = form.serialize();

        $('input, select').on('input change', function () {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').removeClass('d-block').addClass('d-none');
        });
        // jika semua input sudah diisi, kirim form via ajax
        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            success: function (data) {
                console.log(data);
                console.log(data.status);
                if (data.status == 0) {
                    var errors = data.messages;
                    $.each(errors, function (key, value) {
                        if ($('select[name="' + key + '"]').length) { // jika input adalah select
                            var input = $('select[name="' + key + '"]');
                            input.addClass('is-invalid');
                            input.next('.invalid-feedback').text(value).removeClass('d-none').addClass('d-block');
                        } else { // jika input adalah input biasa
                            var input = $('[name="' + key + '"]');
                            input.addClass('is-invalid');
                            input.next('.invalid-feedback').text(value).removeClass('d-none').addClass('d-block');
                        } 
                    });
                } else {
                    $('.invalid-feedback').removeClass('d-block').addClass('d-none'); // sembunyikan semua pesan error
                    $('.is-invalid').removeClass('is-invalid'); // hapus class "is-invalid" dari input yang telah valid
                    $('#modal').modal('hide');
                    location.reload(); // Perbarui halaman web agar data yang baru disimpan dapat ditampilkan pada tabel
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    });
    $("#quoteForm, #quoteFormEdit").on("hidden.bs.modal", function () {
        $('#editForm input[type="text"]').val('');
        $('#editForm input[type="text"]').removeClass('is-invalid');
        $('#editForm select').removeClass('is-invalid');
        $('#editForm select option:selected').prop("selected", false);
        $('#dataKaryawanForm input[type="text"]').val('');
        $('#dataKaryawanForm input[type="text"]').removeClass('is-invalid');
        $('#dataKaryawanForm select').removeClass('is-invalid');
        $('#dataKaryawanForm select option:selected').prop("selected", false);
        $('.invalid-feedback').removeClass('d-block').addClass('d-none');
    });
    $("#quoteFormEdit").on('show.bs.modal', (e) => {
        $("#quoteFormEdit").find('input[name="editid_karyawan"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="editnama_karyawan"]').val($(e.relatedTarget).data('nama'));
        $("#quoteFormEdit").find('input[name="editnik"]').val($(e.relatedTarget).data('nik'));
        // $("#quoteFormEdit").find('input[name="id_jabatan"]').val($(e.relatedTarget).data('id_jabatan'));
        $("#jabatan_id option[value="+$(e.relatedTarget).data('id_jabatan')+"]").prop("selected", true);
    })
    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        $("#quoteFormTrash").find('input[name="id_karyawan"]').val($(e.relatedTarget).data('id'));
        $("#status_data_karyawan option[value='" + $(e.relatedTarget).data('status_data_karyawan') + "']").prop(
                "selected", true);
    })
</script>
@endpush('')