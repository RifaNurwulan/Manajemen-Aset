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
                    <button type="button" style="float: right;" data-toggle="modal" data-target="#quoteForm" class="btn btn-success">
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
                                <th>Created By</th>
                                <th>Created At</th>
                                <th>Updated By</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($satuan as $item)
                            <tr>
                                <td>{{ $item->id_satuan}}</td>
                                <td>{{ $item->kode_satuan}}</td>
                                <td>{{ $item->nama_satuan}}</td>
                                <td>{{ $item->created_by}}</td>
                                <td>{{ $item->created_at}}</td>
                                <td>{{ $item->updated_by}}</td>
                                <td>{{ $item->updated_at}}</td>
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



@endsection