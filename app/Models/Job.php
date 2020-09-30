<?php

namespace App\Models;

use App\Models\User;
use App\Models\lookups\Country;
use App\Models\lookups\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $casts = [
        'deadline' => 'datetime',
    ];

    public function details() {
        return $this->hasOne(JobDetail::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }
}
