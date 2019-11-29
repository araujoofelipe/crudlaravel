<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boat;
class BoatController extends Controller
{
   
    public function index()
    {
        $boats = Boat::latest()->paginate(5);
        return view('boat.index',compact('boats'))
                    ->with('i',(request()->input('page',1)-1)*5);
    }

    
    public function create()
    {
        return view('boat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nameBoat' => 'required',
            'price' => 'required',
            'cidade' => 'required',
            'boatSize' => 'required',
            'boatDescription' => 'required'
        ]);  
        Boat::create($request->all());
        return redirect()->route('boat.index')
                        ->with('success','new boat created sucessfully'); 
    }

    
    public function show($id)
    {   
        $boat=Boat::find($id);
        return view('boat.detail',compact('boat'));
    }

    
    public function edit($id)
    {
        $boat=Boat::find($id);
        return view('boat.edit',compact('boat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nameBoat' => 'required',
            'price' => 'required',
            'cidade' => 'required',
            'boatSize' => 'required',
            'boatDescription' => 'required'
        ]);

        $boat=Boat::find($id);
        $boat->nameBoat=$request->get('nameBoat');
        $boat->price=$request->get('price');
        $boat->cidade=$request->get('cidade');
        $boat->boatSize=$request->get('boatSize');
        $boat->boatDescription=$request->get('boatDescription');
        $boat->save();
        return redirect()->route('boat.index')
                        ->with('success','Boat update successfully');
    }

    
    public function destroy($id)
    {
        $boat=Boat::find($id);
        $boat->delete();
        return redirect()->route('boat.index')
                         ->with('success','Boat deleted successfully');
    }
}
