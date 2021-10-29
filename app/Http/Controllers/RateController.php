<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Music;
use App\Admin;
use App\Rate;
use App\User;
class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $music = Music::all();
        $admin = Admin::all();
        $rate = Rate::all();
        return view('rate.index', compact('music','admin','rate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $music = Music::all();
        $admin = Admin::all();
        $user = User::all();
        return view('rate.create', compact('music','admin','user'));
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
            'music_id' => 'required',
            'admin_id' => 'required',
            'komentar' => 'required',
            'rating' => 'required'
        ]);

        $rate = Rate::create([
            "music_id" => $request->music_id,
            "admin_id" => $request->admin_id,
            "komentar" => $request->komentar,
            "rating" => $request->rating,
        ]);
        Alert::success('Berhasil', 'Berhasil menambahkan rating');
        return redirect('rate');
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
        $rate = Rate::find($id);        
        $music = Music::all();
        $admin = Admin::all();
        return view('rate.edit', compact('rate','music','admin'));
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
            'music_id' => 'required',
            'admin_id' => 'required',
            'komentar' => 'required',
            'rating' => 'required'
        ]);

        $rate= Rate::findorfail($id);

        $rate_data=[
            "music_id" => $request->music_id,
            "admin_id" => $request->admin_id,
            "komentar" => $request->komentar,
            "rating" => $request->rating,
        ];
       
        $rate->update($rate_data);
        Alert::info('Berhasil', 'Berhasil mengupdate rating');
        return redirect('/rate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rate::destroy($id);
        Alert::warning('Dihapus', 'Rating berhasil dihapus');
        return redirect('/rate');
    }
}
