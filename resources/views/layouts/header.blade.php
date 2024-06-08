<!-- The nav is for the navbar head -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="">WD2023</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link {{request()->is('/') ? 'active' : '' }}" aria-current="page" 
						href="{{route ('main') }}">Home</a>
					</li>

					<!-- THIS IS THE REGISTER MODAL -->
					<!-- <li class="nav-item">
						<a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#exampleModal">Registration</a>
					</li> -->

                    <li class="nav-item">
						<a class="nav-link {{request()->is('submission') ? 'active' : '' }}" 
						href="{{route ('submission') }}">Submission</a>
					</li>

					<li class="nav-item">
						<a class="nav-link {{request()->is('details') ? 'active' : '' }}" 
						href="{{route ('details') }}">Details</a>
					</li>

@guest
				@if (Route::has('login'))
					<li class="nav-item">
						<a class="nav-link {{request()->is('login') ? 'active' : '' }}" 
						href="{{route ('login') }}">{{__('Login')}} </a>
					</li>
				@endif

				@if (Route::has('register'))
					<li class="nav-item">
						<a class="nav-link {{request()->is('register') ? 'active' : '' }}" 
						href="{{route ('register') }}">{{__('Register')}}</a>
					</li>
				@endif

			@else
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
					data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="fase" v-pre >
						{{Auth::user()->Name}}
					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{route ('logout') }}"
						onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							{{__('logout')}}
						</a>

						<form id="logout-form" action="{{route ('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</div>
				</li>
@endguest


				</ul>
			</div>
		</div>
	</nav>