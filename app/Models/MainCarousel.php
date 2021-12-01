<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class MainCarousel extends Model
{
    use HasFactory, Filterable, AsSource;

    protected $table = 'main_carousels';

    protected $fillable = [       
        'title', 
        'attachment_id',
        'attachment_type',
    ];

    protected $allowedSorts = [
        'id',
        'attachment_type',
        'created_at'
    ];

    public function attachment() {
        return $this->belongsTo(Attachment::class, 'attachment_id');
    }
}
