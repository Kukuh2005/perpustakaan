<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['id_pustaka', 'id_anggota', 'tgl_pinjam', 'tgl_kembali', 'tgl_pengembalian', 'fp', 'keterangan'];
}
