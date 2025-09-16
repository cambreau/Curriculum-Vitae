@extends('master')
@section('title', 'Contact')

@section('content')
	<!--contact start -->
        <section id="contact" class="contact">
			<div class="section-heading text-center">
				<h2>Me contacter</h2>
			</div>
			<div class="container">
				<div class="contact-content">
					<div class="row">
						<div class="col-md-offset-1 col-md-5 col-sm-6">
							<div class="single-contact-box">
								@isset($data)
								<p class="form-group"><strong>Nom: </strong>{{ $data->name}}</p>
								<p class="form-group"><strong>Email: </strong>{{ $data->email}}</p>
								<p class="form-group"><strong>Sujet: </strong>{{ $data->subject}}</p>
								<p class="form-group"><strong>Message: </strong>{{ $data->message}}</p> 
								@else
								<div class="contact-form">
									<form method="post" action="/contact">
									@csrf
										<div class="row">
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">
												  <label for="name" hidden>Name</label>
												  <input type="text" class="form-control" id="name" placeholder="Nom*" name="name" required>
												</div><!--/.form-group-->
											</div><!--/.col-->
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">
													<label for="email" hidden>Email address</label>
													<input type="email" class="form-control" id="email" placeholder="Email*" name="email" required>
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label for="subject" hidden>Sujet</label>
													<input type="text" class="form-control" id="subject" placeholder="Sujet" name="subject" required>
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label for="message" hidden>Message</label>
													<textarea class="form-control" name="message" rows="8" id="comment" placeholder="Message"></textarea>
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="single-contact-btn">
													<button class="contact-btn" type="submit">Soumettre</button>
												</div><!--/.single-single-contact-btn-->
											</div><!--/.col-->
										</div><!--/.row-->
									</form><!--/form-->
								</div><!--/.contact-form-->
								@endisset	
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
						<div class="col-md-offset-1 col-md-5 col-sm-6">
							<div class="single-contact-box">
								<div class="contact-adress">
									<div class="contact-add-head">
										<h3>Camille Breau</h3>
										<p>Développeuse full-stack</p>
									</div>
									<div class="contact-add-info">
										<div class="single-contact-add-info">
											<h3>Téléphone</h3>
											<p>514-652-6116</p>
										</div>
										<div class="single-contact-add-info">
											<h3>email</h3>
											<p>breau.camille76@gmail.com</p>
										</div>
									</div>
								</div><!--/.contact-adress-->
								<div class="hm-foot-icon">
									<ul>
										<li><a href="https://github.com/cambreau"><i class="fa fa-github"> cambreau</i></a></li>
										<li><a href="https://ca.linkedin.com/in/camille-breau-38b12914a"><i class="fa fa-linkedin"> Camille Breau</i></a></li>
									</ul><!--/ul-->
								</div><!--/.hm-foot-icon-->
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.contact-content-->
			</div><!--/.container-->
		</section><!--/.contact-->
	<!--contact end -->
@endsection('content')