<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'pengaduan_id', 'tanggapan', 'petugas_id',
    ];

    protected $hidden = [
    
    ];

    public function pengaduan()
    {
    	return $this->hasOne(Pengaduan::class,'id', 'id');
    }

    public function proses()
    {
    return $this->hasMany(Pengaduan::class, 'status_id','status');
    }

    public function country() {
        return $this->hasOne(Pengaduan::class);
    }
}