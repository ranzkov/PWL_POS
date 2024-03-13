<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::all();
        return view('user', ['data' => $user]);

    }
    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;
        $user->save();

        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }


}



// $userCount = UserModel::where('level_id', 2)->count(); 
// $users = UserModel::where('level_id', 2)->get(); // mengambil semua data pengguna dengan level_id 2
// $user = UserModel::where('username', 'manager9')->firstOrFail();
// $user = UserModel::findOr(20, ['username', 'nama'], function () {
//     abort(404);
// });
// $user = UserModel::firstWhere('level_id', 1)->first();
// $user = UserModel::find(1);
// $data = [
//     'level_id' => 2,
//     'username' => 'manager_tiga',
//     'nama' => 'Manager 3',
//     'password' => Hash::make('12345')
// ];

// // Tambahkan data pengguna baru ke dalam tabel m_user
// UserModel::create($data);

// // Ambil semua data pengguna dari tabel m_user
// $users = UserModel::all();

// // Kirim data pengguna ke view 'user'
// return view('user', ['data' => $users]);


// // Update data user dengan Eloquent Model
// $data = [
//     'nama' => 'Pelanggan Pertama',
// ];

// UserModel::where('username', 'customer-1')->update($data); // Update data user

// // Coba akses model UserModel
// $users = UserModel::all(); // Ambil semua data dari tabel m_user
// return view('user', ['data' => $users]);

// Tambah data user dengan Eloquent Model
// $data = [
//     'username' => 'customer-1',
//     'nama' => 'Pelanggan',
//     'password' => Hash::make('12345'),
//     'level_id' => 4
// ];

// UserModel::insert($data); // Tambahkan data ke tabel m_user

// // Coba akses model UserModel
// $users = UserModel::all(); // Ambil semua data dari tabel m_user
// return view('user', ['data' => $users]);
