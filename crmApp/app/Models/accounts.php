<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    use HasFactory;
    protected $fillable = ['ac_name','ac_type','description','phone_number','website','email','annual_revenue','num_of_employees'];
    public $timestamps = false;
    public function contacts(){
        return $this->hasMany(contacts::class,'account_id','id')->get();
    }
    public function activities(){
        return $this->hasMany(activities::class,'account_id','id')->get();
    }

}
