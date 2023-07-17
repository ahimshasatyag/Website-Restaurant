<?php 
	include 'header.php';
 ?>
 <style>
	/* Our Story Styles */
.ourStory__wrapper {
	display: flex;
	flex-direction: column;
	gap: 2rem;
}
.ourStory__title,
.ourGoals__title {
	font-size: 1.8rem;
	font-weight: 600;
	color: #000;
	margin-bottom: 1rem;
}
.ourStory__subtitle {
	font-size: 1.4rem;
	font-weight: 600;
	color: #4b4c4d;
	margin-bottom: 2rem;
}
.ourStory__text {
	font-size: 1.2rem;
	line-height: 1.4em;
	color: #4b4c4d;
	text-align: justify;
}
.ourGoals__text{
	font-size: 1.2rem;
	line-height: 1.4em;
	color: #4b4c4d;
}
@media only screen and (min-width: 768px) {
	.ourStory__wrapper {
		flex-direction: row;
		gap: 3rem;
	}
	.ourStory__img,
	.ourStory__info {
		flex: 1;
	}
	.ourStory__title,
	.ourGoals__title {
		font-size: 3.6rem;
	}
	.ourStory__subtitle {
		font-size: 1.8rem;
	}
	.ourStory__text,
	.ourGoals__text {
		font-size: 1.8rem;
		max-width: 800px;
	}
}

/* Our Goals Styles */

.ourGoals__info {
	text-align: left;
	margin-bottom: 5rem;
}
.ourGoals__imgs__wrapper img {
	object-fit: cover;
}
.ourGoals__imgs__wrapper {
	max-width: 800px;
	margin: 0 auto;
	display: grid;
	grid-template-columns: 1fr 1fr;
	grid-template-rows: 1fr 1fr;
	grid-row: auto;
	gap: 1rem;
}
.ourGoals__img1 {
	grid-row: 1/3;
}
@media only screen and (min-width: 768px) {
	.ourGoals__info {
		text-align: center;
	}
	.ourGoals__imgs__wrapper {
		gap: 2rem;
	}
	.ourGoals__text {
		margin: 0 auto;
	}
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

 </style>

	<!-- Our Story Section -->
	<section id="ourStory" data-aos="fade-up">
    <div class="container">
      <div class="ourStory__wrapper">

        <div class="ourStory__img">
          <img src="./image/about/LogoBisniskuy.png" style="width: 90%; height: 95%;" alt="shaif's cuisine">
        </div>
        <div class="ourStory__info">
          <h3 class="ourStory__title">
            Tentang Kami
          </h3>
          <p class="ourStory__subtitle">
		  Didirikan pada July 2023
          </p>
          <p class="ourStory__text">
		  BISNISKUY merupakan sebuah restoran yang menyediakan menu makanan maupun minuman yang bisa memuaskan kebutuhan para pengunjung dari rasa.
                restoran ini dikelola secara komersial dan profesional dengan pelayanan yang eksklusif.
                BISNISKUY juga memiliki mimpi besar untuk membawa restoran Indonesia terkenal di kancah internasional.
				<br><br>
                Restoran BISNISKUY memiliki cita rasa yang lezat, juga menghidangkan makanan yang terlihat bagus ketika difoto. Harga makanannya juga cukup terjangkau, bisa menikmati hidangan lezat dan mewah.
                Kualitas makanan telah terbukti mampu memanjakan lidah para pengunjung setianya.
                Restoran BISNISKUY juga menyediakan fasilitas desain modern dengan menikmati suasana di iringi musik yang menjadi nyaman dan aman bagi para pengunjung. 
                Tunggu apa lagi buruan segera datang restoran kami, BISNISKUY!!
          </p>
        </div>
      </div>
    </div>
  </section><br><br><br>
  <!-- End Our Story Section -->
  <!-- Our Goals -->
  <section id="ourGoals" data-aos="fade-down">
    <div class="container">
      <div class="ourGoals__info">
        <h3 class="ourGoals__title">
          Pencapaian
        </h3>
        <p class="ourGoals__text">
		Kami akan menjual makanan dan minuman yang lezat dan luar biasa yang memenuhi kriteria kualitas tertinggi, kesegaran, dan musim sambil menggabungkan tradisi memasak modern-kreatif dan klasik. Dengan menampilkan kehangatan, keanggunan, efisiensi, keterampilan, profesionalisme, dan integritas dalam pekerjaan kami, kami akan terus melayani konsumen kami dengan layanan yang luar biasa. Agar setiap pelanggan yang datang melalui pintu kami terkesan dengan pengalaman mereka di BISNISKUY dan bersemangat untuk kembali lagi.
        </p>
      </div>
      <div class="ourGoals__imgs__wrapper" data-aos="fade-up">
        <div class="ourGoals__img1">
          <img src="./image/about/gambar1.png" alt="kitchen img">
        </div>
        <div class="ourGoals__img2">
          <img src="./image/about/gambar2.png" alt="kitchen img">
        </div>
        <div class="ourGoals__img3">
          <img src="./image/about/gambar3.png" alt="kitchen img">
        </div>
      </div>
    </div>
  </section><br><br><br>
  <!-- End Our Goals -->
		<!-- ======= Contact Section ======= -->
        <section id="lokasi" class="lokasi">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2 style="font-size: 30px; color: #000;"><b>OUTLET</b></h2>
                </div>

                <div>
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.24125320542!2d110.40805701477318!3d-6.9808334949569595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b3b4b6a2d57%3A0xf02464c5d01b6806!2sBumi%20Arjuna%20Coffee%20%26%20Eatery!5e0!3m2!1sid!2sid!4v1648146287510!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
                </div>
        </section><!-- End section -->
</body>
<br><br><br>

<?php 
include 'footer.php';
?>