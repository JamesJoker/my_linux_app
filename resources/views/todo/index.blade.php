{{--{{ $todos }}--}}

@foreach($todos as $todo)
	<p>
		{{ $todo->id.'.'.$todo->name }}
		<form action="/todo/{{ $todo->id }}" method="POST">
			{{ csrf_field() }}
			@method('DELETE')
			<input type="hidden" name="todo" value="{{$todo}}">
			<a href="/todo/{{ $todo->id }}">Delete</a>
			<input type="submit" value="Delete">
		</form>
	</p>
@endforeach

<form action="/todo" method="POST">
	{{ csrf_field() }}
	<input type="text" name="name" placeholder="input area">
	<input type="submit" name="button" value="submit test">
</form>