<?php
ob_start();
include ('session.php');
include('coba2.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>TATA KELOLA KINERJA TEKNOLOGI INFORMASI MENGGUNAKAN
IT BALANCED SCORECARD</title>
	<meta name="description" content="TATA KELOLA KINERJA TEKNOLOGI INFORMASI MENGGUNAKAN
IT BALANCED SCORECARD">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="template.php"><span>IT-BSC</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo $session_id; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								
								<li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
			<?php include "sidebar.php"; ?>
			
			
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="template.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

				
			<div class="row-fluid">
				
				<div class="widget red span3" onTablet="span4" onDesktop="span3">
					
					<h3><span class="glyphicons globe"><i></i></span>CORPORATE CONTRIBUTION</h3>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
							<?php
									$hasil=mysql_query("SELECT jawaban,
										CASE jawaban
										WHEN 'A' THEN Count(jawaban)*1 
										WHEN 'B' THEN COUNT(jawaban)*2 
										WHEN 'C' THEN COUNT(jawaban)*3 
										WHEN 'D' THEN COUNT(jawaban)*4 
										WHEN 'E' THEN COUNT(jawaban)*5 
										END as jumlah
										FROM jawaban,tbkuesioner
										WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND
										(tbkuesioner.id_dimensi=1)
										GROUP BY jawaban");
									$jumlah=mysql_num_rows($hasil);
									$urut=0;
									$total=0;
									$kategori="";
									while($row =mysql_fetch_array($hasil))
									{
										$urut=$urut+1;
										$jawaban=$row["jawaban"];
										$jumlah=$row["jumlah"];
						
										$stringedit =  str_replace(" ", ",", ($jumlah. " "));
										$total=$total+$jumlah;
										
									?>
							<div class="singleBar">
							
								<div class="bar">
								
									<div class="value">
										<span><?php echo $jumlah; ?></span>
									</div>
								
								</div>
								
								<div class="title"><?php echo $jawaban; ?></div>
								
							</div>
							
								
							<?php } ?>
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->
				
				<div class="widget blue span3" onTablet="span4" onDesktop="span3">
					
					<h3><span class="glyphicons magic"><i></i></span>STAKEHOLDER ORIENTATION</h3>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
							<?php
									$hasil=mysql_query("SELECT jawaban,
										CASE jawaban
										WHEN 'A' THEN Count(jawaban)*1 
										WHEN 'B' THEN COUNT(jawaban)*2 
										WHEN 'C' THEN COUNT(jawaban)*3 
										WHEN 'D' THEN COUNT(jawaban)*4 
										WHEN 'E' THEN COUNT(jawaban)*5 
										END as jumlah
										FROM jawaban,tbkuesioner
										WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND
										(tbkuesioner.id_dimensi=2)
										GROUP BY jawaban");
									$jumlah=mysql_num_rows($hasil);
									$urut=0;
									$total=0;
									$kategori="";
									while($row =mysql_fetch_array($hasil))
									{
										$urut=$urut+1;
										$jawaban=$row["jawaban"];
										$jumlah=$row["jumlah"];
						
										$stringedit =  str_replace(" ", ",", ($jumlah. " "));
										$total=$total+$jumlah;
										
									?>
							<div class="singleBar">
							
								<div class="bar">
								
									<div class="value">
										<span><?php echo $jumlah; ?></span>
									</div>
								
								</div>
								
								<div class="title"><?php echo $jawaban; ?></div>
								
							</div>
							
								
							<?php } ?>
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->
				
				<div class="widget yellow span3" onTablet="span4" onDesktop="span3">
					
					<h3><span class="glyphicons pie_chart"><i></i></span>OPERATIONAL EXCELLENCE</h3>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
							<?php
									$hasil=mysql_query("SELECT jawaban,
										CASE jawaban
										WHEN 'A' THEN Count(jawaban)*1 
										WHEN 'B' THEN COUNT(jawaban)*2 
										WHEN 'C' THEN COUNT(jawaban)*3 
										WHEN 'D' THEN COUNT(jawaban)*4 
										WHEN 'E' THEN COUNT(jawaban)*5 
										END as jumlah
										FROM jawaban,tbkuesioner
										WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND
										(tbkuesioner.id_dimensi=3)
										GROUP BY jawaban");
									$jumlah=mysql_num_rows($hasil);
									$urut=0;
									$total=0;
									$kategori="";
									while($row =mysql_fetch_array($hasil))
									{
										$urut=$urut+1;
										$jawaban=$row["jawaban"];
										$jumlah=$row["jumlah"];
						
										$stringedit =  str_replace(" ", ",", ($jumlah. " "));
										$total=$total+$jumlah;
										
									?>
							<div class="singleBar">
							
								<div class="bar">
								
									<div class="value">
										<span><?php echo $jumlah; ?></span>
									</div>
								
								</div>
								
								<div class="title"><?php echo $jawaban; ?></div>
								
							</div>
							
								
							<?php } ?>
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->

				<div class="widget green span3" onTablet="span4" onDesktop="span3">
					
					<h3><span class="glyphicons snowflake"><i></i></span>FUTURE ORIENTATION</h3>
					
					<hr>
					
					<div class="content">
						
						<div class="verticalChart">
							<?php
									$hasil=mysql_query("SELECT jawaban,
										CASE jawaban
										WHEN 'A' THEN Count(jawaban)*1 
										WHEN 'B' THEN COUNT(jawaban)*2 
										WHEN 'C' THEN COUNT(jawaban)*3 
										WHEN 'D' THEN COUNT(jawaban)*4 
										WHEN 'E' THEN COUNT(jawaban)*5 
										END as jumlah
										FROM jawaban,tbkuesioner
										WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND
										(tbkuesioner.id_dimensi=4)
										GROUP BY jawaban");
									$jumlah=mysql_num_rows($hasil);
									$urut=0;
									$total=0;
									$kategori="";
									while($row =mysql_fetch_array($hasil))
									{
										$urut=$urut+1;
										$jawaban=$row["jawaban"];
										$jumlah=$row["jumlah"];
						
										$stringedit =  str_replace(" ", ",", ($jumlah. " "));
										$total=$total+$jumlah;
										
									?>
							<div class="singleBar">
							
								<div class="bar">
								
									<div class="value">
										<span><?php echo $jumlah; ?></span>
									</div>
								
								</div>
								
								<div class="title"><?php echo $jawaban; ?></div>
								
							</div>
							
								
							<?php } ?>
							<div class="clearfix"></div>
							
						</div>
					
					</div>
					
				</div><!--/span-->

			<div class="row-fluid hideInIE8 circleStats">
				
				<div class="span3" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox yellow">
						<div class="header">CORPORATE CONTRIBUTION</div>
						<span class="percent">percent</span>
						<?php
									$hasil=mysql_query("SELECT jawaban,
										CASE jawaban
										WHEN 'A' THEN Count(jawaban)*1 
										WHEN 'B' THEN COUNT(jawaban)*2 
										WHEN 'C' THEN COUNT(jawaban)*3 
										WHEN 'D' THEN COUNT(jawaban)*4 
										WHEN 'E' THEN COUNT(jawaban)*5 
										END as jumlah
										FROM jawaban,tbkuesioner
										WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND
										(tbkuesioner.id_dimensi=1)
										GROUP BY jawaban");
									$jumlah=mysql_num_rows($hasil);
									$urut=0;
									$total=0;
									$kategori="";
									while($row =mysql_fetch_array($hasil))
									{
										$urut=$urut+1;
										$jawaban=$row["jawaban"];
										$jumlah=$row["jumlah"];
						
										$stringedit =  str_replace(" ", ",", ($jumlah. " "));
										$total=$total+$jumlah;
									}
									if (($total>=27) and ($total<=48.6)) {
										$kategori="Sangat Buruk";
										$bobot_kinerja=1;
									} elseif (($total>=48.7) and ($total<=70.2)) {
										$kategori="Buruk";
										$bobot_kinerja=2;
									} elseif (($total>=70.3) and ($total<=91.8)) {
										$kategori="Cukup Baik";
										$bobot_kinerja=3;
									} elseif (($total>=91.9) and ($total<=113.4)) {
										$kategori="Baik";
										$bobot_kinerja=4;
									} else {
										$kategori="Sangat Baik";
										$bobot_kinerja=5;
									}
									$sql="SELECT dimensi,bobot FROM tbdimensi where id_dimensi=1";
									$result=mysql_query($sql);
									$rows=mysql_fetch_array($result);
									$bobot=$rows['bobot'];
									$KPI=($bobot_kinerja/$bobot)*100;
									//kesimpulan
									if (($KPI>=1) and ($KPI<=20)) {
										$kategori_kpi="Tidak Baik";
									} elseif (($KPI>=21) and ($KPI<=40)) {
										$kategori_kpi="Kurang";
									} elseif (($KPI>=41) and ($KPI<=60)) {
										$kategori_kpi="Cukup";
									} elseif (($KPI>=61) and ($KPI<=80)) {
										$kategori_kpi="Baik";
									} else {
										$kategori_kpi="Sangat Baik";
									}
									$kesimpulan="Kesimpulan KPI adalah " . $kategori_kpi;	
									
						?>
						<div class="circleStat">
                    		<input type="text" value="<?php echo $KPI; ?>" class="whiteCircle" />
						</div>		
						<div class="footer">
							<span class="count">
								<span class="unit"><?php echo $kesimpulan; ?></span>
								
							</span>
							
						</div>
                	</div>
				</div>

				<div class="span3" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox green">
						<div class="header">STAKEHOLDER ORIENTATION</div>
						<span class="percent">percent</span>
						<?php
									$hasil=mysql_query("SELECT jawaban,
										CASE jawaban
										WHEN 'A' THEN Count(jawaban)*1 
										WHEN 'B' THEN COUNT(jawaban)*2 
										WHEN 'C' THEN COUNT(jawaban)*3 
										WHEN 'D' THEN COUNT(jawaban)*4 
										WHEN 'E' THEN COUNT(jawaban)*5 
										END as jumlah
										FROM jawaban,tbkuesioner
										WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND
										(tbkuesioner.id_dimensi=2)
										GROUP BY jawaban");
									$jumlah=mysql_num_rows($hasil);
									$urut=0;
									$total=0;
									$kategori="";
									while($row =mysql_fetch_array($hasil))
									{
										$urut=$urut+1;
										$jawaban=$row["jawaban"];
										$jumlah=$row["jumlah"];
						
										$stringedit =  str_replace(" ", ",", ($jumlah. " "));
										$total=$total+$jumlah;
									}
									if (($total>=14) and ($total<=25.3)) {
										$kategori="Sangat Buruk";
										$bobot_kinerja=1;
									} elseif (($total>=25.2) and ($total<=36.4)) {
										$kategori="Buruk";
										$bobot_kinerja=2;
									} elseif (($total>=36.5) and ($total<=47.6)) {
										$kategori="Cukup Baik";
										$bobot_kinerja=3;
									} elseif (($total>=47.7) and ($total<=58.8)) {
										$kategori="Baik";
										$bobot_kinerja=4;
									} else {
										$kategori="Sangat Baik";
										$bobot_kinerja=5;
									}
									$sql="SELECT dimensi,bobot FROM tbdimensi where id_dimensi=2";
									$result=mysql_query($sql);
									$rows=mysql_fetch_array($result);
									$bobot=$rows['bobot'];
									$KPI=($bobot_kinerja/$bobot)*100;
									//kesimpulan
									if (($KPI>=1) and ($KPI<=20)) {
										$kategori_kpi="Tidak Baik";
									} elseif (($KPI>=21) and ($KPI<=40)) {
										$kategori_kpi="Kurang";
									} elseif (($KPI>=41) and ($KPI<=60)) {
										$kategori_kpi="Cukup";
									} elseif (($KPI>=61) and ($KPI<=80)) {
										$kategori_kpi="Baik";
									} else {
										$kategori_kpi="Sangat Baik";
									}
									$kesimpulan="Kesimpulan KPI adalah " . $kategori_kpi;	
									
						?>
						<div class="circleStat">
                    		<input type="text" value="<?php echo $KPI; ?>" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="unit"><?php echo $kesimpulan; ?></span>
								
							</span>
							
						</div>
                	</div>
				</div>

				<div class="span3" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox red">
						<div class="header">OPERATIONAL EXCELLENCE </div>
						<span class="percent">percent</span>
						<?php
									$hasil=mysql_query("SELECT jawaban,
										CASE jawaban
										WHEN 'A' THEN Count(jawaban)*1 
										WHEN 'B' THEN COUNT(jawaban)*2 
										WHEN 'C' THEN COUNT(jawaban)*3 
										WHEN 'D' THEN COUNT(jawaban)*4 
										WHEN 'E' THEN COUNT(jawaban)*5 
										END as jumlah
										FROM jawaban,tbkuesioner
										WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND
										(tbkuesioner.id_dimensi=3)
										GROUP BY jawaban");
									$jumlah=mysql_num_rows($hasil);
									$urut=0;
									$total=0;
									$kategori="";
									while($row =mysql_fetch_array($hasil))
									{
										$urut=$urut+1;
										$jawaban=$row["jawaban"];
										$jumlah=$row["jumlah"];
						
										$stringedit =  str_replace(" ", ",", ($jumlah. " "));
										$total=$total+$jumlah;
									}
									if (($total>=12) and ($total<=21.6)) {
										$kategori="Sangat Buruk";
										$bobot_kinerja=1;
									} elseif (($total>=21.7) and ($total<=31.2)) {
										$kategori="Buruk";
										$bobot_kinerja=2;
									} elseif (($total>=31.3) and ($total<=40.8)) {
										$kategori="Cukup Baik";
										$bobot_kinerja=3;
									} elseif (($total>=40.9) and ($total<=50.4)) {
										$kategori="Baik";
										$bobot_kinerja=4;
									} else {
										$kategori="Sangat Baik";
										$bobot_kinerja=5;
									}
									$sql="SELECT dimensi,bobot FROM tbdimensi where id_dimensi=3";
									$result=mysql_query($sql);
									$rows=mysql_fetch_array($result);
									$bobot=$rows['bobot'];
									$KPI=($bobot_kinerja/$bobot)*100;
									//kesimpulan
									if (($KPI>=1) and ($KPI<=20)) {
										$kategori_kpi="Tidak Baik";
									} elseif (($KPI>=21) and ($KPI<=40)) {
										$kategori_kpi="Kurang";
									} elseif (($KPI>=41) and ($KPI<=60)) {
										$kategori_kpi="Cukup";
									} elseif (($KPI>=61) and ($KPI<=80)) {
										$kategori_kpi="Baik";
									} else {
										$kategori_kpi="Sangat Baik";
									}
									$kesimpulan="Kesimpulan KPI adalah " . $kategori_kpi;	
									
						?>
                    	<div class="circleStat">
                    		<input type="text" value="<?php echo $KPI; ?>" class="whiteCircle" />
						</div>
						<div class="footer">
							<span class="count">
								<span class="unit"><?php echo $kesimpulan; ?></span>
								
							</span>
				
						</div>
                	</div>
				</div>

				<div class="span3 noMargin" onTablet="span4" onDesktop="span3">
                	<div class="circleStatsItemBox pink">
						<div class="header">FUTURE ORIENTATION</div>
						<span class="percent">percent</span>
						<?php
									$hasil=mysql_query("SELECT jawaban,
										CASE jawaban
										WHEN 'A' THEN Count(jawaban)*1 
										WHEN 'B' THEN COUNT(jawaban)*2 
										WHEN 'C' THEN COUNT(jawaban)*3 
										WHEN 'D' THEN COUNT(jawaban)*4 
										WHEN 'E' THEN COUNT(jawaban)*5 
										END as jumlah
										FROM jawaban,tbkuesioner
										WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND
										(tbkuesioner.id_dimensi=4)
										GROUP BY jawaban");
									$jumlah=mysql_num_rows($hasil);
									$urut=0;
									$total=0;
									$kategori="";
									while($row =mysql_fetch_array($hasil))
									{
										$urut=$urut+1;
										$jawaban=$row["jawaban"];
										$jumlah=$row["jumlah"];
						
										$stringedit =  str_replace(" ", ",", ($jumlah. " "));
										$total=$total+$jumlah;
									}
									if (($total>=13) and ($total<=23.4)) {
										$kategori="Sangat Buruk";
										$bobot_kinerja=1;
									} elseif (($total>=23.5) and ($total<=33.8)) {
										$kategori="Buruk";
										$bobot_kinerja=2;
									} elseif (($total>=33.9) and ($total<=44.2)) {
										$kategori="Cukup Baik";
										$bobot_kinerja=3;
									} elseif (($total>=44.3) and ($total<=54.6)) {
										$kategori="Baik";
										$bobot_kinerja=4;
									} else {
										$kategori="Sangat Baik";
										$bobot_kinerja=5;
									}
									$sql="SELECT dimensi,bobot FROM tbdimensi where id_dimensi=4";
									$result=mysql_query($sql);
									$rows=mysql_fetch_array($result);
									$bobot=$rows['bobot'];
									$KPI=($bobot_kinerja/$bobot)*100;
									//kesimpulan
									if (($KPI>=1) and ($KPI<=20)) {
										$kategori_kpi="Tidak Baik";
									} elseif (($KPI>=21) and ($KPI<=40)) {
										$kategori_kpi="Kurang";
									} elseif (($KPI>=41) and ($KPI<=60)) {
										$kategori_kpi="Cukup";
									} elseif (($KPI>=61) and ($KPI<=80)) {
										$kategori_kpi="Baik";
									} else {
										$kategori_kpi="Sangat Baik";
									}
									$kesimpulan="Kesimpulan KPI adalah " . $kategori_kpi;	
									
						?>
                    	<div class="circleStat">
                    		<input type="text" value="<?php echo $KPI; ?>" class="whiteCircle" />
						</div>
						<div class="footer">
				
							<span class="count">
								
								<span class="unit"><?php echo $kesimpulan; ?></span>
							</span>	
						</div>
                	</div>
				</div>

				
						
			</div>		
			
			
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
