<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    use HasFactory;

    protected $fillable = ['nama_fakultas', 'pimpinan_fakultas'];

    public function programStudis()
    {
        return $this->hasMany(ProgramStudi::class, 'kode_fakultas');
    }
}
