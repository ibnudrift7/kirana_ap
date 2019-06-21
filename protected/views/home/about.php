<?php
$about_cerf = [
    1 => [
        'tahun' => '2002',
        'judul' => 'Sertifikat Merk API',
        'certificate' => '#',
    ],
    [
        'tahun' => '2005',
        'judul' => 'Sertifikat Besi Beton SNI Polos',
        'certificate' => '#',
    ],
    [
        'tahun' => '2008',
        'judul' => 'Penghargaan Perusahaan Penanaman Modal Terbaik',
        'certificate' => '#',
    ],
    [
        'tahun' => '2010',
        'judul' => 'Sertifikat ISO 9001:2008',
        'certificate' => '#',
    ],
    [
        'tahun' => '2012',
        'judul' => 'The Best Quality Product & Service Excellent',
        'certificate' => '#',
    ]
];
?>

<?php
$about_pillars = [
    1 => [
        'gambar' => 'design-2-about_40',
        'judul' => 'Innovate',
        'isi' => 'We will push our limit to create innovations that set us apart from others.',
    ],
    [
        'gambar' => 'design-2-about_42',
        'judul' => 'Grow',
        'isi' => 'It’s not just our growth, but our aims to contribute in our Nation infrastructure growth.',
    ],
    [
        'gambar' => 'design-2-about_44',
        'judul' => 'Build',
        'isi' => 'We have a vision, we have all the resource to build and to become the biggest in the industry.',
    ],
    [
        'gambar' => 'design-2-about_46',
        'judul' => 'Focus',
        'isi' => 'Having all the success plans will only work successfully by focus and determination to what we do.',
    ]
];
?>

<?php
$about_facts = [
    1 => [
        'gambar' => 'design-2-about_116',
        'judul' => '30 years',
        'isi' => 'Of nation leading steel manufacturing industry in Indonesia.',
    ],
    [
        'gambar' => 'design-2-about_152',
        'judul' => '5,6 hectare',
        'isi' => 'Of steel manufacturing plant.',
    ],
    [
        'gambar' => 'design-2-about_176',
        'judul' => '165 people',
        'isi' => 'Human resources employed as API professional team.',
    ],
    [
        'gambar' => 'design-2-about_200',
        'judul' => '1050 tons',
        'isi' => 'Of steel capacity productions per month.',
    ]
];
?>

<section class="cover-inside about">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="content">
          <div class="title">
            <p>ABOUT US</p>
          </div>
          <div class="subtitle">
            <p>We are API...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-30">
        <div class="image sec-1"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>foto-about-sec-1.jpg" alt=""></div>
        <div class="start d-none d-sm-block">
          <p>Start an inquiry</p>
          <div class="talk">
            <a href="<?php echo CHtml::normalizeUrl(array('/home/contact', 'lang'=>Yii::app()->language)); ?>">Talk to us</a>
          </div>
        </div>
      </div>
      <div class="col-md-30">
        <div class="content-sec-1">
          <div class="title">
            <h5>History</h5>
          </div>
          <div class="isian">
            <p>PT. ASIAN PROFILE INDOSTEEL was founded in 1999, as a company engaged in steel milling (Integrated Steel Mill) in Surabaya, East Java. In 2002 PT. The API was approved by the Ministry of Justice and Human Rights that PT. API is stating to be committed and determined to compete in the National steel industry and continue to improve performance in product quality and service quality.</p>
            <p>Along with the development of the company and the world of steel - iron smelting infrastructure and manufacturing of steel - iron products, PT. The API continues to endlessly carry out product innovations, especially in the form of quality products, because ultimately quality will prove and provide long-term impact. This is evidenced by obtaining SNI certification with the number 07-2052-2002 NRP 106-005-080201 on August 8, 2005. This is clear evidence of the commitment of PT. API in quality.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-30">
        <div class="content-sec-2">
          <!-- <div class="title">
            <h5>History</h5>
          </div> -->
          <div class="isian">
            <p>In 2008, PT API obtained an Investment Award for the best small and medium scale company issued by BKPM and submitted by the Head of Investment Coordinating Board (BKPM), Mr. Muhammad Lutfi who was witnessed by the Vice President at that time Mr. Jusuf Kalla, and took place at the vice president's office.</p>
            <p>It did not stop there, in 2010 PT. The API, which continues to be committed to quality, finally obtained ISO: 9001 certification with the number JKT6009266 certified by the LLOYDS Register Quality Assurance and UKAS Management System.</p>
            <p>PT. The API also builds existing human resources by actively including management training and increasing motivation. In 2012, PT API included all employees in the Quality Empowerment System program guided by PT. Total Quality Indonesia, which subsequently carried out this event, received the award of the Best Quality Product & Service Excellence of the Year issued by KADIN (Chamber of Commerce and Industry).</p>
          </div>
        </div>
      </div>
      <div class="col-md-30">
        <div class="image-sec-2"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>foto-about-sec-12.jpg" alt=""></div>
      </div>
    </div>
  </div>
</section>

<section class="about-sec-2">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="title-head">
          <p>Certifications</p>
        </div>
      </div>
      <?php foreach($about_cerf as $key => $value): ?>
      <div class="col-md-15">
        <div class="content">
          <div class="tahun">
            <p><?php echo $value['tahun'] ?></p>
          </div>
          <div class="title">
            <p><?php echo $value['judul'] ?></p>
          </div>
          <div class="view"><a href="#">VIEW CERTIFICATE</a></div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<section class="about-sec-3">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="title-head">
          <p>Our Pillars Of Principles</p>
        </div>
        <div class="subtitle">
          <p>We’re a financial guide and guardian for our clients. These are the pillars that support that relationship.</p>
        </div>
      </div>
      <?php foreach($about_pillars as $key => $value): ?>
      <div class="col-md-15">
        <div class="content">
          <div class="image"><img src="<?php echo $this->assetBaseurl; ?><?php echo $value['gambar'] ?>.jpg" alt=""></div>
          <div class="title">
            <p><?php echo $value['judul'] ?></p>
          </div>
          <div class="isian">
            <p><?php echo $value['isi'] ?></p>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<section class="about-sec-4">
  <div class="row no-gutters">
    <div class="col-md-30">
      <div class="image"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>Layer-411.jpg" alt=""></div>
    </div>
    <div class="col-md-30">
      <div class="content-outer">
        <div class="content-inner">
          <div class="title-head">
            <p>API Facts</p>
          </div>
          <div class="pt-4 d-none d-sm-block"></div>
          <?php foreach($about_facts as $key => $value): ?>
          <div class="row">
            <div class="col-md-12">
              <div class="image-ul"><img src="<?php echo $this->assetBaseurl; ?><?php echo $value['gambar'] ?>.jpg" alt=""></div>
            </div>
            <div class="col-md-48">
              <div class="title-insss">
                <p><?php echo $value['judul'] ?></p>
              </div>
              <div class="isinya">
                <p><?php echo $value['isi'] ?></p>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-sec-5">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-30">
        <div class="content">
          <div class="title">
            <p>Vision</p>
          </div>
          <div class="isi">
            <p>Create and actualise a steel industry that is competitive and bringing major contribution to the Nation’s infrastructure development, by mastering nation resource based technology.</p>
          </div>
        </div>
      </div>
      <div class="col-md-30">
        <div class="content">
          <div class="title">
            <p>Mission</p>
          </div>
          <div class="isi">
            <p>Produce and fabricate various steel products to meet the needs of Nation’s construction / infrastructure and industrial sectors and develop an environmentally friendly steel industry.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>