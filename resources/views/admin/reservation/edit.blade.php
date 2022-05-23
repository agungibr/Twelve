@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'edit'
])

@section('content')
<div class="content">
    <div class="row">
        <form class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Change Password') }}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Old Password') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="old_password" class="form-control" placeholder="Old password" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('New Password') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label">{{ __('Password Confirmation') }}</label>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
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
            </div>
        </form>
    </div>
</div>
@endsection