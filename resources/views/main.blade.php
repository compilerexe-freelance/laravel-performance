@extends ('layouts.master')

@section ('content')

<div class="row" style="margin-top: 20px;">
	<div class="form-group text-right">
		<a href="post/create"><button type="button" class="btn btn-primary">Create</button></a>
	</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Body</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($posts as $post)
				<tr>
					<td><a href="{{ url('post/'.$post->id) }}">{{ $post->title }}</a></td>
					<td>{{ $post->body }}</td>
					<td><a href="{{ url('post/'.$post->id.'/edit') }}">Edit</a></td>
					<td><a href="#" class="post-delete-{{ $post->id }}">Delete</a></td>
				</tr>

				<script type="text/javascript">
					$(document).ready(function () {
						$('.post-delete-{{ $post->id }}').on('click', function () {
							$.ajax(
							{ 
								url : '{{ url('post/'.$post->id) }}',
								type : 'POST',
								data : {
									'_method' : 'DELETE',
									'_token' : '{{ csrf_token() }}'
								},
								success: function (data, status) {
									location.reload();
									// console.log(status);
								}
							});
						});
					});
				</script>
			@endforeach
		</tbody>
	</table>
</div>



@endsection