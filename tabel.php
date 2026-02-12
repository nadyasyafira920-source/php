<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background gradasi lembut */
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #9face6, #e1bee7);
            font-family: 'Segoe UI', sans-serif;
        }
        .card-custom {
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        .table thead {
            background: #6c63ff;
            color: white;
        }
        h1 {
            font-weight: 600;
        }
        /* Garis tabel full grid */
.table-bordered {
    border: 2px solid #444 !important;
}
.table-bordered th,
.table-bordered td {
    border: 1.5px solid #444 !important;
}
/* Header lebih tegas */
.table thead th {
    border-bottom: 2px solid #626262 !important;
}
        </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card card-custom p-4 bg-white">
        <h1 class="text-center mb-4">📋 Data Tabel</h1>
        <div class="table-responsive">
            <!-- Struktur tetap: No | Nama | Email | Kota -->
            <table class="table table-hover table-bordered align-middle text-center border-dark">
            <thead class="table-info">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kota</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Xavier Alexander</td>
                    <td>xavier@email.com</td>
                    <td>Malang</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Anne Nyla</td>
                    <td>anne@email.com</td>
                    <td>Papua</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>William James</td>
                    <td>william@email.com</td>
                    <td>Madura</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Nadya Syafira</td>
                    <td>nadya@email.com</td>
                    <td>Jember</td>
                </tr>
                <tr>
                        <td>5</td>
                        <td>Raka Pratama</td>
                        <td>raka.pratama@email.com</td>
                        <td>Jakarta</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Sarah Wijaya</td>
                        <td>sarah.w@email.com</td>
                        <td>Bandung</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Dimas Saputra</td>
                        <td>dimas.saputra@email.com</td>
                        <td>Surabaya</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Clara Andini</td>
                        <td>clara.andini@email.com</td>
                        <td>Yogyakarta</td>
                    </tr>
            </tbody>
        </table>         
        <a href="form.php" class="btn btn-primary mt-3">🚀Input Form</a>
        <a href="index.php" class="btn btn-primary mt-3">Kembali ke Halaman Belajar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
