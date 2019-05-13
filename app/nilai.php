<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table="nilai";
    protected $primaryKey='id';

    public function get_pendaftaran()
    {
        return $this->belongsTo(pendaftaran::class, 'pendaftaran_id','id');
    }
}
