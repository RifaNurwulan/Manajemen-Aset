<!DOCTYPE html>
<html>

<head>

    <title>Detail List Aset - MST</title>
</head>
<style type="text/css">
    body {
        font-family: 'Roboto Condensed', sans-serif;
    }

    /* .row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(var(--bs-gutter-y)*-1);margin-right:calc(var(--bs-gutter-x)/-2);margin-left:calc(var(--bs-gutter-x)/-2)}.row>*{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x)/2);padding-left:calc(var(--bs-gutter-x)/2);margin-top:var(--bs-gutter-y)}.col{flex:1 0 0%}.row-cols-auto>*{flex:0 0 auto;width:auto}.row-cols-1>*{flex:0 0 auto;width:100%}.row-cols-2>*{flex:0 0 auto;width:50%}.row-cols-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-4>*{flex:0 0 auto;width:25%}.row-cols-5>*{flex:0 0 auto;width:20%}.row-cols-6>*{flex:0 0 auto;width:16.6666666667%} */

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
    .w-40 {
        width: 40%;
    }

    .w-85 {
        width: 85%;
    }

    .w-15 {
        width: 15%;
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

    .tableinfo table {
  float: left;
  width: 50%;
}

.tableinfo table td, tr {
    border:none !important;
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
                <h3>Detail List Aset</h3>
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
            <!-- <p class="m-0 pt-5 text-bold w-100">Created Date -
        
        </div>
        <!-- <div class="w-50 float-left logo mt-10">
            
        <img src="{{ asset('template/images/logo/logomst.png') }}">
        </div> -->
            <div style="clear: both;"></div>
        </div>
        @foreach ($listasset as $item)
        <div class="table-section bill-tbl w-100 mt-10">
            <table class="table w-100 mt-10">
                <tr>
                    <th class="w-50">QR CODE</th>
                    <th class="w-50">Foto Aset</th>
                </tr>
                <tr>
                    <td align=center>
                        <div class="box-text">
    
                        <img src="data:image/png;base64, {{ base64_encode($qrcode) }}" alt="QR Code" />
                        </div>
                    </td>
                    <td align=center>
                        <div class="box-text">
                            @php
                            $image = base_path('public/' . $item->foto_aset);
                            $typedua = pathinfo($image, PATHINFO_EXTENSION);
                            $datadua = file_get_contents($image);
                            $src = 'data:image/'.$typedua.';base64,'. base64_encode($datadua);
                            @endphp
                            <img src="{{$src}}" width='100' height='100' class="img img-responsive" />
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="table-section bill-tbl w-100 mt-10">
            <table class="table w-100 mt-10">
                <tr>
                    <th class="w-100">Informasi Detail Asset [{{$item->nama_aset}}]</th>
            </table>
        </div>
        <div class="tableinfo">
            <table >
                <tr>
                    <td> Kode Aset </td>
                    <td width="3px"> : </td>
                    <td> {{$item->kode_aset}} </td>
                </tr>
                <tr>
                    <td> Grup Aset </td>
                    <td> : </td>
                    <td> {{$item->nama_grup_aset}} </td>
                </tr>
                <tr>
                    <td> Nama Aset </td>
                    <td> : </td>
                    <td> {{$item->nama_aset}} </td>
                </tr>
                <tr>
                    <td> Satuan </td>
                    <td> : </td>
                    <td> {{$item->nama_satuan}} </td>
                </tr>
                <tr>
                    <td> Supplier </td>
                    <td> : </td>
                    <td> {{$item->nama_supplier}} </td>
                </tr>
                <tr>
                    <td> Tanggal Beli </td>
                    <td> : </td>
                    <td> {{$item->tgl_beli}} </td>
                </tr>
                <tr>
                    <td> Tanggal Pakai </td>
                    <td> : </td>
                    <td> {{$item->tgl_pakai}} </td>
                </tr>
                <tr>
                    <td> No Faktur </td>
                    <td> : </td>
                    <td> {{$item->no_faktur}} </td>
                </tr>
                <tr>
                    <td> PIC </td>
                    <td> : </td>
                    <td> {{$item->nama_karyawan}} </td>
                </tr>
                <tr>
                    <td> Departemen </td>
                    <td> : </td>
                    <td> {{$item->nama_departement}} </td>
                </tr>
        
            </table>
        </div>
        <div class="tableinfo">
            <table style="border-collapse: collapse; border: none;">
              
                <tr>
                    <td> Lokasi </td>
                    <td> : </td>
                    <td> {{$item->lokasi}} </td>
                </tr>
                <tr>
                    <td> Keterangan </td>
                    <td> : </td>
                    <td> {{$item->keterangan}} </td>
                </tr>
                <tr>
                    <td> Status </td>
                    <td> : </td>
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
                <tr>
                    <td> Kondisi </td>
                    <td> : </td>
                    <td> {{$item->kode_aset}} </td>
                </tr>
                <tr>
                    <td> Metode Penyusutan </td>
                    <td> : </td>
                    <td> {{$item->metode}} </td>
                </tr>
                <tr>
                    <td> Harga Perolehan </td>
                    <td> : </td>
                    <td> @currency($item->harga_perolehan) </td>
                </tr>
                <tr>
                    <td> Umur(Bulan) </td>
                    <td> : </td>
                    <td> {{$item->umur}} </td>
                </tr>
                <tr>
                    <td> Persentase </td>
                    <td> : </td>
                    <td> {{ $item->persentase}} </td>
                </tr>
                <tr>
                    <td> Tarif Penyusutan </td>
                    <td> : </td>
                    <td> @currency($item->tarif) </td>
                </tr>

            </table>
        </div>

        @endforeach

</html>