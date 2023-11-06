<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coomputer;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
/*     private static function getdata(){
return  [
        ['id'=>1, 'name'=>'LG', 'origin'=>'Koria'],
        ['id'=>2, 'name'=>'Toshipa', 'origin'=>'USA'],
        ['id'=>3, 'name'=>'HP', 'origin'=>'USA'],
        ['id'=>4, 'name'=>'Lenovo', 'origin'=>'USA'],
] ;}
      */ 

    public function index()
    {
        return view('computers.index',
          ['computers' => coomputer::all()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
             'Compueter-name'=>'required',
             'Compueter-origin'=>'required',
             'Compueter-price'=>'required|integer',//or more methode ['requierd','integer']
        ]);
       $computer= new Coomputer(); 
       $computer->name =strip_tags( $request->input('Compueter-name')); 
       $computer->origin =strip_tags($request->input('Compueter-origin')) ;
       $computer->price =strip_tags($request->input('Compueter-price')) ;
       $computer->save();
       return redirect()->route('computer.index'); //يعني بعد ما يخزن المعلومات حولني للصفحة يلي فيا الكميوترات 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('computers.show' ,[
        'computer'=>Coomputer::findorFail($id)
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       return view('computers.edit',[
        'computer'=>Coomputer::findOrFail($id)
       ]);}
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Compueter-name'=>'required',
            'Compueter-origin'=>'required',
            'Compueter-price'=>'required|integer',//or more methode ['requierd','integer']
       ]);
      $toupdate= Coomputer::findOrFail($id);
      $toupdate->name =strip_tags( $request->input('Compueter-name')); 
      $toupdate->origin =strip_tags($request->input('Compueter-origin')) ;
      $toupdate->price =strip_tags($request->input('Compueter-price')) ;
      $toupdate->save(); 
      return redirect()->route('computer.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todelete= Coomputer::findOrFail($id);
        $todelete->delete();
        return redirect()->route('computer.index');
    }
}
