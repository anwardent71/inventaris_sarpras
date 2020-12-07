<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export PDF Ruang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="mt-5">
        <h2 class="text-center">Data Inventarisasi (Ru ang) Sarana Prasarana</h2>
        <h2 class="text-center">SMK TARUNA BHAKTI</h2>
        <h3 class="text-center">Tahun Pelajaran 2020-2021</h3>

        <table class="table table-bordered mb-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Ruang</th>
                    <th scope="col">Luas Ruang</th>
                    <th scope="col">No Registrasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ruang ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->nama_ruang }}</td>
                    <td>{{ $data->luas_ruang }}</td>
                    <td>{{ $data->no_registrasi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>
