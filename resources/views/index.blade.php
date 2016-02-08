<!DOCTYPE html>
<html>
    <head>
        <title>Sprint Sync Dashboard</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css">

        <style>
          @font-face {
              font-family: 'Proxima Nova';
              src: url('fonts/ProximaNova-Bold.otf') format('opentype');
          }
        </style>
    </head>

    <body>
    	<div class="header"><h1>Sprint Sync Dashboard</h1></div>

    	<div class="carousel">
	    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="60000">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <!-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> -->
			    <!-- <li data-target="#carousel-example-generic" data-slide-to="1"></li> -->
		<!-- 	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
			  	<li data-target="#carousel-example-generic" data-slide-to="7"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="9"></li> -->
			  </ol>
			 
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			    	<div class="team">
	   					<div id="qb"><img src={{asset('images/marah.png')}}></div>
	   					<div class="team_member"><img src={{asset('images/aaron.png')}}></div>
						<div class="team_member"><img src={{asset('images/chloe.png')}}></div>
				        <div class="team_member"><img src={{asset('images/dave.png')}}></div>
				      	<div class="team_member"><img src={{asset('images/uy.png')}}></div>
				      	<div class="team_member"><img src={{asset('images/luke.png')}}></div>
				    </div>			      
			      	
			      	<div class="list">
			      		<h3>Here's what the Let's Do This team is working on:</h3>
			      	</div>

			      <!-- <div class="carousel-caption">
			          <h3>Let's Do This</h3>
			      </div> -->
			    </div>
			    <div class="item">
			    	<div class="team2">
			  			<div class="col-md-4"><img src={{asset('images/freddie.png')}}></div>
				      	<div class="col-md-4"><img src={{asset('images/morgan.png')}}></div>
				      	<div class="col-md-4"><img src={{asset('images/uy.png')}}></div>
				      	<div class="col-md-4"><img src={{asset('images/marah.png')}}></div>
				      	<br>
				    </div>
			      	<div class="caption">
				        <h3>Here's what the SMS team is working on:</h3>
				    </div>
			    </div>
			    <div class="item">
			      <!-- <img src="http://placehold.it/1200x315" alt="..."> -->
			      <div class="carousel-caption">
			          <h3>Phoenix</h3>
			      </div>
			    </div>
			   	<div class="item">
			      <!-- <img src="http://placehold.it/1200x315" alt="..."> -->
			      <div class="carousel-caption">
			          <h3>Platform/Ops</h3>
			      </div>
			    </div>
			   	<div class="item">
			      <!-- <img src="http://placehold.it/1200x315" alt="..."> -->
			      <div class="carousel-caption">
			          <h3>Message Broker</h3>
			      </div>
			    </div>
			    <div class="item">
			      <!-- <img src="http://placehold.it/1200x315" alt="..."> -->
			      <div class="carousel-caption">
			          <h3>DSGD</h3>
			      </div>
			    </div>
			    <div class="item">
			      <!-- <img src="http://placehold.it/1200x315" alt="..."> -->
			      <div class="carousel-caption">
			          <h3>Longshot</h3>
			      </div>
			    </div>
			   	<div class="item">
			      <!-- <img src="http://placehold.it/1200x315" alt="..."> -->
			      <div class="carousel-caption">
			          <h3>Voting App</h3>
			      </div>
			    </div>
			    <div class="item">
			      <!-- <img src="http://placehold.it/1200x315" alt="..."> -->
			      <div class="carousel-caption">
			          <h3>Quasar</h3>
			      </div>
			    </div>
			    <div class="item">
			      <img src="http://placehold.it/1200x315" alt="...">
			      <div class="carousel-caption">
			          <h3>Northstar</h3>
			      </div>
			    </div>
			  </div>
			 
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div> <!-- Carousel -->
		</div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>