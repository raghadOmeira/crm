<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opportinity_contact_roles extends Model
{
    use HasFactory;
    protected $fillable = ['role_name'];
    public $timestamps = false;

    public function opportinity_contacts(){
        return $this->belongsTo(opportinity_contacts::class,'op_con_id','id')->first();
    }
}
