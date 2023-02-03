@extends('Template.beranda')
@section('title', 'Group Asset')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Group Asset</h5>
            </div>
            <div class="row">
                <div class="col card-header">
                    <button type="button" style="float: right;" data-toggle="modal" data-target="#quoteForm" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table class="table table-striped dataTable-table  table-hover" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Group Asset</th>
                                <th>Nama Group Asset</th>
                                <th>Tipe Depresiasi</th>
                                <th>Tahun</th>
                                <th>Depresiasi(%)</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Update By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groupasset as $item)
                            <tr>
                                @if ($item->status_grup_asset == 1)   
                                <a href="" class ="btn btn-sm btn danger"></a>
                                @else
                                <a href="" class ="btn btn-sm btn success"></a>
                                @endif
                                <td>{{ $item->id_grup}}</td>
                                <td>{{ $item->kode_grup}}</td>
                                <td>{{ $item->nama_grup_aset}}</td>
                                <td>{{ $item->tipe_depresiasi}}</td>
                                <td>{{ $item->tahun}}</td>
                                <td>{{ $item->depresiasi}}</td>
                                <td><span class="badge-bg-success {{ ($item->status_grup_asset == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->status_grup_asset == 1) ? 'Aktif' : 'Non Aktif'}}</span></td>
                                <td>{{ $item->created_by}}</td>
                                <td>{{ $item->updated_by}}</td>
                                <td>
                                    <div class="col-group">
                                        <button type="button" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning"
                                         data-id = "{{ $item->id_grup}}" data-kode="{{ $item->kode_grup}}" data-nama="{{ $item->nama_grup_aset}}" data-tipe="" data-tahun="" data-depresiasi="">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button type="button" data-toggle="modal" data-id = "{{ $item->id_grup}}" data-target="#quoteFormTrash" class="btn btn-danger">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                    </div>
                                </td>
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
                <h4 class="modal-title">Tambah Group Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpangroupAsset')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="kode_grup">Kode Group Asset<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_grup" name="kode_grup" type="text" placeholder="Kode Group Asset" required="" />
                            @error('kode_grup')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-8">
                            <label class="font-weight-bold text-small" for="nama_grup_aset">Nama Group Asset<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_grup_aset" name="nama_grup_aset" type="text" placeholder="Nama Group Asset" required="" />
                            @error('nama_grup_aset')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-4">
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

<!--MODAL EDIT -->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Group Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updategroupasset') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <input class="form-control" id="id_grup" name="id_grup" type="text" placeholder="Kode Group Asset" required="" hidden="true"/>
                        <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="kode_grup">Kode Group Asset<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_grup" name="kode_grup" type="text" placeholder="Kode Group Asset" required="" />
                            @error('kode_grup')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-8">
                            <label class="font-weight-bold text-small" for="nama_grup_aset">Nama Group Asset<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_grup_aset" name="nama_grup_aset" type="text" placeholder="Nama Group Asset" required="" />
                            @error('nama_grup_aset')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
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
                <h4 class="modal-title">Hapus Group Asset</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('deletegroupasset') }}">
                    {{ csrf_field() }}
                    <input class="form-control" id="id_grup" name="id_grup" type="text" placeholder="Kode Group Asset" required="" hidden="true"/>
                    <div class="row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold text-small" for="kodegroupasset">Status Group Asset<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="status_grup_asset" id="status_grup_asset" class="form-select" data-live-search="true">
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


@endsection
@push('script')
<script>
    $("#quoteFormEdit").on('show.bs.modal', (e) => {
        //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormEdit").find('input[name="id_grup"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="kode_grup"]').val($(e.relatedTarget).data('kode'));
        $("#quoteFormEdit").find('input[name="nama_grup_aset"]').val($(e.relatedTarget).data('nama'));
    })
    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormTrash").find('input[name="id_grup"]').val($(e.relatedTarget).data('id'));
    })
</script>
@endpush('')