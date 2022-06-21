<html>
<head>
<title>Free Online Email Address Extractor</title>
<link rel="stylesheet" type="text/css" href="http://www.emailextractorplus.com/style.css">
</head>
<body><!--msnavigation--><table dir="ltr" border="0" cellpadding="0" cellspacing="0" width="100%"><tr><!--msnavigation--><td valign="top">
<div id="fb-root"></div>

<div id="container" style="width: 780px">
<div id="main">

<table border="0"  cellspacing="3" cellpadding="0" id="table2">


	<tr>
		<td>
		<h1>Online Email Extractor</h1>
<p align="center"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.emailextractorplus.com/">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
<g:plusone size="small"></g:plusone>


<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script> </p>

		<br>
<font color="#3B7687">Paste text into the form below and click the "Extract Emails" button.</font>
		<p>&nbsp;</td>





</tr>


	<tr>
		<td>



<?php



$the_url = isset($_REQUEST['url']) ? htmlspecialchars($_REQUEST['url']) : '';
?>
<?php

?><form method="post">

  Text:<br />
  <textarea name="text" cols="80" rows="15"></textarea>
  <br /><br />
  <input type="submit" value="Extract Emails" />
</form>

<br>

<?php
if (isset($_REQUEST['url']) && !empty($_REQUEST['url'])) {
  // fetch data from specified url
  $link=$_REQUEST['url'];

 if(stristr($_REQUEST['url'], 'http:') === FALSE) {
    $link = 'http://' . $link;
  }
  $text = file_get_contents($link);
}
elseif (isset($_REQUEST['text']) && !empty($_REQUEST['text'])) {
  // get text from text area
  $text = $_REQUEST['text'];
}

// parse emails
if (!empty($text)) {
  $res = preg_match_all(
    "/[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}/i",
    $text,
    $matches
  );

  if ($res) {
echo "<b>Found emails:</b> <br /><br />";
    foreach(array_unique($matches[0]) as $email) {
      echo $email . "<br />";
    }
  }
  else {
    echo "<b>No emails found.</b>";
  }
}

?>


<br><br><br><br><br><br>

<table border="0" width="100%" id="table3">
	<tr>

		<td align="center">
		<p align="center"><br>
		<i>(c) Free online email extracting script is created for you in ExtraSpy Software. All rights reserved. </i>
		<a href="http://www.emailextractorplus.com/">Email Collector</a> |
		<a href="/manual.htm">Quick quide</a><span lang="ru"> </span>|
		<a href="http://www.quick-pdf.com/pdf-to-word.htm">PDF to Word Converter</a> 
		| <a href="http://www.extralabs.net/skype-recorder.htm">Skype Recorder</a></p>

		<p align="center"><a href="/free-email-extractor.htm">Free Email 
		Extractor</a> | <a href="/buy-email-lists.htm">Where to buy Email Lists</a> |
		<a href="/email-grabber.htm">Email Grabber Software</a> |
		<a href="/email-lists.htm">What is Email Lists</a> |
		<a href="/email-marketing.htm">E-mail Marketing</a> |
		<a href="/online-email-extractor.htm">Online Email Extractors</a></td>

	</tr>
</table>



</td></tr></table></div></div></td></tr></table>
</body>
</html>