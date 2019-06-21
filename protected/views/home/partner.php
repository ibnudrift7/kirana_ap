<section class="cover-inside partner">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="content">
          <div class="title">
            <p>our partners</p>
          </div>
          <div class="subtitle">
            <p>We welcome any opportunities</p>
            <p>to work and together build our</p>
            <p>nation’s infrastructure.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="partner-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="title-head">
          <p>Some of our notable partners in infrastructure industry</p>
        </div>
      </div>
      <?php for($i=1;$i<=13;$i++){?>
      <div class="col-md-15">
        <div class="content">
          <div class="image">
            <img class="" src="<?php echo $this->assetBaseurl; ?>partner<?php echo $i?>.jpg" alt="">
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="pb-5"></div>
  <div class="pb-5"></div>
</section>
