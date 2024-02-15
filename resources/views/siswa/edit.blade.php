@extends('siswa.layout')

@section('content')

<div class="row m-4">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Siswa</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('siswa.index') }}"> Back</a>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('siswa.update',$siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIS</strong>
                    <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" placeholder="NIS">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender</strong>
                    <select name="gender" class="form-control">
                        <option value="M" {{ $siswa->gender === 'M' ? 'selected' : '' }}>M</option>
                        <option value="F" {{ $siswa->gender === 'F' ? 'selected' : '' }}>F</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelas</strong>
                    <select name="kelas" class="form-control">
                        <option value="X" {{ $siswa->kelas === 'X' ? 'selected' : '' }}>X</option>
                        <option value="XI" {{ $siswa->kelas === 'XI' ? 'selected' : '' }}>XI</option>
                        <option value="XII" {{ $siswa->kelas === 'XII' ? 'selected' : '' }}>XII</option>
                        <option value="XIII" {{ $siswa->kelas === 'XIII' ? 'selected' : '' }}>XIII</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rombel</strong>
                    <select name="rombel" class="form-control">
                        <option value="A" {{ $siswa->rombel === 'A' ? 'selected' : '' }}>A</option>
                        <option value="B" {{ $siswa->rombel === 'B' ? 'selected' : '' }}>B</option>
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