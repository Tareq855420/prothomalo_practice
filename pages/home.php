<?php include 'includes/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($newses as $news) { ?>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="<?php echo $news['image']?>" alt="" class="card-img-top" style="height: 250px">
                    <div class="card-body" style="min-height: 300px">
                        <h3 class="card-title"><?php echo $news['title']?></h3>
                        <p class="text-justify"><?php echo $news['description']?></p>
                        <p class=""><?php echo $news['time']?></p>
                        <a href="action.php?pages=news-details&&news_id=<?php echo $news['id']; ?>" class="btn btn-outline-success float-right">আরো পড়ুন</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'?>
