@extends('siswa.layout')

@section('content')    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="m-4">Daftar Siswa</h2>
            </div>
            <div class="pull-right">
                <a class="m-4 btn btn-success" href="{{ route('siswa.create') }}"> Tambahkan Siswa Baru</a>
            </div>
        </div>
    </div>
 
        <div class="container">
            
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Gender</th>
                    <th>Kelas</th>
                    <th>Rombel</th>
                    <th>Action</th>
                </tr>
            
                @foreach ($siswa as $rowsiswa)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $rowsiswa->nis }}</td>
                        <td>{{ $rowsiswa->nama }}</td>
                        <td>{{ $rowsiswa->gender }}</td>
                        <td>{{ $rowsiswa->kelas }}</td>
                        <td>{{ $rowsiswa->rombel }}</td>
                        <td>
                            <form action="{{ route('siswa.destroy',$rowsiswa->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('siswa.show',$rowsiswa->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('siswa.edit',$rowsiswa->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            {!! $siswa->links('pagination::bootstrap-5') !!}
        </div>
        
@endsection


