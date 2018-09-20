<!DOCTYPE html>
<html lang="pl">

	<head>
		
		<meta charset="utf-8">
		<title>ShowCase by Mateusz Cybulski</title>
		<meta name="description" content=" Welcome to ShowCase by Mateusz Cybulski. 
		I put all of private, or public projects that I've, or I was a part of in here. Apps, Websites, and more...">
		<meta name="keywords" content="showcase, mateusz, cybulski, deveroper, apps">
		<meta name="author" content="Mateusz Cybulski">

		
		<meta http-equiv="X-Ua-Compatible" content="IE=edge, chrome=1">
		
		<link rel="shortcut icon" href="css/img/icon.png">
		<link rel="stylesheet" href="css/css/fontello.css">
		<link rel="stylesheet" href="css/main.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="javascript/jquery.scrollTo.min.js"></script>
		<script src="javascript/jquery.validate.min.js"></script>
		<script src="javascript/script.js"></script>
	</head>
	
	<body>
		<header>
			<nav>
			  <ul class="main-nav">
				<li><a id="logo" href="#">//<i class="demo-icon icon-left-dir"></i></a></li>
				<li><a id="menu-now" href="#">Now</a></li>
				<li><a id="menu-about" href="#">About</a></li>
				<li><a id="menu-portfolio" href="#">Portfolio</a></li>
				<li><a id="menu-contact" href="#">Contact</a></li>
			  </ul>
			</nav>
		</header>
		<main>
			<article  id="now">
			
			</article>
			<article  id="about">
				<div class="panel-column">
					<div class="img"></div>
					<div class="name">Mateusz Cybulski</div>
					<div class="description">
						Java Junior Developer, uczeń technikum informatycznego , miłośnik literatury naukowej i schludnego oprogramowania (tak wewnątrz jak i na zewnątrz).
						Uczę się kiedy mogę i czego mogę, bo na pierwszym miejscu stawiam rozwój, więc mimo dobrej znajomości Javy i języków
						front-endowych, jestem pewien, że wiele języków jeszcze przede mną. Chętnie podejmuję się co raz bardziej wymagających projektów, uwielbiam nieszablonowe myślenie i kreatywną pracę.
						Nienawidzę ograniczeń, gdy tylko jakieś stanie mi na drodze, priorytetem staje się dla mnie pokonanie go.
					</div>
				</div>
			</article>
			<article  id="portfolio">
				<div id="content-portfolio">
					<ul id="list-portfolio">
						<li></li>
						<li></li>
					</ul>
					<div id="next" class="circle" >&rang;</div>
				</div>
			</article>
			<article  id="contact">
				<div class="panel">
					<div class="contact-form">
						<form id="form" action="php/send.php">
						<div class="inputs">
							<input type="text" id="f-name" placeholder="name"/>
							<input type="text" id="f-mail" placeholder="e-mail"/>
						</div>
							<textarea id="f-contact" placeholder="What's up?"></textarea>
							<input type="submit" value="send" style="display:none !important;"/>
						</form>
					</div>
					<div class="social-media">
						<a target="_blank" title="LinkedIn" href="http://www.linkedin.com/in/mateusz-cybulski"><div class="circle" id="linkedin"><i class="demo-icon icon-linkedin"></i></div></a>
						<a target="_blank" title="Facebook Messenger" href="https://m.me/i.am.m4tth3w"><div class="circle" id="messenger"><i class="demo-icon icon-comment"></i></div></a>
						<a target="_blank" title="Twitter" href="https://twitter.com/@MateuszCybulsky"><div class="circle" id="twitter"><i class="demo-icon icon-twitter"></i></div></a>
						<div class="circle" id="send" title="send"><i class="demo-icon icon-mail"></i></div>
					</div>
				</div>
			</article>
		</main>
		<footer>cybulskimateusz.github.io &copy; </footer>
	</body>
	
</html>