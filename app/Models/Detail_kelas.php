<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_kelas extends Model
{
    use HasFactory;
    public $timestamps = true;
    public $table = 'detail_kelas';
    protected $fillable = ['id_siswa', 'id_kelas'];


    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id_siswa');
    }
    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'id_kelas', 'id_kelas');
    }
}
