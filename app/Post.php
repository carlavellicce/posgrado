<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'body', 'iframe', 'image', 'user_id'
    ]; //si recibimos datos de forma masiva acepte lo siguiente

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class); //Post pertenece a un usuario
    }

    public function getGetExcerptAttribute()
    {
        return substr($this->body, 0, 140);      //muestra 140 caracteres del body
    }

    public function getGetImageAttribute()
    {
        if($this->image)
            return url("storage/$this->image");
    }

    public function career()
    {
        return $this->belongsTo(Career::class); //Post pertenece a una carrera
    }

}
