@extends('layouts.admin')

@section('content')
   
<div class="container">
    <center><h1 style="margin-top: 42px;">Course</h1></center>
    <center><form method="post" action="{{route('addourcoures')}}" enctype="multipart/form-data">
        @csrf
        <label for="image"></label><br>
        <input type="file" name="image" placeholder="images" style="border: ridge;"><br><br>
        <label for="price"></label><br>
        <input type="text" name="price" placeholder="price" style="width: 22%; border: ridge;"><br><br>
        <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea><br><br>

        <button type="submit">submit</button>


     </form></center>
    

    <div class="container">
 <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=1;
        @endphp
        @foreach($ourcoures as $top)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$top->price}}</td>
            <td>{{$top->description}}</td>
            <td><img src="{{url('/images/'.$top->image)}}" style="width:100px;height:100px; border-radius:10px;" alt=""></td>
            <td><a class="btn btn-success" href="{{route('editourcoures',$top->id)}}">edit</a>
            <a class="btn btn-danger" href="{{route('deleteourcoures',$top->id)}}">delete</a></td>            
        </tr>
        @endforeach
    </tbody>
 </table>

</div>

@endsection