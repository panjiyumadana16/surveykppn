<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\surveys;
use App\pertanyaans;
use App\opsis;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pertanyaans = pertanyaans::where('p_surveyid',$id);
        $opsis = opsis::where('o_surveyid',$id);
        $surveys = surveys::where('s_id',$id)->first();
        return view('adminlte/pages/pertanyaan',['pertanyaans' => $pertanyaans],['surveys' => $surveys],['opsis' => $opsis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idsurvey = $request->get('idsurvey');
        dd($request->all());
        for ($i=0; $i < $banyakp; $i++) { 
            dd($i);
            $pertanyaans = new pertanyaans([
                'p_surveyid' => $request->get('idsurvey'),
                'p_pertanyaan' => $request->get('pertanyaan['+$i+']'),
                'p_tipe' => $request->get('tipepertanyaan['+$i+']'),
                'p_harus_terjawab' => $request->get('wajibisi['+$i+']')
            ]);
            $idpertanyaans = $pertanyaans->p_id;
            for ($j=0; $j < $request->get('banyakopsi[$i]'); $j++) { 
                $opsis = new opsis([
                    'o_surveyid' => $request->get('idsurvey'),
                    'o_pertanyaanid' => $idpertanyaans,
                    'o_opsijawaban' => $request->get('isijawaban[$j]')
                ]);
                $opsis->save();
            }
        }
        Session::put('sweetalert','success');
        return redirect('/survey/$idsurvey/pertanyaan')->with('alert','Berhasil membuat pertanyaan!');
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
