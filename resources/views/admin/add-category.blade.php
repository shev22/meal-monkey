@extends('partials.admin-layout')
@section('content')



<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>
        <br>
        <form action="{{url('/store-category')}}"method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        
            
                <table class="tbl-30">
                    <tr>
                        <td>Title</td>
                        <td><input class="form" type="text" name="title" ></td>
                    </tr>
                  
                    <tr>
                        <td>Select Image</td>
                        <td><input  type="file" name="image_name"></td>
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

                        <td colspan="2">
                            <input type="submit" name="image_update" value="Add Category" class=btn-secondary>
                            
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
        </form>
@endsection


