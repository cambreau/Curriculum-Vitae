@extends('master')
@section('title', 'A propos')

@section('content')
        <!--about start -->
		<section id="about" class="about">
			<div class="section-heading text-center">
				<h2>Profil</h2>
			</div>
			<div class="container">
				<div class="about-content">
					<div class="row">
						<div class="col-sm-6">
							<div class="single-about-txt">
								<h3>
                                Développeuse Web front-end en reconversion, passionnée par la création d’outils intuitifs. 
								</h3>
								<p>
                                Curieuse et rigoureuse, j’aime résoudre des problèmes concrets et concevoir des solutions utiles.  Actuellement à la recherche d’un stage pour renforcer mes compétences techniques et débuter ma carrière dans le développement web. 
								</p>
								<div class="row">
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>Téléphone</h3>
											<p>(514) 652-6116</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>Courriel</h3>
											<p>breau.camille76@gmail.com </p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-offset-1 col-sm-5">
							<div class="single-about-img">
								<img src="images/about/profile_image.jpg" alt="profile_image">
								<div class="about-list-icon">
									<ul>
                                        <li>
											<a href="https://github.com/cambreau">
												<i  class="fa fa-github" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										<li>
											<a href="Camille Breau | LinkedIn ">
												<i  class="fa fa-linkedin" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										
									</ul><!-- / ul -->
								</div><!-- /.about-list-icon -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</section><!--/.about-->
		<!--about end -->
@endsection('content')