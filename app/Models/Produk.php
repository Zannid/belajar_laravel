<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_produk','harga','stock','id_kategori'];
    public $timestamp = true;


    public function Kategori ()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function deleteImage(){
        if($this->cover && file_exists(public_path('image/produk' .$this->cover))){
            return unlink(public_path('image/produk' . $this->cover));
        }
    }
}
