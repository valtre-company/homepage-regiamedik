<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;
    protected $table = 'service_types';

    protected $fillable = [
        'name',
        'slug',
    ];

    protected $appends = [
        'full_info'
    ];

    public function getFullInfoAttribute()
    {
        return $this->name . ' (' . $this->slug . ')';
    }
}
