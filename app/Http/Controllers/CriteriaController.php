<?php

namespace App\Http\Controllers;

use App\Criteria;
use Illuminate\Http\Request;
Use Alert;

class CriteriaController extends Controller
{
    //
    public function index(){
        $data = Criteria::orderBy('criteria_code','Asc')->get();
        // return $data;
        return view('dashboard.admin.criteria.index', compact('data'));
    }
    public function destroy(Criteria $criteria){
        $criteria->delete();
        
        return redirect()->route('criteria')->withSuccess('Sukses Menghapus Data Kriteria!');
    }
    public function store(Request $request){
        request()->validate([
            'criteria_code'=>['required','unique:criterias,criteria_code'],
            'name'=>['required'],
            'type'=>['required','in:Benefit,Cost'],
            'weight'=>['required','digits_between:1,5']
        ]);
        $criteria = Criteria::create([
            'criteria_code'=>request('criteria_code'),
            'name'=>request('name'),
            'type'=>request('type'),
            'weight'=>request('weight')
        ]);
        return redirect()->route('criteria')->withSuccess('Kriteria Baru Berhasil Ditambhkan');
    }
    public function edit($id){
        $criteria = Criteria::findOrFail($id);
        return view('dashboard.admin.criteria.edit',compact('criteria'));

    }
    public function update($id,Request $request){
        $criteria = Criteria::findOrFail($id);
        $criteria->update([
                'criteria_code'=>request('criteria_code'),
                'name'=>request('name'),
                'type'=>request('type'),
                'weight'=>request('weight')
            ]);
            return redirect()->route('criteria')->withSuccess('Edit Kriteria Sukses');
    }
    public function show($id){
        $criteria = Criteria::findOrFail($id);
        // dd($criteria->sub_criteria);
        return view('dashboard.admin.criteria.show',compact('criteria'));

    }
    
}
