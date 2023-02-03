@extends('Template.beranda')
@section('title', 'Satuan')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Satuan</h5>
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
                                <th>Kode Satuan</th>
                                <th>Nama Satuan</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Created At</th>
                                <th>Updated By</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($satuan as $item)
                            <tr>
                            @if ($item->status_satuan == 1)   
                                <a href="" class ="btn btn-sm btn danger"></a>
                                @else
                                <a href="" class ="btn btn-sm btn success"></a>
                                @endif
                                <td>{{ $item->id_satuan}}</td>
                                <td>{{ $item->kode_satuan}}</td>
                                <td>{{ $item->nama_satuan}}</td>
                                <td>
                                    <span class="badge-bg-success {{ ($item->status_satuan == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->status_satuan == 1) ? 'Aktif' : 'Non Aktif'}}</span>
                                </td>
                                <td>{{ $item->created_by}}</td>
                                <td>{{ $item->created_at}}</td>
                                <td>{{ $item->updated_by}}</td>
                                <td>{{ $item->updated_at}}</td>
                                <td>
                                    <div class="col-group">
                                        <button type="button" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning"
                                        data-id = "{{ $item->id_satuan }}" data-kode = "{{ $item->kode_satuan }}" data-nama_satuan = "{{ $item->nama_satuan }}" data-created_by = "{{ $item->created_by }}" 
                                        data-created_at = "{{ $item->created_at }}" data-updated_by = "{{ $item->updated_by }}" data-updated_by = "{{ $item->updated_by }}">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button type="button" data-toggle="modal" data-id = "{{ $item->id_satuan }}" data-target="#quoteFormTrash" class="btn btn-danger">
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

<!--GET a QUOTE MODAL -->
<div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Satuan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpanSatuan')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="kode_satuan">Kode Satuan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_satuan" name="kode_satuan" type="text" placeholder="Kode Satuan" required="" />
                            @error('kode_satuan')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-8">
                            <label class="font-weight-bold text-small" for="nama_satuan">Nama Satuan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_satuan" name="nama_satuan" type="text" placeholder="Nama Satuan" required="" />
                            @error('nama_satuan')
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

<!--GET a QUOTE MODAL edit-->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Satuan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updatesatuan') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <input class="form-control" id="id_satuan" name="id_satuan" type="text" placeholder="ID Jabatan" required="" hidden="true"/>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kode_satuan">Kode Jabatan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kode_satuan" name="kode_satuan" type="text" placeholder="Kode Satuan" required="" />
                            @error('kode_satuan')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_satuan">Jabatan<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_satuan" name="nama_satuan" type="text" placeholder="Nama Satuan" required="" />
                            @error('nama_satuan')
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

<!--GET a QUOTE MODAL Trash -->
<div class="modal fade" id="quoteFormTrash" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Satuan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('deletesatuan') }}">
                    {{ csrf_field() }}
                    <input class="form-control" id="id_satuan" name="id_satuan" type="text" placeholder="ID" required="" hidden="true"/>
                    <div class="row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold text-small" for="status_satuan">Status Data Satuan<span class="text-primary ml-1">*</span></label>
                            <select name="status_satuan" id="status_satuan" class="form-select" data-live-search="true">
                                <option value="1">Aktif</option>
                                <option value="0">Non-Aktif</option>
                            </select>
                        </div>
                        <div class="form-group col-9">
                            <label class="font-weight-bold text-small" for="ket">Keterangan Hapus<span class="text-primary ml-1">*</span></label>
                            <textarea class="form-control" id="ket" type="text" placeholder="Keterangan Hapus" required=""></textarea>
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
        $("#quoteFormEdit").find('input[name="id_satuan"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="kode_satuan"]').val($(e.relatedTarget).data('kode'));
        $("#quoteFormEdit").find('input[name="nama_satuan"]').val($(e.relatedTarget).data('nama_satuan'));
    })
    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        $("#quoteFormTrash").find('input[name="id_satuan"]').val($(e.relatedTarget).data('id'));
    })
</script>
@endpush('')