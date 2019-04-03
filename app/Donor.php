<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
     protected $table="donor";
      protected $primarykey="id";
      
       protected $fillable=['dname',
       'demail',
       'dammount',
       'dlocation',
           'cname',   
              'dmessage'];
}
