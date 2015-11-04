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