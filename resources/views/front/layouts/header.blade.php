<div class="header-v6 header-classic-white header-sticky">
	<!-- Navbar -->
	<div class="navbar mega-menu" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="menu-container">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- Navbar Brand -->
				<div class="navbar-brand">
					<a href="index.html">
						<img class="shrink-logo" src="{{ asset('assets/img/logo/macladas.svg') }}" alt="Logo">
					</a>
				</div>
				<!-- ENd Navbar Brand -->
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-responsive-collapse">
				<div class="menu-container">
					<ul class="nav navbar-nav">
						<li @if(Route::getCurrentRoute()->getName() == 'principal') class="active" @endif>
							<a href="{{ URL::route('principal') }}">
								Inicio
							</a>
						</li>
						<li @if(Route::getCurrentRoute()->getName() == 'about') class="active" @endif>
							<a href="{{ URL::route('about') }}">
								La empresa
							</a>
						</li>
						<li @if(Route::getCurrentRoute()->getName() == 'portfolio') class="active" @endif>
							<a href="{{ URL::route('portfolio') }}">
								Portafolio
							</a>
						</li>
						<li @if(Route::getCurrentRoute()->getName() == 'services') class="active" @endif>
							<a href="{{ URL::route('services') }}">
								Servicios
							</a>
						</li>
						<li @if(Route::getCurrentRoute()->getName() == 'clients') class="active" @endif>
							<a href="{{ URL::route('clients') }}">
								Clientes
							</a>
						</li>
						<li @if(Route::getCurrentRoute()->getName() == 'contacto') class="active" @endif>
							<a href="{{ URL::route('contacto') }}">
								Contáctanos
							</a>
						</li>
					</ul>
				</div>
			</div><!--/navbar-collapse-->
		</div>
	</div>
	<!-- End Navbar -->
</div>