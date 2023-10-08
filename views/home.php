<?php include "header.php";?>

    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/bb22.png" alt="" class="w-100" height="450">
            </div>

            <div class="carousel-item ">
                <img src="assets/img/f1.jpg" alt="" class="w-100" height="450">
            </div>

            <div class="carousel-item">
                <img src="assets/img/bannarrrr.jpg" alt="" class="w-100" height="450">
            </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
           <span class="carousel-control-prev-icon"></span>
        </a>

        <a href="#slider" class="carousel-control-next" data-bs-slide="prev">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="py-5 bg-warning-subtle">
        <div class="container">
            <div class="row">
                <div class="card card-body border-0 rounded-0 bg-warning-subtle text-center">
                    <h4 class="fw-bold display-6">Popular Product</h4>
                    <hr/>
                </div>
            </div>
            <div class="row mt-3">
                <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-3">
                    <div class="card shadow ">
                        <img src="<?php echo $product['image']; ?>" alt="" class="card-img-top " height="200"/>
                        <div class="card-body bg-success-subtle">
                            <h4><?php echo $product['name']; ?> </h4>
                            <p>tk.<?php echo $product['price']; ?></p>
                            <hr/>
                            <a href="action.php?page=detail&&id=<?php echo $product['id']; ?>" class="btn btn-outline-success">Details</a>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>

<?php include "footer.php";?>


