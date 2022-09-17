<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>

    <style>
        @font-face {
            font-family: "MyWebFont";
            src: url("/font/ProductSans-Regular.ttf");
        }

        body {
            font-family: "MyWebFont";
        }
    </style>

</head>

<body>
    <div class="text-center">
        <h1>EDIT</h1>
    </div>
    <div class="d-flex align-items-center justify-content-center ">
        <div class="col-lg-5 px-5 pb-2 pt-5 mt-2  border border-dark rounded-3">
            <form method="post" action="/employee/{{ $employee->nip }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-1">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" maxlength="18" class="form-control @error('nip') is-invalid @enderror"
                        id="nip" name="nip" value="{{ $employee->nip }}">
                    @error('nip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" maxlength="100"
                        class="form-control input-lg @error('nama') is-invalid @enderror" id="nama" name="nama"
                        value="{{ $employee->nama }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label for="tmplahir" class="form-label">Tempat Lahir</label>
                    <input type="text" maxlength="50"
                        class="form-control input-lg @error('tmplahir') is-invalid @enderror" id="tmplahir"
                        name="tmplahir" value="{{ $employee->tmplahir }}">
                    @error('tmplahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label for="tgllahir" class="form-label">Tanggal Lahir (YYYY-MM-DD)</label>
                    <input type="text" class="form-control input-lg @error('tgllahir') is-invalid @enderror"
                        id="tgllahir" name="tgllahir" value="{{ $employee->tgllahir }}">
                    @error('tgllahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="kota" class="form-label">Kota</label>
                    <input type="text" maxlength="255"
                        class="form-control input-lg @error('kota') is-invalid @enderror" id="kota" name="kota"
                        value="{{ $employee->kota }}">
                    @error('kota')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <button type="submit" class="btn btn-primary me-2 float-left">Submit</button>
                <a class="btn btn-danger" href="/employee">Cancel</a>
            </form>
        </div>
    </div>
</body>

</html>
