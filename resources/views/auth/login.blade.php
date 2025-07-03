<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Savana</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f1ea;
      font-family: 'Georgia', serif;
    }

    .login-box {
      max-width: 450px;
      margin: 80px auto;
      padding: 40px;
      background: #fffdf7;
      border: 2px solid #d6bfa5;
      border-radius: 20px;
      box-shadow: 0 12px 35px rgba(0,0,0,0.1);
    }

    .login-box h2 {
      font-size: 28px;
      font-weight: bold;
      color: #5a3415;
      margin-bottom: 25px;
      text-align: center;
    }

    .form-label {
      font-weight: 600;
      color: #5a3415;
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

    .register-link {
      margin-top: 20px;
      text-align: center;
      font-size: 14px;
    }

    .register-link a {
      color: #8B4513;
      text-decoration: underline;
      font-weight: 500;
    }

    .alert {
      border-radius: 10px;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <h2>Masuk ke Savana</h2>

    @if ($errors->any())
      <div class="alert alert-danger">{{ $errors->first('login') }}</div>
    @endif

    <form action="{{ url('/login') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-brown w-100">Login</button>
    </form>

    <div class="register-link">
      <p>Belum punya akun? <a href="{{ route('register') }}">Buat akun</a></p>
    </div>
  </div>

</body>
</html>
