@extends('PUV-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Update Driver</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('PUV-Driver-Management.update', ['id' => $puv->id]) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group{{ $errors->has('firstname',' middlename','lastname') ? ' has-error' : '' }} ">
                        <label for="firstname" class="col-md-1 control-label">First Name</label>
                            <div class="col-md-2">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ $puv->firstname }}" required autofocus>
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                        <label for="middlename" class="col-md-1 control-label">Middle Name</label>
                            <div class="col-md-2">
                                <input id="middlename" type="text" class="form-control" name="middlename" value="{{  $puv->middlename }}" required>
                                @if ($errors->has('middlename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                        <label for="lastname" class="col-md-1 control-label">Last Name</label>
                            <div class="col-md-2">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $puv->lastname }}" required>
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>        
                    </div>
                
                    <div class="form-group {{ $errors->has('address','birthdate') ? ' has-error' : '' }}">
                        <label for="address" class="col-md-1 control-label">Address</label> 
                            <div class="col-md-5">
                                <input id="address" type="text" class="form-control" name="address" value="{{ $puv->address }}" required>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <label class="col-md-1 control-label">Birthday</label>
                            <div class="col-md-2 ">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                        <input type="text" value="{{ $puv->birthdate }}" name="birthdate" class="form-control pull-right" id="birthDate" required>
                                </div>
                            </div>
                    </div>
                
                    <div class="form-group{{ $errors->has('kin','Gender','Civil_status') ? ' has-error' : '' }}">
                        <label class="col-md-1 control-label">Next of KIN</label>
                            <div class="col-md-2">
                                <input id="kin" type="text" class="form-control" name="kin" value="{{ $puv->kin }}" >
                                    @if ($errors->has('kin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kin') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            
                        <label class="col-md-1 control-label">Gender</label>
                            <div class="col-md-2">
                                <input id="Gender" type="text" class="form-control" name="Gender" value="{{ $puv->Gender }}" >
                                @if ($errors->has('Gender'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Gender') }}</strong>
                                </span>
                                @endif
                            </div>

                        <label class="col-md-1 control-label">Civil Status</label>
                            <div class="col-md-2">
                                <input id="Civil_status" type="text" class="form-control" name="Civil_status" value="{{ $puv->Civil_status }}" >
                                @if ($errors->has('Civil_status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Civil_status') }}</strong>
                                </span>
                                @endif
                            </div>
                    </div>
                        
                    <div class="form-group{{ $errors->has('Telephone','Mobile','NumberYears') ? ' has-error' : '' }}">
                        <label class="col-md-1 control-label">Telephone #</label>
                            <div class="col-md-2">
                                <input id="Telephone" type="text" class="form-control" name="Telephone" value="{{ $puv->Telephone }}" >
                                @if ($errors->has('Telephone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Telephone') }}</strong>
                                </span>
                                @endif
                            </div>

                        <label class="col-md-1 control-label">Mobile #</label>
                            <div class="col-md-2">
                                <input id="Mobile" type="text" class="form-control" name="Mobile" value="{{ $puv->Mobile }}" >
                                @if ($errors->has('Mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Mobile') }}</strong>
                                </span>
                                @endif

                            </div>
                            
                        <label class="col-md-1 control-label">Number of years as PUV driver</label>
                            <div class="col-md-2">
                                <input id="NumberYears" type="text" class="form-control" name="NumberYears" value="{{ $puv->NumberYears }}" >
                                @if ($errors->has('NumberYears'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('NumberYears') }}</strong>
                                </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group{{ $errors->has('licenseNumber','LicenseDate','Restriction') ? ' has-error' : '' }}">
                        <label for="licenseNumber" class="col-md-1 control-label">LTO License #</label>
                            <div class="col-md-2">
                                <input id="licenseNumber" type="text" class="form-control" name="licenseNumber" value="{{ $puv->licenseNumber }}" >
                                @if ($errors->has('licenseNumber'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('licenseNumber') }}</strong>
                                </span>
                                @endif
                            </div>
                            
                        <label class="col-md-1 control-label">LTO License Expiry Date</label>
                            <div class="col-md-2 ">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ $puv->LicenseDate }}" name="LicenseDate" class="form-control pull-right" id="LicenseDate" required>
                                </div>
                            </div>

                        <label class="col-md-1 control-label">LTO License Restriction</label>
                            <div class="col-md-2">
                                <input id="Restriction" type="text" class="form-control" name="Restriction" value="{{ $puv->Restriction }}" >
                                @if ($errors->has('Restriction'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Restriction') }}</strong>
                                </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group{{ $errors->has('AffilationGroup') ? ' has-error' : '' }}">
                        <label class="col-md-1 control-label">Affilation Group</label>
                            <div class="col-md-3">
                                <input id="AffilationGroup" type="text" class="form-control" name="AffilationGroup" value="{{ $puv->AffilationGroup }}" >
                                @if ($errors->has('AffilationGroup'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('AffilationGroup') }}</strong>
                                </span>
                                @endif
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-1 control-label">Date applied</label>
                            <div class="col-md-2">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ $puv->date_hired }}" name="date_hired" class="form-control pull-right" id="hiredDate" required>
                                </div>
                            </div>

                        <label class="col-md-1 control-label">Held at</label>
                            <div class="col-md-2">
                                <input id="held" type="text" class="form-control" name="held" value="{{ $puv->held }}" >
                                @if ($errors->has('held'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('held') }}</strong>
                                </span>
                                @endif
                            </div>

                        <label class="col-md-1 control-label">Score</label>
                            <div class="col-md-1">
                                <input id="score" type="text" class="form-control" name="score" value="{{ $puv->score }}" >
                                @if ($errors->has('score'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('score') }}</strong>
                                </span>
                                @endif
                            </div>                               
                    </div>
                    

                    <div class="form-group">
                        <label class="col-md-1 control-label">Date applied</label>
                            <div class="col-md-2">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ $puv->date_hired1 }}" name="date_hired1" class="form-control pull-right" id="hiredDate1" >
                                </div>
                            </div>

                        <label class="col-md-1 control-label">Held at</label>
                            <div class="col-md-2">
                                <input id="held1" type="text" class="form-control" name="held1" value="{{ $puv->held1 }}" >
                                @if ($errors->has('held1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('held1') }}</strong>
                                </span>
                                @endif
                            </div>

                        <label class="col-md-1 control-label">Score</label>
                            <div class="col-md-1">
                                <input id="score1" type="text" class="form-control" name="score1" value="{{ $puv->score1 }}" >
                                @if ($errors->has('score1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('score1') }}</strong>
                                </span>
                                @endif
                            </div>                               
                    </div>
                    <div class="form-group">
                        <label class="col-md-1 control-label">Date applied</label>
                            <div class="col-md-2">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ $puv->date_hired2 }}" name="date_hired2" class="form-control pull-right" id="hiredDate2" >
                                </div>
                            </div>

                        <label class="col-md-1 control-label">Held at</label>
                            <div class="col-md-2">
                                <input id="held2" type="text" class="form-control" name="held2" value="{{ $puv->held2 }}" >
                                @if ($errors->has('held2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('held2') }}</strong>
                                </span>
                                @endif
                            </div>

                        <label class="col-md-1 control-label">Score</label>
                            <div class="col-md-1">
                                <input id="score2" type="text" class="form-control" name="score2" value="{{ $puv->score2 }}" >
                                @if ($errors->has('score2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('score2') }}</strong>
                                </span>
                                @endif
                            </div>                               
                    </div>

                    <div class="form-group">
                        <label class="col-md-1 control-label">Date applied</label>
                            <div class="col-md-2">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ $puv->date_hired3 }}" name="date_hired3" class="form-control pull-right" id="hiredDate3" >
                                </div>
                            </div>

                        <label class="col-md-1 control-label">Held at</label>
                            <div class="col-md-2">
                                <input id="held3" type="text" class="form-control" name="held3" value="{{ $puv->held3 }}" >
                                @if ($errors->has('held3'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('held3') }}</strong>
                                </span>
                                @endif
                            </div>

                        <label class="col-md-1 control-label">Score</label>
                            <div class="col-md-1">
                                <input id="score3" type="text" class="form-control" name="score3" value="{{ $puv->score3 }}" >
                                @if ($errors->has('score3'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('score3') }}</strong>
                                </span>
                                @endif
                            </div>                               
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Remark</label>
                            <div class="col-md-2">
                                <select class="form-control " name="remarks">
                                    @foreach ($selects as $key => $value)
                                    <option value="{{ $key}}"{{ ( $puv->$key == $key) ? 'selected' : '' }}>{{ $value }}
                                    </option>
                                    @endforeach    
                                </select>
                            </div>   
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
                                