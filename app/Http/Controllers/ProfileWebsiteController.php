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

    public function store(Request $request)
    {
        // dd($request->all());
        if (isset($request->favicon)) {
            $extention = $request->favicon->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/ProfileWebsite/favicon/" . $file_name;
            $request->favicon->storeAs('public/ProfileWebsite/favicon', $file_name);
        } else {
            $file_name = null;
        }

        if (isset($request->background_website)) {
            $extention = $request->background_website->extension();
            $file_name1 = time() . '.' . $extention;
            $txt1 = "storage/ProfileWebsite/background_website/" . $file_name1;
            $request->background_website->storeAs('public/ProfileWebsite/background_website', $file_name1);
        } else {
            $file_name1 = null;
        }

        $ProfileWebsite = ProfileWebsite::find(1);
        // dd($ProfileWebsite);
        $ProfileWebsite->nama_website = $request->nama_website;
        $ProfileWebsite->email = $request->email;
        $ProfileWebsite->domain = $request->domain;
        $ProfileWebsite->no_rekening = $request->no_rekening;
        $ProfileWebsite->no_telp = $request->no_telp;
        $ProfileWebsite->meta_deskripsi = $request->meta_deskripsi;
        $ProfileWebsite->meta_keyword = $request->meta_keyword;
        $ProfileWebsite->google_maps = $request->google_maps;

        $ProfileWebsite->favicon = $txt;
        $ProfileWebsite->background_website = $txt1;
        $ProfileWebsite->save();

        return back()->with('success', 'Data Berhasil Diubah!');
    }
}
