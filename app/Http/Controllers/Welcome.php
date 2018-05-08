<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Request;
use DB;

class Welcome extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $beritaTerkini = DB::table('Berita')->select('Berita.id','judul', 'penulis','waktu', 'status', 'viewer', 'username', 'featured_image')->where('headline',0)->join('User','Berita.penulis','=','User.id')->orderBy('waktu','desc')->get();

        $artikelTerkini = DB::table('Artikel')->select('*')->where('is_article_approved', 1)->join('User','Artikel.author','=','User.id')->join('kategori_artikel','Artikel.kategori_artikel','=','kategori_artikel.id_kategori_artikel')->orderBy('waktu','desc')->get();

        $headline = DB::table('Berita')->get();
    // dd($headline);
    //View welcome
        return View('welcome')->with('headline',$headline)->with('berita_terkini',$beritaTerkini)->with('artikel_terkini',$artikelTerkini);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
