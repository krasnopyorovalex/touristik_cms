<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Page
 *
 * @property int $id
 * @property string $template
 * @property int $image_id
 * @property string $name
 * @property string $slogan
 * @property string $title
 * @property string $description
 * @property string $text
 * @property string $alias
 * @property string $publish
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @mixin \Eloquent
 * @property-read \App\Image $image
 * @property string $is_published
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereIsPublished($value)
 */
class Page extends Model
{

    private $templates = [
        'page.index' => 'Главная',
        'page.page' => 'Информационная',
        'page.blog' => 'Блог',
        //'page.portfolio' => 'Портфолио',
        'page.contacts' => 'Контакты',
    ];

    /**
     * @var array
     */
    protected $fillable = ['template', 'name', 'slogan', 'title', 'description', 'text', 'alias', 'is_published'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    /**
     * @return string
     */
    public function getUrlAttribute(): string
    {
        return route("page.show", $this->alias);
    }

    /**
     * @return array
     */
    public function getTemplates(): array
    {
        return $this->templates;
    }
}
