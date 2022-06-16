<?php
	$conn = mysqli_connect('localhost','root','','dbgadget');
	
	$prodID = $_GET['prodid'];

	if(!empty($prodID)){
		$sqlSelectSpecProd = mysqli_query($conn, "SELECT * FROM products where id = '$prodID'") or die(mysqli_error());
		$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);
		$prodname= $getProdInfo["Product"];
		$prodcat = $getProdInfo["Category"];
		$prodprice = $getProdInfo["Price"];
		$proddesc = $getProdInfo["Description"];
		$prodimage = $getProdInfo["imgUrl"];
				}
?>
<?php include('include/home/header.php'); ?>
	
	<section>
		<div class="container">
			<div class="row">
				<?php include('include/home/sidebar.php'); ?>
				

				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
                            
						
							<img src="reservation/img/products/<?php echo $prodimage; ?>" />	
                                
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
							<h2 class="product"><?php echo $prodname; ?></h2>
								<p>Категорія: <?php echo $prodcat; ?></p>
				
								<p>Ціна: <span class="price"><?php echo $prodprice; ?>₴</span></p>

                                <br>
                                
                                <a class="btn btn-default add-to-cart" id="add-to-cart"><i class="fa fa-shopping-cart"></i>Додати до кошика</a>
                                <p class="info hidethis" style="color:red;"><strong>Товар доданий до кошика</strong></p>
								<p><b>Опис товара: </b><?php echo $proddesc; ?></p>
								<p><b>Контактна інформація: </b> +380681347319</p>
								<p><b>Пошта: </b> internetshop@gmail.com</p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
				</div>
			</div>
		</div>
		</div>
	</section>
	
	<?php include('include/home/footer.php'); ?>