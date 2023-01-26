@extends('Template.beranda')
@section('title', 'Supplier')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Data Supplier</h5>
            </div>
            <div class="row">
                <div class="col card-header">
                    <div class="input-group">
                        <form action="/supplier/search" method="GET">
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

                <button type="button" style="float: right;" data-toggle="modal" data-target="#quoteForm" class="btn btn-success">
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
                            <th>Nama Supplier</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>PIC</th>
                            <th>Telephone</th>
                            <th>Mobile Phone</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Notes</th>
                            <th>Created By</th>
                            <th>Updated By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supplier as $item)
                        <tr>
                            <td>{{ $item->id_supplier}}</td>
                            <td>{{ $item->nama_supplier}}</td>
                            <td>{{ $item->alamat}}</td>
                            <td>{{ $item->kota}}</td>
                            <td>{{ $item->pic}}</td>
                            <td>{{ $item->telp}}</td>
                            <td>{{ $item->mobile_phone}}</td>
                            <td>{{ $item->fax}}</td>
                            <td>{{ $item->email}}</td>
                            <td>{{ $item->keterangan}}</td>
                            <td>{{ $item->created_by}}</td>
                            <td>{{ $item->updated_by}}</td>
                            <td>
                                <div class="col-group">
                                    <button type="button" data-toggle="modal" data-target="#quoteFormEdit" class="btn btn-warning" 
                                    data-id ="{{ $item->id_supplier}}" data-nama ="{{ $item->nama_supplier}}" data-alamat ="{{ $item->alamat}}" data-kota ="{{ $item->kota}}" data-pic ="{{ $item->pic}}" data-telp ="{{ $item->telp}}" data-mobile ="{{ $item->mobile_phone}}" data-fax ="{{ $item->fax}}" data-email ="{{ $item->email}}" data-keterangan ="{{ $item->keterangan}}" >
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <!-- 
                                        <button type="button" data-toggle="modal" data-target="#quoteFormTrash"
                                            class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button> -->
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="dataTable-bottom">
                <div class="dataTable-info">
                    
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
                <h4 class="modal-title">Tambah Supplier</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpanSupplier')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_supplier">Nama Supplier<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_supplier" name="nama_supplier" type="text" placeholder="Nama Supplier" required="" />
                            @error('nama_supplier')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="alamat">Alamat<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="alamat" name="alamat" type="text" placeholder="Alamat" required="" />
                            @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kota">Kota<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kota" name="kota" type="text" placeholder="Kota" required="" />
                            @error('kota')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="pic">PIC<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="pic" name="pic" type="text" placeholder="Kota" required="" />
                            @error('kota')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="telp">Telephone<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="telp" name="telp" type="text" placeholder="Telephone" required="" />
                            @error('telp')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="mobile_phone">Mobile Phone<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="mobile_phone" name="mobile_phone" type="text" placeholder="Mobile Phone" required="" />
                            @error('mobile_phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="fax">Fax<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="fax" name="fax" type="text" placeholder="Fax" required="" />
                            @error('fax')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="email">Email<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="email" name="email" type="text" placeholder="Email" required="" />
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="keterangan">Notes<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="keterangan" name="keterangan" type="text" placeholder="Notes" required="" />
                            @error('keterangan')
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

<!--GET a QUOTE MODAL Edit-->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Supplier</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
             <form enctype="multipart/form-data" method="POST" action="{{route('updateSupplier')}}">
                {{ csrf_field() }}
                    <div class="row">
                    <input class="form-control" id="id_supplier" name="id_supplier" type="text" placeholder="ID" required="" hidden="true"/>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_supplier">Nama Supplier<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_supplier" name="nama_supplier" type="text" placeholder="Nama Supplier" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="alamat">Alamat<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="alamat" name="alamat" type="text" placeholder="Alamat" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kota">Kota<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="kota" name="kota" type="text" placeholder="Kota" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="pic">PIC<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="pic" name="pic" type="text" placeholder="PIC" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="telp">Telephone<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="telp" name="telp" type="text" placeholder="Telephone" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="mobile_phone">Mobile Phone<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="mobile_phone" name="mobile_phone" type="text" placeholder="Mobile Phone" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="fax">Fax<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="fax" name="fax" type="text" placeholder="Fax" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="email">Email<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="email" name="email" type="text" placeholder="Email" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="keterangan">Notes<span class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="keterangan" name="keterangan" type="text" placeholder="Notes" required="" />
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
@endsection
@push('script')
<script>
    $("#quoteFormEdit").on('show.bs.modal', (e) => {
        // $("#quoteFormEdit").attr("action", $(e.relatedTarget).data('url'));
        $("#quoteFormEdit").find('input[name="id_supplier"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="nama_supplier"]').val($(e.relatedTarget).data('nama'));
        $("#quoteFormEdit").find('input[name="alamat"]').val($(e.relatedTarget).data('alamat'));
        $("#quoteFormEdit").find('input[name="kota"]').val($(e.relatedTarget).data('kota'));
        $("#quoteFormEdit").find('input[name="pic"]').val($(e.relatedTarget).data('pic'));
        $("#quoteFormEdit").find('input[name="telp"]').val($(e.relatedTarget).data('telp'));
        $("#quoteFormEdit").find('input[name="mobile_phone"]').val($(e.relatedTarget).data('mobile'));
        $("#quoteFormEdit").find('input[name="fax"]').val($(e.relatedTarget).data('fax'));
        $("#quoteFormEdit").find('input[name="email"]').val($(e.relatedTarget).data('email'));
        $("#quoteFormEdit").find('input[name="keterangan"]').val($(e.relatedTarget).data('keterangan'));
    })
        $('#table1').DataTable();
</script>
@endpush('')