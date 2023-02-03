@extends('Template.beranda')
@section('title', 'Departement')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Departement</h5>
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
                    <table class="table table-striped table-hover dataTable-table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Departement</th>
                                <th>Nama Departement</th>
                                <th>Singkatan</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Update By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departement as $item)
                            <tr>
                                @if ($item->status == 1)   
                                <a href="" class ="btn btn-sm btn danger"></a>
                                @else
                                <a href="" class ="btn btn-sm btn success"></a>
                                @endif
                                <td>{{ $item->id_departement}}</td>
                                <td>{{ $item->kode_departement}}</td>
                                <td>{{ $item->nama_departement}}</td>
                                <td>{{ $item->singkatan}}</td>
<<<<<<< HEAD
                                <td>
                                    <span class="badge-bg-success {{ ($item->status == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->status == 1) ? 'Aktif' : 'Non Aktif'}}</span>
                                </td>
=======
                                <td><span class="badge-bg-success {{ ($item->status == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->status == 1) ? 'Aktif' : 'Non Aktif'}}</span></td>
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
                                <td>{{ $item->created_by}}</td>
                                <td>{{ $item->updated_by}}</td>
                                <td>
                                    <div class="col-group">
                                        <button type="button" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning"
                                        data-id = "{{ $item->id_departement}}" data-kode="{{ $item->kode_departement}}" data-nama="{{ $item->nama_departement}}" data-singkatan="{{ $item->singkatan}}">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button type="button" data-toggle="modal" data-id = "{{ $item->id_departement}}" data-target="#quoteFormTrash" class="btn btn-danger">
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
                <h4 class="modal-title">Tambah Departement</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpandepartement')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kode_departement">Kode Departement<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_departement" name="kode_departement" type="text" placeholder="Kode Departement" required="" />
                            @error('kode_departement')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_departement">Nama Departement<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_departement" name="nama_departement" type="text" placeholder="Nama Departement" required="" />
                            @error('nama_departement')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="singkatan">Singkatan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="singkatan" name="singkatan" type="text" placeholder="Singkatan" required="" />
                            @error('singkatan')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6"><br>
                            <button class="btn btn-success" style="float: right;" type="submit">
                                <i class="fa fa-save"></i>
                                Save
                            </button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>


<!--GET a QUOTE MODAL Edit-->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Departement</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updatedepartement') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <input class="form-control" id="id_departement" name="id_departement" type="text" placeholder="ID Departement" required="" hidden="true"/>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kode_departement">Kode Departement<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_departement" name="kode_departement" type="text" placeholder="Kode Departement" required=""/>
                            @error('kode_departement')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_departement">Nama Departement<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_departement" name="nama_departement" type="text" placeholder="Nama Departement" required="" />
                            @error('nama_departement')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="singkatan">Singkatan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" name="singkatan" type="text" placeholder="Singkatan" required="" />
                            @error('singkatan')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6"><br>
                            <button class="btn btn-success" style="float: right;" type="submit">
                                <i class="fa fa-save"></i>
                                Save
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
                <h4 class="modal-title">Hapus Departement</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('deletedepartement') }}">
                    {{ csrf_field() }}
                    <input class="form-control" id="id_departement" name="id_departement" type="text" placeholder="Id Departement" required="" hidden="true"/>
                    <div class="row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold text-small" for="status">Status Departement<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="status" id="status" class="form-select" data-live-search="true">
                                <option value="1">Aktif</option>
                                <option value="0">Non-Aktif</option>
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label class="font-weight-bold text-small" for="namagroupasset">Keterangan Hapus<span class="text-primary ml-1">*</span></label>
                            <textarea class="form-control" id="firstname" type="text" placeholder="Keterangan Hapus" required=""></textarea>
                        </div>
                        <div class="form-group col-lg-12"><br>
                            <button class="btn btn-success" style="float: right;" type=" submit">
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
        $("#quoteFormEdit").find('input[name="id_departement"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="kode_departement"]').val($(e.relatedTarget).data('kode'));
        $("#quoteFormEdit").find('input[name="nama_departement"]').val($(e.relatedTarget).data('nama'));
        $("#quoteFormEdit").find('input[name="singkatan"]').val($(e.relatedTarget).data('singkatan'));
    })
    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        //$("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormTrash").find('input[name="id_departement"]').val($(e.relatedTarget).data('id'));
    })
</script>
@endpush('')