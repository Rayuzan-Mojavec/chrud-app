<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>

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
        <h1>CREATE</h1>
    </div>
    <div class="d-flex align-items-center justify-content-center">
        <div class="col-lg-5 px-5 pb-2 pt-5 mt-2  border border-dark rounded-3">
            <form method="post" action="/student" enctype="multipart/form-data">
                @csrf
                <div class="mb-1">
                    <label for="nis" class="form-label">NIS</label>
                    <input type="text" maxlength="16" class="form-control @error('nis') is-invalid @enderror"
                        id="nis" name="nis" value="{{ old('nis') }}">
                    @error('nis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" maxlength="100" class="form-control @error('nama') is-invalid @enderror"
                        id="nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label for="tmplahir" class="form-label">Tempat Lahir</label>
                    <input type="text" maxlength="100" class="form-control @error('tmplahir') is-invalid @enderror"
                        id="tmplahir" name="tmplahir" value="{{ old('tmplahir') }}">
                    @error('tmplahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label for="tgllahir" class="form-label">Tanggal Lahir (YYYY-MM-DD)</label>
                    <input type="text" class="form-control @error('tgllahir') is-invalid @enderror" id="tgllahir"
                        name="tgllahir" value="{{ old('tgllahir') }}">
                    @error('tgllahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="kota" class="form-label">Kota</label>
                    <input type="text" maxlength="100" class="form-control @error('kota') is-invalid @enderror"
                        id="kota" name="kota" value="{{ old('kota') }}">
                    @error('kota')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary me-2 float-left">Submit</button>
                <a class="btn btn-danger" href="/student">Cancel</a>
            </form>
        </div>
    </div>
</body>

</html>
