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
    <h2> <a href="faq.php">About</a></h2>
   <ul>
    <li><a class="active" href="faq.php">FAQ</a></li>
    <li><a class="inactive" href="languages.php">Languages</a></li>    
    <li><a class="inactive" href="concepts.php">Concepts</a></li>
  </ul>
<br>


 </div>
 <div id="contentwrapper" class="clearfix">
     <div id="content">
    <div id="btf">
      <div style="float:left;" id="goto"></div>
      <div id="closer" style="float:right;cursor:pointer;"></div><br> 
        <iframe id="ifr" name="bibframe" src=""></iframe>
    </div>
	 <!-- SIDEBAR about -->
<h3> Frequently Asked Questions</h3>
<br>
<ul>
<li><a href="faq.php#colexification">What is Colexification?</a></li>
<li><a href="faq.php#examples">How can I use CLICS?</a></li>
<li><a href="faq.php#visualizations">How do the visualizations work?</a></li> 
<li><a href="faq.php#data1">What data does CLICS use?</a></li>
<li><a href="faq.php#cite">How do I cite CLICS?</a></li>
<li><a href="faq.php#data2">How reliable is the data of CLICS?</a></li>
<li><a href="faq.php#areal">Can areal aspects bias the results of CLICS?</a></li>
<li><a href="faq.php#data3">How large is the data behind CLICS?</a></li>
<li><a href="faq.php#contact">Whom should I contact if I have additional questions or want to contribute?</a></li>
</ul>
<br>


<h3><a style="color:black" name="colexification">Colexification</a></h3>
<br>
In the context of CLICS, we use the term <i>colexification</i> (coined by <a href="http://bibliography.lingpy.org/evobib.php?key=Francois2008" target="_blank">François 2008</a><sup><a target="_blank" style="color:Crimson" href="http://alex.francois.free.fr/data/AlexFrancois_2008_SemanticMaps-Colexification_preprint.pdf">[PDF]</a></sup>) to refer to the situation when two or more of the meanings 
in our lexical sources are covered in a language by the same lexical item. 
For instance, we would say that 
Russian <i>рука</i> colexifies &lsquo;hand&rsquo; and &lsquo;arm&rsquo;, that is, concepts that are semantically related to each other.
Roughly spoken, colexification can correspond either to polysemy or semantic vagueness in lexical 
semantic analyses. Since we have not performed such analyses that would allow us to further discriminate between the two, 
we chose <i>colexification</i> as a label 
that deliberately does not make a commitment with regard to this distinction.  However, we offer
measures to rule out effects of accidental homonymy.
<br>
<br>
Conceptual links, which constitute our main interest in colexification, are
clearly not the only possible reason why two concepts can be expressed by the
same form in a given language. The most prominent among the others is <em>homonymy</em>,
which is in very simple terms an accidental similarity in form, often arising
from sound changes causing originally distinct lexical items to collapse
phonologically. Such cases may lead to spurious links in the database (compare,
for example, the links between the concepts &lsquo;arm&rsquo; and &lsquo;poor&rsquo; which are due to
homonymy in some Germanic languages). To deal with this issue in a consistent
and generally applicable way (even if the history of the lexical items in
question is not known) we recommend to employ a typological criterion to
distinguish between homonymy and polysemy (see <a href="http://bibliography.lingpy.org/evobib.php?key=Croft1990">Croft 1990</a>): for semantic
connections to be accepted as genuine rather than accidental, the connection
should be detectable in more than one language family. We should, however,
point out that this criterion has been developed and originally applied by the
aforementioned author in the realm of polyfunctionality of grammatical markers,
that is, items belonging to a paradigmatically relatively well-structured set
of items with a manageable semantic range. When applied to lexical meanings,
there is a danger that the criterion rules out a set of genuine, but simply
rare, semantic associations. Still, we feel that our approach is justified,
methodologically because it offers a simple and non-subjective decision
criterion, and conceptually because our approach relies on cross-linguistic
data in the first place. 
<br><br>
<h3><a style="color:black" name="examples">Using CLICS</a></h3>
<br>
Using our <a href="query.php">query interface</a> you can search whether specific concepts are 
linked in the language varieties used in CLICS (see <a href="direct.php">here</a>). You can 
also check how many links are reported for a given concept (see <a href="all.php">here</a>).
If you want to view the data in a visually more appealing way, you can <a href="browse.php">browse</a> through 
the concept networks we extracted from the data (see <a href="faq.php#visualizations">How do the visualizations work?</a> for a more detailed description of the ideas behind the visualization). 
You 
can also <a href="download.php">download</a> parts of the data and conduct large-scale quantitative 
investigations (see <a href="http://bibliography.lingpy.org/evobib.php?key=List2013a">List, Terhalle, and Urban 2013</a><sup><a style="color:Crimson" href="http://aclweb.org/anthology-new/W/W13/W13-0208.pdf" target="_blank">[PDF]</a></sup> for an example).
<br><br>
<h3><a style="color:black" name="visualizations">How do the visualizations work?</a></h3>
<br>
The CLICS database can be accessed through a web-based visualization that
represents each community of the network as a force-directed graph layout.
The visualization features a number of interactive components that allow
the detection of areal and genealogical patterns in the database. When
mousing over an edge of the graph all languages showing the respective
colexification pattern are shown in a list together with their genealogical
or areal information and the word form that expresses the concepts in
question. In addition, a world map representation highlights all languages in which a given colexification pattern occurs
in order to make areal patterns more easily detectable.

The visualizations are implemented in JavaScript using the D3 library
<a href="http://lingulist.de/evobib/evobib.php?key=Bostock2011">(Bostock et al. 2011)</a>.
Each community can be directly accessed via a URL
and saved as SVG. A more detailed description is given in a paper by <a href="http://bibliography.lingpy.php/evobib.php?key=Mayer2014" target="_blank">Mayer et al.
(2014)</a><sup><a href="https://github.com/clics/clics/raw/master/papers/lrec2014/clicsvis.pdf" style="color:Crimson" target="_blank">[PDF]</a></sup>. You may also check the <a href="http://clics.github.com/lrec2014/">slides</a>  of the talk accompanying the paper. 
<br><br>
<h3><a style="color:black" name="data1">Sources of CLICS</a></h3>
<br>
Currently CLICS utilizes four different sources, all of which are freely available online themselves. 
<br><br>
<ul>
<li>
The intercontinental dictionary series (<a href="http://lingweb.eva.mpg.de/ids/">IDS</a>, <a 
href="http://lingulist.de/evobib/evobib.php?key=Key2007">Key &amp; Comrie 2007 eds.</a>) features 
lexical data for 233 world languages. IDS data were provided mostly by experts on the respective 
languages, although in some cases published written sources have been used. There are 1,310 entries 
to be filled for each language, though, of course, there are gaps in coverage for individual 
languages. The list of concepts
is inspired by <a href="http://lingulist.de/evobib/evobib.php?key=Buck1949">Buck (1949)</a>. Of all 233 languages in the IDS, 178 were automatically cleaned and included in CLICS. 
</li>
<li>
The IDS list, in turn, provides the basis for the choice of meanings in the World Loanword Database 
(<a href="http://wold.livingsources.org/">WOLD</a>, <a 
href="http://lingulist.de/evobib/evobib.php?key=Wold2009">Haspelmath &amp; Tadmor 2009 eds.</a>).  
The principal aim of this source is to provide a basis for generalizations on the borrowability of 
items in different parts of the lexicon. The WOLD data consist of vocabularies of between 
1,000-2,000 items for 41 languages, with annotations about the borrowing history of particular items 
where applicable. WOLD data was coded by experts on the respective languages, in some cases also 
with the aid of extant sources. Of all 41 languages in WOLD, 33 are included in CLICS. </li>
<li>The <a href="http://www.logosdictionary.org/index.php">Logos Dictionary</a> is a freely 
accessible multilingual online dictionary that is regularly updated online by a network of 
professional translators. It offers lexical data for more than 60 different languages. We manually 
extracted lexical data for 4 languages that were neither present in IDS nor in WOLD. 
</li>
<li>The <a href="http://spraakbanken.gu.se">Språkbanken</a> project (University of Gothenburg) offers a couple of <a href="http://spraakbanken.gu.se/eng/research/digital-areal-linguistics/word-lists">wordlists for Himalayan languages</a>. The wordlists mirror the IDS format closely, and we included 6 of currently 8 wordlists in CLICS.</li>
</ul>

<h3><a style="color:black" name="cite">Citing CLICS</a></h3>
<br>CLICS can be cited as follows: 
<br><br>
<ul><li>
List, Johann-Mattis, Thomas Mayer, Anselm Terhalle, and Matthias Urban (2014). CLICS: Database of Cross-Linguistic Colexifications. Marburg: Forschungszentrum Deutscher Sprachatlas (Version 1.0, online available at <a href="http://CLICS.lingpy.org" >http://CLICS.lingpy.org</a>, accessed on <span id="date"></span>). <input type="button" onclick="showBibTex('List2014f');" value="BibTex" />
</li></ul>
<br>
<h3><a style="color:black" name="data2">Reliability of the Data</a></h3><br>
The structure of the data in CLICS is a direct image of the structure of the data in IDS and WOLD 
and does not involve a
reanalysis of any sort on our behalf. However, it must be emphasized that the meaning associations 
reported in CLICS are
recovered from sheer identity of form in different cells in the sources we have used, and do not 
necessarily rest on language-internal semantic analysis (see also the sections on
<a href="faq.php#colexification">colexification</a> and 
<a href="faq.php#homonymy">homonymy</a>).  
Furthermore, we have no 
control over artifacts that <br><br> 

<ul>
  <li>may have arisen in the process of data gathering themselves,</li>
  <li>were created by mapping the predefined concepts onto the actual languages, and</li>
  <li>were introduced when cleaning parts of the data automatically in which the textual coding was not provided in a consistent way.</li>
</ul>
<br>
For these reasons, we strongly recommend to check the actual sources whenever a conceptual link that our database reports should be crucial for your arguments.

<br>
<br>
<h3><a style="color:black" name="areal">Areal Effects in the Data</a></h3>
<br>
Coverage of the world’s languages in both IDS and WOLD is biased towards certain regions of the 
world. In the case of IDS, South American languages and languages of the Caucasus are 
overrepresented. In the case of WOLD, languages of Europe figure particularly prominently. Since
it is possible and even expectable that certain polysemies in the lexicon are frequent or even 
restricted to certain areas of the world, we advise researchers interested in cross-linguistic 
diversity to take appropriate measures to rule out unwarranted generalizations due to areal 
effects.
<br><br>
<h3><a style="color:black" name="data3">Statistics on CLICS</a></h3>
<br>
CLICS (Version 1.0) offers information on colexification in 221 different language varieties covering 64 different language families. 
All language varieties in our sample comprise a total of 301,498 words covering 1,280 different concepts. 
Using a strictly automatic procedure, we identified 45,667 cases of colexification that correspond to 16,239 different links between
the 1,280 concepts covered by our data.
<br><br>
<h3><a style="color:black" name="contact">Contact</a></h3>
<br>
For technical questions regarding the data, please contact
<a href="mailto:mattis.list@uni-marburg.de">Johann-Mattis List</a> (Philipps-University Marburg, Germany). 
<br>

<script>
var d = new Date();
var cday = d.getDate();
var cmonth = d.getMonth() + 1; //Months are zero based
var cyear = d.getFullYear();
var dstring = cyear+'-'+cmonth+'-'+cday;
document.getElementById('date').innerHTML = dstring;
</script>


 </div>
 </div>
 <div id="footer">
<table><tr>

<td><div class="footer_left">
<a href="http://www.hhu.de/"><img width="120px" src="http://www.hhu.de/home/fileadmin/images/uni_duesseldorf_logo.gif" alt="HHUD" /></a>
 </div></td>

 <td><div class="footer_left">
<a href="http://www.dfg.de/"><img width="120px" src="http://www.dfg.de/zentralablage/bilder/service/bildarchiv/dfg_logo_blau.jpg" alt="DFG" /></a>
 </div></td>
<td><div class="footer_center">
 <p>Last updated on Jul. 01, 2014, 08:07 CET</p>
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
