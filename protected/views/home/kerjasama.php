<section class="cover-inside kerjasama">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="content">
          <div class="title">
            <?php if (Yii::app()->language == 'en'): ?>
              <p>COOPERATION</p>
            <?php else: ?>
              <p>KERJASAMA</p>
            <?php endif ?>
          </div>
          <div class="subtitle">
            <?php if (Yii::app()->language == 'en'): ?>
              <p>We are open to all forms of possibilities in advancing the food industry in Indonesia</p>
            <?php else: ?>
              <p>Kami terbuka untuk segala bentuk kemungkinan dalam memajukan industri makanan di Indonesia</p>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="kerjasama-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-30">
        <div class="content-sec-1">
          <div class="title">
            <?php if (Yii::app()->language == 'en'): ?>
              <p>Let's discuss and find a probability to jointly advance the food industry in Indonesia.</p>
            <?php else: ?>
              <p>Mari berdiskusi dan menemukan sebuah probabilitas untuk bersama memajukan industri pangan di Indonesia.</p>
            <?php endif ?>
          </div>
          <div class="isi">
            <?php if (Yii::app()->language == 'en'): ?>
            <p>PT. Kirana Food realizes that to achieve success and perfection requires collaboration and support from various parties. We thank the principals / suppliers, partners distribution agencies, to consumers who have trusted PT. Kirana Food.</p>
            <p>PT. Kirana Food, which began and is known from frozen food, various french fries, has grown to frozen vegetables, frozen meats, and various other food needs. This is proof that the company continues to grow and always open up opportunities for new things.</p>
            <p>Let's contact us via Whatsapp chat or leave your contact in the online form, we will contact you so you can convey everything that is in the mind of your mind.</p>
            <?php else: ?>
            <p>PT. Kirana Food menyadari bahwa untuk mencapai sebuah kesuksesan dan kesempurnaan, perlu kolaborasi dan dukungan berbagai pihak. Kami berterima kasih kepada para rekan prinsipal / pemasok, rekan agen distribusi, hingga para konsumen yang telah mempercayai produk frozen food PT. Kirana Food. </p>
            <p>Produk PT. Kirana Food yang bermula dan dikenal dari frozen food aneka kentang goreng / french fries, telah berkembang hingga sayuran beku / frozen vegetables, daging beku / frozen meats, dan aneka kebutuhan bahan makanan lainnya. Hal ini adalah bukti bahwa perusahaan terus berkembang dan selalu membuka kesempatan terhadap hal baru.</p>
            <p>Mari hubungi kami melalui Whatsapp chat atau meninggalkan kontak anda di form online, kami akan menghubungi anda agar anda dapat menyampaikan segala sesuatu yang ada pada benak pikiran anda.</p>
            <?php endif ?>
          </div>
          <div class="contact">
            <?php if (Yii::app()->language == 'en'): ?>
              <p class="teks">Whatsapp Hotline (click to chat)</p>
              <img src="<?php echo $this->assetBaseurl; ?>walogo.png" alt="">
              <p class="nomor">0817 1712 2131</p>
            <?php else: ?>
              <p class="teks">Whatsapp Hotline (klik untuk chat)</p>
              <img src="<?php echo $this->assetBaseurl; ?>walogo.png" alt="">
              <p class="nomor">0817 1712 2131</p>
            <?php endif ?>
          </div>
        </div>
      </div>
      <div class="col-md-30">
        <div class="content-sec-2 mx-auto d-block rights_kerjasam">
          <?php if (Yii::app()->language == 'en'): ?>
            <p class="teks">Please fill out this form</p>
          <?php else: ?>
            <p class="teks">Silahkan mengisi formulir ini</p>
          <?php endif ?>
          <form class="fieldd">
              <div class="form-group">
									<?php if (Yii::app()->language == 'en'): ?>
                    <label for="inputEmail4" class="label">NAME</label>
									<?php else: ?>
                    <label for="inputEmail4" class="label">NAMA</label>
									<?php endif ?>
                  <input type="text" class="no-border" id="" placeholder="">
              </div>
              <div class="form-group">
									<?php if (Yii::app()->language == 'en'): ?>
                    <label for="inputEmail4" class="label">E-MAIL</label>
									<?php else: ?>
                    <label for="inputEmail4" class="label">EMAIL</label>
									<?php endif ?>
                  <input type="text" class="no-border" id="" placeholder="">
              </div>
              <div class="form-group">
									<?php if (Yii::app()->language == 'en'): ?>
                    <label for="inputEmail4" class="label">PHONE</label>
									<?php else: ?>
                    <label for="inputEmail4" class="label">PHONE</label>
									<?php endif ?>
                  <input type="nama" class="no-border" id="inputEmail4" placeholder="">
              </div>
              <div class="g-recaptcha" data-sitekey="6LdFaa8UAAAAALC0YiJdSKgneYMYlXF9GqPONLSJ"></div>
              <div class="py-2 my-1"></div>
              <button class="form-control">SUBMIT INQUIRY</button>
        </form>
        </div>
      </div>
    </div>
  
    <div class="text-center d-block mx-auto blocks_partners">
      <h4 class="mb-0">OUR PARTNERS</h4>
      <div class="py-2"></div>

      <?php 
      $arrs_client = array(
                    'lgo-kerjasam_03.jpg',
                    'lgo-kerjasam_04.jpg',
                    'lgo-kerjasam_05.jpg',
                    'lgo-kerjasam_06.jpg',
                    'lgo-kerjasam_07.jpg',
                    'lgo-kerjasam_08.jpg',
                    'lgo-kerjasam_09.jpg',
                    'lgo-kerjasam_12.jpg',
                    'lgo-kerjasam_13.jpg',
                    'lgo-kerjasam_14.jpg',
                    'lgo-kerjasam_15.jpg',
                    );
      ?>
      <ul class="list-inline text-center">
        <?php foreach ($arrs_client as $key => $value): ?>
        <li class="list-inline-item">
          <img src="<?php echo Yii::app()->baseUrl.'/asset/images/kerjasama/'. $value ?>" alt="" class="img img-fluid">
        </li>
        <?php endforeach ?>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="py-4"></div>
    <div class="my-2"></div>
  </div>
</section>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>