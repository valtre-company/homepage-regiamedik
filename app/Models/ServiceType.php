<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;
    protected $table = 'services_types';

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

    public function services(){
        return $this->hasMany(Service::class);
    }

    public function faqs(){
        return $this->hasMany(Faq::class);
    }

    public function updatedBy(){
        return $this->belongsTo(User::class, 'updated_by');
    }
}
