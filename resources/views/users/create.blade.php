<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foydalanuvchi Qo‘shish</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Foydalanuvchi Qo‘shish</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Ism</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                    name="name" id="name" placeholder="Ismingizni kiriting" 
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                    name="email" id="email" placeholder="Emailingizni kiriting" 
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="age" class="form-label">Yosh</label>
                                <input type="number" class="form-control @error('age') is-invalid @enderror" 
                                    name="age" id="age" placeholder="Yoshingizni kiriting" 
                                    value="{{ old('age') }}">
                                @error('age')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Parol</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                    name="password" id="password" placeholder="Parolni kiriting">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Parolni tasdiqlang</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" 
                                    name="password_confirmation" id="password_confirmation" placeholder="Parolni qayta kiriting">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="file" class="form-label">Fayl yuklash</label>
                                <input type="file" class="form-control @error('file') is-invalid @enderror" 
                                    name="file" id="file">
                                @error('file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="url" class="form-label">URL</label>
                                <input type="text" class="form-control @error('url') is-invalid @enderror" 
                                    name="url" id="url" placeholder="URL kiriting" 
                                    value="{{ old('url') }}">
                                @error('url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">Saqlash</button>
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
