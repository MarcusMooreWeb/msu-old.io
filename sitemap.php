<?php
$pageTitle = 'Home';
include 'header.php';
?>

<BODY BACKGROUND="images/bg.gif" onLoad="MM_preloadImages('images/buttons/home-over.jpg',
														  'images/buttons/staff-over.jpg',
														  'images/buttons/media-over.jpg',
														  'images/buttons/contact-over',
														  'images/buttons/press-over.jpg',
														  'images/buttons/seminars-over.jpg')">


<!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script type="text/javascript" src="/static/js/disclaim-element.js" ></script>
<script type="text/javascript" src="/static/js/graph-calc.js" ></script>
<script type="text/javascript">//<![CDATA[
var __wm = (function(imgWidth,imgHeight,yearImgWidth,monthImgWidth){
var wbPrefix = "/web/";
var wbCurrentUrl = "http://www.martialscienceuniversity.com/sitemap.php";

var firstYear = 1996;
var displayDay = "28";
var displayMonth = "Feb";
var displayYear = "2012";
var prettyMonths = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
var $D=document,$=function(n){return document.getElementById(n)};
var trackerVal,curYear = -1,curMonth = -1;
var yearTracker,monthTracker;
function showTrackers(val) {
  if (val===trackerVal) return;
  var $ipp=$("wm-ipp");
  var $y=$("displayYearEl"),$m=$("displayMonthEl"),$d=$("displayDayEl");
  if (val) {
    $ipp.className="hi";
  } else {
    $ipp.className="";
    $y.innerHTML=displayYear;$m.innerHTML=displayMonth;$d.innerHTML=displayDay;
  }
  yearTracker.style.display=val?"inline":"none";
  monthTracker.style.display=val?"inline":"none";
  trackerVal = val;
}
function trackMouseMove(event,element) {
  var eventX = getEventX(event);
  var elementX = getElementX(element);
  var xOff = Math.min(Math.max(0, eventX - elementX),imgWidth);
  var monthOff = xOff % yearImgWidth;

  var year = Math.floor(xOff / yearImgWidth);
  var monthOfYear = Math.min(11,Math.floor(monthOff / monthImgWidth));
  // 1 extra border pixel at the left edge of the year:
  var month = (year * 12) + monthOfYear;
  var day = monthOff % 2==1?15:1;
  var dateString = zeroPad(year + firstYear) + zeroPad(monthOfYear+1,2) +
    zeroPad(day,2) + "000000";

  $("displayYearEl").innerHTML=year+firstYear;
  $("displayMonthEl").innerHTML=prettyMonths[monthOfYear];
  // looks too jarring when it changes..
  //$("displayDayEl").innerHTML=zeroPad(day,2);
  var url = wbPrefix + dateString + '/' +  wbCurrentUrl;
  $("wm-graph-anchor").href=url;

  if(curYear != year) {
    var yrOff = year * yearImgWidth;
    yearTracker.style.left = yrOff + "px";
    curYear = year;
  }
  if(curMonth != month) {
    var mtOff = year + (month * monthImgWidth) + 1;
    monthTracker.style.left = mtOff + "px";
    curMonth = month;
  }
}
function hideToolbar() {
  $("wm-ipp").style.display="none";
}
function bootstrap() {
  var $spk=$("wm-ipp-sparkline");
  yearTracker=$D.createElement('div');
  yearTracker.className='yt';
  with(yearTracker.style){
    display='none';width=yearImgWidth+"px";height=imgHeight+"px";
  }
  monthTracker=$D.createElement('div');
  monthTracker.className='mt';
  with(monthTracker.style){
    display='none';width=monthImgWidth+"px";height=imgHeight+"px";
  }
  $spk.appendChild(yearTracker);
  $spk.appendChild(monthTracker);

  var $ipp=$("wm-ipp");
  $ipp&&disclaimElement($ipp);
}
return{st:showTrackers,mv:trackMouseMove,h:hideToolbar,bt:bootstrap};
})(500, 27, 25, 2);//]]>
</script>
<style type="text/css">
body {
  margin-top:0 !important;
  padding-top:0 !important;
  min-width:800px !important;
}
</style>
<div id="wm-ipp" lang="en" style="display:none;">

<div style="position:fixed;left:0;top:0;width:100%!important">
<div id="wm-ipp-inside">
   <table style="width:100%;"><tbody><tr>
   <td id="wm-logo">
       <a href="/web/" title="Wayback Machine home page"><img src="/static/images/toolbar/wayback-toolbar-logo.png" alt="Wayback Machine" width="110" height="39" border="0" /></a>
   </td>
   <td class="c">
       <table style="margin:0 auto;"><tbody><tr>
       <td class="u" colspan="2">
       <form target="_top" method="get" action="/web/form-submit.jsp" name="wmtb" id="wmtb"><input type="text" name="url" id="wmtbURL" value="http://www.martialscienceuniversity.com/sitemap.php" style="width:400px;" onfocus="this.focus();this.select();" /><input type="hidden" name="type" value="replay" /><input type="hidden" name="date" value="20120228224809" /><input type="submit" value="Go" /><span id="wm_tb_options" style="display:block;"></span></form>
       </td>
       <td class="n" rowspan="2">
           <table><tbody>
           <!-- NEXT/PREV MONTH NAV AND MONTH INDICATOR -->
           <tr class="m">
           	<td class="b" nowrap="nowrap">
		
		    <a href="/web/20111009084657/http://www.martialscienceuniversity.com/sitemap.php" title="9 Oct 2011">OCT</a>
		
		</td>
		<td class="c" id="displayMonthEl" title="You are here: 22:48:09 Feb 28, 2012">FEB</td>
		<td class="f" nowrap="nowrap">
		
		    Mar
		
                </td>
	    </tr>
           <!-- NEXT/PREV CAPTURE NAV AND DAY OF MONTH INDICATOR -->
           <tr class="d">
               <td class="b" nowrap="nowrap">
               
                   <a href="/web/20111009084657/http://www.martialscienceuniversity.com/sitemap.php" title="8:46:57 Oct 9, 2011"><img src="/static/images/toolbar/wm_tb_prv_on.png" alt="Previous capture" width="14" height="16" border="0" /></a>
               
               </td>
               <td class="c" id="displayDayEl" style="width:34px;font-size:24px;" title="You are here: 22:48:09 Feb 28, 2012">28</td>
	       <td class="f" nowrap="nowrap">
               
                   <img src="/static/images/toolbar/wm_tb_nxt_off.png" alt="Next capture" width="14" height="16" border="0"/>
               
	       </td>
           </tr>
           <!-- NEXT/PREV YEAR NAV AND YEAR INDICATOR -->
           <tr class="y">
	       <td class="b" nowrap="nowrap">
               
                   <a href="/web/20090819153634/http://www.martialscienceuniversity.com/sitemap.php" title="19 Aug 2009"><strong>2009</strong></a>
               
               </td>
               <td class="c" id="displayYearEl" title="You are here: 22:48:09 Feb 28, 2012">2012</td>
	       <td class="f" nowrap="nowrap">
               
                   2013
               
	       </td>
           </tr>
           </tbody></table>
       </td>
       </tr>
       <tr>
       <td class="s">
           <a class="t" href="/web/20120228224809*/http://www.martialscienceuniversity.com/sitemap.php" title="See a list of every capture for this URL">16 captures</a>
           <div class="r" title="Timespan for captures of this URL">5 Jan 07 - 28 Feb 12</div>
       </td>
       <td class="k">
       <a href="" id="wm-graph-anchor">
       <div id="wm-ipp-sparkline" title="Explore captures for this URL">
	 <img id="sparklineImgId" alt="sparklines"
		 onmouseover="__wm.st(1)" onmouseout="__wm.st(0)"
		 onmousemove="__wm.mv(event,this)"
		 width="500"
		 height="27"
		 border="0"
		 src="/web/jsp/graph.jsp?graphdata=500_27_1996:-1:000000000000_1997:-1:000000000000_1998:-1:000000000000_1999:-1:000000000000_2000:-1:000000000000_2001:-1:000000000000_2002:-1:000000000000_2003:-1:000000000000_2004:-1:000000000000_2005:-1:000000000000_2006:-1:000000000000_2007:-1:102010001000_2008:-1:101000101000_2009:-1:101000010000_2010:-1:000000000000_2011:-1:000000101100_2012:1:010000000000_2013:-1:000000000000_2014:-1:000000000000_2015:-1:000000000000" />
       </div>
       </a>
       </td>
       </tr></tbody></table>
   </td>
   <td class="r">
       <a href="#close" onclick="__wm.h();return false;" style="background-image:url(/static/images/toolbar/wm_tb_close.png);top:5px;" title="Close the toolbar">Close</a>
       <a href="http://faq.web.archive.org/" style="background-image:url(/static/images/toolbar/wm_tb_help.png);bottom:5px;" title="Get some help using the Wayback Machine">Help</a>
   </td>
   </tr></tbody></table>
</div>
</div>
</div>
<script type="text/javascript">__wm.bt();</script>
<!-- END WAYBACK TOOLBAR INSERT -->

<DIV ALIGN="CENTER" VALIGN="MIDDLE">
<TABLE WIDTH="80%" HEIGHT="90%" CELLSPACING="0" CELLPADDING="0" BORDER="1" BORDERCOLOR="#890C08" BGCOLOR="#FFFFFF"> 
<TR><TD>
	<TABLE WIDTH="100%" HEIGHT="100%" CELLSPACING="0" CELLPADDING="0" BORDER="0">

<!--BANNER LOGO-->

	<TR>
		<TD WIDTH="150" HEIGHT="150"><IMG SRC="images/msu-logo.jpg" width="150" height="150" alt="Martial Science University" border="0">
		<TD WIDTH="100%" HEIGHT="150" ALIGN="CENTER" BACKGROUND="images/bg-banner.gif">
			<IMG SRC="images/martialscienceuniversity.jpg" height="150" width="650" alt="Sublevel 4 Kenpo" border="0">
		</TD>
	</TR>

<!--END BANNER LOGO-->
<!--BEGIN NAVBAR"-->

	<TR>
		<TD WIDTH="150" HEIGHT="100%">
			<TABLE WIDTH="150" HEIGHT="100%" CELLPADDING="0" CELLSPACING="0" BORDER="0">
			<TR><TD HEIGHT="5"><IMG SRC="/web/20120228224809im_/http://www.martialscienceuniversity.com/images/spacer.gif" height="5" border="0"></TD></TR>
			<TR>
				<TD HEIGHT="30"><IMG SRC="/web/20120228224809im_/http://www.martialscienceuniversity.com/images/bg-buttons_top.gif" border="0"></TD>
			</TR>
			<TR>
				<TD HEIGHT="100%" BGCOLOR="#890C08" ALIGN="CENTER" VALIGN="TOP">
					<TABLE WIDTH="145" HEIGHT="100%" CELLSPACING="1" CELLPADDING="0" BORDER="0">
						<TR><TD HEIGHT="25"><a href="/web/20120228224809/http://www.martialscienceuniversity.com/index.php" target="_top" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('HOME','','../images/buttons/home-over.jpg',1)"><img src="/web/20120228224809im_/http://www.martialscienceuniversity.com/images/buttons/home.jpg" alt="HOME" name="HOME" width="145" height="25" border="0"></a></TD></TR>
						<TR><TD HEIGHT="25"><a href="/web/20120228224809/http://www.martialscienceuniversity.com/staff.php" TARGET="_top" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('STAFF','','../images/buttons/staff-over.jpg',1)"><img src="/web/20120228224809im_/http://www.martialscienceuniversity.com/images/buttons/staff.jpg" alt="STAFF" name="STAFF" width="145" height="25" border="0"></a></TD></TR>
						<TR><TD HEIGHT="25"><a href="/web/20120228224809/http://www.martialscienceuniversity.com/seminars.php" TARGET="_top" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('SEMINARS','','../images/buttons/seminars-over.jpg',1)"><img src="/web/20120228224809im_/http://www.martialscienceuniversity.com/images/buttons/seminars.jpg" alt="SEMINARS" name="SEMINARS" width="145" height="25" border="0"></a></TD></TR>
						<TR><TD HEIGHT="25"><a href="/web/20120228224809/http://www.martialscienceuniversity.com/articles.php" TARGET="_top" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('PRESS','','../images/buttons/press-over.jpg',1)"><img src="/web/20120228224809im_/http://www.martialscienceuniversity.com/images/buttons/press.jpg" alt="ARTICLES" name="PRESS" width="145" height="25" border="0"></a></TD></TR>
						<TR><TD HEIGHT="25"><a href="/web/20120228224809/http://www.martialscienceuniversity.com/media.php" TARGET="_top" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('MEDIA','','../images/buttons/media-over.jpg',1)"><img src="/web/20120228224809im_/http://www.martialscienceuniversity.com/images/buttons/media.jpg" alt="MEDIA" name="MEDIA" width="145" height="25" border="0"></a></TD></TR>
						<TR><TD HEIGHT="35"><a href="/web/20120228224809/http://www.martialscienceuniversity.com/certification.php" TARGET="_top" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('CERTIFICATION','','../images/buttons/instcert-over.jpg',1)"><img src="/web/20120228224809im_/http://www.martialscienceuniversity.com/images/buttons/instcert.jpg" alt="SL4 INSTRUCTOR CERTIFICATION" name="CERTIFICATION" width="145" height="35" border="0"></a></TD></TR>
						<TR><TD HEIGHT="25"><a href="/web/20120228224809/http://www.martialscienceuniversity.com/contact.php" TARGET="_top" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('CONTACT','','../images/buttons/contact-over.jpg',1)"><img src="/web/20120228224809im_/http://www.martialscienceuniversity.com/images/buttons/contact.jpg" alt="CONTACT" name="CONTACT" width="145" height="25" border="0"></a></TD></TR>
						<TR><TD HEIGHT="100%">&nbsp;</TD></TR>
					</TABLE>
				</TD>
			</TR>
			<TR>
				<TD HEIGHT="75"><IMG SRC="/web/20120228224809im_/http://www.martialscienceuniversity.com/images/bg-buttons_btm.gif" border="0"></TD>
			</TR>
			<TR>
				<TD HEIGHT="5"><IMG SRC="/web/20120228224809im_/http://www.martialscienceuniversity.com/images/spacer.gif" height="5" border="0"></TD>
			</TR>
		</TABLE>		</TD>
		<TD WIDTH="100%" HEIGHT="100%">

<!--BEGIN CONTENT-->


			<TABLE WIDTH="100%" HEIGHT="100%" BORDER="0" CELLPADDING="3" CELLSPACING="5">
<!--PAGE NAME-->
				<TR><TD HEIGHT="25" BGCOLOR="#890C08" CLASS="BODY"><a name="top"></a>
				<a href="/web/20120228224809/http://www.martialscienceuniversity.com/" class="h1"><h1>Martial Science University Site Map</h1></a></TD></TR>

<!--JUMP MENU-->
				<TR><TD BGCOLOR="#CCCCCC" class="BODY" VALIGN="TOP">
					<ul><img src="smfolder.gif">&nbsp;<strong class="mapsection">Sub Level 4 Kenpo Concepts - American Kenpo, Ed Parker Kenpo</strong>
  <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/sitemap.php" class="mapitem">Martial Science University Site Map - Sublevel 4 Kenpo, American Kenpo, SL4</a></dt>
  <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/motto.php" class="mapitem">SL4 Mission Statement - Ed Parker Sr, Sub Level Four Kenpo, American Kenpo</a></dt>
  <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/contact.php" class="mapitem">Martial Science University</a></dt>
  <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/media.php" class="mapitem">Sublevel 4 Kenpo Media Archive - Ed Parker, American Kenpo, SL4</a></dt>
  <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/articles/" class="mapitem">Sublevel 4 Kenpo Articles - Motion Kenpo, Sublevel 4 Kenpo, Chi, Kenpo Karate</a></dt>
  <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/seminars.php" class="mapitem">SubLevel 4 Kenpo Seminars - American Kenpo, Ed Parker Kenpo, SL4 Kenpo Seminar</a></dt>
  <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/staff.php" class="mapitem">MSU - Dr Ron Chapel, Ed Parker, Theodore Humphrey, Gregg Lewis, Ryan Angell, Rod Perez</a></dt>
  <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/index.php" class="mapitem">Sub Level 4 Kenpo Concepts - American Kenpo, Ed Parker Kenpo</a></dt>
  <ul><img src="smfolder.gif">&nbsp;<strong class="mapsection">articles</strong>
  <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/articles/self-defence-techniques.php" class="mapitem">Are You Supoosed to Finish Self Defense Techniques?</a></dt>
  <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/articles/arts-vs-structure.php" class="mapitem">Martial Arts Versus Martial Science Structure</a></dt>
    <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/articles/mad-kenpo-scientist3.php" class="mapitem">Excerpts from the Diary of a "Mad" Kenpo Scientist, Part Three</a></dt>
    <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/articles/mad-kenpo-scientist2.php" class="mapitem">Excerpts from the Diary of a "Mad" Kenpo Scientist, Part Two</a></dt>
    <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/articles/mad-kenpo-scientist1.php" class="mapitem">Excerpts from the Diary of a "Mad" Kenpo Scientist, Part One</a></dt>
        <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/articles/asianamer.php" class="mapitem">Asian Americans - Asian Cultures, Martial Arts, Ed Parker Sr, American Kenpo</a></dt>
    <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/articles/kenpo_chi.php" class="mapitem">Chi - Kenpo Karate, Martial Science, Chinese Medicine, Tai Chi</a></dt>
    <dt>&nbsp;&nbsp;<img src="smfile.gif">&nbsp;<a href="/web/20120228224809/http://www.martialscienceuniversity.com/articles/versus.php" class="mapitem">Sub Level 4 Kenpo - Motion Kenpo, Taiji Chi-Qung, American Kenpo</a></dt>
  </ul>
</ul>
				</TD></TR>
				
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<td>&nbsp;</td>

				</tr>

				<tr>

				<td align="center" class="links">

				<a href="/web/20120228224809/http://www.martialscienceuniversity.com/" class="links">Home</a> / 

				<a href="/web/20120228224809/http://www.martialscienceuniversity.com/motto.php" class="links">SL4 Mission Statement</a> / 

				<a href="/web/20120228224809/http://www.martialscienceuniversity.com/staff.php" class="links">Staff</a> / 

				<a href="/web/20120228224809/http://www.martialscienceuniversity.com/seminars.php" class="links">SL4 Kenpo Seminars</a> / 

				<a href="/web/20120228224809/http://www.martialscienceuniversity.com/articles/" class="links">Kenpo Articles</a> / 

				<a href="/web/20120228224809/http://www.martialscienceuniversity.com/media.php" class="links">Media Archive</a> / 

				<a href="/web/20120228224809/http://www.martialscienceuniversity.com/contact.php" class="links">Contact</a> / 
				
				<a href="/web/20120228224809/http://www.martialscienceuniversity.com/sitemap.php" class="links">Sitemap</a></td>

				</tr>

				
			</TABLE>
			
<!--END CONTENT-->			
			
		</TD>
	</TR>
	
	
	
	<TR>
		<TD HEIGHT="15" BGCOLOR="#890C08" COLSPAN="2">
			<TABLE WIDTH="100%" HEIGHT="15" CELLPADDING="1" CELLSPACING="0" BORDER="0">
			
				<TR>
					<TD WIDTH="75%" ALIGN="LEFT" CLASS="legal">All contents of this site are the property of Martial Science University</TD>
					<TD WIDTH="25%" ALIGN="RIGHT" CLASS="legal">Website design by <a href="/web/20120228224809/http://www.rayngraphics.com/" target="_blank" class="legal"><strong>rayn</strong>graphics</a></TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
	</TABLE>
</TD></TR>
</TABLE>
</DIV>


<script src="/web/20120228224809js_/http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1148459-1";
urchinTracker();
</script>
</BODY>
</HTML>




<!--
     FILE ARCHIVED ON 22:48:09 Feb 28, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 6:43:56 Sep 22, 2015.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
