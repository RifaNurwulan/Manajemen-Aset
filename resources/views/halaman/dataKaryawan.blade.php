@extends('Template.beranda')
@section('title', 'Data Karyawan')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Data Karyawan</h5>
            </div>
            <div class="row">
                <div class="col card-header">
                    <div class="input-group">
                        <form action="/dataKaryawan/search" method="GET">
                            <div class="input-group input-group-lg">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" value="SEARCH">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                                <div class="col-10">
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Search..." name="search" value="{{ old('search') }}">
                                </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="dropdown">
                        <select class="selector form-select">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                        <label>entires per page</label>
                    </div> -->

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
                            <th>Nama Karyawan</th>
                            <th>NIK</th>
                            <th>Nama Jabatan</th>
                            <th>Status</th>
                            <th>Created By</th>
                            <th>Update By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataKaryawan as $item)
                        <tr>
                            <td>{{ $item->id_karyawan}}</td>
                            <td>{{ $item->nama_karyawan}}</td>
                            <td>{{ $item->nik}}</td>
                            <td>{{ $item->jabatan}}</td>
                            <td>
                                <span class="badge bg-success">Aktif</span>
                            </td>
                            <td>{{ $item->created_by}}</td>
                            <td>{{ $item->updated_by}}</td>
                            <td>
                                <div class="col-group">
                                    <button type="button" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning">
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

<!--GET a QUOTE MODAL Tambah-->
<div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Karyawan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpandataKaryawan')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_karyawan">Nama Karyawan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_karyawan" name="nama_karyawan" type="text" placeholder="Nama Karyawan" required="" />
                            @error('nama_karyawan')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nik">NIK<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nik" name="nik" type="text" placeholder="NIK" required="" />
                            @error('nik')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="jabatan">Nama Jabatan<span class="text-primary ml-1">*</span></label>
                            <select name="jabatan" class="form-select" data-live-search="true">
                                <option>Direktur</option>
                                <option>Sekretaris</option>
                            </select>
                            @error('jabatan')
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
                </form>
            </div>
        </div>
    </div>
</div>

<!--GET a QUOTE MODAL edit-->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Karyawan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="groupasset">Nama Karyawan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Nama Karyawan" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="namagroupasset">NIK<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="NIK" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="namagroupasset">Nama Jabatan<span class="text-primary ml-1">*</span></label>
                            <select name="jabatan" class="form-select" data-live-search="true">
                                <option>Direktur</option>
                                <option>Sekretaris</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6"><br>
                            <button class="btn btn-success" style="float: right;" type="button">
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
                <h4 class="modal-title">Hapus Karyawan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold text-small" for="kodegroupasset">Status Data Karyawan<span class="text-primary ml-1">*</span></label>
                            <select name="status" class="form-select" data-live-search="true">
                                <option>Aktif</option>
                                <option>Non-Aktif</option>
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label class="font-weight-bold text-small" for="namagroupasset">Keterangan Hapus<span class="text-primary ml-1">*</span></label>
                            <textarea class="form-control" id="firstname" type="text" placeholder="Keterangan Hapus" required=""></textarea>
                        </div>
                        <div class="form-group col-lg-12"><br>
                            <button class="btn btn-success" style="float: right;" type="button">
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