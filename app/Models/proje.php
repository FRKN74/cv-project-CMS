<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proje extends Model
{
    use HasFactory;
    protected $table = "projes";
    protected $guarded = [];

    public function getProje()
    {
        return $this->hasOne('App\Models\kategori','id','proje_id');
    }
}
