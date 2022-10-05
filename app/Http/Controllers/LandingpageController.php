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
        $BeritaAtas = Berita::latest()->paginate(4);
        // DD($BeritaAtas);
        $Pengumuman = Pengumuman::all();
        $FastLink = FastLink::all();
        $RelatedPost = Berita::inRandomOrder()->limit(4)->get();

        return view('tlandingpage.index', compact('Banner', 'Berita', 'Pengumuman', 'FastLink', 'RelatedPost', 'BeritaAtas'));
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
        $RelatedPost = Berita::inRandomOrder()->limit(4)->get();

        return view('tlandingpage.berita', compact('Berita', 'RelatedPost'));
    }

    public function DetailBerita($id)
    {
        $Berita = Berita::find($id);
        if ($Berita != NULL) {
            $RelatedPost = Berita::inRandomOrder()->limit(4)->get();
            $next = Berita::where('id', '>', $Berita->id)->orderBy('id','desc')->first();
            $previous = Berita::where('id', '<', $Berita->id)->orderBy('id','desc')->first();
            // dd($previous);
            return view('tlandingpage.detailBerita', compact('Berita', 'RelatedPost','next','previous'));
        } else {
            return back();
        }
    }
}
