<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketModel extends Model
{
    protected $table = 'package';
    protected $primaryKey = 'id';

    public function paket()
    {
        return $this->hasMany(TrackModel::class, 'id', 'package_id');
    }
}
