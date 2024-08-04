<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    use HasFactory;

    protected $table = 'loaitin';

    protected $fillable = [
        'TenLT',
        'ThuTu',
        'AnHien',
    ];

    public function tins()
    {
        return $this->hasMany(Tin::class, 'idLT');
    }
}
