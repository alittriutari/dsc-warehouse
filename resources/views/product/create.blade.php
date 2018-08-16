@extends('layouts.app')
@section('content')
    
    <div class="row">
        <div class="col-md-6">
            <h5 class="u-mb-medium">Form Product</h5>
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
                    <form action="{{route('product.store')}}" class="form-control" method="POST">
                        @csrf
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Name</label>
                            <input class="c-input" id="" name="name" type="name" placeholder="Name">
                        </div>
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Category Id</label>
                            <select class="c-input", id="", name="category_id" placeholder="Category Id">
                                @foreach($datas as $data)
                                    <option value="{{$data['id']}}">
                                        {{$data['name']}}
                                    </option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Price</label>
                            <input class="c-input" id="" name="price" type="number" placeholder="Price">
                        </div>
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Description</label>
                            <input class="c-input" id="" name="description" type="name" placeholder="Description">
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