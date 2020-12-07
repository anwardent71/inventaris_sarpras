<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Excel Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="mt-5">
        <h2 colspan="10" class="text-center">Data Inventarisasi (Barang) Sarana Prasarana</h2>
        <h2 colspan="10" class="text-center">SMK TARUNA BHAKTI</h2>
        <h3 colspan="10" class="text-center">Tahun Pelajaran 2020-2021</h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ruang</th>
                    <th>Nama Barang</th>
                    <th>Spesifikasi</th>
                    <th>Jumlah</th>
                    <th>Baik</th>
                    <th>Rusak Ringan</th>
                    <th>Rusak Berat</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->id_ruang }}</td>
                    <td>{{ $data->nama_barang }}</td>
                    <td>{{ $data->spesifikasi }}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>{{ $data->baik }}</td>
                    <td>{{ $data->rusak_ringan }}</td>
                    <td>{{ $data->rusak_berat }}</td>
                    <td>{{ $data->keterangan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>