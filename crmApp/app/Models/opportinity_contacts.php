<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opportinity_contacts extends Model
{
    use HasFactory;
    protected $fillable = ['note','contacts_id'];
    public $timestamps = false;

    public function opportuities(){
        return $this->belongsTo(opportuities::class,'op_id','id')->first();
    }
    public function opportinity_contacts_role(){
        return $this->hasOne(opportinity_contacts_role::class,'op_con_id','id')->first();
    }
}
