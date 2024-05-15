<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class BarangModel extends Model
{
    protected $table = 'm_barang';
    protected $primaryKey = 'barang_id';

    protected $fillable = [
        'kategori_id',
        'barang_kode',
        'barang_nama',
        'harga_beli',
        'harga_jual',
        'image'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }

    public function penjualan_detail(): HasMany
    {
        return $this->hasMany(DetailModel::class, 'barang_id', 'barang_id');
    }

    public function stok(): HasOne{
        return $this->hasOne(StokModel::class, 'barang_id', 'barang_id');
    }

    public function image(): Attribute
    {
        return Attribute::make( 
            get: fn ($image) => url("storage/posts/". $image),
        );
    }
}
