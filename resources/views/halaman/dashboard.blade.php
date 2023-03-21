@extends('Template.beranda')
@section('title', 'Tentang')

@section('content')

<!-- Basic choices start -->
<section class="section">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"></h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                                class="active"></li>
                                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/images/upload.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Adaptive to be a Champion with a spirit of Partnership and Synergy</h5>
                                                    <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/slider-home-2021-01.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Growth with Corporate Innovation</h5>
                                                    <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Sebelumnya</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Selanjutnya</span>
                                        </a>
                                    </div>
                                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon purple">
                                <i class="iconly-boldHome"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Supplier Aktif</h6>
                            <h6 class="font-extrabold mb-0">{{$jumlahSupplier}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="iconly-boldUser"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Karyawan Aktif</h6>
                            <h6 class="font-extrabold mb-0">{{$jumlahKaryawan}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="iconly-boldChart"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Aset Aktif</h6>
                            <h6 class="font-extrabold mb-0">{{$jumlahListAsset}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="iconly-boldChart"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Aset Non-Aktif</h6>
                            <h6 class="font-extrabold mb-0">{{$jumlahListAssetNon}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic choices end -->
@endsection
@section('contentdepan')
<!-- Basic choices start -->
<section class="section">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pemeliharaan Aset</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                        <div class="dataTable-container">
                            <table class="table table-striped table-bordered dataTable-table" id="table_Kerusakan">
                                <thead>
                                    <tr class="bg-primary text-center text-white">
                                        <th>No</th>
                                        <th>Kode Aset</th>                              
                                        <th>Nama Aset</th>
                                        <th>Tanggal Kerusakan</th>
                                        <th>Foto Kerusakan</th>                              
                                        <th>Tindakan</th>
                                        <th>Harga Perbaikan</th>
                                        <th>Dibuat Oleh</th>
                                        <th>Diubah Oleh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($pemeliharaan_asset as $item)
                            <tr>
                                <td>{{ $item->id_pemeliharaan}}</td>
                                <td>{{ $item->kode_aset}}</td>
                                <td>{{ $item->nama_aset}}</td>
                                <td>{{ $item->tanggal_kerusakan}}</td>
                                <td>
                                    <img src="{{ $item->foto_asetRusak}}" width='50' height='50'
                                        class="img img-responsive" />
                                </td>
                                <td>{{ $item->tindakan}}</td>
                                <td>@currency($item->harga_perbaikan)</td>
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
        </div>
    </div>
</section>
<!-- Basic choices end -->

@endsection
@push('script')
<script>
    var table = $("#table_Kerusakan").DataTable({
        initComplete: function () {
            this.api().columns([1, 2, 3, 5, 6, 7]).every(function () {
                var column = this;
                var option =
                    '<select class="btn btn-primary flex-grow-1 " style="margin-right: 5px "><option value=""></option></select>';
                if (column[0] == 1) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Kode Aset</option></select>';
                }
                if (column[0] == 2) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Nama Aset</option></select>';
                }
                if (column[0] == 3) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Tanggal Kerusakan</option></select>';
                }
                if (column[0] == 5) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Tindakan</option></select>';
                }
                if (column[0] == 6) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;" ><option value="">Harga Perbaikan</option></select>';
                }
                if (column[0] == 7) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Created By</option></select>';
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