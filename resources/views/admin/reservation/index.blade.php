@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'index'
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Pemesanan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Pesan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i => $dataR)
                                <tr>
                                    <td>{{ $i + 1}}</td>
                                    <td> {{ $dataR->nama}}</td>
                                    <td> {{ $dataR->email}}</td>
                                    <td> {{ $dataR->telepon}}</td>
                                    <td> {{ $dataR->pesan}}</td>
                                    <td>
                                        <a href="{{ route('reservation.edit', $dataR->id)}}"><i class="far fa-edit" style="color:green"></i></a>
                                        |
                                        <a href="{{ route('reservation.destroy', $dataR->id)}}"><i class="fas fa-trash" style="color:red"></i></a>
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

@push('scripts')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
@endpush