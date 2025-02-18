<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;



class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $user_id = Auth::id();
            // dd($request->image,$user_id);
        $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'field' => 'required|string|max:255',
            'price' => 'required | integer',
            'desc' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:10000',

        ]);

        $data = 
        [
            'name' => $request->name,
            'duration' => $request->duration,
            'field' => $request->field,
            'price' => $request->price,
            'desc' => $request->desc,
            'user_id' => $user_id,
        ];
    
        $user_id = Auth::id();
    
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_url = Storage::disk('public')->putFileAs('coursesImages/' , $image ,  time() .'.'. $image->extension());
            // dd($image_url);
            $data['image_url'] = $image_url;

            Course::create($data);


        }else
        {
            $data['image_url'] = 'coursesImages/default.jpg';
            Course::create($data);
        }


        
    
        return redirect()->route('home.index')->with('success', 'تم إضافة الكورس بنجاح!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request, $id);
         $course = Course::findOrFail($id); 

        //  dd($course);


        $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'field' => 'required|string|max:255',
            'price' => 'required | integer',
            'desc' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:10000',
        ]);

        $data = 
        [
            'name' => $request->name,
            'duration' => $request->duration,
            'field' => $request->field,
            'price' => $request->price,
            'desc' => $request->desc,
        ];

        if($request->hasFile('image'))
        {
            if ($course->image_url && $course->image_url != 'coursesImages/default.jpg') 
            {
                Storage::disk('public')->delete($course->image_url);
            }
            $image = $request->file('image');
            $image_url = Storage::disk('public')->putFileAs('coursesImages' , $image ,  time().'.'. $image->extension());
            $data['image_url'] = $image_url;
        }

        $course->update($data);

        return redirect()->route('home.index')->with('success', '  تم تحديث الكورس بنجااح  !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $course = Course::find($id);
        // dd($course);
        if ($course->image_url && $course->image_url!= 'coursesImages/default.jpg') 
        {
            Storage::disk('public')->delete($course->image_url);
        }
        $course->delete();
        return redirect()->route('home.index')->with('success', ' تم حذف الكورس بنجااح!');

    }

    public function addCourse()
    {
        
        return view('courses.addCourse');
    }

    public function updateCourse($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.updateCourse' , compact('course'));
    }
}
