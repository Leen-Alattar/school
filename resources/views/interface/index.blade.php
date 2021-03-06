@extends('interface.layout.master')
@section('content')
	

		<!-- Strat Slider Area -->
		<div class="slide__carosel owl-carousel owl-theme">
			<div class="slider__area bg-pngimage--1  d-flex fullscreen justify-content-start align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<div class="slider__activation">
								<!-- Start Single Slide -->
								<div class="slide">
									<div class="slide__inner">
										<h1>Play & learn How to</h1>
										<div class="slider__text">
											<h2>Create New Things</h2>
										</div>
										<div class="slider__btn">
											<a class="dcare__btn" href="#">READ MORE</a>
										</div>
									</div>
								</div>
								<!-- End Single Slide -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider__area bg-pngimage--1  d-flex fullscreen justify-content-start align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<div class="slider__activation">
								<!-- Start Single Slide -->
								<div class="slide">
									<div class="slide__inner">
										<h1>Play & learn How to</h1>
										<div class="slider__text">
											<h2>Creat New Things</h2>
										</div>
										<div class="slider__btn">
											<a class="dcare__btn" href="#">READ MORE</a>
										</div>
									</div>
								</div>
								<!-- End Single Slide -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Slider Area -->

		<!-- Start Welcame Area -->
		<section class="junior__welcome__area section-padding--md bg-pngimage--2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__line">Welcome To Junior Home</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p>
						</div>
					</div>
				</div>
				<div class="row jn__welcome__wrapper align-items-center">
					<div class="col-md-12 col-lg-6 col-sm-12">
						<div class="welcome__juniro__inner">
							<h3>Welcome to Our School</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisic ming elit, sed do ei Excepteur sint occaecat cupida proident, sunt in culpa qui dese runt mol anim id est lai aborum. Sed ut perspiciatis unde omnis iste natus error svolupt accu doloremque laudantium, totam rem.</p>
							<div class="wel__btn">
								<a class="dcare__btn" href="about-us.html">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 col-sm-12 md-mt-40 sm-mt-40">
						<div class="jnr__Welcome__thumb">
							<img src="{{asset('images/wel-come/1.png')}}" alt="images">
							<a class="play__btn" href="https://www.youtube.com/watch?v=MCJEkZtqlBk"><i class="fa fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Welcame Area -->

		<!-- Start Our Service Area -->
		<section class="junior__service bg-image--1 section-padding--bottom section--padding--xlg--top">
			<div class="container">
				<div class="row">
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="service bg--white border__color wow fadeInUp">
							<div class="service__icon">
								<img src="{{asset('images/shape/sm-icon/1.png')}}" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="service.html">Drawing Class</a></h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
								<div class="service__btn">
									<a class="dcare__btn--2" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Service -->
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 xs-mt-60">
						<div class="service bg--white border__color border__color--2 wow fadeInUp" data-wow-delay="0.2s">
							<div class="service__icon">
								<img src="{{asset('images/shape/sm-icon/2.png')}}" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="service.html">Active Learning</a></h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
								<div class="service__btn">
									<a class="dcare__btn--2" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Service -->
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60">
						<div class="service bg--white border__color border__color--3 wow fadeInUp" data-wow-delay="0.45s">
							<div class="service__icon">
								<img src="{{asset('images/shape/sm-icon/3.png')}}" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="service.html">Creative Lesson</a></h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
								<div class="service__btn">
									<a class="dcare__btn--2" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Service -->
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60">
						<div class="service bg--white border__color border__color--4 wow fadeInUp" data-wow-delay="0.65s">
							<div class="service__icon">
								<img src="{{asset('images/shape/sm-icon/4.png')}}" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="service.html">Yoga Class</a></h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
								<div class="service__btn">
									<a class="dcare__btn--2" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</section>
		<!-- End Our Service Area -->

		<!-- Start Call To Action -->
		<section class="jnr__call__to__action bg-pngimage--3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="jnr__call__action__wrap d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between align-items-center">
							<div class="callto__action__inner">
								<h2>How To Enroll Your Child In A class ?</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
							</div>
							<div class="callto__action__btn">
								<a class="dcare__btn btn__white" href="#">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Call To Action -->

		<!-- Start our Class Area -->
		<section class="junior__classes__area section-lg-padding--top section-padding--md--bottom bg--white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="section__title text-center">
							<h2 class="title__line">Choose Your Classes</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p>
						</div>
					</div>
				</div>
				<div class="row classes__wrap activation__one owl-carousel owl-theme clearfix mt--40">
					<!-- Start Single Classes -->
					<div class="col-lg-4 col-sm-6">
						<div class="junior__classes">
							<div class="classes__thumb">
								<a href="class-details.html">
									<img src="{{asset('images/class/md-img/1.jpg')}}" alt="class images">
								</a>
							</div>
							<div class="classes__inner">
								<div class="classes__icon">
									<img src="{{asset('images/class/star/1.png')}}" alt="starr images">
									<span>$60</span>
								</div>
								<div class="class__details">
									<h4><a href="class-details.html">Drawing Class</a></h4>
									<ul class="class__time">
										<li>Infant Care : 0.8 - 2.5 Years</li>
										<li>Class Size : 8</li>
									</ul>
									<div class="class__btn">
										<a class="dcare__btn--2" href="class-details.html">Admission Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Classes -->
					<!-- Start Single Classes -->
					<div class="col-lg-4 col-sm-6">
						<div class="junior__classes">
							<div class="classes__thumb">
								<a href="class-details.html">
									<img src="{{asset('images/class/md-img/2.jpg')}}" alt="class images">
								</a>
							</div>
							<div class="classes__inner">
								<div class="classes__icon">
									<img src="{{asset('images/class/star/1.png')}}" alt="starr images">
									<span>$70</span>
								</div>
								<div class="class__details">
									<h4><a href="class-details.html">Active Learning</a></h4>
									<ul class="class__time">
										<li>Infant Care : 0.8 - 2.5 Years</li>
										<li>Class Size : 8</li>
									</ul>
									<div class="class__btn">
										<a class="dcare__btn--2" href="class-details.html">Admission Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Classes -->
					<!-- Start Single Classes -->
					<div class="col-lg-4 col-sm-6">
						<div class="junior__classes">
							<div class="classes__thumb">
								<a href="class-details.html">
									<img src="{{asset('images/class/md-img/3.jpg')}}" alt="class images">
								</a>
							</div>
							<div class="classes__inner">
								<div class="classes__icon">
									<img src="{{asset('images/class/star/1.png')}}" alt="starr images">
									<span>$80</span>
								</div>
								<div class="class__details">
									<h4><a href="class-details.html">Swimming Class</a></h4>
									<ul class="class__time">
										<li>Infant Care : 0.8 - 2.5 Years</li>
										<li>Class Size : 8</li>
									</ul>
									<div class="class__btn">
										<a class="dcare__btn--2" href="class-details.html">Admission Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Classes -->
					<!-- Start Single Classes -->
					<div class="col-lg-4 col-sm-6">
						<div class="junior__classes">
							<div class="classes__thumb">
								<a href="class-details.html">
									<img src="{{asset('images/class/md-img/3.jpg')}}" alt="class images">
								</a>
							</div>
							<div class="classes__inner">
								<div class="classes__icon">
									<img src="{{asset('images/class/star/1.png')}}" alt="starr images">
									<span>$50</span>
								</div>
								<div class="class__details">
									<h4><a href="class-details.html">Swimming Class</a></h4>
									<ul class="class__time">
										<li>Infant Care : 0.8 - 2.5 Years</li>
										<li>Class Size : 8</li>
									</ul>
									<div class="class__btn">
										<a class="dcare__btn--2" href="class-details.html">Admission Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Classes -->
					<!-- Start Single Classes -->
					<div class="col-lg-4 col-sm-6">
						<div class="junior__classes">
							<div class="classes__thumb">
								<a href="class-details.html">
									<img src="{{asset('images/class/md-img/1.jpg')}}" alt="class images">
								</a>
							</div>
							<div class="classes__inner">
								<div class="classes__icon">
									<img src="{{asset('images/class/star/1.png')}}" alt="starr images">
									<span>$60</span>
								</div>
								<div class="class__details">
									<h4><a href="class-details.html">Swimming Class</a></h4>
									<ul class="class__time">
										<li>Infant Care : 0.8 - 2.5 Years</li>
										<li>Class Size : 8</li>
									</ul>
									<div class="class__btn">
										<a class="dcare__btn--2" href="class-details.html">Admission Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Classes -->
				</div>
			</div>
		</section>
		<!-- End our Class Area -->
		
		<!-- Start Testimonial Area -->
		<section class="junior__testimonial__area bg-image--2 section-padding--lg">
			<div class="container">
				<div class="row">
					<div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12">
						<div class="testimonial__container">
							<div class="tes__activation--1 owl-carousel owl-theme">
								<div class="testimonial__bg">
									<!-- Start Single Testimonial -->
									<div class="testimonial text-center">
										<div class="testimonial__inner">
											<div class="test__icon">
												<img src="{{asset('images/testimonial/icon/1.png')}}" alt="icon images">
											</div>
											<div class="client__details">
												<p>Lorem ipsum dolor t dolore magna aliqua. Ut enim ad minim veniam, quis nostexercitation ullamco laboris nisimollit anim id est lsunt explicabo. Nemo enim ipsam voluptatem quia voluptas quia voluptas sit aspernatd.</p>
												<div class="client__info">
													<h6>Lora alica</h6>
													<span>Gardients of student</span>
												</div>
											</div>
										</div>
									</div>
									<!-- End Single Testimonial -->
								</div>
								<div class="testimonial__bg">
									<!-- Start Single Testimonial -->
									<div class="testimonial text-center">
										<div class="testimonial__inner">
											<div class="test__icon">
												<img src="{{asset('images/testimonial/icon/1.png')}}" alt="icon images">
											</div>
											<div class="client__details">
												<p>Kohinur ipsum dolor t dolore magna aliqua. Ut enim ad minim veniam, quis nostexercitation ullamco laboris nisimollit anim id est lsunt explicabo. Nemo enim ipsam voluptatem quia voluptas quia voluptas sit aspernatd.</p>
												<div class="client__info">
													<h6>Kohinur alica</h6>
													<span>Gardients of student</span>
												</div>
											</div>
										</div>
									</div>
									<!-- End Single Testimonial -->
								</div>
								<div class="testimonial__bg">
									<!-- Start Single Testimonial -->
									<div class="testimonial text-center">
										<div class="testimonial__inner">
											<div class="test__icon">
												<img src="{{asset('images/testimonial/icon/1.png')}}" alt="icon images">
											</div>
											<div class="client__details">
												<p>Najnin ipsum dolor t dolore magna aliqua. Ut enim ad minim veniam, quis nostexercitation ullamco laboris nisimollit anim id est lsunt explicabo. Nemo enim ipsam voluptatem quia voluptas quia voluptas sit aspernatd.</p>
												<div class="client__info">
													<h6>Najnin alica</h6>
													<span>Gardients of student</span>
												</div>
											</div>
										</div>
									</div>
									<!-- End Single Testimonial -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonial Area -->
		<!-- Start Our Gallery Area -->
		<section class="junior__gallery__area bg--white section-padding--lg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center">
							<h2 class="title__line">Our Gallery</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p>
						</div>
					</div>
				</div>
				<div class="row galler__wrap mt--40">
					<!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="#">
									<img src="{{asset('images/gallery/gallery-1/1.jpg')}}" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="{{asset('images/gallery/big-img/1.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
									<h4 class="gallery__title"><a href="#">Creating Funny Things</a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					<!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="#">
									<img src="{{asset('images/gallery/gallery-1/2.jpg')}}" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="{{asset('images/gallery/big-img/2.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
									<h4 class="gallery__title"><a href="#">Creating Funny Things</a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					<!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="#">
									<img src="{{asset('images/gallery/gallery-1/3.jpg')}}" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="{{asset('images/gallery/big-img/3.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
									<h4 class="gallery__title"><a href="#">Creating Funny Things</a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					<!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="#">
									<img src="{{asset('images/gallery/gallery-1/4.jpg')}}" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="{{asset('images/gallery/big-img/4.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
									<h4 class="gallery__title"><a href="#">Creating Funny Things</a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					<!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="#">
									<img src="{{asset('images/gallery/gallery-1/5.jpg')}}" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="{{asset('images/gallery/big-img/5.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
									<h4 class="gallery__title"><a href="#">Creating Funny Things</a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					<!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="#">
									<img src="{{asset('images/gallery/gallery-1/6.jpg')}}" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="{{asset('images/gallery/big-img/6.jpg')}}" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
									<h4 class="gallery__title"><a href="#">Creating Funny Things</a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
				</div>	
			</div>
		</section>
		<!-- End Our Gallery Area -->
	
		@endsection
