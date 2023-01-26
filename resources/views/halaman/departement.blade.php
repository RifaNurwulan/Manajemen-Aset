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
                                <td>{{ $item->id_departement}}</td>
                                <td>{{ $item->kode_departement}}</td>
                                <td>{{ $item->nama_departement}}</td>
                                <td>{{ $item->singkatan}}</td>
                                <td>
                                    <span class="badge bg-success">Aktif</span>
                                </td>
                                <td>{{ $item->created_by}}</td>
                                <td>{{ $item->updated_by}}</td>
                                <td>
                                    <div class="col-group">
                                        <button type="button" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning"
                                        data-id = "{{ $item->id_departement}}" data-kode="{{ $item->kode_departement}}" data-nama="{{ $item->nama_departement}}" data-singkatan="{{ $item->singkatan}}">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button type="button" data-toggle="modal" data-target="#quoteFormTrash" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- {{ $departement->links() }} --}}
                <div class="dataTable-bottom">
                    <div class="dataTable-info">Showing 1 to 10 of 26 entries</div>
                    <ul class="pagination pagination-primary float-end dataTable-pagination">
                        <li class="page-item pager"><a href="#" class="page-link" data-page="1">‹</a></li>
                        <li class="page-item active"><a href="#" class="page-link" data-page="1">1</a></li>
                        <li class="page-item"><a href="#" class="page-link" data-page="2">2</a></li>
                        <li class="page-item"><a href="#" class="page-link" data-page="3">3</a></li>
                        <li class="page-item pager"><a href="#" class="page-link" data-page="2">›</a></li>
                    </ul>
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
                <form action="#">
                    <div class="row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold text-small" for="kodegroupasset">Status Departement<span class="text-primary ml-1">*</span></label>
                            <div class="btn-group mb-2">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pilih Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Aktif</a>
                                        <a class="dropdown-item" href="#">Non-Aktif</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-9">
                            <label class="font-weight-bold text-small" for="namagroupasset">Keterangan Hapus<span class="text-primary ml-1">*</span></label>
                            <textarea class="form-control" id="firstname" type="text" placeholder="Keterangan Hapus" required=""></textarea>
                        </div>
                        <div class="form-group col-lg-12"><br>
                            <button class="btn btn-success" style="float: right;" type=" button">
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
</script>
@endpush('')