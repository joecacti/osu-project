<div id="footer">
	<div class="container site-wrap">
		<div class="footer-content">
			<div class="row">
				<div id="footer-left" class="col-sm-6">
					<a href="#"><img class="img-responsive osuhp-logo" src="/osu-project/images/osuhp-osu.png"></a>
					<br>
					<br>
					<a href="#"><img class="img-responsive link-logo" src="/osu-project/images/LinktoHealth_Logo.png"></a>
					<br>
					<br>
					<br>
					<h2>Let's Get <strong>Social</strong></h2>
					<br>
					<ul class="nav-social">
          				<li class="facebook"><a href="https://www.facebook.com/yp4hohiostate" target="_blank">Facebook</a></li>
          				<li class="twitter"><a href="https://twitter.com/YP4H" target="_blank">Twitter</a></li>
          				<li class="pinterest"><a href="http://pinterest.com/yp4h" target="_blank">Pinterest</a></li>
          				<li class="youtube"><a href="http://www.youtube.com/user/YP4H" target="_blank">YouTube</a></li>
        			</ul>
				</div>
				<div id="footer-right" class="col-sm-6">
					<p>
						OSU Health Plan, an affiliated corporation of The Ohio State University Wexner Medical Center, manages the medical plans and prescription drug programs for university faculty and staff, and provides wellness services for Your Plan for Health. LinkToHealth is a trademark of OSU Health Plan.
					</p>
					<p>For questions about our services or for technical assistance, please call<br><br> <a href="tel:6142924700">(614) 292-4700</a> or <a href="tel:8006786269">(800) 678-6269</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="copy-info">
	<div class="container site-wrap">
		&copy; <?php echo date('Y'); ?>, The Ohio State University Health Plan Inc. | 700 Ackerman Road, Suite 440 | Columbus, Ohio 43202 - <a href="#">Privacy Notice</a>
	</div>
</div>


		<script src="js/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script>
	    // DatePicker
$('#startDate').datepicker();
$('#endDate').datepicker();

    // Floating Form Labels
      function updateText(event){
    var input=$(this);
    setTimeout(function(){
      var val=input.val();
      if(val!="")
        input.parent().addClass("floating-placeholder-float");
      else
        input.parent().removeClass("floating-placeholder-float");
    },1)
  }
  $(".floating-placeholder input").keydown(updateText);
  $(".floating-placeholder input").change(updateText);
  
</script>
	</body>
</html>