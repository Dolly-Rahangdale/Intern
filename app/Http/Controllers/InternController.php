<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intern;

class InternController extends Controller
{
    public function getform()
    {
        return view('form');
    }
    public function submitform(Request $request)
    {
        $intern = new Intern();
        $intern->full_name = $request->full_name;
        $intern->phone_no = $request->phone_no;
        $intern->save();
        return redirect('table');
    }
    public function gettable()
    {
        $data = Intern::paginate(5);
        return view('table',compact('data'));
    }
    public function edittable($id)
    {
        $data = Intern::find($id);
        return view('edit',compact('data'));
    }
    public function updateform(Request $request,$id)
    {
        $intern = Intern::find($id);
        $intern->full_name = $request->full_name;
        $intern->phone_no = $request->phone_no;
        $intern->update();
        return redirect('table');
    }
    public function deleteform(Request $request,$id)
    {
        $intern = Intern::find($id);
        $intern->full_name = $request->full_name;
        $intern->phone_no = $request->phone_no;
        $intern->delete();
        return redirect('table');
    }
}
