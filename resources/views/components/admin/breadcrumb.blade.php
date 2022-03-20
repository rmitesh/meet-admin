@if (!empty($breadcrumbs))
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>{{ $breadcrumbs['title'] }}</h1>
				</div>
				<div class="col-sm-6">
					@if (!empty($breadcrumbs['breadcrumb']))
						<ol class="breadcrumb float-sm-right">
							@foreach ($breadcrumbs['breadcrumb'] as $route => $breadcrumb)
								<li class="breadcrumb-item {{ $route !== '#' ?: 'active' }}">
									@if ($route != '#' && $route != '')
										<a href="{{ $route !== '#' ? route($route) : $route }}">{{ $breadcrumb }}</a>
									@else
										{{ $breadcrumb }}
									@endif
								</li>
							@endforeach
						</ol>
					@endif
				</div>
			</div>
		</div>
	</section>
@endif