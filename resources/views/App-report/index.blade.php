@extends('App-report.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">List of Reports</h3>
        </div>
        <div class="col-sm-4">
          <a class="btn btn-primary" href="{{ route('Apprehension-report.create') }}">Add new Report</a>
        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
       <form method="POST" action="{{ route('Apprehension-report.search') }}">
         {{ csrf_field() }}
         @component('layouts.search', ['title' => 'Search'])
          @component('layouts.two-cols-search-row', ['items' => ['Name of Apprehended Operator', 'Case Number'], 
          'oldVals' => [isset($searchingVals) ? $searchingVals['Name_App_Operator'] : '', isset($searchingVals) ? $searchingVals['Case_Number'] : '']])
          @endcomponent
        @endcomponent
      </form>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-11">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th width="auto" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="IRS Number: activate to sort column descending" aria-sort="ascending">IRS Number</th>
                <th width="auto" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name of Apprehended Operator: activate to sort column descending" aria-sort="ascending">Name of Apprehended Operator</th>
                <th width="auto" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Violations: activate to sort column ascending">Violations</th>
                <th width="auto" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Violations: activate to sort column ascending">Case Number</th>
                <th width="auto" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Offense: activate to sort column ascending">Offense</th>
                <!-- <th width="auto" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="LTO License NO.: activate to sort column ascending">LTO License NO.</th> -->
                
                <th width="auto" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($App_Rep as $App_Reps)
                <tr role="row" class="odd"> 
                 
                  <td class="hidden-xs">{{ $App_Reps->IRS_Number }}</td>
                  <td class="sorting_1">{{ $App_Reps->Name_App_Operator }}</td>
                  <td class="hidden-xs">{{ $App_Reps->Violations }}</td>
                  <td class="sorting_1">{{ $App_Reps->Case_Number }}</td>
                  <td class="hidden-xs">{{ $App_Reps->Offense }}</td>
                  
                  
                  <td>
                    <form class="row" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('Apprehension-report.edit', ['id' => $App_Reps->id]) }}" class="btn btn-warning col-lg-7 col-md-offset-2">
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
                <th width="auto" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="IRS Numbers: activate to sort column descending" aria-sort="ascending">IRS Number</th>
                <th width="auto" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name of Apprehended Operator: activate to sort column descending" aria-sort="ascending">Name of Apprehended Operator</th>
                <th width="auto" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Violations: activate to sort column ascending">Violations</th>
                <th width="auto" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Violations: activate to sort column ascending">Case Number</th>
                <th width="auto" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Offense: activate to sort column ascending">Offense</th>
                <!-- <th width="auto" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="LTO License NO.: activate to sort column ascending">LTO License NO.</th> -->
               
                <th width="auto" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
              </tr>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($App_Rep)}} of {{count($App_Rep)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $App_Rep->links() }}
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