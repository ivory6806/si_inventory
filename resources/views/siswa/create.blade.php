@extends('siswa.layout')

@section('content')  
    
<div class="row m-4">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Siswa</h2>
        </div>
        <div class="pull-right ">
            <a class="btn btn-primary" href="{{ route('siswa.index') }}"> Back</a>
        </div>
    </div>
   
    @if ($errors->any())
    <div class="row m-4">
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <hr/>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
  
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIS</strong>
                    <input type="text" name="nis" class="form-control" placeholder="NIS">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender</strong>
                    <select class="form-control" name="gender" aria-label="Default select example" >
                        <option selected>Gender</option>
                        <option value="F">F</option>
                        <option value="M">M</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelas</strong>
                    <select class="form-control" name="kelas" aria-label="Default select example" >
                        <option selected>Kelas</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                        <option value="XIII">XIII</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rombel</strong>
                    <select class="form-control" name="rombel" aria-label="Default select example" >
                        <option selected>Rombel</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>
</div>
   
@endsection