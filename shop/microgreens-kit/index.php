<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  
  <title>Microgreens Kit | Agroage Canada</title>
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
			  	<div class="carousel-item active"><img class="d-block w-100" style="border-radius:10px" src="buckwheat.jpg"></div>
				<div class="carousel-item"><img class="d-block w-100" style="border-radius:10px" src="barley.jpg"></div>
				<div class="carousel-item"><img class="d-block w-100" style="border-radius:10px" src="pea.jpg"></div>
				<div class="carousel-item"><img class="d-block w-100" style="border-radius:10px" src="triton.jpg"></div>
			  </div>
			</div>
				
			<ul class="social-list" hidden>
				<li class="soc-item">
				  <a title="Tweet" href="https://twitter.com/intent/tweet?status=Sprouting Kit | Agroage Canada%20https://agroage.ca/shop/sprouting-kit" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><path d="M25.4 6.5c-.9.5-1.8.9-2.9 1.1-.8-.9-2-1.4-3.3-1.4-2.5 0-4.5 2-4.5 4.4 0 .3 0 .7.1 1-3.8-.2-7.1-2-9.3-4.6-.4.7-.6 1.4-.6 2.3 0 1.5.8 2.9 2 3.7-.7 0-1.4-.2-2-.6v.1c0 2.1 1.6 3.9 3.6 4.4-.4 0-.8.1-1.2.1-.3 0-.6 0-.8-.1.6 1.8 2.2 3 4.2 3.1-1.5 1.2-3.5 1.9-5.6 1.9-.4 0-.7 0-1.1-.1 2 1.3 4.4 2 6.9 2 8.3 0 12.8-6.8 12.8-12.6v-.6c.9-.6 1.6-1.4 2.3-2.3-.8.4-1.7.6-2.6.7.9-.6 1.7-1.4 2-2.5z"></path></svg>
				  </a>
				</li>
				<li class="soc-item">
				  <a title="Share on Facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://agroage.ca/shop/sprouting-kit" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false;" class="fbc-has-badge fbc-UID_1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><path d="M23.9 5H6.1C5.5 5 5 5.5 5 6.1v17.7c0 .7.5 1.2 1.1 1.2h9.5v-7.7H13v-3h2.6V12c0-2.6 1.6-4 3.9-4 1.1 0 2 .1 2.3.1v2.7h-1.6c-1.2 0-1.5.6-1.5 1.5v1.9h3l-.4 3h-2.6V25h5.1c.6 0 1.1-.5 1.1-1.1V6.1c.1-.6-.4-1.1-1-1.1z"></path></svg></a>
				</li>
				<li class="soc-item">
				  <a title="Pin" data-pin-custom="true" data-pin-do="buttonPin" data-pin-log="button_pinit" data-pin-href="https://www.pinterest.com/pin/create/button?guid=10fuZwJNyNyZ-1&amp;url=https%3A%2F%2Fagroage.ca%2Fshop%2Fsprouting-kit&amp;media=https%3A%2F%2Fagroage.ca%2Fshop%2Fsprouting-kit.jpg&amp;description=Contains%2520sprouting%2520seeds%2C%2520a%2520sprouting%2520jar%2C%2520detailed%2520virtual%2520instructions%2C%2520care%2520reminders%2C%2520and%2520cus..."><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><path d="M15 25c-1 0-2-.2-3-.4.4-.7 1-1.8 1.2-2.6.1-.5.6-2.4.6-2.4.3.6 1.3 1.1 2.3 1.1 3 0 5.2-2.8 5.2-6.2 0-3.3-2.7-5.8-6.2-5.8-4.3 0-6.6 2.9-6.6 6.1 0 1.5.8 3.3 2 3.9.2.1.3 0 .3-.1s.2-.8.3-1.1c0-.1 0-.2-.1-.3-.4-.5-.7-1.4-.7-2.3 0-2.2 1.7-4.3 4.5-4.3 2.5 0 4.2 1.7 4.2 4.1 0 2.7-1.4 4.6-3.1 4.6-1 0-1.7-.8-1.5-1.8.3-1.2.8-2.5.8-3.3 0-.8-.4-1.4-1.3-1.4-1 0-1.8 1-1.8 2.4 0 .9.3 1.5.3 1.5s-1 4.2-1.2 5c-.2.9-.1 2.1 0 2.9C7.6 22.9 5 19.2 5 15 5 9.5 9.5 5 15 5s10 4.5 10 10-4.5 10-10 10z"></path><path d="M15 5C9.5 5 5 9.5 5 15c0 4.2 2.6 7.9 6.4 9.3-.1-.8-.2-2 0-2.9.2-.8 1.2-5 1.2-5s-.3-.6-.3-1.5c0-1.4.8-2.4 1.8-2.4.9 0 1.3.6 1.3 1.4 0 .9-.5 2.1-.8 3.3-.2 1 .5 1.8 1.5 1.8 1.8 0 3.1-1.9 3.1-4.6 0-2.4-1.7-4.1-4.2-4.1-2.8 0-4.5 2.1-4.5 4.3 0 .9.3 1.8.7 2.3.1.1.1.2.1.3-.1.3-.2 1-.3 1.1 0 .2-.1.2-.3.1-1.2-.6-2-2.4-2-3.9 0-3.2 2.3-6.1 6.6-6.1 3.5 0 6.2 2.5 6.2 5.8 0 3.4-2.2 6.2-5.2 6.2-1 0-2-.5-2.3-1.1 0 0-.5 1.9-.6 2.4-.2.9-.8 2-1.2 2.6.8.5 1.8.7 2.8.7 5.5 0 10-4.5 10-10S20.5 5 15 5z"></path></svg>
				  </a>
				</li>
			</ul>

		</div>
		<div class="product_details">
			<h1 class="mbr-section-title mbr-fonts-style mb-3 display-2 en">Microgreens Kit</h1>
			<p class="mbr-text mbr-fonts-style display-7 en step-title" id="order-total" hidden><del style="color:grey">$14.99</del> <text style="color:red">$9.99 (33% OFF)</text></p>
			<div class="product_description">
				<p class="mbr-text mbr-fonts-style display-7 en" style="text-align:left">
				Contains 2 varieties of microgreen seeds, 2 self-watering plant pots, 2 decorative plant pot sleeves, detailed instructions, and customer support.
				</p>
			
				<div id="checkout1" class="mycheckout" hidden>
					<p class="mbr-text mbr-fonts-style display-7 en step-title">Step 1. Select 4 sprouts:</p>
					<div style="display: inline-grid;justify-items: left;grid-template-columns: repeat(2,auto);grid-gap: 0 5vw;">
					<div class="form-check"><input type="checkbox" cat='sprout' id="mung" value="mung" class="form-check-input"/><label for="mung" class="form-check-label">Mung bean</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="clover" value="clover" class="form-check-input"/><label for="clover" class="form-check-label">Red clover</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="sesame" value="sesame" class="form-check-input"/><label for="sesame" class="form-check-label">Black sesame</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="lentil" value="lentil" class="form-check-input"/><label for="lentil" class="form-check-label">Brown lentil</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="rapini" value="rapini" class="form-check-input"/><label for="rapini" class="form-check-label">Rapini</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="mustard" value="mustard" class="form-check-input"/><label for="mustard" class="form-check-label">Brown mustard</label></div>
					<div class="form-check"><input type="checkbox" cat='sprout' id="radish" value="radish" class="form-check-input"/><label for="radish" class="form-check-label">Triton radish</label></div>
					</div>
				</div>
				
				<div id="checkout3" class="mycheckout" hidden>
				<p class="mbr-text mbr-fonts-style display-7 en step-title">Step 2. Select delivery method:</p>
				<div style="display: inline-grid;justify-items: left;">
				<div class="form-check"><input type="radio" name="delivery" id="curbside" value="001" class="form-check-input" data-toggle="modal" href="#curbmodal"/>
				<label for="curbside" class="form-check-label">Curbside pick-up 
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
						<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
					</svg>
				</label></div>
				<div hidden class="form-check"><input type="radio" name="delivery" id="localdel" value="002" class="form-check-input" data-toggle="modal" href="#delivmodal"/>
				<label for="localdel" class="form-check-label">Local delivery (+$5.00) 
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
						<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
					</svg>		
				</label></div>
				</div>
				</div>
				
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" hidden>
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
		
		<div id="curbmodal" class="modal" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Important - Curbside pick-up</h5>            
					</div>
					<div class="modal-body">
						<p>Pick-up at 191 Centrepointe Drive, Nepean, ON K2G 5H7</p>
						<div id="mapid1" style="height:33vh"></div>
					</div>
					<div class="modal-footer" style="justify-content:center">
						<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">OK</button>
					</div>
				</div>
			</div>
		</div>	
		
		<div id="delivmodal" class="modal" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Important - Local delivery</h5>            
					</div>
					<div class="modal-body">
						<p>If you are not located within the delivery radius shown below, please change the selected delivery method or your preorder will be cancelled.</p>
						<div id="mapid2" style="height:33vh"></div>
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
				if(count>=4){
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
						$("#hosted_button_id").attr("value", "PKNNNPHQC54AL"); //curbside
						$("#order-total").html('<del style="color:grey">$14.99</del> <text style="color:red">$9.99 (33% OFF)</text>')
						break;
					}
					case "002" : {
						$("#hosted_button_id").attr("value", "8NWS3N4452CC6"); //localdel
						$("#order-total").text("Order total: $14.99");
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
			
			var mymap2 = L.map('mapid2',{
				maxBounds: [[45.395874, -75.447467],[45.274179, -76.083755]],
				minZoom: 9,
				zoomControl: false
				}).setView([45.337811, -75.763438], 10);
			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
			}).addTo(mymap2);
			var circle = L.circle([45.337811, -75.763438], {
				color: 'green',
				fillOpacity: 0.4,
				radius: 5000
			}).addTo(mymap2);
			
			$('#delivmodal').on('show.bs.modal', function() {
				setTimeout(() => {
				mymap2.invalidateSize();
				mymap2.panTo([45.337811, -75.763438], 10);
				},0);
			});
			
			$("#button-pay").click(function() {
				if (($("input[type='checkbox'][cat='sprout']:checked").length === 4) && ($("input[type='radio'][name='delivery']:checked").length === 1)) {
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