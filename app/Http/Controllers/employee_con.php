<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee_model;
class employee_con extends Controller
{
    public function index()
    {
        return view('employee.index');
    }
    public function show()
    {
        $employee = employee_model::get();
        return view('employee.show' , compact('employee'));
    }
    public function edit(int $id){
        $employee_edit = employee_model::find($id);
        // return $employee_edit;
        return view('employee.edit' , compact('employee_edit'));
    }
    public function update(Request $request,int $id){
        employee_model::find($id)->update([
            'fname'=>$request->fname,
            'mname'=>$request->mname,
            'lname'=>$request->lname,
            'address'=>$request->address,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'zip'=>$request->zip, 
            'age'=>$request->age,
            'bdate'=>$request->bdate,
            'dhired'=>$request->dhired,
            'dept'=>$request->dept,
            'div'=>$request->div
           ]);
            return redirect()->back();

    }
    public function store(Request $request){

        employee_model::create([
            'fname'=>$request->fname,
            'mname'=>$request->mname,
            'lname'=>$request->lname,
            'address'=>$request->address,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'zip'=>$request->zip, 
            'age'=>$request->age,
            'bdate'=>$request->bdate,
            'dhired'=>$request->dhired,
            'dept'=>$request->dept,
            'div'=>$request->div
           ]);
            return redirect('employee');

    }
}
