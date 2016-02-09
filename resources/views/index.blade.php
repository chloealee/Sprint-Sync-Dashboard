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
          @font-face {
              font-family: 'Covered By Your Grace';
              src: url('fonts/CoveredByYourGrace.ttf') format('truetype');
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
	   					<div class="col-md-1 col-md-offset-3"><img src={{asset('images/marah.png')}}></div>
	   					<div class="col-md-1"><img src={{asset('images/aaron.png')}}></div>
						<div class="col-md-1"><img src={{asset('images/chloe.png')}}></div>
				        <div class="col-md-1"><img src={{asset('images/dave.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/luke.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/uy.png')}}></div>
				      	<br>
				    </div>			      
			      	
			      	<div class="list">
				        <h3><span style="font-family: 'Covered By Your Grace'; font-size: 75px; color: #5F2B63;">Let's Do This</span> work this week:</h3>
				        <ul>
				        	<li>Thing 1</li>
				        	<li>Thing 2</li>
				        	<li>Thing 3</li>
				        </ul>
				    </div>

			      <!-- <div class="carousel-caption">
			          <h3>Let's Do This</h3>
			      </div> -->
			    </div>
			    <div class="item">
			    	<div class="team">
			  			<div class="col-md-1 col-md-offset-4"><img src={{asset('images/freddie.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/marah.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/morgan.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/uy.png')}}></div>
				      	<br>
				    </div>
			      	<div class="list">
				        <h3><span style="font-family: 'Covered By Your Grace'; font-size: 75px; color: #5F2B63;">SMS</span> work this week:</h3>
				        <ul>
				        	<li>Thing 1</li>
				        	<li>Thing 2</li>
				        	<li>Thing 3</li>
				        </ul>
				    </div>
			    </div>
			    <div class="item">
			        <div class="team">
			  			<div class="col-md-1 col-md-offset-2"><img src={{asset('images/fantini.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/andrea.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/chloe.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/diego.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/joe.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/luke.png')}}></div>
					    <div class="col-md-1"><img src={{asset('images/nami.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/shae.png')}}></div>
				      	<br>
				    </div>
			      	<div class="list">
				        <h3><span style="font-family: 'Covered By Your Grace'; font-size: 75px; color: #5F2B63;">Phoenix</span> work this week:</h3>
				        <ul>
				        	<li>Thing 1</li>
				        	<li>Thing 2</li>
				        	<li>Thing 3</li>
				        </ul>
				    </div>
			    </div>
			   	<div class="item">
			        <div class="team">
			  			<div class="col-md-1 col-md-offset-4"><img src={{asset('images/sena.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/matt.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/morgan.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/sergii.png')}}></div>
				      	<br>
				    </div>
			      	<div class="list">
				        <h3><span style="font-family: 'Covered By Your Grace'; font-size: 75px; color: #5F2B63;">Platform/Ops</span> work this week:</h3>
				        <ul>
				        	<li>Thing 1</li>
				        	<li>Thing 2</li>
				        	<li>Thing 3</li>
				        </ul>
				    </div>
			    </div>
			   	<div class="item">
			        <div class="team">
			  			<div class="col-md-1 col-md-offset-4"><img src={{asset('images/dee.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/matt.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/marah.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/sergii.png')}}></div>
				      	<br>
				    </div>
			      	<div class="list">
				        <h3><span style="font-family: 'Covered By Your Grace'; font-size: 75px; color: #5F2B63;">Message Broker</span> work this week:</h3>
				        <ul>
				        	<li>Thing 1</li>
				        	<li>Thing 2</li>
				        	<li>Thing 3</li>
				        </ul>
				    </div>
			    </div>
			    <div class="item">
			        <div class="team" id="three">
			  			<div class="col-md-1 col-md-offset-4" id="odd"><img src={{asset('images/uy.png')}}></div>
				      	<div class="col-md-1" id="odd"><img src={{asset('images/freddie.png')}}></div>
				      	<div class="col-md-1" id="odd"><img src={{asset('images/jasmine.png')}}></div>
				      	<br>
				    </div>
			      	<div class="list">
				        <h3><span style="font-family: 'Covered By Your Grace'; font-size: 75px; color: #5F2B63;">DSGD</span> work this week:</h3>
				        <ul>
				        	<li>Thing 1</li>
				        	<li>Thing 2</li>
				        	<li>Thing 3</li>
				        </ul>
				    </div>
			    </div>
			    <div class="item">
			        <div class="team">
			  			<div class="col-md-1 col-md-offset-5"><img src={{asset('images/andrea.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/katie.png')}}></div>
				      	<br>
				    </div>
			      	<div class="list">
				        <h3><span style="font-family: 'Covered By Your Grace'; font-size: 75px; color: #5F2B63;">Longshot</span> work this week:</h3>
				        <ul>
				        	<li>Thing 1</li>
				        	<li>Thing 2</li>
				        	<li>Thing 3</li>
				        </ul>
				    </div>
			    </div>
			   	<div class="item">
			        <div class="team">
			  			<div class="col-md-1 col-md-offset-5"><img src={{asset('images/andrea.png')}}></div>
				      	<div class="col-md-1"><img src={{asset('images/dave.png')}}></div>
				      	<br>
				    </div>
			      	<div class="list">
				        <h3><span style="font-family: 'Covered By Your Grace'; font-size: 75px; color: #5F2B63;">Voting App</span> work this week:</h3>
				        <ul>
				        	<li>Thing 1</li>
				        	<li>Thing 2</li>
				        	<li>Thing 3</li>
				        </ul>
				    </div>
			    </div>
			    <div class="item">
			        <div class="team" id="three">
			  			<div class="col-md-1 col-md-offset-4" id="odd"><img src={{asset('images/nami.png')}}></div>
				      	<div class="col-md-1" id="odd"><img src={{asset('images/dave.png')}}></div>
				      	<div class="col-md-1" id="odd"><img src={{asset('images/sena.png')}}></div>
				      	<br>
				    </div>
			      	<div class="list">
				        <h3><span style="font-family: 'Covered By Your Grace'; font-size: 75px; color: #5F2B63;">Quasar</span> work this week:</h3>
				        <ul>
				        	<li>Thing 1</li>
				        	<li>Thing 2</li>
				        	<li>Thing 3</li>
				        </ul>
				    </div>
			    </div>
			    <div class="item">
			        <div class="team" id="one">
			  			<div class="col-md-1 col-md-offset-5"><img src={{asset('images/dave.png')}}></div>
				      	<br>
				    </div>
			      	<div class="list">
				        <h3><span style="font-family: 'Covered By Your Grace'; font-size: 75px; color: #5F2B63;">Northstar</span> work this week:</h3>
				        <ul>
				        	<li>Thing 1</li>
				        	<li>Thing 2</li>
				        	<li>Thing 3</li>
				        </ul>
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