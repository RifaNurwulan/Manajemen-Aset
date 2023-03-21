<?php use Carbon\Carbon; ?>
@extends('Template.beranda')
@section('title', 'List Asset')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
<<<<<<< HEAD
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">List Aset</h5>
            </div>
            <div class="row">
                <div class="col card-header">
                    <button type="button" data-toggle="modal" style="float: right;" data-target="#quoteFormCetak"
                        class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak Data">
                        <i class="fa fa-print"></i>
=======
            <div class="col py-6">     
                <h5 class="m-0 font-weight-bold text-primary">List Asset</h5>
            </div>
            <div class="row">
                <div class="col card-header">
                    <button type="button" style="float: right; " data-toggle="modal" data-target="quoteFormKondisi"
                        class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak Data">
                        <i class="fa fa-print"></i>

                    </button>

                    <button type="button" style="float: right; margin-right:10px;" data-toggle="modal"
                        data-target="#quoteForm" class="btn btn-success" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Tambah Data">
                        <i class="fa fa-plus"></i>

>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                    </button>
                </div>
            </div>
        </div>

<<<<<<< HEAD
=======
<<<<<<< HEAD
        <div class="card-body">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table class="table table-striped table-hover dataTable-table" id="table1">
                        <thead>
                            <tr>

                                <th>No</th>
                                <th>Kode Asset</th>
                                <th>Satuan</th>
                                <th>Tanggal Beli</th>
                                <th>Tanggal Pakai</th>
                                <th>Supplier</th>
                                <th>No Faktur Beli</th>
                                <th>Nama Grup Asset</th>
                                <th>Nama Asset</th>
                                <th>PIC</th>
                                <th>Departement</th>
                                <th>Lokasi</th>
                                <th>Status</th>
                                <th>Foto Asset</th>
                                <th>Kondisi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listasset as $item)
                            <tr>
                                @if ($item->status_list_aset == 1)
                                <a href="" class="btn btn-sm btn danger"></a>
                                @else
                                <a href="" class="btn btn-sm btn success"></a>
                                @endif

                                <td>{{ $item->id_list_aset}}</td>
                                <td>{{ $item->kode_aset}}</td>
                                <td>{{ $item->nama_satuan}}</td>
                                <td>{{ $item->tgl_beli}}</td>
                                <td>{{ $item->tgl_pakai}}</td>
                                <td>{{ $item->nama_supplier}}</td>
                                <td>{{ $item->no_faktur}}</td>
                                <td>{{ $item->nama_grup_aset}}</td>
                                <td>{{ $item->nama_aset}}</td>
                                <td>{{ $item->nama_karyawan}}</td>
                                <td>{{ $item->nama_departement}}</td>
                                <td>{{ $item->lokasi}}</td>
                                <td><span
                                        class="badge-bg-success {{ ($item->status_list_aset == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->status_list_aset == 1) ? 'Aktif' : 'Non Aktif'}}</span>
                                </td>
                                <td>
                                    <img src="{{ $item->foto_aset}}" width='50' height='50'
                                        class="img img-responsive" />
                                </td>
                                <td>
                                    <!-- <div class="col-group">

                                        <button type="button" data-toggle="modal" data-target="#quoteFormDetail"
                                            class="btn btn-secondary" data-id="{{ $item->id_list_aset}}"
                                            data-kode="{{ $item->kode_aset}}" data-nama="{{ $item->nama_aset}}"
                                            data-route="{{ route('fotoListAsset', $item->id_list_aset) }}"
                                            data-beli="{{ $item->tgl_beli}}" data-pakai="{{ $item->tgl_pakai}}"
                                            data-id_grup="{{ $item->id_grup }}" data-id_lokasi="{{ $item->lokasi }}"
                                            data-id_satuan="{{ $item->id_satuan }}"
                                            data-id_supplier="{{ $item->id_supplier }}"
                                            data-id_departement="{{ $item->id_departement }}"
                                            data-id_karyawan="{{ $item->id_karyawan }}"
                                            data-no_faktur="{{ $item->no_faktur }}">
                                            <i class="fa fa-eye"></i></button>

                                        <button type="submit" data-toggle="modal" data-target="#quoteFormEdit"
                                            class="btn btn-warning" data-id="{{ $item->id_list_aset}}"
                                            data-kode="{{ $item->kode_aset}}" data-nama="{{ $item->nama_aset}}"
                                            data-beli="{{ $item->tgl_beli}}" data-pakai="{{ $item->tgl_pakai}}"
                                            data-id_grup="{{ $item->id_grup }}" data-id_lokasi="{{ $item->lokasi }}"
                                            data-id_satuan="{{ $item->id_satuan }}"
                                            data-id_supplier="{{ $item->id_supplier }}"
                                            data-id_departement="{{ $item->id_departement }}"
                                            data-id_karyawan="{{ $item->id_karyawan }}"
                                            data-no_faktur="{{ $item->no_faktur }}">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button type="button" data-toggle="modal" data-id="{{ $item->id_list_aset}}"
                                            data-target="#quoteFormTrash" class="btn btn-danger">
                                            <i class="fa fa-remove"></i>
                                        </button>-->
                                        <button type="button" data-toggle="modal" data-id="{{ $item->id_list_aset}}"
                                            data-target="#quoteFormKondisi" class="btn btn-success">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    <!-- <--</div> -->
                                </td>
                                <td>
                                    <div class="dropdown text-center">
                                        <!-- <a class="dropdown-button btn-secondary" id="dropdown-menu"
                                            data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-cog"></i>
                                        </a> -->
                                        <div class="dropdown dropdown-color-icon">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenuButtonEmoji" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-cog"></i>
                                                </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-menu">


                                        <a class="dropdown-item" data-toggle="modal" data-target="#quoteFormDetail"
                                            class="btn btn-secondary" data-id="{{ $item->id_list_aset}}"
                                            data-kode="{{ $item->kode_aset}}" data-nama="{{ $item->nama_aset}}"
                                            data-route="{{ route('fotoListAsset', $item->id_list_aset) }}"
                                            data-beli="{{ $item->tgl_beli}}" data-pakai="{{ $item->tgl_pakai}}"
                                            data-id_grup="{{ $item->id_grup }}" data-id_lokasi="{{ $item->lokasi }}"
                                            data-id_satuan="{{ $item->id_satuan }}"
                                            data-id_supplier="{{ $item->id_supplier }}"
                                            data-id_departement="{{ $item->id_departement }}"
                                            data-id_karyawan="{{ $item->id_karyawan }}"
                                            data-no_faktur="{{ $item->no_faktur }}">
                                            <i class="fa fa-eye"></i>
                                                View
                                            </a>
                                           
                                            <a class="dropdown-item" type="submit" data-toggle="modal" data-target="#quoteFormEdit"
                                            class="btn btn-warning" data-id="{{ $item->id_list_aset}}"
                                            data-kode="{{ $item->kode_aset}}" data-nama="{{ $item->nama_aset}}"
                                            data-beli="{{ $item->tgl_beli}}" data-pakai="{{ $item->tgl_pakai}}"
                                            data-id_grup="{{ $item->id_grup }}" data-id_lokasi="{{ $item->lokasi }}"
                                            data-id_satuan="{{ $item->id_satuan }}"
                                            data-id_supplier="{{ $item->id_supplier }}"
                                            data-id_departement="{{ $item->id_departement }}"
                                            data-id_karyawan="{{ $item->id_karyawan }}"
                                            data-no_faktur="{{ $item->no_faktur }}">
                                            <i class="fa fa-edit"></i>
                                                Edit
                                            </a>
                                           

                                            
                                            <a class="dropdown-item" data-toggle="modal" data-id="{{ $item->id_list_aset}}"
                                            data-target="#quoteFormTrash" class="btn btn-danger">
                                            <i class="fa fa-remove"></i>
                                            Hapus
                                            </a>
                                            

                                            
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
=======
                            <th>No</th>
                            <th>Kode Asset</th>
                            <th>Satuan</th>
                            <th>Tanggal Beli</th>
                            <th>Tanggal Pakai</th>
                            <th>Nama Asset</th>
                            <th>PIC</th>
                            <th>Departement</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Foto Asset</th>
                            <th>Action</th>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc

        <div class="card-body">

            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <!-- <div id="search_test"></div> -->
                    <table class="table table-striped table-bordered table-hover dataTable-table table-hover" id="table1_baru">

                        <thead>
                            <tr class="bg-primary text-center text-white">
                                <th><button type="button" data-toggle="modal" data-target="#quoteForm"
                                class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data" style="border: 1px solid white;  width: 110px;">
                                <i class="fa fa-plus"></i>
                                Tambah
                                </button></th>
                                <th>Kondisi</th>
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
                                <th>Departemen</th>
                                <th>Lokasi</th>
                                <th>Harga Perolehan</th>
                                <th>Metode</th>
                                <th>Umur</th>
                                <th>Persentase</th>
                                <th>Tarif Depresiasi</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Foto Asset</th>
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
                                <td>
                                    <div class="dropdown text-center">
                                        <div class="dropdown dropdown-color-icon">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButtonEmoji" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                                                <i class="fa fa-cog"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdown-menu">


                                                <a class="dropdown-item" data-toggle="modal" id="quoteFormDetaill"
                                                    data-target="#quoteFormDetail" class="btn btn-secondary"
                                                    data-id="{{ $item->id_list_aset}}" data-kode="{{ $item->kode_aset}}"
                                                    data-nama="{{ $item->nama_aset}}"
                                                    data-url="{{ route('generate', $item->id_list_aset)}}"
                                                    data-cetak="{{ route('cetakDetail', $item->id_list_aset)}}"
                                                    data-route="{{ route('detail', $item->id_list_aset) }}"
                                                    data-beli="{{ $item->tgl_beli}}" data-pakai="{{ $item->tgl_pakai}}"
                                                    data-id_grup="{{ $item->nama_grup_aset }}"
                                                    data-id_lokasi="{{ $item->lokasi }}"
                                                    data-id_metode="{{ $item->metode }}"
                                                    data-id_satuan="{{ $item->nama_satuan }}"
                                                    data-id_supplier="{{ $item->nama_supplier }}"
                                                    data-id_departement="{{ $item->nama_departement }}"
                                                    data-id_karyawan="{{ $item->nama_karyawan }}"
                                                    data-no_faktur="{{ $item->no_faktur }}"
                                                    data-foto_aset="{{ $item->foto_aset }}"
                                                    data-umur="{{ $item->umur }}" data-tarif="{{ $item->tarif }}"
                                                    data-harga_perolehan="{{ $item->harga_perolehan }}"
                                                    data-keterangan="{{ $item->keterangan}}">
                                                    <i class="fa fa-eye"></i>
                                                    Lihat
                                                </a>

                                                <a class="dropdown-item" data-toggle="modal"
                                                        onclick="tampilLog({{$item->id_list_aset}}, '{{ route('log', $item->id_list_aset)}}')" data-target="#quoteFormLog">
                                                        <i class="fa fa-exchange"></i>
                                                        Log Asset
                                                    </a>

                                                <a class="dropdown-item" type="submit" data-toggle="modal"
                                                    data-target="#quoteFormEdit" class="btn btn-warning"
                                                    data-id="{{ $item->id_list_aset}}" data-kode="{{ $item->kode_aset}}"
                                                    data-nama="{{ $item->nama_aset}}" data-beli="{{ $item->tgl_beli}}"
                                                    data-pakai="{{ $item->tgl_pakai}}"
                                                    data-id_grup="{{ $item->id_grup }}"
                                                    data-lokasi="{{ $item->lokasi }}"
                                                    data-id_satuan="{{ $item->id_satuan }}"
                                                    data-id_supplier="{{ $item->id_supplier }}"
                                                    data-id_departement="{{ $item->id_departement }}"
                                                    data-id_karyawan="{{ $item->id_karyawan }}"
                                                    data-no_faktur="{{ $item->no_faktur }}"
                                                    data-foto_aset="{{ $item->foto_aset }}"
                                                    data-keterangan="{{ $item->keterangan}}"
                                                    data-umur="{{ $item->umur }}"
                                                    data-tarif="{{ $item->tarif }}"
                                                    data-harga_perolehan="{{ $item->harga_perolehan }}"
                                                    data-persentase="{{ $item->persentase }}"
                                                    data-metode="{{ $item->metode }}">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>



                                                <a class="dropdown-item" data-toggle="modal"
                                                    data-id="{{ $item->id_list_aset}}"
                                                    data-id_pelepasanstatus="{{ $item->id_pelepasanstatus }}"
                                                    data-target="#quoteFormTrash" class="btn btn-danger">
                                                    <i class="fa fa-remove"></i>
                                                    Hapus
                                                </a>

                                            </div>
                                        </div>
                                    
                                </td>
                                <td>
                                    <button type="button" data-toggle="modal" data-id="{{ $item->id_list_aset}}"
                                        data-nama="{{ $item->nama_aset}}" data-kode="{{ $item->kode_aset}}" 
                                        data-target="#quoteFormKondisi"
                                        data-route="{{ route('kondisi', $item->id_list_aset) }}"
                                        data-simpan="{{ route('simpanPerbaikan') }}"
                                        data-editPerbaikan="{{ route('updatePerbaikan') }}" data-backdrop="static"
                                        class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Kondisi">
                                        <i class="fa fa-list"></i>
                                    </button>
                                </td>
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

<<<<<<< HEAD
                </div>
=======
                                    <button type="button" data-toggle="modal" data-id = "{{ $item->id_list_aset}}" data-target="#quoteFormTrash" class="btn btn-danger">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
                
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
            </div>
        </div>
    </div>
    </table>
    
</section>

<<<<<<< HEAD
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
                        <input type="date" name="tglawal" id="tglawal" class="form-control" value="{{ Carbon::now()->format('Y-m-d') }}" />
                    </div>
                    <div class="input-group mb-3">
                        <label for="label">Tanggal Akhir</label>&emsp;
                        <input type="date" name="tglakhir" id="tglakhir" class="form-control" value="{{ Carbon::now()->format('Y-m-d') }}"/>
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
<!--GET a QUOTE MODAL Detail -->
<div class="modal fade" id="quoteFormDetail" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Detail Aset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form id="formDetail" enctype="multipart/form-data" method="POST"
                    action="{{ route ('detaillistasset') }}">
                    {{ csrf_field() }}

                    <div class="row">


                        <center><img class="card-img-top img-fluid" id="foto_aset" responsive></center>
                        <br><br>
                        <input class="form-control" id="id_list_aset" name="id_list_aset" type="text" placeholder="ID"
                            required="" hidden="true" />

                        <div class="table-responsive col-6">
                            <table class="table table-bordered mb-0 ">
                                <thead>
                                    <tr>
                                        <th colspan="3">Informasi Aset</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Kode Aset</td>
                                        <td>:</td>
                                        <td id="kode_aset"></td>
                                    </tr>
                                    <tr>
                                        <td>Departemen</td>
                                        <td>:</td>
                                        <td id="id_departement"></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Aset</td>
                                        <td>:</td>
                                        <td id="nama_aset"></td>
                                    </tr>
                                    <tr>
                                        <td>PIC</td>
                                        <td>:</td>
                                        <td id="id_karyawan"></td>
                                    </tr>
                                    <tr>
                                        <td>Grup Asset</td>
                                        <td>:</td>
                                        <td id="id_grup"></td>
                                    </tr>
                                    <tr>
                                        <td>Supplier</td>
                                        <td>:</td>
                                        <td id="id_supplier"></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Beli</td>
                                        <td>:</td>
                                        <td id="beli"></td>
                                    </tr>
                                    <tr>
                                        <td>No Faktur Beli</td>
                                        <td>:</td>
                                        <td id="no_faktur"></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive col-6">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Informasi Aset</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tanggal Pakai</td>
                                        <td>:</td>
                                        <td id="pakai"></td>
                                    </tr>
                                    <tr>
                                        <td>Masa Manfaat</td>
                                        <td>:</td>
                                        <td id="umur"></td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td>:</td>
                                        <td id="id_lokasi"></td>
                                    </tr>
                                    <tr>
                                        <td>Tarif</td>
                                        <td>:</td>
                                        <td id="tarif"></td>
                                    </tr>
                                    <tr>
                                        <td>Harga Perolehan</td>
                                        <td>:</td>
                                        <td id="harga_perolehan"></td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td id="keterangan"></td>
                                    </tr>
                                    <tr>
                                        <td>Satuan Asset</td>
                                        <td>:</td>
                                        <td id="id_satuan"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <div class="table-responsive col-3">
                        <table class="table table-bordered mb-0">
                            <tr>
                                <th>
                                    <h5 class="modal-title" id="qrCodeModalLabel">QR Code</h5>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="" id="qrcodeurl">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    <div class="form-group col-lg-6">
                        <div class="form-group col-lg-4">
                            <a id="qrcode" target="_blank" class="btn btn-primary">Membuat QrCode<i
                                    class="fa fa-qrcode"></i></a>
                        </div>
                        <div class="form-group col-lg-4">
                            <a id="cetakDetail" target="_blank" class="btn btn-danger">Cetak PDF<i
                                    class="fa fa-print"></i></a>
                        </div>
                        <!-- <div class="form-group col-lg-6">
                            <button class="btn btn-success" type="submit">
                                <i class="fa fa-save"></i>
                                Save
                            </button>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--GET a QUOTE MODAL Tambah -->
<div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Aset</span></h4>
=======
<!--GET a QUOTE MODAL Detail -->
<div class="modal fade" id="quoteFormDetail" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Detail Asset</span></h4>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
<<<<<<< HEAD
                <form action="{{route('simpanlistAsset')}}" id="formTambah" name="formTambah" method="post"
                    onsubmit="calculateDepreciation()" enctype="multipart/form-data">
=======
                <form enctype="multipart/form-data" method="POST" action="{{ route ('detaillistasset') }}">
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                    {{ csrf_field() }}
                    <input class="form-control" id="id_pelepasanstatus" name="id_pelepasanstatus" type="text"
                        hidden="true" value="1" />
                    <div class="row">
<<<<<<< HEAD
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kode_aset">Kode Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_asetget" name="kode_aset" type="text"
                                placeholder="Kode Aset" value="{{ $kode }}" readonly="readonly" />
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-department col-lg-6">
                            <label class="font-weight-bold text-small" for="id_departement">Departemen<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_departement" data-live-search="true" class="form-select">
                                <option value="">- Pilih -</option>
                                @foreach($departement as $row)
                                <option value="{{$row->id_departement}}"
                                    {{ old('departement')==$row->id_departement?'selected' :null}}>
                                    {{$row->nama_departement}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_aset">Nama Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_aset" name="nama_aset" type="text"
                                placeholder="Nama Aset" />
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-pic col-lg-6">
                            <label class="font-weight-bold text-small" for="id_karyawan">PIC<span
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

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_grup">Grup Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_grup" data-live-search="true"
                                class="form-select">
                                <option value="">- Pilih -</option>
                                @foreach($groupasset as $row)
                                <option value="{{$row->id_grup}}"
                                    {{ old('groupasset')==$row->id_grup?'selected' :null}}>{{$row->nama_grup_aset}}
                                </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_supplier">Pemasok<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_supplier" data-live-search="true" class="form-select">
                                <option value="">- Pilih -</option>
                                @foreach($supplier as $row)
                                <option value="{{$row->id_supplier}}"
                                    {{ old('supplier')==$row->id_supplier?'selected' :null}}>{{$row->nama_supplier}}
                                </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tgl_beli">Tgl Beli<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tgl_beli" name="tgl_beli" type="date"
                                placeholder="Tanggal Beli" />
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="no_faktur">No Faktur Beli<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="no_faktur" name="no_faktur" type="text"
                                placeholder="No Faktur Beli" />
                            <div class="invalid-feedback">
                            </div>    
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tgl_pakai">Tgl Pakai<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tgl_pakai" name="tgl_pakai" type="date"
                                placeholder="Tanggal Pakai"/>
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-lokasi col-lg-6">
                            <label class="font-weight-bold text-small" for="lokasi">Lokasi<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="lokasi" id="lokasi" class="form-select" data-live-search="true">
                                <option value="">- Pilih -</option>
                                <option value="Lantai 1">Lantai 1</option>
                                <option value="Lantai 2">Lantai 2</option>
                                <option value="Lantai 3">Lantai 3</option>
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="keterangan">Keterangan</label>
                            <input class="form-control" id="keterangan" name="keterangan" type="text"
                                placeholder="Keterangan"/>
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_satuan">Satuan Asset<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_satuan" data-live-search="true" class="form-select">
                                <option value="">- Pilih -</option>
                                @foreach($satuan as $row)
                                <option value="{{$row->id_satuan}}"
                                    {{ old('satuan')==$row->id_satuan?'selected' :null}}>{{$row->nama_satuan}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="foto_aset">Foto Asset<span
                                    class="text-primary ml-1">*</span></label>
                            <input type="file" id="foto_aset" class="form-control" name="foto_aset">
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-harga_perolehan col-lg-6">
                            <label class="font-weight-bold text-small" for="harga_perolehan">Harga Perolehan<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control harga_perolehan" id="harga_perolehan" name="harga_perolehan" type="text"
                                placeholder="0"/>
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <h6 class="m-1 font-weight-bold text-primary" style="padding-left: 0;">Penyusutan</h6>

                        <div class="form-lokasi col-lg-12">
                            <label class="font-weight-bold text-small" for="statusPenyusutan">Aset
                                non-depresiasi</label>
                            <input type="checkbox" id="checkbox1" class="form-check-input" checked>
=======

                        <center><img class="card-img-top img-fluid" src="{{ $item->foto_aset}}" responsive></center>
                        <br><br>
                        <input class="form-control" id="id_list_aset" name="id_list_aset" type="text" placeholder="ID"
                            required="" hidden="true" />

                        <div class="table-responsive col-6">
                            <table class="table table-bordered mb-0 ">
                                <thead>
                                    <tr>
                                        <th>Informasi Aset</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Kode Aset</td>
                                        <td>{{ $item->kode_aset}}</td>
                                    </tr>
                                    <tr>
                                        <td>Departement</td>
                                        <td>$15/hr</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Aset</td>
                                        <td>{{ $item->nama_aset}}</td>
                                    </tr>
                                    <tr>
                                        <td>PIC</td>
                                        <td>$15/hr</td>
                                    </tr>
                                    <tr>
                                        <td>Group Asset</td>
                                        <td>$15/hr</td>
                                    </tr>
                                    <tr>
                                        <td>Supplier</td>
                                        <td>$15/hr</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Beli</td>
                                        <td>$15/hr</td>
                                    </tr>
                                    <tr>
                                        <td>No Faktur Beli</td>
                                        <td>$15/hr</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive col-6">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Informasi Aset</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tanggal Pakai</td>
                                        <td>$15/hr</td>
                                    </tr>
                                    <tr>
                                        <td>Umur(bulan)</td>
                                        <td>$15/hr</td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td>$15/hr</td>
                                    </tr>
                                    <tr>
                                        <td>Tarif</td>
                                        <td>$15/hr</td>
                                    </tr>
                                    <tr>
                                        <td>Harga Perolehan</td>
                                        <td>$15/hr</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>$15/hr</td>
                                    </tr>
                                    <tr>
                                        <td>Satuan Asset</td>
                                        <td>$15/hr</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kode_aset">Kode Aset<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_aset" name="kode_aset" type="text" placeholder="Kode Aset" required="" />
                            @error('kode_aset')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-department col-lg-6">
                            <label class="font-weight-bold text-small" for="departement">Departement<span class="text-primary ml-1">*</span></label>
                            <select name="id_departement" id="departement_idDetail" data-live-search="true" class="form-select @error('departement') is-invalid @enderror">
                            <option value="">- Pilih -</option>    
                            @foreach($departement as $row)
                                <option value="{{$row->id_departement}}" {{ old('departement')==$row->id_departement?'selected' :null}}>{{$row->nama_departement}}</option>
                                @endforeach
                            </select>   
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="umur">Masa Manfaat (bulan)<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="umur" name="umur" onkeyup="OnChange(this.value)" type="text"
                                placeholder="0"/>
                            <div class="invalid-feedback">
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-lokasi col-lg-6">
                            <label class="font-weight-bold text-small" for="metode">Metode<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="metode" id="metode" onchange="calculateDepreciation()" class="form-select"
                                data-live-search="true">
                                <option value="">- Pilih -</option>
                                <option value="Straight-Line">Straight-Line</option>
                                <option value="Double Declining Balance">Double Declining Balance</option>
=======
                        <div class="form-pic col-lg-6">
                            <label class="font-weight-bold text-small" for="pic">PIC<span class="text-primary ml-1">*</span></label>
                            <select name="id_karyawan" id="karyawan_idDetail" data-live-search="true" class="form-select @error('datakaryawan') is-invalid @enderror">
                            <option value="">- Pilih -</option>    
                            @foreach($datakaryawan as $row)
                                <option value="{{$row->id_karyawan}}" {{ old('datakaryawan')==$row->id_karyawan?'selected' :null}}>{{$row->nama_karyawan}}</option>
                                @endforeach
                            </select>    
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="group_aset">Group Aset<span class="text-primary ml-1">*</span></label>
                            <select name="id_grup" id="grup_idDetail" data-live-search="true" class="form-select @error('groupasset') is-invalid @enderror">
                            <option value="">- Pilih -</option>    
                            @foreach($groupasset as $row)
                                <option value="{{$row->id_grup}}" {{ old('groupasset')==$row->id_grup?'selected' :null}}>{{$row->nama_grup_aset}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="supplier">Supplier<span class="text-primary ml-1">*</span></label>
                            <select name="id_supplier" id="supplier_idDetail" data-live-search="true" class="form-select @error('supplier') is-invalid @enderror">
                            <option value="">- Pilih -</option>    
                            @foreach($supplier as $row)
                                <option value="{{$row->id_supplier}}" {{ old('supplier')==$row->id_supplier?'selected' :null}}>{{$row->nama_supplier}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tgl_beli">Tgl Beli<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tgl_beli" name="tgl_beli" type="date" placeholder="Tanggal Beli" required="" />
                            @error('tgl_beli')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="no_faktur">No Faktur Beli<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="no_faktur" name="no_faktur" type="text" placeholder="No Faktur Beli" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tgl_pakai">Tgl Pakai<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tgl_pakai" name="tgl_pakai" type="date" placeholder="Tanggal Pakai" required="" />
                            @error('tgl_pakai')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="umur">Umur (bulan)<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="umur" name="umur" type="text" placeholder="Umur (bulan)"  />
                        </div>

                        <div class="form-lokasi col-lg-6">
                            <label class="font-weight-bold text-small" for="lokasi">Lokasi<span class="text-primary ml-1">*</span></label>
                            <select name="lokasi" id="lokasiDetail" class="form-select" data-live-search="true">
                            <option value="">- Pilih -</option>
                                <option value="Lantai 1">Lantai 1</option>
                                <option value="Lantai 2">Lantai 2</option>
                                <option value="Lantai 3">Lantai 3</option>
                            </select>
                        </div>


                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tarif">Tarif<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tarif" name="tarif" type="text" placeholder="Tarif" disabled />
                        </div>

                        <div class="form-harga_perolehan col-lg-6">
                            <label class="font-weight-bold text-small" for="harga_perolehan">Harga Perolehan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="harga_perolehan" name="harga_perolehan" type="text" placeholder="Harga Perolehan" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="keterangan">Keterangan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="keterangan" name="keterangan" type="text" placeholder="Keterangan" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="satuan">Satuan Asset<span class="text-primary ml-1">*</span></label>
                            <select name="id_satuan" id="satuan_idDetail" data-live-search="true" class="form-select @error('satuan') is-invalid @enderror">
                            <option value="">- Pilih -</option>    
                            @foreach($satuan as $row)
                                <option value="{{$row->id_satuan}}" {{ old('satuan')==$row->id_satuan?'selected' :null}}>{{$row->nama_satuan}}</option>
                                @endforeach
                            </select>
                        </div>
 -->
                    <!-- <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="foto_aset">Foto Asset Terbaru<span class="text-primary ml-1">*</span></label>
                            <input type="file" id="foto_aset" class="form-control" name="foto_aset">
                            @error('foto_aset')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div> -->

                    <!-- <div class="card-body">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="dataTable-container">
                                    <table class="table table-striped table-hover dataTable-table" id="table1">
                                        <thead>
                                            <tr>
                    
                                                <th>Foto Asset terbaru</th>
                                                <th>Tanggal Upload</th>
                                            </tr>
                                        </thead>
                                        <tbody id="dataFoto">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->

                    <div class="form-group col-lg-6">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-qrcode"></i>
                            Cetak QRCode
                        </button>
                    </div>
                    <div class="form-group col-lg-4">
                        <button class="btn btn-danger" type="submit">
                            <i class="fa fa-print"></i>
                            Cetak PDF
                        </button>
                    </div>
                    <!-- <div class="form-group col-lg-6">
                            <button class="btn btn-success" type="submit">
                                <i class="fa fa-save"></i>
                                Save
                            </button>
                        </div> -->
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<!--GET a QUOTE MODAL Tambah -->
<div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpanlistAsset')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kode_aset">Kode Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_aset" name="kode_aset" type="text"
                                placeholder="Kode Aset" required="" value="{{ $kode }}" readonly="readonly" />
                        </div>

                        <div class="form-department col-lg-6">
                            <label class="font-weight-bold text-small" for="id_departement">Departement<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_departement" data-live-search="true"
                                class="form-select @error('departement') is-invalid @enderror">
                                <option value="">- Pilih -</option>
                                @foreach($departement as $row)
                                <option value="{{$row->id_departement}}"
                                    {{ old('departement')==$row->id_departement?'selected' :null}}>
                                    {{$row->nama_departement}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_aset">Nama Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_aset" name="nama_aset" type="text"
                                placeholder="Nama Aset" required="" />
                        </div>

                        <div class="form-pic col-lg-6">
                            <label class="font-weight-bold text-small" for="id_karyawan">PIC<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_karyawan" data-live-search="true"
                                class="form-select @error('datakaryawan') is-invalid @enderror">
                                <option value="">- Pilih -</option>
                                @foreach($datakaryawan as $row)
                                <option value="{{$row->id_karyawan}}"
                                    {{ old('datakaryawan')==$row->id_karyawan?'selected' :null}}>{{$row->nama_karyawan}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_grup">Group Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_grup" data-live-search="true"
                                class="form-select @error('groupasset') is-invalid @enderror">
                                <option value="">- Pilih -</option>
                                @foreach($groupasset as $row)
                                <option value="{{$row->id_grup}}"
                                    {{ old('groupasset')==$row->id_grup?'selected' :null}}>{{$row->nama_grup_aset}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_supplier">Supplier<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_supplier" data-live-search="true"
                                class="form-select @error('supplier') is-invalid @enderror">
                                <option value="">- Pilih -</option>
                                @foreach($supplier as $row)
                                <option value="{{$row->id_supplier}}"
                                    {{ old('supplier')==$row->id_supplier?'selected' :null}}>{{$row->nama_supplier}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tgl_beli">Tgl Beli<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tgl_beli" name="tgl_beli" type="date"
                                placeholder="Tanggal Beli" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="no_faktur">No Faktur Beli<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="no_faktur" name="no_faktur" type="text"
                                placeholder="No Faktur Beli" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tgl_pakai">Tgl Pakai<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tgl_pakai" name="tgl_pakai" type="date"
                                placeholder="Tanggal Pakai" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="umur">Umur (bulan)<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="umur" name="umur" type="text" placeholder="Umur (bulan)"
                                required="" />
                        </div>

                        <div class="form-lokasi col-lg-6">
                            <label class="font-weight-bold text-small" for="lokasi">Lokasi<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="lokasi" id="lokasi" class="form-select" data-live-search="true">
                                <option value="">- Pilih -</option>
                                <option value="Lantai 1">Lantai 1</option>
                                <option value="Lantai 2">Lantai 2</option>
                                <option value="Lantai 3">Lantai 3</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tarif">Tarif<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tarif" name="tarif" type="text" placeholder="Tarif"
                                required="" disabled />
                        </div>

                        <div class="form-harga_perolehan col-lg-6">
                            <label class="font-weight-bold text-small" for="harga_perolehan">Harga Perolehan<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="harga_perolehan" name="harga_perolehan" type="text"
                                placeholder="Harga Perolehan" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="keterangan">Keterangan<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="keterangan" name="keterangan" type="text"
                                placeholder="Keterangan" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_satuan">Satuan Asset<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_satuan" data-live-search="true"
                                class="form-select @error('satuan') is-invalid @enderror">
                                <option value="">- Pilih -</option>
                                @foreach($satuan as $row)
                                <option value="{{$row->id_satuan}}"
                                    {{ old('satuan')==$row->id_satuan?'selected' :null}}>{{$row->nama_satuan}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="foto_aset">Foto Asset<span
                                    class="text-primary ml-1">*</span></label>
                            <input type="file" id="foto_aset" class="form-control" name="foto_aset">
                        </div>

                        <!-- <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tipeAsset">Tipe Asset<span
                                    class="text-primary ml-1">*</span>
                            </label>
                            <div class="form-group ">
                                <div class="col-lg-6">
                                    <label class="radio-inline"> <input type="radio" name="clouds" id="Clear" value="clear"
                                            checked> Lama </label>&emsp;&emsp;&emsp;
                                    <label class="radio-inline"> <input type="radio" name="clouds" id="Cloudy"
                                            value="cloudy"> Baru </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group col-lg-6">
                            <button class="btn btn-success" type="submit">
                                <i class="fa fa-save"></i>
                                Save
<<<<<<< HEAD
                            </button>
=======
                            </button> 
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--GET a QUOTE MODAL Edit -->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Edit Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updatelistasset') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <input class="form-control" id="id_list_aset" name="id_list_aset" type="text" placeholder="ID"
                            required="" hidden="true" />
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kode_aset">Kode Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_aset" name="kode_aset" type="text"
                                placeholder="Kode Aset" required="" />
                            @error('kode_aset')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-department col-lg-6">
                            <label class="font-weight-bold text-small" for="id_departement">Departement<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_departement" id="departement_id" data-live-search="true"
                                class="form-select @error('departement') is-invalid @enderror">
                                <option value="">- Pilih -</option>
                                @foreach($departement as $row)
                                <option value="{{$row->id_departement}}"
                                    {{ old('departement')==$row->id_departement?'selected' :null}}>
                                    {{$row->nama_departement}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_aset">Nama Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_aset" name="nama_aset" type="text"
                                placeholder="Nama Aset" required="" />
                            @error('nama_aset')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-pic col-lg-6">
                            <label class="font-weight-bold text-small" for="id_karyawan">PIC<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_karyawan" id="karyawan_id" data-live-search="true"
                                class="form-select @error('datakaryawan') is-invalid @enderror">
                                <option value="">- Pilih -</option>
                                @foreach($datakaryawan as $row)
                                <option value="{{$row->id_karyawan}}"
                                    {{ old('datakaryawan')==$row->id_karyawan?'selected' :null}}>{{$row->nama_karyawan}}
                                </option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_grup">Group Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_grup" id="grup_id" data-live-search="true"
                                class="form-select @error('groupasset') is-invalid @enderror">
                                <option value="">- Pilih -</option>
                                @foreach($groupasset as $row)
                                <option value="{{$row->id_grup}}"
                                    {{ old('groupasset')==$row->id_grup?'selected' :null}}>{{$row->nama_grup_aset}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_supplier">Supplier<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_supplier" id="supplier_id" data-live-search="true"
                                class="form-select @error('supplier') is-invalid @enderror">
                                <option value="">- Pilih -</option>
                                @foreach($supplier as $row)
                                <option value="{{$row->id_supplier}}"
                                    {{ old('supplier')==$row->id_supplier?'selected' :null}}>{{$row->nama_supplier}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tgl_beli">Tgl Beli<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tgl_beli" name="tgl_beli" type="date"
                                placeholder="Tanggal Beli" required="" />
                            @error('tgl_beli')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="no_faktur">No Faktur Beli<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="no_faktur" name="no_faktur" type="text"
                                placeholder="No Faktur Beli" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tgl_pakai">Tgl Pakai<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tgl_pakai" name="tgl_pakai" type="date"
                                placeholder="Tanggal Pakai" required="" />
                            @error('tgl_pakai')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="umur">Umur (bulan)<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="umur" name="umur" type="text" placeholder="Umur (bulan)" required="" />
                        </div> -->

                        <div class="form-lokasi col-lg-6">
                            <label class="font-weight-bold text-small" for="lokasi">Lokasi<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="lokasi" id="lokasiEdit" class="form-select" data-live-search="true">
                                <option value="">- Pilih -</option>
                                <option value="Lantai 1">Lantai 1</option>
                                <option value="Lantai 2">Lantai 2</option>
                                <option value="Lantai 3">Lantai 3</option>
                            </select>
                        </div>


                        <!-- <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tarif">Tarif<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tarif" name="tarif" type="text" placeholder="Tarif" required="" disabled />
                        </div> -->

                        <!-- <div class="form-harga_perolehan col-lg-6">
                            <label class="font-weight-bold text-small" for="harga_perolehan">Harga Perolehan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="harga_perolehan" name="harga_perolehan" type="text" placeholder="Harga Perolehan" required="" />
                        </div> -->

                        <!-- <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="keterangan">Keterangan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="keterangan" name="keterangan" type="text" placeholder="Keterangan" required="" />
                        </div> -->

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_satuan">Satuan Asset<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_satuan" id="satuan_id" data-live-search="true"
                                class="form-select @error('satuan') is-invalid @enderror">
                                <option value="">- Pilih -</option>
                                @foreach($satuan as $row)
                                <option value="{{$row->id_satuan}}"
                                    {{ old('satuan')==$row->id_satuan?'selected' :null}}>{{$row->nama_satuan}}</option>
                                @endforeach
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
<<<<<<< HEAD
                            <label class="font-weight-bold text-small" for="persentase">Persentase(%)<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="persentase" name="persentase"
                                onKeyPress="return isNumberKey(event)" type="text" placeholder="0" readonly />
                            <div class="invalid-feedback">
                            </div>
=======
                            <label class="font-weight-bold text-small" for="foto_aset">Foto Asset<span
                                    class="text-primary ml-1">*</span></label>
                            <input type="file" id="foto_aset" class="form-control" name="foto_aset">
                            @error('foto_aset')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tarif">Tarif<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tarifget" name="tarif" type="text" placeholder="0" readonly />
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <button class="btn btn-success" type="submit" onclick="calculateDepreciation()">
                                <i class="fa fa-save"></i>
<<<<<<< HEAD
                                Simpan
=======
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--GET a QUOTE MODAL Kondisi -->
<div class="modal fade" id="quoteFormKondisi" tabindex="-1" role="dialog" aria-labelledby="quoteForm"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Pemeliharaan Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kodeAset">Kode Asset<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Kode Asset"
                                required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kodeSet">Kode Set<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Kode Set" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="namaAset">Nama Aset<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Nama Aset"
                                required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kondisiAsal">Kondisi Awal<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Kondisi Awal"
                                required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kondisiBaru">Kondisi Baru<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="kondisi" class="form-control">
                                <option>Baik</option>
                                <option>Rusak</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="serial">Alasan<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Alasan" required="" />
                        </div>

                        <div class="card-body">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="dataTable-container">
                                <button type="button" style="float: right; margin-right:10px;" data-toggle="modal"
                        data-target="#quoteForm" class="btn btn-success" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Tambah Data">
                        <i class="fa fa-plus"></i>

                    </button>
                                    <table class="table table-striped table-hover dataTable-table" id="table1">
                                        <thead>
                                            <tr>
                                            <th>Kerusakan</th>
                                                <th>Foto </th>
                                                <th>Tanggal Perbaikan</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody id="dataFoto">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- <div class="form-group col-lg-6">
                            <button class="btn btn-success" type="button">
                                <i class="fa fa-save"></i>
                                Save
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                            </button>
                        </div> -->
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
                <h4 class="modal-title">Hapus List Aset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
=======
                <h4 class="modal-title">Hapus List Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('deletelistasset') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-3">
                            <input class="form-control" id="id_list_aset" name="id_list_aset" type="text"
                                placeholder="ID" required="" hidden="true" />
                            <label class="font-weight-bold text-small" for="kode_aset">Status List Asset<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="status_list_aset" id="status_list_aset" class="form-select"
                                data-live-search="true">
                                <option value="1">Aktif</option>
                                <option value="0">Non-Aktif</option>
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
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
<!--GET a QUOTE MODAL VIEW -->
<div class="modal fade" id="quoteFormview" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
=======
<!--GET a QUOTE MODAL Trash -->
<div class="modal fade" id="quoteFormTrash" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
<<<<<<< HEAD
                <h4 class="modal-title">Detail Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
=======
                <h4 class="modal-title">Hapus List Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('deletelistasset') }}">
                    {{ csrf_field() }}
                    <div class="row">
<<<<<<< HEAD
                        <div class="form-group col-lg-6">
                            <label>Ini Details Asset</label>
                        </div>

=======
                        <div class="form-group col-3">
                            <input class="form-control" id="id_list_aset" name="id_list_aset" type="text"
                                placeholder="ID" required="" hidden="true" />
                            <label class="font-weight-bold text-small" for="id_pelepasanstatus">Status List Asset<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_pelepasanstatus" id="pelepasanstatus_id" class="form-select"
                                data-live-search="true">
                                @foreach($pelepasan as $row)
                                <option value="{{$row->id_pelepasanstatus}}"
                                    {{ old('pelepasan')==$row->id_pelepasanstatus?'selected' :'null'}}>
                                    {{$row->desc_pelepasanstatus}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label class="font-weight-bold text-small" for="keterangan_hapus">Keterangan Hapus<span
                                    class="text-primary ml-1">*</span></label>
                            <textarea class="form-control" id="keterangan_hapus" name="keterangan_hapus" type="text"
                                placeholder="Keterangan Hapus" required=""></textarea>
                        </div>
                        <div class="form-group col-lg-12"><br>
                            <button class="btn btn-success" style="float: right;" type="submit">
                                <i class="fa fa-save"></i>
                                Simpan
                            </button>
                        </div>
                    </div>
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
                </form>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
=======
<<<<<<< HEAD
</div>
=======
</div>       
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc



<!--GET a QUOTE MODAL Edit -->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Edit Aset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updatelistasset') }}" id="editForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <input class="form-control" id="id_list_aset" name="editid_list_aset" type="text" placeholder="ID"
                            required="" hidden="true"/>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="editkode_aset">Kode Aset<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="kode_aset" name="editkode_aset" type="text"
                                        placeholder="Kode Aset" readonly="readonly" />
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-department col-lg-6">
                                    <label class="font-weight-bold text-small" for="editid_departement">Departemen<span
                                            class="text-primary ml-1">*</span></label>
                                    <select name="editid_departement" id="departement_id" data-live-search="true"
                                        class="form-select">
                                        <option value="">- Pilih -</option>
                                        @foreach($departement as $row)
                                        <option value="{{$row->id_departement}}"
                                            {{ old('departement')==$row->id_departement?'selected' :null}}>
                                            {{$row->nama_departement}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="editnama_aset">Nama Aset<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="nama_aset" name="editnama_aset" type="text"
                                        placeholder="Nama Aset" />
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-pic col-lg-6">
                                    <label class="font-weight-bold text-small" for="editid_karyawan">PIC<span
                                            class="text-primary ml-1">*</span></label>
                                    <select name="editid_karyawan" id="karyawan_id" data-live-search="true"
                                        class="form-select">
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

                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="editid_grup">Grup Aset<span
                                            class="text-primary ml-1">*</span></label>
                                    <select name="editid_grup" id="grup_id" data-live-search="true"
                                        class="form-select">
                                        <option value="">- Pilih -</option>
                                        @foreach($groupasset as $row)
                                        <option value="{{$row->id_grup}}"
                                            {{ old('groupasset')==$row->id_grup?'selected' :null}}>{{$row->nama_grup_aset}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="editid_supplier">Pemasok<span
                                            class="text-primary ml-1">*</span></label>
                                    <select name="editid_supplier" id="supplier_id" data-live-search="true"
                                        class="form-select">
                                        <option value="">- Pilih -</option>
                                        @foreach($supplier as $row)
                                        <option value="{{$row->id_supplier}}"
                                            {{ old('supplier')==$row->id_supplier?'selected' :null}}>{{$row->nama_supplier}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="edittgl_beli">Tgl Beli<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="tgl_beli" name="edittgl_beli" type="date"
                                        placeholder="Tanggal Beli" />
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="editno_faktur">No Faktur Beli<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="no_faktur" name="editno_faktur" type="text"
                                        placeholder="No Faktur Beli" />
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="edittgl_pakai">Tgl Pakai<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="tgl_pakai" name="edittgl_pakai" type="date"
                                        placeholder="Tanggal Pakai" />
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-lokasi col-lg-6">
                                    <label class="font-weight-bold text-small" for="editlokasi">Lokasi<span
                                            class="text-primary ml-1">*</span></label>
                                    <select name="editlokasi" id="lokasi_id" class="form-select" data-live-search="true">
                                        <option value="">- Pilih -</option>
                                        <option value="Lantai 1">Lantai 1</option>
                                        <option value="Lantai 2">Lantai 2</option>
                                        <option value="Lantai 3">Lantai 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="editketerangan">Keterangan</label>
                                    <input class="form-control" id="keterangan_id" name="editketerangan" type="text"
                                        placeholder="Keterangan"/>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="editid_satuan">Satuan Asset<span
                                            class="text-primary ml-1">*</span></label>
                                    <select name="editid_satuan" id="satuan_id" data-live-search="true"
                                        class="form-select">
                                        <option value="">- Pilih -</option>
                                        @foreach($satuan as $row)
                                        <option value="{{$row->id_satuan}}"
                                            {{ old('satuan')==$row->id_satuan?'selected' :null}}>{{$row->nama_satuan}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="editfoto_aset">Foto Aset<span
                                            class="text-primary ml-1">*</span></label>
                                    <input type="file" id="foto_asetedit" class="form-control" name="editfoto_aset">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-harga_perolehan col-lg-6">
                                    <label class="font-weight-bold text-small" for="editharga_perolehan">Harga Perolehan<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control harga_perolehan" id="harga_perolehan" name="editharga_perolehan" type="text"
                                        placeholder="0" readonly="readonly"/>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                
                                <h6 class="m-1 font-weight-bold text-primary" style="padding-left: 0;">Penyusutan</h6>

                                <div class="form-lokasi col-lg-12">
                                    <label class="font-weight-bold text-small" for="statusPenyusutan">Aset
                                        non-depresiasi</label>
                                    <input type="checkbox" id="checkbox1" class="form-check-input" checked>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="editumur">Masa Manfaat (bulan)<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="umur" name="editumur" onkeyup="OnChange(this.value)" type="text"
                                        placeholder="0" readonly="readonly"/>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-lokasi col-lg-6">
                                    <label class="font-weight-bold text-small" for="editmetode">Metode<span
                                            class="text-primary ml-1">*</span></label>
                                    <select name="editmetode" id="metode_id" onchange="calculateDepreciation()" class="form-select"
                                        data-live-search="true" disabled>
                                        <option value="">- Pilih -</option>
                                        <option value="Straight-Line">Straight-Line</option>
                                        <option value="Double Declining Balance">Double Declining Balance</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="editpersentase">Persentase(%)<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="persentase" name="editpersentase"
                                        onKeyPress="return isNumberKey(event)" type="text" placeholder="0" readonly="readonly" />
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="edittarif">Tarif<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="tarifget" name="edittarif" type="text" placeholder="0" readonly="readonly" />
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <button class="btn btn-success" type="submit">
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
</div>
<!--GET a QUOTE MODAL Log -->
<div class="modal fade" id="quoteFormLog" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Log Aset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="card-body">
                <div class="dataTable-wrapper dataTable-loading no-footer sortable fixed-columns">
                    <div class="dataTable-container">

                        <table class="table table-striped table-hover dataTable-table" id="table_log">
                            <thead>
                                <tr>
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
                            <tbody id="datalogID">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    </div>
</div>

<!--GET a QUOTE MODAL Kondisi -->
<div class="modal fade" id="quoteFormKondisi" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Pemeliharaan Aset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="table-responsive col-5">                    
                        <table class="table table-bordered mb-0 ">
                            <tbody>
                                <tr>
                                    <td>Kode Aset</td>
                                    <td>:</td>
                                    <td id="kode_asetKondisi" name="kode_asetKondisi"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive col-5">
                        <table class="table table-bordered mb-0 ">
                            <tbody>
                                <tr>
                                    <td>Nama Aset</td>
                                    <td>:</td>
                                    <td id="nama_asetKondisi" name="nama_asetKondisi"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-2 fixed-content-end">
                        <button type="button" style="float: right;" id="kerusakan" class="btn btn-success"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color:AliceBlue; display:none" id="appear">
                <div class="card-content">
                    <div class="card-body">
                        <form id="formSimpanPerbaikan" method="POST" action="{{ route('simpanPerbaikan') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                            <input class="form-control" id="id_list_aset" name="id_list_aset" type="text" placeholder="ID" hidden="true" />
                            <input class="form-control" id="id_list_aset_perbaikan" name="id_list_aset_perbaikan"
                                type="text" placeholder="ID" hidden="true" />
                            <input class="form-control" id="id_pemeliharaan" name="id_pemeliharaan"
                                type="text" placeholder="ID" hidden="true" />
                            <input class="form-control" id="kode_perbaikan" name="kode_perbaikan" type="text"
                                placeholder="ID" hidden="true" />
                            <input class="form-control" id="nama_perbaikan" name="nama_perbaikan" type="text"
                                placeholder="ID" hidden="true" />
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-small" for="tgl_kerusakan">Tanggal
                                            Kerusakan<span class="text-primary ml-1">*</span></label>
                                        <input class="form-control" id="tgl_kerusakan" name="tgl_kerusakan" type="date"
                                            placeholder="Tanggal Kerusakan" />
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-small" for="keteranganRusak">Keterangan<span
                                                class="text-primary ml-1">*</span></label>
                                        <input class="form-control" id="keteranganRusak" name="keteranganRusak"
                                            type="text" placeholder="Keterangan" />
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-small" for="foto_asetRusak">Foto
                                            Aset<span class="text-primary ml-1">*</span></label>
                                        <input type="file" id="foto_asetRusak" class="form-control"
                                            name="foto_asetRusak">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-small" for="tindakan">Tindakan<span
                                                class="text-primary ml-1">*</span></label>
                                        <input class="form-control" id="tindakan" name="tindakan" type="text"
                                            placeholder="Tindakan" />
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-small" for="harga_perbaikan">Harga Perbaikan<span
                                                class="text-primary ml-1">*</span></label>
                                        <input class="form-control" id="harga_perbaikan" name="harga_perbaikan" type="text"
                                            placeholder="Harga Perbaikan" />
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-actions d-flex justify-content-end">
                                        <button type="submit" id="submitData"
                                            class="btn btn-primary me-1">Kirim</button>
                                        <button type="reset" id="cancel" class="btn btn-light-primary">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="card-body">
            <div id="alert-success" class="alert alert-success d-none" role="alert"></div>
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                    <div class="dataTable-container">

                        <table class="table table-striped table-hover dataTable-table" id="table1_kondisi">
                            <thead>
                                <tr>
                                    <th>ID Pemeliharaan</th>
                                    <th>Keterangan</th>
                                    <th>Foto </th>
                                    <th>Tanggal Perbaikan</th>
                                    <th>Tindakan</th>
                                    <th>Harga Perbaikan</th>
                                    <th width="150px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="dataKerusakanID">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


=======
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
@endsection

@push('script')
<script>
<<<<<<< HEAD
// var harga_perolehan = document.getElementById("harga_perolehan");
// harga_perolehan.addEventListener("keyup", function(e) {
//   harga_perolehan.value = convertRupiah(this.value, "Rp. ");
// });
// harga_perolehan.addEventListener('keydown', function(event) {
// 	return isNumberKey(event);
// });
 
// function convertRupiah(angka, prefix) {
//   var number_string = angka.replace(/[^,\d]/g, "").toString(),
//     split  = number_string.split(","),
//     sisa   = split[0].length % 3,
//     rupiah = split[0].substr(0, sisa),
//     ribuan = split[0].substr(sisa).match(/\d{3}/gi);
 
// 	if (ribuan) {
// 		separator = sisa ? "." : "";
// 		rupiah += separator + ribuan.join(".");
// 	}
 
// 	rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
// 	return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
// }
 
// function isNumberKey(evt) {
//     key = evt.which || evt.keyCode;
// 	if ( 	key != 188 // Comma
// 		 && key != 8 // Backspace
// 		 && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
// 		 && (key < 48 || key > 57) // Non digit
// 		) 
// 	{
// 		evt.preventDefault();
// 		return;
// 	}
// }

function number_format(number, decimals, dec_point, thousands_sep) {
        decimals = typeof decimals !== 'undefined' ? decimals : 0;
        dec_point = typeof dec_point !== 'undefined' ? dec_point : ',';
        thousands_sep = typeof thousands_sep !== 'undefined' ? thousands_sep : '.';
        var parts = number.toFixed(decimals).toString().split('.');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_sep);
        return 'Rp. ' + parts.join(dec_point);
    }

var table_log = $("#table_log").DataTable();
    function tampilLog(id_list_aset, route) {
        // alert(id_list_aset);
        $.ajax({
            url: route,
            type: "GET",
            data: id_list_aset,
            dataType: 'json',
            success: function (data) {
                // alert("test");
                console.log(data['perpindahanAsset']);
                table_log.destroy();
                $('.refresh').remove(); 
                if (data && data.perpindahanAsset) {
                    let index = 0;
                    for (index = 0; index < data['perpindahanAsset'].length; index++) {
                        var nomor = index + 1;
                                $('#datalogID').append('<tr>'+
                                    '<td>' + nomor + '</td>' +
                                    '<td>' + data['perpindahanAsset'][index]['id_log_aset'] + '</td>'+
                                    '<td>' + data['perpindahanAsset'][index]['kode_aset'] + '</td>'+
                                    '<td>' + data['perpindahanAsset'][index]['nama_aset'] + '</td>'+
                                    '<td>' + data['perpindahanAsset'][index]['nama_karyawan_from'] + '</td>'+
                                    '<td>' + data['perpindahanAsset'][index]['nama_karyawan'] + '</td>'+
                                    '<td>' + data['perpindahanAsset'][index]['nama_departement_from'] + '</td>'+
                                    '<td>' + data['perpindahanAsset'][index]['nama_departement'] + '</td>'+
                                   ' <td>' + data['perpindahanAsset'][index]['lokasi_before'] + '</td>'+
                                   ' <td>' + data['perpindahanAsset'][index]['lokasi'] + '</td>'+
                                    '<td>' + data['perpindahanAsset'][index]['created_by'] + '</td>'+
                                '</tr>');
                    }
                    table_log = $("#table_log").DataTable();
                } else {
                    console.log('Data tidak terdefinisi atau tidak memiliki properti perpindahanAsset');
                }
                // $('#quoteFormLog').modal('show'); // menampilkan modal setelah data berhasil dimuat
            },
            error: function (data) {
                console.log('Error:', data);
            }
        })
    }
    var table_kondisi = $("#table1_kondisi").DataTable();
    $(document).ready(function () {
        table_hapus = $("#table1_kondisi").DataTable();
    });

   

    function hapus(id_pemeliharaan) {
        
        console.log(id_pemeliharaan);
        var table_kondisi = $("#table1_kondisi").DataTable();
        $.ajax({
            url: '/deletePerbaikan/' + id_pemeliharaan,
            type: 'DELETE',
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                console.log(data);
                console.log(data.beres.length);
                alert('Data berhasil dihapus.');

                $('.refresh').remove();
                for (let index = 0; index < data.beres.length; index++) {
                    $('#dataKerusakanID').append('<tr class="refresh"><td>' +
                        data['beres'][index]['id_pemeliharaan'] +
                        '</td><td contenteditable="true">' +
                        data['beres'][index]['keterangan'] +
                        '</td><td><a href="' + data['beres'][index][
                            'foto_asetRusak'
                        ] +
                        '" target="_blank" class="btn btn-primary">CLICK HERE</button></td><td>' +
                        data['beres'][index]['tanggal_kerusakan'] +
                        '</td><td>' +
                        data['beres'][index]['tindakan'] + '</td><td>' +
                        data['beres'][index]['harga_perbaikan'] + '</td><td>' +
                        '<button type="button" class="btn btn-warning" id="editPemeliharaan"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger" id="hapusPemeliharaan" onclick="hapus(' + data['beres'][index]['id_pemeliharaan'] + ')" data-id_pemeliharaan="' + data['beres'][index]['id_pemeliharaan'] + '"><i class="fa fa-remove"></i></button>' + '</td></tr>');
                }
                table_kondisi = $("#table1_kondisi").DataTable();
               
            },
            error: function (xhr, status, error) {
                // Callback function yang akan terpanggil jika terjadi kesalahan pada request
                console.log('Error: ' + error);
                alert('Terjadi kesalahan saat melakukan request: ' + error);
            }
        });
    
    }


    var table = $("#table1_baru").DataTable({
        "columnDefs": [{
            "targets": 20,
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
                if (rowData[20] == 'Aktif') {
                    span.style.backgroundColor = '#198754';
                } else {
                    span.style.backgroundColor = '#dc3545';
                }
                td.innerHTML = '';
                td.appendChild(span);
            }
        }],
        initComplete: function () {
            this.api().columns([3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 20]).every(function () {
                var column = this;
                var option =
                    '<select class="btn btn-primary flex-grow-1 " style="margin-right: 5px "><option value=""></option></select>';
                if (column[0] == 20) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Status</option></select>';
                }
                if (column[0] == 18) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Tarif Depresiasi</option></select>';
                }
                if (column[0] == 17) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Persentase</option></select>';
                }
                if (column[0] == 16) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Umur</option></select>';
                }
                if (column[0] == 15) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Metode</option></select>';
                }
                if (column[0] == 14) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Harga Perolehan</option></select>';
                }
                if (column[0] == 13) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Lokasi</option></select>';
                }
                if (column[0] == 12) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Departemen</option></select>';
                }
                if (column[0] == 11) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">PIC</option></select>';
                }
                if (column[0] == 10) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">No Faktur Beli</option></select>';
                }
                if (column[0] == 9) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Supplier</option></select>';
                }
                if (column[0] == 8) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Tanggal Pakai</option></select>';
                }
                if (column[0] == 7) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Tanggal Beli</option></select>';
                }
                if (column[0] == 6) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Satuan</option></select>';
                }
                if (column[0] == 5) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Grup</option></select>';
                }
                if (column[0] == 4) {
                    option =
                        '<select class="btn btn-primary flex-grow-1 " style="font-weight: bold;"><option value="">Nama Asset</option></select>';
                }
                if (column[0] == 3) {
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

    $('#quoteForm').on('show.bs.modal', function () {
        $('#id_pelepasanstatus').val('1');
        // buat permintaan AJAX untuk mendapatkan kode aset
        $.ajax({
            url: '/getKodeAset',
            type: 'GET',
            success: function (data) {
                // tetapkan nilai kode aset ke input kode aset
                $('#kode_asetget').val(data);
            }
        });
    });


    $(document).on('submit', '#formTambah, #editForm', function (a) {
        // alert("hooww");
        a.preventDefault(); // hindari pengiriman form standar
        var form = $(this);
        var url = form.attr('action');
        var formData = new FormData(this);
        // console.log(formData);

        $('input, select').on('input change', function () {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').removeClass('d-block').addClass('d-none');
            // return false;
        });
        // jika semua input sudah diisi, kirim form via ajax
        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
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
        $('#editForm input[type="text"], #editForm input[type="date"], #editForm input[type="file"]').val('');
        $('#editForm input[type="text"], #editForm input[type="date"], #editForm input[type="file"]').removeClass('is-invalid');
        $('#editForm select').removeClass('is-invalid');
        $('#editForm select option:selected').prop("selected", false);
        $('#formTambah input[type="text"], #quoteForm input[type="date"], #quoteForm input[type="file"]').val('');
        $('#formTambah input[type="text"], #quoteForm input[type="date"], #quoteForm input[type="file"]').removeClass('is-invalid');
        $('#formTambah select').removeClass('is-invalid');
        $('#formTambah select option:selected').prop("selected", false);
        $('.invalid-feedback').removeClass('d-block').addClass('d-none');
    });



    masaManfaat = document.formTambah.umur.value
    document.formTambah.umur.value = masaManfaat;

    function OnChange(value) {
        masaManfaat = document.formTambah.umur.value;
        persentase = 100 / masaManfaat;
        document.formTambah.persentase.value = persentase;
        // document.getElementById("persentase").value = persentase;
        document.getElementById("persentase").value = persentase;
        document.getElementById("persentase").classList.remove('is-invalid');
        document.getElementById("persentase").nextElementSibling.classList.remove('d-block');
        // $("#persentase").val(persentase);
    }
    // Hitung Tarif
    function calculateDepreciation() {
        var method = document.getElementById("metode").value;
        var umur = document.formTambah.umur.value;
        document.formTambah.umur.value = umur;
        var harga_perolehan = document.formTambah.harga_perolehan.value;
        document.formTambah.harga_perolehan.value = harga_perolehan;
        var persentase = document.formTambah.persentase.value;
        document.formTambah.persentase.value = persentase;
        var tarifget = 0;
        if (method == 'Straight-Line') {
            tarifget = harga_perolehan * persentase / 100 / 12;
            document.formTambah.tarifget.value = tarifget;
        } else if (method == 'Double Declining Balance') {
            tarifget = (harga_perolehan * persentase / 100 / 12) * 2;
            document.formTambah.tarifget.value = tarifget;
        }
        if (document.getElementById("tarifget")) {
            document.getElementById("tarifget").classList.remove('is-invalid');
            document.getElementById("tarifget").nextElementSibling.classList.remove('d-block');
        }
    }

    // var table_kondisi = null;
    
    // $('#formSimpanPerbaikan').submit(function (a) {
    $(document).on('submit', '#formSimpanPerbaikan', function (a) {
        a.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        var newForm = new FormData(this);
        newForm.append('id_list_aset', $("#id_list_aset_perbaikan").val());
        newForm.append('kode_aset', $("#kode_perbaikan").val());
        newForm.append('nama_aset', $("#nama_perbaikan").val());
        // newForm.append('id_pemeliharaan', $("#id_pemeliharaan").val());
        $('input').on('input', function () {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').removeClass('d-block').addClass('d-none');
        });

        $.ajax({
            url: url,
            method: "POST",
            data: newForm,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                console.log(data);
                // console.log(data.success.length);
                if (data.status == 0) {
                    var errors = data.messages;
                    $.each(errors, function (key, value) {
                        var input = $('input[name="' + key + '"]');
                        input.addClass('is-invalid');
                        input.next('.invalid-feedback').text(value).removeClass('d-none').addClass('d-block');

                    });
                } else if (data.status == 1) {
                    $('.invalid-feedback').removeClass('d-block').addClass('d-none'); // sembunyikan semua pesan error
                    $('.is-invalid').removeClass('is-invalid'); // hapus class "is-invalid" dari input yang telah valid
                    table_kondisi.destroy();
                    $('.refresh').remove();
                    for (let index = 0; index < data.success.length; index++) {
                        $('#dataKerusakanID').append('<tr class="refresh"><td>' +
                            data['success'][index]['id_pemeliharaan'] +
                            '</td><td contenteditable="true">' +
                            data['success'][index]['keterangan'] +
                            '</td><td><a href="' + data['success'][index][
                                'foto_asetRusak'
                            ] +
                            '" target="_blank" class="btn btn-primary">CLICK HERE</button></td><td>' +
                            data['success'][index]['tanggal_kerusakan'] +
                            '</td><td>' +
                            data['success'][index]['tindakan'] + '</td><td>' +
                            data['success'][index]['harga_perbaikan'] + '</td><td>' +
                            '<button type="button" class="btn btn-warning" id="editPemeliharaan"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger" id="hapusPemeliharaan" onclick="hapus(' + data['success'][index]['id_pemeliharaan'] + ')" data-id_pemeliharaan="' + data['success'][index]['id_pemeliharaan'] + '"><i class="fa fa-remove"></i></button>' + '</td></tr>');

                    }
                    table_kondisi = $("#table1_kondisi").DataTable();
                    $("#appear").hide("slow", function () {
                        $('#formSimpanPerbaikan input[type="text"], #formSimpanPerbaikan input[type="date"], #formSimpanPerbaikan input[type="file"]').not("#id_list_aset, #id_list_aset_perbaikan, #kode_perbaikan, #nama_perbaikan").val('');
                        $('#formSimpanPerbaikan input[type="text"], #formSimpanPerbaikan input[type="date"], #formSimpanPerbaikan input[type="file"]').removeClass('is-invalid');
                        $('.invalid-feedback').removeClass('d-block').addClass('d-none');
                        table_kondisi = $("#table1_kondisi").DataTable();
                    });

                }
            },
            error: function (data) {
                console.log('Error:', data);
                //   $('#saveBtn').html('Save Changes');
            }
        })

    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    $("#quoteFormKondisi").on('show.bs.modal', (e) => {
        table_kondisi = $("#table1_kondisi").DataTable();
        $("#kerusakan").click(
            function () {
                $("#appear").show("slow");
            }
        );

        $("#cancel").click(
            function () {
                $("#appear").hide("slow", function () {
                    $('#formSimpanPerbaikan input[type="text"], #formSimpanPerbaikan input[type="date"], #formSimpanPerbaikan input[type="file"]').not("#id_list_aset, #id_list_aset_perbaikan, #kode_perbaikan, #nama_perbaikan").val('');
                    $('#formSimpanPerbaikan input[type="text"], #formSimpanPerbaikan input[type="date"], #formSimpanPerbaikan input[type="file"]').removeClass('is-invalid');
                    $('.invalid-feedback').removeClass('d-block').addClass('d-none');
                });
            }
        );
        $.ajax({
            data: $(e.relatedTarget).data('id_list_aset'),
            url: $(e.relatedTarget).data('route'),
            type: "GET",
            dataType: 'json',
            success: function (data) {

                console.log(data['listAsset'][0]['kode_aset']);
                $('#kode_asetKondisi').append(data['listAsset'][0]['kode_aset']);
                $('#nama_asetKondisi').append(data['listAsset'][0]['nama_aset']);
                $('#id_list_aset_perbaikan').val(data['listAsset'][0]['id_list_aset']);
                $('#kode_perbaikan').val(data['listAsset'][0]['kode_aset']);
                $('#nama_perbaikan').val(data['listAsset'][0]['nama_aset']);
                $('#nama_asetKondisi').val(data['listAsset'][0]['nama_aset']);
                //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
                table_kondisi.destroy();
                $('.refresh').remove();
                for (let index = 0; index < data['pemeliharaanAsset'].length; index++) {
                    var harga_perbaikan = parseFloat(data['pemeliharaanAsset'][index]['harga_perbaikan']);
                    // const element = data[index];
                    $('#dataKerusakanID').append('<tr class="refresh"><td>' +
                        data['pemeliharaanAsset'][index]['id_pemeliharaan'] +
                        '</td><td contenteditable="true">' +
                        data['pemeliharaanAsset'][index]['keterangan'] +
                        '</td><td><a href="' + data['pemeliharaanAsset'][index][
                            'foto_asetRusak'
                        ] +
                        '" target="_blank" class="btn btn-primary">CLICK HERE</button></td><td>' +
                        data['pemeliharaanAsset'][index]['tanggal_kerusakan'] +
                        '</td><td>' +
                        data['pemeliharaanAsset'][index]['tindakan'] + '</td><td>' + 
                        (number_format(harga_perbaikan, 0, ',', '.')) + '</td><td>' +
                        '<button type="button" class="btn btn-warning" id="editPemeliharaan"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger" id="hapusPemeliharaan" onclick="hapus(' + data['pemeliharaanAsset'][index]['id_pemeliharaan'] + ')" data-id_pemeliharaan="' + data['pemeliharaanAsset'][index]['id_pemeliharaan'] + '"><i class="fa fa-remove"></i></button>' + '</td></tr>'
                    );

                    $('#dataKerusakanID').on('click', '#editPemeliharaan', function () {
                        // $("#submitData").removeClass("create");
                        // $("#submitData").addClass("update");

                        var row = $(this).closest('tr');
                        var id_pemeliharaan = row.find('td:eq(0)').text();
                        console.log(id_pemeliharaan);

                        // console.log($('#id_pemeliharaan').val());
                        // Get the data from the row and populate the form inputs
                        var tanggal_kerusakan = row.find('td:eq(3)').text();
                        var keterangan = row.find('td:eq(1)').text();
                        var foto_asetRusak = row.find('td:eq(2)').children('a').attr('href');
                        var tindakan = row.find('td:eq(4)').text();
                        var harga_perbaikan = row.find('td:eq(5)').text();

                        $('#tgl_kerusakan').val(tanggal_kerusakan);
                        $('#keteranganRusak').val(keterangan);
                        $('#tindakan').val(tindakan);
                        $('#harga_perbaikan').val(harga_perbaikan);
                        $('#id_pemeliharaan').val(id_pemeliharaan);

                        // You may need to handle the file input separately
                        // For example, you can clear the current file input and set it to the new value
                        $('#foto_asetRusak').val('');
                        $('#foto_asetRusakLabel').text(foto_asetRusak);

                        // Show the form
                        $('#appear').show('slow');


                    });

                }
                table_kondisi = $("#table1_kondisi").DataTable();
            },
            error: function (data) {
                console.log('Error:', data);
                //   $('#saveBtn').html('Save Changes');
            }
        });




    })


        $("#quoteFormKondisi").on("hidden.bs.modal", function () {
            $('#kode_asetKondisi').html("");
            $('#nama_asetKondisi').html("");
            $('.refresh').remove();
            $("#appear").hide("slow");
            $('#formSimpanPerbaikan input[type="text"], #formSimpanPerbaikan input[type="date"], #formSimpanPerbaikan input[type="file"]').not("#id_list_aset, #id_list_aset_perbaikan, #kode_perbaikan, #nama_perbaikan").val('');
            $('#formSimpanPerbaikan input[type="text"], #formSimpanPerbaikan input[type="date"], #formSimpanPerbaikan input[type="file"]').removeClass('is-invalid');
            $('.invalid-feedback').removeClass('d-block').addClass('d-none');
        });
   

        $("#quoteFormDetail").on('show.bs.modal', (e) => {
            //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
            // var link_id = $(this).val();
            // var id_list_aset = $(this).data('id_list_aset');
            $.ajax({
                data: $('#formDetail').serialize(),
                url: $(e.relatedTarget).data('route'),
                type: "GET",
                dataType: 'json',
                //   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    //alert(data[0]['src','images/'+'response.foto_aset']);
                    //console.log(data[0]['foto_aset']);
                    // console.log(data[0]['kode_aset']);
                    // for (var i = 0; i < data.length; i++) {
                    for (var i = 0; i < data["listAsset"].length; i++) {
                        $harga_perolehan = data['listAsset'][0]['harga_perolehan'];
                        console.log(data['listAsset'][0]['harga_perolehan']);
                        $('#kode_aset').append(data["listAsset"][0][
                            'kode_aset'
                        ]); //nama data diambil dr functionnya(bukan data yg dibutton)
                        $('#foto_aset').attr('src', data["listAsset"][0]['foto_aset']);
                        $('#nama_aset').append(data["listAsset"][0]['nama_aset']);
                        $('#id_departement').append(data["listAsset"][0][
                            'nama_departement'
                        ]);
                        $('#id_karyawan').append(data["listAsset"][0]['nama_karyawan']);
                        $('#id_grup').append(data["listAsset"][0]['nama_grup_aset']);
                        $('#id_supplier').append(data["listAsset"][0]['nama_supplier']);
                        $('#beli').append(data["listAsset"][0]['tgl_beli']);
                        $('#no_faktur').append(data["listAsset"][0]['no_faktur']);
                        $('#pakai').append(data["listAsset"][0]['tgl_pakai']);
                        $('#umur').append(data["listAsset"][0]['umur']);
                        $('#id_lokasi').append(data["listAsset"][0]['lokasi']);
                        var tarif = parseFloat(data['listAsset'][0]['tarif']);
                        $('#tarif').append(number_format(tarif, 0, ',', '.'));
                        var harga_perolehan = parseFloat(data['listAsset'][0]['harga_perolehan']);
                        $('#harga_perolehan').append(number_format(harga_perolehan, 0, ',', '.'));
                        $('#keterangan').append(data["listAsset"][0]['keterangan']);
                        $('#id_satuan').append(data["listAsset"][0]['nama_satuan']);
                        $("#qrcode").attr("href", $(e.relatedTarget).data('url'))
                        $("#qrcodeurl").append(data["qrcode"])
                        $("#cetakDetail").attr("href", $(e.relatedTarget).data('cetak'))
                    }

                },
                error: function (data) {
                    console.log('Error:', data);
                    //   $('#saveBtn').html('Save Changes');
                }
            });

        })

        $("#quoteFormDetail").on("hidden.bs.modal", function () {
            $('#kode_aset').html("");
            $('#nama_aset').html("");
            $('#id_departement').html("");
            $('#id_karyawan').html("");
            $('#id_grup').html("");
            $('#id_supplier').html("");
            $('#beli').html("");
            $('#no_faktur').html("");
            $('#pakai').html("");
            $('#umur').html("");
            $('#id_lokasi').html("");
            $('#tarif').html("");
            $('#harga_perolehan').html("");
            $('#keterangan').html("");
            $('#id_satuan').html("");
            $('#qrcodeurl').html("");
        });

        $("#quoteFormEdit").on('show.bs.modal', (a) => {
            //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
            $("#quoteFormEdit").find('input[name="editid_list_aset"]').val($(a.relatedTarget).data('id'));
            $("#quoteFormEdit").find('input[name="editkode_aset"]').val($(a.relatedTarget).data('kode'));
            $("#grup_id option[value=" + $(a.relatedTarget).data('id_grup') + "]").prop("selected",
                true);
            //alert($(e.relatedTarget).data('id_grup'));
            $("#quoteFormEdit").find('input[name="editno_faktur"]').val($(a.relatedTarget).data(
                'no_faktur'));
            $("#supplier_id option[value=" + $(a.relatedTarget).data('id_supplier') + "]").prop(
                "selected", true);
            $("#quoteFormEdit").find('input[name="editnama_aset"]').val($(a.relatedTarget).data('nama'));
            $("#satuan_id option[value=" + $(a.relatedTarget).data('id_satuan') + "]").prop("selected",
                true);
            $("#quoteFormEdit").find('input[name="edittgl_beli"]').val($(a.relatedTarget).data('beli'));
            $("#quoteFormEdit").find('input[name="edittgl_pakai"]').val($(a.relatedTarget).data('pakai'));
            $("#karyawan_id option[value=" + $(a.relatedTarget).data('id_karyawan') + "]").prop(
                "selected", true);
            $("#departement_id option[value=" + $(a.relatedTarget).data('id_departement') + "]").prop(
                "selected", true);
            // $("#quoteFormEdit").find('input[name="foto_aset"]').val($(e.relatedTarget).data('foto_aset'));
            // $('#foto_asetedit').attr('src', $(e.relatedTarget).data['foto_aset']);
            // console.log($(e.relatedTarget).data('lokasi'));
            $("#lokasi_id option[value='" + $(a.relatedTarget).data('lokasi') + "']").prop(
                "selected", true);
            $("#quoteFormEdit").find('input[name="editketerangan"]').val($(a.relatedTarget).data('keterangan'));
            $("#quoteFormEdit").find('input[name="editumur"]').val($(a.relatedTarget).data('umur'));
            $("#quoteFormEdit").find('input[name="edittarif"]').val($(a.relatedTarget).data('tarif'));
            $("#quoteFormEdit").find('input[name="editharga_perolehan"]').val($(a.relatedTarget).data('harga_perolehan'));
            $("#quoteFormEdit").find('input[name="editpersentase"]').val($(a.relatedTarget).data('persentase'));
            $("#metode_id option[value=" + $(a.relatedTarget).data('metode') + "]").prop(
                "selected", true);
        })

        $("#quoteFormTrash").on('show.bs.modal', (e) => {
            //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
            $("#quoteFormTrash").find('input[name="id_list_aset"]').val($(e.relatedTarget).data('id'));

            $("#pelepasanstatus_id option[value=" + $(e.relatedTarget).data('id_pelepasanstatus') + "]")
                .prop(
                    "selected", true);

        })

        // $("#quoteFormLog").on('show.bs.modal', (l) => {
        //     $.ajax({
        //         data: $(l.relatedTarget).data('id_list_aset'),
        //         url: $(l.relatedTarget).data('route'),
        //         type: "GET",
        //         dataType: 'json',
        //         success: function (data) {
        //             // console.log(data['listAsset'][0]['kode_aset']);

        //             $('.refresh').remove();
        //             for (let index = 0; index < data['historyAsset'].length; index++) {
        //                 // const element = data[index];
        //                 $('#dataLogID').append('<tr class="refresh"><td>' +
        //                     data['historyAsset'][index]['id_log_aset'] + '</td><td>' +
        //                     data['historyAsset'][index]['kode_aset'] + '</td><td>' +
        //                     data['historyAsset'][index]['nama_aset'] + '</td><td>' +
        //                     data['historyAsset'][index]['id_log_aset'] + '</td><td>' +
        //                     data['historyAsset'][index]['kode_aset'] + '</td><td>' +
        //                     data['historyAsset'][index]['nama_aset'] + '</td><td>' +
        //                     data['historyAsset'][index]['nama_aset'] + '</td></tr>');

        //             }
        //         },
        //         error: function (data) {
        //             console.log('Error:', data);
        //             //   $('#saveBtn').html('Save Changes');
        //         }
        //     });
        // })
        // $("#filterstatus").change(function(){
        //     ta.click();
        // });
       

=======
<<<<<<< HEAD
    $(document).ready(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#quoteFormDetail").on('show.bs.modal', (e) => {
            //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
            $("#quoteFormDetail").find('input[name="id_list_aset"]').val($(e.relatedTarget).data('id'));
            $("#quoteFormDetail").find('input[name="kode_aset"]').val($(e.relatedTarget).data('kode'));
            $("#grup_idDetail option[value=" + $(e.relatedTarget).data('id_grup') + "]").prop(
                "selected", true);
            $("#quoteFormDetail").find('input[name="no_faktur"]').val($(e.relatedTarget).data(
                'no_faktur'));
            $("#supplier_idDetail option[value=" + $(e.relatedTarget).data('id_supplier') + "]").prop(
                "selected", true);
            $("#quoteFormDetail").find('input[name="nama_aset"]').val($(e.relatedTarget).data('nama'));
            $("#satuan_idDetail option[value=" + $(e.relatedTarget).data('id_satuan') + "]").prop(
                "selected", true);
            $("#quoteFormDetail").find('input[name="tgl_beli"]').val($(e.relatedTarget).data('beli'));
            $("#quoteFormDetail").find('input[name="tgl_pakai"]').val($(e.relatedTarget).data('pakai'));
            $("#karyawan_idDetail option[value=" + $(e.relatedTarget).data('id_karyawan') + "]").prop(
                "selected", true);
            $("#departement_idDetail option[value=" + $(e.relatedTarget).data('id_departement') + "]")
                .prop("selected", true);
            $("#lokasiDetail option[value='" + $(e.relatedTarget).data('id_lokasi') + "']").prop(
                "selected", true);
            $.ajax({
                data: $('#quoteFormDetail').serialize(),
                url: $(e.relatedTarget).data('route'),
                type: "POST",
                dataType: 'json',
                //   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    //alert(data[0]['foto_aset']);
                    for (var i = 0; i < data.length; i++) {

                        $('#dataFoto').append('<tr><td><a href="' + data[i]['foto_aset'] +
                            '" target="_blank" class="btn btn-primary">CLICK HERE</button></td><td>' +
                            data[i]['tanggal'] + '</td></tr>');
                    }

                },
                error: function (data) {
                    console.log('Error:', data);
                    //   $('#saveBtn').html('Save Changes');
                }
            });

        })

        $("#quoteFormEdit").on('show.bs.modal', (e) => {
            //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
            $("#quoteFormEdit").find('input[name="id_list_aset"]').val($(e.relatedTarget).data('id'));
            $("#quoteFormEdit").find('input[name="kode_aset"]').val($(e.relatedTarget).data('kode'));
            $("#grup_id option[value=" + $(e.relatedTarget).data('id_grup') + "]").prop("selected",
                true);
            //alert($(e.relatedTarget).data('id_grup'));
            $("#quoteFormEdit").find('input[name="no_faktur"]').val($(e.relatedTarget).data(
                'no_faktur'));
            $("#supplier_id option[value=" + $(e.relatedTarget).data('id_supplier') + "]").prop(
                "selected", true);
            $("#quoteFormEdit").find('input[name="nama_aset"]').val($(e.relatedTarget).data('nama'));
            $("#satuan_id option[value=" + $(e.relatedTarget).data('id_satuan') + "]").prop("selected",
                true);
            $("#quoteFormEdit").find('input[name="tgl_beli"]').val($(e.relatedTarget).data('beli'));
            $("#quoteFormEdit").find('input[name="tgl_pakai"]').val($(e.relatedTarget).data('pakai'));
            $("#karyawan_id option[value=" + $(e.relatedTarget).data('id_karyawan') + "]").prop(
                "selected", true);
            $("#departement_id option[value=" + $(e.relatedTarget).data('id_departement') + "]").prop(
                "selected", true);
            // $("#quoteFormEdit").find('input[name="lokasi"]').val($(e.relatedTarget).data('lokasi'));
            //alert($(e.relatedTarget).data('id_lokasi'));
            $("#lokasiEdit option[value='" + $(e.relatedTarget).data('id_lokasi') + "']").prop(
                "selected", true);
        })

        $("#quoteFormTrash").on('show.bs.modal', (e) => {
            //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
            $("#quoteFormTrash").find('input[name="id_list_aset"]').val($(e.relatedTarget).data('id'));
        })
    });

=======
    $("#quoteFormEdit").on('show.bs.modal', (e) => {
        //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormEdit").find('input[name="id_list_aset"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="kode_aset"]').val($(e.relatedTarget).data('kode'));
        $("#quoteFormEdit").find('input[name="nama_aset"]').val($(e.relatedTarget).data('nama'));
        // $("#quoteFormEdit").find('input[name="satuan"]').val($(e.relatedTarget).data('satuan'));
        $("#quoteFormEdit").find('input[name="tgl_beli"]').val($(e.relatedTarget).data('beli'));
        $("#quoteFormEdit").find('input[name="tgl_pakai"]').val($(e.relatedTarget).data('pakai'));
        // $("#quoteFormEdit").find('input[name="pic"]').val($(e.relatedTarget).data('pic'));
        // $("#quoteFormEdit").find('input[name="department"]').val($(e.relatedTarget).data('department'));
        // $("#quoteFormEdit").find('input[name="lokasi"]').val($(e.relatedTarget).data('lokasi'));
    })

    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormTrash").find('input[name="id_list_aset"]').val($(e.relatedTarget).data('id'));
    })
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
</script>

@endpush('')
