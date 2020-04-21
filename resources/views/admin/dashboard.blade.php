@extends('admin.layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">people</i>
            </div>
            <h4 class="card-title">
              Users
              <a href="{{ route('users.create') }}" class="btn btn-sm btn-rose pull-right">
                Create<div class="riproseple-container"></div>
              </a>
            </h4>
          </div>
          <div class="card-body">
            <div class="toolbar">
            </div>
            <div class="material-datatables">
              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>Full name</th>
                    <th>Registered Date</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Full name</th>
                    <th>Registered Date</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($users as $key => $user)
                    <tr>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->created_at }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->.
  </div>
  </div>
@endsection

@section('scripts')
<script>
  $(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let table = $('#datatables');

    table.DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }
    });

    //Like record
    table.on('click', '.like', function() {
      alert('You clicked on Like button');
    });
  });
</script>
@endsection
