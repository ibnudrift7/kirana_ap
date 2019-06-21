<section class="cover-blog">
  <div class="prelative container py-5">
    <div class="container2 mx-auto py-5">
      <div class="row py-5">
        <div class="col-md-60 text-center pt-3">
          <button class="profil mx-auto">Blog</button>
        </div>
        <div class="col-md-60 text-center pt-4">
          <h2 class="mx-auto">Aneka Artikel Dan Tips Seputar Dunia Bahan Bangunan Oleh Arsimetris Djaja Banjarmasin.</h2>  
        </div>
      </div>
    </div>
  </div>
</section>

<section class="blog-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
        <div class="title-blog">
          <div class="title">
            <p>Kategori blog arsimetris djaja</p>
            <hr>
            <ul>
              <li><a href="#">
                Semua
              </a> 
            </li>
              <li><a href="#">
                Tips & Trik
              </a> 
            </li>
              <li><a href="#">
                Artikel Informasi
              </a> 
            </li>
              <li><a href="#">
                Berita
              </a> 
            </li>
            </ul>
          </div>
        </div>
        <div class="py-4"></div>
      </div>
      <div class="col-md-45">
        <div class="title-blog-right">
          <div class="title-left">
            <p>Menampilkan: <span>Semua Artikel (26 artikel)</span></p>
          </div>
          <div class="title-right">
            <p></p>
          </div>
          <hr>
        </div>
        <div class="row box-blog pt-3">
          <?php for($i=0;$i<=11;$i++){?>
            <div class="col-md-20">
              <div class="blog-box-container pb-5">
                <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail')); ?>">
                  <img class="img w-100" src="<?php echo $this->assetBaseurl; ?>2-blog_03.jpg" alt="">
                </a>
                <div class="kategori-blog pt-4">
                  <p>- Tips & Trik</p>
                </div>
                <div class="title-blog">
                  <a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail')); ?>">
                  <h1>Cara cepat membersihkan perabot saniter kotor</h1>
                  </a>
                </div>
                <div class="baca-selanjutnya pt-2">
                  <p><a href="<?php echo CHtml::normalizeUrl(array('/home/blog_detail')); ?>">BACA ARTIKEL</a></p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>