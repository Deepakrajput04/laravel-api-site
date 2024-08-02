@extends('layouts.admin')

@section('content')


<div class="container">
    <center><h1 style="margin-top: 42px;">SLIDER</h1></center>
    <center><form method="post" action="{{route('updateslider',$slider->id)}}" enctype="multipart/form-data">
        @csrf
        <label for="image"></label><br>
        <input type="file" name="image" placeholder="images" style="border: ridge;">
        <div>
        <img src="{{url('/images/'.$slider->image)}}" style="width:100px;height:100px" alt="">
        </div>
        <br><br>
        <label for="title"></label><br>
        <input type="text" name="title" placeholder="title" value="{{$slider->title}}" style="width: 22%; border: ridge;"><br><br>
        <textarea name="description" placeholder="description"  id="" cols="30" rows="10">{{$slider->description}}</textarea><br><br>

        <button type="submit">submit</button>


     </form></center>
    </div>
    @endsection