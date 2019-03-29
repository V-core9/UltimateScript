<?php
?>
<div class="topHeader">
    <div class="logo">
        LOGO INFO
    </div>
    <div class="centerMenu">
        <ul>
            <li class="first">Start Me</li>
            <li class="first">Or second</li>
            <li class="first">This GOOD</li>
        </ul>
    </div>

    <div class="rightMenu">
                
        <ul class="languagepicker large dropDown">
            <a href="#nl"><li><img src="http://i65.tinypic.com/2d0kyno.png"/>Nederlands</li></a>
            <a href="#en"><li><img src="http://i64.tinypic.com/fd60km.png"/>English</li></a>
            <a href="#de" class="active"><li><img src="http://i63.tinypic.com/10zmzyb.png"/>German</li></a>
            <a href="#fr"><li><img src="http://i65.tinypic.com/300b30k.png"/>Français</li></a>
            <a href="#es"><li><img src="http://i68.tinypic.com/avo5ky.png"/>Español</li></a>
            <a href="#it"><li><img src="http://i65.tinypic.com/23jl6bn.png"/>Italiano</li></a>
        </ul>
        <div class="userInfo">
            <button class="logoutButton" style="position: absolute; z-index: 200;">Log Out</button>
        </div>
    </div>
</div>






<div class="mainMenuSide">

    <div class="accordion-container">
  <div class="set">
    <a href="#">
      Vestibulum 
      <i class="fa fa-plus"></i>
    </a>
    <div class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
    </div>
  </div>
  <div class="set">
    <a href="#">
      Phasellus 
      <i class="fa fa-plus"></i>
    </a>
    <div class="content">
      <p> Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus. Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>
    </div>
  </div>
  <div class="set">
    <a href="#">
      Praesent 
      <i class="fa fa-plus"></i>
    </a>
    <div class="content">
      <p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
    </div>
  </div>
  <div class="set">
    <a href="#">
      Curabitur 
      <i class="fa fa-plus"></i> 
    </a>
    <div class="content">
      <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
    </div>
  </div>
</div>




</div>






























<style>

.topHeader {
    width: 100%;
    height: 50px;
    background: rgba(255, 255, 255, 0.25);
    z-index: 100;
    position: relative;
}

.topHeader .logo {
    width: 250px;
    height: 50px;
    background: rgba(0, 0, 0, 0.15);
    float: left;
}

.topHeader .centerMenu {
    width: 500px;
    float: left;
    height: 50px;
}

.topHeader div.centerMenu > ul li {
    display: inline-block;
    height: 50px;
    line-height: 50px;
    padding: 0px 10px;
}

.topHeader div.centerMenu > ul {
    padding: 0px;
    margin: 0px;
}

.topHeader div.centerMenu > ul li:hover {
    background: white;
}

.topHeader .rightMenu {max-width: 250px;width: 250px;display: block;height: 50px;background: rgba(0, 0, 0, 0.15);float: right;}




.topHeader .languagepicker {
	
    background-color: rgba(0, 0, 0, 0.75);
    display: inline-block;
    padding: 0;
    height: 50px;
    overflow: hidden;
    transition: all .3s ease;
    margin: 0;
    vertical-align: top;
    float: left;
    border: 1px solid transparent;
}

.topHeader .languagepicker.show {
    border: 1px solid #007eff;
}

.topHeader .languagepicker a{
	color: white;
	text-decoration: none;
}

.topHeader .languagepicker li {
    display: block;
    padding: 0px 20px;
    line-height: 50px;
    /* border-top: 1px solid #EEE; */
    height: 0px;
    display: block;
    overflow: hidden;
}

.topHeader .languagepicker li:hover{
	background-color: rgba(255,255,255,0.1);
}

.topHeader .languagepicker a.active li {
    border: none;
    background: rgba(255, 255, 255, 0.15);
    color: white;
    height: auto;
}

.topHeader .languagepicker.show a li {
    height: auto;

}

.topHeader .languagepicker li img {
	margin-right: 5px;
}

.topHeader .large.show {
	/* 
	don't forget the 1px border!
	The first language is 40px heigh, 
	the others are 41px
	*/
	height: 305px;
}
















.mainMenuSide {
    width: 250px;
    height: calc(100% - 100px);
    display: block;
    position: fixed;
    top: 50px;
    left: 0px;
    background: rgba(0, 0, 0, 0.5);
    z-index: 2000;
}
















.accordion-container{
  position: relative;
  max-width: 500px;
  height: auto;
  margin: 10px auto;
}
.accordion-container > h2{
  text-align: center;
  color: #fff;
  padding-bottom: 5px;
  margin-bottom: 20px;
  padding-bottom: 15px;
  border-bottom: 1px solid #ddd;
}
.set{
  position: relative;
  width: 100%;
  height: auto;
}
.set > a{
    display: block;
    padding: 10px 15px;
    text-decoration: none;
    color: white;
    font-weight: 600;
    border-bottom: 1px solid #ddd0;
    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    transition: all 0.2s linear;
}
.set > a i{
  float: right;
  margin-top: 2px;
}
.set > a.active{
  background-color:#3399cc;
  color: #fff;
}
.set > a:hover {
    background: rgba(255, 255, 255, .15);
}
.content{
    background-color: rgba(255, 255, 255, .15);
    border-bottom: 1px solid #fff;
    display: none;
}
.content p{
    padding: 10px 15px;
    margin: 0;
    color: white;
}
</style>
