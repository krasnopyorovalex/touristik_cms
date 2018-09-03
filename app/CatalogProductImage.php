<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogProductImage extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'name', 'alt', 'title', 'basename', 'ext', 'is_published', 'pos'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\CatalogProduct');
    }

    /**
     * @return string
     */
    public function getThumb(): string
    {
        return asset('storage/product/' . $this->product_id . '/' . $this->basename . '_thumb.' . $this->ext);
    }
}
