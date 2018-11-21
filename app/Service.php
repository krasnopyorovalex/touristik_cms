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
    protected $fillable = ['parent_id', 'name', 'menu_name', 'title', 'description', 'preview', 'text', 'alias', 'is_published', 'icon', 'pos', 'price', 'is_showed_dev_stages', 'is_showed_type_sites'];

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

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price
            ? sprintf('от %s р.', number_format($this->price, 0, '.', ' '))
            : 'Бесплатно';
    }

    /**
     * @return string
     */
    public function getMenuName(): string
    {
        return $this->menu_name
            ? sprintf('%s', $this->menu_name)
            : $this->name;
    }
}
