<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceLocation extends Model
{
    use HasFactory;
    protected $table = 'services_locations';
    protected $fillable = ['service_id', 'location_id'];

    public function service () {
        return $this->belongsTo(Service::class);
    }
}
