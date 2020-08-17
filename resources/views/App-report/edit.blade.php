@extends('App-report.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Update Report</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('Apprehension-report.update', ['id' => $App_Rep->id]) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group{{ $errors->has('IRS_Number',' Name_App_Operator','Violations') ? ' has-error' : '' }} ">
                        
                            <label for="IRS_Number" class="col-md-1 control-label">IRS Number</label>
                            <div class="col-md-2">
                                <input id="IRS_Number" type="text" class="form-control" name="IRS_Number" value="{{ $App_Rep->IRS_Number }}" required autofocus>

                                @if ($errors->has('IRS_Number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('IRS_Number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                        
                            <label for="Name_App_Operator" class="col-md-1 control-label">Name of Apprehended Operator</label>

                            <div class="col-md-2">
                                <input id="Name_App_Operator" type="text" class="form-control" name="Name_App_Operator" value="{{ $App_Rep->Name_App_Operator }}" required>

                                @if ($errors->has('Name_App_Operator'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Name_App_Operator') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                            <label for="Violations" class="col-md-1 control-label">Violations</label>

                            <div class="col-md-2">
                                <input id="Violations" type="text" class="form-control" name="Violations" value="{{ $App_Rep->Violations }}" required>

                                @if ($errors->has('Violations'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Violations') }}</strong>
                                    </span>
                                @endif
                            </div>        
                </div>

                
                <div class="form-group {{ $errors->has('Case_Number','Type_service') ? ' has-error' : '' }}">
                    
                            <label for="Case_Number" class="col-md-1 control-label">Case Number</label> 

                            <div class="col-md-5">
                                <input id="Case_Number" type="text" class="form-control" name="Case_Number" value="{{ $App_Rep->Case_Number }}" required>

                                @if ($errors->has('Case_Number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Case_Number') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="Type_service" class="col-md-1 control-label">Type of service</label> 

                            <div class="col-md-5">
                                <input id="Type_service" type="text" class="form-control" name="Type_service" value="{{ $App_Rep->Type_service }}" required>

                                @if ($errors->has('Type_service'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Type_service') }}</strong>
                                    </span>
                                @endif
                            </div>
                </div>
                
                        <div class="form-group{{ $errors->has('Plate_Number','MVIR_serial') ? ' has-error' : '' }}">
                            <label class="col-md-1 control-label">Plate Number</label>

             <!-- EDIT THIS -->               <div class="col-md-2">
                                <input id="Plate_Number" type="text" class="form-control" name="Plate_Number" value="{{ $App_Rep->Plate_Number }}" >

                                @if ($errors->has('Plate_Number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Plate_Number') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <label class="col-md-1 control-label">MVIR Serial Number</label>
                            <div class="col-md-2">
                                <input id="MVIR_serial" type="text" class="form-control" name="MVIR_serial" value="{{ $App_Rep->MVIR_serial }}" >

                                @if ($errors->has('MVIR_serial'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('MVIR_serial') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group">
                                <label class="col-md-1 control-label">Offense</label>
                                <div class="col-md-2">
                                <select class="form-control " name="Offense">
                                
                                @foreach ($penalty as $key => $value)
                                    <option value="{{ $key}}"{{ ( $key == $key) ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach    
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Remarks') ? ' has-error' : '' }}">
                            <label class="col-md-1 control-label">Remarks</label>

                 <!-- EDIT THIS -->           <div class="col-md-2">
                                <input id="Remarks" type="text" class="form-control" name="Remarks" value="{{ $App_Rep->Remarks }}" >

                                @if ($errors->has('Remarks'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Remarks') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label class="col-md-1 control-label">Date of Payment</label>
                            <div class="col-md-2 ">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ $App_Rep->Date_of_payment }}" name="Date_of_payment" class="form-control pull-right" id="Date_of_payment">
                                </div>
                            </div>

                            <label class="col-md-1 control-label">Release Order</label>
                            <div class="col-md-2">
                                <input id="Release_order" type="text" class="form-control" name="Release_order" value="{{ $App_Rep->Release_order }}" >
                            </div>

                            <label class="col-md-1 control-label">Date of Released</label>
                            <div class="col-md-2 ">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ $App_Rep->Date_of_released }}" name="Date_of_released" class="form-control pull-right" id="Date_of_released">
                                </div>
                            </div>
                        </div>

            <div class="panel-body">
                <div class="form-group">
                            <div class="col-md-4 pt-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
            </div>

        </form>
                                     

                
    </div>
</div>
@endsection
                                