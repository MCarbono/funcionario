<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Entities\Cargo;
use DB;

class CargoController extends Controller {
    
    public function index(){
        $cargo = Cargo::all();
        return view('cargos', compact('cargo'));
    }

    public function create(){
        return view('cargoForm');
    }

    public function store(Request $request){
        DB::beginTransaction();

        try {
            $cargo = Cargo::create($request->all());
            DB::commit();
            return redirect()->action('CargoController@index');

        } catch(\Exception $e){
            DB::rollback();
            return $e;
        }
    }

    public function destroy($id){
        DB::beginTransaction();

        try {
            $cargo = Cargo::findOrFail($id);
            $cargo->delete();
            DB::commit();
            return redirect()->action('CargoController@index');

        } catch(\Exception $e){
            DB::rollback();
            return $e;
        }
    }

    public function edit($id){
        $cargo = Cargo::findOrFail($id);
        return view('cargoForm', compact('cargo'));
    }

    public function update(Request $request, $id){
        DB::beginTransaction();

        try {
            $cargo = Cargo::findOrFail($id);
            $cargo->update($request->all());
            DB::commit();
            return redirect()->action('CargoController@index');
            
        } catch(\Exception $e){
            return $e;
        }
    }
}
