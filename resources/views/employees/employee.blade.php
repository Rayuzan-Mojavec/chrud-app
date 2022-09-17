@extends('core.core')

@section('refresh-button')
    <button type="button" class="btn btn-success" onClick="window.location.reload();">Refresh Page</button>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Employee (&yen;)</h1>
                <a href="/employee/create" class="m-0">Tambah data</a>
            </div>
            <!-- /.col -->
        </div>
        <div class="col-md-6">
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('main-header')
    <table id="example" class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Kota</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->nip }}</td>
                    <td class="ningenisasi">{{ $employee->nama }}</td>
                    <td class="ningenisasi">{{ $employee->tmplahir }}</td>
                    <td class="ningenisasi">{{ $employee->tgllahir }}<br>({{ $employee->age() }}歳)</td>
                    <td class="ningenisasi">{{ $employee->kota }}</td>
                    <td>
                        <a class="btn btn-warning mb-1" href="{{ route('employee.edit', $employee->nip) }}">Edit</a>

                        <form action="{{ route('employee.destroy', $employee->nip) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick="return confirm('Are you sure?')"
                                class="btn btn-danger">Delete</button>
                        </form>
                    </td>
            @endforeach

        </tbody>
    </table>



    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection

@section('title')
    Employee
@endsection
