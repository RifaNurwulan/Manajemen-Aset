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
                <button type="button" style="float: right; " data-toggle="modal" data-target="#quoteForm" class="btn btn-primary">
                    <i class="fa fa-print"></i>

                </button>

                <button type="button" style="float: right; margin-right:10px;" data-toggle="modal" data-target="#quoteForm" class="btn btn-success">
                    <i class="fa fa-plus"></i>

                </button>
                </div>
            </div>
        </div>
                
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
                <h4 class="modal-title">Tambah Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpanlistAsset')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kode_aset">Kode Aset<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_aset" name="kode_aset" type="text" placeholder="Kode Aset" required="" />
                        </div>

                        <div class="form-department col-lg-6">
                            <label class="font-weight-bold text-small" for="departement">Departement<span class="text-primary ml-1">*</span></label>
                            <select name="department" id="department" class="form-select" data-live-search="true">
                            @foreach($departement as $row)    
                                <option value="{{$row->id_departement}}">{{$row->nama_departement}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_aset">Nama Aset<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_aset" name="nama_aset" type="text" placeholder="Nama Aset" required="" />
                        </div>

                        <div class="form-pic col-lg-6">
                            <label class="font-weight-bold text-small" for="pic">PIC<span class="text-primary ml-1">*</span></label>
                            <select name="pic" id="pic" class="form-select" data-live-search="true">
                            @foreach($datakaryawan as $row)
                            <option value="{{$row->id_karyawan}}">{{$row->nama_karyawan}}</option>
                            @endforeach
                            </select>

                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="group_aset">Group Aset<span class="text-primary ml-1">*</span></label>
                            <select name="group_aset" id="group_aset" class="form-select" data-live-search="true">
                            @foreach($groupasset as $row)    
                            <option value="{{$row->id_grup}}">{{$row->nama_grup_aset}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="supplier">Supplier<span class="text-primary ml-1">*</span></label>
                            <select name="supplier" id="supplier" class="form-select" data-live-search="true">
                            @foreach($supplier as $row)     
                            <option value="{{$row->id_supplier}}">{{$row->nama_supplier}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tgl_beli">Tgl Beli<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tgl_beli" name="tgl_beli" type="date" placeholder="Tanggal Beli" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="no_faktur">No Faktur Beli<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="no_faktur" name="no_faktur" type="text" placeholder="No Faktur Beli" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tgl_pakai">Tgl Pakai<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tgl_pakai" name="tgl_pakai" type="date" placeholder="Tanggal Pakai" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="umur">Umur (bulan)<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="umur" name="umur" type="text" placeholder="Umur (bulan)" required="" />
                        </div>

                        <div class="form-lokasi col-lg-6">
                            <label class="font-weight-bold text-small" for="lokasi">Lokasi<span class="text-primary ml-1">*</span></label>
                            <select name="lokasi" id="lokasi" class="form-select" data-live-search="true">
                                <option>Lantai 1</option>
                                <option>Lantai 2</option>
                                <option>Lantai 3</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="tarif">Tarif<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="tarif" name="tarif" type="text" placeholder="Tarif" required="" disabled />
                        </div>

                        <div class="form-harga_perolehan col-lg-6">
                            <label class="font-weight-bold text-small" for="harga_perolehan">Harga Perolehan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="harga_perolehan" name="harga_perolehan" type="text" placeholder="Harga Perolehan" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="keterangan">Keterangan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="keterangan" name="keterangan" type="text" placeholder="Keterangan" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="satuan">Satuan Asset<span class="text-primary ml-1">*</span></label>
                            <select name="satuan" id="satuan" class="form-select" data-live-search="true">
                            @foreach($satuan as $row)    
                            <option value="{{$row->id_satuan}}">{{$row->nama_satuan}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="foto_aset">Foto Asset<span class="text-primary ml-1">*</span></label>
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
                            </button> 
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
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updatelistasset') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <input class="form-control" id="id_list_aset" name="id_list_aset" type="text" placeholder="ID" required="" hidden="true"/>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kode_aset">Kode Aset<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_aset" name="kode_aset" type="text" placeholder="Kode Aset" required="" />
                            @error('kode_aset')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-department col-lg-6">
                            <label class="font-weight-bold text-small" for="departement">Departement<span class="text-primary ml-1">*</span></label>
                            <select name="department" id="department" class="form-select" data-live-search="true">
                            @foreach($departement as $row)    
                                <option value="{{$row->id_departement}}">{{$row->nama_departement}}</option>
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
                            <select name="pic" id="pic" class="form-select" data-live-search="true">
                            @foreach($datakaryawan as $row)
                            <option value="{{$row->id_karyawan}}">{{$row->nama_karyawan}}</option>
                            @endforeach
                            </select>

                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="group_aset">Group Aset<span class="text-primary ml-1">*</span></label>
                            <select name="group_aset" id="group_aset" class="form-select" data-live-search="true">
                            @foreach($groupasset as $row)    
                            <option value="{{$row->id_grup}}">{{$row->nama_grup_aset}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="supplier">Supplier<span class="text-primary ml-1">*</span></label>
                            <select name="supplier" id="supplier" class="form-select" data-live-search="true">
                            @foreach($supplier as $row)     
                            <option value="{{$row->id_supplier}}">{{$row->nama_supplier}}</option>
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

                        <!-- <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="umur">Umur (bulan)<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="umur" name="umur" type="text" placeholder="Umur (bulan)" required="" />
                        </div> -->

                        <div class="form-lokasi col-lg-6">
                            <label class="font-weight-bold text-small" for="lokasi">Lokasi<span class="text-primary ml-1">*</span></label>
                            <select name="lokasi" id="lokasi" class="form-select" data-live-search="true">
                                <option>Lantai 1</option>
                                <option>Lantai 2</option>
                                <option>Lantai 3</option>
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
                            <label class="font-weight-bold text-small" for="satuan">Satuan Asset<span class="text-primary ml-1">*</span></label>
                            <select name="satuan" id="satuan" class="form-select" data-live-search="true">
                            @foreach($satuan as $row)    
                            <option value="{{$row->id_satuan}}">{{$row->nama_satuan}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="foto_aset">Foto Asset<span class="text-primary ml-1">*</span></label>
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
<div class="modal fade" id="quoteFormKondisi" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Perubahan Kondisi Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kodeAset">Kode Asset<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Kode Asset" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kodeSet">Kode Set<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Kode Set" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="namaAset">Nama Aset<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Nama Aset" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kondisiAsal">Kondisi Awal<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Kondisi Awal" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kondisiBaru">Kondisi Baru<span class="text-primary ml-1">*</span></label>
                            <select name="kondisi" class="form-control">
                                <option>Baik</option>
                                <option>Rusak</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="serial">Alasan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Alasan" required="" />
                        </div>

                        <div class="form-group col-lg-6">
                            <button class="btn btn-success" type="button">
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

<!--GET a QUOTE MODAL Trash -->
<div class="modal fade" id="quoteFormTrash" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus List Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form enctype="multipart/form-data" method="POST" action="{{ route ('deletelistasset') }}">
                    {{ csrf_field() }}
                    <div class="row">
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
                </form>
            </div>
        </div>
    </div>
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
@endsection

@push('script')
<script>
    $("#quoteFormEdit").on('show.bs.modal', (e) => {
        //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormEdit").find('input[name="id_list_aset"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="kode_aset"]').val($(e.relatedTarget).data('kode'));
        $("#quoteFormEdit").find('input[name="nama_aset"]').val($(e.relatedTarget).data('nama'));
        $("#quoteFormEdit").find('input[name="satuan"]').val($(e.relatedTarget).data('satuan'));
        $("#quoteFormEdit").find('input[name="tgl_beli"]').val($(e.relatedTarget).data('beli'));
        $("#quoteFormEdit").find('input[name="tgl_pakai"]').val($(e.relatedTarget).data('pakai'));
        $("#quoteFormEdit").find('input[name="pic"]').val($(e.relatedTarget).data('pic'));
        $("#quoteFormEdit").find('input[name="department"]').val($(e.relatedTarget).data('department'));
        $("#quoteFormEdit").find('input[name="lokasi"]').val($(e.relatedTarget).data('lokasi'));
    })

    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormTrash").find('input[name="id_list_aset"]').val($(e.relatedTarget).data('id'));
    })
</script>
@endpush('')