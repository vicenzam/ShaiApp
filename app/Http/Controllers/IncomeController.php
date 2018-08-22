<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
use App\Tag;



class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('id', 'DESC')->get();
        $incomes = Income::orderBy('id', 'DESC')->get();
       
               
        return[
            'incomes' => $incomes,
            'tags'    => $tags,                   
        ];

        

        // return Income::join('income_tag', 'incomes.id', '=', 'income_tag.income_id')
        //     ->join('tags', 'tags.id', '=', 'income_tag.tag_id')
        //     ->select('incomes.id', 'incomes.name')
        //     ->orderBy('id')
        //     ->get();

        //return $tags;

        // return Income::table('incomes')
        // ->join('income_tag', 'incomes.id', '=', 'income_tag.income_id')
        // ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
