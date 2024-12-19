<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun CariTukang</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('<?php echo $url_register; ?>');
            /* background-image: url(assets/Register.png); */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
    
        }
        .main-container {
            display: flex;
            align-items: center;
            justify-content: start;
            height: 100vh;
            color: white;
        }
        .form-container {
            margin-top: 50px;
            border-radius: 10px;
            padding: 10px;
           
            max-width: 700px;
            width: 100%;
        }
        .form-header h1 {
            color: #FFf;
            text-align: left;
            font-size: 2.5rem;
            margin-bottom: 0;
        }
        .form-header h2 {
            color: #FF7300;
            text-align: left;
            font-size: 4rem;
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
            border:2px;
        }
        .btn-primary {
            background-color: #FF7300;
            border: none;
        }
        .btn-primary:hover {
            background-color: #e66700;
        }
        .login-link {
            color: #ffff;
            text-align: center;
            margin-top: 15px;
        }
        .login-link a {
            color: #ffff;
            font-weight: bold;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
        .image-container {
            margin-top: 60px;
            max-width: 700px;
            width: 100%;
        }
        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container main-container">
        <div class="form-container">
            <div class="form-header text-center">
                <h1>Buat Akun</h1>
                <h2>CariTukang</h2>
            </div>
            <form method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                </div>
                <div class="mb-3">
                    <label for="first-name" class="form-label">Nama Anda</label>
                    <input type="text" class="form-control" id="first-name" placeholder="Masukkan nama Anda">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No. Telepon</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Masukkan no telepon">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan password">
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Ulangi Password</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Ulangi password">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Daftar Akun</button>
                </div>
                <div class="login-link">
                    <p>Sudah Punya Akun? <a href="#">Masuk</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
