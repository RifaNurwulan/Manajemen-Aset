@extends('Template.beranda')
@section('title', 'List Asset')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
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

                    </button>
                </div>
            </div>
        </div>

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

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listasset as $item)
                        <tr>
                        @if ($item->status_list_aset == 1)   
                                <a href="" class ="btn btn-sm btn danger"></a>
                                @else
                                <a href="" class ="btn btn-sm btn success"></a>
                                @endif

                            <td>{{ $item->id_list_aset}}</td>
                            <td>{{ $item->kode_aset}}</td>
                            <td>{{ $item->satuan}}</td>
                            <td>{{ $item->tgl_beli}}</td>
                            <td>{{ $item->tgl_pakai}}</td>
                            <td>{{ $item->nama_aset}}</td>
                            <td>{{ $item->pic}}</td>
                            <td>{{ $item->departement}}</td>
                            <td>{{ $item->lokasi}}</td>
                            <td><span class="badge-bg-success {{ ($item->status_list_aset == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->status_list_aset == 1) ? 'Aktif' : 'Non Aktif'}}</span></td>
                            <td>{{ $item->foto_aset}}</td>
                            <td>
                                <div class="col-group">
                                    <button type="submit" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning" data-id = "{{ $item->id_list_aset}}" data-kode="{{ $item->kode_aset}}" 
                                    data-nama="{{ $item->nama_aset}}" data-beli="{{ $item->tgl_beli}}" data-pakai="{{ $item->tgl_pakai}}">
                                        <i class="fa fa-edit"></i>
                                    </button>

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
            </div>
        </div>
    </div>
    </table>
</section>

<!--GET a QUOTE MODAL Detail -->
<div class="modal fade" id="quoteFormDetail" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Detail Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('detaillistasset') }}">
                    {{ csrf_field() }}
                    <div class="row">

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
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_aset">Nama Aset<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_aset" name="nama_aset" type="text" placeholder="Nama Aset" required="" />
                            @error('nama_aset')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

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
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="foto_aset">Foto Asset<span
                                    class="text-primary ml-1">*</span></label>
                            <input type="file" id="foto_aset" class="form-control" name="foto_aset">
                            @error('foto_aset')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group col-lg-6">
                            <button class="btn btn-success" type="submit">
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
                        <input class="form-control" id="id_list_aset" name="id_list_aset" type="text" placeholder="ID" required="" hidden="true"/>
                            <label class="font-weight-bold text-small" for="kode_aset">Status List Asset<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="status_list_aset" id="status_list_aset" class="form-select" data-live-search="true">
                            <option value="1">Aktif</option>
                                <option value="0">Non-Aktif</option>
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label class="font-weight-bold text-small" for="namagroupasset">Keterangan Hapus<span class="text-primary ml-1">*</span></label>
                            <textarea class="form-control" id="firstname" type="text" placeholder="Keterangan Hapus" required=""></textarea>
                        </div>
                        <div class="form-group col-lg-12"><br>
                            <button class="btn btn-success" style="float: right;" type="submit">
                                <i class="fa fa-save"></i>
                                Save
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
</div>       

 <!--GET a QUOTE MODAL VIEW -->
        <div class="modal fade" id="quoteFormview" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content p-md-3">
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Asset</span></h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Ini Details Asset</label>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
@endsection

@push('script')
<script>
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
</script>

@endpush('')
