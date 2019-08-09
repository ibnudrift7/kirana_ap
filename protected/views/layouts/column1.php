<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<?php echo $this->renderPartial('//layouts/_header', array()); ?>


<!-- Start fcs -->
<?php
    $criteria=new CDbCriteria;
    $criteria->with = array('description');
    $criteria->addCondition('description.language_id = :language_id');
    $criteria->addCondition('active = 1');
    $criteria->params[':language_id'] = $this->languageID;
    $criteria->group = 't.id';
    $criteria->order = 't.id ASC';
    $slide = Slide::model()->with(array('description'))->findAll($criteria);

?>
<div class="fcs-wrapper outers_fcs_wrapper prelatife wrapper-slide">
    <div class="container cont-fcs">
        <div id="myCarousel_home" class="carousel carousel-fade" data-ride="carousel" data-interval="4500">
            <div class="carousel-inner" style="overflow: visible;">
                <?php for ($i=1; $i <= 5; $i++) { ?>
                <div class="carousel-item <?php if ($i == 1): ?>active<?php endif ?> home-slider-new">
                    <div class="row no-gutters">
                        <div class="col-md-18 order-2 order-sm-1">
                            <div class="slider-container">
                                <div class="slider-kiri px-2">
                                    <div class="content">
                                        <?php if (Yii::app()->language == 'en'): ?>
                                            <h4>Present Fried Potato Products and Various Favorite Quality Frozen Foods of the Indonesian People Since 2000</h4>
                                            <p>Kirana Food has been present and has become a favorite of the people with various french fries such as shoe string fries, potato wedges, waffle fries, hasbrown, crinkle cut fries, and various other frozen ready- to-eat products.</p>
                                        <?php else: ?>
                                            <h4>Mempersembahkan Produk Kentang Goreng dan Aneka Makanan Frozen Berkualitas Favorit Masyarakat Indonesia Sejak tahun 2000</h4>
                                            <p>Kirana Food telah hadir dan menjadi kegemaran rakyat dengan berbagai produk kentang goreng (french fries) seperti shoe string fries, potato wedges, waffle fries, hasbrown, crinkle cut fries, serta berbagai produk frozen siap santap lainnya. </p>
                                        <?php endif ?>
                                        <div class="lihat">
                                            <?php if (Yii::app()->language == 'en'): ?>
                                                <a href="<?php echo CHtml::normalizeUrl(array('/home/produk', 'lang'=>Yii::app()->language)); ?>">See Products</a>
                                            <?php else: ?>
                                                <a href="<?php echo CHtml::normalizeUrl(array('/home/produk', 'lang'=>Yii::app()->language)); ?>">Lihat Produk</a>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-42 order-1 order-sm-2">
                            <img class="w-100 featureds_image" src="<?php echo $this->assetBaseurl; ?>slides/slides<?php echo $i ?>.jpg" alt="" style="background-repeat: no-repeat; background-size: cover;">
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- <div class="image-bawah-slide"><img src="<?php echo $this->assetBaseurl; ?>Layer-30.png" alt=""></div> -->
            </div>
            <ol class="carousel-indicators">
                <?php for ($i=0; $i <= 4; $i++) { ?>
                <li data-target="#myCarousel_home" data-slide-to="<?php echo $i ?>" <?php if ($i == 0): ?>class="active"<?php endif ?>></li>
                <?php } ?>
            </ol>
            <!-- <div class="carousel-button-native">
                <div class="prelative container">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel_home" class="active" data-slide-to="0"></li>
                        <li data-target="#myCarousel_home" data-slide-to="1"></li>
                    </ol>
                </div>
            </div> -->
        </div>

    </div>
</div>

<!-- End fcs -->

<?php echo $content ?>

<?php echo $this->renderPartial('//layouts/_footer', array()); ?>

<script type="text/javascript">
    $(document).ready(function(){
        
        if ($(window).width() >= 768) {
            // var $item = $('#myCarousel_home.carousel .carousel-item'); 
            // var $wHeight = $(window).height();
            // $item.eq(0).addClass('active');
            // $item.height($wHeight); 
            // $item.addClass('full-screen');

            // $('#myCarousel_home.carousel img.d-none.d-sm-block').each(function() {
            //   var $src = $(this).attr('src');
            //   var $color = $(this).attr('data-color');
            //   $(this).parent().css({
            //     'background-image' : 'url(' + $src + ')',
            //     'background-color' : $color,
            //     'background-repeat' : 'no-repeat'
            //   });
            //   $(this).remove();
            // });

            // $(window).on('resize', function (){
            //   $wHeight = $(window).height();
            //   $item.height($wHeight);
            // });

            // $('#myCarousel_home.carousel').carousel({
            //   interval: 4000,
            //   pause: "false"
            // });
        }

    });
</script>

<script>
        $(document).ready(function (){
            $("#click").click(function (){
                $('html, body').animate({
                    scrollTop: $("#div1").offset().top
                }, 2000);
            });
        });
    </script>

<?php $this->endContent(); ?>
