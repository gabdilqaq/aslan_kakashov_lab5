<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "OK";
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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


    //STUDENT'S NAME
    public function get_students(){
        static $students = array(0=>'Aslan',1=>'Abzal',2=>'Ansar');
        return $students;
    }

    public function show($id)
    {
        $students = $this->get_students();
        return view("name_students",["name"=>$students[$id]]);
    }


    //DATE OF BITRH
    public function get_dates(){
        static $dates = array(0=>'2001-07-18',1=>'2001-01-20',2=>'2001-07-15');
        return $dates;
    }
    public function show_date($id)
    {
        $dates = $this->get_dates();
        return view("date_of_birth")->with("date",$dates[$id]);
    }



    //AGE
    public function show_age($age)
    {
        return view('ages_students', compact('age') );
    }





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
