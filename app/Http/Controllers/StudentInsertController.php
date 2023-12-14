<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class StudentInsertController extends Controller
{
    public function student_list(){
        $students = DB::select("select*from users");
        return view('auth.list',['students'=>$students]);
    }
    public function ShowUser()
    {
        $students = User::paginate(3);
        return view('auth.list',compact('students'));
    }
    public function delete($id){
        DB::delete("delete from users where id = ?", [$id]);
        return "Record delete successfully! <a href = '/list'> Back </a>";
    }
    public function index(Request $request)
    {
        $students = User::query();

    // Handle sorting
        $sortBy = $request->input('sort_by');
        $sortOrder = $request->input('sort_order', 'asc');

        if ($sortBy && in_array($sortBy, ['id', 'name', 'gender', 'email', 'contact', 'dob', 'address', 'pincode', 'state'])) {
        $students->orderBy($sortBy, $sortOrder);
        }

    // Fetch paginated data
        $students = $students->paginate(10);

        return view('auth.list', compact('students'));
}

}
