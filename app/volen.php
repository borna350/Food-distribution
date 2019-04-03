<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class volen extends Model
{
     protected $table="volunteer";
      protected $primarykey="id";
       protected $fillable=['vname',
       'vemail',
       'branch',
              'cv',
              'message'];
}
