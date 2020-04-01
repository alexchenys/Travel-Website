<?php
	include 'top.html';
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	* {
		box-sizing: border-box;
	}

	/* Create two equal columns that floats next to each other */
	.column {
		float: left;
		width: 45%;
		padding: 10px;
		height: 300px; /* Should be removed. Only for demonstration */
	}

	/* Clear floats after the columns */
	.row:after {
		content: "";
		display: table;
		clear: both;
	}
</style>


<div class="row">
	<div class="column" style="margin-left: 5%">
		<!--<iframe width="500" height="300" src="https://www.youtube.com/embed/H_ZTMWaYq5w?rel=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
		<iframe width="500" height="300" src="https://www.youtube.com/embed/H_ZTMWaYq5w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<div class="column">
		<img src="examples/images/travel.jpg" height="300">
	</div>
</div>





<?php
	include 'body.html';
	include 'footer.html';
?>