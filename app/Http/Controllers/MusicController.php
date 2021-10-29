<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use App\Music;
use App\Genre;
use App\Band;
use File;
use PDF;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $music = Music::all();
        $genre = Genre::all();
        $band = Band::all();
        return view('music.index', compact('music','genre','band'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        $band = Band::all();
        return view('music.create', compact('genre','band'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'band_id' => 'required',
            'judul_musik' => 'required',
            'tahun_terbit' => 'required',
            'genre_id' => 'required',
            'file_lirik' => 'mimes:pdf|max:10000'
            
        ]);
        $file_lirik = $request->file_lirik;
        $new_file = time() . ' - ' . $file_lirik->getClientOriginalName();
        // mhon dicek kembali

        $music = Music::create([
            "band_id" => $request->band_id,
            "judul_musik" => $request->judul_musik,
            "tahun_terbit" => $request->tahun_terbit,
            "genre_id" => $request->genre_id,
            "file_lirik" => $new_file,
        ]);

        
        Alert::success('Berhasil', 'Berhasil menambahkan musik');
        return redirect('music');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $music = Music::find($id);
        $genre = Genre::all();
        $band = Band::all();
        return view('music.edit', compact('music','genre','band'));
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
        $request->validate([
            'band_id' => 'required',
            'judul_musik' => 'required',
            'tahun_terbit' => 'required',
            'genre_id' => 'required',
            'file_lirik' => 'mimes:pdf|max:10000'
        ]);

        $music= Music::findorfail($id);

        if ($request->has('file_lirik')) {
            $path = "pdf/";
            File::delete($path .  $music->file_lirik);
            $file_lirik = $request->file_lirik;
            $new_file = time() . ' - ' . $file_lirik->getClientOriginalName();
            $file_lirik->move('pdf/', $new_file);
            $music_data=[
                "band_id" => $request->band_id,
                "judul_musik" => $request->judul_musik,
                "tahun_terbit" => $request->tahun_terbit,
                "genre_id" => $request->genre_id,
                "file_lirik" => $new_file,
            ];
        } else {
            $music_data=[
                "band_id" => $request->band_id,
                "judul_musik" => $request->judul_musik,
                "tahun_terbit" => $request->tahun_terbit,
                "genre_id" => $request->genre_id,
            ];
        }
        
        $music->update($music_data);
        Alert::info('Berhasil', 'Berhasil mengupdate musik');
        return redirect('/music');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Music::destroy($id);
        Alert::warning('Dihapus', 'Musik berhasil dihapus');
        return redirect('/music');
    }
    
    public function download(Request $request,$id)
    {
        return response()->download(public_path('pdf/'.$new_file));

    }


}
