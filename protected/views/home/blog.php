<section class="blog-sec-1">
    <div class="prelative container">
        <div class="row tops_blog_cat text-center">
            <div class="col-md-60">
                <div class="title">
                    <?php if (Yii::app()->language == 'en'): ?>
                        <p>Blogs & Articles</p>
                    <?php else: ?>
                        <p>Blog & Artikel</p>
                    <?php endif ?>
                </div>
                <div class="subtitle d-block mx-auto">
                    <?php if (Yii::app()->language == 'en'): ?>
                        <p>Please refer to various tips, recipes and articles about food and health</p>
                    <?php else: ?>
                        <p>Silahkan simak aneka tips, resep dan artikel seputar makanan dan kesehatan</p>
                    <?php endif ?>
                </div>
            </div>
        </div>

        <div class="row">
        <?php for($i=0;$i<4;$i++){ ?>
            <div class="box-content col-md-20">
                <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>blogthumb.png" alt=""></a>
                <div class="inline2">
                <p class="category">Resep </p>
                <div class="vertical-line"></div>
                <p class="date">21 - 06 - 2019</p>
                </div>
                <div class="title"><a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>"><p>Resep kentang goreng crispy bumbu sambal balado</p></a></div>
            </div>
            <div class="box-content col-md-20">
            <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>blogthumb.png" alt=""></a>
                <div class="inline2">
                <p class="category">Resep </p>
                <div class="vertical-line"></div>
                <p class="date">25 - 06 - 2019 </p>
                </div>        
                <div class="title"><a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>"><p>Resep cara memasak mash potato yang mudah dan singkat, namun kelas hotel.</p></a></div>
            </div>
            <div class="box-content col-md-20">
            <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>blogthumb.png" alt=""></a>
                <div class="inline2">
                <p class="category">Artikel </p>
                <div class="vertical-line"></div>
                <p class="date">01 - 07 - 2019 </p>
                </div>        
                <div class="title">
                <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>">
                <p>Pelajari tips khusus ini untuk menyimpan kentang goreng yang tidak habis, namun berniat untuk dikonsumsi lagi.</p></a></div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>