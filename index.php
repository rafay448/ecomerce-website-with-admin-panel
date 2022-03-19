<?php include "../includes/menu.php"; ?>
<title>Home</title>
<style>
	/*-- testimonial Section CSS --*/
#testimonial {
    padding: 30px 0px 20px;
    color: #fff;
    background-color: #673AB7;
}
#testimonial h2 {
    font-style: italic;
    color: #fff;
    font-size: 26px;
    text-align: center;
}
#testimonial .client-img {
    width: 80px;
    height: 80px;
    overflow: hidden;
    border: 3px solid #fff;
    margin: 0px auto;
    border-radius: 100%;
    position: absolute;
    left: 0px;
}
#testimonial .carousel-content {
    padding: 20px 0px 20px 100px;
    width: 70%;
    margin: 0 auto;
    position: relative;
}
#testimonial h3 {
    font-size: 17px;
    color: #fff;
    margin-bottom: 30px;
    font-style: italic;
    text-align: right;
}
#testimonial p {
    font-size: 15px;
}
#testimonial .client-img img {
    width: 100%;
}
#testimonial .carousel-control-prev,
#testimonial .carousel-control-next {
    font-size: 36px;
}

@media (max-width: 576px) {
#testimonial .carousel-content {
    padding: 20px 0px 20px 0px;
    width: 100%;
}
#testimonial .client-img {
    margin: 20px auto;
    position: static;
}
#testimonial h3, #testimonial p {
    text-align: center;
}
}
.mainheading{
	text-align:center;
	padding-top:10px;
	color: white;
	background-color:black;
}
.subheading{
	text-align:center;
	padding-top:10px;
}
.h2{
	border:1px solid black;
	height:80px;
	padding-top:20px;
}
.carouselheading{
	background-color:black;	
	text-decoration:none;
}
.carouselheading:hover{
	transform: scale(1.25);
}
.h3{
	border:1px solid black;
	height:80px;
	padding-top:20px;
	text-align:center;
}
.design:hover{
	transform: scale(1.5);
}
</style>
<body>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pics/homedp1.jpg" alt="Los Angeles" class="d-block" style="width:100%; height:500px;">
      <div class="carousel-caption carouselheading">
        <h2><u><em>Rafay Digital Agency</em></u></h2>
        <h6><u><em class="carouselsubheading">We are providing our Digital Services.</em></u></h6>
      </div>
    </div>
    <div class="carousel-item">
      <img src="pics/homedp2.jpg" alt="Chicago" class="d-block" style="width:100%; height:500px;">
      <div class="carousel-caption carouselheading">
        <h2><u><em>Rafay Digital Agency</em></u></h2>
        <h6><u>We are providing our Digital Services.</u></h6>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="pics/homedp3.jpg" alt="New York" class="d-block" style="width:100%; height:500px;">
      <div class="carousel-caption carouselheading">
        <h2><u><em>Rafay Digital Agency</em></u></h2>
        <h6><u>We are providing our Digital Services.</u></h6>
      </div>  
    </div>
	<div class="carousel-item">
      <img src="pics/homedp4.jpg" alt="New York" class="d-block" style="width:100%; height:500px;">
      <div class="carousel-caption carouselheading">
        <h2><u><em>Rafay Digital Agency</em></u></h2>
        <h6><u>We are providing our Digital Services.</u></h6>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<div class="container-fluid">
    <div class="row">
       <div class="col mt-3 mb-5 mainheading">
          <h2 class="h2">
		   <em>Hire Us for </em>
		   </h2>
      </div>
  </div>
  <div class="row subheading mt-4 mb-5">
       <div class="col-sm-4" >
	      <img src="pics/design.png" class="design" /><br />
	      <h4>Design</h4>
		  <p>Our web design team has ample years of experience in the
		  core areas of design to build a website that you need.</p>
	      </div>
      <div class="col-sm-4">
	     <img src="pics/development.png"  class="design" /><br />
		 <h4>Development</h4>
		 <p>Looking out for customized solutions for your websites? Our team will
		 develop and deliver a website that’ll serve your purpose. </p>
		 </div>
     <div class="col">
	 <img src="pics/dg.png"  class="design" /><br />
	 <h4>Marketing</h4>
	 <p>With researched digital marketing, we will ensure that
	 new customers and clients are able to find your business. </p>
	 </div>
 </div>
 <div class="row">
     <div class="col mainheading">
         <h2 class="h2">
		   <em> Our Services </em>
		 </h2>
     </div>
  </div>
 <div class="row">
      <div class="col-sm-6 p-5">
          <h3 class="h3">Website</h3>
          <p>We are best website developer in the market. We build, dynamic,
		  and high quality website with brilliant designs. Our expertise are
		  with the best website building platforms: wix and wordpress. Digital
		  Age is the one digital agency, offering you "all in one" solution to
		  your digital needs.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">
          Read About Web development
          </button>
<!-- The Modal -->
<div class="modal" id="myModal1" >
  <div class="modal-dialog modal-fullscreen" >
    <div class="modal-content" style="background-color:black; color:white;">
      <!-- Modal Header -->
      <div class="modal-header p-5">
        <h4 class="modal-title">Web Development</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color:red;"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body p-5">
        <p> You may be thinking, why  MUST  we have a website and use  web developer
		services of a professional. Well, just imagine, how much efforts and money we
		spend to promote our business in traditional way and still we can reach only
		a few customers and clients. By spending less than half of the amount you may
		be spending each month on traditional marketing, you can have your own website
		built for you by a professional web developer and reach millions of potential
		customers around the world.</p>
        <h2>Why a website is indispensable your business ?</h2>
        <p>Today who does not check information on Google ... Who does not check the
		credibility of a company on the search engines ... Your company must be present
		on these engines because people trust them and if you are there you are so authentic,
		it's also an opportunity to be seen by your customers and prospects. If you are not in
		the search results it's as if you do not exist! Even if it is a page explaining your
		activity, it will have an influence on your notoriety. It means that you are there and
		facing your competitors. In the age of digital having a website is not a luxury but the
		minimum vital!
       Do you really want to give free rein to your competitors? And offer your potential customers
	   without fighting? I do not think ... The website is a great tool that can differentiate and
	   implement different strategies: SEO, marketing, content, social networks ... elements that
	   are well under control can be the keys to your success.
       A well prepared website can be a real asset to your business. It is the super tireless
	   employee who works 24 hours a day for you. It prospects your interest and it sells your
	   products and services without getting any salary or commission. It must not be and cannot
	   be neglected as the future of your business may depend upon it.
       However, there are things you need to keep in mind while planning a website marketing for your
	   business. Firstly, it is essential to develop a responsive and design site, it must be easy to
	   use for your customers. Your content should be tailored to the target, nothing should be left
	   to chance, think about the questions your customers / prospects may have or the difficulties
	   they may encounter. The website must make your client's life easier, he must bring a plus, it
	   is a service that you offer and in which you will invest. Thus your should use the best website
	   development services by choosing the right website developer.
       Once set up, it can be a real marketing tool by implementing campaigns such as white papers that
	   can retrieve leads, promote a product over a period of time, communicate on the latest news. the
	   company, landing page, contests, convey an image ... Create and master your own sphere of communication
	   that will revolve around your site and reap benefits (contacts, notoriety, customer loyalty ...).</p>
     </div>
    </div>
  </div>
</div>
</div>
    <div class="col p-5">
        <h3 class="h3">Social Media Marketing</h3>
        <p>Social Media Marketing (SEM) is the best way to get to market your products and services directly to the
		customers. It is more common among B2C business like, E-commerce, services and local business. Facebook,
		Instagram, Pinterest and LinkedIn are the most popular choices in this regard. </p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
        Read About SSM
       </button>
<!-- The Modal -->
<div class="modal" id="myModal2">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content" style="background-color:black; color:white;">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title p-5">Social Media Marketing</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color:red;"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body p-5">
        <p>Social Media is a generic term that encompasses a very rich and diverse landscape of platforms, websites, and online tools through which people connect, express, interact, comment, and share, such as Facebook, YouTube, Twitter, linkedin, instagram etc.
From a marketing perspective, social media serves a wide variety of marketing purposes: customer service, conquering markets and customer knowledge, word-of-mouth marketing and inbound marketing, and even direct marketing. At "Digital Age", we provide the best Social media marketing services (SMM Services) in Pakistan. Our social media marketing services including, identifying your recommended social media ,creating social media campaigns (like for FB and LinkedIn etc.)  and finally achieving the final marketing objectives.  </p>
      <h4>Why we need Social media marketing Services!  </h4>
	  <p>
The real benefit of social networks is their proximity to the customers they offer. It is a direct line of communication that allows users to share their experience about the product or service. This is something that is not always found on other marketing and communication media.
The social media marketing services of "Digital Age" can help you design the most effect social media marketing campaign for your business through our social media experts. Whether it is Facebook, Twitter, YouTube, Instagram, Google Plus, LinkedIn or whatever social media platform you choose, we will have the most suitable plan for your business.
</p>
<h4>How Social Media Marketing Works</h4>
<h6>Basically there are two ways of marketing on social media:</h6>
<h2>1 - Shareable content on social media</h2>
<p>The creation of "shareable social media content" is a recommendation that often lacks precision.  This is launched through your own social media accounts. You need to know your audience, their interests, their preferences and their online habits in order to create a content to be attractive enough to become popular among your audience.  This is a bit less expensive method. But the problem with it is that you need to have a very “large” audience (likes, followers etc.) to have a successful marketing campaign.</p>
<h2> 2- Paid social advertising</h2>
<p>This is the main course, with companies spending billions of dollars worldwide to reach their audience through Twitter, Facebook and others. This type of advertising is very effective and can be a good substitute to any other form of online marketing.
Paid ads on social media are not really different from conventional ads. It's always about targeting a specific segment of the population via a message to them. The only difference is that you can use the data collected on social media to build 100% personalized target audiences.
We will adapt our Social Media Marketing (SMM) strategies to your brand and target audience. Your social presence programs , content planning and creation, blogger awareness, video distribution and other services will be fully supported and managed, all with the goal of attracting new customers and increasing your profitability.
Our social media marketing services (SMM) give you the opportunity to connect and share information that builds brand, product or service brand awareness. Social media marketing (SMM) results are illustrated by the number of shared tweets, shares, comments, likes, and page views. Social Media Marketing (SMM) encourages user-generated content from the most popular social media platforms such as Facebook, Twitter, Pinterest, Instagram, YouTube and LinkedIn.
	  </div>
    </div>
  </div>
</div>
</div>
</div>
<section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Client Testimonials</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Slide Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                            <li data-target="#testimonialCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <!-- Slide 1 -->
                            <div class="carousel-item active">
                                <div class="carousel-content">
                                    <div class="client-img"><img src="/uploads/Dp.01.jpg" alt="Testimonial Slider" /></div>
                                    <p><i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</i></p>
                                    <h3><span>-</span> Gourav Kumar <span>-</span></h3>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="carousel-item">
                                <div class="carousel-content">
                                    <div class="client-img"><img src="/uploads/Dp.7.jpg" alt="Testimonial Slider" /></div>
                                    <p><i>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. There are many variations of passages of Lorem Ipsum available. Lorem Ipsum is simply dummy text of the printing and typesetting industry</i></p>
                                    <h3><span>-</span> Mukesh Kumar <span>-</span></h3>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="carousel-item">
                                <div class="carousel-content">
                                    <div class="client-img"><img src="/uploads/Dp.8.jpg" alt="Testimonial Slider" /></div>
                                    <p><i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. There are many variations of passages of Lorem Ipsum available. Lorem Ipsum is simply dummy text of the printing and typesetting industry</i></p>
                                    <h3><span>-</span> Rajnish Kumar <span>-</span></h3>
                                </div>
                            </div>
                            <!-- Slider pre and next arrow -->
                            <a class="carousel-control-prev text-white" href="#testimonialCarousel" role="button" data-slide="prev">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a class="carousel-control-next text-white" href="#testimonialCarousel" role="button" data-slide="next">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonials Section -->
<?php include "../includes/footer.php"; ?>
</body>
</html>