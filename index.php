<!-- <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script> -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<header id="header">
  <!--  Brand Logo  -->
  <a class="nav-brand" href="" target="_blank">
    <img id="header-img" src="https://homen3d.com/homepage/test/tgmc-logo.png" alt="Pixel Skincare">
  </a>
  
  <!--  Toggle Menu for Mobile  -->
  
  <input type="checkbox" id="toggle-menu" role="button">
  <label for="toggle-menu" class="toggle-menu">Menu</label>
  
  <!--  Menus  -->
  <nav id="nav-bar" class="navbar">
    <ul class="menu">
      <li><a class="nav-link" href="#featured">New in!</a></li>
      <li><a class="nav-link" href="#collections">Collections</a></li>
      <li><a class="nav-link" href="#about">About</a></li>
      <li><a class="nav-link" href="#contact">Contact</a></li>
    </ul>
    <ul class="social-menu">
      <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
    </ul>
  </nav>
</header>

<!-- Hero Section -->
<div class="hero">
  <div class="hero-img">
    <img src="https://i.postimg.cc/kMNz5grj/flower.png" alt="Pixel Skincare">
  </div>
  <div class="hero-text">
    <h1>Your Skin</br> Would Loved It!</h1>
    <a href="#featured" class="btn">Explore</a>
  </div>
</div>

<!-- Featured Section -->
<section id="featured">
  <div class="title title-left">
    <span class="line"></span><h3>New Friend!</h3>
  </div>
  <div class="wrapper">
    <div class="image">
      <img src="https://i.postimg.cc/DyM1SgNb/flower-copy.png" alt="Pixel Facial Cream">
    </div>
    <div class="text">
      <h2>Pixel Facial Cream</h2>
      <p>A lightweight formula that packs a punch with avocado protein extract to strengthen skin's own moisture barrier, sealing in hydration to protect, nourish and soften skin.</p>
      <a href="#" class=btn>Details</a>
    </div>
  </div>
</section>

<!-- Collection Section -->
<section id="collections">
  <div class="title title-right">
    <span class="line line-right"></span><h3>Collections</h3>
  </div>
  <div class="wrapper">
    <a class="box box1" href="#">
      <h4>Moisturizers</h4>
      <div class="box-overlay"></div>
    </a>
    <a class="box box2" href="#">
      <h4>Eye & Lip Care</h4>
      <div class="box-overlay"></div>
    </a>
    <a class="box box3" href="#">
      <h4>Cleansers & Toners</h4>
      <div class="box-overlay"></div>
    </a>
  </div>
</section>

<!-- About Section -->
<section id="about">
  <div class="title title-left">
    <span class="line"></span><h3>PIXEL Skincare</h3>
  </div>
  <div class="wrapper">
    <div class="text">
      <p>Since 2016, Pixel Skin Care has been at the forefront of the move towards organic and natural skincare.</p>
      <p>Specialising in emerging niche natural skin care brands, Pixel Skin Care is a safe zone for you and your skin where we have taken special care to hand pick and offer you some of the purest and safest brands from global organic specialists.</p>
      <p>From cutting edge science to luxurious natural indulgence, we have selected the best products and treatments for healing and improving your well-being.</p>
    </div>
    <div class="video-wrapper">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/otej7WLdPh0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact">
  <div class="wrapper">
    <div class="form-wrapper">    
      <h4>Add More Beauty To Your Email</h4>
      <form id="form" action="https://www.freecodecamp.com/email-submit">
        <input type="email" id="email" name="email" placeholder="Your email" required>
        <input type="submit" id="submit" value="OK" class="submit">
      </form>
    </div>
    <div class="contact-wrapper">
      <h4>Stay In Touch With PIXEL</h4>
      <div class="wrapper">        
        <ul class="social-menu">
          <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        </ul>
        <a class="contact-footer contact-tel" href="#"><i class="fa fa-phone" aria-hidden="true"></i>001-283-4892</a>
        <a class="contact-footer contact-email" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Send an email</a>
      </div>
    </div>
    <div class="copy-wrapper">
      <h6><i class="fa fa-copyright" aria-hidden="true"></i> Theme, Logo, Product Design by <a href="https://codepen.io/ann_">Ann</a></h6>
    </div>
  </div>
</section>





<style>
    
    @import url('https://fonts.googleapis.com/css?family=Raleway:300,500,700');

/* Global */
* {
  box-sizing: border-box;
}
body{
  color: #090b08;
  margin:  0;
  font-family: 'Raleway', sans-serif;
  font-weight: 300;
  background-color: #ffe9ef;
}
h1{
  font-size: 1.7em;
  font-weight: 700;
  line-height: 1.5em;
  text-transform: uppercase;
}
h2{
  text-transform: uppercase;
}
h4{
  font-size: .8em;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
}
h6{
  font-weight: 500;
}
a{
  text-decoration: none;
  color: #090b08;
}
ul{
  list-style: none;
}
section{
  padding: 5.8em 2em 0;
}
.title{
  display: flex;
  align-items: center;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding-bottom: 1em;
}
.title.title-right{
  justify-content: flex-end;
}
.line{  
  width: 3em;
  height: 1px;
  background-color: #000;
  margin-right: 1em;
}
.line.line-right{
  order: 2;
  margin-right: 0;
  margin-left: 1em;
}
.btn{
  display: inline-block;
  padding: .5em 1.5em;
  border: solid 1px #090b08;  
  transition: all .3s ease-in;
}
.btn:hover, .btn:focus{
  transform: translate(0px, -2px);
  -webkit-box-shadow: 0px 10px 7px -9px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 10px 7px -9px rgba(0,0,0,0.75);
  box-shadow: 0px 10px 7px -9px rgba(0,0,0,0.75);
  transition: all .3s ease-out; 
}

/* Header */
header{
  display: flex;
  position: fixed;
  width: 100%;
  justify-content: space-around;
  z-index: 1;
}
header:before{
  content: "";
  position: absolute;
  background-color: #ffe9ef;
  width: 100%;
  height: 68%;
  z-index: -1;
  -webkit-box-shadow: 0px 7px 5px 0px rgba(0,0,0,0.22);
  -moz-box-shadow: 0px 7px 5px 0px rgba(0,0,0,0.22);
  box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.22);
}
.nav-brand img{
  width: auto;
  padding-top: 1em;
  height: 7.5em;
}
.toggle-menu{
  display: block;
  font-size: 1.2em;
  align-self: center;
  cursor: pointer;
}
input[type="checkbox"]{
  display: none;
}
input[type="checkbox"]:hover ~ .toggle-menu,
input[type="checkbox"]:checked ~ .toggle-menu
{
  border-bottom: solid 1px #090b08;
}
input[type="checkbox"]:checked ~ .navbar{
  display: flex;
  flex-direction: column;
}
.navbar{
  display: none;
  position: absolute;
  width: 100%;
  height: 100vh;
  background-color: #ffe9ef;
  justify-content: space-evenly;
  align-items: center;
  z-index: -2;
}
.menu{
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  padding: 4em 0 0;
}
a.nav-link{
  margin-right: 0;
}
a.nav-link:hover,
a.nav-link:active,
a.nav-link:focus{
  border-bottom: solid 1.8px #090b08;
}
.menu li{
  margin-top: 3em;
}
.social-menu{
  display: flex;
  flex-direction: row;
  padding: 0;
}
.social-menu li a{
  margin: 0 .5em;
  padding: .5em;
}
.social-menu li a{
  font-size: 1.2em;
}
.social-menu li a:hover,
.social-menu li a:active,
.social-menu li a:focus
{
  border-bottom: solid 1px #000;
}

/* Hero Section */
.hero {
  display: flex;
  height: 100vh;
  align-items: center;
  background: #f5d9d6 url("https://i.postimg.cc/9fTzqwtw/flower2.png") no-repeat right bottom;
}
.hero-img img{
  display: none;
}
.hero-text{
  padding: 0 2em 7.5em;
}

/* Featured Section */
#featured .image img{
  width: 100%;
  height: auto;
}
.text{
  text-align: center;
  padding-top: 1em;
}
.text p{
  text-align: justify;
  padding-bottom: 1em;
  line-height: 1.4em;
}

/* Collections Section */
.box{
  display: block;
  position: relative;
  padding: 1.3em;
  background-color: #f5d9d6;
  text-align: center;
  margin-bottom: 2em;
}
.box-overlay {
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: solid 3px #fff;
  transform: translate(8px, 8px);
  transition: all 1s ease;
}
.box:last-child{
  margin-bottom: 5.8em;
}
.box:hover .box-overlay,
.box:focus .box-overlay
{
  transform: translate(0px, 0px) scale(0.92, 0.8);
}

/* About Section */
#about{
  background-color: #f5d9d6;
}
section#about{
  padding-bottom: 5.8em;
}
#about .text{
  padding-top: 0;
  margin-top: 0;
  padding-bottom: 2em;
}
#about .text p{
  padding-bottom: 0;
  text-align: left;
}
.video-wrapper{
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  overflow: hidden;
  height: 0;
}
.video-wrapper iframe{
  position: absolute;
  top:0;
  left: 0;
  width: 100%;
  height: 100%;
}

/* Contact Section */
section#contact{
  padding: 3em 2em .5em;
}
.form-wrapper:after,
.contact-wrapper:after{
  display: block;
  content: "";
  margin: 2em auto;
  border-bottom: solid 1px #dadada;
}
form{
  display: flex;
}
form input:first-child{
  flex: 1 0 80%;
  background-color: transparent;
}
form input:last-child{
  flex: 1 0 20%;
  border-left: 0;  
  cursor: pointer;
  background-color: #f5d9d6;
  transition: all .25s ease;
}
#submit:hover {
  background-color: #000;
  color: #fff;
  transition: all .25s ease;
}
input{
  padding: 1em;
  border: 1px solid #000;
}
.contact-wrapper .wrapper{
  display: flex;
  text-align: center;
  flex-wrap: wrap;
}
.contact-wrapper .social-menu{
  flex: 1 0 100%;
  justify-content: center;
}
.contact-wrapper .social-menu li a {
  font-size: 1.5em;
  padding: 0;
  margin: 0 1.5em 0 0;
}
.contact-wrapper a i{
  width: 100%;
  padding-bottom: .2em;
}
.contact-footer{
  padding: 1em 0;
  border: 1px solid #000;
}
.contact-footer:last-child{
  border-left: 0;
}
.contact-footer:hover{
  background-color: #f5d9d6;
}
.contact-tel{
  flex: 1 0 50%;
}
.contact-email{
  flex: 1 0 50%;
}
.copy-wrapper a{
  font-weight: 700;
}

/* Responsive Style */
@media(min-width: 320px){
  
}
@media(min-width: 576px){
  /*  Global  */
  h1{
    font-size: 2em;
  }
  
  /*  Hero Section  */
  .hero{
    background-image: none;
    justify-content: center;
    overflow: hidden;
  }
  .hero-img{
    padding-top: 6.5em;
  }
  .hero-img img{
    display: block;
    width: 14em;
    height: auto;
  }
  .hero-text{
    padding: 0 2em;
  }
  
  /*  Featured Section  */
  .text{
    margin: 2em 2em auto;
  }
  
  /*  Collections Section  */
  #collections .wrapper{
    display: flex;
    flex-wrap: wrap;
  }
  .box{
    padding: 3.2em;
  }
  .box1{
    flex: 1 0 47%;
    margin-right: 1em;
  }
  .box2{
    flex: 1 0 47%;
  }
  .box3{
    flex: 2 0 100%;
  }
  
  /*  About Section  */
  .video-wrapper{
    margin: 0 2em;
  }
}
@media(min-width: 768px){
  /*  Global  */
  .wrapper{
    display: flex;
  }
  
  /*  Header  */
  .nav-brand img{
    height: 10em;
  }
  .toggle-menu{
    display: none;
  }
  .navbar{
    display: flex;
    position: relative;
    height: auto;
    width: auto;
    background-color: transparent;
    z-index: 1;
  }
  .menu{
    flex-direction: row;
    padding: 0;
    justify-content: flex-end;
  }
  .social-menu{
    display: none;
  }
  .menu li{
    margin-top: 0;
  }
  a.nav-link{
    margin-right: 3em;
  }
  
  /*  Featured Section  */  
  .text{
    text-align: left;    
    margin: 0 0 auto 4em;
  }
  #featured .text{
    flex: 1;
    order: 1;
  }
  #featured .image{
    flex: 1 0 12em;
    order: 2;
  }
  
  /*  Collections Section  */
  #collections .wrapper{
    margin: 0 4em;
  }
  
  /*  About Section  */
  #about .wrapper{
    display: block;
  }
  #about .text{
    margin-right: 4em;
  }
  .video-wrapper{
    margin: auto 4em;
  }
  
  /* Contact Section  */
  #contact .wrapper{
    flex-wrap: wrap;
  }
  .form-wrapper, .contact-wrapper{
    flex: 1 0 50%;
    align-self: center;
    padding: 0 1em;
  }
  .copy-wrapper{
    flex: 1 0 100%;
    padding: 0 1em;
  }
  .form-wrapper:after,
  .contact-wrapper:after{
    display: none;
  }
  .contact-footer{
    border: 0;
    padding: 0;
    margin: .6em auto;
    text-align: left;
  }
  .contact-footer:hover{
    background-color: transparent;
  }
  .contact-wrapper a.contact-footer:hover i{
    
  }
  .contact-wrapper a i{
    width: auto;
    padding-right: 1em;
  }
  .contact-wrapper .social-menu{
    display: flex;
    order: 3;
    justify-content: flex-start;
  }
  .contact-wrapper .social-menu a i{
    padding-right: 0;
  }
  .copy-wrapper:before{
    display: block;
    content: "";
    margin: 2em auto;
    border-bottom: solid 1px #dadada;
  }
}
@media(min-width: 992px){
  /*  Global  */
  section{
    padding: 5.8em 7em 0;
  }  
  .title.title-left{
    margin-left: -2.5em;
  }
  .title.title-right{
    margin-right: -2.5em;
  }
  .line{
    width: 5.5em;
  }
  
  /*  Hero Section  */
  .hero-img img{
    width: 14.5em;
  }
  
  /*  Featured Section  */
  #featured .image{
    margin-top: -2em;
  }
  
  /* About Section  */
  #about .wrapper{
    display: flex;
  }
  #about .text{
    flex: 1 0 40%;
    margin-right: 1em;
    padding-bottom: 0;
  }
  .video-wrapper{
    flex: 2 0 55%;
    padding-bottom: 33.25%;
    align-self: center;
    margin: 1.4em 0;        
  }
  .contact-tel{
    flex-basis: 20%;
  }
}
@media(min-width: 1200px){
  /*  Global  */
  h1{
    font-size: 2.4em;
  }
  section{
    padding: 5.8em 11em 0;
  }
  
  /*  Hero Section  */
  .hero-img img{
    width: 15.5em;
  }
  
  /*  Featured Section  */
  #featured .image{
    margin-top: -4em;
  }
  
  /*  About Section  */
  #about .text{
    padding-right: 3em;
    padding-bottom: 0;
  }
  .video-wrapper{
    margin: 0;
  }
}
</style>