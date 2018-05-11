<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Berita extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('berita');
    }

    public function detailBerita($id)
    {
     $beritaTerkini = DB::table('Berita')->select('Berita.id','judul', 'penulis','waktu', 'status', 'viewer', 'username', 'featured_image')->where('headline',0)->join('User','Berita.penulis','=','User.id')->orderBy('waktu','desc')->get();
     $detailBerita = DB::table('Berita')->select('berita.id as id_berita', 'berita.judul as judul', 'berita.waktu as waktu', 'berita.status as status', 'berita.viewer as viewer', 'user.username as username', 'berita.featured_image as featured_image', 'berita.konten as konten_berita')->where('berita.id',$id)->join('User','Berita.penulis','=','User.id')->get();

     return View('detail_berita')->with('berita_lainnya',$beritaTerkini)->with('detail_berita',$detailBerita);
 // return View('detail_berita');
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
