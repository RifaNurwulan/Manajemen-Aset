<?php use Carbon\Carbon; ?>
@extends('Template.beranda')
@section('title', 'Report Daftar Asset')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Laporan Daftar Asset</h5>
            </div>
            <div class="row">
            <div class="col card-header">
                <button type="button" style="float: right; " data-toggle="modal" data-target="#quoteFormCetak" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak PDF">
                    <i class="fa fa-print"></i>
                    Cetak PDF
                </button>
                <button type="button" style="float: right; margin-right:10px; " data-toggle="modal"
                data-target="#quoteFormPreview" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Pratinjau Data">
                <i class="fa fa-file-archive-o"></i>
                Pratinjau
                </button>
                <button type="button" style="float: right; margin-right:10px;"  class="btn btn-warning btn-refresh" data-bs-toggle="tooltip" data-bs-placement="top" title="Segarkan Data">
                <i class="fa fa-refresh"></i>
               Segarkan
            </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        
    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                    <div class="dataTable-container">
                        <table class="table table-striped table-bordered dataTable-table  table-hover" id="table1_baru">
                            <thead>
                                <tr class="bg-primary text-center text-white">
                                <th>No</th>
                                <th>Kode Aset</th>
                                <th>Nama Aset</th>
                                <th>Nama Grup Aset</th>
                                <th>Satuan</th>
                                <th>Tanggal Beli</th>
                                <th>Tanggal Pakai</th>
                                <th>Supplier</th>
                                <th>No Faktur Beli</th>
                                <th>PIC</th>
                                <th>Departement</th>
                                <th>Lokasi</th>
                                <th>Harga Perolehan</th>
                                <th>Metode</th>
                                <th>Umur</th>
                                <th>Persentase</th>
                                <th>Tarif Depresiasi</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Foto Aset</th>
                                <th>Dibuat Di</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($listasset as $item)
                                <tr>
                                    @if ($item->id_pelepasanstatus == 1)
                                    <a href="" class="btn btn-sm btn danger"></a>
                                    @else
                                    <a href="" class="btn btn-sm btn success"></a>
                                    @endif
                                    <td>{{ $item->id_list_aset}}</td>
                                <td>{{ $item->kode_aset}}</td>
                                <td>{{ $item->nama_aset}}</td>
                                <td>{{ $item->nama_grup_aset}}</td>
                                <td>{{ $item->nama_satuan}}</td>
                                <td>{{ $item->tgl_beli}}</td>
                                <td>{{ $item->tgl_pakai}}</td>
                                <td>{{ $item->nama_supplier}}</td>
                                <td>{{ $item->no_faktur}}</td>
                                <td>{{ $item->nama_karyawan}}</td>
                                <td>{{ $item->nama_departement}}</td>
                                <td>{{ $item->lokasi}}</td>
                                <td>@currency($item->harga_perolehan)</td>
                                <td>{{ $item->metode}}</td>
                                <td>{{ $item->umur}}</td>
                                <td>{{ $item->persentase}}</td>
                                <td>@currency($item->tarif)</td>
                                <td>{{ $item->keterangan}}</td>
                                <td>{{ ($item->id_pelepasanstatus == 1) ? App\Models\statusPelepasan::where('id_pelepasanstatus', 1)
                                    ->firstOrFail()->desc_pelepasanstatus : App\Models\statusPelepasan::where('id_pelepasanstatus', $item->id_pelepasanstatus)->firstOrFail()->desc_pelepasanstatus }}
                                </td>
                                <td>
                                    <img src="{{ $item->foto_aset}}" width='50' height='50'
                                        class="img img-responsive" />
                                </td>
                                <td>{{ $item->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>

<!--GET a QUOTE MODAL Cetak-->
<div class="modal fade" id="quoteFormCetak" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content p-md-6">
            <div class="modal-header">
                <h4 class="modal-title">Cetak List Aset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center align-self-center">
                    <div class="input-group mb-3">
                        <label for="label">Tanggal Awal</label>&emsp;
                        <input type="date" name="tglawal" id="tglawal" class="form-control" value="{{ Carbon::now()->format('Y-m-d') }}"/>
                    </div>
                    <div class="input-group mb-3">
                        <label for="label">Tanggal Akhir</label>&emsp;
                        <input type="date" name="tglakhir" id="tglakhir" class="form-control"value="{{ Carbon::now()->format('Y-m-d') }}" />
                    </div>

                    <div class="input-group mb-3">
                        <a href=""
                            onclick="this.href='/cetak-listAsset-pertanggal/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value"
                            target="_blank" class="btn btn-success cold-md-12"> <i class="fa fa-print"> </i> Cetak </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--GET a QUOTE MODAL Preview-->
<div class="modal fade" id="quoteFormPreview" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content p-md-6">
            <div class="modal-header">
                <h4 class="modal-title">Pratinjau Laporan Daftar Aset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method="GET" action="{{ url('/previewDaftarAsset/preview') }}" role="form">
            <div class="modal-body">
                <div class="row justify-content-center align-self-center">
                    <div class="input-group mb-3">
                        <label for="label">Tanggal Awal</label>&emsp;
                        <input type="date" name="tglawal_pre" id="tglawal_pre" class="form-control" value="{{ Carbon::now()->format('Y-m-d') }}" />
                    </div>
                    <div class="input-group mb-3">
                        <label for="label">Tanggal Akhir</label>&emsp;
                        <input type="date" name="tglakhir_pre" id="tglakhir_pre" class="form-control" value="{{ Carbon::now()->format('Y-m-d') }}" />
                    </div>

                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-success col-md-12">Pratinjau</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>


@endsection
@push('script')
<script>
$(document).ready(function (e) {
    $('.btn-refresh').click(function(e){
        e.preventDefault();
        $('.preloader').fadeIn();
        window.location.href = '{{ route("reportDaftarAsset") }}';
    })

    var table = $("#table1_baru").DataTable({
        "columnDefs": [{
            "targets": 18,
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
                if (rowData[18] == 'Aktif') {
                    span.style.backgroundColor = '#198754';
                } else {
                    span.style.backgroundColor = '#dc3545';
                }
                td.innerHTML = '';
                td.appendChild(span);
            }
        }],
        initComplete: function () {
            this.api().columns([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 18]).every(function () {
                var column = this;
                var option =
                    '<select class="btn btn-primary flex-grow-1 " style="margin-right: 5px "><option value=""></option></select>';
                if (column[0] == 18) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Status</option></select>';
                }
                if (column[0] == 16) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Tarif Depresiasi</option></select>';
                }
                if (column[0] == 15) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Persentase</option></select>';
                }
                if (column[0] == 14) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Umur</option></select>';
                }
                if (column[0] == 13) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Metode</option></select>';
                }
                if (column[0] == 12) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Harga Perolehan</option></select>';
                }
                if (column[0] == 11) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Lokasi</option></select>';
                }
                if (column[0] == 10) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Departement</option></select>';
                }
                if (column[0] == 9) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">PIC</option></select>';
                }
                if (column[0] == 8) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">No Faktur Beli</option></select>';
                }
                if (column[0] == 7) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Supplier</option></select>';
                }
                if (column[0] == 6) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Tanggal Pakai</option></select>';
                }
                if (column[0] == 5) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Tanggal Beli</option></select>';
                }
                if (column[0] == 4) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Satuan</option></select>';
                }
                if (column[0] == 3) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Grup Aset</option></select>';
                }
                if (column[0] == 2) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Nama Asset</option></select>';
                }
                if (column[0] == 1) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;" ><option value="">Kode Asset</option></select>';
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

});
</script>
@endpush('')