<?php

use Illuminate\Support\Facades\Route;
use App\Models\Barang;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\PpdbsController;
use App\Http\Controllers\PenggunasController;
use App\Http\Controllers\TeleponsController;
use App\Http\Controllers\KategorisController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PenerbitsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\PembelisController;
use App\Http\Controllers\BukusController;
use App\Http\Controllers\TransaksisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return 'Selamat datang di home';
});
Route::get('/about', function(){
    return 'Selamat datang di about';
});
Route::get('/contact', function(){
    return 'Selamat datang di contact';
});

Route::get('/siswa', function(){
    
    $data_siswa = ['Keyndra','Napis','Nabila','Daffa','Opet','Agus'];

    return view('tampil',compact('data_siswa'));
});

//route parameter
Route::get('/tes/{nama}/{tempatlahir}/{jeniskelamin}/{agama}/{alamat}', function($nama,$tempatl,$jenisk,$agama,$alamat){
    return 'Nama : '.$nama."<br> Tempat Lahir : ".$tempatl."<br> Jenis Kelamin : ".$jenisk."<br> Agama : ".$agama."<br> Alamat : ".$alamat;
});
Route::get('/hitung/{b1}/{b2}', function($b1,$b2){
    $hitung = $b1 + $b2;
    return 'Bilangan 1 : '.$b1.
    '<br>Bilangan 2 : '.$b2.
    '<br>Hasil : '.$hitung;
});

Route::get('/latihan/{nama}/{notelp}/{jenisb}/{namab}/{jumlah}/{bayar}/', function($nama,$notelp,$jenisb,$namab,$jumlah,$bayar){
    if ($jenisb == "Handphone") {
        if ($namab == "Poco") {
            $harga = 3000000;
        }elseif ($namab == "Samsung") {
            $harga = 5000000;
        }elseif ($namab == "Iphone") {
            $harga = 15000000;
        }
    }elseif ($jenisb == "Laptop") {
        if ($namab == "Lenovo") {
            $harga = 4000000;
        }elseif ($namab == "Acer") {
            $harga = 8000000;
        }elseif ($namab == "Macbook") {
            $harga = 20000000;
        }
    }elseif ($jenisb == "TV") {
        if ($namab == "Toshiba") {
            $harga = 5000000;
        }elseif ($namab == "Samsung") {
            $harga = 8000000;
        }elseif ($namab == "LG") {
            $harga = 10000000;
        }
    }

    $total1 = $harga * $jumlah;

    if ($total1 >= 10000000) {
        $cb = 500000;
    }else {
        echo"Tidak ada Cashback";
    }

    if ($bayar == "Transfer") {
        $potong = 50000;
    }elseif ($bayar == "Cash") {
        $potong = 0;
    }else {
        echo"Tidak ada potongan";
    }

    $total2 = $total1 - $cb - $potong;
    
    return 'Nama Pembeli : '.$nama.
    '<br>Telepon : '.$notelp.
    '<br>------------------------------'.
    '<br>Jenis Barang : '.$jenisb.
    '<br>Nama Barang : '.$namab.
    '<br>Harga : '.$harga.
    '<br>Jumlah : '.$jumlah.
    '<br>------------------------------'.
    '<br>Total : '.$total1.
    '<br>Casback : '.$cb.
    '<br>Pembayaran : '.$bayar. 
    '<br>Potongan : '.$potong. 
    '<br>------------------------------
    <br>Total Pembayaran : '.$total2
    ;
});

//routing dengan model
Route::get('/post', [PostsController::class, 'menampilkan']);
Route::get('/barang', [PostsController::class, 'menampilkan2']);

// Route::get('/post', function(){

//     $post = Post::all();
//     $post = Post::where('id',3)->get();
//     $post = Post::where('title','LIKE','%visi%')->get();

//     return view('tampil_post',compact('post'));
// });


// Route::get('/barang', function(){

//     $barang = Barang::all();
//     return view('tampil_barang',compact('barang'));
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD

Route::resource('siswa', SiswasController::class);
Route::resource('ppdb', PpdbsController::class);
Route::resource('pengguna', PenggunasController::class);
Route::resource('telepon', TeleponsController::class);
Route::resource('kategori', KategorisController::class);
Route::resource('produk', ProduksController::class);
Route::resource('product', ProductsController::class);
Route::resource('customer', CustomersController::class);
Route::resource('order', OrdersController::class);
Route::resource('penerbit', PenerbitsController::class);
Route::resource('genre', GenresController::class);
Route::resource('pembeli', PembelisController::class);
Route::resource('transaksi', TransaksisController::class);
Route::resource('buku', BukusController::class);
