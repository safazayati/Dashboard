<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
    rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./index.css">
    <style>
	.content table{
		border: 0;
		text-align: center;
		display: block;
	}
	.content img {
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 60%;
		
	}
    a {
	color: #E5F2FB;
	text-decoration: none;
}
a:hover {
	color: #09548B;
}
p {
	margin: 0 0 17px;
	padding: 0;
	line-height: 18px;
}
.wrapper {
	width: 710px;
	margin: 20px auto;
}
.nav {
	background: #fff url(images/nav_bg.png) repeat-x;
	float: left;
}
.nev-wrapper {
	clear: both;
	float: left;
}
.nav-left {
	background: url(images/nav_left.png) no-repeat top left;
	float: left;
	width: 11px;
	height: 41px;
}
.nav-right {
	background: url(images/nav_right.png) no-repeat top right;
	float: left;
	width: 11px;
	height: 41px;
}
.nav ul {
	width: 648px;
	height: 38px;
	float: left;
	margin: 0;
	padding-top: 3px;
	list-style: none;
	font-size: 15px;
}
.nav li {
	float: left;
	padding: 0 7px;
	background: url(images/split.png) no-repeat right center;
	position: relative;
	z-index: 1;
}
.nav li.last {
	background:none;
}
.nav li:hover {
	z-index:2;
}
.nav li a {
	display: block;
	line-height: 38px;
	overflow: hidden;
	float: left;
}
a .menu-left {
	background: url(images/menu_left.gif) no-repeat left top;
	width: 8px;
	height: 32px;
	line-height: 35px;
	display: block;
	float: left;
}
a .menu-mid {
	background: url(images/menu_mid.gif) repeat-x top left;
	height: 32px;
	line-height: 35px;
	display: block;
	float: left;
}
a .menu-right {
	background: url(images/menu_right.gif) no-repeat top left;
	width: 8px;
	height: 32px;
	line-height: 35px;
	display: block;
	float: left;
}
.nav li a:hover .menu-left,
.nav li.active a .menu-left,
.nav li:hover a .menu-left,
.nav li a:hover .menu-mid,
.nav li.active a .menu-mid,
.nav li:hover a .menu-mid,
.nav li a:hover .menu-right,
.nav li.active a .menu-right,
.nav li:hover a .menu-right {
	background-position: 0 -37px;
	line-height: 35px;
}
.nav li a:hover,
.nav li.active a,
.nav li.hover a,
.nav li:hover a {
	color: #09548B;
}
.nav li:hover .sub,
.nav li.hover .sub {
	display:block;
}
.nav li .sub {
	display: none;
	position: absolute;
	top: 27px;
	left: 6px;
	background: url(images/submenu_top.png) no-repeat;
	width: 186px;
	padding-top: 9px;
}
.nav li ul {
	background: url(images/submenu_bg.png) repeat-y;
	width: 162px;
	height: auto;
	margin: 0;
	padding: 0 12px 10px;
	list-style: none;
	font-size: 14px;
}

.nav li:hover li,
.nav li.active li {
	width: 100%;
	padding: 1px 0 2px;
	border-bottom: 1px #C1D9F0 dashed;
	background: none !important;
}
.nav li:hover li a,
.nav li.active li a {
	color: #09548B;
	background: none !important;
	line-height: normal;
	width: 156px;
	padding: 8px 3px 3px;
	text-indent: 1px;
}
.nav li:hover li a:hover,
.nav li.active li a:hover {
	color: #fff;
	background: #165B9F !important;
	text-decoration: none;
	line-height: normal;
}
/*IE*/
.nav li li a:hover,
.nav li li a:hover {
	color: #fff;
	background: #165B9F !important;
	text-decoration: none;
	line-height: normal;
}
/**/
.nav .btm-bg {
	background: url(images/submenu_bottom.png) no-repeat;
	width: 205px;
	height: 9px;
	overflow: hidden;
	clear: both;
}
.content {
	width: 670px;
	background: transparent url(images/content_bg.png) repeat-y;
	float: left;
	padding: 10px 20px;
}
.content h1 {
	color: #000;
	font-weight: 400;
	text-transform: uppercase;
	font-size: 18px;
	border-bottom: 1px dashed #000;
}
.content h2 {
	font-weight: 400;
	text-transform: uppercase;
	font-size: 14px;
	padding-left: 10px;
	margin-bottom: -5px;
}
.content p {
	padding: 0 15px;
	text-align: justify;	
}
.content-bottom {
	width: 710px;
	background: transparent url(images/content_bottom.png) no-repeat;
	height: 13px;
	float: left;
}
</style>	
    
</head>
<body> 
    <div class="container">
        <aside>
            <div class="top"> 
                <div class="logo">
                    <img src="./images/logo crmn.png">
                    <h2>CR<span class="danger">MN</span> </h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
			<div class="sidebar">
                <a href="espaceUser.php">
                    <span class="material-icons-sharp">account_circle</span>
                    <h3>Mon espace</h3>
                </a>
                <a href="usertableau.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Tableau de bord</h3>
                </a>
                 <!---------  <a href="documentsUser.php" >
                    <span class="material-icons-sharp">folder_open</span>
                    <h3>Documents</h3>
                </a>     ------------>             
                <a href="conges_abs_user.php">
                    <span class="material-icons-sharp">holiday_village</span>
                    <h3>Congés et Absences</h3>
                </a>
                <a href="calendrierUser.php">
                    <span class="material-icons-sharp">today</span>
                    <h3>Calendrier</h3>
                </a>
                <a href="disponibiliteUser.php">
                    <span class="material-icons-sharp">meeting_room</span>
                    <h3>Disponibilité des salles</h3>
                </a>
                <a href="ordonnancement.php">
                    <span class="material-icons-sharp">assignment</span>
                    <h3>Ordonnancement</h3>
                </a>
                <a href="autoparkUser.php">
                   <span class="material-icons-sharp">
                       local_parking
                       </span>
                   <h3>Auto-park</h3>
               </a>
               
              
                <a href="logout.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Déconnexion</h3>
                </a>
            </div>
        </aside>
        <!---------END OF ASIDE------------>
        <main>
            <h1>Ordonnancement</h1>
            <div class="wrapper">
		<div class="nav-wrapper">
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<div class="nav-left"></div>
			<div class="nav">
				<ul id="navigation">
                	<li class="">
						<a href="ordonnancement.php">
							<span class="menu-left"></span>
							<span class="menu-mid"><strong>Menu</strong></span>
							<span class="menu-right"></span>
						</a>
                  </li>
                   	<li class="">
						<a href="Saisie_User.php">
							<span class="menu-left"></span>
							<span class="menu-mid"><strong>Soumission des demandes</strong></span>
							<span class="menu-right"></span>
						</a>
			   			
			   			
			   		</li>

			   		<li class="">
						<a href="Cons_user.php">
							<span class="menu-left"></span>
							<span class="menu-mid"><strong>Resultat des demandes</strong></span>
							<span class="menu-right"></span>
						</a>
	            	   	
					</li>

			   	</ul>
			</div>
			<div class="nav-right"></div>
	  </div>
		<div class="content">
       <table>
	   <tr>
       <td>
	   <img src="images/logo crmn.png" width="200" height="200"  />  </td>
       </tr>
       </table>
          <tr>
          <td>
          <!-- Page Index-->
          </td>
          </tr>
        </table>
		</div>
		<div class="content-bottom">
        </div>
	</div>
            

        </main>
        <!--------- END OF MAIN------------>

        <div class="right">
          
 <!---------END OF TOP------------>
            
        </div>
    </div>
    <script src="./index.js"></script>
</body>
</html>