@extends('Template.beranda')
@section('title', 'Departement')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
<<<<<<< HEAD
                <h5 class="m-0 font-weight-bold text-primary">Departemen</h5>
=======
                <h5 class="m-0 font-weight-bold text-primary">Departement</h5>
            </div>
            <div class="row">
                <div class="col card-header">
                    <button type="button" style="float: right;" data-toggle="modal" data-target="#quoteForm" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
            </div>
        </div>
        
        <div class="card-body">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table class="table table-striped table-bordered table-hover dataTable-table" id="table_Departement">
                        <thead>
                            <tr class="bg-primary text-center text-white">
                                <th><button type="button" data-toggle="modal" data-target="#quoteForm"
                                    class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data" style="border: 1px solid white;  width: 110px;">
                                    <i class="fa fa-plus"></i>
                                    Tambah
                                </button></th>
                                <th>No</th>
                                <th>Kode Departemen</th>
                                <th>Nama Departemen</th>
                                <th>Singkatan</th>
                                <th>Status</th>
                                <th>Dibuat Oleh</th>
                                <th>Diubah Oleh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departement as $item)
                            <tr>
                                @if ($item->status == 1)   
                                <a href="" class ="btn btn-sm btn danger"></a>
                                @else
                                <a href="" class ="btn btn-sm btn success"></a>
                                @endif
<<<<<<< HEAD
=======
                                <td>{{ $item->id_departement}}</td>
                                <td>{{ $item->kode_departement}}</td>
                                <td>{{ $item->nama_departement}}</td>
                                <td>{{ $item->singkatan}}</td>
<<<<<<< HEAD
                                <td>
                                    <span class="badge-bg-success {{ ($item->status == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->status == 1) ? 'Aktif' : 'Non Aktif'}}</span>
                                </td>
=======
                                <td><span class="badge-bg-success {{ ($item->status == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->status == 1) ? 'Aktif' : 'Non Aktif'}}</span></td>
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
                                <td>{{ $item->created_by}}</td>
                                <td>{{ $item->updated_by}}</td>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                                <td>
                                    <div class="col-group" style="display: flex; justify-content: space-between; padding-right: 7px; padding-left: 7px;">
                                        <button type="button" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data"
                                        data-id = "{{ $item->id_departement}}" data-kode="{{ $item->kode_departement}}" data-nama="{{ $item->nama_departement}}" data-singkatan="{{ $item->singkatan}}">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button type="button" data-toggle="modal" data-id = "{{ $item->id_departement}}" data-status = "{{ $item->status}}" data-target="#quoteFormTrash" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                    </div>
                                </td>
                                <td>{{ $item->id_departement}}</td>
                                <td>{{ $item->kode_departement}}</td>
                                <td>{{ $item->nama_departement}}</td>
                                <td>{{ $item->singkatan}}</td>
                                <td>{{ ($item->status == 1) ? 'Aktif' : 'Non Aktif'}}</td>
                                <td>{{ $item->created_by}}</td>
                                <td>{{ $item->updated_by}}</td>
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

<!--GET a QUOTE MODAL Tambah -->
<div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Departemen</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpandepartement')}}" method="post" id="departementForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kode_departement">Kode Departemen<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_departement" name="kode_departement" type="text" placeholder="Kode Departemen" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_departement">Nama Departemen<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_departement" name="nama_departement" type="text" placeholder="Nama Departemen" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="singkatan">Singkatan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="singkatan" name="singkatan" type="text" placeholder="Singkatan" />
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
            </div>
            </form>
        </div>
    </div>
</div>


<!--GET a QUOTE MODAL Edit-->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Departemen</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updatedepartement') }}" id="editForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <input class="form-control" id="id_departement" name="editid_departement" type="text" placeholder="ID Departement" required="" hidden="true"/>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editkode_departement">Kode Departemen<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_departement" name="editkode_departement" type="text" placeholder="Kode Departement" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editnama_departement">Nama Departemen<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_departement" name="editnama_departement" type="text" placeholder="Nama Departement" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editsingkatan">Singkatan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" name="editsingkatan" type="text" placeholder="Singkatan" />
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
            </div>
            </form>
        </div>
    </div>
</div>



<!--GET a QUOTE MODAL Trash -->
<div class="modal fade" id="quoteFormTrash" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Departement</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('deletedepartement') }}">
                    {{ csrf_field() }}
                    <input class="form-control" id="id_departement" name="id_departement" type="text" placeholder="Id Departement" required="" hidden="true"/>
                    <div class="row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold text-small" for="status">Status Departement<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="status" id="status" class="form-select" data-live-search="true">
                                <option value="1">Aktif</option>
                                <option value="0">Non-Aktif</option>
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label class="font-weight-bold text-small" for="namagroupasset">Keterangan Hapus<span class="text-primary ml-1">*</span></label>
                            <textarea class="form-control" id="firstname" type="text" placeholder="Keterangan Hapus" required=""></textarea>
                        </div>
                        <div class="form-group col-lg-12"><br>
                            <button class="btn btn-success" style="float: right;" type=" submit">
                                <i class="fa fa-save"></i>
                                Save
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
    var table = $("#table_Departement").DataTable({
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
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Kode Departemen</option></select>';
                }
                if (column[0] == 3) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Nama Departemen</option></select>';
                }
                if (column[0] == 4) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Singkatan</option></select>';
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

    $('#departementForm, #editForm').submit(function (e) {
        e.preventDefault(); // hindari pengiriman form standar
        var form = $(this);
        var url = form.attr('action');
        var formData = form.serialize();
        // jika semua input sudah diisi, kirim form via ajax
        $('input').on('input', function () {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').removeClass('d-block').addClass('d-none');
        });
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
        $('#departementForm input[type="text"]').val('');
        $('#departementForm input[type="text"]').removeClass('is-invalid');
        $('.invalid-feedback').removeClass('d-block').addClass('d-none');
    });
    $("#quoteFormEdit").on('show.bs.modal', (e) => {
        //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormEdit").find('input[name="editid_departement"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="editkode_departement"]').val($(e.relatedTarget).data('kode'));
        $("#quoteFormEdit").find('input[name="editnama_departement"]').val($(e.relatedTarget).data('nama'));
        $("#quoteFormEdit").find('input[name="editsingkatan"]').val($(e.relatedTarget).data('singkatan'));
    })
    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormTrash").find('input[name="id_departement"]').val($(e.relatedTarget).data('id'));
        $("#status option[value='" + $(e.relatedTarget).data('status') + "']").prop(
            "selected", true);
    })
</script>
@endpush('')