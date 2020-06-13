@extends('layout/header')

@section('container')

		<!-- Start Home Section -->
		<section id="home" class="hero-wrap js-fullheight" style="background-image: url(assets/img4.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
		<?php 
 if(Session::get('first_name') != ""){
 ?>
          <div class="col-sm-6">
            <div class="text text-left">
				<a href="logout"><button type="submit" class="btn btn-primary">Log out</button></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="text text-right">
				<h3>Welcome, {{Session::get('first_name')}}</h3>
            </div>
          </div>
		  <?php 
 }


 ?>
			<!-- <div class="text text-left">
				<button type="submit" class="btn btn-primary">Log out</button>
			</div>
			<div class="text text-right" style="display:inline-block">
				<h1>Winson</h1>
			</div> -->
          <div class="col-lg-7 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<h1 class="logo"><a href=""><span class="flaticon-camera-shutter"></span>Cerita Biru</a></h1>
		  				<h1 class="mb-4">We Make <br>Something Great</h1>
		  				<p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts.</p>
		  				<p class="mt-5"><a data-scroll="" href="signup" class="btn btn-primary">Join Us Now<span class="ion-ios-arrow-round-forward"></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
		<!-- End Home Section -->

		<!-- Start About Me Section -->
		<section class="ftco-about img ftco-section" id="about">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img img-video d-flex align-self-stretch align-items-center" style="background-image:url(images/foto2.jpeg);">
	    					<div class="video justify-content-center">
									<a href="https://www.youtube.com/watch?v=DCMATL" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
										<span class="ion-ios-play"></span>
			  					</a>
								</div>
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5">
	          <div class="heading-section ftco-animate">
	            <h2 class="mb-4">Cerita Biru is A Creative Direction, <br>Photography Agency</h2>
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

	            <div class="counter-wrap ftco-animate d-flex my-md-4">
	              <div class="text">
	              	<p class="mb-4">
		                <span class="number" data-number="120">0</span>
		                <span>Project complete</span>
	                </p>
	              </div>
		          </div>
		          <div class="d-flex w-100">
		            <div class="img img-about-2 mr-2" style="background-image: url(images/foto1.jpeg);"></div>
		            <div class="img img-about-2 ml-2" style="background-image: url(images/foto3.jpeg);"></div>
		          </div>
		          <blockquote class="blockquote mt-5">
		          	<p class="mb-2">"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.."</p>
		          	<span>&mdash; Lucy Lee</span>
		          </blockquote>
	          </div>
	        </div>
        </div>
    	</div>
    </section>
		<!-- End About Me Section -->

		<!-- Start Services Section -->
		<section id="services" class="ftco-section">
		  <div class="container">
		  	<div class="row">
		  		<div class="col-md-9">
		  			<div class="row">
				  		<div class="col-md-5 heading-section ftco-animate pb-5">
		            <h2 class="mb-4">Photography Services</h2>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
		          </div>
				  	</div>
		  			<div class="row">
		        	<div class="col-md-4">
		        		<div class="media block-6 services d-block ftco-animate">
		              <div class="icon"><span class="flaticon-video-camera"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Movies &amp; Advertising Videos</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences.</p>
		              </div>
		            </div> 
		        	</div>
		        	<div class="col-md-4">
		        		<div class="media block-6 services d-block ftco-animate">
		              <div class="icon"><span class="flaticon-video-player"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Clip &amp; Music Videos</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences.</p>
		              </div>
		            </div> 
		        	</div>
		        	<div class="col-md-4">
		        		<div class="media block-6 services d-block ftco-animate">
		              <div class="icon"><span class="flaticon-video-player-1"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Short Film Productions</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences.</p>
		              </div>
		            </div> 
		        	</div>
	        	</div>
	        </div>
	        <div class="col-md-3 d-flex align-items-stretch">
	        	<div class="img w-100" style="background-image: url(images/about.jpg);"></div>
	        </div>
        </div>
        <div class="row progress-circle pt-md-5">
        	<div class="col-md-7 order-md-last py-md-5">
        		<div class="row">
				  		<div class="col-md-4 mb-md-0 mb-4 ftco-animate">
					      <div class="">
					        <h2 class="text-center mb-4">Creation</h2>

					        <!-- Progress bar 1 -->
					        <div class="progress mx-auto" data-value='90'>
					          <span class="progress-left">
		                  <span class="progress-bar border-primary"></span>
					          </span>
					          <span class="progress-right">
		                  <span class="progress-bar border-primary"></span>
					          </span>
					          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
					            <div class="h5">90<sup class="small">%</sup></div>
					          </div>
					        </div>
					        <!-- END -->
					      </div>
					    </div>

					    <div class="col-md-4 mb-md-0 mb-4 ftco-animate">
					      <div class="">
					        <h2 class="text-center mb-4">Development</h2>

					        <!-- Progress bar 1 -->
					        <div class="progress mx-auto" data-value='80'>
					          <span class="progress-left">
		                  <span class="progress-bar border-primary"></span>
					          </span>
					          <span class="progress-right">
		                  <span class="progress-bar border-primary"></span>
					          </span>
					          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
					            <div class="h5">80<sup class="small">%</sup></div>
					          </div>
					        </div>
					        <!-- END -->
					      </div>
					    </div>

					    <div class="col-md-4 mb-md-0 mb-4 ftco-animate">
					      <div class="">
					        <h2 class="text-center mb-4">Production</h2>

					        <!-- Progress bar 1 -->
					        <div class="progress mx-auto" data-value='100'>
					          <span class="progress-left">
		                  <span class="progress-bar border-primary"></span>
					          </span>
					          <span class="progress-right">
		                  <span class="progress-bar border-primary"></span>
					          </span>
					          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
					            <div class="h5">100<sup class="small">%</sup></div>
					          </div>
					        </div>
					        <!-- END -->
					      </div>
					    </div>

					    <div class="p-md-4 mt-4">
					    	<div class="col-md-8 ftco-animate">
						    	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast.</p>
					    	</div>
					    </div>
					  </div>
					</div>
					<div class="col-md-5 d-flex align-items-stretch">
	        	<div class="img w-100" style="background-image: url(images/about-2.jpg);"></div>
	        </div>
		  	</div>
		  </div>
		</section>  
		<!-- End Services Section -->

		<!-- Start Portfolio Section -->
		<section id="work" class="ftco-section">
		  <div class="container">
		  	<div class="row justify-content-center">
		  		<div class="col-md-4 heading-section text-center ftco-animate pb-5">
            <h2 class="mb-4">Portfolio</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
          </div>
		  	</div>
		  </div> 
		  <div class="container-fluid px-md-0">
        <div class="row no-gutters">
		@foreach($data as $data)
          <div class="col-md-4 ftco-animate">
            <div class="model img d-flex align-items-end" style="background-image: url('assets/post/{{$data['img_url']}}');">
            	<a href="assets/post/{{$data['img_url']}}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand">
							</span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<h2><a href="/detail/{{$data['post_id']}}" target="_blank">{{$data['title']}}</a></h2>
	              </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div> 
		</section>
		<!-- End Portfolio Section -->

        <!-- start yy structure -->
		<section class="ftco-section companystructure-section" id="testimonial">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-4 heading-section ftco-animate">
          	<span class="subheading">Company Structure</span>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
              <div class="item">
                <div class="companystructure-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/founder.jpeg)">
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4"> Seorang Producer yang mengawali karirnya pada tahun 2010 sebagai Video Creator yang mengerjakan project-project Video Liputan dan Dokumentasi dari berbagai macam klien, mulai dari Perusahaan Swasta hingga berbagai Lembaga Negara.

Berkarir mulai dari bawah, dan Ia terus berkembang menjadi Producer dalam project-project Music Video, Iklan TV, Iklan Digital. Dan terus berkembang hingga akhirnya Ia menjadi Producer dalam Serial TV, Serial Youtube, dan beberapa Film Pendek.

Pada tahun 2019, Serial Youtube berjudul "Dibalik Kubikal" yang Ia produksi bersama Net TV memenangkan Marketeers Award dengan kategori "The Breakthrough Content of The Year", dan di tahun yang sama Ia mendapat kesempatan untuk memproduksi Film Pendek tentang kisah hidup seorang legenda "Iwan Fals" sebagai persembahan untuk Hari Kemerdekaan Indonesia dan ditayangkan serentak di seluruh TV Nasional pada tanggal 17 Agustus 2019.</p>
                    <div class="pl-5">
	                    <p class="name">Zaky Aljosha</p>
	                    <span class="position">CEO Founder of Cerita Biru</span>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
			</div>
		</section>
        <!-- end of company structure -->

		<!-- Start Contact Section -->
		<section class="ftco-section contact-section" id="contact">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-4 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Me</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Address</h3>
		            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
		          </div>
	          </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Contact Number</h3>
		            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
	            </div>
	          </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Email Address</h3>
		            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
		          </div>
	          </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Website</h3>
		            <p><a href="#">yoursite.com</a></p>
	            </div>
	          </div>
          </div>
        </div>

        

          
        </div>
      </div>
    </section>
		<!-- End Contact Section -->


@endsection