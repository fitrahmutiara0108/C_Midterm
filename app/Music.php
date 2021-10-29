<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'music';
    protected $fillable = ['judul_musik','tahun_terbit','file_lirik', 'band_id', 'genre_id'];


    //databases relationship
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function band()
    {
        return $this->belongsTo(Band::class);
    }
}
