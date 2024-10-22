<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Barang: {{ $barang->nama_barang }}</h1>
        <p>Kategori: {{ $barang->kategori }}</p>
        <p>Stok: {{ $barang->stok }}</p>
        <h2>Transaksi</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Tanggal Transaksi</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang->transaksis as $transaksi)
                    <tr>
                        <td>{{ $transaksi->tanggal_transaksi }}</td>
                        <td>{{ $transaksi->jumlah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>