<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
    ];

    // указываем какие поля нельзя изменить массовым изменением
    protected $guarded = [
        'views_count',
    ];

    // связь с таблицей users
    public function category()
    {
        return $this->belongsTo(User::class); // статья принадлежит какому-то пользователю
    }

//    public function image() {
//        return $this->hasOne(Image::class); // статья имеет связанное изображение
//    }

//    public function comments() {
//        return $this->hasMany(Comment::class); // статья имеет несколько комментариев
//    }
}
