<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body onafterprint="redirect()">
    <br>
    <h2><center>Laporan Transaksi</center></h2>
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Nama Kasir</th>
                    <th scope="col">Jumlah Beli</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Tanggal Beli</th>
                </tr>
            </thead>
            @foreach ($transaksi as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->kode_transaksi }}</td>
                <td>{{ $item->obat->nama_obat }}</td>
                <td>{{ $item->nama_kasir }}</td>
                <td>{{ $item->jumlah_beli }}</td>
                <td>{{ $item->total_harga }}</td>
                <td>{{ $item->tanggal_beli }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

<h6 align="right">
@php $tgl=date('d-m-Y'); @endphp
   Bogor,{{$tgl}} 
</h6>

<script type="text/javascript">
    window.print();
</script>
<script type="text/javascript">
    function redirect() {
        window.location.href = '@php echo $redirect; @endphp';
    }
</script>
</html>