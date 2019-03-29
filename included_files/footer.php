


<div class="footer">
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
            <a href="#CLOSE"><li><img src="http://i65.tinypic.com/23jl6bn.png"/>XXXX</li></a>
        </ul>
        <div class="userInfo">
            <button class="logoutButton" style="position: absolute; z-index: 200;">Log Out</button>
        </div>
    </div>
</div>

<script>


</script>


<style>

.footer {
    width: 100%;
    height: 50px;
    background: rgba(255, 255, 255, 0.25);
    z-index: 100;
    bottom: 0px;
    position: fixed;
    left: 0px;
}

.footer .logo {
    width: 250px;
    height: 50px;
    background: rgba(0, 0, 0, 0.15);
    float: left;
}

.footer .centerMenu {
    width: 500px;
    float: left;
    height: 50px;
}

.footer div.centerMenu > ul li {
    display: inline-block;
    height: 50px;
    line-height: 50px;
    padding: 0px 10px;
}

.footer div.centerMenu > ul {
    padding: 0px;
    margin: 0px;
}

.footer div.centerMenu > ul li:hover {
    background: white;
}

.footer .rightMenu {
    max-width: 250px;
    width: 250px;
    display: block;
    height: 48px;
    background: rgba(0, 0, 0, 0.15);
    float: right;
    }




.footer .languagepicker {
	
    background-color: rgba(0, 0, 0, 0.75);
    display: inline-block;
    padding: 0;
    height: 48px;
    overflow: hidden;
    transition: all .3s ease;
    margin: 0;
    vertical-align: top;
    float: left;
    border: 1px solid transparent;
}

.footer .languagepicker.show {
    border: 1px solid #007eff;
}

.footer .languagepicker a{
	color: white;
	text-decoration: none;
}

.footer .languagepicker li {
    display: block;
    padding: 0px 20px;
    line-height: 50px;
    /* border-top: 1px solid #EEE; */
    height: 0px;
    display: block;
    overflow: hidden;
}

.footer .languagepicker li:hover{
	background-color: rgba(255,255,255,0.1);
}

.footer .languagepicker a.active li {
    border: none;
    background: rgba(255, 255, 255, 0.15);
    color: white;
    height: auto;
}

.languagepicker.show a li {
    height: auto;

}

.footer .languagepicker li img {
	margin-right: 5px;
}

.footer .large.show {
	/* 
	don't forget the 1px border!
	The first language is 40px heigh, 
	the others are 41px
	*/
    height: 305px;
    top: -257px;
    position: relative;
}
</style>



