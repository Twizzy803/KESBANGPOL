<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ormas extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pemohon',
        'telp',
        'email',
        'password',
        'nama_ormas',
        'alamat',
        'struktur_pengurus',
        'jumlah_anggota',
        'kategori_ormas_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kategori_ormas_id' => 'integer',
    ];

    public function dokumen(): HasOne
    {
        return $this->hasOne(Dokumen::class);
    }

    public function kategoriOrmas(): BelongsTo
    {
        return $this->belongsTo(KategoriOrmas::class);
    }
}
