<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use HasFactory, Filterable, AsSource;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
        'slug',
    ];

    protected $appends = [
        'full_info'
    ];

    public function getFullInfoAttribute()
    {
        return $this->name . ' - ' . $this->slug;
    }

    // Get all services by relation with category (Has Many)
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function serviceType()
    {
        return $this->hasMany(ServiceType::class);
    }
}
