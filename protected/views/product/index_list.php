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
<section class="prod-det-1">
  <div class="prelative container">
    <div class="atas row">
      <div class="col-md-60">
        <div class="title">
          <p>Produk</p>
        </div>
        <div class="subtitle">
          <p>Produk <?php echo $oneChild->description->name.' Food' ?></p>
        </div>

        <div class="image features_image">
          <img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1057,497, '/images/category/'.$oneChild->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
        </div>

      </div>
    </div>
    <div class="bawah row">
      <div class="col-md-60">
        <div class="title-kat">
          <p>Kategori</p>
        </div>
      </div>
      <div class="col-md-15">
        <ul>
          <?php foreach ($allCategory as $key => $value): ?>
          <li <?php if ($value->id == $_GET['category']): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $value->id, 'lang'=>Yii::app()->language)); ?>"><?php echo $value->description->name ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="col-md-45">
        <div class="row">

        <?php if (count($product->getData()) > 0): ?>
          <?php foreach ($product->getData() as $key => $value): ?>
          <div class="col-md-20">
            <div class="box-content">
              <div class="image">
                <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id, 'category'=> $_GET['category'], 'lang'=>Yii::app()->language)); ?>">
                  <img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(239,235, '/images/product/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                  </a>
              </div>
              <div class="isi">
                <div class="item">
                  <p>ITEM #<?php echo $value->kode ?></p>
                </div>
                <div class="title">
                  <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id, 'category'=> $_GET['category'], 'child_category'=> $_GET['child_category'], 'lang'=>Yii::app()->language)); ?>">
                  <p><?php echo $value->description->name ?></p>
                  </a>
                </div>
                <div class="subtitle">
                  <p><?php echo $value->description->subtitle ?></p>
                </div>
              </div>
              
            </div>
          </div>
          <?php endforeach ?>
        <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>