<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackModel extends Model
{
    protected $table = 'package_trace';
    protected $primaryKey = 'id';

    public function paket()
    {
        return $this->belongsTo(PaketModel::class, 'package_id', 'id');
    }
}
