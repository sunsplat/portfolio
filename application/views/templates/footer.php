			</div>
					</section>
		</div> <!-- wrapper -->
			
			<div class="container footer">
			        	<em>&copy;</em> 2015 Ellen Sun | <?php $date = new DateTime();
			              echo date_format($date, 'Y M d D H:j A'); ?>
			</div>

        <script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>	
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/pagescroll/jquery.easing.min.js'); ?>"></script>	
        <script src="<?php echo base_url('assets/js/pagescroll/scrolling-nav.js'); ?>"></script>	       
        <script type="text/javascript">
	        $('.model-body').on('click', '#submit', function(e) {
	        				if (!isFormValid()) {
	        						e.preventDefault;
	        						alert("Please fill in all highlighted fields!");
	        				}
	        		});
        	function isFormValid() {
		        	var isFormValid = true;
		        	$(".required").each(function() {
		        			if ($.trim($(this).val()).length == 0) {
		        					$(this).addClass("has-error");
		        					isFormValid = false;
		        			} else {
		        					$(this).removeClass("has-error");
		        			}

		        	return isFormValid;
        			});
		      };
        </script>

  </body>
</html>