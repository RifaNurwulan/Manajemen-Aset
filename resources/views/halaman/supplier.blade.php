@extends('Template.beranda')
@section('title', 'Supplier')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
<<<<<<< HEAD
                <h5 class="m-0 font-weight-bold text-primary">Data Pemasok</h5>
=======
                <h5 class="m-0 font-weight-bold text-primary">Data Supplier</h5>
            </div>
            <div class="row">
                <div class="col card-header">
                    <!-- <div class="input-group">
                        <form action="/supplier/search" method="GET">
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
                    </div> -->
                    <button type="button" style="float: right;" data-toggle="modal" data-target="#quoteForm" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data">
                    <i class="fa fa-plus"></i>
                </button>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
            </div>
        </div>
    <div class="card-body">
        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
            <div class="dataTable-container">
                <table class="table table-striped table-bordered table-hover dataTable-table" id="table_Supplier">
                    <thead>
                        <tr class="bg-primary text-center text-white">
                            <th><button type="button" data-toggle="modal" data-target="#quoteForm"
                                class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data" style="border: 1px solid white;  width: 110px;">
                                <i class="fa fa-plus"></i>
                                Tambah
                            </button></th>
                            <th>No</th>
                            <th>Nama Pemasok</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>PIC</th>
                            <th>Telepon</th>
                            <th>Seluler</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Notes</th>
                            <th>Status</th>
<<<<<<< HEAD
                            <th>Dibuat Oleh</th>
                            <th>Diubah Oleh</th>
=======
                            <th>Created By</th>
                            <th>Updated By</th>
                            <th>Action</th>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supplier as $item)
                        <tr>
                        @if ($item->status_supplier == 1)   
                                <a href="" class ="btn btn-sm btn danger"></a>
                                @else
                                <a href="" class ="btn btn-sm btn success"></a>
                                @endif
<<<<<<< HEAD
                            <td>
                                <div class="col-group" style="display: flex; justify-content: space-between; padding-right: 7px; padding-left: 7px;">
                                    <button type="button" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data"
                                    data-id ="{{ $item->id_supplier}}" data-nama ="{{ $item->nama_supplier}}" data-alamat ="{{ $item->alamat}}" data-kota ="{{ $item->kota}}" data-pic ="{{ $item->pic}}" data-telp ="{{ $item->telp}}" data-mobile ="{{ $item->mobile_phone}}" data-fax ="{{ $item->fax}}" data-email ="{{ $item->email}}" data-keterangan ="{{ $item->keterangan}}" >
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" data-toggle="modal" data-id = "{{ $item->id_supplier }}" data-status_supplier = "{{ $item->status_supplier }}" data-target="#quoteFormTrash" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                </div>
                            </td>
=======
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                            <td>{{ $item->id_supplier}}</td>
                            <td>{{ $item->nama_supplier}}</td>
                            <td>{{ $item->alamat}}</td>
                            <td>{{ $item->kota}}</td>
                            <td>{{ $item->pic}}</td>
                            <td>{{ $item->telp}}</td>
                            <td>{{ $item->mobile_phone}}</td>
                            <td>{{ $item->fax}}</td>
                            <td>{{ $item->email}}</td>
                            <td>{{ $item->keterangan}}</td>
<<<<<<< HEAD
                            <td>{{ ($item->status_supplier == 1) ? 'Aktif' : 'Non Aktif'}}</td>
                            <td>{{ $item->created_by}}</td>
                            <td>{{ $item->updated_by}}</td>
=======
                            <td>
                                    <span class="badge-bg-success {{ ($item->status_supplier == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->status_supplier == 1) ? 'Aktif' : 'Non Aktif'}}</span>
                                </td>
                            <td>{{ $item->created_by}}</td>
                            <td>{{ $item->updated_by}}</td>
                            <td>
                                <div class="col-group">
                                    <button type="button" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning" 
                                    data-id ="{{ $item->id_supplier}}" data-nama ="{{ $item->nama_supplier}}" data-alamat ="{{ $item->alamat}}" data-kota ="{{ $item->kota}}" data-pic ="{{ $item->pic}}" data-telp ="{{ $item->telp}}" data-mobile ="{{ $item->mobile_phone}}" data-fax ="{{ $item->fax}}" data-email ="{{ $item->email}}" data-keterangan ="{{ $item->keterangan}}" >
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" data-toggle="modal" data-id = "{{ $item->id_supplier }}" data-target="#quoteFormTrash" class="btn btn-danger">
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
            
            <div class="dataTable-bottom">
                <div class="dataTable-info">
                    
            </div>
        </div>
    </div>
    </div>
    </table>
</section>

<!--GET a QUOTE MODAL Tambah -->
<div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Pemasok</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpanSupplier')}}" method="post" id="supplierForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_supplier">Nama Pemasok<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_supplier" name="nama_supplier" type="text" placeholder="Nama Pemasok" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="alamat">Alamat<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="alamat" name="alamat" type="text" placeholder="Alamat" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kota">Kota<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kota" name="kota" type="text" placeholder="Kota" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="pic">PIC<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="pic" name="pic" type="text" placeholder="PIC" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="telp">Telepon<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="telp" name="telp" type="text" placeholder="Telepon" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="mobile_phone">Seluler<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="mobile_phone" name="mobile_phone" type="text" placeholder="Seluler" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="fax">Fax<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="fax" name="fax" type="text" placeholder="Fax" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="email">Email<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="email" name="email" type="text" placeholder="Email" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="keterangan">Notes</label>
                            <input class="form-control" id="keterangan" name="keterangan" type="text" placeholder="Notes" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6"><br>
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

<!--GET a QUOTE MODAL Edit-->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Pemasok</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
             <form enctype="multipart/form-data" method="POST" action="{{route('updateSupplier')}}" id="editForm">
                {{ csrf_field() }}
                    <div class="row">
                    <input class="form-control" id="id_supplier" name="editid_supplier" type="text" placeholder="ID" required="" hidden="true"/>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editnama_supplier">Nama Pemasok<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_supplier" name="editnama_supplier" type="text" placeholder="Nama Pemasok" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editalamat">Alamat<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="alamat" name="editalamat" type="text" placeholder="Alamat" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editkota">Kota<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kota" name="editkota" type="text" placeholder="Kota" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editpic">PIC<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="pic" name="editpic" type="text" placeholder="PIC" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="edittelp">Telepon<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="telp" name="edittelp" type="text" placeholder="Telepon" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editmobile_phone">Seluler<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="mobile_phone" name="editmobile_phone" type="text" placeholder="Seluler" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editfax">Fax<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="fax" name="editfax" type="text" placeholder="Fax" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editemail">Email<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="email" name="editemail" type="text" placeholder="Email" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editketerangan">Notes</label>
                            <input class="form-control" id="keterangan" name="editketerangan" type="text" placeholder="Notes" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6"><br>
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
<<<<<<< HEAD
                <h4 class="modal-title">Hapus Pemasok</span></h4>
=======
                <h4 class="modal-title">Hapus Supplier</span></h4>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('deletesupplier') }}">
                    {{ csrf_field() }}
                    <input class="form-control" id="id_supplier" name="id_supplier" type="text" placeholder="ID" required="" hidden="true"/>
                    <div class="row">
                        <div class="form-group col-3">
<<<<<<< HEAD
                            <label class="font-weight-bold text-small" for="status_supplier">Status Data Pemasok<span class="text-primary ml-1">*</span></label>
                            <select name="status_supplier" id="status_supplier" class="form-select" data-live-search="true">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
=======
                            <label class="font-weight-bold text-small" for="status_supplier">Status Data Supplier<span class="text-primary ml-1">*</span></label>
                            <select name="status_supplier" id="status_supplier" class="form-select" data-live-search="true">
                                <option value="1">Aktif</option>
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
    var table = $("#table_Supplier").DataTable({
        "columnDefs": [{
            "targets": 11,
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
                if (rowData[11] == 'Aktif') {
                    span.style.backgroundColor = '#198754';
                } else {
                    span.style.backgroundColor = '#dc3545';
                }
                td.innerHTML = '';
                td.appendChild(span);
            }
        }],
        initComplete: function () {
            this.api().columns([2, 3, 4, 5, 6, 7, 8, 11, 12, 13]).every(function () {
                var column = this;
                var option =
                    '<select class="btn btn-primary flex-grow-1 " style="margin-right: 5px "><option value=""></option></select>';
                if (column[0] == 2) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Nama Pemasok</option></select>';
                }
                if (column[0] == 3) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Alamat</option></select>';
                }
                if (column[0] == 4) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Kota</option></select>';
                }
                if (column[0] == 5) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">PIC</option></select>';
                }
                if (column[0] == 6) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Telepon</option></select>';
                }
                if (column[0] == 7) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Seluler</option></select>';
                }
                if (column[0] == 8) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Fax</option></select>';
                }
                if (column[0] == 9) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Email</option></select>';
                }
                if (column[0] == 11) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Status</option></select>';
                }
                if (column[0] == 12) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Dibuat Oleh</option></select>';
                }
                if (column[0] == 13) {
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
    $('#supplierForm, #editForm').submit(function (e) {
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
        $('#supplierForm input[type="text"]').val('');
        $('#supplierForm input[type="text"]').removeClass('is-invalid');
        $('.invalid-feedback').removeClass('d-block').addClass('d-none');
    });
    $("#quoteFormEdit").on('show.bs.modal', (e) => {
        // $("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormEdit").find('input[name="editid_supplier"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="editnama_supplier"]').val($(e.relatedTarget).data('nama'));
        $("#quoteFormEdit").find('input[name="editalamat"]').val($(e.relatedTarget).data('alamat'));
        $("#quoteFormEdit").find('input[name="editkota"]').val($(e.relatedTarget).data('kota'));
        $("#quoteFormEdit").find('input[name="editpic"]').val($(e.relatedTarget).data('pic'));
        $("#quoteFormEdit").find('input[name="edittelp"]').val($(e.relatedTarget).data('telp'));
        $("#quoteFormEdit").find('input[name="editmobile_phone"]').val($(e.relatedTarget).data('mobile'));
        $("#quoteFormEdit").find('input[name="editfax"]').val($(e.relatedTarget).data('fax'));
        $("#quoteFormEdit").find('input[name="editemail"]').val($(e.relatedTarget).data('email'));
        $("#quoteFormEdit").find('input[name="editketerangan"]').val($(e.relatedTarget).data('keterangan'));
    })
    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        $("#quoteFormTrash").find('input[name="id_supplier"]').val($(e.relatedTarget).data('id'));
        $("#status_supplier option[value='" + $(e.relatedTarget).data('status_supplier') + "']").prop(
                "selected", true);
    })
    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        $("#quoteFormTrash").find('input[name="id_supplier"]').val($(e.relatedTarget).data('id'));
    })
        $('#table1').DataTable();
</script>
@endpush('')