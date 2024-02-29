<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playball&family=Tangerine&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Great+Vibes&family=Playball&family=Tangerine&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Great+Vibes&family=Playball&family=Tangerine&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+lJDOkatzK2X+qwEMW/gnxfj2y6XUfoSfb6Fw6Gzo5s/ZwlKziThtv8e6yYBAsX2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-MH3ajjxCrb8Z9BhJpIoLXvITtWJtTRdJR6Tx0p8igY+OsktL1+nq7fejN4DH1/rZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-UX2HQ4QRj/RG7tXFGK6V2wnR5WzlsAIOAMwZGdHw/92O9FjKo/1pVWt5vaFV8N6M" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Croissant+One&display=swap" rel="stylesheet">
    <link href="https://fontawesome.com/v5/icons/map-marked-alt?f=classic&s=solid">
    <link rel="stylesheet" href="assets/icon/fontawesome-free-5.15.4-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

    <style>
        .akadNikah {
            text-align: center;
            background-image: url('assets/img/bg\ acaraPernikahan.png');
            background-repeat: no-repeat;
            background-position: top center;
            background-size: auto 100vh;
            height: 100vh;
            position: relative;
            z-index: 1;
            /* Atur z-index di atas bunga */
        }

        .akadNikah .isi .rectangle {
            position: relative;
            top: -144px;
            background-color: rgba(255, 255, 255, -0.2);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 14px rgba(0, 0, 0, 0.3);
            width: 318px;
            height: 664px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .akadNikah .isi .rectangle h2 {
            color: #7A6C61;
            font-family: 'Courgette', Sans-serif;
            font-size: 34px;
            font-weight: normal;
        }

        .akadNikah .isi .rectangle .tahun-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            flex-wrap: nowrap;
            flex-direction: column;
        }

        .akadNikah .isi .rectangle .tahun {
            color: #ffffff;
            font-family: 'Times New Roman', Sans-serif;
            font-size: 46px;
            font-weight: normal;
            text-transform: uppercase;
            line-height: 0.8em;
            letter-spacing: 2.3px;
            margin-right: 5px;
        }

        .akadNikah .isi .rectangle .tahun-label {
            color: #ffffff;
            font-family: 'Times New Roman', Sans-serif;
            font-size: 15px;
            font-weight: normal;
            text-transform: uppercase;
            line-height: 0.7em;
            letter-spacing: 3.1px;
        }

        .akadNikah .isi .rectangle .cincin {
            width: 80px;
            filter: brightness(96%) contrast(80%) saturate(63%) blur(0px) hue-rotate(29deg);
        }

        .background-angka {
            background-color: #7A6C61;
            /* Warna latar belakang dengan opasitas */
            padding: 14px;
            border-radius: 10px;
            /* box-shadow: 0 0 14px rgba(0, 0, 0, 0.3); */
            display: inline-block;
            margin-bottom: 16px;
        }

        .background-angka .tahun {
            color: #000000;
            font-family: 'Times New Roman', Sans-serif;
            font-size: 46px;
            font-weight: normal;
            text-transform: uppercase;
            line-height: 0.8em;
            letter-spacing: 2.3px;
            margin-right: 5px;
        }

        .background-angka .tahun-label {
            color: #000000;
            font-family: 'Times New Roman', Sans-serif;
            font-size: 15px;
            font-weight: normal;
            text-transform: uppercase;
            line-height: 0.7em;
            letter-spacing: 3.1px;
        }

        .akadNikah .background-angka::before {
            content: "Jum'at";
            position: absolute;
            left: -70px;
            left: 40px;
            top: 48.5%;
            transform: translateY(-50%);
            color: #7A6C61;
            /* Warna teks */
            font-family: 'Times New Roman', Sans-serif;
            font-size: 14px;
            font-weight: normal;
            text-transform: uppercase;
            line-height: 0.7em;
            letter-spacing: 3.1px;
            border-top: 1px solid #7A6C61;
            /* Garis atas */
            border-bottom: 1px solid #7A6C61;
            /* Garis bawah */
            padding-top: 10px;
            padding-bottom: 14px;
        }

        .akadNikah .background-angka::after {
            content: "Februari";
            position: absolute;
            right: 20px;
            /* Sesuaikan posisi teks kanan */
            top: 48.5%;
            transform: translateY(-50%);
            color: #7A6C61;
            /* Warna teks */
            font-family: "Times New Roman", Sans-serif;
            font-size: 14px;
            font-weight: normal;
            text-transform: uppercase;
            line-height: 0.7em;
            letter-spacing: 3.1px;
            border-top: 1px solid #7A6C61;
            /* Garis atas */
            border-bottom: 1px solid #7A6C61;
            /* Garis bawah */
            padding-top: 10px;
            padding-bottom: 14px;
        }

        .angka-resepsi {
            background-color: #7A6C61;
            /* Warna latar belakang dengan opasitas */
            padding: 14px;
            border-radius: 10px;
            /* box-shadow: 0 0 14px rgba(0, 0, 0, 0.3); */
            display: inline-block;
            margin-bottom: 16px;
        }

        .angka-resepsi .tahun {
            color: #000000;
            font-family: 'Times New Roman', Sans-serif;
            font-size: 46px;
            font-weight: normal;
            text-transform: uppercase;
            line-height: 0.8em;
            letter-spacing: 2.3px;
            margin-right: 5px;
        }

        .angka-resepsi .tahun-label {
            color: #000000;
            font-family: 'Times New Roman', Sans-serif;
            font-size: 15px;
            font-weight: normal;
            text-transform: uppercase;
            line-height: 0.7em;
            letter-spacing: 3.1px;
        }


        .angka-resepsi::before {
            content: "Minggu";
            position: absolute;
            left: -70px;
            left: 40px;
            top: 48.5%;
            transform: translateY(-50%);
            color: #7A6C61;
            /* Warna teks */
            font-family: 'Times New Roman', Sans-serif;
            font-size: 14px;
            font-weight: normal;
            text-transform: uppercase;
            line-height: 0.7em;
            letter-spacing: 3.1px;
            border-top: 1px solid #7A6C61;
            /* Garis atas */
            border-bottom: 1px solid #7A6C61;
            /* Garis bawah */
            padding-top: 10px;
            padding-bottom: 14px;
        }

        .angka-resepsi::after {
            content: "Februari";
            position: absolute;
            right: 20px;
            /* Sesuaikan posisi teks kanan */
            top: 48.5%;
            transform: translateY(-50%);
            color: #7A6C61;
            /* Warna teks */
            font-family: "Times New Roman", Sans-serif;
            font-size: 14px;
            font-weight: normal;
            text-transform: uppercase;
            line-height: 0.7em;
            letter-spacing: 3.1px;
            border-top: 1px solid #7A6C61;
            /* Garis atas */
            border-bottom: 1px solid #7A6C61;
            /* Garis bawah */
            padding-top: 10px;
            padding-bottom: 14px;
        }

        .BCA {
            margin-top: 10px;
            background-color: white;
            box-shadow: 0px 0px 23px -12px rgba(0, 0, 0, 0.5);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 20px 20px 10px 20px;
            border-radius: 20px;
        }

        .akadNikah .isi .rectangle .bca {
            position: relative;
            width: 65%;
            top: -10px;
            /* filter: brightness(96%) contrast(80%) saturate(63%) blur(0px) hue-rotate(29deg); */
        }

        .bunga {
            position: absolute;
            width: 300px;
            top: 20px;
            /* Sesuaikan dengan posisi yang diinginkan */
            right: 20px;
            /* Sesuaikan dengan posisi yang diinginkan */
            z-index: 1;
            /* Atur z-index di atas background pembukaan */
            transform: rotate(45deg);
            /* Memutar gambar sebesar 45 derajat */

        }

        /* CSS untuk tombol */
        .btn-primary {
            margin-top: 20px;
            font-family: "Playfair Display SC", Sans-serif;
            font-size: 16px;
            font-weight: normal;
            letter-spacing: 1.2px;
            fill: #FFFFFF;
            color: #FFFFFF;
            background-color: #685952;
            border-style: none;
            border-radius: 10px 10px 10px 10px;
            padding: 5px 20px 10px 20px;
        }

        /* CSS untuk tombol saat dihover */
        .btn-primary:hover {
            background-color: #332e2b;
            /* Warna latar belakang saat dihover */
        }

        /* CSS untuk ikon */
        .bi-envelope {
            margin-right: 0.5rem;
            /* Margin kanan ikon */
            font-size: 1.2rem;
            /* Ukuran ikon */
        }

        /* CSS untuk waktu acara */
        .waktu-acara {
            text-align: center;
            margin-top: 180px;
            color: #685952;
            font-family: 'Cormorant Garamond', sans-serif;
            font-size: 18px;
            font-weight: normal;
        }

        /* Gaya untuk angka */
        .angka {
            position: relative;
            right: -38px;
            top: -28px;
            /* Sesuaikan sesuai kebutuhan */
            font-weight: bold;
            font-size: 36px;
            /* Sesuaikan sesuai kebutuhan */
            display: inline-block;
            margin-right: 5px;
            /* Sesuaikan sesuai kebutuhan */
        }

        .theDate .gambar-swippp {
            top: 20px;
            width: 60px;
            /* Sesuaikan ukuran lebar gambar sesuai kebutuhan */
            height: auto;
            /* Sesuaikan tinggi gambar secara proporsional */
            position: relative;
            z-index: 2;
            /* Atur z-index agar gambar muncul di atas teks */
            /* Sesuaikan posisi gambar sesuai kebutuhan */
            filter: brightness(100%) invert(100%);
        }


        @media only screen and (min-width: 320px) and (max-width: 640px) {

            /* Start Laman pembukaan */
            .pembukaan {
                background-size: 388px 100vh;
            }

            .pembukaan .isi p {
                position: relative;
                margin-bottom: 0px;
            }

            .bunga {
                position: absolute;
                width: 300px;
                top: 0px;
                right: 0px;
                z-index: 1;
                transform: rotate(180deg);
            }

            .bungabwh {
                position: absolute;
                width: 300px;
                top: 398px;
                right: 92px;
                z-index: 1;
                transform: rotate(0deg);
            }

            .pembukaan .isi {
                position: relative;
                top: 120px;
            }

            .pembukaan .isi h1 {
                color: #685952;
                font-family: "Great Vibes", Sans-serif;
                font-size: 64px;
                font-weight: normal;
                margin-top: 0px;
                margin-bottom: -38px;
            }

            /* Penutup Laman pembukaan */

            /* Start theDate */
            .theDate {
                background-size: 388px 100vh;
            }

            .theDate .isi p {
                position: relative;
                margin-bottom: 0px;
            }

            .bunga {
                position: absolute;
                width: 300px;
                top: 0px;
                right: 0px;
                z-index: 1;
                transform: rotate(180deg);
            }

            .bungabwh {
                position: absolute;
                width: 300px;
                top: 398px;
                right: 92px;
                z-index: 1;
                transform: rotate(0deg);
            }

            .theDate .isi {
                position: relative;
                top: 120px;
            }

            .theDate .isi h1 {
                color: #685952;
                font-family: "Great Vibes", Sans-serif;
                font-size: 64px;
                font-weight: normal;
                margin-top: 0px;
                margin-bottom: -38px;
            }

            .theDate .isi .date {
                margin-top: 50px;
            }

            .theDate .isi .scroll {
                top: -14px;
            }

            /* Penutup theDate */

            /* Start acaraPernikahan */

            .acaraPernikahan .isi .rectangle {
                position: relative;
                top: 22px;
                background-color: rgba(255, 255, 255, -0.2);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 14px rgba(0, 0, 0, 0.3);
                width: 318px;
                height: 664px;
                margin: 0 auto;
            }

            .acaraPernikahan .isi .salam {
                margin-bottom: 6px;
            }

            .acaraPernikahan .isi .rahmat {
                margin-top: 0px;
            }

            .acaraPernikahan .isi .putra {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 26px;
            }

            .acaraPernikahan .isi .dan {
                margin-top: 0px;
            }

            /* Akhir acaraPernikahan */

            /* Awal akadNikah */

            .akadNikah .isi .rectangle {
                position: relative;
                top: 22px;
                background-color: rgba(255, 255, 255, -0.2);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 14px rgba(0, 0, 0, 0.3);
                width: 318px;
                height: 664px;
                margin: 0 auto;
            }

            .akadNikah .isi .rectangle .resepsi {
                margin-top: 10px;
                margin-bottom: 0px;
            }

            .akadNikah .isi .rectangle .pukul {
                margin-top: 0px;
                margin-bottom: 0px;
            }

            .akadNikah .isi .rectangle .lokasi {
                margin-top: 10px;
                margin-bottom: 6px;
            }

            .akadNikah .isi .rectangle .alamat {
                margin-top: 0px;
                margin-bottom: 0px;
            }



            /* Akhir akadNikah */

            /* awal loveGift */
            .akadNikah .love {
                margin-top: -60px;
            }

            .akadNikah .tanpa {
                margin-top: 0px;
                margin-bottom: 0px;
            }

            .BCA .name {
                margin-top: 2px;
                margin-bottom: 0px;
            }

            .BCA .norek {
                margin-top: 0px;
                margin-bottom: 0px;
            }

            .akadNikah .BCA .penerima {
                margin-top: 20px;
            }

            /* Akhir loveGift */


            /* awal kata */
            .akadNikah .kata {
                margin-bottom: 0px;
            }

            /* akhir kata */

            /* Ucapan */

            .komentar .isi {
                position: relative;
                top: 20px;
                background-color: rgba(255, 255, 255, 0.2);
                /* Warna latar belakang dengan opasitas */
                padding: 20px;
                /* Padding sesuai kebutuhan */
                border-radius: 12px;
                /* Border radius untuk membuat sudut kotak lebih melengkung */
                box-shadow: 0 0 14px rgba(0, 0, 0, 0.3);
                /* Efek bayangan (shadow) pada kotak */
                width: 334px;
                /* Lebar kotak */
                height: 666px;
                /* Tinggi kotak */
                margin: 0 auto;
                /* Menempatkan kotak di rata tengah */
            }


            /* CSS Styling */
            .ucapan-tamu {
                padding: 0px;
                border-radius: 5px;
                margin-top: 20px;
                text-align: left;
                margin-right: 10px;
                margin-left: 10px;
                /* Menjadikan konten rata kiri */
            }

            .ucapan-tamu-item {
                border-bottom: 1px solid #ccc;
                margin-bottom: 15px;
                padding-bottom: 15px;
            }

            .ucapan-tamu-item p {
                margin: 2px 0;
                color: #7A6C61;
                font-family: system-ui;
            }

            .ucapan-tamu-item .nama {
                font-weight: bold;
            }

            .ucapan-tamu-item img {
                position: relative;
                top: 4px;
                width: 16px;
            }

            .envelope-icon {
                float: left;
                /* Mengatur gambar agar mengapit teks dari kiri */
                margin-right: 10px;
                /* Jarak antara gambar dan teks */
            }

            .ucapan-tamu-item {
                clear: both;
                /* Membersihkan elemen setelah elemen float */
            }


        }

        @media only screen and (min-width: 641px) and (max-width: 1600px) {

            /* Start Laman pembukaan */
            .pembukaan {
                background-size: auto 100vh;
            }

            .pembukaan p,
            .pembukaan h1 {
                position: relative;
                margin: 0;
            }

            .bunga {
                position: absolute;
                width: 300px;
                top: 0px;
                right: 436px;
                z-index: 1;
                transform: rotate(180deg);
            }

            .pembukaan .isi {
                position: relative;
                top: 170px;
            }

            .pembukaan .isi h1 {
                color: #685952;
                font-family: "Great Vibes", Sans-serif;
                font-size: 64px;
                font-weight: normal;
                margin-top: 0px;
                margin-bottom: -38px;
            }

            .pembukaan .isi .dan {
                margin-top: 20px;
            }

            /* Penutup Laman pembukaan */

            /* Start theDate */
            .theDate {
                background-size: auto 100vh;
            }

            .theDate p,
            .theDate h1 {
                position: relative;
                margin: 0;
            }

            .bunga {
                position: absolute;
                width: 300px;
                top: 0px;
                right: 436px;
                z-index: 1;
                transform: rotate(180deg);
            }

            .theDate .isi {
                position: relative;
                top: 170px;
            }

            .theDate .isi h1 {
                color: #685952;
                font-family: "Great Vibes", Sans-serif;
                font-size: 64px;
                font-weight: normal;
                margin-top: 0px;
                margin-bottom: -38px;
            }

            .theDate .isi .scroll {
                top: 6px;
            }

            /* Penutup theDate */

            /* Start acaraPernikahan */
            .acaraPernikahan {
                background-size: auto 100vh;
            }

            .acaraPernikahan p,
            .acaraPernikahan h1 {
                position: relative;
                margin: 0;
            }

            .bunga {
                position: absolute;
                width: 300px;
                top: 0px;
                right: 436px;
                z-index: 1;
                transform: rotate(180deg);
            }

            .acaraPernikahan .isi {
                position: relative;
                top: 170px;
            }

            .acaraPernikahan .isi h1 {
                color: #685952;
                font-family: "Great Vibes", Sans-serif;
                font-size: 64px;
                font-weight: normal;
                margin-top: 0px;
                margin-bottom: -38px;
            }

            .acaraPernikahan .isi .putra {
                margin-top: 0px;
                padding: 0px 38px;
            }

            /* Penutup acaraPernikahan */

            /* Start acaraPernikahan */
            .akadNikah {
                background-size: auto 100vh;
            }

            .akadNikah p,
            .akadNikah h1 {
                position: relative;
                margin: 0;
            }

            .bunga {
                position: absolute;
                width: 300px;
                top: 0px;
                right: 436px;
                z-index: 1;
                transform: rotate(180deg);
            }

            .akadNikah .isi {
                position: relative;
                top: 170px;
            }

            .akadNikah .isi h1 {
                color: #685952;
                font-family: "Great Vibes", Sans-serif;
                font-size: 64px;
                font-weight: normal;
                margin-top: 0px;
                margin-bottom: -38px;
            }

            .akadNikah .isi .rectangle .resepsi {
                margin-top: 10px;
                margin-bottom: 0px;
            }

            .akadNikah .isi .rectangle .lokasi {
                margin-top: 10px;
                margin-bottom: 6px;
            }

            /* Penutup acaraPernikahan */

            /* awal loveGift */
            .akadNikah .BCA .penerima {
                margin-top: 20px;
            }

            /* Akhir loveGift */

            /* CSS Styling */
            .ucapan-tamu {
                padding: 0px;
                border-radius: 5px;
                margin-top: 20px;
                text-align: left;
                margin-right: 10px;
                margin-left: 10px;
                /* Menjadikan konten rata kiri */
            }

            .ucapan-tamu-item {
                border-bottom: 1px solid #ccc;
                margin-bottom: 15px;
                padding-bottom: 15px;
            }

            .ucapan-tamu-item p {
                margin: 2px 0;
                color: #7A6C61;
                font-family: system-ui;
            }

            .ucapan-tamu-item .nama {
                font-weight: bold;
            }

            .komentar .isi {
                position: relative;
                top: 20px;
                background-color: rgba(255, 255, 255, 0.2);
                /* Warna latar belakang dengan opasitas */
                padding: 20px;
                /* Padding sesuai kebutuhan */
                border-radius: 12px;
                /* Border radius untuk membuat sudut kotak lebih melengkung */
                box-shadow: 0 0 14px rgba(0, 0, 0, 0.3);
                /* Efek bayangan (shadow) pada kotak */
                width: 334px;
                /* Lebar kotak */
                height: 700px;
                /* Tinggi kotak */
                margin: 0 auto;
                /* Menempatkan kotak di rata tengah */
            }



        }
    </style>
</head>

<body>
    <div class="pembukaan">
        <!-- <img class="bunga" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
        <div class="isi">
            <p style="margin-top: 0px; margin-bottom: 18px;    color: #685952;
            font-family: 'Crimson Pro', Sans-serif;
            font-size: 16px;
            font-weight: normal;">The Wedding Of</p>
            <h1 style="position: relative;
            right: 32px;">Fanani</h1>
            <p class="dan" style="color: #685952;
            font-family: 'Great Vibes', Sans-serif;
            font-size: 28px;
            font-weight: normal;">dan</p>
            <h1 style="position: relative;
            right: -12px;">Ayu</h1>
            <p style="margin-top: 74px;color: #000000;
            font-family: 'Cormorant Garamond', Sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3em;">
                Kepada Yth. </br>Bapak/Ibu/Saudara/i</p>
            <h2 style="    color: #000000;
            font-family: 'monotype', Sans-serif; font-size: 26px; font-weight: normal;    margin-bottom: 16px;
    margin-top: 16px;">Daus</h2>
            <p style="    color: #000000;
            font-family: 'Cormorant Garamond', Sans-serif; font-size: 12px; font-weight: normal; line-height: 1.3em;">
                Maaf apabila ada kesalahan pada penulisan nama/gelar
            </p>
            <button class="btn btn-primary"><i class="bi bi-envelope-open-fill"></i> Buka Undangan</button>
        </div>
        <!-- <img class="bungabwh" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
    </div>

    <!-- Laman Save the date -->
    <div class="theDate">
        <!-- <img class="bunga" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
        <div class="isi">
            <p style="margin-top: 0px; margin-bottom: 18px;    color: #685952;
            font-family: 'Crimson Pro', Sans-serif;
            font-size: 16px;
            font-weight: normal;">The Wedding Of</p>
            <h1 style="position: relative;
            right: 32px;">Fanani</h1>
            <p class="dan" style="color: #685952;
            font-family: 'Great Vibes', Sans-serif;
            font-size: 28px;
            font-weight: normal; margin-top: 20px;">dan</p>
            <h1 style="position: relative;
            right: -12px;">Ayu</h1>
            <h2 class="date" style="color: #685952;
            font-family:'Playball', Sans-serif; font-size: 24px; font-weight: normal; letter-spacing: 2px;    position: relative;
    top: 154px;">Save The
                Date</h2>
            <!-- Tambahkan waktu acara di bawah "Save The Date" -->
            <div class="waktu-acara">
                <div id="hari" class="angka">10</div> Hari
                <div id="jam" class="angka">12</div> Jam
                <div id="menit" class="angka">30</div> Menit
                <div id="detik" class="angka">45</div> Detik
            </div>
            <img src="assets/img/swippp.png" alt="" class="gambar-swippp">
            <p class=" scroll" style="color: #000000;
            font-family: 'Cormorant Garamond', Sans-serif; font-style: italic;
            font-size: 18px;
            font-weight: 500;
            line-height: 1.3em;">Scroll Keatas</p>
        </div>
        <!-- <img class="bungabwh" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
    </div>
    <!-- Penutup Save the date -->

    <!-- Laman acaraPernikahan -->
    <div class="acaraPernikahan">
        <!-- <img class="bunga" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
        <div class="isi">
            <div class="rectangle">
                <!-- Isi konten kotak sesuai kebutuhan -->
                <img src="assets/img/bismillah.svg" alt="" class="bismillah">
                <h2 class="salam" style="color: #555555;
                font-family: 'Crimson Pro', Sans-serif; font-size: 18px; font-weight: bold;    margin-bottom: 10px;
    margin-top: 10px;">Assalamu'alaikum Wr. Wb.
                </h2>
                <p class="rahmat" style="color: #555555;
                font-family: 'Crimson Pro', Sans-serif; font-size: 16px; font-weight: normal;">Dengan memohon rahmat
                    dan ridho Allah Subhanahu Wa Ta’ala, insyaaAllah kami akan menyelenggarakan
                    acara pernikahan :</p>
                <h2 style="color: #685952;
                font-family: 'Courgette', Sans-serif;
                font-size: 24px;
                font-weight: normal;
                text-transform: capitalize;
                letter-spacing: 0px;
                margin-bottom: 0px;">Akhsanul Fanani
                </h2>
                <p class="putra" style="color: #555555;
                font-family: 'Crimson Pro', Sans-serif;
                font-size: 16px;
                font-weight: normal;
                text-transform: capitalize;">Putra Kedua Dari Bapak H. Bahrul Hasan
                    & Ibu Hj. Masnawiyah</p>

                <p class="dan" style="color: #555555;
                font-family: 'Croissant One', Sans-serif; font-size: 20px; font-weight: 400; position: relative; top: 12px;">
                    &</p>

                <h2 style="color: #685952;
                font-family: 'Courgette', Sans-serif;
                font-size: 24px;
                font-weight: normal;
                text-transform: capitalize;
                letter-spacing: 0px;
                margin-bottom: 0px;">Siti Hajar Ayu Kurnia Anjani
                </h2>
                <p class="putra" style="color: #555555;
                font-family: 'Crimson Pro', Sans-serif;
                font-size: 16px;
                font-weight: normal;
                text-transform: capitalize;
                padding: 0px;">Putri Pertama Dari Bapak KH. Ahmad Shobih Abidi
                    & Ibu Nyai Anik Khumairoh</p>
            </div>
        </div>
        <!-- <img class="bungabwh" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
    </div>
    <!-- Penutup Save the date -->

    <!-- Laman akadNikah -->
    <div class="akadNikah">
        <!-- <img class="bunga" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
        <div class="isi">
            <div class="rectangle">
                <!-- Isi konten kotak sesuai kebutuhan -->
                <img src="assets/img/cincin.png" alt="" class="cincin">
                <h2 class="resepsi" style="color: #7A6C61; font-family: 'Courgette', Sans-serif; font-size: 34px; font-weight: normal;">
                    Akad Nikah</h2>
                <div class="tahun-container">
                    <div class="background-angka">
                        <div class="tahun">16</div>
                        <div style="color: #FFFFFF;
                        font-family: 'Times New Roman', Sans-serif; font-size: 15px; font-weight: normal;
                            text-transform: uppercase; line-height: 0.7em; letter-spacing: 3.1px;" class="tahun">2024
                        </div>
                    </div>
                </div>
                <p class="pukul" style="color: #000000;
                font-family: 'Cormorant Garamond', Sans-serif; font-size: 17px; font-weight: normal;">Pukul : 13.00 Wib
                    s/d Selesai</p>
                <h2 class="lokasi" style="color: #7A6C61;
                    font-family: 'Times New Roman', Sans-serif;
                    font-size: 20px;
                    font-weight: 600;">Lokasi Acara</h2>
                <p class="alamat" style="color: #000000;
                font-family: 'Cormorant Garamond', Sans-serif; font-size: 17px; font-weight: normal; line-height:
                    1.3em; padding: 0px 20px;">PONPES DARUL MUWAHHIDIN
                    Jl. KH. Harun Wonokusumo Ds. Payungrejo, Kutorejo, Mojokerto</p>
                <button class="btn btn-primary"><i class="fas fa-map-marked-alt"></i> Lihat Lokasi</button>
            </div>
        </div>
        <!-- <img class="bungabwh" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
    </div>
    <!-- Penutup akadNikah -->

    <!-- Laman Resepsi -->
    <div class="akadNikah">
        <!-- <img class="bunga" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
        <div class="isi">
            <div class="rectangle">
                <!-- Isi konten kotak sesuai kebutuhan -->
                <img src="assets/img/cincin.png" alt="" class="cincin">
                <h2 class="resepsi" style="color: #7A6C61; font-family: 'Courgette', Sans-serif; font-size: 34px; font-weight: normal;">
                    Resepsi</h2>
                <div class="tahun-container">
                    <div class="angka-resepsi">
                        <div class="tahun">18</div>
                        <div style="color: #FFFFFF;
                        font-family: 'Times New Roman', Sans-serif; font-size: 15px; font-weight: normal;
                            text-transform: uppercase; line-height: 0.7em; letter-spacing: 3.1px;" class="tahun">2024
                        </div>
                    </div>
                </div>
                <p class="pukul" style="color: #000000;
                font-family: 'Cormorant Garamond', Sans-serif; font-size: 17px; font-weight: normal;">Pukul : 12.00
                    Wib s/d Selesai</p>
                <h2 class="lokasi" style="color: #7A6C61;
                    font-family: 'Times New Roman', Sans-serif;
                    font-size: 20px;
                    font-weight: 600;">Lokasi Acara</h2>
                <p class="alamat" style="color: #000000;
                font-family: 'Cormorant Garamond', Sans-serif; font-size: 17px; font-weight: normal; line-height:
                    1.3em; padding: 0px 20px;">Mojosantren RT 11 RW 03 No. 25 Kemasan Krian Sidoarjo</p>
                <button class="btn btn-primary"><i class="fas fa-map-marked-alt"></i> Lihat Lokasi</button>
            </div>
        </div>
        <!-- <img class="bungabwh" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
    </div>
    <!-- Penutup Resepsi -->

    <!-- Laman loveGift -->
    <div class="akadNikah">
        <!-- <img class="bunga" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
        <div class="isi">
            <div class="rectangle">
                <!-- Isi konten kotak sesuai kebutuhan -->
                <h2 class="love" style="color: #7A6C61;
                font-family: 'Courgette', Sans-serif; font-size: 27px; font-weight: normal;margin-bottom: 8px;">Love
                    Gift</h2>
                <p class="tanpa" style="color: #000000;
                font-family: 'Cormorant Garamond', Sans-serif; font-size: 14px; font-weight: 400; line-height:
                    1.5em;">Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami, dapat
                    melalui:
                </p>
                <div class="BCA">
                    <img src="assets/img/Logo-Bank-BCA.png" alt="" class="bca">
                    <p class="name" style="color: #000000;
                    font-family: 'Bree Serif', Sans-serif; font-size: 13px; font-weight: 500; position: relative;
    top: -12px;">an. Akhsanul Fanani
                    </p>
                    <p class="norek" style="color: #000000;
                    font-family: 'Bree Serif', Sans-serif; font-size: 13px; font-weight: 500;">1840560291
                    </p>
                    <button style="font-family: 'Bree Serif', Sans-serif; font-size: 12px; font-weight: 500; fill:
                        #FFFFFF; color: #FFFFFF; background-color: #7A6C61; border-radius: 15px 15px 15px 15px; padding:
                        6px 15px 6px 15px;margin-top: 10px;" class="btn btn-primary"><i class="far fa-copy"></i> Salin
                        No.Rek</button>
                </div>

                <div class="BCA">
                    <p class="name" style="color: #000000;
                    font-family: 'Cormorant Garamond', Sans-serif; font-size: 15px; font-weight: 500;">Bagi yang ingin
                        memberikan hadiah, silahkan dikirim ke alamat berikut :
                    </p>
                    <p class="penerima" style="color: #000000;
                    font-family: 'Bree Serif', Sans-serif; font-size: 13px; font-weight: 500;">Penerima: Akhsanul
                        Fanani</br>
                        Mojosantren RT 11 RW 03 No. 25 Kemasan Krian Sidoarjo
                    </p>
                    <button style="font-family: 'Bree Serif', Sans-serif; font-size: 12px; font-weight: 500; fill:
                        #FFFFFF; color: #FFFFFF; background-color: #7A6C61; border-radius: 15px 15px 15px 15px; padding:
                        6px 15px 6px 15px;margin-top: 10px;" class="btn btn-primary"><i class="far fa-copy"></i> Salin
                        Alamat</button>
                </div>
            </div>
        </div>
        <!-- <img class="bungabwh" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
    </div>
    <!-- Penutup loveGift -->

    <!-- Laman loveGift -->
    <div class="akadNikah">
        <!-- <img class="bunga" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
        <div class="isi">
            <div class="rectangle">
                <p class="kata" style="color: #000000;
                font-family: 'Cormorant Garamond', Sans-serif; font-size: 15px; font-weight: 400; line-height: 1.5em;
                    letter-spacing: -0.3px;">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
                    pasangan-pasangan untukmu dari
                    jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu
                    rasa kasih dan sayang."
                </p>
                <p style="color: #6A6A6A;
                font-family: 'Crimson Pro', Sans-serif; font-size: 18px; font-weight: bold;margin-top: 10px;">-
                    Ar-Rum: 21 -</p>
            </div>
        </div>
        <!-- <img class="bungabwh" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
    </div>
    <!-- Penutup loveGift -->

    <!-- Laman komentar -->
    <div class="komentar">
        <!-- <img class="bunga" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
        <div class="isi">
            <h2 style="color: #7A6C61;
                    font-family: 'Courgette', Sans-serif; font-size: 26px; font-weight: normal;">Berikan Ucapan & Do'a
            </h2>
            <form class="form-komentar" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <?php
                include_once "assets/php/koneksi.php";
                // Query untuk menghitung jumlah komentar
                $query_count = "SELECT COUNT(*) AS jumlah_komentar FROM ucapan_tamu";
                $result_count = mysqli_query($koneksi, $query_count);

                // Periksa apakah query berhasil dieksekusi
                if (!$result_count) {
                    echo "Error: " . $query_count . "<br>" . mysqli_error($koneksi);
                    exit();
                }

                // Ambil hasil query
                $row_count = mysqli_fetch_assoc($result_count);
                $jumlah_komentar = $row_count['jumlah_komentar'];
                ?>
                <p style="color: #7B6945;font-size: 1em;
    font-weight: bold;text-decoration: none !important;
    font-family: math;margin-top: 0px;"><?php echo $jumlah_komentar; ?> Comments</p>
                <input type="text" name="nama" placeholder="Nama Anda">
                <textarea name="ucapan" placeholder="Ucapan Anda"></textarea>
                <select id="kehadiran-tamu" name="kehadiran">
                    <option value="hadir">Hadir</option>
                    <option value="tidak-hadir">Tidak Hadir</option>
                    <option value="mungkin">Mungkin</option>
                </select>
                <button type="submit"><i style="position: relative;
                            right: 6px;" class="fas fa-paper-plane"></i> Kirim</button>
                <div class="ucapan-tamu">
                    <?php
                    // Koneksi ke database
                    include_once 'assets/php/koneksi.php';

                    // Periksa apakah ada data yang dikirim melalui metode POST
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Ambil nilai yang dikirimkan melalui formulir
                        $nama = $_POST['nama'];
                        $ucapan = $_POST['ucapan'];
                        $kehadiran = $_POST['kehadiran'];

                        // Persiapkan query untuk menyimpan data tamu
                        $query = "INSERT INTO ucapan_tamu (nama, ucapan, kehadiran) VALUES ('$nama', '$ucapan', '$kehadiran')";

                        // Eksekusi query untuk menyimpan data
                        if (mysqli_query($koneksi, $query)) {
                    ?>
                            <script>
                                Swal.fire({
                                    icon: "success",
                                    title: "Sukses Meyimpan Ucapan",
                                    text: "Terima kasih atas ucapannya!",
                                    // footer: '<a href="#">Terima kasih atas ucapannya!</a>'
                                });
                            </script>
                        <?php
                            // echo "Data tamu berhasil disimpan.";
                        } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
                        }

                        // Tutup koneksi database
                    }


                    // Query untuk mengambil data tamu
                    $query = "SELECT nama, ucapan, kehadiran FROM ucapan_tamu";

                    // Eksekusi query
                    $result = mysqli_query($koneksi, $query);

                    // Periksa apakah query berhasil dieksekusi
                    if (!$result) {
                        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
                        exit();
                    }



                    // $nomor = 1;

                    // Cek apakah ada data lowongan pekerjaan
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Tampilkan data lowongan pekerjaan dalam div .lowongan-item
                            echo "<div class='ucapan-tamu-item'>";
                            // echo "<h1>{$row['judul']}</h1>";
                            // echo "<p>Ucapan ke : " . $nomor . "</p>"; // Menampilkan nomor
                        ?>
                            <img src="assets/img/envelope-regular.svg" alt="" class="envelope-icon">
                    <?php
                            echo "<p class='nama'>{$row['nama']}</p>";
                            echo "<p>{$row['ucapan']}</p>";
                            // echo "<p>{$row['kehadiran']}</p>";

                            echo "</div>";

                            // Tambahkan 1 ke nomor
                            // $nomor++;
                        }
                    } else {
                        // Tampilkan pesan jika tidak ada lowongan pekerjaan
                        echo "<p style='margin-top: 10px;'>Maaf, tidak ada ucapan saat ini.</p>";
                    }

                    // Tutup koneksi
                    mysqli_close($koneksi);
                    ?>
                </div>
            </form>
            <p style="color: #000000;
    font-family: 'Cormorant Garamond', Sans-serif; font-size: 14px; font-weight: 400; line-height: 1.5em;">Atas kehadiran dan do’a restu dari Bapak/Ibu/Saudara/i sekalian, kami mengucapkan Terima Kasih.</p>
            <h2 style="color: #7A6C61;
    font-family: 'Crimson Pro', Sans-serif; font-size: 18px; font-weight: bold;">Wassalamu’alaikum Wr. Wb.
            </h2>
        </div>
        <!-- <img class="bungabwh" src="assets/img/Asset-F06-3-1.png" alt="Bunga"> -->
    </div>
    <!-- Penutup komentar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menghitung jumlah entri ucapan tamu
            var jumlahUcapanTamu = document.querySelectorAll('.ucapan-tamu-item').length;

            // Memeriksa apakah jumlah entri lebih dari 3
            if (jumlahUcapanTamu > 3) {
                // Jika iya, tambahkan gaya CSS untuk membuatnya scrollable
                document.querySelector('.ucapan-tamu').style.overflowY = 'scroll';
                document.querySelector('.ucapan-tamu').style.maxHeight = '200px'; // Tinggi maksimum yang diinginkan
            } else {
                // Jika tidak, hilangkan gaya CSS yang membuatnya scrollable
                document.querySelector('.ucapan-tamu').style.overflowY = 'initial';
                document.querySelector('.ucapan-tamu').style.maxHeight = 'none';
            }
        });
    </script>
</body>

</html>