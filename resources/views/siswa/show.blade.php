@extends('siswa.layout')

@section('content')  

<div class="row m-4">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Read Siswa</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('siswa.index') }}"> Back</a>
        </div>
    </div>

    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $siswa->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIS:</strong>
                {{ $siswa->nis }}
            </div>
        </div>
	    <div class="col-xs-12 col-sm-12 col-md-12">
	        <div class="form-group">
		        <strong>Gender:</strong>
		        {{$siswa->gender}}
	        </div>
	    </div>
	    <div class="col-xs-12 col-sm-12 col-md-12">
	        <div class="form-group">
		        <strong>Kelas:</strong>
		        {{$siswa->kelas}}
	        </div>
	    </div>
	    <div class="col-xs-12 col-sm-12 col-md-12">
	        <div class="form-group">
		        <strong>Rombel:</strong>
		        {{$siswa->rombel}}
	        </div>
	    </div>
    </div>
</div>

@endsection
