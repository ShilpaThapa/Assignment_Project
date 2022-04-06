<?php

namespace App\Http\Traits;

use Illuminate\Support\Str;

trait Sluggable
{
    public static function bootSluggable()
    {
        static::creating(function ($model) {
            $slugField = $model->sluggable ?? 'title';
            $model->slug = self::createSlug($model->{$slugField}, $slugField);
        });
    }

    private static function createSlug($title, $slugField)
    {
        $slug = Str::slug($title);
        $previous = self::getModel()->where('slug', $slug)->withTrashed();
        if ($previous->exists()) {
            $max = self::getModel()->where($slugField, $title)->withTrashed()->latest('id')->skip(1)->value('slug');
            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/',
                    function ($mathces) {
                        return $mathces[1] + 1;
                    }, $max);
            }
            return "{$slug}-2"; 
        }
        return $slug;
    }
}
