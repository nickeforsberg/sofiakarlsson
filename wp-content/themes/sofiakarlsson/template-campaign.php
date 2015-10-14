<?php
/*
Template Name: Campaign
*/

get_header('campaign');

?>

<section id="campaign">
	<iframe id="iframeid" src="http://stjarnenatter.sofiakarlsson.com" style="width:100%; height:100%;margin:0px;border:0px"></iframe>
	<script type="text/javascript">
	        function windowDimensions() { // prototype/jQuery compatible
	        var myWidth = 0, myHeight = 0;
	        if( typeof( window.innerWidth ) == 'number' ) {
	            //Non-IE or IE 9+ non-quirks
	            myWidth = window.innerWidth;
	            myHeight = window.innerHeight;
	        } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
	            //IE 6+ in 'standards compliant mode'
	            myWidth = document.documentElement.clientWidth;
	            myHeight = document.documentElement.clientHeight;
	        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
	            //IE 5- (lol) compatible
	            myWidth = document.body.clientWidth;
	            myHeight = document.body.clientHeight;
	        }
	        if (myWidth < 1) myWidth = screen.width; // emergency fallback to prevent division by zero
	        if (myHeight < 1) myHeight = screen.height;
	        return [myWidth,myHeight];
	    }
	    var dim = windowDimensions();
	    myIframe = $('#campaign-wrapper'); // changed the code to use jQuery
	    myIframe.height((dim[1]) + "px");
	    </script>
</section>
<?php get_footer('campaign'); ?>
