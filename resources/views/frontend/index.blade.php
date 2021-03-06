@extends('layouts.frontend')

@section('content')
	<div class="mother-grid" id="home">
		<div class="container">
			<div class="header clock wow bounceIn">
				
				<h1><img src="{{ URL::to('src/frontend/images/fp2020-logo.png') }}" width="80px">&nbsp;&nbsp;<a href="#">INDONESIA FAMILY PLANNING 2020</a></h1>
				<div class="nav-top">
					<span class="menu"><img src="{{ URL::to('src/frontend/images/menu-icon.png') }}" alt=""></span>
					<ul class="navgation">
						<li><a class="active" href="#home" class="scroll">HOME</a></li>
						<li><a href="#about" class="scroll">ABOUT US</a></li>
						<li><a href="#services" class="scroll">COMMITMENT</a></li>
						<li><a href="#event" class="scroll">EVENT</a></li>
						<li><a href="#project" class="scroll">DOCUMENT</a></li>
						<li><a href="#partner" class="scroll">PARTNER</a></li>
					</ul>

					 <!--start-top-nav-script-->
					 <script>
						$( "span.menu" ).click(function() {
							$( "ul.navgation" ).slideToggle( 300, function() {
							// Animation complete.
							});
						});
					</script>
					<!--End-top-nav-script-->

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
		
	<div class="banner">
		<div class="slider">
			<section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                     	@if(count($uevents) == 0)
					    	<li>
	    	                	<h2>No Event</h2>
	    	                	<h5>-</h5>
		                    </li>
	                        
						@else
							@foreach($uevents as $uevent)
								<li>
		    	                	<h2>{{ $uevent->title }}</h2>
		                        	<b><h5>{{ $uevent->date }} at {{ $uevent->place }}</h5></b>
		                        	<a href="{{ route('frontend.event') }}"><h5>Show All Event</h5></a>
				  	    		</li>
							@endforeach
						@endif
					</ul>
		        </div>
      		</section>
  
  		 <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
		  <!--FlexSlider-->
		  <script defer src="src/frontend/js/jquery.flexslider.js"></script>
		  <script type="text/javascript">
		    $(function(){
		      SyntaxHighlighter.all();
		    });
		    $(window).load(function(){
		      $('.flexslider').flexslider({
		        animation: "slide",
		        start: function(slider){
		          $('body').removeClass('loading');
		        }
		      });
		    });
		  </script>
			
		</div>
	</div>

	
	<div class="about" id="about">
		<div class="container">
			<div class="about1 clock wow bounceIn">
				<center><h1>About Us</h1></center>
				<br>
				<div class="row">
					<div class="col-md-6 ">
	                    
						<h2 align="right">{{ $global->name }}</h2>
						<p align="right">{{ $globalshort }}
						<br><br>
						<a href="{{ route('frontend.about', ['about_id' => $global->id ]) }}" class="btn btn-info">More Info</a>
						</p>
	                </div>
	                <div class="col-md-6">
	                	<h2 align="left">{{ $indonesia->name }}</h2>
						<p align="left">{{ $indonesiashort }}</p>
	                    <br>
						<a href="{{ route('frontend.about', ['about_id' => $indonesia->id ]) }}" class="btn btn-info">More Info</a>      
	                </div>
	                <div class="clearfix"> </div>
	            </div>

	           	<br><br>
	           	<center><h1>Working Groups</h1></center>
	           	<br>
	            <div class="row">
					
	                <div class="col-md-12">
	                	<center>
						<a href="{{ route('frontend.group', ['group_id' => 4 ]) }}" class="btn btn-primary btn-lg" style="width: 280px">National Right-Based FP Strategy</a>
						
						<a href="{{ route('frontend.group', ['group_id' => 5 ]) }}" class="btn btn-primary btn-lg" style="width: 280px">Rights & Empowerment</a>
						
						<a href="{{ route('frontend.group', ['group_id' => 6 ]) }}" class="btn btn-primary btn-lg" style="width: 280px">Data</a>
						</center>   
	                </div>
	                 <br><br>
	                <div class="clearfix"> </div>
	            </div>

	            
			<br><br><br>
				<div class="row">
				    <div class="demo-gallery">
		            <ul id="lightgallery" class="list-unstyled row">
		                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="src/lightgallery/img/h1.jpg">
		                    <a href="">
		                        <img class="img-responsive" src="src/lightgallery/img/h1.jpg">
		                    </a>
		                </li>
		                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/2-375.jpg 375, img/2-480.jpg 480, img/2.jpg 800" data-src="src/lightgallery/img/h2.jpg">
		                    <a href="">
		                        <img class="img-responsive" src="src/lightgallery/img/h2.jpg">
		                    </a>
		                </li>
		                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/13-375.jpg 375, img/13-480.jpg 480, img/13.jpg 800" data-src="src/lightgallery/img/h3.jpg" >
		                    <a href="">
		                        <img class="img-responsive" src="src/lightgallery/img/h3.jpg">
		                    </a>
		                </li>
		                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/13-375.jpg 375, img/13-480.jpg 480, img/13.jpg 800" data-src="src/lightgallery/img/h4.jpg" >
		                    <a href="">
		                        <img class="img-responsive" src="src/lightgallery/img/h4.jpg">
		                    </a>
		                </li>
		            </ul>
       			</div>
			</div>

				<!--
				<div class="col-md-6 ">
					<div class="about-top">
						<h2>Strategy</h2>
						<br>
						<h3>Document</h3>
						<a href="#">Download</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6">
					<div class="about-bottom">
						<a href="#"><p class="para1">Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet,lectus arcu pulvinar ricus lorem ipsum dolor</p></a> 
						<p class="para2">vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis , adipiscing varius, adipiscing in,lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus.</p> 
						<p class="para3">Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. integeralesuada.</p>     
					</div>                 
				</div>
				-->
				<div class="clearfix"> </div>
			</div>
		</div>  
	</div>

	<div class="content" id="services">
		<div class="container">
			<div class="col-md-12">
				<div class="content-grids">
                    <center><h1><b>Commitment: Indonesia</b></h1></center>
					<br><br>
				</div>
			</div>
			<div class="content-1 clock wow bounceIn">
				<div class="col-md-3">
					<div class="content-grids">
						<div class="content-right">
							<h3>Program & Service Delivery</h3>
							<p>{{ $programshort }}</p>
							<a href="{{ route('frontend.commitment') }}" class="btn btn-default">More</a>
						</div>
						<div class="clearfix"> </div>
					</div>                                                      
				</div>
				<div class="col-md-3">
					<div class="content-grids">
						<div class="content-right">
							<h3>Financial <br> &nbsp;</h3>
							<P>{{ $financialshort }}</P>
							<a href="{{ route('frontend.commitment') }}" class="btn btn-default">More</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="content-grids">
						<div class="content-right">
							<h3>Policy & Political <br> &nbsp;</h3>
							<P>{{ $policyshort }}</P>
							<a href="{{ route('frontend.commitment') }}" class="btn btn-default">More</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3">
						<div class="content-grids">
							<div class="content-right">
								<h3>Objective <br> &nbsp;</h3>
                                <P>{{ $objectiveshort }}</P>
                                <a href="{{ route('frontend.commitment') }}" class="btn btn-default">More</a>
                            </div>
						<div class="clearfix"> </div>
						</div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <div class="project" id="event">
        <div class="container">
            <div class="project-1 clock wow bounceIn">
                <h3>EVENT</h3>
                <br>
                <center><a href="{{ route('frontend.event') }}" class="btn btn-default"> Show All Event</a></center>

               
            </div>
        </div>
    </div>
    
	<!--Responsive-tabs-Starts-Here-->
	<div class="about" id="project">
		<div class="container">
			<div class="tabs-box clock wow bounceIn">
			<center><h1><b>Documents</b></h1></center>
			<br>
			<ul class="tabs-menu">
				<li><a href="#tab1"><img src="src/frontend/images/f.png" alt="">Strategy</a></li>
				<li><a href="#tab2"><img src="src/frontend/images/f.png" alt="">Workplans</a></li>
				<li><a href="#tab3"><img src="src/frontend/images/f.png" alt="">Reports</a></li>
				<li><a href="#tab4"><img src="src/frontend/images/f.png" alt="">PowerPoints</a></li>
				<li><a href="#tab5"><img src="src/frontend/images/f.png" alt="">TORs & MoM</a></li>
			</ul>
			<div class="clearfix"> </div>

			<div class="tab-grids">

				<div id="tab1" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($strategies) == 0)
					    	 <center><h1>No Document</h1></center>
					    	 <br>
						@else
							@foreach($strategies as $strategy)
								<blockquote>
									<h3>{{ $strategy->name }}</h3>
								    <p>{{ $strategy->description }}</p>
								    <footer>{{ $strategy->date }}</footer>
								    <br>
								    <a href="{{ asset("documents/$strategy->file") }}" class="btn btn-info" >Download</a>
								</blockquote>
							@endforeach
						@endif
					</div>
					<center><a href="{{ route('frontend.document', ['document_id' => 1]) }}" class="btn btn-primary"> Show All</a></center>
				</div>

				<div id="tab2" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($workplans) == 0)
					    	 <center><h1>No Document</h1></center>
					    	 <br>
						@else
							@foreach($workplans as $workplan)
								<blockquote>
									<h3>{{ $workplan->name }}</h3>
								    <p>{{ $workplan->description }}</p>
								    <footer>{{ $workplan->date }}</footer>
								    <br>
								    <a href="{{ asset("documents/$workplan->file") }}" class="btn btn-info" >Download</a>
								</blockquote>
							@endforeach
						@endif
					</div>
					
					<center><a href="{{ route('frontend.document', ['document_id' => 2]) }}" class="btn btn-primary"> Show All</a></center>
				</div>

				<div id="tab3" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($reports) == 0)
					    	 <center><h1>No Document</h1></center>
					    	 <br>
						@else
							@foreach($reports as $report)
								<blockquote>
									<h3>{{ $report->name }}</h3>
								    <p>{{ $report->description }}</p>
								    <footer>{{ $report->date }}</footer>
								    <br>
								    <a href="{{ asset("documents/$report->file") }}" class="btn btn-info" >Download</a>
								</blockquote>
							@endforeach
						@endif
					</div>
					
					<center><a href="{{ route('frontend.document', ['document_id' => 3]) }}" class="btn btn-primary"> Show All</a></center>
				</div>

				<div id="tab4" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($ppts) == 0)
					    	 <center><h1>No Document</h1></center>
					    	 <br>
						@else
							@foreach($ppts as $ppt)
								<blockquote>
									<h3>{{ $ppt->name }}</h3>
								    <p>{{ $ppt->description }}</p>
								    <footer>{{ $ppt->date }}</footer>
								    <br>
								    <a href="{{ asset("documents/$ppt->file") }}" class="btn btn-info" >Download</a>
								</blockquote>
							@endforeach
						@endif
					</div>
					
					<center><a href="{{ route('frontend.document', ['document_id' => 4]) }}" class="btn btn-primary"> Show All</a></center>
				</div>

				<div id="tab5" class="tab-grid">
					<div class="col-md-12 line1">
						@if(count($tors) == 0)
					    	 <center><h1>No Document</h1></center>
					    	 <br>
						@else
							@foreach($tors as $tor)
								<blockquote>
									<h3>{{ $tor->name }}</h3>
								    <p>{{ $tor->description }}</p>
								    <footer>{{ $tor->date }}</footer>
								    <br>
								    <a href="{{ asset("documents/$tor->file") }}" class="btn btn-info" >Download</a>
								</blockquote>
							@endforeach
						@endif
					</div>
						
					<center><a href="{{ route('frontend.document', ['document_id' => 5]) }}" class="btn btn-primary"> Show All</a></center>
				</div>


			</div>
			</div>
		</div>
		<!--Script-->
		<script src="{{ URL::to('src/frontend/js/jquery-1.11.0.min.js') }}"></script>
		<script src="{{ URL::to('src/frontend/js/myscript.js') }}"> </script>
`		<!--Script-->
	</div>
<!--Responsive-tabs-ends-Here-->

<!--Responsive-tabs-Starts-Here-->
	<div class="project" id="partner">
		<div class="container">
            <div class="project-1 clock wow bounceIn">
                <h3>Indonesia FP2020 Partners</h3>
                <br>
                <center><a href="{{ route('frontend.partner')}}" class="btn btn-default"> Show</a></center>
            </div>
        </div>
	</div>
	<!--Responsive-tabs-ends-Here-->

    <div class="contact" id="contact">
		<div class="container">
			<div class="contact-1 clock wow bounceIn">
				<div class="col-md-3 contact-top1">
					<h3>Connect with us</h3>
                    <div class="contact-grid">
                        <a href="#" target="_blank"><img src="{{ URL::to('src/frontend/images/facebook.png') }}" alt="" height="70px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" target="_blank"><img src="{{ URL::to('src/frontend/images/twitter.png') }}" alt="" height="70px"></a>
                        <div class="clearfix"></div>
                    </div>
 				</div>
				<div class="col-md-9 contact-top1">
					<h3>Focal Points</h3>
                    <div class="contact-grid">
                        <a href="{{ URL::to('http://www.bkkbn.go.id/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/bkkbn-small.png') }}" alt="" ></a>&nbsp;&nbsp;

                        <a href="{{ URL::to('http://indonesia.unfpa.org/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/unfpa-small.png') }}" alt=""></a>&nbsp;&nbsp;
                        <a href="{{ URL::to('https://www.usaid.gov/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/usaid-small.png') }}" alt="" height="70"></a>&nbsp;&nbsp;
                        <div class="clearfix"></div>
                    </div>
 				</div>
                		    
                <div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<div class="footer">
        <div class="container">
            <div class="footer-text">
				<p> &copy 2014 Template by <a href="http://w3layouts.com/">w3layouts</a></p>
			</div>
        </div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
     </div>

	<!-- Modal 
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Modal Header</h4>
	      </div>
	      <div class="modal-body">
	        <p>Some text in the modal.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
	-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
        </script>
        <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="src/lightgallery/js/lightgallery.js"></script>
        <script src="src/lightgallery/js/lg-fullscreen.js"></script>
        <script src="src/lightgallery/js/lg-thumbnail.js"></script>
        <script src="src/lightgallery/js/lg-video.js"></script>
        <script src="src/lightgallery/js/lg-autoplay.js"></script>
        <script src="src/lightgallery/js/lg-zoom.js"></script>
        <script src="src/lightgallery/js/lg-hash.js"></script>
        <script src="src/lightgallery/js/lg-pager.js"></script>
        <script src="src/lightgallery/js/jquery.mousewheel.min.js"></script>
	

@endsection

@section('script')



	<script type="text/javascript">
		var token = "{{ Session::token() }}";
	</script>

@endsection