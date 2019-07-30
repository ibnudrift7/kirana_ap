<section class="blog-sec-1">

    <div class="prelative container">
        <div class="row tops_blog_cat text-center">
            <div class="col-md-60">
                <div class="title">
                    <p>Blog & Artikel</p>
                </div>
                <div class="subtitle d-block mx-auto">
                    <p>Silahkan simak aneka tips, resep dan artikel seputar makanan dan kesehatan</p>
                </div>
            </div>
        </div>

        <div class="row">

        <?php foreach ($dataBlog->getData() as $key => $value): ?>
            <div class="box-content col-md-20">
                <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=>$value->id, 'lang'=>Yii::app()->language)); ?>">
                    <img class="w-100" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(331,208, '/images/blog/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="<?php echo $value->description->title ?>">
                </a>

                <div class="inline2">
                <p class="category"><?php echo ($value->topik_id == 1)? 'Resep':'Artikel' ?></p>
                <div class="vertical-line"></div>
                <p class="date"><?php echo date('d - m - Y', strtotime($value->date_input)) ?></p>
                </div>

                <div class="title">
                    <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=>$value->id, 'lang'=>Yii::app()->language)); ?>">
                    <p><?php echo $value->description->title ?></p>
                    </a>
                </div>
            </div>
        <?php endforeach ?>
         <?php $this->widget('CLinkPager', array(
            'pages' => $dataBlog->getPagination(),
            'header'=>'',
            // 'nextPageLabel'=>'',
            // 'prevPageLabel'=>'',
            'maxButtonCount'=>5,
        )) ?>

        </div>
    </div>
</section>