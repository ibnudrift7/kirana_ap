<?php 
$n_cat_prd = [
                // [
                //     'titles'=>'Produk Kentang Beku / Frozen Potato',
                //     'in_desc'=>'Aneka varian produk kentang beku impor berkualitas, dengan berbagai bentuk dan bumbu saji yang membuat hidangan sangat mudah diproses dan dinikmati.',
                // ],
                // [
                //     'titles'=>'Produk Sayuran Beku / Frozen',
                //     'in_desc'=>'Aneka varian produk sayuran beku impor berkualitas seperti kacang polong, jagung, wortel, jamur, asparagus, brokoli dan masih banyak lagi, untuk melengkapi hidangan utama anda.',
                // ],
                // [
                //     'titles'=>'Produk Buah Beku / Frozen Fruits',
                //     'in_desc'=>'Buah segar yang telah dikeringkan dan siap digunakan sebagai bahan baku pendukung masakan anda.',
                // ],
                // [
                //     'titles'=>'Produk Makanan Proses / Processed',
                //     'in_desc'=>'Aneka produk makanan proses siap dimasak seperti daging olahan berbentuk nugget, lumpia, samosa, fish cake, siomay dan masih banyak lagi.',
                // ],
                // [
                //     'titles'=>'Produk lainnya',
                //     'in_desc'=>'Berbagai pengembangan usaha PT. Kirana Food lainnya seperti daging sapi beku, ayam beku, udang beku, dan masih banyak lagi.',
                // ],
                
            ];
    // $d_cat_prd = array_chunk($n_cat_prd, 2);
?>
<section class="produk-sec-1">
    <div class="prelative container pt-5">
        <div class="row">
            <div class="col-md-60 pb-5">
                <div class="pt-5 mx-auto d-block text-center">
                    <?php if (Yii::app()->language == 'en'): ?>
                        <h4 class="title1">PRODUCTS</h4>
                    <?php else: ?>
                        <h4 class="title1">PRODUK</h4>
                    <?php endif ?>
                </div>
                <div class="pt-3 mx-auto d-block text-center">
                    <?php if (Yii::app()->language == 'en'): ?>
                    <h3 class="subtitle">Find frozen food products<br>delicious, guaranteed and hygienic</h3>
                    <?php else: ?>
                    <h3 class="subtitle">Temukan produk makanan beku<br>
                        yang lezat, terjamin dan higienis</h3>
                    <?php endif ?>
                </div>
                <div class="pt-5 mx-auto d-block text-center">
                    <?php if (Yii::app()->language == 'en'): ?>
                    <p class="text">At present, we are in an era where food creation and technology in the food world is developing very rapidly. Various variants / types of food are continuously being developed and PT. Kirana Food is near you to ensure that when you buy our choice of products, you not only feel delicious and delicious, but you can be sure you consume halal, healthy, hygienic and well-processed products.
                    </p>
                    <?php else: ?>
                    <p class="text">Saat ini, kita berada di sebuah era di mana kreasi makanan dan teknologi di dunia makanan berkembang dengan sangat pesat. Berbagai varian / jenis makanan terus menerus dikembangkan dan PT. Kirana Food ada di dekat anda untuk memastikan bahwa ketika anda membeli produk pilihan kami, anda tidak hanya merasa nikmat dan lezat, namun dapat dipastikan anda mengkonsumsi produk yang halal, sehat, higinis dan diproses dengan baik.
                    </p>
                    <?php endif ?>
                </div>
                <div class="pt-5 mx-auto d-block text-center">
                    <img src="<?php echo $this->assetBaseurl; ?>Layer-26.png" alt="">
                </div>
            </div>
            </div>
            <?php foreach ($data as $ke => $val): ?>
                <?php foreach ($val as $key => $value): ?>
                    <?php 
                    // $criteria = new CDbCriteria;
                    // $criteria->with = array('description');
                    // $criteria->addCondition('t.parent_id = :par_id');
                    // $criteria->params[':par_id'] = $value->id;
                    // $criteria->addCondition('t.type = :type');
                    // $criteria->params[':type'] = 'category';
                    // $criteria->order = 'sort ASC';

                    // $oneChild = PrdCategory::model()->find($criteria);
                    ?>
                    <?php // echo CHtml::normalizeUrl(array('/product/index', 'category'=> $value->id, 'child_category'=> $oneChild->id, 'lang'=>Yii::app()->language)); ?>
                    <?php if ($key == 0): ?>
                        <div class="row d-flex">
                        <div class="col-md-30 pt-4 px-0 order-1 order-sm-1">
                            <div class="box-produk">
                                <img class="img img-fluid w-100" src="<?php echo Yii::app()->baseUrl.'/images/category/'. $value->image; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-30 pt-4 px-0 order-2 order-sm-2">
                            <div class="box-produk">
                                <div class="content pl-5 pt-3 pr-5">
                                    <div class="pt-4">
                                        <h3 class="titlecard"><a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $value->id, 'lang'=>Yii::app()->language)); ?>"><?php echo $value->description->name ?></a></h3>
                                    </div>
                                    <div class="pt-2">
                                        <p class="text"><?php echo $value->description->desc ?></p>
                                    </div>
                                </div>
                                <div class="cardfooter d-table pl-5">
                                    <p class="textfooter d-table-cell align-middle"><a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $value->id, 'lang'=>Yii::app()->language)); ?>">Lihat varian produk</a></p>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php else: ?>
                        <div class="row d-flex">
                        <div class="col-md-30 pt-4 px-0 order-2 order-sm-1">
                            <div class="box-produk">
                                <div class="content pl-5 pt-3 pr-5">
                                    <div class="pt-4">
                                        <h3 class="titlecard"><a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $value->id, 'lang'=>Yii::app()->language)); ?>"><?php echo $value->description->name ?></a></h3>
                                    </div>
                                    <div class="pt-2">
                                        <p class="text"><?php echo $value->description->desc ?></p>
                                    </div>
                                </div>
                                <div class="cardfooter d-table pl-5">
                                <p class="textfooter d-table-cell align-middle"><a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $value->id, 'lang'=>Yii::app()->language)); ?>">Lihat varian produk</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-30 pt-4 px-0 order-1 order-sm-2">
                            <div class="box-produk">
                                <img class="img img-fluid w-100" src="<?php echo Yii::app()->baseUrl.'/images/category/'. $value->image; ?>" alt="">
                            </div>
                        </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>

            <div class="clear"></div>
    </div>
    <div class="pb-5"></div>
    <div class="pb-5"></div>
    <div class="pb-5"></div>
</section>