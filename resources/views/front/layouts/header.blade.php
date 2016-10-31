<div class="header-v6 header-classic-white header-sticky">
	<!-- Navbar -->
	<div class="navbar mega-menu" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="menu-container">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- Navbar Brand -->
				<div class="navbar-brand" align="center">
					<a href="{{ URL::route('principal') }}">
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
						<li class="dropdown @if(Route::getCurrentRoute()->getName() == 'geotecnia' || Route::getCurrentRoute()->getName() == 'metalmecanica'|| Route::getCurrentRoute()->getName() == 'mineria'|| Route::getCurrentRoute()->getName() == 'hidrogeologia'|| Route::getCurrentRoute()->getName() == 'resistividad')active @endif">
							<a class="dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">
								Servicios
							</a>
							<ul class="dropdown-menu">
								<li @if(Route::getCurrentRoute()->getName() == 'geotecnia') class="active" @endif>
									<a href="{{ URL::route('geotecnia') }}">Geotécnia</a>
								</li>
								<li @if(Route::getCurrentRoute()->getName() == 'hidrogeologia') class="active" @endif>
									<a href="{{ URL::route('hidrogeologia') }}">Hidrogeología</a>
								</li>
								<li @if(Route::getCurrentRoute()->getName() == 'metalmecanica') class="active" @endif>
									<a href="{{ URL::route('metalmecanica') }}">Metalmecánica</a>
								</li>
								<li @if(Route::getCurrentRoute()->getName() == 'mineria') class="active" @endif>
									<a href="{{ URL::route('mineria') }}">Minería</a>
								</li>
								<li @if(Route::getCurrentRoute()->getName() == 'resistividad') class="active" @endif>
									<a href="{{ URL::route('resistividad') }}">Resistividad</a>
								</li>
							</ul>
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