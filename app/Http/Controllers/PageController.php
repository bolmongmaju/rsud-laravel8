<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

use App\Models\Event;
use App\Models\Tag;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Category;
use App\Models\Download;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Infografis;
use App\Models\Link;
use App\Models\News;
use App\Models\Photo;
use App\Models\Potensi;
use App\Models\Profile;
use App\Models\Profpeg;
use App\Models\Sosmed;
use App\Models\Video;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{

    public function index()
    {
        $contact = Contact::first();
        $profil = Profile::select('nama_opd', 'short_name', 'logo', 'favicon', 'kata_sambutan', 'foto_pimpinan')->first();
        $sliders = Slider::take(2)->latest()->get();
        $links = Link::latest()->get();
        $sosmeds = Sosmed::get();
        $news = News::take(6)->latest()->get();
        $faq = Faq::get();
        $faq_show_default = Faq::first();
        // $infografis = Http::get('http://bolmongkab.go.id/api/infografis')['data']['data'];

        return view('rsud.index', compact(
            'contact',
            'profil',
            'sliders',
            'links',
            'sosmeds',
            'news',
            'faq',
            'faq_show_default'
        ));
    }

    public function sejarah()
    {
        $item = Profile::select('sejarah')->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('rsud.detail.sejarah', compact('item', 'contact', 'profil', 'sosmeds', 'links'));
    }

    public function visimisi()
    {
        $item = Profile::select('visi', 'misi')->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('rsud.detail.visimisi', compact('item', 'sosmeds', 'links', 'profil', 'contact'));
    }

    public function struktur_organisasi()
    {
        $item = Profile::select('struktur_organisasi')->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('rsud.detail.struktur', compact('item', 'contact', 'profil', 'sosmeds', 'links'));
    }

    public function dasar_hukum()
    {
        $item = Profile::select('dasar_hukum')->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('rsud.detail.dasar_hukum', compact('item', 'contact', 'profil', 'sosmeds', 'links'));
    }

    public function maklumat_pelayanan()
    {
        $item = Profile::select('maklumat')->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('rsud.detail.maklumat', compact('item', 'sosmeds', 'links', 'profil', 'contact'));
    }

    public function prestasi()
    {
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('rsud.detail.prestasi', compact('sosmeds', 'links', 'profil', 'contact'));
    }

    public function rawat_jalan()
    {
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('rsud.detail.rawat_jalan', compact('sosmeds', 'links', 'profil', 'contact'));
    }

    public function rawat_inap()
    {
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('rsud.detail.rawat_inap', compact('sosmeds', 'links', 'profil', 'contact'));
    }

    public function gawat_darurat()
    {
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('rsud.detail.gawat_darurat', compact('sosmeds', 'links', 'profil', 'contact'));
    }

    public function berita()
    {
        $category = Category::latest()->get();
        $tags = Tag::latest()->get();
        $news = News::with('user')->latest()->paginate(5);
        $news_new = News::take(3)->latest()->get();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('rsud.detail.berita', compact('news', 'category', 'tags', 'news_new', 'contact', 'profil', 'sosmeds', 'links'));
    }

    public function berita_detail($slug)
    {
        $category = Category::latest()->get();
        $tags = Tag::latest()->get();
        $news = News::where('slug', $slug)->firstOrFail();
        $news_new = News::take(3)->latest()->get();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('rsud.detail.berita_detail', compact('news', 'category', 'tags', 'news_new', 'contact', 'profil', 'sosmeds', 'links'));
    }

    public function kontak()
    {
        $kontak = Contact::latest()->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('rsud.detail.kontak', compact('kontak', 'contact', 'profil', 'sosmeds', 'links'));
    }


    // public function download()
    // {
    //     $downloads = Download::latest()->paginate(5);
    //     return view('opd/detail/download', compact('downloads'));
    // }

    // public function getDownload(Request $request, $id)
    // {
    //     $entry = Download::where('id', '=', $id)->firstOrFail();
    //     $pathToFile = storage_path() . "/app/public/" . $entry->file;
    //     return response()->download($pathToFile);
    // }


    // public function kategori(Category $category)
    // {

    //     $kategori = Category::latest()->get();
    //     $tags = Tag::latest()->get();
    //     $sidebar = News::skip(5)->Paginate(5);
    //     $posts = $category->news()->latest()->paginate(4);

    //     return view('opd/detail/berita', compact('posts', 'kategori', 'sidebar', 'tags'));
    // }

    // public function tag(Tag $tag)
    // {

    //     $kategori = Category::latest()->get();
    //     $tags = Tag::latest()->get();
    //     $sidebar = News::skip(5)->Paginate(5);
    //     $posts = $tag->news()->latest()->paginate(4);

    //     return view('opd/detail/berita', compact('posts', 'kategori', 'sidebar', 'tags'));
    // }

}
