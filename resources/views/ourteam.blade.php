

@extends('layout')
 
@section('title', 'Ourteam')
 
@section('content')

<style>
    
/*------------------------------------*\
	MEET THE TEAM
\*------------------------------------*/

.team {
	width: 100%;
	padding-top: 50px;
	padding-bottom: calc(60px - 30px);
	text-align: center;
	color: $cod-gray;
	background-color: $gallery;
}

.team__subheading,
.team__name,
.team__position {
	display: block;
}

.team__subheading {
	margin-top: 10px;
	font-size: 18px;
	line-height: 1.2;
}

.team__person-group { margin-top: 50px; }

.team__person { margin-bottom: 30px; }

.team__image {
	display: inline-block;
	width: 100%;
	max-width: 216px;
}

.team__name {
	margin-top: 25px;
	font-size: 30px;
	font-weight: 800;
	text-transform: uppercase;
}

.team__position {
	margin-top: 15px;
	font-size: 18px;
	text-transform: uppercase;
}

</style>


		<!-- Meet the Team -->
		<section class="team" id="team">
			<div class="container-fluid wrapper">
				<h2 class="team__heading" data-scroll-reveal>Meet the Team</h2>
				<span class="team__subheading" data-scroll-reveal>THE ONE’s greatest asset is its people. Above all, the secret lies in banking on a motivated and flexible work team, able to adapt to and promote change. Professionals who come up with ideas in order to bring THE ONE closer to the largest possible number of women.</span>
				<div class="team__person-group">
					<div class="row justify-content-around">
						<div class="col-12 col-sm-6 col-md-4">
							<div class="team__person" data-scroll-reveal>	
								<img class="team__image" src="http://www.jamesarc.com/work/wheelz/assets/img/team/team-1.png">
								<span class="team__name">Ian</span>
								<span class="team__position">Founder, CEO</span>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4">
							<div class="team__person" data-scroll-reveal>	
								<img class="team__image" src="http://www.jamesarc.com/work/wheelz/assets/img/team/team-2.png">
								<span class="team__name">Sarah</span>
								<span class="team__position">Designer</span>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4">
							<div class="team__person" data-scroll-reveal>	
								<img class="team__image" src="http://www.jamesarc.com/work/wheelz/assets/img/team/team-3.png">
								<span class="team__name">Juan</span>
								<span class="team__position">Office Wizard</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Meet the Team -->


@endsection