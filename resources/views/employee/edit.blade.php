@extends('layouts.app')
@section('content')
    
    <div class="row">
        <div class="col-md-6">
            <h5 class="u-mb-medium">Edit {{$employee->name}}</h5>
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
                    <form action="{{route('employee.update',['id' => $employee->id])}}" class="form-control" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">ID Pegawai</label>
                            <input class="c-input" id="" name="id_pegawai" type="text" placeholder="ID" value="{{$employee->id_pegawai}}">
                        </div>
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Name</label>
                            <input class="c-input" id="" name="nama" type="text" placeholder="Nama" value="{{$employee->nama}}">
                        </div>
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Alamat</label>
                            <input class="c-input" id="" name="alamat" type="text" placeholder="Alamat" value="{{$employee->alamat}}">
                        </div>
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Jenis Kelamin</label>
                            <input class="c-input" id="" name="jenis_kelamin" type="text" placeholder="Jenis Kelamin" value="{{$employee->jenis_kelamin}}">
                        </div>
                        
                        <div class="c-field u-mb-small">
                            <button class="c-btn c-btn--success" type="submit">Save</button>
                            <a href="{{route('employee.index')}}" class="c-btn c-btn--warning">Cancel</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection