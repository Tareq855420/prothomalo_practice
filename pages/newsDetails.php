<?php include 'pages/includes/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-md-12">
                    <img src="<?php echo $newsDetails['image']; ?>" alt="" class="img-fluid" style="height: 400px">
                </div>
                <div class="col-md-12">
                    <div class="card-body" style="min-height: 300px">
                        <h2 class="font-weight-bold"><?php echo $newsDetails['title']; ?></h2>
                        <p><?php echo $newsDetails['description']; ?></p>
                        <p><?php echo $newsDetails['time']; ?></p>
                        <a href="javascript:void(0)" class="btn btn-outline-danger">Close Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php' ?>
