@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add vegetable
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif


            <form method="post" action="{{route('vegetables.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="vegetable">Vegetable:</label>
                    <input type="text" class="form-control" name="vegetable"/>
                </div>
                <div class="form-group">
                    <label for="new_price">Price:</label>
                    <input type="text" class="form-control" name="new_price"/>
                </div>

                <select name="category_id" class="form-control">
                    <option>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{$category -> category_id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>


                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" name="image"/>
                </div>
                <img src="" id="preview-img" alt="" style="width:10rem">

                <button type="submit" class="btn btn-primary">Add Vegetable</button>
            </form>
        </div>
    </div>
@endsection

