<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Berita;
use App\Models\FastLink;
use App\Models\HalamanMenu;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Shetabit\Visitor\Models\Visit;

class LandingpageController extends Controller
{
    public function Home()
    {
        $Banner = Banner::all();
        $Berita = Berita::with(['User','kategoriBerita'])->latest()->paginate(4);
        $BeritaAtas = Berita::with(['User','kategoriBerita'])->latest()->paginate(4);
        $Populer = Visit::select('visitable_id', DB::raw('count(*) as total'))->groupBy('visitable_id')
            ->orderBy('total', 'DESC')->with('Berita')->limit(4)->get();
        $Pengumuman = Pengumuman::with('User')->get();
        $FastLink = FastLink::all();
        $RelatedPost = Berita::with(['User','kategoriBerita'])->inRandomOrder()->limit(4)->get();

        return view('tlandingpage.index', compact('Banner', 'Berita', 'Pengumuman', 'FastLink', 'RelatedPost', 'BeritaAtas', 'Populer'));
    }
    public function HalamanMenu($id)
    {

        $HalamanMenu = HalamanMenu::with('Menu')->find($id);
        $BeritaBaru = Berita::with(['User','kategoriBerita'])->latest()->paginate(4);
        $Populer = Visit::select('visitable_id', DB::raw('count(*) as total'))->groupBy('visitable_id')
            ->orderBy('total', 'DESC')->with('Berita')->limit(4)->get();
        if ($HalamanMenu != NULL) {
            return view('tlandingpage.regular', compact('HalamanMenu','BeritaBaru','Populer'));
        } else {
            return back();
        }
    }

    public function Berita()
    {
        $Berita = Berita::with(['User','kategoriBerita'])->latest()->paginate(4);
        $RelatedPost = Berita::with(['User','kategoriBerita'])->inRandomOrder()->limit(4)->get();
        $Populer = Visit::select('visitable_id', DB::raw('count(*) as total'))->groupBy('visitable_id')
        ->orderBy('total', 'DESC')->with('Berita')->limit(4)->get();
        // dd($Populer);
        return view('tlandingpage.berita', compact('Berita', 'RelatedPost','Populer'));
    }

    public function DetailBerita($id)
    {
        $Berita = Berita::find($id);
        if ($Berita != NULL) {
            $RelatedPost = Berita::with(['User','kategoriBerita'])->inRandomOrder()->limit(4)->get();
            $next = Berita::with(['User','kategoriBerita'])->where('id', '>', $Berita->id)->orderBy('id', 'desc')->first();
            $previous = Berita::with(['User','kategoriBerita'])->where('id', '<', $Berita->id)->orderBy('id', 'desc')->first();

            // dd(she)
            visitor()->visit($Berita);
            // $Berita->createVisitLog();
            return view('tlandingpage.detailBerita', compact('Berita', 'RelatedPost', 'next', 'previous'));
        } else {
            return back();
        }
    }

    public function cariBerita(Request $request)
    {
        $Berita = Berita::with(['User','kategoriBerita'])->query()
            ->where('judul', 'LIKE', "%{$request->berita}%")->paginate(4);
        $RelatedPost = Berita::with(['User','kategoriBerita'])->inRandomOrder()->limit(4)->get();
        return view('tlandingpage.Berita', compact('Berita', 'RelatedPost'));
    }
}
