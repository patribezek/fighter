 <?php 	require_once('cabecera.php'); ?>
 


 <div class="container-fluid">
 	<div class="row">


 		<div class="col-md-4 col-xs-4" >
 			<img src="img/01.png" alt="fighter1">


 			<!-- Modal -->
 			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 				<div class="modal-dialog" role="document">
 					<div class="modal-content">
 						<div class="modal-header">
 							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><p aria-hidden="true">&times;</p></button>
 							<h4 class="modal-title" id="myModalLabel">Let's Bet!</h4>
 						</div>
 						<div class="modal-body">
 							Send to this account:
 							<form action=""><input type="text"></form>
 						</div>
 						<div class="modal-footer">
 							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 							<button type="button" class="btn btn-default">Send</button>
 						</div>
 					</div>
 				</div>
 			</div>
 			<!-- end modal -->



 			<div class="tickets">
 			<button type="button"  data-toggle="modal" data-target="#myModal">BET</button>
 				<p>Tickets: </p>
 				<p id="sum-tickets-1"> <? $numTickets ?> </p>
 			</div>
 		</div>

 		<div class="col-md-4 col-xs-4">


 			<h1>Fight bet: <? $numSatoshi ?> Satoshis </h1><a class="how-much" href="https://youmeandbtc.com/bitcoin-converter/convert-btc-mbtc-bits-satoshis-usd/" target="_blank">how much is this?</a>
 			<span>VS</span>
 			<h2> <? $counter ?> </h2>

 		</div>
 		<div class="col-md-4 col-xs-4">
 			<img src="img/04.png" alt="fighter2">
 			<button>BET</button>
 			<div class="tickets">
 				<p>Tickets: </p>
 				<p id="sum-tickets-2"> <? $numTickets ?> </p>
 			</div>
 		</div>

 	</div>
 </div>





