<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opportunities extends Model
{
    use HasFactory;
    protected $fillable = ['op_name','amount','close_date','expected_revenue','probability','competitors','description','contacts_id'];
    public $timestamps = false;
    public function contacts(){
        return $this->belongsTo(contacts::class,'contacts_id','id')->first();
    }

    public function opportinity_product(){
        return $this->hasMany(opportinity_product::class,'op_id','id')->get();
    }
    public function opportinity_contacts(){
        return $this->hasMany(opportinity_contacts::class,'op_id','id')->get();
    }



}
