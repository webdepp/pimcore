<section class="area-image">

    <?php $this->template("/includes/area-headlines.php"); ?>

    <a href="<?= $this->image("image")->getThumbnail("galleryLightbox"); ?>" class="thumbnail">
        <?= $this->image("image", [
            "thumbnail" => "content"
        ]); ?>
    </a>

</section>