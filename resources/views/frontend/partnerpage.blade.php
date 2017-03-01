@extends('layouts.frontend')

@section('content')
<div class="mother-grid" id="home">
		<div class="container">
			<div class="header clock wow bounceIn">
				
				<h1><img src="{{ URL::to('src/frontend/images/fp2020-logo.png') }}" width="80px">&nbsp;&nbsp;<a href="index.html">INDONESIA FAMILY PLANNING 2020</a></h1>
				<div class="nav-top">
					<span class="menu"><img src="{{ URL::to('src/frontend/images/menu-icon.png') }}" alt=""></span>
					<ul class="navgation">
						<li><a class="active" href="{{ route('frontend.index') }}" class="scroll">BACK TO HOME</a></li>
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
	
	<div class="about" id="strategy">
	<div class="container">
		<div class="tabs-box clock wow bounceIn">
					<center><h1>Indonesia Family Planning 2020 Partner</h1></center>
					<br><br>
					
					@if(count($partners) == 0)
						<center>No Partner</center>
					@else
						@foreach($partners as $partner)
							<div class="row">
								<div class="col-md-3">
									<img src="{{ URL::to("partner/$partner->logo") }}" width="200px">
								</div>
								<div class="col-md-9">
									<table>
										<tr>
											<td><h2>{{ $partner->name }}</h2></td>
										</tr>
										<tr>
											<td>{{ $partner->website }}</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td colspan="3">{{ $partner->narrative }}</td>
										</tr>
									</table>
								</div>
							</div>

							<br><br>
						@endforeach
					@endif
			
		</div>
	</div>
	</div>

	</div>
				<div class="contact" id="contact">
					<div class="container">
						<div class="contact-1 clock wow bounceIn">
							<div class="col-md-3 contact-top1">
								<h3>Connect with us</h3>
			                    <div class="contact-grid">
			                        <a href="{{ URL::to('http://www.bkkbn.go.id/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/facebook.png') }}" alt="" height="100px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
			                        <a href="{{ URL::to('http://www.bkkbn.go.id/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/twitter.png') }}" alt="" height="100px"></a>
			                        <div class="clearfix"></div>
			                    </div>
			 				</div>
							<div class="col-md-9 contact-top1">
								<h3>Core Partners</h3>
			                    <div class="contact-grid">
			                        <a href="{{ URL::to('http://www.bkkbn.go.id/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/bkkbn-small.png') }}" alt=""></a>&nbsp;&nbsp;
			                     	
			                     	
			                        <a href="{{ URL::to('http://indonesia.unfpa.org/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/unfpa-small.png') }}" alt=""></a>&nbsp;&nbsp;
			                        <a href="{{ URL::to('https://www.usaid.gov/') }}" target="_blank"><img src="{{ URL::to('src/frontend/images/usaid-small.png') }}" alt=""></a>&nbsp;&nbsp;
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
	

@endsection

@section('script')
	<script type="text/javascript">
		var token = "{{ Session::token() }}";
	</script>

@endsection