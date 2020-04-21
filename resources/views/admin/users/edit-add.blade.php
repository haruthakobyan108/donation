@extends('admin.layouts.app')

@section('heading', 'User Edit')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
              <i class="material-icons">perm_identity</i>
            </div>
            <h4 class="card-title">
              @isset($user)
                Update {{ $user->name }}
              @else
                Create
              @endisset
            </h4>
          </div>
          <div class="card-body">
            <form method="POST" action="@isset($user) {{ route('users.update', [ 'user' => $user ]) }} @else {{ route('users.store') }} @endisset">
              @isset($user)
                {{ method_field('PUT') }}
              @endisset
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Fist name</label>
                    <input type="text" class="form-control" name="name" @isset($user) value="{{ $user->name }}" @endisset>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-rose pull-right">
                @isset($user)
                  Update
                @else
                  Create
                @endisset
              </button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
