<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Service extends Model
{
    use HasFactory, SoftDeletes, Filterable, AsSource;

    protected $table = 'services';
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'min_price',
        'max_price',
        'category_id',
        'service_type_id',
        'lead_time',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    
    protected $appends = [
        'all_locations'        
    ];

    public function getAllLocationsAttribute()
    {        
        $title = "";            
        // Title With line breaks
        foreach ($this->locations as $location) {
            $title .= $location->city . ", " ;
        }
        return rtrim($title, ", ");
    }

    // Get the category by id (BelongsTo) 
    public function category () {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function serviceType () {
        return $this->belongsTo(ServiceType::class,'service_type_id');
    }

    public function createdBy () {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy () {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function deletedBy () {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function locations () {
        return $this->belongsToMany(Location::class, 'services_locations', 'service_id', 'location_id');
    }
}
