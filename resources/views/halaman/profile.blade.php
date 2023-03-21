@extends('Template.beranda')
@section('title', 'Dashboard')

@section('content')

<<<<<<< HEAD
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Profile</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Daftar Aset</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Edit Profile</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('profile.update') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="foto_profil">Foto Profil :</label>
                                            <input type="file" name="foto_profil" id="foto_profil" class="form-control">
                                            @error('foto_profil')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_karyawan">Username :</label>
                                            <input class="form-control" id="nama_karyawan" name="nama_karyawan"
                                                type="text" placeholder="Username" value="{{ $user->nama_karyawan }}"
                                                required="" />
                                            @error('nama_karyawan')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email :</label>
                                            <input class="form-control" id="email" name="email" type="text"
                                                placeholder="Email" value="{{ $user->email }}" required="" />
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-body">
                                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                    <div class="dataTable-container">
                                        <table class="table table-striped table-bordered table-hover dataTable-table table-hover" id="table1_baru">
                                            <thead>
                                                <tr class="bg-primary text-center text-white">
                                                    <th>ID</th>
                                                    <th>Kode Asset</th>
                                                    <th>Nama Asset</th>
                                                    <th>Nama Grup Asset</th>
                                                    <th>Satuan</th>
                                                    <th>Tanggal Pakai</th>
                                                    <th>Supplier</th>
                                                    <th>PIC</th>
                                                    <th>Departement</th>
                                                    <th>Lokasi</th>
                                                    <th>Keterangan</th>
                                                    <th>Status</th>
                                                    <th>Foto Asset</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($listasset as $item)
                                                <tr>
                                                    <td>{{ $item->id_list_aset}}</td>
                                                    <td>{{ $item->kode_aset}}</td>
                                                    <td>{{ $item->nama_aset}}</td>
                                                    <td>{{ $item->nama_grup_aset}}</td>
                                                    <td>{{ $item->nama_satuan}}</td>
                                                    <td>{{ $item->tgl_pakai}}</td>
                                                    <td>{{ $item->nama_supplier}}</td>
                                                    <td>{{ $item->nama_karyawan}}</td>
                                                    <td>{{ $item->nama_departement}}</td>
                                                    <td>{{ $item->lokasi}}</td>
                                                    <td>{{ $item->keterangan}}</td>
                                                    <td><span
                                        class="badge-bg-success {{ ($item->id_pelepasanstatus == 1) ? 'badge bg-success' : 'badge bg-danger' }}">{{ ($item->id_pelepasanstatus == 1) ? 'Aktif' : 'Non Aktif'}}</span>
                                                    </td>
                                                    <td>
                                                        <img src="{{ $item->foto_aset}}" width='50' height='50'
                                                            class="img img-responsive" />
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
@endsection
=======
 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last"> 
                          <h2>Profile</h2><br>
                        </div>
                    </div>
                </div>

                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-user" style="float:left;">&emsp;</i> <h4 class="card-title">Edit Profile</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Name</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Name" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Email" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-lock" style="float:left;">&emsp;</i> <h4 class="card-title">Ubah Password</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Password Lama</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-lock"></i> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Password Baru</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-lock"></i> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Konfirmasi Password</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-lock"></i> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end"> 
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->
@endsection
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
