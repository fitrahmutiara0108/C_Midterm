<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use DB;
use App\Band;

class BandController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth')->except(['index']);
    // }

    public function create()
    {
        $band = Band::all();
        return view('band.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'namaband' => 'required|unique:bands',
            'albumband' => 'required',
            'gambarband' => 'mimes:jpeg,jpg,png|max:2200'
        ]);
        $gambarband = $request->gambarband;
        $new_gambarband = time() . ' - ' . $gambarband->getClientOriginalName();

        $band = Band::create([
             "namaband" => $request->namaband,
             "albumband" => $request->albumband,
             "gambarband" => $new_gambarband
        ]);
        $gambarband->move('gambarband/', $new_gambarband);
        Alert::success('Berhasil', 'Berhasil menambahkan band');
        return redirect('/band');
    } 
    public function index()
    {
        $band = Band::all();
        return view('band.index', compact('band'));
    }
    public function show($id)
    {
        $band = Band::find($id);
        return view('band.show', compact('band'));
    }
    public function edit($id)
    {
        $band = Band::find($id);
        return view('band.edit', compact('band'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'namaband' => 'required',
            'albumband' => 'required',
            'gambarband' => 'mimes:jpeg,jpg,png|max:2200'
        ]);

        $band= Band::findorfail($id);

        if ($request->has('gambarband')) {
            $path = "gambarband/";
            File::delete($path .  $band->gambarband);
            $gambarband = $request->gambarband;
            $new_gambar = time() . ' - ' . $gambarband->getClientOriginalName();
            $gambarband->move('gambarband/', $new_gambar);
            $band_data=[
                "namaband" => $request->namaband,
                "albumband" => $request->albumband,
                "gambarband" => $new_gambar
            ];
        } else {
            $band_data=[
                "namaband" => $request->namaband,
                "albumband" => $request->albumband,
            ];
        }
        
        $band->update($band_data);
        
        Alert::info('Berhasil', 'Berhasil mengupdate band');
        return redirect('/band');
    }
    
    public function destroy($id)
    {
        // $query = DB::table('cast')->where('id', $id)->delete();
        Band::destroy($id);
        Alert::warning('Dihapus', 'band berhasil dihapus');
        return redirect('/band');
    }
}
