<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $table = 'plans';
    protected $primaryKey = 'id';

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
        return $this->belongsToMany(Activity::class);
    }

    public function usersWhoFavourited()
    {
        return $this->belongsToMany(User::class);
    }
}
