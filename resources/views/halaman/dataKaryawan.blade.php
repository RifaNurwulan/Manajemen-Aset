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
                    <button type="button" style="float: right;" data-toggle="modal"
                        data-target="#quoteForm" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data">
                        <i class="fa fa-plus"></i>
                    </button>
                    <!-- <div class="input-group">
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
                    </div> -->
              
                <!-- <div class="dropdown">
                        <select class="selector form-select">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                        <label>entires per page</label>
                    </div> -->



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
                        @foreach ($datakaryawan as $item)
                        <tr>
<<<<<<< HEAD
                            @if ($item->status_data_karyawan == 1)
                            <a href="" class="btn btn-sm btn danger"></a>
                            @else
                            <a href="" class="btn btn-sm btn success"></a>
=======
                            @if ($item->status_data_karyawan == 1)   
                            <a href="" class ="btn btn-sm btn danger"></a>
                            @else
                            <a href="" class ="btn btn-sm btn success"></a>
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
                            @endif
                            <td>{{ $item->id_karyawan}}</td>
                            <td>{{ $item->nama_karyawan}}</td>
                            <td>{{ $item->nik}}</td>
                            <td>{{ $item->desc_jabatan}}</td>
                            <td>
<<<<<<< HEAD
                                <span
                                    class="badge-bg-success {{ ($item->status_data_karyawan == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->status_data_karyawan == 1) ? 'Aktif' : 'Non Aktif'}}</span>
=======
                                <span class="badge-bg-success {{ ($item->status_data_karyawan == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->status_data_karyawan == 1) ? 'Aktif' : 'Non Aktif'}}</span>
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
                            </td>
                            <td>{{ $item->created_by}}</td>
                            <td>{{ $item->updated_by}}</td>
                            <td>
                                <div class="col-group">
                                    <button type="button" data-toggle="modal" data-target="#quoteFormEdit"
                                        class="btn btn-warning" data-id="{{ $item->id_karyawan }}"
                                        data-nama="{{ $item->nama_karyawan }}" data-nik="{{ $item->nik }}"
                                        data-jabatan="{{ $item->id_jabatan }}" data-id_jabatan = "{{ $item->id_jabatan }}">
                                        <i class="fa fa-edit"></i>
                                    </button>

<<<<<<< HEAD
                                    <button type="button" data-toggle="modal" data-id="{{ $item->id_karyawan }}"
                                        data-target="#quoteFormTrash" class="btn btn-danger">
=======
                                    <button type="button" data-toggle="modal" data-id = "{{ $item->id_karyawan }}" data-target="#quoteFormTrash" class="btn btn-danger">
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
                                        <i class="fa fa-remove"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- {{ $datakaryawan->links() }} --}}

<<<<<<< HEAD

=======
            
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
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
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('simpandataKaryawan')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_karyawan">Nama Karyawan<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_karyawan" name="nama_karyawan" type="text"
                                placeholder="Nama Karyawan" required="" />
                            @error('nama_karyawan')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nik" >NIK<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nik" name="nik" type="text" placeholder="NIK" required="" value="{{ $kode }}" readonly="readonly" />
                            @error('nik')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_jabatan">Nama Jabatan<span
                                    class="text-primary ml-1">*</span></label>
                            <select name="id_jabatan" data-live-search="true"
                                class="form-select @error('jabatan') is-invalid @enderror">
                                <option value="">- Pilih -</option>
                                @foreach($jabatan as $row)
                                <option value="{{$row->id_jabatan}}"
                                    {{ old('jabatan')==$row->id_jabatan?'selected' :null}}>{{$row->desc_jabatan}}
                                </option>
                                @endforeach
                            </select>
                            @error('jabatan')
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
                <h4 class="modal-title">Edit Data Karyawan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('updatedatakaryawan') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <input class="form-control" id="id_karyawan" name="id_karyawan" type="text"
                            placeholder="ID Karyawan" required="" hidden="true" />
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nama_karyawan">Nama Karyawan<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nama_karyawan" name="nama_karyawan" type="text"
                                placeholder="Nama Karyawan" required="" />
                            @error('nama_karyawan')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="nik">NIK<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="nik" name="nik" type="text" placeholder="NIK" required="" />
                            @error('nik')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="id_jabatan">Nama Jabatan<span
                                    class="text-primary ml-1">*</span></label>

                                    <select name="id_jabatan" id="jabatan_id" data-live-search="true" class="form-select @error('jabatan') is-invalid @enderror">
                            <option value="">- Pilih -</option>    
                            @foreach($jabatan as $row)
                                <option value="{{$row->id_jabatan}}" {{ old('jabatan')==$row->id_jabatan?'selected' :null}}>{{$row->desc_jabatan}}</option>
                                @endforeach
                            </select>    

                            @error('jabatan')
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
                <h4 class="modal-title">Hapus Karyawan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route ('deletedatakaryawan') }}">
                    {{ csrf_field() }}
<<<<<<< HEAD
                    <input class="form-control" id="id_karyawan" name="id_karyawan" type="text" placeholder="ID"
                        required="" hidden="true" />
                    <div class="row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold text-small" for="status_data_karyawan">Status Data
                                Karyawan<span class="text-primary ml-1">*</span></label>
                            <select name="status_data_karyawan" id="status_data_karyawan" class="form-select"
                                data-live-search="true">
=======
                    <input class="form-control" id="id_karyawan" name="id_karyawan" type="text" placeholder="ID" required="" hidden="true"/>
                    <div class="row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold text-small" for="status_data_karyawan">Status Data Karyawan<span class="text-primary ml-1">*</span></label>
                            <select name="status_data_karyawan" id="status_data_karyawan" class="form-select" data-live-search="true">
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
                                <option value="1">Aktif</option>
                                <option value="0">Non-Aktif</option>
                            </select>
                        </div>
                        <div class="form-group col-9">
<<<<<<< HEAD
                            <label class="font-weight-bold text-small" for="ket">Keterangan Hapus<span
                                    class="text-primary ml-1">*</span></label>
                            <textarea class="form-control" id="ket" type="text" placeholder="Keterangan Hapus"
                                required=""></textarea>
=======
                            <label class="font-weight-bold text-small" for="ket">Keterangan Hapus<span class="text-primary ml-1">*</span></label>
                            <textarea class="form-control" id="ket" type="text" placeholder="Keterangan Hapus" required=""></textarea>
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script.js') }}"></script>

     -->
<script>
    $("#quoteFormEdit").on('show.bs.modal', (e) => {
        $("#quoteFormEdit").find('input[name="id_karyawan"]').val($(e.relatedTarget).data('id'));
        $("#quoteFormEdit").find('input[name="nama_karyawan"]').val($(e.relatedTarget).data('nama'));
        $("#quoteFormEdit").find('input[name="nik"]').val($(e.relatedTarget).data('nik'));
        // $("#quoteFormEdit").find('input[name="id_jabatan"]').val($(e.relatedTarget).data('id_jabatan'));
        $("#jabatan_id option[value="+$(e.relatedTarget).data('id_jabatan')+"]").prop("selected", true);
    })
    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        $("#quoteFormTrash").find('input[name="id_karyawan"]').val($(e.relatedTarget).data('id'));
    })
    $("#quoteFormTrash").on('show.bs.modal', (e) => {
        $("#quoteFormTrash").find('input[name="id_karyawan"]').val($(e.relatedTarget).data('id'));
    })
</script>
@endpush('')