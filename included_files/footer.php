


<div class="footer">
    <div class="leftOptions">
            <button class="fullScreenButton" style=""><i class="fas fa-expand-arrows-alt"></i></button>
            <button class="appSettingsButton" style=""><i class="fas fa-cogs"></i></button>
            <button class="logoutButton" style=""><i class="fas fa-sign-out-alt"></i></button>
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
            <a href="#nl"><li>Nederlands</li></a>
            <a href="#en"><li>English</li></a>
            <a href="#de" class="active"><li>German</li></a>
            <a href="#fr"><li>Français</li></a>
            <a href="#es"><li>Español</li></a>
            <a href="#CLOSE"><li>XXXX</li></a>
        </ul>
        <button class="showNotifications" style=""><i class="far fa-list-alt"></i></button>
    </div>
</div>

<script>


</script>


<style>

.footer {
    width: 100%;
    height: 40px;
    background: rgba(255, 255, 255, 0.25);
    z-index: 100;
    bottom: 0px;
    position: fixed;
    left: 0px;
}

.footer .leftOptions {
    width: 250px;
    height: 40px;
    background: rgba(0, 0, 0, 0.15);
    float: left;
}

.footer .centerMenu {
    width: 500px;
    float: left;
    height: 40px;
}

.footer div.centerMenu > ul li {
    display: inline-block;
    height: 40px;
    line-height: 40px;
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
    height: 38px;
    background: rgba(0, 0, 0, 0.15);
    float: right;
    }




.footer .languagepicker {
	
    background-color: rgba(0, 0, 0, 0.75);
    display: inline-block;
    padding: 0;
    height: 38px;
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
    line-height: 40px;
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
    height: 245px;
    top: -197px;
    position: relative;
}



.footer .leftOptions button {
    width: 83.25px;
    float: left;
    font-size: 20px;
    padding: 10px;
    background: transparent;
    color: #828282;
    cursor: pointer;
    border: none; 

}

.footer .leftOptions button:hover {
    color: white;
    background: rgba(255, 255, 255, 0.15);
}
</style>



