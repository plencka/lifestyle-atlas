<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'plans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'user_id',
        'category_id',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'activity_plan');
    }

    public function usersWhoFavourited()
    {
        return $this->belongsToMany(User::class, 'user_favourites');
    }
}
