@extends('PUV-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        
            <div class="panel panel-default">
                <div class="panel-heading">Add new PUV driver</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('PUV-Driver-Management.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                <div class="form-group{{ $errors->has('firstname',' middlename','lastname') ? ' has-error' : '' }} ">
                        
                            <label for="firstname" class="col-md-1 control-label">First Name</label>
                            <div class="col-md-2">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                        
                            <label for="middlename" class="col-md-1 control-label">Middle Name</label>

                            <div class="col-md-2">
                                <input id="middlename" type="text" class="form-control" name="middlename" value="{{ old('middlename') }}" required>

                                @if ($errors->has('middlename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                            <label for="lastname" class="col-md-1 control-label">Last Name</label>

                            <div class="col-md-2">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

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
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

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
                                    <input type="text" value="{{ old('birthdate') }}" name="birthdate" class="form-control pull-right" id="birthDate" required>
                                </div>
                            </div>
                   
                </div>
                
                        <div class="form-group{{ $errors->has('kin','Gender','Civil_status') ? ' has-error' : '' }}">
                            <label class="col-md-1 control-label">Next of KIN</label>

             <!-- EDIT THIS -->               <div class="col-md-2">
                                <input id="kin" type="text" class="form-control" name="kin" value="{{ old('kin') }}" >

                                @if ($errors->has('kin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kin') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <label class="col-md-1 control-label">Gender</label>

                 <!-- EDIT THIS -->           <div class="col-md-2">
                                <input id="Gender" type="text" class="form-control" name="Gender" value="{{ old('Gender') }}" >

                                @if ($errors->has('Gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Gender') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label class="col-md-1 control-label">Civil Status</label>

                 <!-- EDIT THIS -->           <div class="col-md-2">
                                <input id="Civil_status" type="text" class="form-control" name="Civil_status" value="{{ old('Civil_status') }}" >

                                @if ($errors->has('Civil_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Civil_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                            
                        

                       
                        <div class="form-group{{ $errors->has('Telephone','Mobile','NumberYears') ? ' has-error' : '' }}">
                            <label class="col-md-1 control-label">Telephone #</label>

                 <!-- EDIT THIS -->           <div class="col-md-2">
                                <input id="Telephone" type="text" class="form-control" name="Telephone" value="{{ old('Telephone') }}" >

                                @if ($errors->has('Telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Telephone') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label class="col-md-1 control-label">Mobile #</label>

     <!-- EDIT THIS -->     <div class="col-md-2">
                                <input id="Mobile" type="text" class="form-control" name="Mobile" value="{{ old('Mobile') }}" >

                                @if ($errors->has('Mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Mobile') }}</strong>
                                    </span>
                                @endif

                            </div>
                            <label class="col-md-1 control-label">Number of years as PUV driver</label>

                 <!-- EDIT THIS -->           <div class="col-md-2">
                                <input id="NumberYears" type="text" class="form-control" name="NumberYears" value="{{ old('NumberYears') }}" >

                                @if ($errors->has('NumberYears'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NumberYears') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         
                      
                        <div class="form-group{{ $errors->has('licenseNumber','LicenseDate','Restriction') ? ' has-error' : '' }}">
                            <label for="licenseNumber" class="col-md-1 control-label">LTO License #</label>

                 <!-- EDIT THIS -->           <div class="col-md-2">
                                <input id="licenseNumber" type="text" class="form-control" name="licenseNumber" value="{{ old('licenseNumber') }}" >

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
                                    <input type="text" value="{{ old('LicenseDate') }}" name="LicenseDate" class="form-control pull-right" id="LicenseDate" required>
                                </div>
                            </div>

                            <label class="col-md-1 control-label">LTO License Restriction</label>
                            <div class="col-md-2">
                                <input id="Restriction" type="text" class="form-control" name="Restriction" value="{{ old('Restriction') }}" >

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
                                <input id="AffilationGroup" type="text" class="form-control" name="AffilationGroup" value="{{ old('AffilationGroup') }}" >

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
                                    <input type="text" value="{{ old('date_hired') }}" name="date_hired" class="form-control pull-right" id="hiredDate" required>
                                </div>
                            </div>

                            <label class="col-md-1 control-label">Held at</label>
                            <div class="col-md-2">
                                <input id="held" type="text" class="form-control" name="held" value="{{ old('held') }}" >

                                @if ($errors->has('held'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('held') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label class="col-md-1 control-label">Score</label>
                            <div class="col-md-1">
                                <input id="score" type="text" class="form-control" name="score" value="{{ old('score') }}" >

                                @if ($errors->has('score'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('score') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-md-4 control-label">Remark</label>
                                <div class="col-md-2">
                                <select class="form-control " name="remarks">
                                
                                @foreach ($selects as $key => $value)
                                    <option value="{{ $key}}"{{ ( $key == $key) ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach    
                                </select>
                                </div>
                            </div>
                        
                            
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
