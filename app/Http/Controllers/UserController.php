<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::findOr(20, ['username', 'nama'], function () {
            abort(404);
        });

        return view('user', ['data' => $user]);
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
    }
}
