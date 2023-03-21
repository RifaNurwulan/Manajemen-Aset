@extends('Template.beranda')
@section('title', 'User')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Tambah User</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table class="table table-striped table-bordered dataTable-table  table-hover" id="table_User">
                        <thead>
                            <tr class="bg-primary text-center text-white">
                                <th><button type="button" data-toggle="modal" data-target="#quoteForm"
                                class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data" style="border: 1px solid white;  width: 110px;">
                                <i class="fa fa-plus"></i>
                                Tambah
                                </button></th>
                                <th>No</th>
                                <th>Nama Karyawan</th>
                                <th>Email</th>
                                <th>Status User</th>
                                <th>Dibuat Oleh</th>
                                <th>Diubah Oleh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                                @if ($item->status_user == 1) 
                                <a href="" class ="btn btn-sm btn success"></a>  
                                @else
                                <a href="" class ="btn btn-sm btn danger"></a>
                                @endif
                                <td>
                                    <div class="col-group" style="display: flex; justify-content: space-between; padding-right: 7px; padding-left: 7px;">
                                    <button type="button" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data"
                                        data-id = "{{$item->id}}" data-nama = "{{$item->nama_karyawan}}" data-email = "{{$item->email}}"  data-password = "{{$item->password }}" data-created_by = "{{$item->created_by }}" >
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button type="button" data-toggle="modal" data-id="{{ $item->id }}" data-status_user="{{ $item->status_user }}" onclick="updateStatusUser({{ $item->id }}, {{ $item->status_user == 1 ? 0 : 1 }})" data-target="#quoteFormTrash" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data">
                                            <i class="fa fa-remove"></i>
                                        </button>                                        
                                    </div>
                                </td>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->nama_karyawan}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ ($item->status_user == 1) ? 'Aktif' : 'Non Aktif'}}</td>
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

<!--GET a QUOTE MODAL Tambah-->
<div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah User</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpanUser')}}" method="POST" id="inputUserForm"> 
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_karyawan">Nama Karyawan<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_karyawan" data-live-search="true" class="form-select">
                                <option value="">- Pilih -</option>
                                @foreach($datakaryawan as $row)
                                <option value="{{$row->id_karyawan}}"
                                    {{ old('datakaryawan')==$row->id_karyawan?'selected' :null}}>{{$row->nama_karyawan}}
                                </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="font-weight-bold text-small" for="email">Email<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="email" name="email" type="text" placeholder="email"/>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-6">
  <label class="font-weight-bold text-small" for="password">Password<span class="text-primary ml-1">*</span></label>
  <div class="position-relative">
    <div class="input-group" id="show_hide_password">
      <input type="password" name="password" class="form-control" id="password" autocomplete="current-password">
      <div class="invalid-feedback" style="position: absolute; bottom: -25px;">
      </div>
      <div class="input-group-append">
        <a href="" class="btn btn-outline-secondary"><i class="bi bi-eye-slash" aria-hidden="true"></i></a>
      </div>
    </div>
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

<!--GET a QUOTE MODAL Edit-->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updateUser') }}" id="editForm">
                    {{ csrf_field() }}
                    <input class="form-control" id="id" name="editid" type="text" placeholder="ID" required="" hidden="true" />
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editnama_karyawan">Nama Karyawan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_karyawan" name="editnama_karyawan" type="text" placeholder="Username" disabled/>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="editemail">Email<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="email" name="editemail" type="text" placeholder="Email" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <!-- <div class="form-group col-6">
                            <label class="font-weight-bold text-small" for="password">Password<span
                                    class="text-primary ml-1">*</span></label>
                            <div class="input-group" id="show_hide_password">
                                <input type="password" name='password' class="form-control" name="password" required
                                    autocomplete="current-password" disabled>
                                <div class="input-group-append">
                                    <a href="" class="btn btn-outline-secondary"><i class="bi bi-eye-slash"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            @error('password')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div> -->
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
                <h4 class="modal-title">Hapus User</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            <form enctype="multipart/form-data" method="POST" action="{{ route ('deleteUser') }}">
                {{ csrf_field() }}
                <input class="form-control" id="id" name="id" type="text" placeholder="ID" required="" hidden="true" />
                <div class="row">
                    <div class="form-group col-3">
                        <label class="font-weight-bold text-small" for="status_user">Status Data User<span class="text-primary ml-1">*</span></label>
                        <select name="status_user" id="status_user" class="form-select" data-live-search="true">
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-group col-9">
                        <label class="font-weight-bold text-small" for="ket">Keterangan Hapus<span class="text-primary ml-1">*</span></label>
                        <textarea class="form-control" id="ket" name="ket" type="text" placeholder="Keterangan Hapus" required=""></textarea>
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
<script>
    var table = $("#table_User").DataTable({
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
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Username</option></select>';
                }
                if (column[0] == 3) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Email</option></select>';
                }
                if (column[0] == 4) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Status</option></select>';
                }
                if (column[0] == 5) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;" ><option value="">Created By</option></select>';
                }
                if (column[0] == 6) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;" ><option value="">Updated By</option></select>';
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
 
       $(document).ready(function () {
        $('#inputUserForm, #editForm').submit(function (e) {
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
                        console.log(value);
                        console.log(input);
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
        $('#inputUserForm input[type="text"]').val('');
        $('#inputUserForm input[type="text"]').removeClass('is-invalid');
        $('#inputUserForm select').removeClass('is-invalid');
        $('#inputUserForm select option:selected').prop("selected", false);
        $('.invalid-feedback').removeClass('d-block').addClass('d-none');
    });
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bi bi-eye-slash");
                $('#show_hide_password i').removeClass("bi bi-eye");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bi bi-eye-slash");
                $('#show_hide_password i').addClass("bi bi-eye");
            }
        });
    });

    $("#quoteFormEdit").on('show.bs.modal', (e) => {
        //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormEdit").find('input[name="editid"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="editnama_karyawan"]').val($(e.relatedTarget).data('nama'));
        $("#quoteFormEdit").find('input[name="editemail"]').val($(e.relatedTarget).data('email'));
        $("#quoteFormEdit").find('input[name="editpassword"]').val($(e.relatedTarget).data('password'));
    })

    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        $("#quoteFormTrash").find('input[name="id"]').val($(e.relatedTarget).data('id'));
        $("#status_user option[value='" + $(e.relatedTarget).data('status_user') + "']").prop(
                "selected", true);
    })

    // Fungsi untuk memperbarui nilai atribut status_user pada objek $item
    function updateStatusUser(itemId, statusUser) {
        // Cari objek $item dengan id yang sesuai
        var item = {!! json_encode($user->toArray()) !!}.find(function(item) {
            return item.id === itemId;
        });

        // Jika objek $item ditemukan, perbarui nilai atribut status_user
        if (item) {
            item.status_user = statusUser;
        }
    }
</script>
@endpush('')