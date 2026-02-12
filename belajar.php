<!DOCTYPE html>
<html lang="en">
    <!-- Latest Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- jQuery Library -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest Compiled JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        /* Background gradasi */
body {
            height: 100vh;
            background: linear-gradient(135deg, #e1bee7, #9face6);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }
        /* Card styling */
        .card {
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            animation: fadeIn 0.8s ease;
        }
        /* Header warna */
        .card-header {
            background: #4e73df;
            color: white;
            border-radius: 20px 20px 0 0 !important;
        }
        /* Tombol efek hover */
        .btn-custom {
            background: #4e73df;
            color: white;
            border-radius: 30px;
            padding: 10px 25px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #2e59d9;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card text-center">
                <div class="card-header">
                    <h3>🏠 WELCOME</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        This is a simple Bootstrap card component.
                    </p>
                    <a href="tabel.php" class="btn btn-custom">
                        🚀 Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
