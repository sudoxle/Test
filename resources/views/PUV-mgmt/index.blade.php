@extends('PUV-mgmt.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">List of Public Utility Drivers</h3>
        </div>
        <div class="col-sm-4">
          <a class="btn btn-primary" href="{{ route('PUV-Driver-Management.create') }}">Add new PUV Driver</a>
        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
      <form method="POST" action="{{ route('PUV-Driver-Management.search') }}">
         {{ csrf_field() }}
         @component('layouts.search', ['title' => 'Search'])
          @component('layouts.two-cols-search-row', ['items' => ['Firstname', 'Lastname'], 
          'oldVals' => [isset($searchingVals) ? $searchingVals['firstname'] : '', isset($searchingVals) ? $searchingVals['lastname'] : '']])
          @endcomponent
        @endcomponent
      </form>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-11">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th width="auto" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Remarks: activate to sort column descending" aria-sort="ascending">Remarks</th>
                <th width="auto" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">PUV Driver Name</th>
                <th width="15%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending">Address</th>

                <th width="auto" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Date Applied: activate to sort column ascending">Date Applied</th>
                <th width="auto" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="LTO License NO.: activate to sort column ascending">LTO License NO.</th>
                
                <th width="40" tabindex="0" aria-controls="example2" rowspan="50" colspan="5" aria-label="Action: activate to sort column ascending">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($puv as $puvs)
                <tr role="row" class="odd"> 
                 
                  <td class="hidden-xs">{{ $puvs->remarks }}</td>
                  <td class="sorting_1">{{ $puvs->firstname }} {{$puvs->middlename}} {{$puvs->lastname}}</td>
                  <td class="hidden-xs">{{ $puvs->address }}</td>
                  <td class="hidden-xs">{{ $puvs->date_hired }}</td>
                  <td class="hidden-xs">{{ $puvs->licenseNumber }}</td>
                  
                  <td>
                    <form class="row" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('PUV-Driver-Management.edit', ['id' => $puvs->id]) }}" class="btn btn-warning col-lg-7 col-md-offset-2    ">
                        Update
                        </a>
                         
                    </form>
                  </td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
              <tr>
                <tr role="row">
                <th width="auto" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Remarks: activate to sort column descending" aria-sort="ascending">Remarks</th>
                <th width="auto" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="PUV Driver Name: activate to sort column descending" aria-sort="ascending">PUV Driver Name</th>
                <th width="15%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending">Address</th>
                <th width="auto" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Date Applied: activate to sort column ascending">Date Applied</th>
                <th width="auto" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="LTO License NO.: activate to sort column ascending">LTO License NO.</th>
               
                <th width="40" tabindex="0" aria-controls="example2" rowspan="50" colspan="5" aria-label="Action: activate to sort column ascending">Action</th>
              </tr>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($puv)}} of {{count($puv)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $puv->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
  </div>
@endsection