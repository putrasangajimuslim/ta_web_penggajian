<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absensi extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'absen';

    protected $fillable = [
        'kode_karyawan',
        'jam_masuk',
        'jam_keluar',
        'keterangan',
    ];

    // public function getJamMasukAttribute($value)
    // {
    //    // Periksa apakah nilai 'jam_masuk' tidak kosong (null)
    //     if ($value !== null) {
    //         return Carbon::parse($value)->format('H:i:s');
    //     }
    //     // Jika 'jam_masuk' kosong, Anda dapat mengembalikan nilai default atau sesuai kebutuhan
    //     return ''; // Misalnya, mengembalikan string kosong jika kosong
    // }

    // public function getJamKeluarAttribute($value)
    // {
    //    // Periksa apakah nilai 'jam_masuk' tidak kosong (null)
    //     if ($value !== null) {
    //         return Carbon::parse($value)->format('H:i:s');
    //     }
    //     // Jika 'jam_masuk' kosong, Anda dapat mengembalikan nilai default atau sesuai kebutuhan
    //     return ''; // Misalnya, mengembalikan string kosong jika kosong
    // }

    // public function getCreatedAtAttribute($value)
    // {
    //    // Periksa apakah nilai 'jam_masuk' tidak kosong (null)
    //     if ($value !== null) {
    //         return Carbon::parse($value)->format('Y-m-d');
    //     }
    //     // Jika 'jam_masuk' kosong, Anda dapat mengembalikan nilai default atau sesuai kebutuhan
    //     return ''; // Misalnya, mengembalikan string kosong jika kosong
    // }
}
