<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class t_detail_penjualan extends Model
{
    use HasFactory;

    protected $table = 't_detail_penjualan';
    protected $primaryKey = 'detail_id';

    // @var array
    protected $fillable = ['penjualan_id', 'barang_id', 'harga', 'jumlah'];
    // protected $fillable = ['level_id', 'username', 'nama'];

    public function penjualan(): BelongsTo
    {
        return $this->belongsTo(t_penjualan::class, 'penjualan_id', 'penjualan_id');
    }
    public function barang(): BelongsTo
    {
        return $this->belongsTo(m_barang::class, 'barang_id', 'barang_id');
    }
}