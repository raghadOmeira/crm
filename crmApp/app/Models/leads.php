<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leads extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','description','phone_number','email','title','company','website','annual_revenue','email_num'];
    public $timestamps = false;
    public function contacts(){
        return $this->hasOne(contacts::class,'leads_id','id')->first();
    }
    public function leadsources(){
        return $this->hasOne(leadsources::class,'leads_id','id')->first();
    }
    public function activities(){
        return $this->hasMany(activities::class,'leads_id','id')->get();
}
}