<div class="loadingScreen heartpulse">

<div class="loading">

  <svg version="1.2" height="500" width="1000" xmlns="http://www.w3.org/2000/svg"
    viewport="0 0 60 60" xmlns:xlink="http://www.w3.org/1999/xlink">

    <path id="pulsar" stroke="rgba(0,155,155,1)" fill="none" stroke-width="1"stroke-linejoin="round" d="M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210" /> 
     
</svg>
  
</div>

<style>

.loadingScreen.heartpulse {
    width: 100%;
    height: 100%;
    position: absolute;
    display: block;
    background: #0e0e0e;
    z-index: 5000;
}

.loading {
  width: 100%;
  max-width: 700px;
  margin: 0 auto;
  padding: 0;
  position: relative; }

.loading svg {
  width: 100%;
  height: 100%;
    top: calc(50% - 150px);
    position: fixed;
}

.loading #pulsar{
  stroke-dasharray:281;
  -webkit-animation: dash 2.5s infinite linear forwards;
}

/*Animation*/
@-webkit-keyframes dash{ from{stroke-dashoffset:814;} to {stroke-dashoffset:-814;}}

</style>

</div>