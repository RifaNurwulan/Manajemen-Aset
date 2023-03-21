<?php use Carbon\Carbon; ?>
@extends('Template.beranda')
@section('title', 'Report Data Karyawan')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Laporan Data Karyawan</h5>
            </div>
            <button type="button" style="float: right;" data-toggle="modal" data-target="#quoteFormCetak" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak PDF">
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
        <div class="card-body">
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                    <div class="dataTable-container">
                        <table class="table table-striped table-bordered dataTable-table  table-hover" id="table_Karyawan">
                            <thead>
                                <tr class="bg-primary text-center text-white">
                                <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>NIK</th>
                            <th>Nama Jabatan</th>
                            <th>Status</th>
                            <th>Dibuat Oleh</th>
                            <th>Diubah Oleh</th>
                            <th>Dibuat Di</th>
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
                            <td>{{ $item->id_karyawan}}</td>
                            <td>{{ $item->nama_karyawan}}</td>
                            <td>{{ $item->nik}}</td>
                            <td>{{ $item->desc_jabatan}}</td>
                            <td>{{ ($item->status_data_karyawan == 1) ? 'Aktif' : 'Non Aktif'}}</td>
                            <td>{{ $item->created_by}}</td>
                            <td>{{ $item->updated_by}}</td>
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
                <h4 class="modal-title">Cetak Data Karyawan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center align-self-center">
                    <div class="input-group mb-3">
                        <label for="label">Tanggal Awal</label>&emsp;
                        <input type="date" name="tglawal" id="tglawal" class="form" value="{{ Carbon::now()->format('Y-m-d') }}" />
                    </div>
                    <div class="input-group mb-3">
                        <label for="label">Tanggal Akhir</label>&emsp;
                        <input type="date" name="tglakhir" id="tglakhir" class="form" value="{{ Carbon::now()->format('Y-m-d') }}" />
                    </div>

                    <div class="input-group mb-3">
                    <a href="" onclick="this.href='/cetak-dataKaryawan-pertanggal/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value" target="_blank" class="btn btn-success cold-md-12"> <i class="fa fa-print"> </i> Cetak </a>
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
                <h4 class="modal-title">Pratinjau Laporan Data Karyawan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method="GET" action="{{ url('/previewDataKaryawan/preview') }}" role="form">
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
    // btn refresh
    $('.btn-refresh').click(function(e){
        e.preventDefault();
        $('.preloader').fadeIn();
        window.location.href = '{{ route("reportDataKaryawan") }}';
    })
    var table = $("#table_Karyawan").DataTable({
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
            this.api().columns([1, 2, 3, 4, 5, 6]).every(function () {
                var column = this;
                var option =
                    '<select class="btn btn-primary flex-grow-1 " style="margin-right: 5px "><option value=""></option></select>';
                if (column[0] == 1) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Nama Karyawan</option></select>';
                }
                if (column[0] == 2) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">NIK</option></select>';
                }
                if (column[0] == 3) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Nama Jabatan</option></select>';
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
});
</script>
@endpush('')










    