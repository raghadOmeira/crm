<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name','description','phone_number','account_id','leads_id','department','title','email','call_num','email_num'];
  
    public $timestamps = false;

    public function accounts(){
        return $this->belongsTo(accounts::class,'account_id','id')->first();
    }
    public function leads(){
        return $this->belongsTo(leads::class,'leads_id','id')->first();
    }
    public function activities(){
        return $this->hasMany(activities::class,'contacts_id','id')->get();
    }


}