<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - Savana</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f1ea;
      font-family: 'Georgia', serif;
    }

    .register-box {
      max-width: 520px;
      margin: 80px auto;
      padding: 40px;
      background: #fffdf7;
      border: 2px solid #d6bfa5;
      border-radius: 20px;
      box-shadow: 0 12px 35px rgba(0,0,0,0.1);
    }

    .register-box h2 {
      font-size: 26px;
      color: #5a3415;
      text-align: center;
      margin-bottom: 25px;
      font-weight: bold;
    }

    .form-label {
      color: #5a3415;
      font-weight: 600;
    }

    .form-control {
      border-radius: 10px;
      border-color: #d8c0a0;
    }

    .btn-brown {
      background-color: #8B4513;
      color: white;
      font-weight: 600;
      border-radius: 10px;
    }

    .btn-brown:hover {
      background-color: #6c3210;
    }

    .alert {
      border-radius: 10px;
      font-size: 14px;
    }

    .text-center a {
      color: #8B4513;
      text-decoration: underline;
      font-weight: 500;
    }
  </style>
</head>
<body>

  <div class="register-box">
    <h2>Buat Akun Savana</h2>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ url('/register') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nama Lengkap</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-brown w-100">Daftar</button>
    </form>

    <div class="text-center mt-3">
      Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
    </div>
  </div>

</body>
</html>
