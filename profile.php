<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Suntrough Energy: Company Profile</title>
	<? include('inline/header.php'); ?>
</head>
<body onload="showcontent(1);">
<div id="wrapper">
	<? include('inline/pagetop.php'); ?>
	
	<div id="sidemenu">
    <ul>
      <li><a href="#" onclick="showcontent(1);">About Us</a></li>
      <li><a href="#" onclick="showcontent(2);">Our Product</a></li>
			<li><a href="<?= $contactlink ?>">Contact Us</a></li>
    </ul>
	</div>
	
	<div id="topimage">
		<? include('inline/interiorflash.php'); ?>
	</div>
	
  <div id="insidecontent">
		<div id="ic1">
			<h2>About Us</h2>
			<p>Suntrough Energy is a California-based solar energy company with a strong emphasis on facilitating project development and execution.  We source and provide equipment, develop technology, and leverage our experience to offer turnkey solutions to developers, utilities, water districts, power plant owners, and industrial customers looking to diversify and complement their existing generation portfolio with compact solar thermal generation. Installations come in 10 MW units offering customers the benefits of emissions-free, renewable power either as a stand-alone plant or as clustered identical modules to provide larger utility scale generation. Suntrough Energy will be the leading supplier of renewable electricity and clean drinking water to millions of people inhabiting urban and rural areas across the globe.</p>
			<p><a href="#" onclick="showcontent(2);">Learn more about our product</a></p>
		</div>
		<div id="ic2">
			<h2>Our product</h2>
			<p>Our 10 MW to 50 MW CSP plants take advantage of distribution line capacities and addressing a global market.  Suntrough projects require only 60 acres for 10 MW; this eliminates the development barriers of obtaining large monolithic sites for larger solar thermal power plants.  Suntrough makes solar thermal generation affordable and accessible to global customers with reduced permitting barriers for installations, a rapid three-month construction period, and the bankability of trough technology.</p>
			<p>
				Product advantages:
				<ul>
					<li>Solar thermal generation uses heat recovery systems that enable industrial chilling, low-grade heat utilization, and desalinization; PV generation does not</li>
					<li>Smaller project size simplifies land procurement, facilitates financing, and enables faster permitting and development</li>
					<li>Delivery of containerized power block components minimizes expensive field construction work</li>
					<li>Smaller transmission capacity  requirements allow for fast and inexpensive interconnection, including to 12 kV or 33 kV distribution lines</li>
					<li>Projects can be located close to populated load centers </li>
				</ul>
			</p>
			<p><a href="#" onclick="showcontent(1);">Learn more about us</a></p>
		</div>
	</div>
		
  <? include('inline/pagebottom.php'); ?>
</div>
</body>
</html>
