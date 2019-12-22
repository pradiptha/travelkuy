<?php if ($view == 'Dashboard') : ?>
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
        if (isset($_SESSION['error'])) {
            if ($_SESSION['error'] == 0) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">'
                    . $_SESSION['error_data'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
            } elseif ($_SESSION['error'] == 1) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">'
                    . $_SESSION['error_data'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
            }
        }
        unset($_SESSION['error']);
        unset($_SESSION['error_data']);

        $sql = "SELECT count(*) as jumlah_hotel, sum(jumlah_kamar) as total_kamar  FROM hotel WHERE id_ph = '$id_ph'";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
        ?>
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $result['jumlah_hotel'] ?></h3>

                        <p>Total Hotels</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-key"></i>
                    </div>
                    <a href="" type="button" class="small-box-footer" data-toggle="modal" data-target="#tambahhotel">Add hotels
                        <i class="fas fa-plus-circle"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>67</h3>

                        <p>Total Booking Rooms</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <a href="totalbookingrooms.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?= $result['total_kamar'] ?></h3>

                        <p>Total Available Rooms</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <a href="availableroom.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
<?php elseif ($view == 'hotel') : ?>
<?php endif ?>