<section class="this-article">
  <div class="prelative container blog">
    <!-- <div class="row"> -->
      <p class="kategori">Blog & Artikel  /  Resep</p><br>
      <p class="judul">Resep kentang goreng crispy bumbu sambal balado</p>
      <img src="<?php echo $this->assetBaseurl; ?>blogdetail.png" alt="" class="gambar">
      <div class="isi">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis imperdiet interdum. Aenean sit amet sem vitae nisl consequat egestas. Morbi aliquam quam eget tortor bibendum cursus. Nulla luctus ligula id commodo dapibus. Etiam non ultrices dolor. Aliquam turpis risus, porta vel est quis, pharetra euismod neque. Integer bibendum ante sed dolor auctor tristique. Curabitur maximus lacus nisi, at iaculis mi venenatis vel. Donec consectetur cursus ante.</p>
        <p><b>Cras tincidunt</b><br> Diam in convallis auctor, ligula ex luctus diam, sit amet varius felis leo ut ipsum. Phasellus massa felis, semper vel dolor sit amet, sollicitudin aliquet enim. Etiam posuere tristique purus ut tristique. Morbi ac dolor ut quam cursus consequat.</p>
        <p><b>Morbi a dignissim nisi</b><br> Vestibulum pretium tempor est vel elementum. Etiam ut facilisis tellus, ut tincidunt felis. Nulla laoreet ligula lectus, nec eleifend risus ornare sit amet. Phasellus et erat rhoncus, bibendum sapien sed, ornare arcu. Pellentesque ultrices non neque quis viverra. Cras in velit lacus.</p>
      </div>
    <!-- </div> -->
    <div class="inline ">
     <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>">
      <p class="prev">Artikel sebelumnya</p></a>
      <div class="vertical-line"></div>
      <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>">
      <p class="next">Artikel berikutnya</p></a>
    </div>
  </div>
</section>

<section class="other-article">
  <div class="prelative container">
  <hr pt>
  <div class="inline row">
    <div class="col-md-30">      
      <p class="blog">Blog & Artikel Lainnya</p>
    </div>
    <div class="allblog col-md-30">      
      <a href="<?php echo CHtml::normalizeUrl(array('/home/blog', 'lang'=>Yii::app()->language)); ?>"><p>Lihat semua blog & artikel</p></a>
    </div>
  </div>
  <hr>

    <div class="row">
      <div class="box-content col-md-20">
      <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>"><img src="<?php echo $this->assetBaseurl; ?>blogthumb.png" alt=""></a>
        <div class="inline2">
          <p class="category">Resep </p>
          <div class="vertical-line"></div>
          <p class="date">21 - 06 - 2019</p>
        </div>
        <div class="title"><a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>"><p>Resep kentang goreng crispy bumbu sambal balado</p></a></div>
      </div>
      <div class="box-content col-md-20">
      <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>"><img src="<?php echo $this->assetBaseurl; ?>blogthumb.png" alt=""></a>
        <div class="inline2">
          <p class="category">Resep </p>
          <div class="vertical-line"></div>
          <p class="date">25 - 06 - 2019 </p>
        </div>        
        <div class="title"><a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>"><p>Resep cara memasak mash potato yang mudah dan singkat, namun kelas hotel.</p></a></div>
      </div>
      <div class="box-content col-md-20">
      <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>"><img src="<?php echo $this->assetBaseurl; ?>blogthumb.png" alt=""></a>
        <div class="inline2">
          <p class="category">Artikel </p>
          <div class="vertical-line"></div>
          <p class="date">01 - 07 - 2019 </p>
        </div>        
        <div class="title"><a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail', 'lang'=>Yii::app()->language)); ?>"><p>Pelajari tips khusus ini untuk menyimpan kentang goreng yang tidak habis, namun berniat untuk dikonsumsi lagi.</p></a></div>
      </div>
    </div>

  </div>
</section>