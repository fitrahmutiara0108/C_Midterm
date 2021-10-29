<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = ['nama'];

    //database relationships
    public function musics()
    {
        return $this->hasMany(Music::class);
    }
}
