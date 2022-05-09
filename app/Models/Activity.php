<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'activities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'icon_filename',
    ];

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'activity_plan');
    }
}
