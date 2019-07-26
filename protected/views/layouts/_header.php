<?php 
    $e_activemenu = $this->action->id;
    $controllers_ac = $this->id;
    $session=new CHttpSession;
    $session->open();
    $login_member = $session['login_member'];

    $active_menu_pg = $controllers_ac.'/'.$e_activemenu;
?>


<!-- <section class="header-top">
    <div class="prelative container-header">
        <div class="row">
            <div class="col-md-45">

            </div>
            <div class="col-md-15">
                <div class="box-telp">
                    <p>
                        <a href="#"><span><img src="<?php echo $this->assetBaseurl; ?>phone-white.png" alt=""></span> 081 6550 2656</a>
                    </p>
                </div>
                <div class="contact">
                    <a href="#">
                        <p>CONTACT</p>
                    </a>
                </div>
                <div class="bahasa">
                    <p>
                        <a href="#"><span class="active">EN</span></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>IN</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->


<header class="head <?php if ($active_menu_pg != 'home/index'): ?>insides-head<?php endif ?>">
  <div class="prelative container cont-header mx-auto">
    <div class="row">
      <div class="col-md-27">
        <div class="image">
          <a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>"><img src="<?php echo $this->assetBaseurl; ?>Layer-25.png" alt=""></a>
        </div>
      </div>
      <div class="col-md-29 garis-header">
        <div class="menu-block-top">
          <div class="click">
            <p>CLICK TO CHAT<span><img src="<?php echo $this->assetBaseurl; ?>wa-atas.png" alt=""></span><a href="#">0817 1712 2131</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <?php
              $get = $_GET; $get['lang'] = 'en';
              ?>
              <a href="<?php echo $this->createUrl($this->route, $get) ?>" class="lang <?php if (Yii::app()->language == 'en'): ?>active<?php endif ?>" title="ENG">EN</a> | 
              <?php
              $get = $_GET; $get['lang'] = 'id';
              ?>
              <a href="<?php echo $this->createUrl($this->route, $get) ?>" class="lang <?php if (Yii::app()->language == 'id'): ?>active<?php endif ?>" title="ID">ID</a>
            </p>
          </div>
        </div>
        <div class="menu-block-bottom">
          <ul class="list-inline">
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">Tentang Kami</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/produk', 'lang'=>Yii::app()->language)); ?>">Produk</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/quality', 'lang'=>Yii::app()->language)); ?>">Kualitas</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/blog', 'lang'=>Yii::app()->language)); ?>">Blog & Articles</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/kerjasama', 'lang'=>Yii::app()->language)); ?>">Kerjasama</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/kontak', 'lang'=>Yii::app()->language)); ?>">Hubungi Kami</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 mx-auto">
        <div class="image-kanan-head"><img src="<?php echo $this->assetBaseurl; ?>Layer-26.png" alt=""></div>
      </div>
    </div>
  </div>
</header>

<!-- <div class="menu-block-bottom text-right cmenubot">
  <ul class="list-inline text-right">
    <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
    <li class="list-inline-item menu"><a href="#">tentang kami</a></li>
    <li class="list-inline-item menu"><a href="#">produk</a></li>
    <li class="list-inline-item menu"><a href="#">proses & kualitas</a></li>
    <li class="list-inline-item menu"><a href="#">hubungi kami</a></li>
  </ul>
</div> -->

<section id="myAffix" class="header-affixs affix-top">
  <!-- <div class="clear height-15"></div> -->
  <div class="prelative container cont-header mx-auto">
    <div class="row">
      <div class="col-md-10 col-sm-10">
        <div class="lgo_web_headrs_wb">
          <a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">
            <img src="<?php echo $this->assetBaseurl; ?>Layer-25-copy.png" alt="" class="img img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-50 col-sm-50">
        <div class="text-right"> 
          <div class="menu-taffix">
            <ul class="list-inline d-inline">
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">Tentang Kami</a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/produk', 'lang'=>Yii::app()->language)); ?>">Produk</a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/quality', 'lang'=>Yii::app()->language)); ?>">Kualitas</a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/blog', 'lang'=>Yii::app()->language)); ?>">Blog & Articles</a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/kerjasama', 'lang'=>Yii::app()->language)); ?>">Kerjasama</a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/kontak', 'lang'=>Yii::app()->language)); ?>">Hubungi Kami</a></li>
            </ul>
            <div class="click">
            <p><span><img src="<?php echo $this->assetBaseurl; ?>wa-atas.png" alt=""></span><a href="#">0817 1712 2131</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <?php
              $get = $_GET; $get['lang'] = 'en';
              ?>
              <a href="<?php echo $this->createUrl($this->route, $get) ?>" class="lang <?php if (Yii::app()->language == 'en'): ?>active<?php endif ?>" title="ENG">EN</a> | 
              <?php
              $get = $_GET; $get['lang'] = 'id';
              ?>
              <a href="<?php echo $this->createUrl($this->route, $get) ?>" class="lang <?php if (Yii::app()->language == 'id'): ?>active<?php endif ?>" title="ID">ID</a>
            </p>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section>

<header class="header-mobile homepage_head">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>"><img src="<?php echo $this->assetBaseurl; ?>Layer-25-copy.png" alt="" class="img img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
      <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">Tentang Kami</a></li>
      <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/produk', 'lang'=>Yii::app()->language)); ?>">Produk</a></li>
      <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/quality', 'lang'=>Yii::app()->language)); ?>">Kualitas</a></li>
      <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/blog', 'lang'=>Yii::app()->language)); ?>">Blog & Articles</a></li>
      <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/kerjasama', 'lang'=>Yii::app()->language)); ?>">Kerjasama</a></li>
      <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/kontak', 'lang'=>Yii::app()->language)); ?>">Hubungi Kami</a></li>    
      <li class="nav-item">
      <?php
      $get = $_GET; $get['lang'] = 'en';
      ?>
      <a href="<?php echo $this->createUrl($this->route, $get) ?>" title="ENG">EN | </a>
      <?php
      $get = $_GET; $get['lang'] = 'id';
      ?>
      <a href="<?php echo $this->createUrl($this->route, $get) ?>" title="Bahasa">ID</a>
      </li>
    </ul>
  </div>
  </nav>
</header>

<script type="text/javascript">
  $(function(){

  var sn_width = $(window).width();
  if (sn_width > 1150) {

      $(window).scroll(function(){
        var sntop1 = $(window).scrollTop();

        if(sntop1 > 115){
          // console.log(sntop1);
          $('.header-affixs').removeClass('affix-top').addClass('affix');
          // $('.header-affixs').addClass('affix');
        }else{
          $('.header-affixs.affix').removeClass('affix').addClass('affix-top');
          // $('body').css('padding-top', '0px');
        }
      });

    }

  });
</script>



<script>
  $(document).ready(function(){
    $("#headerproduct").css("display","none");
  });
</script>

