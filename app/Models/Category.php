<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

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
