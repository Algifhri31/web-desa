<?php require 'system/koneksi.php';?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - Selamat Datang</title>
    <?php require 'system/head.php';?>
</head>

<body>



    <?php require 'system/menu.php';?>

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Website Horas Eco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to Font Awesome and any additional styles if needed -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">

    <!-- Custom CSS -->
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Full viewport header with background image */
        header {
            width: 100%;
            height: 100vh;
            background-image: url('./assets/images/Waterfall.png');
            background-size: cover;
            background-position: right;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
        }

        .nav-brand h1 {
            font-size: 5rem;
            color: #ffffff;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            font-weight: bold;
            margin-bottom: 0.5em;
        }

        .nav-brand p {
            font-size: 2rem;
            color: black;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
            font-style: italic;
            font-weight: 1700;
            -webkit-text-stroke: 2px black;
            padding: 10px;
            display: inline-block;
        }

        /* Responsive styling for smaller screens */
        @media (max-width: 768px) {
            .nav-brand h1 {
                font-size: 3rem;
            }

            .nav-brand p {
                font-size: 1.2rem;
                padding: 5px;
            }
        }

        @media (max-width: 480px) {
            .nav-brand h1 {
                font-size: 2rem;
            }

            .nav-brand p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="nav-brand">
            <h1>Surga Tersembunyi di Paritohan</h1>
            <p>ᯘᯒᯮ᯲᯲ᯎᯖᯒᯩ᯲᯲ᯘᯔᯩ᯲᯲ᯅᯮᯠᯪᯑᯪᯇᯒᯪᯖᯬᯂᯉ᯲</p>
        </div>
    </header>
</body>

</html>

<section class="about pt-0 pt-md-5 mb-2 mb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="why-we-text-area about-text-area-2">
                    <div class="default-section-title">
                        <span style="font-size: 20px; color: black;">Mengenal lebih dekat Bendungan Sigura-Gura, sekali dayung dua tiga objek wisata terlewati. </span>
                        
                        <?php
                        $stmt345q = $mysqli->prepare("SELECT * FROM sejarah");
                        $stmt345q->execute();
                        $result345q = $stmt345q->get_result();
                        if ($result345q->num_rows > 0) {
                            $row345q = $result345q->fetch_assoc(); ?>
                            <p><?php echo $row345q['isi']; ?></p>
                        <?php } ?>






                       <section class="related-articles pt-0 pt-md-5 mb-2 mb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="why-we-text-area about-text-area-2">
                    <div class="default-section-title">
                        <span style="font-size: 40px; font-style: italic; color: red;">HIGHLIGHT</span>
                    </div>
                </div>
            </div>

            <?php
                                // Daftar artikel terkait
                                $articles = [
                                    [
                                        "judul" => "UMKM PONOT Lebih dari sekadar usaha lokal",
                                        "isi" => "UMKM Ponot adalah jendela menuju kekayaan budaya dan kuliner Sumatera Utara. Berlokasi strategis di sekitar Air Terjun Ponot, ",
                                        "foto" => "uploads/artikel1.png"
                                    ],
                                    [
                                        "judul" => "Bendungan Sigura Gura Menjadi Salah Satu Tempat Refreshing",
                                        "isi" => "Bendungan Sigura-gura itu merupakan tempat refreshing yang sempurna bagi siapa pun yang ingin melepaskan beban pikiran dari rutinitas sehari-hari. ",
                                        "foto" => "uploads/artikel2.jpg"
                                    ],


                [
                    "judul" => "Tortor Modern: Inovasi Tanpa Kehilangan Identitas",
                    "isi" => "Perlu diketahui bahwa budaya Batak memiliki warisan budaya yang sangat kaya seperti kesenian, bahasa dan rumah adat.  Salah satu kesenian yang berasal dari suku Batak di Sumatera Utara adalah tari Tortor yang telah ada sejak abad ke-13. Tortor adalah seni tari yang menggerakkan seluruh badan dengan dituntut irama gondang, dengan pusat gerakan pada tangan dan jari, kaki dan telapak kaki, punggung dan bahu. Tari tortor pun memiliki makna simbol dalam tiap-tiap gerakannya yang bervariasi dan penuh makna. Memiliki arti saling menghargai dan menghormati antar saudara semarga dalam bentuk hubungan yang baik. ",
                    "foto" => "uploads/artikel3.jpg"
                ],

                [
                    "judul" => "Memperkuat Identitas Budaya melalui Kerajinan Tangan Toba",
                    "isi" => "Wilayah Toba yang terletak di Sumatera Utara, dikenal tidak hanya karena keindahan alamnya, tetapi juga karena budaya yang ditawarkan. Salah satu aspek yang paling menonjol dari budaya Batak Toba adalah kerajinan tangan yang tentunya sangat bagus dan menarik perhatian. Beberapa yang sering dijadikan sebagai kerajinan tangan adalah ornamen Rumah adat dan ornamen Cicak yang tentunya menjadi salah satu icon dari budaya batak itu sendiri 

.",
                    "foto" => "uploads/artikel6.jpg"
                ],

                [
                    "judul" => "PT Inalum Bersama Dengan Penerima Beasiswa KSE Medan Raya Melaksanakan  Kunjungan Ke Wisata Air Terjun Ponot Yang Merupakan Air Terjun Tertinggi Di Indonesia.",
                    "isi" => "Pada tanggal 28 Oktober 2024, pukul 09.30 di air terjun ponot, kecamatan aek songsongan, PT inalum bersama dengan penerima beasiswa KSE medan raya melaksanakan  kunjungan ke wisata air terjun ponot yang merupakan air terjun tertinggi di Indonesia. 
Posisi garis letak objek wisata air terjun ponot berada di desa tangga, kecamatan aek songsongan, kabupaten asahan yang berjarak 232 km dengan waktu kurang lebih 5 jam menggunakan transportasi roda 4 dari pusat kota medan
",
                    "foto" => "uploads/artikel5.jpg"
                ],
                [
                    "judul" => "Inilah Alasan Mengapa Ulos Batak Lebih dari Sekadar Warisan Budaya",
                    "isi" => "Ulos bukan sekadar kain tradisional bagi masyarakat Batak, tetapi juga simbol kehidupan, kehangatan, dan filosofi yang kaya makna. Menurut leluhur Batak, ada tiga sumber kehangatan utama untuk manusia: matahari, api, dan ulos. Dari ketiganya, ulos dianggap paling nyaman karena tidak hanya menghangatkan badan, tetapi juga memberi ketenangan jiwa (Astuti, 2019). 

.",
                    "foto" => "uploads/artikel7.jpg"
                ],
               
                                ];

                                // Loop untuk menampilkan setiap artikel
                                foreach ($articles as $article) {
                                    ?>
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-12">
                                        <div class="blog-card">
                                            <div class="blog-card-img">
                                                <a href="https://horasecowisata.com/berita"><img src="<?php echo $article['foto']; ?>"
                                                        alt="<?php echo $article['judul']; ?>" /></a>
                                            </div>
                                            <div class="blog-card-text-area">
                                                <h4><a href="https://horasecowisata.com/berita"><?php echo $article['judul']; ?></a></h4>
                                                <p>
                                                    <?php
                                                    // Menampilkan 50 kata pertama dari isi artikel
                                                    $wordlayanan = explode(" ", $article['isi']);
                                                    $tampilayanan = implode(" ", array_splice($wordlayanan, 0, 50));
                                                    echo $tampilayanan; ?>....
                                                </p>
                                                <a class="read-more-btn" href="https://horasecowisata.com/berita">Baca Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </section>





                      












                        <style>
    /* Styling container untuk layout grid dengan maksimal 4 kolom */
    .thumbnail-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* Membatasi 4 video per baris */
        gap: 20px;
        justify-items: center;
        margin-top: 20px;
    }

    /* Styling untuk setiap card video */
    .video-card {
        position: relative;
        width: 100%; /* Menyesuaikan lebar sesuai kolom */
        max-width: 300px; /* Membatasi lebar maksimal */
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Efek hover */
    .video-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
    }

    /* Styling untuk deskripsi */
    .video-card p {
        text-align: center;
        margin-top: 10px;
        font-size: 1rem;
        color: #333;
    }

    /* Responsif: mengurangi jumlah kolom pada layar kecil */
    @media (max-width: 768px) {
        .thumbnail-container {
            grid-template-columns: repeat(2, 1fr); /* 2 kolom per baris di layar sedang */
        }
    }

    @media (max-width: 480px) {
        .thumbnail-container {
            grid-template-columns: 1fr; /* 1 kolom per baris di layar kecil */
        }
    }
</style>





                        <!-- Konten Video -->
                        <span style="font-size: 30px; color: #FF5733;">KONTEN VIDEO</span>
                        <p>Ikuti kami di sosial media untuk melihat konten video terbaru:</p>

                        <!-- Contoh video YouTube -->
                        <div class="video-container" style="display: flex; gap: 15px;">
    <!-- <div>
        <a href="https://www.youtube.com/watch?v=YfEIdI2ZaW8" target="_blank">
        <img src="https://img.youtube.com/vi/YfEIdI2ZaW8/0.jpg" alt="Thumbnail Video" style="width: 100%; max-width: 300px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
        <p>Ponot Nih Gais</p>
        </a>
    </div> -->











    <style>
    /* Styling container untuk layout grid dengan maksimal 4 kolom */
    .thumbnail-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* Membatasi 4 video per baris */
        gap: 20px;
        justify-items: center;
        margin-top: 20px;
    }

    /* Styling untuk setiap card video */
    .video-card {
        position: relative;
        width: 100%; /* Menyesuaikan lebar sesuai kolom */
        max-width: 300px; /* Membatasi lebar maksimal */
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Efek hover */
    .video-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
    }

    /* Styling untuk deskripsi */
    .video-card p {
        text-align: center;
        margin-top: 10px;
        font-size: 1rem;
        color: #333;
    }

    /* Responsif: mengurangi jumlah kolom pada layar kecil */
    @media (max-width: 768px) {
        .thumbnail-container {
            grid-template-columns: repeat(2, 1fr); /* 2 kolom per baris di layar sedang */
        }
    }

    @media (max-width: 480px) {
        .thumbnail-container {
            grid-template-columns: 1fr; /* 1 kolom per baris di layar kecil */
        }
    }
</style>

<div class="thumbnail-container">
    <a href="https://www.instagram.com/reel/DBs_XwuyZPu/?igsh=eXZzb2l4aGFxN2tx" target="_blank" class="video-card">
        <iframe src="https://www.instagram.com/reel/DBs_XwuyZPu/embed" width="300" height="400" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        <p>Bercerita di Sumatera sambil ber-‘kelana’
Tunggu ya sayangku

#berkelana
#kamimeraki
#desatangga
#sumaterautara</p>
    </a>

    <a href="https://www.instagram.com/reel/DAVAEVEOFhr/?igsh=N2N3Mm03NW55NzVw" target="_blank" class="video-card">
        <iframe src="https://www.instagram.com/reel/DAVAEVEOFhr/embed" width="300" height="400" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        <p>Ponot Nih Gais</p>
    </a>

    <a href="https://www.instagram.com/reel/DAgLP8tKb98/?igsh=dzM4OXpheHJjbnFq" target="_blank" class="video-card">
        <iframe src="https://www.instagram.com/reel/DAgLP8tKb98/embed" width="300" height="400" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        <p>Ponot Nih Gais</p>
    </a>
    <a href="https://www.instagram.com/reel/DAVAEVEOFhr/?igsh=N2N3Mm03NW55NzVw" target="_blank" class="video-card">
        <iframe src="https://www.instagram.com/reel/DAVAEVEOFhr/embed" width="300" height="400" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        <p>Ponot Nih Gais</p>
    </a>




    <a href="https://www.instagram.com/reel/DAgLP8tKb98/?igsh=dzM4OXpheHJjbnFq" target="_blank" class="video-card">
        <iframe src="https://www.instagram.com/reel/DAgLP8tKb98/embed" width="300" height="400" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        <p>Ponot Nih Gais</p>
    </a>

    <a href="https://www.instagram.com/reel/DAVAEVEOFhr/?igsh=N2N3Mm03NW55NzVw" target="_blank" class="video-card">
        <iframe src="https://www.instagram.com/reel/DAVAEVEOFhr/embed" width="300" height="400" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
        <p>Ponot Nih Gais</p>
    </a>

</div>

</div>





                       
                        

                        <!-- Tambahkan lebih banyak video sesuai kebutuhan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






    <section class="about pt-0 pt-md-5 mb-2 mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mt-2">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                            <span></span>
                            <h4 style="font-weight: bold;">RUMAH BUMN HUMBANG HASANDUTAN</h4>
                            <?php
                            $stmt = $mysqli->prepare("SELECT * FROM visi");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            if($result->num_rows === 0) {} else { $row = $result->fetch_assoc(); {?>
                                <br>
                                <img src="uploads/<?php echo $row['foto'];?>" class="img-fluid" alt="<?php echo $rowpengaturanweb['namaweb'];?>">
                                <p><?php echo $row['isi'];?></p>
                            <?php } }?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                            <span></span>
                            <h4 style="font-weight: bold;">RUMAH BUMN TOBA</h4>
                            <?php
                            $stmtv123 = $mysqli->prepare("SELECT * FROM misi");
                            $stmtv123->execute();
                            $resultv123 = $stmtv123->get_result();
                            if($resultv123->num_rows === 0) {} else { $rowv123 = $resultv123->fetch_assoc(); {?>
                                <br>
                                <img src="uploads/<?php echo $rowv123['foto'];?>" class="img-fluid" alt="<?php echo $rowpengaturanweb['namaweb'];?>">
                                <p><?php echo $rowv123['isi'];?></p>
                            <?php } }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about pt-0 pt-md-5 mb-2 mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                           <div class="package-section">
    <span style="font-size: 30px; color: #FF5733;">PAKET</span>
    <h3>HORAS TOUR</h3>
    <img src="uploads/biru.png" alt="Deskripsi Gambar" style="width: 100%; height: auto;"/>
    <img src="uploads/biru2.png" alt="Deskripsi Gambar" style="width: 100%; height: auto;"/>
    <img src="uploads/biru3.png" alt="Deskripsi Gambar" style="width: 100%; height: auto;"/>
</div>

                            <!-- 
                             -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about pt-0 pt-md-5 mb-2 mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                            <span style="font-size: 30px; color: #FF5733;">GALERI</span>
                            <h3><?php echo $rowpengaturanweb['namaweb'];?></h3>
                        </div>
                    </div>
                </div>
                <?php 
                $stmtv72q = $mysqli->prepare("SELECT * FROM galeri");
                $stmtv72q->execute();
                $resultv72q = $stmtv72q->get_result();
                if($resultv72q->num_rows === 0) {} else { while($rowv72q = $resultv72q->fetch_assoc()) {?>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="team-card">
                            <div class="team-card-img">
                                <img src="uploads/<?php echo $rowv72q['gambar'];?>" alt="Galeri <?php echo $rowpengaturanweb['namaweb'];?>" />
                            </div>
                        </div>
                    </div>
                <?php } } ?>
            </div>
        </div>
    </section>
    
    <section class="blog-details pt-0 pt-md-5 mb-2 mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                            <span style="font-size: 30px; color: #FF5733;">ARTIKEL</span>
                            <h3><?php echo $rowpengaturanweb['namaweb'];?></h3>
                        </div>
                    </div>
                </div>
                <?php 
                $stmt908q = $mysqli->prepare("SELECT * FROM berita");
                $stmt908q->execute();
                $result908q = $stmt908q->get_result();
                if($result908q->num_rows === 0) {} else { while($row908q = $result908q->fetch_assoc()) {?>
                    <div class="col-xl-4 col-lg-6 col-md-4 col-12">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <a href="lihatberita?id=<?php echo $row908q['id'];?>"><img src="uploads/<?php echo $row908q['foto'];?>" alt="<?php echo $row908q['judul'];?>" /></a>
                            </div>
                            <div class="blog-card-text-area">
                                <h4><a href="lihatberita?id=<?php echo $row908q['id'];?>"><?php echo $row908q['judul'];?></a></h4>
                                <p>
                                    <?php 
                                    $wordlayananv2 = explode(" ", $row908q['isi']);
                                    $tampilayananv2 = implode(" ", array_splice($wordlayananv2, 0, 50));
                                    echo $tampilayananv2;?>....
                                </p>
                                <a class="read-more-btn" href="lihatberita?id=<?php echo $row908q['id'];?>">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php } } ?>
            </div>
        </div>
    </section>
    
    <?php require 'system/bottom.php';?>
</body>

</html>