<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Employee extends Model
{
    use HasFactory;

    public $table = "pegawai";
    protected $primaryKey = 'nip';
    protected $fillable = [
        'nip', 'nama', 'tmplahir','tgllahir','nik' , 'bagian' , 'nikah' , 'aktif', 'kelamin', 'kota'
    ];
    protected $guarded = 'replid';
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    

    public function age() {
        return Carbon::parse($this->attributes['tgllahir'])->age;
    }
}
