<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Berita;
use App\Models\FastLink;
use App\Models\HalamanMenu;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function Home()
    {
        $Banner = Banner::all();
        $Berita = Berita::latest()->paginate(4);
        $Pengumuman = Pengumuman::all();
        $FastLink = FastLink::all();
        return view('tlandingpage.index', compact('Banner', 'Berita', 'Pengumuman', 'FastLink'));
    }
    public function HalamanMenu($id)
    {

        $HalamanMenu = HalamanMenu::find($id);
        if ($HalamanMenu != NULL) {
            return view('tlandingpage.regular', compact('HalamanMenu'));
        } else {
            return back();
        }
    }

    public function Berita()
    {
        $Berita = Berita::latest()->paginate(5);
        return view('tlandingpage.berita', compact('Berita'));
    }

    public function DetailBerita($id)
    {
        $Berita = Berita::find($id);
        return view('tlandingpage.detailBerita', compact('Berita'));
    }
}