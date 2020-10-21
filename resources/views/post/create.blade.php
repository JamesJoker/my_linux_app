<!-- /resources/views/post/create.blade.php -->

<h1>Creat Post</h1>

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $errors)
				<li>{{ $errors }}</li>
			@endforeach
		</ul>
	</div>
@endif

<!-- Create Post Form -->