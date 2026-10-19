<div 
class="modal fade hide bd-example-modal-lg" 
id="goldbod_price_modal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="goldbod_price_modal" 
aria-hidden="true"
data-backdrop="static"
data-keyboard="false">
	<div class="modal-dialog" style="max-width: 70%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title m-0 font-weight-bold text-primary" id="goldbod_price_modal_header">Goldbod Price</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="goldbod_price_modal_form" method="POST">
	                <div class="panel-body">
						<?php
						$sql="SELECT * FROM goldbod_price ORDER BY date DESC";
						$result = mysqli_query($con,$sql);
						while($row = mysqli_fetch_array($result))
						{
							$world_market_price = $row['world_market_price'];
							$exchange_rate = $row['exchange_rate'];
							$discount_rate = $row['discount_rate'];
							$price_per_pound = $row['price_per_pound'];
							$special_bonus = $row['special_bonus'];
							$total_price_per_pound = $row['total_price_per_pound'];
							$world_market_price_f = number_format($world_market_price, 2);
							$exchange_rate_f = number_format($exchange_rate, 2);
							$discount_rate_f = number_format($discount_rate, 2);
							$price_per_pound_f = number_format($price_per_pound, 2);
							$special_bonus_f = number_format($special_bonus, 2);
							$total_price_per_pound_f = number_format($total_price_per_pound, 2);

							echo '<div class="form-row">
								<div class="col-md-12 mb-12 form-group text-center">
									<h5>Date</h5>
									<h4 style="color:black"><strong>'.$row['date'].'</strong></h4>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12 mb-12 form-group text-center">
									<h5>World Market Price (per ounce)</h5>
									<h4 style="color:black"><strong>US$'.$world_market_price_f.'</strong></h4>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12 mb-12 form-group text-center">
									<h5>Exchange Rate</h5>
									<h4 style="color:black"><strong>US$ 1 = GH¢'.$exchange_rate_f.'</strong></h4>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12 mb-12 form-group text-center">
									<h5>Discount Rate</h5>
									<h4 style="color:black"><strong>'.$discount_rate_f.'%</strong></h4>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12 mb-12 form-group text-center">
									<h5>Price Per Pound</h5>
									<h4 style="color:black"><strong>GH¢'.$price_per_pound_f.'</strong></h4>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12 mb-12 form-group text-center">
									<h5>NB: GoldBod’s Temporary Special Bonus for licensed Miners per pound</h5>
									<h4 style="color:black"><strong>GH¢'.$special_bonus_f.'</strong></h4>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12 mb-12 form-group text-center">
									<h5>Total Price Per Pound</h5>
									<h4 style="color:black"><strong>GH¢'.$total_price_per_pound_f.'</strong></h4>
								</div>
							</div>';
						};
						?>
	                </div>
	                <div class="modal-footer">
	                    <button type="button" name="goldbod_price_cancel_btn" id="goldbod_price_cancel_btn" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>