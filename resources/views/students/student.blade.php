@extends('core.core')

@section('refresh-button')
    <button type="button" class="btn btn-success" onClick="window.location.reload();">Refresh Page</button>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Student (&euro;)</h1>
                <a href="/student/create" class="m-0">Tambah data</a>
            </div>
            <!-- /.col -->
        </div>
        <div class="col-md-6">
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('main-header')
    <table id="siswa" class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Kota</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->tmplahir }}</td>
                    <td>{{ $student->tgllahir }}<br>({{ $student->age() }} tahun)</td>
                    <td>{{ $student->kota }}</td>
                    <td>
                        <a class="btn btn-warning mb-1" href="{{ route('student.edit', $student->nis) }}">Edit</a>

                        <form action="{{ route('student.destroy', $student->nis) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"  onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
            @endforeach

        </tbody>
    </table>



    <script>
        $(document).ready(function() {
            $('#siswa').DataTable({
                responsive: true
            });
        });
    </script>
@endsection

@section('title')
Student
@endsection