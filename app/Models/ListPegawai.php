<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';

    public function agama()
    {
        return $this->hasOne(Agama::class, 'kode_agama', 'kode_agama');
    }

    public function pensiun()
    {
        return $this->hasOne(Pensiun::class, 'id_pensiun', 'id_pensiun');
    }

    public function pendidikan()
    {
        return $this->hasMany(Pendidikan::class, 'kode_pdd', 'kode_pdd');
    }

    public function naikkgb()
    {
        return $this->hasMany(NaikKgb::class, 'id_peg', 'id_peg');
    }

    public function penghargaan()
    {
        return $this->hasMany(Penghargaan::class, 'kode_pdd', 'kode_pdd');
    }

    public function riwayatindisipliner()
    {
        return $this->hasMany(RiwayatIndisipliner::class,  'id_peg', 'id_peg');
    }

    public function riwayatjabatan()
    {
        return $this->hasMany(RiwayatJabatan::class, 'id_peg', 'id_peg');
    }

    public function riwayatjabatanf()
    {
        return $this->hasMany(RiwayatJabatanf::class, 'id_peg', 'id_peg');
    }

    public function riwayatjabatanft()
    {
        return $this->hasMany(RiwayatJabatanft::class, 'id_peg', 'id_peg');
    }

    public function riwayatorganisasi()
    {
        return $this->hasMany(RiwayatOrganisasi::class, 'id_peg', 'id_peg');
    }

    public function riwayatpangkat()
    {
        return $this->hasMany(RiwayatPangkat::class, 'id_peg', 'id_peg');
    }

    public function riwayatsatuankerja()
    {
        return $this->hasMany(RiwayatSatuankerja::class, 'id_peg', 'id_peg');
    }

    public function riwayatstskepeg()
    {
        return $this->hasMany(RiwayatStskepeg::class, 'id_peg', 'id_peg');
    }
}
