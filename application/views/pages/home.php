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
  			<a class="navbar-brand" href="#home">Ellen Sun</a>
  		</div>
  		<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav" id="top-nav">
					<li><a href="#about">About</a></li>
					<li><a href="#skills">Skills</a></li>
					<li><a href="#experience">Experience</a></li>
					<li><a class="btn" data-toggle="modal" data-target="#exampleModal">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://www.twitter.com/ms_ellerz"><i class="fa fa-twitter"></i></a></li>
					<li><a href="http://www.linkedin.com/in/msellensun"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="mailto:ms.esun@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
				</ul>
			</div>
		</nav>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view("templates/snippets/carousel.php"); ?>
<?php $this->load->view("templates/snippets/thumbnails.php"); ?>

		