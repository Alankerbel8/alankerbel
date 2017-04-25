		
	<?php wp_footer(); ?>

		<div id="asd">

			<div class="panel panel-default" id="footerpan">

		  		<div class="panel-body" id="footerpanel">


					<div class="col-xs-6 footer1">Copyright &#169; 2016 | All Rights Reserved</div>

				 	<div class="col-xs-6 footer2">Designed by - <a href="http://alankerbel.com">Alan Kerbel</a></div>

				</div>

			</div> <!-- id footerpan -->

		</div>

		<script type="text/javascript">

		

$(document).ready(function(){
    $('a[href^="#"]').click(function(e) {
        e.preventDefault();
        var target = this.hash, $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 1250, 'swing', function() {
            window.location.hash = target;
        });
    });
});

		</script>


</body>

</html>
