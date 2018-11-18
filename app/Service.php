<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    private $icons = [
        'razrabotka' => 'Разработка сайтов',
        'seo' => 'SEO - продвижение',
        'kontekst' => 'Контекстная реклама',
        'redesign' => 'Редизайн сайта',
        'oneseo' => 'Разовая SEO-оптимизация',
        'free_audit' => 'Бесплатный аудит',
        'design' => 'Дизайн сопровождение',
        'smm' => 'SMM сопровождение',
        'telegram' => 'Телеграм'
    ];

    /**
     * @var array
     */
    protected $fillable = ['parent_id', 'name', 'title', 'description', 'preview', 'text', 'alias', 'is_published', 'icon', 'pos'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany('App\Service', 'parent_id', 'id')->orderBy('pos');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function relatedServices()
    {
        return $this->belongsToMany(self::class, 'related_services', 'service_id', 'service_relative_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo('App\Service', 'parent_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    /**
     * @return array
     */
    public function getIcons(): array
    {
        return $this->icons;
    }
}
