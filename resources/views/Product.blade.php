<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Yaratish</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header text-center bg-success text-white">
                        <h4>Product Yaratish</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nomi</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                    name="name" id="name" placeholder=" nomini kiriting" 
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Narxi</label>
                                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" 
                                    name="price" id="price" placeholder=" narxini kiriting" 
                                    value="{{ old('price') }}">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Sana</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror" 
                                    name="date" id="date" value="{{ old('date') }}">
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success w-100">Saqlash</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
