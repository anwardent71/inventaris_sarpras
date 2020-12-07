@extends('voyager::master')

@section('page_header')
<div class="container-fluid">
    <h1 class="page-title">
        <i class="icon voyager-anchor"></i> List Barang
    </h1>
    <a href="/admin/barangs/create" class="btn btn-success" title="as">
        <i class="voyager-plus"></i> Buat Baru
    </a>
    <a href="/admin/cetak/pdf/barangs/{{ $ruang }}" class="btn btn-primary">Cetak PDF</a>
    <a href="/admin/cetak/excel/barangs/{{ $ruang }}" class="btn btn-success">Cetak Excel</a>
</div>
@stop
@section('content')
<div class="page-content browse container-fluid">
    <div class="row">
        <div class="cold-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="dataTableBarang" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Spesifikasi</th>
                                    <th>Jumlah</th>
                                    <th>Baik</th>
                                    <th>Rusak Ringan</th>
                                    <th>Rusak Berat</th>
                                    <th>Keterangan</th>
                                    <th>Ruang</th>
                                    <th class="actions text-right dt-not-orderable">{{ __('voyager::generic.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $barang)
                                <tr>
                                    <td>{{ $barang['nama_barang'] }}</td>
                                    <td>{{ $barang['spesifikasi'] }}</td>
                                    <td>{{ $barang['jumlah'] }}</td>
                                    <td>{{ $barang['baik'] }}</td>
                                    <td>{{ $barang['rusak_ringan'] }}</td>
                                    <td>{{ $barang['rusak_berat'] }}</td>
                                    <td>{{ $barang['keterangan'] }}</td>
                                    <td>{{ $barang['id_ruang'] }}</td>
                                    <td class="no-sort no-click bread-actions">
                                        <a href="/admin/barangs/{{ $barang['id'] }}" title="as">
                                            <span class="btn btn-warning hidden-xs hidden-sm"><i class="voyager-eye"></i> Lihat</span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#dataTableBarang').DataTable();
    })
</script>
@stop