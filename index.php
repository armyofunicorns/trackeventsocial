<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang='en'>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Google Analytics _trackEvent & _trackSocial Test</title>

<!-- Google Analytics code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<insert UA number>']);
  _gaq.push(['_setDomainName', '<insert site URL>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- end of analytics -->

<script type="text/javascript">


function trackSocialMethod(siteSource,siteAction,targetUrl)
{
	//alert("Social track recorded");
	_gaq.push(['_trackSocial', siteSource, siteAction, targetUrl]);

}

function trackEventMethod(siteCat,catPerson,targetUrl)
{
	//alert("Event track recorded");
	_gaq.push(['_trackEvent', siteCat, catPerson, targetUrl]);

}


</script>
</head>


<body>

<!-- 
/// Some internal notes ///
To record Likes with Google Analytics, subscribe to Facebook's edge.create event and create a callback function to execute the Google Analytics tracking code.

When a user Likes your page, the callback function is executed and receives the URL of the resource being liked. The resource is then passed as a value to the _trackSocial method so Google Analytics can report on the network, action and URL being liked.

-->

 
<a href="#" onclick="return trackSocialMethod('Facebook','http://www.facebook.com/blah','Like')">Share on Facebook</a>
 
<a href="#" onclick="return trackSocialMethod('Twitter','https://twitter.com/blah','Like')">Share on Twitter</a>

<a href="#" onclick="return trackEventMethod('Website','About','http://www.blah.com')">Track This</a>
  
</body>
</html>