@extends('layouts.app')
@section('content')
    
    <div class="row">
        <div class="col-md-6">
            <h5 class="u-mb-medium">Form Employee</h5>
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
                    <form action="{{route('employee.store')}}" class="form-control" method="POST">
                        @csrf
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">ID Pegawai</label>
                            <input class="c-input" id="" name="id_pegawai" type="name" placeholder="Name">
                        </div>

                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Nama</label>
                            <input class="c-input" id="" name="nama" type="text" placeholder="Nama">
                        </div>

                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Alamat</label>
                            <input class="c-input" id="" name="alamat" type="text" placeholder="Alamat">
                        </div>

                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Jenis Kelamin</label>
                            <input class="c-input" id="" name="jenis_kelamin" type="text" placeholder="Jenis Kelamin">
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