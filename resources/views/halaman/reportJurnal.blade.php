@extends('Template.beranda')
@section('title', 'Report Jurnal')

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="col py-6">
                <h5 class="m-0 font-weight-bold text-primary">Report Jurnal</h5>
            </div>
            <div class="col card-header">
                <div class="btn-group">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        Tahun
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">2023</a>
                        <a class="dropdown-item" href="#">2022</a>
                        <a class="dropdown-item" href="#">2020</a>
                    </div>
                </div>
                &emsp;
                <div class="btn-group">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        Bulan
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">10</a>
                        <a class="dropdown-item" href="#">11</a>
                        <a class="dropdown-item" href="#">12</a>
                    </div>
                </div>
                &emsp;
                <div class="btn-group">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        All
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">10</a>
                        <a class="dropdown-item" href="#">11</a>
                        <a class="dropdown-item" href="#">12</a>
                    </div>
                </div>
                &emsp;
                <div class="btn-group">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        All
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">10</a>
                        <a class="dropdown-item" href="#">11</a>
                        <a class="dropdown-item" href="#">12</a>
                    </div>
                </div>

                <button type="button" style="float: right; " data-toggle="modal" data-target="#quoteForm" class="btn btn-primary">
                    <i class="fa fa-print"></i>
                    Cetak PDF
                </button>
                <button type="button" style="float: right; margin-right:10px; " data-toggle="modal" data-target="#quoteForm" class="btn btn-secondary">
                    <i class="fa fa-file-archive-o"></i>
                    Preview
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <!-- <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table class="table table-striped dataTable-table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Group Asset</th>
                                <th>Nama Group Asset</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Graiden</td>
                                <td>vehicula.aliquet@semconsequat.co.uk</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Dale</td>
                                <td>fringilla.euismod.enim@quam.ca</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Nathaniel</td>
                                <td>mi.Duis@diam.edu</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Darius</td>
                                <td>velit@nec.com</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Oleg</td>
                                <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kermit</td>
                                <td>diam.Sed.diam@anteVivamusnon.org</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Jermaine</td>
                                <td>sodales@nuncsit.org</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Ferdinand</td>
                                <td>gravida.molestie@tinciduntadipiscing.org</td>
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kuame</td>
                                <td>Quisque.purus@mauris.org</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Deacon</td>
                                <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>
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
    </table> -->
</section>



@endsection