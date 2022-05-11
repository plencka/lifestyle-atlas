<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity_Plan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'activity_plan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'duration',
        'plan_id',
        'activity_id',
    ];
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
