<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Lomba IT 2026</title>
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-hover: #4338ca;
            --bg-color: #f3f4f6;
            --card-bg: #ffffff;
            --text-color: #1f2937;
            --border-color: #d1d5db;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: var(--card-bg);
            width: 100%;
            max-width: 600px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
            color: var(--primary-color);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 5px;
        }

        .radio-label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: normal;
            cursor: pointer;
        }

        .optional {
            font-weight: normal;
            color: #6b7280;
            font-size: 12px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        button:hover {
            background-color: var(--primary-hover);
        }

        .alert {
            background-color: #ecfdf5;
            border: 1px solid #10b981;
            color: #065f46;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Pendaftaran Lomba IT</h2>

    <?php
    // Logika sederhana untuk menangani pengiriman form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama       = htmlspecialchars($_POST['nama']);
        $provinsi   = htmlspecialchars($_POST['provinsi']);
        $universitas= htmlspecialchars($_POST['universitas']);
        $email      = htmlspecialchars($_POST['email']);
        $divisi     = isset($_POST['divisi']) ? htmlspecialchars($_POST['divisi']) : '';
        $github     = !empty($_POST['github']) ? htmlspecialchars($_POST['github']) : 'Tidak diisi';

        echo "<div class='alert'>";
        echo "<strong>Pendaftaran Berhasil!</strong><br>";
        echo "Nama: $nama<br>";
        echo "Provinsi: $provinsi<br>";
        echo "Universitas: $universitas<br>";
        echo "Email: $email<br>";
        echo "Divisi: $divisi<br>";
        echo "GitHub: $github";
        echo "</div>";
    }
    ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required placeholder="Masukkan nama lengkap">
        </div>

        <div class="form-group">
            <label for="provinsi">Asal Daerah (Provinsi di Pulau Jawa)</label>
            <select id="provinsi" name="provinsi" required>
                <option value="" disabled selected>Pilih Provinsi</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Banten">Banten</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
                <option value="DI Yogyakarta">DI Yogyakarta</option>
                <option value="Jawa Timur">Jawa Timur</option>
            </select>
        </div>

        <div class="form-group">
            <label for="universitas">Asal Universitas</label>
            <input type="text" id="universitas" name="universitas" required placeholder="Contoh: Universitas Negeri Jember">
        </div>

        <div class="form-group">
            <label for="email">Email Aktif</label>
            <input type="email" id="email" name="email" required placeholder="nama123@email.com">
        </div>

        <div class="form-group">
            <label>Divisi Lomba</label>
            <div class="radio-group">
                <label class="radio-label">
                    <input type="radio" name="divisi" value="UI/UX" required> UI/UX
                </label>
                <label class="radio-label">
                    <input type="radio" name="divisi" value="Data Analist"> Data Analist
                </label>
                <label class="radio-label">
                    <input type="radio" name="divisi" value="Game"> Game
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="github">Link Repository GitHub <span class="optional">(Opsional)</span></label>
            <input type="text" id="github" name="github" placeholder="https://github.com/username/repo">
        </div>

        <button type="submit">Daftar Sekarang</button>
    </form>
</div>

</body>
</html>