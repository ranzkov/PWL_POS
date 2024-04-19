<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        // Kita ambil data user lalu simpan pada variable $user
        $user = Auth::user();

        // Kondisi jika user nya ada
        if ($user) {
            // Jika user nya memiliki level admin
            if ($user->level_id == '1') {
                return redirect()->intended('admin');
            }
            // Jika user nya memiliki level manager
            else if ($user->level_id == '2') {
                return redirect()->intended('manager');
            }
        }

        return view('login');
    }

    public function proses_login(Request $request)
    {
        // Kita buat validasi pada saat tombol login diklik, validasi nya username & password wajib di isi
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Ambil data request username & password saja
        $credentials = $request->only('username', 'password');

        // Cek jika data username dan password valid (sesuai) dengan data
        if (Auth::attempt($credentials)) {
            // Kalau berhasil simpan data user ya di variabel $user
            $user = Auth::user();

            // Cek lagi jika level user admin maka arahkan ke halaman admin
            if ($user->level_id == '1') {
                return redirect()->intended('admin');
            }
            // Jika level user adalah user biasa maka arahkan ke halaman manager
            else if ($user->level_id == '2') {
                return redirect()->intended('manager');
            }
        }

        // Jika ga ada data user yang valid maka kembalikan lagi ke halaman login
        // Pastikan kirim pesan error juga kalau login gagal ya
        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Pastikan kembali username dan password yang dimasukan sudah benar']);
    }

    public function register()
    {
        // Tampilkan view register
        return view('register');
    }

    // Aksi form register
    public function proses_register(Request $request)
    {
        // Kita buat validasi untuk proses register
        // Validasi bahwa semua field wajib diisi
        // Validasi bahwa username harus unique atau tidak boleh duplikat
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required|unique:m_user',
            'password' => 'required'
        ]);

        // Jika validasi gagal, kembali ke halaman register dengan menampilkan pesan error
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        // Jika validasi berhasil, isi level_id dan hash passwordnya untuk keamanan
        $request['level_id'] = '2';
        $request['password'] = Hash::make($request->password);

        // Masukkan semua data pada request ke dalam tabel user
        UserModel::create($request->all());

        // Jika berhasil, arahkan ke halaman login
        return redirect('/login');
    }
    public function logout(Request $request)
    {
        // Logout harus menghapus session
        $request->session()->flush();

        // Jalankan fungsi logout pada auth
        Auth::logout();

        // Kembali ke halaman login
        return redirect('login');
    }
}

