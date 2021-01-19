<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Validator;

class StudentApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return response()->json($student,200);
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
        $validateData = Validator::make($request->all(),[
            'nim' => 'required|size:8,unique:students',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:P,L',
            'departement' => 'required',
            'address' => '',
        ]);

        if($validateData->fails()){
            return response($validateData->errors(),400);
        }else{

            $student = new Student();
            $student->nim = $request->nim;
            $student->name = $request->name;
            $student->gender = $request->gender;
            $student->departement = $request->departement;
            $student->address = $request->address;
            $student->save();
            return response()->json([
                'message'=>'student record created'
            ],201);
        }
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        if(Student::where('id',$id)->exists()){
            $validateData = Validator::make($request->all(),[
            'nim' => 'required|size:8,unique:students',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:P,L',
            'departement' => 'required',
            'address' => '',
            ]);
            
            if($validateData->fails()){
                return response($validateData->errors(),400);
            }else{
                $student = Student::find($id);
                $student->nim = $request->nim;
                $student->name = $request->name;
                $student->gender = $request->gender;
                $student->departement = $request->departement;
                $student->address = $request->address;
                $student->save();
                return response()->json([
                    'message'=>'student record updated'
                ],201);
            }
        }else{
            return response()->json([
                'message' => 'Student not found'
            ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Student::where('id',$id)->exists()){

            $mahasiswa = Student::find($id);
            $mahasiswa->delete();
            return response()->json([
                'message' => 'Student deleted'
            ],404);
            
        }else{
            return response()->json([
                'message' => 'Student not found'
            ],404);
        }
    }
}
