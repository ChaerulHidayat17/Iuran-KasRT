<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Data Warga</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Filter Data Warga</h2>
    <form action="../scripts/php/warga_sudah_bayar.php" method="post">
        <div class="mb-3">
            <label for="bulan" class="form-label">Bulan</label>
            <input type="text" class="form-control" id="bulan" name="bulan" required>
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="tahun" required>
        </div>

        <div class="mb-3">
            <label for="jenis_iuran" class="form-label">Jenis Iuran</label>
            <select class="form-select" id="jenis_iuran" name="jenis_iuran" required>
                <option value="1">Kas</option>
                <option value="2">Sampah</option>
                <option value="3">Sumbangan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Filter Data</button>
    </form>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>

</html>
