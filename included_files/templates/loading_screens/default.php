<div class="loadingScreen">
    <div class="slider background">
	    <div class="line"></div>
        <div class="break dot1"></div>
        <div class="break dot2"></div>
        <div class="break dot3"></div>
    </div>
    <div class="loading">
        <h1>Loading...</h1>
        <div class="slider">
	        <div class="line"></div>
            <div class="break dot1"></div>
            <div class="break dot2"></div>
            <div class="break dot3"></div>
        </div>
    </div>
</div>

<style>

.loadingScreen{
  position: absolute;
  z-index: 200;
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  z-index: 5000;
  background: rgba(0,0,0,.98);
}

.loading {
  position: absolute;
  left: 10px;
  bottom: 10px;
}

h1{
  color:#4a8df8;
  font-family: sans-serif; 
  font-weight:400; 
  font-stretch:normal;
  font-size:4em;
  
}
.slider{
  position:absolute;
  width: 100%;
  height:2px;
  margin-top:-30px;
}


.slider.background {
  margin: 0px;
  overflow: hidden;
  top: 25%;
  height: 50%;
  filter: blur(150px);
}




.line{
  position:absolute;
  background:#4a8df8;
  width: 100%;
  height:2px;
  
}

.slider.background .line{
  height: 100%;
}

.break{
  position:absolute;
  background:#222;
  width:6px;
  height:2px;  
}


.slider.background .break{
  height: 100%;
  width:38px;
  
}

.dot1{ animation: loading 2s infinite;}
.dot2{ animation: loading 2s 0.5s infinite; }
.dot3{ animation: loading 2s 1s infinite; }
.dot4{ animation: loading 2s 1.5s infinite; }

@keyframes loading {
 from { left: 0; }
 to { left: 100%; }
}

</style>
