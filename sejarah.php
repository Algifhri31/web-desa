<?php require 'system/koneksi.php';?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $rowpengaturanweb['namaweb'];?> - Sejarah</title>
    <?php require 'system/head.php';?>
</head>

<body>

    <?php require 'system/menu.php';?>

    <section class="uni-banner">
            <div class="container">
                <div class="uni-banner-text-area">
                    <h1>KATALOG RUMAH BUMN </h1>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li>Katalog</li>
                    </ul>
                </div>
            </div>
        </section>


       <section class="katalog pt-100 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="katalog-text-area">
                    <div class="default-section-title">
                        <h4>Katalog Produk</h4>
                    </div>

                    <div class="row">
                        <?php
                            // Ambil data katalog produk dari database
                            $stmt = $mysqli->prepare("SELECT * FROM katalog LIMIT 3");
                            $stmt->execute();
                            $result = $stmt->get_result();

                            // Cek jika ada data
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <div class="col-md-4">
                                        <div class="katalog-item">
                                            <img src="uploads/<?php echo $row['gambar']; ?>" alt="<?php echo $row['judul']; ?>"
                                                class="img-fluid" />
                                            <h5><?php echo $row['judul']; ?></h5>
                                            <p><?php echo $row['deskripsi']; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo '<p>Tidak ada katalog yang tersedia.</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <br><br>
    <?php require 'system/bottom.php';?>
</body>

</html>