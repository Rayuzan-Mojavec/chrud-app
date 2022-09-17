<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Student extends Model
{
    use HasFactory;

    public $table = "siswa";
    protected $primaryKey = 'nis';
    protected $fillable = [
        'nis', 'nama', 'tmplahir','tgllahir', 'nik' ,'tahunmasuk','idangkatan' ,'idkelas','kota'
    ];
    protected $guarded = 'replid';
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    public function age() {
        return Carbon::parse($this->attributes['tgllahir'])->age;
    }
}
