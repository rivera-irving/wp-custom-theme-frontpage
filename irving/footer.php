<!-- footer start here -->
		<div class="footer">
			<div class="wrapper">
				<h2>Need Support? Contact Us at <a href="mailto:service@arbitrageportfolio.com">service@arbitrageportfolio.com</a></h2>
				
				<div class="botmnu">
					<ul>
						<li><a href="<?php bloginfo('url')?>/privacy-policy">Privacy Policy</a></li>
						<li><a href="<?php bloginfo('url')?>/terms-and-condition">Terms & Condition of Use </a></li>
						<li><a href="<?php bloginfo('url')?>/disclaimer">Disclaimer</a></li>
					</ul>
				</div>
				<h3>&copy;Copyright ArbitragetPortfolio</h3>
			</div>
		</div>
<!-- footer closed here -->

	</div>


<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '330112773803565']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=330112773803565&amp;ev=NoScript" /></noscript>


<script>
var _prum = [['id', '53b49bd9abe53d8f07c101fe'],
             ['mark', 'firstbyte', (new Date()).getTime()]];
(function() {
    var s = document.getElementsByTagName('script')[0]
      , p = document.createElement('script');
    p.async = 'async';
    p.src = '//rum-static.pingdom.net/prum.min.js';
    s.parentNode.insertBefore(p, s);
})();
</script>


<!-- Begin Inspectlet Embed Code -->
<script type="text/javascript" id="inspectletjs">
	window.__insp = window.__insp || [];
	__insp.push(['wid', 923720663]);
	(function() {
		function __ldinsp(){var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); }
		if (window.attachEvent){
			window.attachEvent('onload', __ldinsp);
		}else{
			window.addEventListener('load', __ldinsp, false);
		}
	})();
</script>
<!-- End Inspectlet Embed Code -->



<!-- timer script start here -->
<script type="text/javascript">
var hourLabel = document.getElementById("hours");
var minutesLabel = document.getElementById("minutes");
var secondsLabel = document.getElementById("seconds");
var totalSeconds = 0;
setInterval(setTime, 1000);

function setTime()
{
++totalSeconds;
secondsLabel.innerHTML = pad(totalSeconds%60);
minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
hourLabel.innerHTML = pad(parseInt(totalSeconds / (60 * 60)));
}

function pad(val)
{
var valString = val + "";
if(valString.length < 2)
{
return "0" + valString;
}
else
{
return valString;
}
}
</script>
<!-- timer script closed here -->


<script src="//load.sumome.com/" data-sumo-site-id="e1a584e37cac9b093016f1a7751964f35ae19ffcf6e7974eb7dd493d3a94af5f" async></script>

<?php //wp_footer();?>
</body>
</html>
