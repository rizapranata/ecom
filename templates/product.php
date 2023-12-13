<div class="col-3 my-2">
<div class="card m-auto product" style="width: 20rem;">
	<img class="card-img-top" src="<?php echo 'http://' . $_SERVER['SERVER_NAME'] ?>/ecom/img/products/<?php echo $r['img'];?>" alt="Card image cap">
	<div class="card-body">
		<h4 class="card-title"><?php echo $r['name']; ?></h4>
		<p class="card-text"><?php echo $r['detail']; ?></p>
		<h6>IDR <?php echo number_format($r['price'],0,',','.'); ?> / day</h6>
		<hr>

		<div class="accordion" id="accordionExample">
			<div class="card">
				<div id="headingOne">
				<h6 class="mb-0">
					<button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#<?php echo $r['id']; ?>" aria-expanded="true" aria-controls="<?php echo $r['id']; ?>">
					Rental Now
					</button>
				</h6>
				</div>

				<div id="<?php echo $r['id']; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="card-body">
					<!-- show form only if the user is logged in -->
					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
					<form method="post">
						<input type="text" name="p_id" value="<?php echo $r['id']; ?>" hidden="hidden" />
						<input type="text" name="p_price" value="<?php echo $r['price']; ?>" hidden="hidden" />
						<input type="text" name="p_name" value="<?php echo $r['name']; ?>" hidden="hidden" />
						<input type="text" name="u_id" value="<?php echo $_SESSION['id']; ?>" hidden="hidden" />
						<input type="text" name="u_name" value="<?php echo $_SESSION['username']; ?>" hidden="hidden" />
						
						<label>Long Rental</label>
						<div class="form-group">
							<div class="d-flex mb-2">
								<input type="number" id="qty<?php echo $r['id']; ?>" name="quantity" class="mr-2" value="1" />
								<label class="mt-1">days</label>
							</div>
						</div>
						<div class="form-group">
							<label>Contact</label>
							<input type="text" name="phone" class="form-control" placeholder="contact number" required="true">
						</div>
						<div class="form-group">
							<label>Delivery Address</label>
							<input type="text" name="address" class="form-control" placeholder="Delivery Address" required="true">
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">
								<span class="text-white"><i class="fa fa-shopping-cart text-white"></i> Rent</span>
							</button>
						</div>
					</form>
						<?php
					}else echo "sign in to buy"; ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>