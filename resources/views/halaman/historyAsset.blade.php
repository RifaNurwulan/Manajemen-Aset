@extends('Template.beranda')
@section('title', 'History Asset')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">History Asset</h5>
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
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Search..." id="searchinput">
                            </div>
                        </div>
                    </div>

                    <button type="button" style="float: right; " data-toggle="modal" data-target="#quoteForm" class="btn btn-primary">
                        <i class="fa fa-print"></i>
                        Cetak PDF
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
                                <th>ID Transparasi</th>
                                <th>PIC Awal</th>
                                <th>PIC Baru</th>
                                <th>Created By</th>
                                <th>Created Date</th>
                                <th>Update By</th>
                                <th>Update Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>TR001</td>
                                <td>Aulia Nisa</td>
                                <td>Rifa Nanda</td>
                                <td>Ara</td>
                                <td>15/01/2023</td>
                                <td>Nana</td>
                                <td>18/01/2023</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TR001</td>
                                <td>Aulia Nisa</td>
                                <td>Rifa Nanda</td>
                                <td>Ara</td>
                                <td>15/01/2023</td>
                                <td>Nana</td>
                                <td>18/01/2023</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TR001</td>
                                <td>Aulia Nisa</td>
                                <td>Rifa Nanda</td>
                                <td>Ara</td>
                                <td>15/01/2023</td>
                                <td>Nana</td>
                                <td>18/01/2023</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TR001</td>
                                <td>Aulia Nisa</td>
                                <td>Rifa Nanda</td>
                                <td>Ara</td>
                                <td>15/01/2023</td>
                                <td>Nana</td>
                                <td>18/01/2023</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TR001</td>
                                <td>Aulia Nisa</td>
                                <td>Rifa Nanda</td>
                                <td>Ara</td>
                                <td>15/01/2023</td>
                                <td>Nana</td>
                                <td>18/01/2023</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TR001</td>
                                <td>Aulia Nisa</td>
                                <td>Rifa Nanda</td>
                                <td>Ara</td>
                                <td>15/01/2023</td>
                                <td>Nana</td>
                                <td>18/01/2023</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TR001</td>
                                <td>Aulia Nisa</td>
                                <td>Rifa Nanda</td>
                                <td>Ara</td>
                                <td>15/01/2023</td>
                                <td>Nana</td>
                                <td>18/01/2023</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TR001</td>
                                <td>Aulia Nisa</td>
                                <td>Rifa Nanda</td>
                                <td>Ara</td>
                                <td>15/01/2023</td>
                                <td>Nana</td>
                                <td>18/01/2023</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TR001</td>
                                <td>Aulia Nisa</td>
                                <td>Rifa Nanda</td>
                                <td>Ara</td>
                                <td>15/01/2023</td>
                                <td>Nana</td>
                                <td>18/01/2023</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TR001</td>
                                <td>Aulia Nisa</td>
                                <td>Rifa Nanda</td>
                                <td>Ara</td>
                                <td>15/01/2023</td>
                                <td>Nana</td>
                                <td>18/01/2023</td>
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



@endsection