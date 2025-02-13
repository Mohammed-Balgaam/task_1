<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
// use App\Http\Controllers\Auth;
use App\Models\Course;
use Illuminate\Support\Facades\DB;



class CourseController extends Controller
{
    public function store_courses(Request $request)
    {
        // $user_id = Auth::id();
        // dd($request,$user_id);
        $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'field' => 'required|string|max:255',
        ]);
    
        $user_id = Auth::id();
    
        Course::create([
            'name' => $request->name,
            'duration' => $request->duration,
            'field' => $request->field,
            'user_id' => $user_id,
        ]);
    
        return redirect()->back()->with('success', 'تم إضافة الكورس بنجاح!');
    }
}
