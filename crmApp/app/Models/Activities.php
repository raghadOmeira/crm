<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;
    protected $fillable = ['act_name','act_type','description', 'status', 'priority','account_id','contacts_id','leads_id'];
    public $timestamps = false;

    public function accounts(){
        return $this->belongsTo(accounts::class,'account_id','id')->first();
    } 
    public function contacts(){
        return $this->belongsTo(contacts::class,'contacts_id','id')->first();
    }
    public function leads(){
        return $this->belongsTo(leads::class,'leads_id','id')->first();
    }
    }


