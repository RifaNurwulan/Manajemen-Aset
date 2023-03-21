@extends('Template.beranda')
@section('title', 'Satuan')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Satuan</h5>
            </div>
<<<<<<< HEAD
=======
            <div class="row">
                <div class="col card-header">
                    <button type="button" style="float: right;" data-toggle="modal" data-target="#quoteForm" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
        </div>
        <div class="card-body">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table class="table table-striped table-bordered dataTable-table  table-hover" id="table_Satuan">
                        <thead>
                           <tr class="bg-primary text-center text-white">
                                <th><button type="button" data-toggle="modal" data-target="#quoteForm"
                                class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data" style="border: 1px solid white;  width: 110px;">
                                <i class="fa fa-plus"></i>
                                Tambah
                                </button></th>
                                <th>No</th>
                                <th>Kode Satuan</th>
                                <th>Nama Satuan</th>
                                <th>Status</th>
<<<<<<< HEAD
                                <th>Dibuat Oleh</th>
                                <th>Diubah Oleh</th>
=======
                                <th>Created By</th>
                                <th>Created At</th>
                                <th>Updated By</th>
                                <th>Updated At</th>
                                <th>Action</th>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($satuan as $item)
                            <tr>
                            @if ($item->status_satuan == 1)   
                                <a href="" class ="btn btn-sm btn danger"></a>
                                @else
                                <a href="" class ="btn btn-sm btn success"></a>
                                @endif
<<<<<<< HEAD
                                <td>
                                    <div class="col-group" style="display: flex; justify-content: space-between; padding-right: 7px; padding-left: 7px;">
                                        <button type="button" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data"
                                        data-id = "{{ $item->id_satuan }}" data-kode = "{{ $item->kode_satuan }}" data-nama_satuan = "{{ $item->nama_satuan }}" data-created_by = "{{ $item->created_by }}" 
                                        data-created_at = "{{ $item->created_at }}" data-updated_by = "{{ $item->updated_by }}" data-updated_by = "{{ $item->updated_by }}">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button type="button" data-toggle="modal" data-id = "{{ $item->id_satuan }}" data-status_satuan = "{{ $item->status_satuan }}" data-target="#quoteFormTrash" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                    </div>
                                </td>
                                <td>{{ $item->id_satuan}}</td>
                                <td>{{ $item->kode_satuan}}</td>
                                <td>{{ $item->nama_satuan}}</td>
                                <td>{{ ($item->status_satuan == 1) ? 'Aktif' : 'Non Aktif'}}</td>
=======
                                <td>{{ $item->id_satuan}}</td>
                                <td>{{ $item->kode_satuan}}</td>
                                <td>{{ $item->nama_satuan}}</td>
                                <td>
                                    <span class="badge-bg-success {{ ($item->status_satuan == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->status_satuan == 1) ? 'Aktif' : 'Non Aktif'}}</span>
                                </td>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                                <td>{{ $item->created_by}}</td>
                                <td>{{ $item->updated_by}}</td>
<<<<<<< HEAD
=======
                                <td>{{ $item->updated_at}}</td>
                                <td>
                                    <div class="col-group">
                                        <button type="button" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning"
                                        data-id = "{{ $item->id_satuan }}" data-kode = "{{ $item->kode_satuan }}" data-nama_satuan = "{{ $item->nama_satuan }}" data-created_by = "{{ $item->created_by }}" 
                                        data-created_at = "{{ $item->created_at }}" data-updated_by = "{{ $item->updated_by }}" data-updated_by = "{{ $item->updated_by }}">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button type="button" data-toggle="modal" data-id = "{{ $item->id_satuan }}" data-target="#quoteFormTrash" class="btn btn-danger">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                    </div>
                                </td>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </table>
</section>

<!--GET a QUOTE MODAL -->
<div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Satuan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpanSatuan')}}" method="post" id="satuanForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="kode_satuan">Kode Satuan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_satuan" name="kode_satuan" type="text" placeholder="Kode Satuan" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-8">
                            <label class="font-weight-bold text-small" for="nama_satuan">Nama Satuan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_satuan" name="nama_satuan" type="text" placeholder="Nama Satuan" />
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
                <h4 class="modal-title">Edit Data Satuan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
<<<<<<< HEAD
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updatesatuan') }}" id="editForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <input class="form-control" id="id_satuan" name="editid_satuan" type="text" placeholder="ID Jabatan" required="" hidden="true"/>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kode_satuan">Kode Satuan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_satuan" name="editkode_satuan" type="text" placeholder="Kode Satuan" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editnama_satuan">Nama Satuan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_satuan" name="editnama_satuan" type="text" placeholder="Nama Satuan" />
                            <div class="invalid-feedback">
                            </div>
=======
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updatesatuan') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <input class="form-control" id="id_satuan" name="id_satuan" type="text" placeholder="ID Jabatan" required="" hidden="true"/>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kode_satuan">Kode Jabatan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_satuan" name="kode_satuan" type="text" placeholder="Kode Satuan" required="" />
                            @error('kode_satuan')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_satuan">Jabatan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_satuan" name="nama_satuan" type="text" placeholder="Nama Satuan" required="" />
                            @error('nama_satuan')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                        </div>
                        <div class="form-group col-lg-12"><br>
                            <button class="btn btn-success" style="float: right;" type="submit">
                                <i class="fa fa-save"></i>
<<<<<<< HEAD
                                Simpan
=======
                                Save
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
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
                <h4 class="modal-title">Hapus Satuan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('deletesatuan') }}">
                    {{ csrf_field() }}
                    <input class="form-control" id="id_satuan" name="id_satuan" type="text" placeholder="ID" required="" hidden="true"/>
                    <div class="row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold text-small" for="status_satuan">Status Data Satuan<span class="text-primary ml-1">*</span></label>
                            <select name="status_satuan" id="status_satuan" class="form-select" data-live-search="true">
                                <option value="1">Aktif</option>
<<<<<<< HEAD
                                <option value="0">Tidak Aktif</option>
=======
                                <option value="0">Non-Aktif</option>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label class="font-weight-bold text-small" for="ket">Keterangan Hapus<span class="text-primary ml-1">*</span></label>
                            <textarea class="form-control" id="ket" type="text" placeholder="Keterangan Hapus" required=""></textarea>
                        </div>
                        <div class="form-group col-lg-12"><br>
                            <button class="btn btn-success" style="float: right;" type="submit">
                                <i class="fa fa-save"></i>
<<<<<<< HEAD
                                Simpan
=======
                                Save
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
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
<script>
<<<<<<< HEAD
    var table = $("#table_Satuan").DataTable({
        "columnDefs": [{
            "targets": 4,
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
                if (rowData[4] == 'Aktif') {
                    span.style.backgroundColor = '#198754';
                } else {
                    span.style.backgroundColor = '#dc3545';
                }
                td.innerHTML = '';
                td.appendChild(span);
            }
        }],
        initComplete: function () {
            this.api().columns([2, 3, 4, 5, 6]).every(function () {
                var column = this;
                var option =
                    '<select class="btn btn-primary flex-grow-1 " style="margin-right: 5px "><option value=""></option></select>';
                if (column[0] == 2) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Kode Satuan</option></select>';
                }
                if (column[0] == 3) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Nama Satuan</option></select>';
                }
                if (column[0] == 4) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Status</option></select>';
                }
                if (column[0] == 5) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Dibuat Oleh</option></select>';
                }
                if (column[0] == 6) {
                    option =
                    '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Diubah Oleh</option></select>';
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
    $('#satuanForm, #editForm').submit(function (e) {
        // alert("hooww");
        e.preventDefault(); // hindari pengiriman form standar
        var form = $(this);
        var url = form.attr('action');
        var formData = form.serialize();

        $('input').on('input', function () {
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
                        var input = $('input[name="' + key + '"]');
                        input.addClass('is-invalid');
                        input.next('.invalid-feedback').text(value).removeClass('d-none').addClass('d-block');
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
        $('#satuanForm input[type="text"]').val('');
        $('#satuanForm input[type="text"]').removeClass('is-invalid');
        $('.invalid-feedback').removeClass('d-block').addClass('d-none');
    });

    $("#quoteFormEdit").on('show.bs.modal', (e) => {
        $("#quoteFormEdit").find('input[name="editid_satuan"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="editkode_satuan"]').val($(e.relatedTarget).data('kode'));
        $("#quoteFormEdit").find('input[name="editnama_satuan"]').val($(e.relatedTarget).data('nama_satuan'));
    })
    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        $("#quoteFormTrash").find('input[name="id_satuan"]').val($(e.relatedTarget).data('id'));
        $("#status_satuan option[value='" + $(e.relatedTarget).data('status_satuan') + "']").prop(
                "selected", true);
=======
    $("#quoteFormEdit").on('show.bs.modal', (e) => {
        $("#quoteFormEdit").find('input[name="id_satuan"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="kode_satuan"]').val($(e.relatedTarget).data('kode'));
        $("#quoteFormEdit").find('input[name="nama_satuan"]').val($(e.relatedTarget).data('nama_satuan'));
    })
    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        $("#quoteFormTrash").find('input[name="id_satuan"]').val($(e.relatedTarget).data('id'));
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
    })
</script>
@endpush('')