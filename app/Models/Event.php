<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description','date','category_id','location'
    ];

    public function cat_name()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function attedEvents()
    {
        return $this->hasMany(Attendee::class,'event_id');
    }
}
