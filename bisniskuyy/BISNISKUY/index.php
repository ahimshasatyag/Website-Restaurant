<?php 
include 'header.php';
?>
<style>
/*--------------------------------------------------------------
  # Portfolio
--------------------------------------------------------------*/
.portfolio .portfolio-item {
    margin-bottom: 30px;
  }
  .portfolio #portfolio-flters {
    padding: 0;
    margin: 0 auto 20px auto;
    list-style: none;
    text-align: center;
  }
  .portfolio #portfolio-flters li {
    cursor: pointer;
    display: inline-block;
    padding: 8px 15px 10px 15px;
    font-size: 14px;
    font-weight: 600;
    line-height: 1;
    color: #444444;
    margin-bottom: 5px;
    transition: all 0.3s ease-in-out;
    border-radius: 3px;
  }
  .portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
    color: #151515;
    background: #f5760f;
  }
  .portfolio #portfolio-flters li:last-child {
    margin-right: 0;
  }
  .portfolio .portfolio-wrap {
    transition: 0.3s;
    position: relative;
    overflow: hidden;
    z-index: 1;
    background: rgba(21, 21, 21, 0.6);
  }
  .portfolio .portfolio-wrap::before {
    content: "";
    background: rgba(21, 21, 21, 0.6);
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    transition: all ease-in-out 0.3s;
    z-index: 2;
    opacity: 0;
  }
  .portfolio .portfolio-wrap img {
    transition: all ease-in-out 0.3s;
  }
  .portfolio .portfolio-wrap .portfolio-info {
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    transition: all ease-in-out 0.3s;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: flex-start;
    padding: 20px;
  }
  .portfolio .portfolio-wrap .portfolio-info h4 {
    font-size: 20px;
    color: #fff;
    font-weight: 600;
  }
  .portfolio .portfolio-wrap .portfolio-info p {
    color: rgba(255, 255, 255, 0.7);
    font-size: 14px;
    padding: 0;
    margin: 0;
    font-style: italic;
  }
  .portfolio .portfolio-wrap .portfolio-links {
    text-align: center;
    z-index: 4;
  }
  .portfolio .portfolio-wrap .portfolio-links a {
    color: #fff;
    margin: 0 5px 0 0;
    font-size: 28px;
    display: inline-block;
    transition: 0.3s;
  }
  .portfolio .portfolio-wrap .portfolio-links a:hover {
    color: #f5760f;
  }
  .portfolio .portfolio-wrap:hover::before {
    opacity: 1;
  }
  .portfolio .portfolio-wrap:hover img {
    transform: scale(1.2);
  }
  .portfolio .portfolio-wrap:hover .portfolio-info {
    opacity: 1;
  }
  	/* FOOTER */
.footer-basic {
  padding:40px 0;
  background-color:#f9f9f9;
  color: #333333;
  box-shadow: 1px 5px 4px 3px ;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1.6;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {
  margin-top:15px;
  text-align:center;
  font-size:13px;
  color:#000;
  margin-bottom:0;
}
.circle-img{
     border-radius: 50%;
}
.icon-style{
     color: rgb(5, 5, 5);
     font-size: 30px;
}
.shadow-bg{
     background-color: #fff;
	 opacity: 0.6;
}
.height-5{
     height: 250px;
}

	/* hero section styles */
  .hero__wrapper {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column-reverse;
	gap: 5rem;
}
.hero__left__wrapper {
	max-width: 350px;
}
.hero__imgWrapper {
	max-width: 400px;
	width: 80%;
	margin: 0 auto;
}
.hero__heading {
	font-family: Poppins;
	font-weight: 600;
	line-height: 1.4em;
	text-align: center;
	font-size: 1.8rem;
	margin-bottom: 1.5rem;
	padding-left: 20px;
	color: #000;
}
.hero__info {
	text-align: center;
	font-size: 1.4rem;
	margin-bottom: 1.5rem;
	color: #000;
	padding-left: 20px;
}
.button__wrapper {
	text-align: center;
}
.btn {
	color: white;
	font-family: Poppins;
	font-weight: 500;
	border-radius: 8px;
	font-size: 1.4rem;
	padding: 1.2rem 2rem;
}
.primary-btn {
	color: #fff;
	padding-left: 20px;
	background: #f5760f;
}
.primary-btn:hover{
  background-color: #f28a5e;
  color: white;
}
@media only screen and (min-width: 700px) {
	.btn {
		padding: 1.3rem 2rem;
		font-size: 2rem;
	}
}

@media only screen and (min-width: 768px) {
	.hero__wrapper {
		flex-direction: row;
		gap: 0;
	}
	.hero__left {
		flex: 3;
	}
	.hero__right {
		flex: 4;
	}
	.hero__heading {
		font-size: 3.6rem;
		margin-bottom: 2rem;
		text-align: left;
	}

	.hero__info {
		margin-bottom: 2rem;
		text-align: left;
		font-size: 1.8rem;
	}

	.button__wrapper {
		text-align: left;
	}
	.hero__imgWrapper {
		max-width: none;
		width: 90%;
	}
}
@media only screen and (max-width: 900px) {
	.hero__left,
	.hero__right {
		flex: 1;
	}
}

/* WhyUs Section */
.whyUs__wrapper {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	gap: 4rem;
}
.whyUs__left {
	text-align: center;
}
.whyUs__title {
	font-family: Poppins;
	font-size: 1.8rem;
	color: #000;
	font-weight: 500;
	margin-bottom: 1rem;
}
.whyUs__text {
	font-size: 1.4rem;
  color: #4b4c4d;
}
.whyUs__right {
	text-align: center;
}
.whyUs__items__wrapper {
	display: grid;
	grid-template-columns: 1fr 1fr;
	gap: 1rem;
}
.whyUs__item {
	background: #f5760f;
	padding: 2rem;
	border-radius: 12px;
}
.whyUs__item__icon {
	max-width: 56px;
	margin: 0 auto;
	margin-bottom: 1rem;
}
.whyUs__item__text {
	font-family: Poppins;
	font-size: 1.4rem;
	font-weight: 500;
	color: #000;
}
@media only screen and (min-width: 768px) {
	.whyUs__wrapper {
		flex-direction: row;
		max-width: 900px;
		margin: 0 auto;
	}
	.whyUs__left {
		flex: 4;
		text-align: left;
	}
	.whyUs__right {
		flex: 3;
	}
	.whyUs__title {
		font-size: 3.6rem;
		margin-bottom: 2rem;
	}
	.whyUs__text {
		font-size: 1.8rem;
		line-height: 1.4em;
	}
	.whyUs__items__wrapper {
		gap: 1.5rem;
	}
	.whyUs__item {
		padding: 2rem;
	}
	.whyUs__item__icon {
		max-width: 65px;
		margin-bottom: 1.5rem;
	}
	.whyUs__item__text {
		font-size: 1.8rem;
	}
}

/* End WhyUs Section */

/* JUMBOTRON */
.text_jumbtron{
  margin-top: 190px;
  text-align: center;
  margin-bottom: 20px;
  color: white;
  font-size: 50px;
}
.text_jumbtronn{
  margin-top: 20px;
  text-align: center;
  color: white;
  font-size: 30px;
}
.text_jumbtronnn{
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 20px;
  text-align: center;
  background-color: #f5760f;
  width: 20%;
  border-radius: 8px;
  color: white;
}
.text_jumbtronnn:hover{
  background-color: #f28a5e;
  color: white;
}
</style>
<!-- IMAGE -->
<div  style="background-image: url(image/home/background1.png); background-attachment: fixed; height: 600px; width: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
<div class="container flex-column d-flex justify-content-center"style=" height: 600px;">
        <div class="home_jumbotron" >
          <h1 class="text_jumbtron">
            Welcome to <span class="font-weight-bold">Restoran BISNISKUY</span>
          </h1>
          <h3 class="text_jumbtronn">
            Choose Delicious Food and Your Favorite
          </h3>
          <div class="text_jumbtronnn">
            <a href="produk.php" class="btn">DAFTAR MENU</a>
          </div>
        </div>
        <a href="#" class="gotoupbtn"><i class="far fa-arrow-alt-circle-up"></i></a>
      </div>
    </div>
	</div><br><br>

  <!-- Hero Section -->
  <section id="hero">
			<div class="containerr">
			<div class="hero__wrapper">
				<div class="hero__left" data-aos="fade-left">
				<div class="hero__left__wrapper">

					<h1 class="hero__heading">Tradisi restoran</h1>
					<p class="hero__info">
					Restoran kami menawarkan berbagai macam pengalaman makanan di lingkungan santapan santai dan mewah.
					</p>
					<div class="button__wrapper">
					<a href="./produk.php" class="btn primary-btn">Daftar Menu</a>
					</div>
				</div>
				</div>
				<div class="hero__right" data-aos="fade-right">
				<div class="hero__imgWrapper">
					<img src="image/Makanan.png">
				</div>
				</div>
			</div>
			</div>
		</section>
<br><br><br>
<!-- PRODUK TERBARU -->
	<section id="special" class="portfolio">
            <div class="container" data-aos="fade-up">
            <h2 style="text-align: center;margin-bottom: 30px; color: #000;"><b>SPECIAL MENU</b></h2>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="image/home/SpecialMenu1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>BAKSO</h4>
                            <p>Bakso adalah jenis bola daging yang lazim ditemukan pada masakan Indonesia. Dibuat dari campuran daging sapi giling dan tepung tapioka, tetapi ada juga bakso yang terbuat dari daging ayam, babi, ikan, udang bahkan daging kerbau.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="image/home/SpecialMenu2.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>NASI GORENG</h4>
                            <p>Nasi goreng adalah makanan berupa nasi yang digoreng dan dicampur dalam minyak goreng, margarin, atau mentega. Biasanya ditambah dengan kecap manis, bawang merah, bawang putih, asam jawa, lada dan bahan lainnya; seperti telur, daging ayam, dan kerupuk.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="image/home/SpecialMenu3.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>MIE AYAM</h4>
                            <p>Mi ayam adalah hidangan khas Indonesia yang terbuat dari mi gandum yang dibumbui dengan daging ayam yang biasanya dipotong dadu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="image/home/SpecialMenu4.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>GADO GADO</h4>
                            <p>Gado-gado adalah makanan khas Betawi berisi sayur-sayuran yang direbus, irisan telur dan tahu, serta ditaburi bawang goreng dan kerupuk, dll</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="image/home/SpecialMenu5.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>RENDANG</h4>
                            <p>Rendang adalah hidangan berbahan dasar daging yang dihasilkan dari proses memasak suhu rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="image/home/SpecialMenu6.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>SOP BUNTUT</h4>
                            <p>Sop buntut adalah salah satu masakan populer dalam masakan Indonesia, terbuat dari potongan ekor sapi yang dibumbui kemudian direbus dan dimasukkan ke dalam kuah kaldu sapi yang agak bening bersama irisan kentang, wortel, tomat, daun bawang, seledri dan taburan bawang goreng.</p>
                        </div>
                    </div>
                </div>

            </div>
            </section><br><br><br>

            <!-- Why Us section -->
              <section id="whyUs">
                <div class="container">
                  <div class="whyUs__wrapper">
                    <div class="whyUs__left" data-aos="fade-right">
                      <h2 class="whyUs__title">
                      Mengapa Memilih Makanan Kami
                      </h2>
                      <p class="whyUs__text">
                        
Kualitas Layanan, Makanan, Suasana, dan Nilai Uang adalah elemen utama untuk memilih restoran. BISNISKUY adalah tempat restoran yang terletak di kota Semarang dengan pemandangan yang menawan, suasana sempurna, dan makanan lezat.
                      </p>
                    </div>
                    <div class="whyUs__right" data-aos="fade-left">
                      <div class="whyUs__items__wrapper">
                        <div class="whyUs__item">
                          <div class="whyUs__item__icon">
                            <img src="./image/home/dish.png" alt="quality Food">
                          </div>
                          <p class="whyUs__item__text">Quality Food</p>
                        </div>
                        <div class="whyUs__item">
                          <div class="whyUs__item__icon">
                            <img src="./image/home/taste.png" alt="Classical taste">
                          </div>
                          <p class="whyUs__item__text">Classical taste</p>
                        </div>
                        <div class="whyUs__item">
                          <div class="whyUs__item__icon">
                            <img src="./image/home/chef.png" alt="Skilled chef">
                          </div>
                          <p class="whyUs__item__text">Skilled chef</p>
                        </div>
                        <div class="whyUs__item">
                          <div class="whyUs__item__icon">
                            <img src="./image/home/food-service.png" alt="Best service">
                          </div>
                          <p class="whyUs__item__text">Best service</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            <!-- End Why Us section -->


<br>
<br>
<br>
<br>
<?php 
include 'footer.php';
?>