@if ($breadcrumbs)
	<ol class="breadcrumb">
		@foreach ($breadcrumbs as $breadcrumb)
			@if ($breadcrumb->url && ($breadcrumbs->last() != $breadcrumb))
				<li><a href="{{{ url($breadcrumb->url) }}}">{{{ $breadcrumb->title }}}</a></li>
			@else
				<li class="active">{{{ $breadcrumb->title }}}</li>
			@endif
		@endforeach
	</ol>
@endif
