<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Stephen Manz's Employment</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/jquery-ui.css" rel="stylesheet">
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script language="javascript" type="text/javascript">
  $(document).ready(function() {
    $('#trigger').click(function(){
      $("#dialog").dialog();
    }); 
  });                  
</script>
</head>

<body>
<?
	include 'navbar.php';
	?>
<div class="container-fluid">
	<div class="row">
		<a href="#" id="trigger">View my Resume</a>
			<div id="dialog" style="display:none">
				<iframe id="resumeiframe" src="resume.pdf" width="100%" height="842px"></iframe>
			</div> 
        <div class="col-md-10 col-md-offset-1">
			<h2><b>Employment</b></h2>
			<h3><b>Jr. Systems Administrator</b> - <a href="http://www.matrix.msu.edu">MATRIX Center for Digital Humanities</a></h3>
				<ul>
					<li>Managed, designed, and implemented PXE Boot through Windows Server 2008 to install Windows 10 on twenty workstations.</li>
					<li>Coordinated upgrade of deprecated Windows Server 2003 running AD, DNS, file sharing, and printer services to Windows Server 2012 for a satellite department.</li>
					<li>Tackled a wide variety of systems-related jobs on a daily basis.</li>
					<li>Received merit raise after two months for exemplary performance.</li>
				</ul>
				<h3><b>Student Lead & I.T. Consultant</b> - <a href="https://cstore.msu.edu/help-repair">MSU Computer Help Desk and Repair</a></h3>
				<ul>
					<li>Created a detailed list of major and minor efficiency flaws using input from fellow employees and customers. A modified version was later implemented.</li>
					<li>Received promotion after six months to Student Lead for exceptional performance and leadership abilities.</li>
					<li>Improved technical problem-solving skills through on-the-spot consulting—specifically, hardware and software troubleshooting and repair.</li>
				</ul>
			<h3><b>DevMe</b> - <a href="https://devme.tech"> Personal Project </a></h3> <img style="float:right; height:20%; width:20%;" src="http://devme.tech/images/devmeLogo2.png"/>
				<ul>
					<li>Recipient of Radix’s “Best use of the .tech Domain” Award</li>
					<li>Recipient of Top 5 Overall Software Hacks</li>
					<li>Matchmaking tool for developers and content creators – Built web app using Bootstrap, AngularJS, and PHP.</li>
				</ul>
		</div>
	</div>
</div>
</body>
</html>
