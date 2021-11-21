<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>University Website</title>
        <link rel="icon" href="images/icon.jpg">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body onload="delay()">
        <div id="loading">
        </div>
        <section class="sub-header">
            <nav>
                <a href="index.html"><img src="images/logo.png"></a>
                <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="index.html">HOME</a></li>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="faq.html">FAQs</a></li>
					<li><a href="course.html">OUR COURSES</a></li>
					<li><a href="notices.html">NOTICES</a></li>
					<li><a href="contact.html">CONTACT US</a></li>
					<li><a href="locate.html"><i class="fa fa-map-marker" style="color: white; display: contents; font-size: 25px;"></i></a></li>
				</ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>Signup here...</h1>
        </section>
        <section class="login">
		<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
        </section>
        <section class="footer">
            <div class="container">
                <div id ="footer_row" class="row">
                        <div class="univ_name_address_phoneno">
							<a href="index.html"><img class="footer_logo" src="images/logo.png"></a>
                            <h5 class="footer-title">Netaji Subhas University of Technology</h5>
							<p>Dwarka Sector-3, Dwarka,<br> Delhi, 110078</p>
							<ul>
								<li><a href="javascript:;" ><i class="fa fa-envelope-o"> group2universitywebsite@gmail.com</i></a></li>
								<li><a href="javascript:;"><i class="fa fa-phone"> 011-2345-6789</i></a></li>
							</ul>
                        </div>
					<div class="quick_links">
						<div id ="footer_row"  class="row">							
								<div class="link_list">
									<h5 class="link-title">Quick Links</h5>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="courses.html">Courses</a></li>
										<li><a href="faq.html">FAQs</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div>							
								<div class="link_list">
									<h5 class="link-title">Miscellaneous</h5>
									<ul>
										<li><a href="notices.html">Notices</a></li>
										<li><a href="locate.html">Reach to US</a></li>
									</ul>
								</div>
						</div>
                    </div>
                        <div class="weather_widget_website">
                            <h5 class="title"><i class="fa fa-sun-o">Weather</i></h5>
							<!-- weather widget start -->
							<div id="m-booked-weather-bl250-13082">
								<div class="booked-wzs-250-175 weather-customize" style="background-color:#000000;width:302px;" id="width1">
								<div class="booked-wzs-250-175_in">
									<div class="booked-wzs-250-175-data">
										<div class="booked-wzs-250-175-left-img wrz-01"> </div>
										<div class="booked-wzs-250-175-right">
											<div class="booked-wzs-day-deck">
											<div class="booked-wzs-day-val">
												<div class="booked-wzs-day-number"><span class="plus">+</span>28</div>
												<div class="booked-wzs-day-dergee">
													<div class="booked-wzs-day-dergee-val">&deg;</div>
													<div class="booked-wzs-day-dergee-name">C</div>
												</div>
											</div>
											<div class="booked-wzs-day">
												<div class="booked-wzs-day-d">H: <span class="plus">+</span>30&deg;</div>
												<div class="booked-wzs-day-n">L: <span class="plus">+</span>22&deg;</div>
											</div>
											</div>
											<div class="booked-wzs-250-175-info">
											<div class="booked-wzs-250-175-city">New Delhi </div>
											<div class="booked-wzs-250-175-date">Monday, 08 November</div>
											<div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div>
											</div>
										</div>
									</div>
									<table cellpadding="0" cellspacing="0" class="booked-wzs-table-250">
										<tr>
											<td>Sun</td>
											<td>Tue</td>
											<td>Wed</td>
											<td>Thu</td>
											<td>Fri</td>
											<td>Sat</td>
										</tr>
										<tr>
											<td class="week-day-ico">
											<div class="wrz-sml wrzs-01"></div>
											</td>
											<td class="week-day-ico">
											<div class="wrz-sml wrzs-06"></div>
											</td>
											<td class="week-day-ico">
											<div class="wrz-sml wrzs-03"></div>
											</td>
											<td class="week-day-ico">
											<div class="wrz-sml wrzs-03"></div>
											</td>
											<td class="week-day-ico">
											<div class="wrz-sml wrzs-03"></div>
											</td>
											<td class="week-day-ico">
											<div class="wrz-sml wrzs-03"></div>
											</td>
										</tr>
										<tr>
											<td class="week-day-val"><span class="plus">+</span>30&deg;</td>
											<td class="week-day-val"><span class="plus">+</span>30&deg;</td>
											<td class="week-day-val"><span class="plus">+</span>30&deg;</td>
											<td class="week-day-val"><span class="plus">+</span>30&deg;</td>
											<td class="week-day-val"><span class="plus">+</span>30&deg;</td>
											<td class="week-day-val"><span class="plus">+</span>29&deg;</td>
										</tr>
										<tr>
											<td class="week-day-val"><span class="plus">+</span>20&deg;</td>
											<td class="week-day-val"><span class="plus">+</span>22&deg;</td>
											<td class="week-day-val"><span class="plus">+</span>22&deg;</td>
											<td class="week-day-val"><span class="plus">+</span>22&deg;</td>
											<td class="week-day-val"><span class="plus">+</span>21&deg;</td>
											<td class="week-day-val"><span class="plus">+</span>21&deg;</td>
										</tr>
									</table>
								</div>
								</div>
							</div>
							<script type="text/javascript"> var css_file=document.createElement("link"); var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData_13082(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-13082'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=18038;type=3;scode=124;ltid=3458;domid=w209;anc_id=52839;countday=undefined;cmetric=1;wlangID=1;color=137AE9;wwidth=302;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=13082';var weatherBookedScript = document.createElement("script"); weatherBookedScript.setAttribute("type", "text/javascript"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script><!-- weather widget end -->
                        </div>
                </div>
            </div>
        </section>
        <section class="footer-bottom">
            <div class="container">
                <div class="makers">
                    <p>Website made by Group 2(Prateek, Aviral and Yashasvee)</p>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="javascript/loader.js">/*Loader*/</script>
        <script type="text/javascript" src="javascript/menu.js"> /*For menu in mobile devices*/</script>
    </body>
</html>
