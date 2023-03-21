<?php use Carbon\Carbon; ?>
@extends('Template.beranda')
@section('title', 'History Asset')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Histori Aset</h5>
            </div>
            <div class="row">
                <div class="col card-header">
                    <!-- <div class="input-group">
                        <div class="input-group input-group-lg">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Search..." id="searchinput">
                            </div>
                        </div>
                    </div> -->

                    <button type="button" style="float: right; " data-toggle="modal" data-target="#quoteFormCetak"
                        class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak Data">
                        <i class="fa fa-print"></i>
                        Cetak PDF
                    </button>
                    <button type="button" style="float: right; margin-right:10px; " data-toggle="modal" data-target="#quoteFormPreview" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Pratinjau Data">
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
                    <table class="table table-striped table-bordered table-hover dataTable-table" id="table_History">
                        <thead>
                            <tr class="bg-primary text-center text-white">
                                <th>No</th>
                                <th>Waktu Transparasi</th>
                                <th>Kode Aset</th>
                                <th>Nama Aset</th>
                                <th>PIC Lama</th>
                                <th>PIC Baru</th>
                                <th>Departemen Lama</th>
                                <th>Departemen Baru</th>
                                <th>Lokasi Lama</th>
                                <th>Lokasi Baru</th>
                                <th>Dibuat Oleh</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($historyasset as $item)
                            <tr>
                                <td>{{ $item->id_log_aset}}</td>
                                <td>{{ $item->created_at}}</td>
                                <td>{{ $item->kode_aset}}</td>
                                <td>{{ $item->nama_aset}}</td>
                                <td>{{ $item->nama_karyawan_from}}</td>
                                <td>{{ $item->nama_karyawan}}</td>
                                <td>{{ $item->nama_departement_from}}</td>
                                <td>{{ $item->nama_departement}}</td>
                                <td>{{ $item->lokasi_before}}</td>
                                <td>{{ $item->lokasi}}</td>
                                <td>{{ $item->created_by}}</td>
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

<!--GET a QUOTE MODAL Preview-->
<div class="modal fade" id="quoteFormPreview" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content p-md-6">
            <div class="modal-header">
                <h4 class="modal-title">Pratinjau History Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method="GET" action="{{ url('/previewHistoryAsset/preview') }}" role="form">
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

<!--GET a QUOTE MODAL Cetak-->
<div class="modal fade" id="quoteFormCetak" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content p-md-6">
            <div class="modal-header">
                <h4 class="modal-title">Cetak Histori Aset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center align-self-center">
                    <div class="input-group mb-3">
                        <label for="label">Tanggal Awal</label>&emsp;
                        <input type="date" name="tglawal" id="tglawal" class="form-control" value="{{ Carbon::now()->format('Y-m-d') }}" />
                    </div>
                    <div class="input-group mb-3">
                        <label for="label">Tanggal Akhir</label>&emsp;
                        <input type="date" name="tglakhir" id="tglakhir" class="form-control" value="{{ Carbon::now()->format('Y-m-d') }}"/>
                    </div>

                    <div class="input-group mb-3">
                        <a href="" onclick="this.href='/cetak-logAsset-pertanggal/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value" target="_blank" class="btn btn-success cold-md-12"> <i class="fa fa-print"> </i> Cetak </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
<script>
    $('.btn-refresh').click(function(e){
        e.preventDefault();
        $('.preloader').fadeIn();
        window.location.href = '{{ route("historyAsset") }}';
    })
    var table = $("#table_History").DataTable({
        initComplete: function () {
            this.api().columns([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]).every(function () {
                var column = this;
                var option =
                    '<select class="btn btn-primary flex-grow-1 " style="margin-right: 5px "><option value=""></option></select>';
                if (column[0] == 1) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Waktu Transparasi</option></select>';
                }
                if (column[0] == 2) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Kode Aset</option></select>';
                }
                if (column[0] == 3) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Nama Aset</option></select>';
                }
                if (column[0] == 4) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">PIC Lama</option></select>';
                }
                if (column[0] == 5) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;" ><option value="">PIC Baru</option></select>';
                }
                if (column[0] == 6) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Departemen Lama</option></select>';
                }
                if (column[0] == 7) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Departemen Baru</option></select>';
                }
                if (column[0] == 8) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Lokasi Lama</option></select>';
                }
                if (column[0] == 9) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Lokasi Baru</option></select>';
                }
                if (column[0] ==10) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;" ><option value="">Dibuat Oleh</option></select>';
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
</script>
@endpush('')
@endsection