<!DOCTYPE html>
<html>

<head>
    <title>Laporan List Aset - MST</title>
</head>
<style type="text/css">
    body {
        font-family: 'Roboto Condensed', sans-serif;
    }

    .m-0 {
        margin: 0px;
    }

    .p-0 {
        padding: 0px;
    }

    .pt-5 {
        padding-top: 5px;
    }

    .mt-10 {
        margin-top: 10px;
    }

    .text-center {
        text-align: center !important;
    }

    .w-100 {
        width: 100%;
    }

    .w-50 {
        width: 50%;
    }

    .w-85 {
        width: 85%;
    }

    .w-15 {
        width: 15%;
    }

    .w-30 {
        width: 30%;
    }

    .logo img {
        width: 45px;
        height: 45px;
        padding-top: 30px;
    }

    .logo span {
        margin-left: 8px;
        top: 19px;
        position: absolute;
        font-weight: bold;
        font-size: 25px;
    }

    .gray-color {
        color: #5D5D5D;
    }

    .text-bold {
        font-weight: bold;
    }

    .border {
        border: 1px solid black;
    }

    table tr,
    th,
    td {
        border: 1px solid #d2d2d2;
        border-collapse: collapse;
        padding: 7px 8px;
    }

    table tr th {
        background: #F4F4F4;
        font-size: 15px;
    }

    table tr td {
        font-size: 13px;
    }

    table {
        border-collapse: collapse;
    }

    .box-text p {
        line-height: 10px;
    }

    .float-left {
        float: left;
    }

    .total-part {
        font-size: 16px;
        line-height: 12px;
    }

    .total-right p {
        padding-right: 20px;
    }

    .table1 {
        border-collapse: collapse;
        width: 90%;
        text-align: center;
        padding: 5px;
    }

</style>

<body>
<table class='table1'>
        <tr style="border:none;">
            <td style="border:none;"><img src="<?php echo $pic ?>" height="100" width="100"></td>
            <td style="border:none;">
                <h3>Laporan List Aset</h3>
                <h3>PT. Mitra Sinerji Teknoindo</h3>
                <p style="font-size:14px;"><i>Metro Indah Mall Ruko Blok G-16, Bandung | Telp. [022] 753 6407</i></p>
            </td>
        </tr>
    </table>
    <!-- <div class="head-title">
        <h1 class="text-center m-0 p-0">List Asset</h1>
    </div> -->
    <div class="add-detail mt-10">
    <hr style="border: 3px double #000;">
        <div class="w-50 float-left mt-10">
            <!-- <p class="m-0 pt-5 text-bold w-100">Invoice Id - <span class="gray-color">#6</span></p>
        <p class="m-0 pt-5 text-bold w-100">Order Id - <span class="gray-color">162695CDFS</span></p> -->
            <p class="m-0 pt-5 text-bold w-100">Dibuat Tanggal - <span class="gray-color">{{ $tglawal }}</span>
        <span class="gray-color">s/d </span><span class="gray-color">{{ $tglakhir }}</span></p>
        </div>
        <!-- <div class="w-50 float-left logo mt-10">
            
        <img src="{{ asset('template/images/logo/logomst.png') }}">
        </div> -->
        <div style="clear: both;"></div>
    </div>
    <!-- <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">From</th>
                <th class="w-50">To</th>
            </tr>
            <tr>
                <td>
                    <div class="box-text">
                        <p>Gujarat</p>
                        <p>360004</p>
                        <p>Near Haveli Road,</p>
                        <p>Lal Darvaja,</p>
                        <p>India</p>
                        <p>Contact : 1234567890</p>
                    </div>
                </td>
                <td>
                    <div class="box-text">
                        <p>Rajkot</p>
                        <p>360012</p>
                        <p>Hanumanji Temple,</p>
                        <p>Lati Ploat</p>
                        <p>Gujarat</p>
                        <p>Contact : 1234567890</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">Payment Method</th>
                <th class="w-50">Shipping Method</th>
            </tr>
            <tr>
                <td>Cash On Delivery</td>
                <td>Free Shipping - Free Shipping</td>
            </tr>
        </table>
    </div> -->
    <div class="table-section bill-tbl w-100 mt-10" style="font-size: 8px;">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-15">No</th>
                <th class="w-50">Kode Aset</th>
                <th class="w-50">Nama Aset</th>
                <th class="w-50">Nama Grup Aset</th>
                <th class="w-30">Satuan</th>
                <th class="w-50">Tanggal Beli</th>
                <!-- <th class="w-50">Tanggal Pakai</th> -->
                <th class="w-50">Supplier</th>
                <!-- <th class="w-50">No Faktur Beli</th> -->
                <th class="w-50">PIC</th>
                <th class="w-50">Departemen</th>
                <th class="w-50">Lokasi</th>
                <th class="w-30">Foto Aset</th>
                <!-- <th class="w-50">Metode</th>
                <th class="w-50">Umur</th> -->
                <!-- <th class="w-50">Keterangan</th> -->
                <th class="w-50">Status</th>
                <!-- <th class="w-50">Kondisi</th> -->

            </tr>
            @foreach ($listasset as $item)
            <tr align="center">
                <td>{{ $item->id_list_aset}}</td>
                <td>{{ $item->kode_aset}}</td>
                <td>{{ $item->nama_aset}}</td>
                <td>{{ $item->nama_grup_aset}}</td>
                <td>{{ $item->nama_satuan}}</td>
                <td>{{ $item->tgl_beli}}</td>
                <td>{{ $item->nama_supplier}}</td>
                <td>{{ $item->nama_karyawan}}</td>
                <td>{{ $item->nama_departement}}</td>
                <td>{{ $item->lokasi}}</td>
                <td>
                @php
                $image = base_path('public/' . $item->foto_aset);
        $typedua = pathinfo($image, PATHINFO_EXTENSION);
        $datadua = file_get_contents($image);
        $src = 'data:image/'.$typedua.';base64,'. base64_encode($datadua);
        @endphp
                <img src="{{$src}}" width='50' height='50' class="img img-responsive" />
                </td>
                <!-- <td>{{ $item->harga_perolehan}}</td> -->
                <!-- <td>{{ $item->tarif}}</td> -->
                <td>
                <span
                                        class="badge {{ ($item->id_pelepasanstatus == 1) ? 'badge-bg-success bg-success' : 'badge-bg-danger bg-danger' }}">
                                        {{ ($item->id_pelepasanstatus == 1) 
    ? App\Models\statusPelepasan::where('id_pelepasanstatus', 1)->firstOrFail()->desc_pelepasanstatus 
    : App\Models\statusPelepasan::where('id_pelepasanstatus', $item->id_pelepasanstatus)->firstOrFail()->desc_pelepasanstatus 
  }}
                                    </span>
                </td>
                
            </tr>
            @endforeach
            <!-- <tr>
            <td colspan="7">
                <div class="total-part">
                    <div class="total-left w-85 float-left" align="right">
                        <p>Sub Total</p>
                        <p>Tax (18%)</p>
                        <p>Total Payable</p>
                    </div>
                    <div class="total-right w-15 float-left text-bold" align="right">
                        <p>$20</p>
                        <p>$20</p>
                        <p>$330.00</p>
                    </div>
                    <div style="clear: both;"></div>
                </div> 
            </td>
        </tr> -->
        </table>
    </div>

</html>