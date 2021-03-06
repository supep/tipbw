    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                
				<div class="item active">
                    <img class="img-responsive" src="<?php echo base_url('assets/images');?>/header_0.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated0">
                    		  <span>Selamat Datang di <br><br><strong>Teknologi Informasi</strong></span>
                    	    </h1>
                            <a href="#portfolio" class="page-scroll btn btn-primary animated0">Read More</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
				<div class="item">
                    <img class="img-responsive" src="<?php echo base_url('assets/images');?>/header_1.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated1">
                                <span>Membangun Negeri melalui <br><br><strong>Teknologi</strong></span>
                            </h1>
                            <a href="#portfolio" class="page-scroll btn btn-primary animated1">Read More</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->

            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    <!-- Start Portfolio Section -->
        <section id="portfolio" class="portfolio-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Fasilitas</h3>
                            <p>Terdapat Fasilitas yang dapat menunjang pembelajaran</p>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        
                        <!-- Start Portfolio items -->
                        <ul id="portfolio-list">
                            <li>
                                <div class="portfolio-item">
                                    <img src="<?php echo base_url('assets/images');?>/portfolio/baca_1.png" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Ruang Baca</h4>
										<a href="#portfolio-modal1" data-toggle="modal" class="link-1"><i class="fa fa-compress"></i></a>
										<a href="#portfolio-modal1" data-toggle="modal" class="link-2"><i class="fa fa-compress"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-item">
                                    <img src="<?php echo base_url('assets/images');?>/portfolio/kelas_1.png" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Ruang Kelas</h4>
										<a href="#portfolio-modal2" data-toggle="modal" class="link-1"><i class="fa fa-compress"></i></a>
										<a href="#portfolio-modal2" data-toggle="modal" class="link-2"><i class="fa fa-compress"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-item">
                                    <img src="<?php echo base_url('assets/images');?>/portfolio/lab_1.png" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Laboratorium</h4>
										<a href="#portfolio-modal3" data-toggle="modal" class="link-1"><i class="fa fa-compress"></i></a>
										<a href="#portfolio-modal3" data-toggle="modal" class="link-2"><i class="fa fa-compress"></i></a>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                        <!-- End Portfolio items -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->    
    <!-- Start Portfolio Modal Section -->
        <div class="section-modal modal fade" id="portfolio-modal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Ruang Baca</h3>
                            <p>Memiliki berbagai macam koleksi mulai dari fiksi hingga materi perkuliahan, dari bahan cetak hingga koleksi digital seperti CD-ROM, CD, VCD dan DVD. Selain itu juga menyediakan publikasi serial harian dan bulanan seperti surat kabar dann majalah.</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <img src="<?php echo base_url('assets/images');?>/portfolio/baca_1.png" class="img-responsive" alt="..">
                        </div>
						<div class="col-md-6">
                            <img src="<?php echo base_url('assets/images');?>/portfolio/baca_1.png" class="img-responsive" alt="..">
                        </div>
                        
                    </div><!-- /.row -->
                </div>                
            </div>
        </div>
		
		<div class="section-modal modal fade" id="portfolio-modal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Ruang Kelas</h3>
                            <p>Setiap ruang kelas dilengkapi dengan pendingin ruangan dan LCD serta akses internet gratis yang dapat mendukung kegiatan akademis mahasiswa</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <img src="<?php echo base_url('assets/images');?>/portfolio/kelas_1.png" class="img-responsive" alt="..">
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo base_url('assets/images');?>/portfolio/kelas_1.png" class="img-responsive" alt="..">
                        </div>
                        
                    </div><!-- /.row -->
                </div>                
            </div>
        </div>
		
		<div class="section-modal modal fade" id="portfolio-modal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Laboratorium</h3>
                            <p>Terdapat 2 laboratorium komputer (Lab Keamanan Siber dan Lab Teknologi Smart City). Seluruh Komputer telah dilengkapi oleh perangkat lunak yang dapat digunakan untuk mendukung kegiatan praktikum maupun kegiatan akademis lainnya.</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <img src="<?php echo base_url('assets/images');?>/portfolio/lab_1.png" class="img-responsive" alt="..">
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo base_url('assets/images');?>/portfolio/lab_1.png" class="img-responsive" alt="..">
                        </div>
                        
                    </div><!-- /.row -->
                </div>                
            </div>
        </div>
        <!-- End Portfolio Modal Section -->
    <!-- Start About Us Section -->
    <section id="about-us" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>Mengapa Teknologi Informasi?</h3>
							<div class = "text-justify">
							<br>
								<ol>
									<li style="list-style:decimal;">Saat ini banyak terdapat <i>hacker</i> di dunia siber. oleh karena itu diperlukan ahli keamanan siber dan aplikasi untuk mengurangi penipuan(<i>fraud</i>).</li>
									<li style="list-style:decimal;">Program Studi Teknologi Informasi dapat mencetak lulusan yang mempunyai keahlian di bidang layanan awan, yang berkontribusi dalam meningkatkan kuantitas dan kualitas SDM, sehingga dapat meningkatkan efisiensi operasional organisasi.</li>
									<li style="list-style:decimal;">Memiliki kemampuan untuk menghasilkan SDM yang ahli dalam bidang integrasi sistem sebagai solusi untuk mendukung penanganan aplikasi-aplikasi di instansi pemerintahan (E-Gov).</li>
									<li style="list-style:decimal;">Memfasilitasi otomatisasi proses bisnis di organisasi untuk menghadapi perkembangan teknologi internet yang pesat dalam rangka mendukung pengembangan Teknologi <i>Smart City</i>.</li>
								</ol>
							</div>
                        </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-6">
                    <div class="welcome-section text-center">
                        <h3>Visi</h3>
                        <div class="border"></div>
                        <br>
						<li class = "text-justify">Menjadi Program Studi Teknologi Informasi yang unggul dalam bidang keamanan siber dan Teknologi berbasis Internet (<i>Internet of Things</i>) untuk mendukung pembangunan <i>Smart City</i> secara berkelanjutan hingga tahun 2022.</li>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="welcome-section text-center">
                        <h3>Misi</h3>
                        <div class="border"></div>
                        <br>
						<ol class = "text-justify">
							<li style="list-style:decimal;">Menyelenggarakan pendidikan dan pengajaran Teknologi Informasi dengan menggunakan kurikulum yang adaptif, berorientasi ke masa depan dan didukung SDM yang berkualitas serta fasilitas yang memadai.</li>
							<li style="list-style:decimal;">Melaksanakan penelitian yang bermutu di bidang Keamanan Siber dan <i>Internet of Things</i> untuk teknologi <i>Smart City</i>.</li>
							<li style="list-style:decimal;">Menjalin kemitraan dengan instansi dalam maupun luar negeri.</li>
							<li style="list-style:decimal;">Menyelenggarakan pengabdian kepada masyarakat berupa pelatihan, penyuluhan, penerapan hasil penelitian untuk pengembangan potensi dan pemberdayaan masyarakat daerah.</li>
						</ol>
                    </div>
                </div>
                
            </div><!-- /.row -->            
            
        </div><!-- /.container -->
    </section>
    <!-- End About Us Section -->


    <!-- Start About Us Section 2 -->
    <div class="about-us-section-2">
        <div class="container">
            <div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h3>Profil Lulusan</h3>
						<br>
					</div>
				</div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-mobile-phone"></i>
                            <div class="feature-content">
                                <h4>Analis Keamanan Aplikasi</h4>
                                <p>(Application Security Analist)</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-2 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-globe"></i>
                            <div class="feature-content">
                                <h4>Spesialis Internet of Things</h4>
                                <p>(IoT Specialist)</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
					<div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-cloud"></i>
                            <div class="feature-content">
                                <h4>Pengembangan Layanan Awan</h4>
                                <p>(Cloud Service Developer)</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-2 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-exchange"></i>
                            <div class="feature-content">
                                <h4>Spesialis Integrasi Sistem</h4>
                                <p>(System Integration Specialist)</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
					<div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-lock"></i>
                            <div class="feature-content">
                                <h4>Spesialis Keamanan Siber</h4>
                                <p>(Cyber Security Specialist)</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-2 -->
                </div><!-- /.row --> 
        </div>
    </div>
    <!-- Start About Us Section 2 -->

	<?php
		$key = array(1, 2, 3, 4, 5);
		$testimonial = array();
		$testimonial[0][0] = "Wiranto";
		$testimonial[0][1] = "Menko Polhukam";
		$testimonial[0][2] = "\"Kegiatan siber nasional terutama pengamanan siber ini merupakan keharusan, keniscayaan..\"";
		$testimonial[0][3] = "face_1.png";
		$testimonial[1][0] = "John McCarthy";
		$testimonial[1][1] = "Pakar Komputasi MIT";
		$testimonial[1][2] = "\"Suatu hari nanti komputasi akan menjadi infrastruktur publik seperti listrik dan telepon\"";
		$testimonial[1][3] = "face_2.png";
		$testimonial[2][0] = "Rudiantara";
		$testimonial[2][1] = "Menkominfo";
		$testimonial[2][2] = "\"Smart City menciptakan perubahan sistem lebih efektif dan efisien dalam lembaga pemerintahan\"";
		$testimonial[2][3] = "face_3.png";
		$testimonial[3][0] = "Bill Gates";
		$testimonial[3][1] = "Microsoft";
		$testimonial[3][2] = "\"Jika kita tidak memecahkan masalah keamanan, maka orang-orang akan ragu\"";
		$testimonial[3][3] = "face_4.png";
		$testimonial[4][0] = "Darwin Widjaja";
		$testimonial[4][1] = "Praktisi Teknologi Informasi";
		$testimonial[4][2] = "\"Sistem yang terintegrasi dalam suatu perusahaan dapat meningkatkan penghematan atau efisiensi\"";
		$testimonial[4][3] = "face_5.png";
		$tst = array();
		for($i = 0; $i<3; $i++)
		{
			$tst[$i] = rand(0,4);
			if($i == 1)
			{
				do
				{
					$tst[1] = rand(0,4);
				}
				while($tst[1] == $tst[0]);
			}
			else if($i==2)
			{
				do
				{
					$tst[2] = rand(0,4);
				}
				while($tst[0] == $tst[2] || $tst[1] == $tst[2]);
			}
		}
	?>
	<!-- Start Testimonial Section -->
    <div id="testimonial" class="testimonial-section">
        <div class="container">
            <!-- Start Testimonials Carousel -->
			<div class="section-title text-center">
                        <h3 class = "white-text">Apa Kata Mereka?</h3>
                        <p class  = "white-text" >Testimoni dari para ahli</p>
                    </div>
            <div id="testimonial-carousel" class="testimonials-carousel">
                <!-- Testimonial 1 -->
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="<?php echo base_url('assets/images');?>/testimonial/<?php echo $testimonial[$tst[2]][3];?>" alt="" >
                        <div class="testimonial-author">
                            <div class="author"><?php echo $testimonial[$tst[2]][0];?></div>
                            <div class="designation"><?php echo $testimonial[$tst[2]][1];?></div>
                        </div>
                        <p><?php echo $testimonial[$tst[2]][2];?></p>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="<?php echo base_url('assets/images');?>/testimonial/<?php echo $testimonial[$tst[1]][3];?>" alt="" >
                        <div class="testimonial-author">
                            <div class="author"><?php echo $testimonial[$tst[1]][0];?></div>
                            <div class="designation"><?php echo $testimonial[$tst[1]][1];?></div>
                        </div>
                        <p><?php echo $testimonial[$tst[1]][2];?></p>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="<?php echo base_url('assets/images');?>/testimonial/<?php echo $testimonial[$tst[0]][3];?>" alt="" >
                        <div class="testimonial-author">
                            <div class="author"><?php echo $testimonial[$tst[0]][0];?></div>
                            <div class="designation"><?php echo $testimonial[$tst[0]][1];?></div>
                        </div>
                        <p><?php echo $testimonial[$tst[0]][2];?></p>
                    </div>
                </div>
            </div>
            <!-- End Testimonials Carousel -->
        </div>
    </div>
    <!-- End Testimonial Section -->
	
    <!-- Start Feature Section -->
        <section id="service" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Jenis Peluang Kerja</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-cloud"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Komputasi Awan dan Komputasi Terdistribusi</h4>
                                    <p>(Cloud and Distributed Computing)</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-android"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Integrasi Perangkat Lunak dan Middleware</h4>
                                    <p>(Middleware and Integration Software)</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-edit"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Rancangan Antarmuka Pengguna</h4>
                                    <p>(User Interface Design)</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-lock"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Keamanan Informasi dan Jaringan</h4>
                                    <p>(Network and Information Security)</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-hdd-o"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Manajemen Penyimpanan Data</h4>
                                    <p>(Storage Systems and Management)</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
					<div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-code"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Arsitektur Web dan Pengembangan Framework</h4>
                                    <p>(Web Architecture and Development Framework)</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    
                </div><!-- /.row -->
            
            </div><!-- /.container -->
        </section>
        <!-- End Feature Section -->
    
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Hubungi Kami</h3>
                        <p class="white-text"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
					<div class="col-lg-6">
						<form name="sentMessage" id="contactForm" method="post" action ="/mail/contact_me.php">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-md-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn btn-primary">Send Message</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6">
						<div class="footer-contact-info text-left">
							<h4 class= "text-center">Contact info</h4>
							<h5><strong>Departemen Teknologi Informasi</strong></h5>
							<ul>
								<li><strong>Fakultas Teknologi Informasi dan Komunikasi</strong></li>
								<li><strong>Institut Teknologi Sepuluh Nopember</strong></li>
								<li><strong>Kampus ITS Sukolilo, Surabaya, 60111</strong></li>
								<br>
								<li><strong>E-mail :</strong> teknologi.informasi@its.ac.id </li>
								<li><strong>Telp :</strong> +62xxxxxxx</li>
								<li><strong>Fax :</strong> +62xxxxxxx</li>
								<li><strong>Web :</strong> tipbw.000webhostapp.com</li>
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>