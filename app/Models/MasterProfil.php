<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterProfil extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'nomor_hp',
        'alamat',
        'kota',
        'pos'
    ];
}
