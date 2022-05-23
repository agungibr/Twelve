@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'index'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $dataKas)
                            <tr>
                                <td>{{ $i + 1}}</td>
                                <td> {{ $dataKas->nama}}</td>
                                <td> {{ $dataKas->email}}</td>
                                <td> {{ $dataKas->telepon}}</td>
                                <td> {{ $dataKas->pesan}}</td>
                                <td>
                                    <a href="{{ route('reservation.edit', $dataKas->id)}}"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="{{ route('reservation.destroy', $dataKas->id)}}"><i class="fas fa-trash" style="color:red"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
@endpush