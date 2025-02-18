@extends('layouts.main')

@section('content')

<style>
        body {
            background-color: #f8f9fa;
            font-family: 'Tajawal', sans-serif;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background: #fff;
        }
        .btn-custom {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            border: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            opacity: 0.8;
        }
    </style>


<form action="/courses" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="course_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="course_name" name="name" placeholder="Enter Name " required>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="course_duration" class="form-label">Duration</label>
                        <input type="number" class="form-control" id="course_duration" name="duration" placeholder="Enter duration" required>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="course_field" class="form-label">Field</label>
                        <input type="text" class="form-control" id="course_field" name="field" placeholder="Enter field" required>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="course_price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="course_price" name="price" placeholder="Enter Price" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="course_desc" class="form-label">Description</label>
                    <textarea class="form-control" id="course_desc" name="desc" rows="3" placeholder="Enter Description" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="course_image" class="form-label">Input Image</label>
                    <input type="file" class="form-control" id="course_image" name="image" accept="image/*">
                </div>

                <!-- زر الإرسال -->
                <button type="submit" class="btn btn-custom w-100 text-white">Save </button>
            </form>

@endsection