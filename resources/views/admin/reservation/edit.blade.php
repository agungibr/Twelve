@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'edit'
])

@section('content')
<div class="content">
    <div class="row">
        <form action="{{ route('reservation.update', $data->id)}}" method="post" class="col-md-12">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Change Reservation') }}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Nama') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" value="{{ $data->nama}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Email') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" value="{{ $data->email}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Telepon') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="telepon" class="form-control" value="{{ $data->telepon}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Pesan') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="pesan" class="form-control" value="{{ $data->pesan}}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-info btn-round">{{ __('Save Changes') }}</button>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a class="btn btn-info btn-round" data-bs-toggle="collapse" href="{{url('/index')}}" role="button" aria-expanded="false" aria-controls="collapseExample">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection