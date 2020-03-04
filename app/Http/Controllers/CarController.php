<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use DB;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $assets=Asset::all();
      //  return view('home');
        //->with(['assets'=>$assets]);
        $cars=Car::all(); 
        return view('home',['cars'=>$cars]);
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
        $this->validate($request,[
            'make'=>'required',
            'model'=>'required',
            'produced_on'=>'required'
        ]);


        $car=new Car();
      
        $car->make=$request->input('make');
        $car->model=$request->input('model');
        $car->produced_on=$request->input('produced_on');

        $car->save();//saving data to database
       // return redirect()->back();//going back to index.blade.php         

  return redirect('/home')->with('sucess','data saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
            $cars=Car::all(); 
        return view('home',['cars'=>$cars]);
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
        $cars=DB::select('select * from cars where id=?',[$id]);
        return view('test',['cars'=>$cars]);
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
    

        $make=$request->input('make');
        $model=$request->input('model');
        $produced_on=$request->input('produced_on');
      

        DB::update('update cars set make=?,model=?,produced_on=? where id=?',[$make,$model,$produced_on,$id]);
        return redirect('/home')->with('success','Data Updated');
      
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

    public function delete($id)
    {
        //
        DB::table('cars')->where('id',$id)->delete();
        return redirect('/home')->with('sucess','asset removed more database');
    }
}
