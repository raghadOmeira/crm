<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leadsources extends Model
{
    use HasFactory;
    protected $fillable = ['source_name','leads_id'];
    public $timestamps = false;
    public function leads(){
        return $this->belongsTo(leads::class,'leads_id','id')->first();
    }
}
