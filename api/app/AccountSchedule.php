<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountSchedule extends APIModel
{
    
    protected $table = 'account_schedules';
    public function schedule(){
      return $this->belongsTo('App\Schedule');
    }

    public function account(){
      return $this->belongsTo('App\Account');
    }
}