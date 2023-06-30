<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  
  <title>Sprouting Mix'n'Match Blowout | Agroage Canada</title>
  <meta name="description" content="Customizable and unique indoor home gardening kits, coming soon to Canada!">
  
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/common/header.php'; ?>  

<section class="mylayout" id="header1-f" style="background-image:url('/assets/images/bg/jen-theodore-Tys0QOcdbBA-unsplash.jpg');">
<div class="mbr-overlay" style="background-color: rgb(250, 250, 250);opacity:0.75"></div>
    <div class="align-center container">
	
		<style>
			@media (min-width:992px) {
				.product_image {
					border-radius: 10px;
					max-width: 50%;
					width: 100%;
					float: left;
				}
				.product_details {
					float: left;
					max-width: 50%;
					width: 100%;
					padding-left: 2rem;
				}
				.product_description {
				}
			}

		</style>
		
		<div class="product_image">
			<div class="carousel slide carousel-fade mycarousel lazyfix1" data-ride="carousel">
			  <div style="border-radius:10px">
			  	<div class="carousel-item active"><img class="d-block w-100" style="border-radius:10px" src="sprouting-kit.jpg"></div>
				<div class="carousel-item"><img class="d-block w-100" style="border-radius:10px" src="sprout-1.jpg"></div>
				<div class="carousel-item"><img class="d-block w-100" style="border-radius:10px" src="sprout-2.jpg"></div>
				<div class="carousel-item"><img class="d-block w-100" style="border-radius:10px" src="sprout-3.jpg"></div>
			  </div>
			</div>
		</div>
		<div class="product_details">
			<h1 class="mbr-section-title mbr-fonts-style mb-3 display-2 en">Sprouting Mix'n'Match Blowout</h1>
			<p class="mbr-text mbr-fonts-style display-7 en step-title" id="order-total" style="font-size:1.5rem;display:inline">$6.99 (incl. tax)</p>
			<div disabled class="product_description">
				<p class="mbr-text mbr-fonts-style display-7 en" style="text-align:left">
				Contains 5 sprouting seed varieties (certified organic by Pro-Cert) of your choice, instructions, and automated reminders. 1 free reusable plastic sprouting lid is included with every order while supplies last.
				<br><br>
				A portion of all proceeds will be donated to the Ottawa Food Bank</a>.
				<br><br>
				For more info on sprouting, click <a href="https://agroage.ca/blog/2021/01/22/all-about-sprouts/" target="_blank">here</a> to read our blog post <text style="font-style:italic">All About Sprouts</text>.
				</p>
				<div>
				<div id="checkout1" class="mycheckout">
					<p class="mbr-text mbr-fonts-style display-7 en step-title">Step 1. Select 5 sprouting seed varieties:</p>
					<div style="display: inline-grid;justify-items: left;grid-template-columns: repeat(2,auto);grid-gap: 0 5vw;">
					<div class="form-check"><input type="checkbox" cat='sprout' id="mung" value="mung" class="form-check-input"/><label for="mung" class="form-check-label">Mung bean</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="clover" value="clover" class="form-check-input"/><label for="clover" class="form-check-label">Red clover</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="sesame" value="sesame" class="form-check-input"/><label for="sesame" class="form-check-label">Black sesame</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="lentil" value="lentil" class="form-check-input"/><label for="lentil" class="form-check-label">Brown lentil</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="rapini" value="rapini" class="form-check-input"/><label for="rapini" class="form-check-label">Rapini</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="mustard" value="mustard" class="form-check-input"/><label for="mustard" class="form-check-label">Brown mustard</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="radish" value="radish" class="form-check-input"/><label for="radish" class="form-check-label">Triton radish</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="barley" value="barley" class="form-check-input"/><label for="barley" class="form-check-label">Barley</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="buckwheat" value="buckwheat" class="form-check-input"/><label for="buckwheat" class="form-check-label">Buckwheat</label></div>
					</div>
				</div>
				
				<div id="checkout3" class="mycheckout">
				<p class="mbr-text mbr-fonts-style display-7 en step-title">Step 2. Select delivery method:</p>
				<div style="display: inline-grid;justify-items: left;">
				<div class="form-check"><input type="radio" name="delivery" id="curbside" value="001" class="form-check-input" data-toggle="modal" href="#curbmodal"/>
				<label for="curbside" class="form-check-label">Curbside pick-up 
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
						<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
					</svg>
				</label></div>

				</div>
				</div>
				
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" id="hosted_button_id">
					<table>
						<tr><td><input type="hidden" name="on0" value="Sprouts"></td></tr>
						<tr><td><input type="hidden" select name="os0" id="sprout-options"></select></td></tr>
					</table>		
					<input type="hidden" name="lc" value="CA">
					<input type="hidden" name="country" value="CA">
					<input type="button" id="button-pay" class="btn btn-success" value="Checkout with PayPal">
				</form>
				
				<p class="mbr-text mbr-fonts-style display-7 en" id="err-msg" style="color:red;visibility:hidden;">Complete form to checkout.</p>
				</div>
			</div>
		</div>
		
		<div id="curbmodal" class="modal" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Important - Curbside pick-up</h5>            
					</div>
					<div class="modal-body">
						<p>Pick-up at 191 Centrepointe Drive, Nepean, ON K2G 5H7</p>
						<p>You will receive an email in 1 to 2 days when your order is ready for pick-up.</p>
						<div id="mapid1" style="height:33vh"></div>
					</div>
					<div class="modal-footer" style="justify-content:center">
						<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">OK</button>
					</div>
				</div>
			</div>
		</div>	
		
		<a hidden href="https://commerce.coinbase.com/checkout/8c07e4a9-aea7-42f3-b08b-72aff845b0ae" target="_top"><input type="button" id="button-pay" class="btn btn-success" value="Checkout with Coinbase"></a>
		
		<script>
			
			$("input[type='checkbox'][cat='sprout']").change(function(){
				$("#err-msg").css('visibility','hidden');
				var count = $("input[type='checkbox'][cat='sprout']:checked").length;
				if(count>=5){
					$("input[type='checkbox'][cat='sprout']:not(:checked)").attr('disabled','true');
					var sproutoptions = "";
					for (i of $("input[type='checkbox'][cat='sprout']:checked")) {
						sproutoptions += i.id + " ";
					}
					$("#sprout-options").attr("value",sproutoptions);
				} else {
					$("input[type='checkbox'][cat='sprout']:not(:checked)").removeAttr('disabled');
				}
			});

			$("input[type='radio'][name='delivery']").change(function(){
				$("#err-msg").css('visibility','hidden');
				switch ($("input[type='radio'][name='delivery']:checked").val()) {
					case "001" : {
						$("#hosted_button_id").attr("value", "FWZYFYKG7Q5VA"); //curbside
						break;
					}
				}
			});
			
			var mymap1 = L.map('mapid1',{
				maxBounds: [[45.395874, -75.447467],[45.274179, -76.083755]],
				minZoom: 9,
				zoomControl: false
				}).setView([45.337811, -75.763438], 14);
			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
			}).addTo(mymap1);
			L.marker([45.337811, -75.763438]).addTo(mymap1);
			
			$('#curbmodal').on('show.bs.modal', function() {
				setTimeout(() => {
				mymap1.invalidateSize();
				mymap1.panTo([45.337811, -75.763438], 14);
				},0);
			});
			
			$("#button-pay").click(function() {
				if (($("input[type='checkbox'][cat='sprout']:checked").length === 5) && ($("input[type='radio'][name='delivery']:checked").length === 1)) {
					$("#button-pay").attr("type","image");
					$("#button-pay").click();
				} else {
					$("#button-pay").attr("type","button");
					$("#err-msg").css('visibility','visible');			
				}
			});

		</script>
		
		<div>
			<style>
				@media (min-width: 992px) {
					.mycheckout {
						max-width: 33vw;
					}
				}
				
				.mycheckout {
						margin: auto auto 10px auto;
						border-radius: 10px;
						padding: 10px;
						background-color: rgba(0, 0, 0, 0.1);
						display:grid;
						text-align:left;
				}
				
				.step-title {
					text-align:center;
					font-weight:bold;
				}
				
			</style>
		</div>
			  
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/common/footer.php'; ?>  

</body>
</html>