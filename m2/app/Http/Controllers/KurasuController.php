<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorekurasuRequest;
use App\Http\Requests\UpdatekurasuRequest;
use Illuminate\Http\Request;
use App\Models\kurasu;

class KurasuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return kurasu::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekurasuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekurasuRequest $request)
    {
        return kurasu::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kurasu  $kurasu
     * @return \Illuminate\Http\Response
     */
    // public function show(kurasu $kurasu)
    // {
    //     return $kurasu;
    // }
    public function show($id)
    {
        return kurasu::find($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekurasuRequest  $request
     * @param  \App\Models\kurasu  $kurasu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekurasuRequest $request, $id)
    {
        return kurasu::find($id)->update($request->all());
        // return $kurasu::update($request->all());
        // $result = kurasu::find($id);
        // $result->gradeNumber = $request->gradeNumber;
        // $result->classNumber = $request->classNumber;
        // $result->program = $request->program;
        // $result->name = $request->name;
        // $result->food_flag = $request->food_flag;
        // $result->note = $request->note;
        // $result->save();
        // return $result;
    }

    public function search(Request $request) {
        if(isset($request->food_flag)){
            return kurasu::when($request->gradeNumber, function ($q, $r) {
                return $q->where("gradeNumber", $r);
            })->when($request->classNumber, function ($q, $r){
                return $q->where("classNumber", $r);
            })->when($request->program, function ($q, $r){
                return $q->where("program", "like", "%$r%");
            })->when($request->food_flag, function ($q, $r){
                return $q->where("food_flag", $r);
            }, function ($q, $r) {
                return $q->where("food_flag", $r);
            })->get();
        }else{
            return kurasu::when($request->gradeNumber, function ($q, $r) {
                return $q->where("gradeNumber", $r);
            })->when($request->classNumber, function ($q, $r){
                return $q->where("classNumber", $r);
            })->when($request->program, function ($q, $r){
                return $q->where("program", "like", "%$r%");
            })->get();
        }
    }
    public function searchBihin(Request $request, $id) {
        return kurasu::find($id)->get_bihin;
    }
}
