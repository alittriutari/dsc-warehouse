@extends('layouts.app')
@section('content')
    
    <div class="row">
        <div class="col-md-6">
            <h5 class="u-mb-medium">Edit {{$category->name}}</h5>
                <div class="c-card u-p-medium u-mb-medium">
                    @if ($errors->any())
                        <div class="c-alert c-alert--danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('product.update',['id' => $category->id])}}" class="form-control" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Name</label>
                            <input class="c-input" id="" name="name" type="name" placeholder="Name" value="{{$category->name}}">
                        </div>
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Category Id</label>
                            <input class="c-input" id="" name="category_id" type="name" placeholder="Name" value="{{$category->category_id}}">
                        </div>
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Price</label>
                            <input class="c-input" id="" name="name" type="text" placeholder="Name" value="{{$category->price}}">
                        </div>
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Description</label>
                            <input class="c-input" id="" name="description" type="text" placeholder="Name" value="{{$category->description}}">
                        </div>
                        
                        <div class="c-field u-mb-small">
                            <button class="c-btn c-btn--success" type="submit">Save</button>
                            <a href="{{route('product-category.index')}}" class="c-btn c-btn--warning">Cancel</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection