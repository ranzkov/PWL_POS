<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }
    public function prosesFileUpload(Request $request)
    {
        // return "Pemrosesan file upload di sini";
        // dump($request->berkas);
        // dump($request->hasFile('berkas'));

        // if ($request->hasFile('berkas')) 
        // {
        //     echo "path(): " . $request->berkas->path();
        //     echo "<br>";
        //     echo "extension(): " . $request->berkas->extension();
        //     echo "<br>";
        //     echo "getClientOriginalExtension(): " . 
        //             $request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getMimeType(): " . $request->berkas->getMimeType();
        //     echo "<br>";
        //     echo "getClientOriginalName(): " . 
        //             $request->berkas->getClientOriginalName();
        //     echo "<br>";
        //     echo "getSize(): " . $request->berkas->getSize();
        // } 
        // else 
        // {
            // echo "Tidak ada berkas yang diupload";
        // }

        $request->validate([
            'berkas'=>'required|file|image|max:5000',]);
            $namaFile=$request->berkas->getClientOriginalName();
            $path = $request->berkas->storeAs('uploads',$namaFile);
            echo "proses upload berhasil, data disimpan pada: $path";
            
            // echo $request->berkas->getClientOriginalExtension() . "lolos validasi";
            // $path = $request->berkas->store('uploads');
        //     // echo $request->berkas->getClientOriginalName()."lolos Validasi";
        //     // $path = $request->berkas->storeAs('public', $namaFile);
        //     'berkas'=>'required|file|image|max:5000',]);

        //     $path = $request->berkas->move('gambar', $namaFile);
        //     $path =str_replace("\\","//",$path);
        //     echo "Variabel path berisi:$path <br>";

        //     $pathBaru=asset('gambar/'.$namaFile);
        //     echo "<br>";
        //     echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";
    }
}
