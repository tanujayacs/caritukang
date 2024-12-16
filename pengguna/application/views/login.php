<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0044cc; /* Warna latar biru */
            background-image: url(assets/Login.png); /* Tambahkan pola jika ada */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .login-container {
            
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
        }

        .login-container img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        .form-control {
            border: 1px solid white;
            background-color: transparent;
            color: white;
            border-radius: 5px;
        }

        .form-control::placeholder {
            color: white;
            opacity: 0.8;
        }

        .btn-primary {
            background-color: white;
            color: #0044cc;
            font-weight: bold;
            border: none;
            padding: 10px;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: #f1f1f1;
        }

        .forgot-password,
        .register {
            color: white;
            font-size: 14px;
            text-decoration: none;
        }

        .register {
            font-weight: bold;
        }

        .forgot-password:hover,
        .register:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Ikon pengguna -->
        <img src="assets/profil.png" alt="User Icon">
        <!-- Form login -->
        <form>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="USERNAME" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="PASSWORD" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">LOGIN</button>
        </form>
        <!-- Tautan tambahan -->
        <div class="mt-3">
            <a href="#" class="forgot-password">Forgot password?</a>
        </div>
        <div class="mt-2">
            <span class="text-white">Belum Punya Akun? <a href="#" class="register">Register</a></span>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
