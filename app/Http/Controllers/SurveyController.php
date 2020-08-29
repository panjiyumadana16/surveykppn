<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\surveys;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveys = surveys::all();
        return view('adminlte/pages/survey',['surveys' => $surveys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte/pages/formsurvey');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surveys = new surveys([
            's_judul' => $request->get('judul'),
            's_deskripsi' => $request->get('deskripsi')
        ]);
        $surveys->save();
        Session::put('sweetalert','success');
        return redirect('/survey')->with('alert','Berhasil membuat survey!');
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
        $surveys = surveys::where('s_id',$id)->first();
        return view('adminlte/pages/formeditsurvey',['surveys' => $surveys]);
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
        $data = [
            's_judul' => $request->get('judul'),
            's_deskripsi' => $request->get('deskripsi')
            
        ];
        $surveys = surveys::where('s_id',$id)->update($data);

        Session::put('sweetalert','success');
        return redirect('/survey')->with('alert','Berhasil mengubah survey!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surveys = surveys::where('s_id',$id)->delete();

        Session::put('sweetalert','success');
        return redirect('/survey')->with('alert','Berhasil menghapus survey!');
    }
}
