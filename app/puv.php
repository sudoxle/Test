<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puv extends Model
{
    protected $fillable = [
        'firstname',
		'middlename',
		'lastname',
		'address',
		'birthdate',
		'kin',
		'Civil_status',
		'Gender',
		'Telephone',
		'Mobile',
		'NumberYears',
		'licenseNumber',
		'LicenseDate',
		'Restriction',
		'AffilationGroup',
		'date_hired',
		'held',
		'score',
		'date_hired1',
		'held1',
		'score1',
		'date_hired2',
		'held2',
		'score2',
		'date_hired3',
		'held3',
		'score3',
		'remarks'       
    ];
}
