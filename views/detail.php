<?php include "header.php";?>
<section class="py-5 bg-warning-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="<?php echo $product['image']; ?>"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1><?php echo $product['name'] ?></h1>
                    <p>tk.<?php echo $product['price'] ?></p>
                    <p><?php echo $product['description'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php";?>
