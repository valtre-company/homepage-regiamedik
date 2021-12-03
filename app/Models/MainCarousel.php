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
        'attachment_web_id',
        'attachment_mobile_id',
    ];

    protected $allowedSorts = [
        'id',
        'created_at'
    ];

    public function attachmentWeb() {
        return $this->belongsTo(Attachment::class, 'attachment_web_id');
    }

    public function attachmentMobile() {
        return $this->belongsTo(Attachment::class, 'attachment_mobile_id');
    }
}
