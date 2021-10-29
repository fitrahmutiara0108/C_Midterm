<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $table = 'bands';
    protected $fillable = ['namaband', 'albumband', 'gambarband'];

    protected $guarded = [];


    //database relationship
    public function musics()
    {
        return $this->hasMany(Music::class);
    }
}
