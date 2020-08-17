<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    protected $fillable = [
        'IRS_Number',
		'Name_App_Operator',
		'Violations',
		'Case_Number',
		'Type_service',
		'Plate_Number',
		'MVIR_serial',
		'Offense',
		'Remarks',
		'Date_of_payment',
		'Release_order',
		'Date_of_released'
		
    ];
}
