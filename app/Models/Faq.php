<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Faq extends Model
{
    use HasFactory, Filterable, AsSource;

    protected $table = 'faqs';

    protected $fillable = [
        'question',
        'answer',
        'service_type_id',
        'created_by',
        'updated_by',        
    ];
    
    public function getQuestionAttribute($value)
    {
        return ucfirst($value);
    }

    public function getAnswerAttribute($value)
    {
        return ucfirst($value);
    }

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
