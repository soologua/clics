<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>CLICS</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="description" content="Cross-Linguistic Colexification">
<meta name="keywords" content="linguistics, historical linguistics,polysemy">
<meta NAME="resource-type" CONTENT="linguistics,historical linguistics">
<meta name="distribution" CONTENT="global">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<link rel="icon" href="pics/favicon.png" type="image/png">  
<link rel="stylesheet" href="css/clips.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="css/jquery-ui.css" />
    
<script src="js/jquery/jquery-latest.js"></script>
<script src="js/jquery/jquery-ui.js"></script>   
<script src="js/concepts.js"></script>

</head>
<body id="home">


<div id="wrapper">
  <div id="header">
  <a href="http://clics.lingpy.org"><img id="logo" src="pics/favicon.png" width="60px" alt="logo" title="CLiCs" /></a>
  <div id="mainnav">
    <ul id="nav">
    <li>
      <a href="main.php">Home</a>
    </li>
    <li>
      <a href="faq.php">About</a>
      <ul id="about">
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="languages.php">Language Varieties</a></li>
        <li><a href="concepts.php">Concepts</a></li>
      </ul>
    </li>
    <li>
      <a href="query.php">Query</a>
      <ul id="query">
        <li><a href="direct.php">Direct Links between Two Concepts</a></li>
        <li><a href="all.php">All Links for One Concept</a></li>
      </ul>
    </li>
    <li>
      <a href="browse.php">Browse</a>
    </li>
    <li>
	<a href="download.php">Download</a>
    </li>
  </ul>
 </div><!--end mainnav-->
 <a id="forkme_banner" href="https://github.com/clics">View on GitHub</a> 
 </div><!-- end header -->  
 <div id="subnav">
    <h2> <a href="query.php">Query</a></h2>
   <ul>
    <li><a class="active" href="direct.php">Direct Links</a></li>
    <li><a class="inactive" href="all.php">All Links</a></li>
  </ul>

 </div>
 <div id="contentwrapper" class="clearfix">
     <div id="content">
    <div id="btf">
      <div style="float:left;" id="goto"></div>
      <div id="closer" style="float:right;cursor:pointer;"></div><br> 
        <iframe id="ifr" name="bibframe" src=""></iframe>
    </div>
	 <!-- SIDEBAR query -->
<h3>Search for direct links between two concepts</h3>

<br>
<?php

/* connect the database */
$dsn = "sqlite:data/clips.sqlite3";
$conn = new PDO ($dsn);

if(isset($_POST['source']) && isset($_POST['target'])){
  
  /* include the header */
  include('query/query_direct.php');

  $query_string = 'select * from links where glossA="'.$_POST['source'].'" and glossB="'.$_POST['target'].'";';
  $query = $conn->query($query_string);
  $results = $query->fetch();
  
  /* check for results, if value greater one, display, else pass */
  if (count($results) > 1)
  {
	  /* glosses */
    $glossA = $results['glossA'];
	  $glossB = $results['glossB'];

	  /* forms */
    $forms = $results['forms'];

    /* families, languages in sqlite3-db */
	  $families = $results['families'];
	  $languages = $results['languages'];

	  /* the gloss ids */
          $numA = $results['numA'];
	  $numB = $results['numB'];

	  /* include next query */
	  include('query/matches_1.php');
  }
  else
  {
      echo '<p align="left"><font color=red><b>No results found for your query.</b></font></p>';
  }
}

else if(isset($_POST['forms'])){
  include('query/query_direct.php');
  
  /* split forms */
  $forms = explode('//',$_POST['forms']);
  
  include('query/matches_2.php');
  
  $count = 1;
  /* iterate over forms array */
  foreach($forms as &$form){
        
	  /* get form and language ID */
    $tmp = explode(':',$form);
    $lid = $tmp[0];
    $form = substr($tmp[1],1,-1);

    // Now that we got form and language id, we take the data for all languages from clips.slqite3
    $query_string = 'select * from langs where id="'.$lid.'";';
    $query = $conn->query($query_string);
    $results = $query->fetch();
    $classification = explode(',',$results['classification']);
    $classification = array_shift($classification);
    $iso = explode('_',$results['iso']);
    $iso = array_shift($iso);
	
	  /* include specific matches */
	  include('query/matches_3.php');
  }

  echo '</table></div>';
}
else
{
  include('query/query_direct.php');
}
?>



 </div>
 </div>
 <div id="footer">
<table><tr>

<td><div class="footer_left">
<a href="http://www.hhu.de/"><img width="120px" src="http://www.hhu.de/home/fileadmin/images/uni_duesseldorf_logo.gif" alt="HHUD" /></a>
 </div></td>

 <td><div class="footer_left">
<a href="http://www.dfg.de/"><img width="120px" src="http://www.dfg.de/includes/images/dfg_logo.gif" alt="DFG" /></a>
 </div></td>
<td><div class="footer_center">
 <p>Last updated on Oct. 21, 2014, 09:51 CET</p>
 <p>
This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.en_US">Creative Commons Attribution-NonCommercial 3.0 Unported License</a>.</p><br>
<p>
   <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/deed.en_US"><img
		alt="Creative Commons License" style="border-width:0;width:80px;"
		src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" /></a> </p>
</div></td>

<td><div class="footer_right">
<a href="http://erc.europa.eu/"><img width="80px" src="http://quanthistling.info/theme/qhl/images/logo_erc.png" alt="ERC" /></a>
</div></td>
<td><div class="footer_right">
<a href="http://www.hum.leiden.edu/lucl"><img width="80px" src="http://www.hum2.leidenuniv.nl/pdf/lucl/practical_matters/lucl-logo-small.jpg" alt="LUCL" /></a>
</div></td>
<td><div class="footer_right">
<a href="http://www.uni-marburg.de/"><img width="120px" src="http://www.uni-marburg.de/bilder/logo_uni1.gif" alt="PUD" /></a>
</div></td></tr></table>
 </div><!-- end footer -->

</div><!-- end wrapper-->
<script src="js/bibliography.js">
</script>
</body>
</html>
