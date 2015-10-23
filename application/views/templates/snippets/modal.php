		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">

		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">New message</h4>
		      </div>
		      <div class="modal-body">
		        
		          <?php echo validation_errors(); ?>
		          <?php echo form_open('pages/home'); ?>
		          <div class="form-group">
		            <label for="name" class="control-label">Name:</label>
		            <input type="text" class="form-control" id="name" name="name">
		          </div>
		          <div class="form-group">
		            <label for="email" class="control-label">Email:</label>
		            <input type="text" class="form-control" id="email" name="email">
		          </div>
		          <div class="form-group">
		            <label for="message" class="control-label">Message:</label>
		            <textarea class="form-control" id="message" name="message"></textarea>
		          </div>
		        </form>
		      </div>

		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Send Message" />
		      </div>
		    </div>
		  </div>
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
		// </script>

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
		// </script>