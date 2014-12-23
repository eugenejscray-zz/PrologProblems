<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="foundation-5.5.0/css/foundation.css" />
  <script src="foundation-5.5.0/js/vendor/modernizr.js"></script>
  <style>
  	.centered{
  		text-align: center;

  	}
  	.wrapper{
  		border-radius: 10px;
  		padding: 10px;
  	}
  	.unsuccessful{
  		background-color: #FF5050;
  	}
  	.successful{
  		background-color: #99FF99;
  	}
  </style>
</head>
<body>
	<div class="row">
		<div class="large-12 columns">
			<div class="panel">
				<h1>Prolog Tests <a href="#" class="button round pull-right">Run the Suite</a></h1>
				<!-- Here we will want to implement a searcher that will search through our solutions. -->
				<!-- Search item -->
				<!-- js script that will get all of the titls of the tests and hide all of the tests that are not applicable. -->


			</div>
		</div>
	</div>

	<div class="row">

		<div class="large-3 columns ">
			<div class="panel">
				<a href="#"><img src="img/testFunny.png"/></a>
				<h5 class="centered"><a href="#">Eugene Scray's<br />Solutions</a></h5>
				<div class="section-container vertical-nav" data-section data-options="deep_linking: false; one_up: true">
					<section class="section">
						<h5 class="title"><a href="#">Problems 1-10</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#">Problems 11-20</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#">Problems 21-30</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#">Problems 31-40</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#">Problems 41-50</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#">Problems 51-60</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#">Problems 61-70</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#">Problems 71-80</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#">Problems 81-90</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#">Problems 91-100</a></h5>
					</section>

				</div>

			</div>
		</div>



		<div class="large-6 columns">

			<!-- We should loop this. -->

			<?php foreach($solutions as $solution){ ?>
				<div class="wrapper <?= $solution["success"] ? "successful" : "unsuccessful" ?>">
					<div class="row">
						<div class="large-10 columns">
						<!-- TODO decrease the amount of padding/space between all of the elements. -->
							<p><strong><?= $solution["title"] ?></i></strong></p>
							<p><?= $solution["description"] ?></p>
							<p><strong>Code:</strong><?= $solution["solution code"] ?></p>
							<p>This test took <?= round( $solution["time"] * 1000) ?> milliseconds to run</p>
							<p><strong>Message: </strong><?= $solution["message"] ?></p>
						</div>
					</div>
					<div class="row">

						<!-- Will be an ajax call to get the content and then will display this on the page. 
							Maybe we should construct the whole application to follow this pattern.
							This way we will only have to update one place when we want to make a change. -->


						<div class="medium-6 columns centered"><a href="#" class="button round expand">Run</a></div>
						<div class="medium-6 columns centered"><a href="#" class="button round info expand">Stop</a></div>
					</div>
				</div>
				<hr/>

			<? } ?>
			<!-- implement a lazy loader -->

		</div>



		<aside class="large-3 columns hide-for-small">
			<p><img src="http://placehold.it/300x440&text=[ad]"/></p>
			<p><img src="http://placehold.it/300x440&text=[ad]"/></p>
		</aside>

	</div>




	<footer class="row">
		<div class="large-12 columns">
			<hr/>
			<div class="row">
				<div class="large-5 columns">
					<p>© Copyright no one at all. Go to town.</p>
				</div>
				<div class="large-7 columns">
					<ul class="inline-list right">
						<li><a href="#">Section 1</a></li>
						<li><a href="#">Section 2</a></li>
						<li><a href="#">Section 3</a></li>
						<li><a href="#">Section 4</a></li>
						<li><a href="#">Section 5</a></li>
						<li><a href="#">Section 6</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<script src="foundation-5.5.0/js/vendor/jquery.js"></script>
    <script src="foundation-5.5.0/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

</body>
</html>       