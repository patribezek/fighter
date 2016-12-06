 <?php 	require_once('cabecera.php'); include('controller.php');

 ?>
 
 <div class="container-fluid">
 	<div class="row">

 		<!-- Modal -->
 		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 			<div class="modal-dialog" role="document">
 				<div class="modal-content">
 					<div class="modal-header">
 						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><p aria-hidden="true">&times;</p></button>
 						<h4 class="modal-title" id="myModalLabel">Buy a ticket</h4>
 					</div>
 					<div class="modal-body">
 						<p>Current Bet: <?php echo $satoshiNum; ?></p><br>
 						<!-- <p>Fighter: <?php echo $fighterName ?></p><br> -->
 						<p>Complete with your Xapo account:</p>
 						<form action="" method="GET">
 							<input type="email">
 							<input type="checkbox"><a href="about.php">Accept terms & conditions</a>
 						</form>
 					</div>
 					<div class="modal-footer">
 						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
 						<button type="button" class="btn btn-default">Bet!</button>
 					</div>
 				</div>
 			</div>
 		</div>
 		<!-- end modal -->

 		<!-- fighter 1 -->
 		<div class="col-md-4 col-xs-4" >
 			<img src="img/<?php echo $fighter1 ?>.png" alt="fighter1">
 			<div class="tickets">
 				<!-- <h2><?php echo $fighterName ?></h2> -->
 				<button type="button"  data-toggle="modal" data-target="#myModal">BET</button>
 				<p>Tickets: </p>
 				<p id="sum-tickets-1"> <?php echo $numTickets ?> </p>
 			</div>
 		</div>

 		<!-- center -->
 		<div class="col-md-4 col-xs-4" >
 			<h1>Fight bet: <?php echo $satoshiNum ?> Satoshis </h1><a class="how-much" href="https://youmeandbtc.com/bitcoin-converter/convert-btc-mbtc-bits-satoshis-usd/" target="_blank">how much is this?</a>
 			<span>VS</span>
 			<div id="timer"> </div>
 		</div>

 		<!-- fighter 2 -->
 		<div class="col-md-4 col-xs-4">
 			<img src="img/<?php echo $fighter2 ?>.png" alt="fighter2">
 			<!-- <h2><?php echo $fighterName ?></h2> -->
 			<button type="button"  data-toggle="modal" data-target="#myModal">BET</button>
 			<div class="tickets">
 				<p>Tickets: </p>
 				<p id="sum-tickets-2"> <?php echo $numTickets ?> </p>
 			</div>
 		</div>

 	</div>
 </div>



