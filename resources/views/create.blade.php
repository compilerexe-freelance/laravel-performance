@extends ('layouts.master')

@section ('content')

<div class="row" style="margin-top: 20px;">
	
	<div class="col-md-offset-4 col-md-4">
		<form method="POST" action="{{ url('post') }}">

			{{ csrf_field() }}

			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control">
			</div>

			<div class="form-group">
				<label>Body</label>
				<textarea rows="10" name="body" class="form-control"></textarea>
			</div>

			<div class="form-group text-right">
				<button type="submit" class="btn btn-primary">Publish</button>
			</div>

		</form>
	</div>

</div>

@endsection