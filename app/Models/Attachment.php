<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Orchid\Attachment\MimeTypes;
use Orchid\Attachment\Models\Attachmentable;
use Orchid\Filters\Filterable;
use Orchid\Platform\Dashboard;

class Attachment extends Model
{
    use Filterable, HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'original_name',
        'mime',
        'extension',
        'size',
        'path',
        'user_id',
        'description',
        'alt',
        'sort',
        'hash',
        'disk',
        'group',
    ];

    /**
     * @var array
     */
    protected $appends = [
        'url',
        'relativeUrl',
        'storagePath',
        'fullPath',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'sort' => 'integer',
    ];

    /**
     * @var array
     */
    protected $allowedFilters = [
        'name',
        'original_name',
        'mime',
        'extension',
        'disk',
    ];

    /**
     * @var array
     */
    protected $allowedSorts = [
        'name',
        'original_name',
        'mime',
        'extension',
        'disk',
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(Dashboard::model(User::class));
    }

    /**
     * Return the address by which you can access the file.
     *
     * @param string|null $default
     *
     * @return string|null
     */
    public function url(string $default = null): ?string
    {
        /** @var Filesystem|Cloud $disk */
        $disk = Storage::disk( 'public' );
        // $path = $this->physicalPath();
        $path = $this->path.$this->name.'.'.$this->extension;

        return $disk->url( $path );
    }

    /**
     * Return path starting from storage/ folder
     *
     * @return string|null
     */
    public function getStoragePathAttribute(): ?string 
    {
        return "public/" . $this->path . $this->name . ".{$this->extension}";
    }

    /**
     * Return path starting from storage/ folder
     *
     * @return string|null
     */
    public function getFullPathAttribute(): ?string 
    {
        return storage_path("app/public/{$this->path}{$this->name}.{$this->extension}");
    }

    /**
     * @return string|null
     */
    public function getUrlAttribute(): ?string
    {
        return $this->url();
    }

    /**
     * @return string|null
     */
    public function getRelativeUrlAttribute(): ?string
    {
        $url = $this->url();

        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            return null;
        }

        return parse_url($url, PHP_URL_PATH);
    }

    /**
     * @return string|null
     */
    public function getTitleAttribute(): ?string
    {
        if ($this->original_name !== 'blob') {
            return $this->original_name;
        }

        return $this->name.'.'.$this->extension;
    }

    /**
     * @return string|null
     */
    public function physicalPath(): ?string
    {
        if ($this->path === null || $this->name === null) {
            return null;
        }

        return $this->path.$this->name.'.'.$this->extension;
    }

    /**
     * @throws Exception
     *
     * @return bool|null
     */
    public function delete()
    {
        if ($this->exists) {
            if (static::where('hash', $this->hash)->where('disk', $this->disk)->count() <= 1) {
                //Physical removal of all copies of a file.
                Storage::disk($this->disk)->delete($this->physicalPath());
            }
            $this->relationships()->delete();
        }

        return parent::delete();
    }

    /**
     * @return HasMany
     */
    public function relationships()
    {
        return $this->hasMany(Dashboard::model(Attachmentable::class), 'attachment_id');
    }

    /**
     * Get MIME type for file.
     *
     * @return string
     */
    public function getMimeType(): string
    {
        $mimes = new MimeTypes();

        $type = $mimes->getMimeType($this->getAttribute('extension'));

        return $type ?? 'unknown';
    }
}
