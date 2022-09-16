<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe;
class EmployeController extends Controller
{
    //
    public function index(){
        $employes = Employe::get();
        return view('dashboard.admin.employe.index',compact('employes'));

    }
    public function destroy($id){
        $employe = Employe::findOrFail($id);
        $employe->delete();
        return redirect()->route('employe')->withSuccess('Sukses Menghapus Data E-DDC!');
    }
    public function create(){
        return view('dashboard.admin.employe.create');
    }
    public function store(Request $request){
        request()->validate($this->validation());
        try {
            $employe = Employe::create($this->field());
            
        } catch (\Throwable $th) {
            return redirect()->route('employe.create')->withErrors('Gagal Menambahkan Data E-DDC!');
            
        }
        return redirect()->route('employe')->withSuccess('Sukses Menambahkan Data E-DDC!');
    }

    public function edit($id){
        $employe = Employe::where('id',$id)->first();
        return view('dashboard.admin.employe.edit',compact('employe'));

    }
    public function update($id,Request $request){
        request()->validate($this->validation());
        try {
            $employe = Employe::findOrFail($id);
            $employe->update($this->field());
            
        } catch (\Throwable $th) {
            return redirect()->route('employe.create')->withErrors('Gagal Menambahkan Data E-DDC!');
            
        }
        return redirect()->route('employe')->withSuccess('Sukses Menambahkan Data E-DDC!');
    }

    public function validation(){
        return [
            'full_name'=>['required'],
            'gender'=>['required','in:Male,Female'],
            'birth_place'=>['required'],
            'birth_date'=>['required'],
            'address'=>['required'],
            'position'=>['required'],
        ];
    }
    public function field(){
        return [
            'full_name'=>request('full_name'),
            'gender'=>request('gender'),
            'birth_place'=>request('birth_place'),
            'birth_date'=>request('birth_date'),
            'address'=>request('address'),
            'position'=>request('position'),
        ];
    }
}
