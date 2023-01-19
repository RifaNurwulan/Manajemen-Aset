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
                    <button type="button" style="float: right;" data-toggle="modal" data-target="#quoteForm"
                        class="btn btn-success">
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
                                <th>Created Date</th>
                                <th>Update By</th>   
                                <th>Update Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>U-01</td>
                                <td>UNIT</td>
                                <td>Suneo</td>
                                <td>16/01/2023</td>
                                <td>Dayen</td>
                                <td>18/01/2023</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>RBD</td>
                                <td>Building Renovation</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>CT</td>
                                <td>Computer & Telephone</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>FF</td>
                                <td>Furniture & Fixture</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>MV</td>
                                <td>Kendaraan</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>KE</td>
                                <td>Kitchen Equipment</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>_GDL_</td>
                                <td>Lightning</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>LO</td>
                                <td>LOTUYE</td>
                                </td>
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

<!--GET a QUOTE MODAL -->
<div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Satuan</span></h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="form-group col-4">
                            <label class="font-weight-bold text-small" for="kodegroupasset">Kode Satuan<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Kode Satuan"
                                required="" />
                        </div>
                        <div class="form-group col-8">
                            <label class="font-weight-bold text-small" for="namagroupasset">Nama Satuan<span
                                    class="text-primary ml-1">*</span></label>
                            <input class="form-control" id="firstname" type="text" placeholder="Nama Satuan"
                                required="" />
                        </div>
                        <div class="form-group col-lg-12"><br>
                            <button class="btn btn-success" style="float: right; type="button">
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
