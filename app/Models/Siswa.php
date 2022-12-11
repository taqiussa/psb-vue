<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'nis', 'nis')->withDefault();
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id')->withDefault();
    }
}
