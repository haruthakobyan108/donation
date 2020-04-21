@extends('admin.layouts.auth')

@section('content')
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('/images/login.png'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ route('admin.login.request') }}">
              @csrf
              <div class="card card-login">
                <div class="card-body ">
                  <h4 class="card-title text-center">Admin | Login</h4>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="email" class="form-control" name="email" placeholder="Email..." value="{{ old('email') }}">
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control" name="password" placeholder="Password..." value="">
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <button type="submit" class="btn btn-rose" name="button">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
