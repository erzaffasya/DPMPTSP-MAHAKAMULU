<?php

namespace App\Http\Controllers;

use App\Models\ProfileWebsite;
use Illuminate\Http\Request;

class ProfileWebsiteController extends Controller
{
    public function index()
    {
        $ProfileWebsite = ProfileWebsite::find(1);
        return view('admin.ProfileWebsite.index', compact('ProfileWebsite'));
    }

    public function kepalaDinas()
    {
        // dd('erza');
        $ProfileWebsite = ProfileWebsite::find(1);
        return view('admin.ProfileWebsite.kepalaDinas', compact('ProfileWebsite'));
    }

    public function profilWebsite()
    {
        $ProfileWebsite = ProfileWebsite::find(1);
        return view('admin.ProfileWebsite.profilWebsite', compact('ProfileWebsite'));
    }

    public function kontak()
    {
        $ProfileWebsite = ProfileWebsite::find(1);
        return view('admin.ProfileWebsite.kontak', compact('ProfileWebsite'));
    }

    public function sosialMedia()
    {
        $ProfileWebsite = ProfileWebsite::find(1);
        return view('admin.ProfileWebsite.sosialMedia', compact('ProfileWebsite'));
    }
    
    public function jadwalPelayanan()
    {
        $ProfileWebsite = ProfileWebsite::find(1);
        return view('admin.ProfileWebsite.jadwalPelayanan', compact('ProfileWebsite'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $ProfileWebsite = ProfileWebsite::find(1);
        if ($request->logo) {
            $extention = $request->logo->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/ProfileWebsite/logo/" . $file_name;
            $request->logo->storeAs('public/ProfileWebsite/logo', $file_name);

            $ProfileWebsite->logo = $txt;
        }

        if ($request->foto_kadis) {
            $extention = $request->foto_kadis->extension();
            $file_name1 = time() . '.' . $extention;
            $txt1 = "storage/ProfileWebsite/foto_kadis/" . $file_name1;
            $request->foto_kadis->storeAs('public/ProfileWebsite/foto_kadis', $file_name1);

            $ProfileWebsite->foto_kadis = $txt1;
        }


        $ProfileWebsite->slogan = $request->slogan;
        $ProfileWebsite->visi = $request->visi;
        $ProfileWebsite->misi = $request->misi;
        $ProfileWebsite->deskripsi = $request->deskripsi;
        $ProfileWebsite->video = $request->video;
        $ProfileWebsite->nama_kadis = $request->nama_kadis;


        $ProfileWebsite->alamat = $request->alamat;
        $ProfileWebsite->email = $request->email;
        $ProfileWebsite->no_telp = $request->no_telp;
        $ProfileWebsite->instagram = $request->instagram;
        $ProfileWebsite->youtube = $request->youtube;
        $ProfileWebsite->facebook = $request->facebook;
        $ProfileWebsite->google_maps = $request->google_maps;

        // dd($request->all());
        
        $ProfileWebsite->slogan_pelayanan = $request->slogan_pelayanan;
        $ProfileWebsite->deskripsi_pelayanan = $request->deskripsi_pelayanan;

        if ($request->gambar_pelayanan) {
            $extention = $request->gambar_pelayanan->extension();
            $file_name12 = time() . '.' . $extention;
            $txt12 = "storage/ProfileWebsite/gambar_pelayanan/" . $file_name12;
            $request->gambar_pelayanan->storeAs('public/ProfileWebsite/gambar_pelayanan', $file_name12);

            $ProfileWebsite->gambar_pelayanan = $txt12;
        }
        
        $ProfileWebsite->senin_kamis = $request->senin_kamis;
        $ProfileWebsite->jumat = $request->jumat;
        // $ProfileWebsite->isLibur = $request->isLibur;

        $ProfileWebsite->save();

        return back()->with('success', 'Data Berhasil Diubah!');
    }
}
