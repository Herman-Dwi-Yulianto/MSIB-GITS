<!DOCTYPE html>
<html>
<head>
    <title>Informasi Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .card {
            background-color: #ffffff;
            animation: fadeInUp 1s both;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Informasi Mahasiswa</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama: Herman Dwi Yulianto</h5>
                <p class="card-text"><strong>Asal Kampus:</strong> Universitas AMIKOM Yogyakarta</p>
                <p class="card-text"><strong>Alamat:</strong> Wonogiri, Jawa Tengah</p>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
