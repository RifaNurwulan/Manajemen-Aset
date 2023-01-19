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
                        <div class="input-group input-group-lg">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-lg" placeholder="Search..." id="searchinput">
                            </div>
                        </div>
                    </div>

                    <button type="button" style="float: right;" data-toggle="modal"
                        data-target="#quoteForm" class="btn btn-success">
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
                                <th>Update By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PT. Makmur</td>
                                <td>Jln. Yupiter Barat</td>
                                <td>Bandung</td>
                                <td>Suneo</td>
                                <td>(022) 4820 8838</td>
                                <td>0896 4820 8838</td>
                                <td>021-001287738</td>
                                <td>makmur@gmail.com</td>
                                <td>aman jaya makmur</td>
                                <td>Aulia</td>
                                <td>Dayen</td>
                                <td>
                                    <div class="col-group">
                                        <button type="button" data-toggle="modal" data-target="#quoteFormEdit"
                                            class="btn btn-warning">
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
                            <tr>
                                <td>2</td>
                                <td>fringilla.euismod.enim@quam.ca</td>
                                <td>0500 527693</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>mi.Duis@diam.edu</td>
                                <td>(012165) 76278</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>velit@nec.com</td>
                                <td>0309 690 7871</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                <td>0500 441046</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>diam.Sed.diam@anteVivamusnon.org</td>
                                <td>(01653) 27844</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>sodales@nuncsit.org</td>
                                <td>0800 528324</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>gravida.molestie@tinciduntadipiscing.org</td>
                                <td>(016977) 4107</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Quisque.purus@mauris.org</td>
                                <td>(0151) 561 8896</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                                <td>07740 599321</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>076 4820 8838</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
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

<!--GET a QUOTE MODAL Tambah -->
<div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Supplier</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="namasupplier">Nama Supplier<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Nama Supplier"
                                required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="alamat">Alamat<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Alamat" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kota">Kota<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Kota" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="telephone">Telephone<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Telephone"
                                required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="mobilephone">Mobile Phone<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Mobile Phone"
                                required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="fax">Fax<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Fax" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="email">Email<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Email" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="notes">Notes<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Notes" required="" />
                        </div>
                        <div class="form-group col-lg-4"><br>
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

<!--GET a QUOTE MODAL Edit-->
<div class="modal fade" id="quoteFormEdit" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
            <div class="modal-header">
                <h4 class="modal-title">Edit Supplier</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="namasupplier">Nama Supplier<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Nama Supplier"
                                required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="alamat">Alamat<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Alamat" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kota">Kota<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Kota" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="kota">PIC<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="PIC" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="telephone">Telephone<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Telephone"
                                required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="mobilephone">Mobile Phone<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Mobile Phone"
                                required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="fax">Fax<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Fax" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="email">Email<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Email" required="" />
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="font-weight-bold text-small" for="notes">Notes<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Notes" required="" />
                        </div>
                        <div class="form-group col-lg-4"><br>
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

@endsection
