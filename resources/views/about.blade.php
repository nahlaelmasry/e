
@extends('layout')
 
@section('title', 'About')
 
@section('content')

<style>
    
/*------------------------------------*\
	ABOUT US
\*------------------------------------*/

.about {
	width: 100%;
	padding-top: 50px;
	padding-bottom: 60px;
	text-align: center;
	color: $mine-shaft;
	background-color: $white;
	transition: all 0.5s ease;
}

.about .container-fluid {
	padding-right: 15%;
	padding-left: 15%;
}

.about__heading {color: $cod-gray; }

.about__subheading {
	display: block;
	margin-top: 10px;
	font-size: 18px;
	line-height: 1.2;
}

.about__image { margin-top: 15px; }

.about__text {
	margin-top: 20px;
	font-size: 14px;
	line-height: 1.2;
	text-align: left;
}




</style>

<section class="about" id="about">
			<div class="container-fluid wrapper">
				<h2 class="about__heading" data-scroll-reveal>About Us</h2>
				<p class="about__text" data-scroll-reveal>
                                    THE ONE a Spanish multinational clothing company based in Barcelona.It designs, manufactures and markets clothing garments and accessories for women and men.With almost 6,000 employees, THE ONE has more than 850 stores in 81 countries located on five continents in 2008.
                                    We can be differentiated for having a highly-defined concept.
                                    The THE ONE concept is based on an alliance between a quality product, with an original design and a coherent and unified brand image. Dressing the modern, urban women for her daily needs is the formula we have analysed, adapted and applied in all the countries in which THE ONE is present: it has been and remains one of the keys to our commercial success and international prestige.
				</p>
			</div>
		</section><!-- About Us -->
                
@endsection