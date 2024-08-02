@extends('layouts.admin')

@section('content')


<div class="container">
    <center><h1 style="margin-top: 42px;">Edit Course</h1></center>
    <center><form method="post" action="{{route('updateourcoures',$ourcoures->id)}}" enctype="multipart/form-data">
        @csrf
        <label for="image"></label><br>
        <input type="file" name="image" placeholder="images" style="border: ridge;">
        <div>
        <img src="{{url('/images/'.$ourcoures->image)}}" style="width:100px;height:100px" alt="">
        </div>
        <br><br>
        <label for="price"></label><br>
        <input type="text" name="price" placeholder="price" value="{{$ourcoures->price}}" style="width: 22%; border: ridge;"><br><br>
        <textarea name="description" placeholder="description"  id="" cols="30" rows="10">{{$ourcoures->description}}</textarea><br><br>

        <button type="submit">submit</button>


     </form></center>
    </div>
    @endsection