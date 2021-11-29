<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Location extends Model
{
    use HasFactory, SoftDeletes, AsSource, Filterable;
    protected $table = 'locations';

    protected $fillable = [
        'street',        
        'suburb',
        'city',
        'state',
        'country',
        'number_exterior',
        'number_interior',
        'lat',
        'lng',
        'opening_hours',
        'closing_hours',
        'service_type_id'
    ];

    public $timestamps = false;
    
    public $appends = [
        'full_address',   
    ];

    public function getFullAddressAttribute()
    {
        return $this->street . ', ' . $this->suburb . ', ' . $this->city . ', ' . $this->state . ', ' . $this->country;
    }

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }
}
