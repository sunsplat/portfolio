  </head>
  
  <body>
		  <!-- top navigation bar -->
		  <nav class="navbar navbar-inverse navbar-fixed-top">
		  	<div class="container">
		  		<div class="navbar-header">
		  			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" data-interval="2000">
		  				<span class="sr-only">Toggle navigation</span>
		  				<span class="icon-bar"></span>
		  				<span class="icon-bar"></span>
							<span class="icon-bar"></span>
		  			</button>
		  			<a class="navbar-brand" href="view">Ellen Sun</a>
		  		</div>
		  		<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav" id="top-nav">
							<li><a href="#about">About</a></li>
							<li><a href="#resume">Resume</a></li>
							<li><a href="view#portfolio">Portfolio</a></li>
		          <li><a href="<?php echo site_url('pages/quotes'); ?>">Quotes</a></li>
							<li><a class="btn" data-toggle="modal" data-target="#myModal">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right social">
							<li><a href="http://www.github.com/sunspalt"><i class="fa fa-github">Github</i></a></li>
							<li><a href="http://www.twitter.com/ms_ellerz"><i class="fa fa-twitter">@ms_ellerz</i></a></li>
							<li><a href="http://www.linkedin.com/in/msellensun"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="mailto:ms.esun@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
						</ul>
					</div>
				</nav>
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">

		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">New message</h4>

		      </div> <!-- modal-header -->

		      <div class="modal-body">
		        
	          <?php echo validation_errors(); ?>
	          <?php echo form_open('pages/create'); ?>
		          <div class="form-group">
		            <label for="name" class="control-label">Name:</label>
		            <input type="input" class="form-control" id="name" name="name">
		          </div>
		          <div class="form-group">
		            <label for="email" class="control-label">Email:</label>
		            <input type="text" class="form-control" id="email" name="email">
		          </div>
		          <div class="form-group">
		            <label for="message" class="control-label">Message:</label>
		            <textarea class="form-control" id="message" name="message"></textarea>
		          </div>
		          <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Send Message" />
		      		</div>
		      	</form>
		    	</div>
		    </div> <!-- modal-content -->
		  </div> <!-- modal-dialog -->
		</div>


				<!--// <script type="text/javascript">
	 //    $(document).ready(function(){
	 //        $('input#submit').click(function(){
	 //            var data = $('#myModal').serialize('name: name, message: message, email: email');
	 //            $.ajax({
	 //                method: 'POST',
	 //                cache: false,
	 //                url: 'quotes/create',
	 //                datatype: 'json',
	 //                data: data,
	 //                success: function(data){
	 //                    alert('yay it worked');
	 //                    $('#myModal').modal('hide');
	 //                    $('input:text, textarea').val('');
	 //                },
	 //                failure: function(){
	 //                    console.log('It didnt work');
	 //                }
	 //            });
	          
	 //        });
	 //    });
		// </script> -->