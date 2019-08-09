<?php if (Yii::app()->language == 'en'): ?>

<?php else: ?>


<?php endif ?>

<section class="home-sec-1">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-60">
				<div class="title">
					<p>MENGAPA PRODUK KIRANA FOOD</p>
				</div>
				<div class="subtitle">
					<p>Apa yang anda dapat ketika anda memutuskan untuk membeli produk dari PT. Kirana Food?</p>
				</div>
			</div>
			<div class="col-md-15 col-30">
				<div class="box-content">
					<div class="image">
						<img src="<?php echo $this->assetBaseurl; ?>png1.png" alt="">
					</div>
					<div class="content">
					<?php if (Yii::app()->language == 'en'): ?>
					<p>tes</p>
					<?php else: ?>
					<p>Produk Unggulan Dari Bahan Baku Pilihan</p>
					<?php endif ?>
						
					</div>
				</div>
			</div>
			<div class="col-md-15 col-30">
				<div class="box-content">
					<div class="image">
						<img src="<?php echo $this->assetBaseurl; ?>png2.png" alt="">
					</div>
					<div class="content">
						<p>Proses Yang Bersih Dan Produk Higienis</p>
					</div>
				</div>
			</div>
			<div class="col-md-15 col-30">
				<div class="box-content">
					<div class="image">
						<img src="<?php echo $this->assetBaseurl; ?>png3.png" alt="">
					</div>
					<div class="content">
						<p>Produk Yang Bebas Pestisida / Kimia Lainnya</p>
					</div>
				</div>
			</div>
			<div class="col-md-15 col-30">
				<div class="box-content">
					<div class="image">
						<img src="<?php echo $this->assetBaseurl; ?>png4.png" alt="">
					</div>
					<div class="content">
						<p>Konsistensi stok dan harga yang bersaing</p>
					</div>
				</div>
			</div>
			<div class="col-md-60">
				<div class="pelajari"><a href="<?php echo CHtml::normalizeUrl(array('/home/quality', 'lang'=>Yii::app()->language)); ?>">Pelajari Kualitas Kami</a></div>
			</div>
		</div>
	</div>
</section>

<section class="home-sec-2">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-60">
				<div class="title">
					<p>TENTANG KAMI</p>
				</div>
				<div class="subtitle">
					<p>“Kualitas, rasa dan konsistensi produk adalah 3 kunci keberhasilan yang membuat kami unggul dan dipercaya rakyat sejak tahun 2000”</p>
				</div>
				<div class="direct">
					<p>KEVIN DWIPUTRA -  DIRECTOR</p>
				</div>
				<div class="vertical-line"></div>
				<div class="content">
					<p>PT. Kirana Food berkembang dari pengalaman perusahaan dalam mempersembahkan aneka produk import kentang goreng (french fries) berkualitas dan dengan perlahan namun pasti, bertransformasi untuk menjadi penyedia berbagai makanan beku (frozen) lainnya, dengan dedikasi untuk mempersembahkan produk terbaik untuk pasar masyarakat lokal maupun internasional.</p>
				</div>
				<div class="pelajari"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">Pelajari Tentang Perusahaan Kami</a></div>
			</div>
		</div>
	</div>
</section>

<section class="home-sec-3">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-60">
				<div class="box-content">
					<div class="content">
						<div class="title">
							<p>ANDA BUTUH BANTUAN ATAU INFORMASI LEBIH?</p>
						</div>
						<div class="subtitle">
							<p>Mari berbicara dengan tim kami di Kirana Food. Kami akan menyambut semua pertanyaan dan kebutuhan anda!</p>
						</div>
						<form class="fieldd">
							<div class="form-row">
								<div class="form-group col-md-15">
									<label for="inputEmail4">Nama Perusahaan</label>
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="form-group col-md-15">
									<label for="inputEmail4">Nama</label>
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="form-group col-md-15">
									<label for="inputEmail4">Telepon</label>
									<input type="nama" class="form-control" id="inputEmail4" placeholder="">
								</div>
								<div class="form-group col-md-15">
									<label for="inputEmail4">Email</label>
									<input type="email" class="form-control" id="inputEmail4" placeholder="">
								</div>
							</div>
						</form>
						<div class="tertarik">
							<p>TERTARIK UNTUK MENGETAHUI TENTANG</p>
						</div>
						<form class="radioo">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								<label class="form-check-label" for="inlineRadio1">KENTANG GORENG / POTATO FRIES</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								<label class="form-check-label" for="inlineRadio2">NUGGETS & PROCESSED MEATS</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								<label class="form-check-label" for="inlineRadio1">FROZEN VEGETABLES</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								<label class="form-check-label" for="inlineRadio2">LAINNYA</label>
							</div>
						</form>
						<button class="form-control">submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="kontak-sec-3">
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="100%" height="588" id="gmap_canvas" src="https://maps.google.com/maps?q=PT%20Kirana%20Food&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <div class="clear"></div>
    </div>
</div>