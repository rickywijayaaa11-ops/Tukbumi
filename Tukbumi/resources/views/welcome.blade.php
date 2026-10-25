<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukbumi | Development Test</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: #102820;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .container {
            max-width: 700px;
            width: 100%;
            text-align: center;
            padding: 48px 28px;
            border: 1px solid #355b48;
            border-radius: 20px;
            background: #19392d;
        }

        .label {
            display: inline-block;
            color: #b7f397;
            border: 1px solid #527c50;
            border-radius: 30px;
            padding: 8px 14px;
            font-size: 12px;
            letter-spacing: 1px;
            margin-bottom: 24px;
        }

        h1 {
            font-size: clamp(32px, 6vw, 52px);
            margin-bottom: 18px;
        }

        h1 span {
            color: #a8e890;
        }

        p {
            color: #d0ded5;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        button {
            background: #a8e890;
            color: #102820;
            border: none;
            padding: 14px 24px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #c2f5ae;
        }

        #status {
            margin-top: 22px;
            margin-bottom: 0;
            color: #b7f397;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <main class="container">
        <div class="label">WEBSITE DEVELOPMENT TEST</div>

        <h1>Selamat Datang di <span>Tukbumi</span></h1>

        <p>
            Ini adalah halaman pengujian perubahan tampilan
            Laravel Blade. Jika kamu melihat halaman ini,
            perubahan lokal berhasil ditampilkan.
        </p>

        <button onclick="showStatus()">
            Tes Tombol
        </button>

        <p id="status" aria-live="polite"></p>
    </main>

    <script>
        function showStatus() {
            document.getElementById('status').textContent =
                'Berhasil! JavaScript berjalan dengan baik.';
        }
    </script>
</body>
</html>