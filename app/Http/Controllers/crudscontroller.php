<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentAddress;
use App\Models\Orders;
use Illuminate\Support\Facades\Session;



class crudscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {
        $students=Student::orderBy('id','asc')->paginate(2);
        session()->put('first_name','sree');
        session()->put('userid',10);
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('student.create'); 
      return session()->get('first_name');
    
      // session()->increment('userid'); 
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
        'first_name'=>'required',
        'last_name'=>'required',
        'gender'=>'required',
        'qualifications'=>'required',
      ]);
      Student::create($request->post());
    //   return render('student.store');

      return redirect()->route('student.index')->with('success','student added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Request $request,student $student)
    {
      // $address=StudentAddress::find(1);
      // return view('student.view',compact('address'));
      return view('student.view',compact('student'));
      $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'qualifications'=>'required'
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
       

        return redirect()->route('student.index');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
      $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'qualifications'=>'required'
    ]);

    $student->fill($request->post())->save();

    return redirect()->route('student.index')->with('success','student Has Been updated successfully');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('student.index')->with('success', 'Student has been deleted successfully');
    }
  }
