<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LawyerCase extends Model
{
    protected $table = 'lawyer_case';

    protected $fillable = [
          'case_name',
          'case_country',
          'case_town',
          'case_date',
          'case_verdict',
    ];
    public function getDates()
    {
        return ['created_at', 'updated_at', 'case_date'];
    }

    public function setDobAttribute($value)
    {
        $this->attributes['case_date'] = Carbon::createFromFormat('d/m/Y', $value);

    }
}
