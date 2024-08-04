<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory;

    protected $table = 'tin'; // Tên bảng trong cơ sở dữ liệu

    protected $fillable = ['TieuDe', 'TomTat', 'NoiDung', 'img', 'luotxem', 'user_id'];
}
