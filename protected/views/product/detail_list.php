<?php 
$criteria = new CDbCriteria;
$criteria->with = array('description');
$criteria->addCondition('t.id = :par_id');
$criteria->params[':par_id'] = $_GET['category'];
$criteria->addCondition('t.type = :type');
$criteria->params[':type'] = 'category';
$criteria->order = 'sort ASC';
$oneChild = PrdCategory::model()->find($criteria);
?>
<section class="bread">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-50 col-50">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/produk')); ?>">Produk</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/produk')); ?>">Produk Kentang Beku</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $oneChild->description->name. ' Food'; ?></li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-10 col-10">
                <div class="kembali">
                    <a href="#" onclick="javascript:window.history.back();">
                        <p>Kembali</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="detail-inq">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-60">
                <div class="title-kat">
                <p>Kategori</p>
                </div>
            </div>
        </div>
        <div class="list row">
            <div class="col-md-15">
                <ul>
                <?php foreach ($allCategory as $key => $value): ?>
                  <li <?php if ($value->id == $_GET['child_category']): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $_GET['category'], 'child_category'=> $value->id, 'lang'=>Yii::app()->language)); ?>"><?php echo $value->description->name ?></a></li>
                  <?php endforeach ?>
                </ul>
            </div>
            <div class="col-md-45">
                <div class="content row">
                    <div class="col-md-45">
                        <div class="item">
                            <p>Item #<?php echo $data->kode ?></p>
                        </div>
                        <div class="title">
                            <p><?php echo $data->description->name ?></p>
                        </div>
                        <div class="subtitle">
                            <p><?php echo $data->description->subtitle ?></p>
                        </div>
                    </div>
                    <div class="col-md-15">
                        <div class="image img-fluid"><img src="<?php echo $this->assetBaseurl; ?>kirana.jpg" alt=""></div>
                    </div>
                    <div class="col-md-60">
                        <div class="showimage img-fluid">
                            <img src="<?php echo Yii::app()->baseUrl.'/images/product/'. $data->image; ?>" alt="" class="img img-fluid">
                        </div>
                        <div class="desk">
                            <p>DESKRIPSI</p>
                        </div>
                        <div class="content">
                            <?php echo $data->description->desc ?>
                        </div>
                        <?php 
                        $datas = unserialize($data->data);
                        ?>
                        <div class="row detail-inq">
                            <div class="col-md-60"><hr></div>
                            <div class="col-md-30">
                                <p>Content / Carton</p>
                            </div>
                            <div class="col-md-30">
                                <p><?php echo $datas['carton'] ?></p>
                            </div>
                            <div class="col-md-60"><hr></div>
                        </div>
                        <div class="row detail-inq">
                            <div class="col-md-30">
                                <p>Berat</p>
                            </div>
                            <div class="col-md-30">
                                <p><?php echo $data->berat ?></p>
                            </div>
                            <div class="col-md-60"><hr></div>

                        </div>
                        <div class="form-inquiri">
                            <p>INQUIRY FORM</p>
                        </div>
                        <div class="form-inq-bawah">
                            <p>Tinggalkan kontak anda, agar kami dapat menghubungi anda terkait ketertarikan anda terhadap produk ini.</p>
                        </div>
                        <form class="fieldd">
                            <div class="form-row">
                                <div class="form-group col-md-20">
                                    <label for="inputEmail4">NAMA</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group col-md-20">
                                    <label for="inputEmail4">TELEPON</label>
                                    <input type="nama" class="form-control" id="inputEmail4" placeholder="">
                                </div>
                                <div class="form-group col-md-20">
                                    <label for="inputEmail4">EMAIL</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="">
                                </div>
                            </div>
                            <!-- <div class="submit"><button class="btn button">SUBMIT</button></div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="for-submit">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-15">
            </div>
            <div class="col-md-45">
                <div class="submit"><button class="btn button">SUBMIT</button></div>
                
            </div>
        </div>
    </div>
</section>

<section class="detail-inq-sec2">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-45 col-43">
                <div class="lainya">
                    <p>Produk Kirana Food Lainnya</p>
                </div>
            </div>
            <div class="col-md-15 col-17">
                <div class="lihat-semua">
                <a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $_GET['category'], 'child_category'=> $_GET['child_category'], 'lang'=>Yii::app()->language)); ?>">
                    <p>Lihat Semua</p></a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($product as $key => $value): ?>
            <div class="col-md-15">
                <div class="box-content">
                <div class="image">
                <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id, 'category'=> $_GET['category'], 'child_category'=> $_GET['child_category'], 'lang'=>Yii::app()->language)); ?>">
                  <img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(239,235, '/images/product/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                  </a>
                <div class="item">
                    <p>Item #<?php echo $value->kode ?></p>
                </div>
                <div class="title">
                <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id, 'category'=> $_GET['category'], 'child_category'=> $_GET['child_category'], 'lang'=>Yii::app()->language)); ?>">
                    <p><?php echo $value->description->name ?></p></a>
                </div>
                <div class="subtitle">
                    <p><?php echo $value->description->subtitle ?></p>
                </div>
                </div>
            </div>

        </div>
        <?php endforeach ?>
    </div>
</section>

