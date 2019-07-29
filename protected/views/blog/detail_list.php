<section class="this-article">
  <div class="prelative container blog">
    <!-- <div class="row"> -->
      <p class="kategori">Blog & Artikel / Resep</p><br>
      <p class="judul"><?php echo $dataBlog->description->title ?></p>
      <img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/blog/'. $dataBlog->image; ?>" alt="">
      <div class="isi pt-4 mt-3">
        <?php echo $dataBlog->description->content; ?>

        <?php if ($dataBlog->link != '' and $dataBlog->link != '#'): ?>
        <p>Source: <a target="_blank" href="<?php echo $dataBlog->link ?>"><?php echo $dataBlog->link ?></a></p>
        <?php endif ?>
      </div>
    <!-- </div> -->
    <!-- <div class="inline ">
     <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>">
      <p class="prev">Artikel sebelumnya</p></a>
      <div class="vertical-line"></div>
      <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>">
      <p class="next">Artikel berikutnya</p></a>
    </div> -->
    
  </div>
</section>

<section class="other-article">
  <div class="prelative container">
  <hr pt>
  <div class="inline row">
    <div class="col-md-30 col-30">      
      <p class="blog">Blog & Artikel Lainnya</p>
    </div>
    <div class="allblog col-md-30 col-30">      
      <a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang'=>Yii::app()->language)); ?>"><p>Lihat semua blog & artikel</p></a>
    </div>
  </div>
  <hr>

    <div class="row">

      <?php foreach ($dataBlogs->getData() as $key => $value): ?>
          <div class="box-content col-md-20">
              <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id'=>$value->id, 'lang'=>Yii::app()->language)); ?>">
                  <img class="w-100" src="<?php echo $this->assetBaseurl; ?>blogthumb.png" alt="">
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


    </div>

  </div>
</section>