@extends('Template.beranda')
@section('title', 'Group Asset')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Grup Asset</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table class="table table-striped table-bordered dataTable-table  table-hover" id="table_grupAset">
                        <thead>
                            <tr class="bg-primary text-center text-white">
                                <th><button type="button" data-toggle="modal" data-target="#quoteForm"
                                class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data" style="border: 1px solid white;  width: 110px;">
                                <i class="fa fa-plus"></i>
                                Tambah
                            </button></th>
                                <th>No</th>
                                <th>Kode Grup Aset</th>
                                <th>Nama Grup Aset</th>
                                <!-- <th>Tipe Depresiasi</th>
                                <th>Tahun</th>
                                <th>Depresiasi(%)</th>-->
                                <th>Status</th>
                                <th>Dibuat Oleh</th>
                                <th>Diubah Oleh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groupasset as $item)
                            <tr>
                                @if ($item->status_grup_asset == 1)
                                <a href="" class="btn btn-sm btn danger"></a>
                                @else
                                <a href="" class="btn btn-sm btn success"></a>
                                @endif
                                <td>
                                    <div class="col-group" style="display: flex; justify-content: space-between; padding-right: 7px; padding-left: 7px;"  data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data">
                                        <button type="button" data-toggle="modal" data-target="#quoteFormEdit"
                                            class="btn btn-warning" data-id="{{ $item->id_grup}}"
                                            data-kode="{{ $item->kode_grup}}" data-nama="{{ $item->nama_grup_aset}}"
                                            data-tipe="" data-tahun="" data-depresiasi="">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button type="button" data-toggle="modal" data-id="{{ $item->id_grup}}"
                                            data-status_grup_asset="{{ $item->status_grup_asset}}"
                                            data-target="#quoteFormTrash" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                    </div>
                                </td>
                                <td>{{ $item->id_grup}}</td>
                                <td>{{ $item->kode_grup}}</td>
                                <td>{{ $item->nama_grup_aset}}</td>
                                <!-- <td>{{ $item->tipe_depresiasi}}</td>
                                <td>{{ $item->tahun}}</td>
                                <td>{{ $item->depresiasi}}</td> -->
                                <td>{{ ($item->status_grup_asset == 1) ? 'Aktif' : 'Non Aktif'}}</td>
                                <td>{{ $item->created_by}}</td>
                                <td>{{ $item->updated_by}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- {{ $groupasset->links() }} --}}
            </div>
        </div>
        </table>
</section>

<!--MODAL TAMBAH -->
<div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Grup Aset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpangroupAsset')}}" method="post" id="groupAssetForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="kode_grup">Kode Grup Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_grup" name="kode_grup" type="text" placeholder="Kode Group Asset" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-8">
                            <label class="font-weight-bold text-small" for="nama_grup_aset">Nama Grup Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_grup_aset" name="nama_grup_aset" type="text" placeholder="Nama Group Asset" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <!-- <div class="form-group col-8">
                            <label class="font-weight-bold text-small" for="nama_grup_aset">Nama Group Asset<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_grup_aset" name="nama_grup_aset" type="text" placeholder="Nama Group Asset" required="" />
                            @error('nama_grup_aset')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div> -->
                        <!-- <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="tipe_depresiasi">Tipe Depresiasi<span class="text-primary ml-1">*</span></label>
                            <div class="btn-group mb-2 col-8">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pilih Tipe
                                        Depresiasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Straight-Line</a>
                                        <a class="dropdown-item" href="#">Double Declining Balance</a>
                                    </div>
                                    @error('tipe_depresiasi')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="tahun">Tahun<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tahun" name="tahun" type="text" placeholder="0" required="" />
                            @error('tahun')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="depresiasi">Tarif Depresiasi<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="depresiasi" name="depresiasi" type="text" placeholder="0,00" required="" disabled />
                            @error('depresiasi')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div> -->
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

<!--MODAL EDIT -->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Grup Aset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updategroupasset') }}" id="editForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <input class="form-control" id="id_grup" name="editid_grup" type="text"
                            placeholder="Kode Group Asset" required="" hidden="true" />
                        <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="editkode_grup">Kode Grup Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_grup" name="editkode_grup" type="text" placeholder="Kode Group Asset" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-8">
                            <label class="font-weight-bold text-small" for="editnama_grup_aset">Nama Grup Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_grup_aset" name="editnama_grup_aset" type="text" placeholder="Nama Group Asset" />
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <!-- <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="tipe_depresiasi">Tipe Depresiasi<span class="text-primary ml-1">*</span></label>
                            <div class="btn-group mb-2 col-8">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                        Pilih Tipe
                                        Depresiasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Straight-Line</a>
                                        <a class="dropdown-item" href="#">Double Declining Balance</a>
                                    </div>
                                    @error('tipe_depresiasi')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="tahun">Tahun<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tahun" name="tahun" type="text" placeholder="0" required="" />
                            @error('tahun')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="depresiasi">Tarif Depresiasi<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="depresiasi" name="depresiasi" type="text" placeholder="0,00" required="" disabled />
                            @error('depresiasi')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div> -->
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
                <h4 class="modal-title">Hapus Grup Aset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('deletegroupasset') }}">
                    {{ csrf_field() }}
                    <input class="form-control" id="id_grup" name="id_grup" type="text" placeholder="Kode Group Asset"
                        required="" hidden="true" />
                    <div class="row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold text-small" for="kodegroupasset">Status Grup Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="status_grup_asset" id="status_grup_asset" class="form-select"
                                data-live-search="true">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label class="font-weight-bold text-small" for="namagroupasset">Keterangan Hapus<span
                                    class="text-primary ml-1">*</span></label>
                            <textarea class="form-control" id="firstname" type="text" placeholder="Keterangan Hapus"
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
<script>
    var table = $("#table_grupAset").DataTable({
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
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Kode Grup Aset</option></select>';
                }
                if (column[0] == 3) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Nama Grup Aset</option></select>';
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

    $('#groupAssetForm, #editForm').submit(function (e) {
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
        $('#groupAssetForm input[type="text"]').val('');
        $('#groupAssetForm input[type="text"]').removeClass('is-invalid');
        $('.invalid-feedback').removeClass('d-block').addClass('d-none');
    });

    $("#quoteFormEdit").on('show.bs.modal', (e) => {
        //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormEdit").find('input[name="editid_grup"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="editkode_grup"]').val($(e.relatedTarget).data('kode'));
        $("#quoteFormEdit").find('input[name="editnama_grup_aset"]').val($(e.relatedTarget).data('nama'));
    })
    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormTrash").find('input[name="id_grup"]').val($(e.relatedTarget).data('id'));
        $("#status_grup_asset option[value='" + $(e.relatedTarget).data('status_grup_asset') + "']").prop(
            "selected", true);
    })

</script>
@endpush('')
