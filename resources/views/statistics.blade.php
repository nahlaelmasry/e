

@extends('layout')
 
@section('title', 'Cart')
 
@section('content')

<style>
            
/*------------------------------------*\
	SOME STATISTICS
\*------------------------------------*/

.stats {
	width: 100%;
	padding-top: 90px;
	padding-bottom: calc(100px - 20px);
	text-align: center;
	background: url("/img/FFF.jpeg") no-repeat center;
	background-size: cover;
	color: $cod-gray;
}

.stats .container-fluid {
	padding-right: 15%;
	padding-left: 15%;
}

.stats__subheading {
	display: block;
	margin-top: 10px;
	font-size: 18px;
	line-height: 1.2;
}

.stats__item-group { margin-top: 60px; }

.stats__item { margin-bottom: 20px; }

.stats__no {
	display: block;
	font-size: 72px;
}

.stats__text {
	display: block;
	margin-top: 20px;
	font-size: 24px;
	text-transform: uppercase;
}

</style>


		<!-- Some Statistics -->
		<section class="stats" id="stats">
			<div class="container-fluid wrapper">
				<h2 class="stats__heading" data-scroll-reveal>THE ONE Statistics</h2>
			
				<div class="stats__item-group">
					<div class="row justify-content-around">
						<div class="col-12 col-sm-5 col-md-3">
							<div class="stats__item" data-scroll-reveal>
								<span class="stats__no js-animate-counter" id="counter" data-count="100">100</span>
								<span class="stats__text">Items Sold every minute</span>
							</div>
						</div>
						<div class="col-12 col-sm-5 col-md-3">
							<div class="stats__item" data-scroll-reveal>
								<span class="stats__no js-animate-counter" data-count="2000">2000</span>
								<span class="stats__text">Year THE ONE Started</span>
							</div>
						</div>
						<div class="col-12 col-sm-5 col-md-3">
							<div class="stats__item" data-scroll-reveal>
								<span class="stats__no js-animate-counter" data-count="0">0</span>
								<span class="stats__text">Unsatisfied Customers</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Some Statistics -->
                
@endsection