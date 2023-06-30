<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

  <title>How to Grow Mushrooms | Agroage Canada</title>
  <meta name="description" content="Customizable and unique indoor home gardening kits, coming soon to Canada!">

</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/common/header.php'; ?>

<div class="cid-s48MCQYojq mylayout">
<div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(250, 250, 250);"></div>


<section style="background:transparent">
<div style="text-align:center">
	<h1 style="display:inline;font-weight:bold">How to Grow Mushrooms</h1>
	<p class="align-center">Mushrooms, the fruiting bodies produced by fungal mycelium, are an extremely sustainable food source. Select a variety from the dropdown list below.</p>
	<hr/>
	<select class="custom-select custom-select-lg mb-3 flex-width" style="font-weight:bold;border:0;text-align:center;background-color:rgba(255,255,255,0.75)">
	  <option value="barley">Oyster</option>
	  <option value="buckwheat">Shiitake</option>
	  <option value="radish">Lion's Mane</option>
	  <option value="pea">Portabella</option>
	</select>
</div>

<img hidden alt="Placeholder" style="border-radius:10px;margin:auto;max-width:25%" src="/shop/sprouting-kit/sprouting-kit.jpg">

<div class="flex-width">
<p style="font-weight:bold">Notes</p>
<p id="notes">The preferred way to juice barley grass is to use a specialized juicer. If you only have a blender, you should blend your barley grass with a bit of water, then strain out the pulp with a fine mesh strainer.</p>
<p style="font-weight:bold">Instructions</p>
<ol>
	<li>Fill plant pot with approximately 1/2 cup of cold water</li>
	<li>Carefully place cardboard pod in plant pot</li>
	<li>Inspect pod daily and if it begins to dry out, carefully remove pod, fill pot back up with 1/2 cup of cold water, and place pod back into pot</li>
	<li>Tiny microgreens will emerge from soil surface within a week</li>
	<li>Harvest <p id="xdays" style="display:inline">barley grass 6 to 10 days</p> after starting pod, or once desired size or taste is reached</li>
	<li>Microgreens can be stored in paper towel-lined container in refrigerator for one to two weeks</li>
</ol>
</div>

<script>
$('.custom-select').change(function() {
	switch ($('.custom-select').val()) {
		  case "barley": {
			var notes = "The preferred way to juice barley grass is to use a specialized juicer. If you only have a blender, you should blend your barley grass with a bit of water, then strain out the pulp with a fine mesh strainer.";
			var xdays = "barley grass 6 to 10 days";
			break;
		} case "buckwheat": {
			var notes = "Buckwheat microgreens have a flavour similar to lettuce and grow beautiful pink-coloured stems.";
			var xdays = "buckwheat microgreens 8 to 12 days";
			break;
		} case "radish": {
			var notes = "Triton radish microgreens grow with light purple-coloured stems and can be used to add a spicy or peppery hint to your food.";
			var xdays = "radish microgreens 10 to 12 days";
			break;
		} case "pea": {
			var notes = "Pea shoots can be partially regrown a few times, but will produce smaller and smaller yields.";
			var xdays = "pea shoots 10 to 14 days";
			break;
		}
	}
	$('#xdays').text(xdays);
	$('#notes').text(notes);
});
</script>

<style>
@media (min-width:992px) {
	.flex-width {
		width:50%;
		margin:auto;
	}
}
</style>
</section>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/common/footer.php'; ?>  

</body>
</html>