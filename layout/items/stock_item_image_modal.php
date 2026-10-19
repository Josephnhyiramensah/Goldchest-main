<div class="modal fade bd-example-modal-lg" id="stock_item_img_upload_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="stock_item_img_upload_modal_title">Upload stock_item Image</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="stock_item_img_upload_form" method="POST" action="stock_item_img_upload.php" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="panel-body">
						<div class="form-row">
							<div class="col-md-12 mb-12 text-center">
                                <img src="/img/goldchest_3.png" alt="image" id="stock_item_image_display" style="width:250px; height:200px"><br>
								<label>Click to upload image</label>
								<input type="hidden" name="file_size" class="form-control" id="file_size" value="1000000">
								<input type="file" name="stock_item_img_file" class="form-control" id="stock_item_img_file" hidden="true">
								<input type="hidden" name="stock_item_id_img" class="form-control" id="stock_item_id_img">
							</div>
						</div>
						<!--<div class="form-row">
							<div class="col-md-12 mb-12">
								<label for="stock_item_img_comment">Comment</label>
								<textarea type="textarea" rows="2"  class="form-control" name="stock_item_img_comment" id="stock_item_img_comment" value=""></textarea>
							</div>
						</div>-->
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" name="stock_item_img_save_btn" id="stock_item_img_save_btn" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>