<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .table-container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 20px;
            margin-top: 20px;
        }
        .table thead th {
            background: #dc3545;
            color: #fff;
            border: none;
            padding: 15px;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        .table tbody tr {
            transition: background 0.2s;
        }
        .table tbody tr:hover {
            background: #f1f1f1;
        }
        .table td {
            vertical-align: middle;
            font-size: 0.95rem;
            padding: 15px;
        }
        .btn-back {
            background: linear-gradient(45deg, #dc3545, #ff6b6b);
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: bold;
            color: #fff;
            transition: transform 0.2s;
        }
        .btn-back:hover {
            transform: scale(1.05);
            background: #c82333;
        }
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            letter-spacing: 1px;
        }
        @media (max-width: 768px) {
            .table-container {
                padding: 15px;
            }
            h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Daftar Reservasi</h1>
            <a href="/" class="btn btn-back">Kembali ke Formulir</a>
        </div>
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Tamu</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Catatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($reservations as $r)
                        <tr>
                            <td>{{ $r->name }}</td>
                            <td>{{ $r->email }}</td>
                            <td>{{ $r->phone }}</td>
                            <td>{{ $r->guest_total }}</td>
                            <td>{{ \Carbon\Carbon::parse($r->date)->translatedFormat('d F Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($r->time)->format('H:i') }}</td>
                            <td>{{ $r->note ?: '-' }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">Tidak ada reservasi ditemukan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>