@extends('layouts.app')
@section('content')
    
    <div class="row">
        <div class="col-md-6">
            <h5 class="u-mb-medium">Edit {{$cabang->name}}</h5>
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
                    <form action="{{route('cabang.update',['id' => $cabang->id])}}" class="form-control" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Nama Cabang</label>
                            <input class="c-input" id="" name="nama_cabang" type="text" placeholder="Nama Cabang" value="{{$cabang->nama_cabang}}">
                        </div>
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Alamat</label>
                            <input class="c-input" id="" name="alamat" type="text" placeholder="Alamat" value="{{$cabang->alamat}}">
                        </div>
                        
                        <div class="c-field u-mb-small">
                            <!--<button class="c-btn c-btn--success" type="submit">Save</button>-->
                            <button class="c-btn c-btn--success" type="submit">Save</button>
                            <a href="{{route('cabang.index')}}" class="c-btn c-btn--warning">Cancel</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection