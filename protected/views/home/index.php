<?php if (Yii::app()->language == 'en'): ?>
<?php else: ?>
<?php endif ?>

<section class="home-sec-1">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-60">
				<div class="title">
					<?php if (Yii::app()->language == 'en'): ?>
						<p>WHY KIRANA FOOD PRODUCTS</p>
					<?php else: ?>
						<p>MENGAPA PRODUK KIRANA FOOD</p>
					<?php endif ?>
				</div>
				<div class="subtitle">
					<?php if (Yii::app()->language == 'en'): ?>
					<p>What you can when you decide to buy products from PT. Kirana Food?</p>
					<?php else: ?>
					<p>Apa yang anda dapat ketika anda memutuskan untuk membeli produk dari PT. Kirana Food?</p>
					<?php endif ?>
				</div>
			</div>
			<div class="col-md-15 col-30">
				<div class="box-content">
					<div class="image">
						<img src="<?php echo $this->assetBaseurl; ?>png1.png" alt="">
					</div>
					<div class="content">
						<?php if (Yii::app()->language == 'en'): ?>
							<p>Featured Products From Selected Ingredientss</p>
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
						<?php if (Yii::app()->language == 'en'): ?>
							<p>Clean Process And Hygienic Products</p>
						<?php else: ?>
							<p>Proses Yang Bersih Dan Produk Higienis</p>
						<?php endif ?>
					</div>
				</div>
			</div>
			<div class="col-md-15 col-30">
				<div class="box-content">
					<div class="image">
						<img src="<?php echo $this->assetBaseurl; ?>png3.png" alt="">
					</div>
					<div class="content">
						<?php if (Yii::app()->language == 'en'): ?>
							<p>Free Pesticide/ Other Chemical Products</p>
						<?php else: ?>
							<p>Produk Yang Bebas Pestisida / Kimia Lainnya</p>
						<?php endif ?>	
					</div>
				</div>
			</div>
			<div class="col-md-15 col-30">
				<div class="box-content">
					<div class="image">
						<img src="<?php echo $this->assetBaseurl; ?>png4.png" alt="">
					</div>
					<div class="content">
						<?php if (Yii::app()->language == 'en'): ?>
							<p>Stock Consistency And Competitive Prices</p>
						<?php else: ?>
							<p>Konsistensi stok dan harga yang bersaing</p>
						<?php endif ?>
					</div>
				</div>
			</div>
			<div class="col-md-60">
				<div class="pelajari">
					<?php if (Yii::app()->language == 'en'): ?>
						<a href="<?php echo CHtml::normalizeUrl(array('/home/quality', 'lang'=>Yii::app()->language)); ?>">Learn Our Quality</a>
					<?php else: ?>
						<a href="<?php echo CHtml::normalizeUrl(array('/home/quality', 'lang'=>Yii::app()->language)); ?>">Pelajari Kualitas Kami</a>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-sec-2">
	<div class="prelative container">
		<div class="row">
			<div class="col-md-60">
				<div class="title">
					<?php if (Yii::app()->language == 'en'): ?>
						<p>ABOUT US</p>
					<?php else: ?>
						<p>TENTANG KAMI</p>
					<?php endif ?>
				</div>
				<div class="subtitle">
					<?php if (Yii::app()->language == 'en'): ?>
						<p>&quot;Quality, taste and consistency of products are the 3 keys to success that made us superior and trusted by the people since 2000&quot;</p>
					<?php else: ?>
						<p>“Kualitas, rasa dan konsistensi produk adalah 3 kunci keberhasilan yang membuat kami unggul dan dipercaya rakyat sejak tahun 2000”</p>
					<?php endif ?>
				</div>
				<div class="direct">
					<?php if (Yii::app()->language == 'en'): ?>
						<p>KEVIN DWIPUTRA – DIRECTOR</p>
					<?php else: ?>
						<p>KEVIN DWIPUTRA -  DIRECTOR</p>
					<?php endif ?>
				</div>
				<div class="vertical-line"></div>
				<div class="content">
					<?php if (Yii::app()->language == 'en'): ?>
						<p>PT. Kirana Food developed from the company&#39;s experience in offering a variety of imported quality French fries and slowly but surely transformed become a provider of various other frozen foods, with the dedication to offer the best products for the local and international community market.</p>
					<?php else: ?>
						<p>PT. Kirana Food berkembang dari pengalaman perusahaan dalam mempersembahkan aneka produk import kentang goreng (french fries) berkualitas dan dengan perlahan namun pasti, bertransformasi untuk menjadi penyedia berbagai makanan beku (frozen) lainnya, dengan dedikasi untuk mempersembahkan produk terbaik untuk pasar masyarakat lokal maupun internasional.</p>
					<?php endif ?>
				</div>
				<div class="pelajari">
					<?php if (Yii::app()->language == 'en'): ?>
						<a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">Learn About Our Company</a>
					<?php else: ?>
						<a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">Pelajari Tentang Perusahaan Kami</a>
					<?php endif ?>
				</div>
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
							<?php if (Yii::app()->language == 'en'): ?>
								<p>YOU NEED HELP OR MORE INFORMATION?</p>
							<?php else: ?>
								<p>ANDA BUTUH BANTUAN ATAU INFORMASI LEBIH?</p>
							<?php endif ?>
						</div>
						<div class="subtitle">
							<?php if (Yii::app()->language == 'en'): ?>
								<p>Let&#39;s talk to our team at Kirana Food. We will welcome all your questions and needs!</p>
							<?php else: ?>
								<p>Mari berbicara dengan tim kami di Kirana Food. Kami akan menyambut semua pertanyaan dan kebutuhan anda!</p>
							<?php endif ?>
						</div>
						<form class="fieldd">
							<div class="form-row">
								<div class="form-group col-md-15">
									<?php if (Yii::app()->language == 'en'): ?>
										<label for="inputEmail4">COMPANY NAME</label>
									<?php else: ?>
										<label for="inputEmail4">Nama Perusahaan</label>
									<?php endif ?>
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="form-group col-md-15">
									<?php if (Yii::app()->language == 'en'): ?>
										<label for="inputEmail4">Name</label>
									<?php else: ?>
										<label for="inputEmail4">Nama</label>
									<?php endif ?>
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="form-group col-md-15">
									<?php if (Yii::app()->language == 'en'): ?>
										<label for="inputEmail4">Telephon</label>
									<?php else: ?>
										<label for="inputEmail4">Telepon</label>
									<?php endif ?>
									<input type="nama" class="form-control" id="inputEmail4" placeholder="">
								</div>
								<div class="form-group col-md-15">
									<?php if (Yii::app()->language == 'en'): ?>
										<label for="inputEmail4">E-mail</label>
									<?php else: ?>
										<label for="inputEmail4">Email</label>
									<?php endif ?>
									<input type="email" class="form-control" id="inputEmail4" placeholder="">
								</div>
							</div>
						</form>
						<div class="tertarik">
							<?php if (Yii::app()->language == 'en'): ?>
								<p>INTERESTED TO KNOW ABOUT:</p>
							<?php else: ?>
								<p>TERTARIK UNTUK MENGETAHUI TENTANG:</p>
							<?php endif ?>
						</div>
						<form class="radioo">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								<?php if (Yii::app()->language == 'en'): ?>
									<label class="form-check-label" for="inlineRadio1">POTATO FRIES</label>
								<?php else: ?>
									<label class="form-check-label" for="inlineRadio1">KENTANG GORENG</label>
								<?php endif ?>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								<?php if (Yii::app()->language == 'en'): ?>
									<label class="form-check-label" for="inlineRadio2">NUGGETS & PROCESSED MEATS</label>
								<?php else: ?>
									<label class="form-check-label" for="inlineRadio2">NUGGET & DAGING PROSES</label>
								<?php endif ?>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								<?php if (Yii::app()->language == 'en'): ?>
									<label class="form-check-label" for="inlineRadio1">FROZEN VEGETABLES</label>
								<?php else: ?>
									<label class="form-check-label" for="inlineRadio1">SAYURAN BEKU</label>
								<?php endif ?>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								<?php if (Yii::app()->language == 'en'): ?>
									<label class="form-check-label" for="inlineRadio2">MORE</label>
								<?php else: ?>
									<label class="form-check-label" for="inlineRadio2">LAINNYA</label>
								<?php endif ?>
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