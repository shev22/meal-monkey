@extends('partials.admin-layout')
@section('content')

 <div class="main-content">
    <div class="wrapper">
        <h1>Add Food</h1>
        <br>
        <form action="{{url('/store-food')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="box">
                <table class="tbl-30">
                    <tr>
                        <td>Title</td>
                        <td><input type="text" name="title" ></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><textarea  cols="30" rows = "5" name="description" ></textarea></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="number" name="price"></td>
                    </tr>
                    <tr>
                       
                        <td>Select Image</td>
                        <td><input  type="file" name="image_name"></td>
                    </tr>
                    <tr>

                        <select name="category" id="">
                        <option >Categories</option>
                            @foreach($food as $fd)
                        <option value="{{$fd->id}}"> {{$fd->title}}</option>

                        @endforeach
                        </select>
                    </tr>
                    <tr>
                        <td>Featured</td>
                        <td><input  type="radio" name="featured" value="Yes">Yes
                        <input type="radio" name="featured" value="No">No</td>
                    </tr>
                    <tr>
                        <tr>
                            <td>Active</td>
                            <td><input  type="radio" name="active" value="Yes">Yes
                            <input type="radio" name="active" value="No">No</td>
                        </tr>

                          <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Food" class=btn-secondary1>
                        </td>
                    </tr>

                </table>
            </div>
        </form>
    </div>
</div>




@endsection
