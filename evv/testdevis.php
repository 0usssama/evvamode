<div id="tutorial"><h1>Demo Simple PHP Shopping Cart</h1>
<div id="demo-content">
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>
<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Price<br>( in $)</th>
<th style="text-align:right;" width="10%">Total<br>( in $)</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>
                <tr>
                <td><img src="product-images/laptop.jpg" class="cart-item-image">XP 1155 Intel Core Laptop</td>
                <td>LPN45</td>
                <td style="text-align:right;">1</td>
                <td style="text-align:right;">800.00</td>
                <td style="text-align:right;">800.00</td>
                <td style="text-align:center;"><a href="index.php?action=remove&amp;code=LPN45" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item"></a></td>
                </tr>
                                <tr>
                <td><img src="product-images/camera.jpg" class="cart-item-image">FinePix Pro2 3D Camera</td>
                <td>3DcAM01</td>
                <td style="text-align:right;">4</td>
                <td style="text-align:right;">1500.00</td>
                <td style="text-align:right;">6,000.00</td>
                <td style="text-align:center;"><a href="index.php?action=remove&amp;code=3DcAM01" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item"></a></td>
                </tr>
                                <tr>
                <td><img src="product-images/watch.jpg" class="cart-item-image">Luxury Ultra thin Wrist Watch</td>
                <td>wristWear03</td>
                <td style="text-align:right;">4</td>
                <td style="text-align:right;">300.00</td>
                <td style="text-align:right;">1,200.00</td>
                <td style="text-align:center;"><a href="index.php?action=remove&amp;code=wristWear03" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item"></a></td>
                </tr>
                
<tr>
<td colspan="2" align="right">Total:</td>
<td align="right">9</td>
<td align="right" colspan="2"><strong>8,000.00</strong></td>
<td></td>
</tr>
</tbody>
</table>
  </div>

<div id="product-grid">
	<div class="txt-heading">Product Catalog</div>
			<div class="product-item">
			<form method="post" action="index.php?action=add&amp;code=3DcAM01">
			<div class="product-image"><img src="product-images/camera.jpg"></div>
			<div class="product-tile-footer">
			<div class="product-title">FinePix Pro2 3D Camera</div>
			<div class="product-price">$1500.00</div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2"><input type="submit" value="Add to Cart" class="btnAddAction"></div>
			</div>
			</form>
		</div>
			<div class="product-item">
			<form method="post" action="index.php?action=add&amp;code=USB02">
			<div class="product-image"><img src="product-images/external-hard-drive.jpg"></div>
			<div class="product-tile-footer">
			<div class="product-title">EXP Portable Hard Drive</div>
			<div class="product-price">$800.00</div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2"><input type="submit" value="Add to Cart" class="btnAddAction"></div>
			</div>
			</form>
		</div>
			<div class="product-item">
			<form method="post" action="index.php?action=add&amp;code=wristWear03">
			<div class="product-image"><img src="product-images/watch.jpg"></div>
			<div class="product-tile-footer">
			<div class="product-title">Luxury Ultra thin Wrist Watch</div>
			<div class="product-price">$300.00</div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2"><input type="submit" value="Add to Cart" class="btnAddAction"></div>
			</div>
			</form>
		</div>
			<div class="product-item">
			<form method="post" action="index.php?action=add&amp;code=LPN45">
			<div class="product-image"><img src="product-images/laptop.jpg"></div>
			<div class="product-tile-footer">
			<div class="product-title">XP 1155 Intel Core Laptop</div>
			<div class="product-price">$800.00</div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2"><input type="submit" value="Add to Cart" class="btnAddAction"></div>
			</div>
			</form>
		</div>
	</div>
<div class="clear-float"></div>
</div>
<p class="tutorial-back"><a href="https://phppot.com/php/simple-php-shopping-cart/">Back to Tutorial</a></p>
<p><a href="#top" class="top">Back to Top</a></p>   
</div>