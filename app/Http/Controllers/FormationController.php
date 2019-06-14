<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation ;
use DB;
class FormationController extends Controller
{          
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$formations=Formation::latest()->paginate(3);
return view('formation.index',compact('formations'))->with('i',(request()->input('page',1)-1)*3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formation.create');
    }


    public function search(Request $request){
    $search=$request->get('search');
    $formations=DB::table('formations')->where('nom','like','%'.$search.'%')->paginate(6);
    return view('formation.index',['formations'=>$formations]);


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
            'nom' =>'required' ,
            'formateur' =>'required' ,
            'code' =>'required' ,
            'duree' =>'required' ,
            'fiche_tech' =>'required' ,
            'cible_public' =>'required',
            'programme' =>'required',
            'image' =>'required|image|max:4056',
            'status' =>'required'
       ]);

       $image=$request->file('image');
       $new_name= time().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('images'),$new_name);
$mydata=array(

            'nom' =>$request->nom,
            'thematique' =>$request->thematique,
            'formateur' =>$request->formateur,
            'code' =>$request->code,
            'duree' =>$request->duree,
            'fiche_tech' =>$request->fiche_tech,
            'cible_public' =>$request->cible_public,
            'programme' =>$request->programme,
             'status' =>$request->status,
            'image' =>$new_name




 );












Formation::create($mydata);
return redirect()->route('formation.index')->with('success', 'new formation is created ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $formation=Formation::find($id);
        return view('formation.detail',compact('formation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $formation=Formation::find($id);
        return view('formation.edit',compact('formation'));
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
           'nom' =>'required' ,
           'formateur' =>'required' ,
           'code' =>'required' ,
           'duree' =>'required' ,
           'fiche_tech' =>'required' ,
           'cible_public' =>'required',
           'programme' =>'required',
           'status' =>'required'
      ]);

      $formation=Formation::find($id);

      $formation->nom=$request->get('nom');
      $formation->formateur=$request->get('formateur');
      $formation->code=$request->get('code');
      $formation->duree=$request->get('duree');
      $formation->fiche_tech=$request->get('fiche_tech');
      $formation->programme=$request->get('programme');
      $formation->status=$request->get('status');
      $formation->save();
      return redirect()->route('formation.index')->with('success', 'new formation is updated succefully ');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $formation=Formation::find($id);
           $formation->delete();
           return redirect()->route('formation.index')->with('success', 'new formation is updated deleted ');

    }
}
