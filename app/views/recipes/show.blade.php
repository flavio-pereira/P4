@section('main')
	<h2>{{ $category->name }} - {{ $recipe->name }}</h2>
	{{ $recipe->recipe }}
	<p>
		{{ link_to_route('categories.index', 'Back to Categories') }} |
		{{ link_to_route('categories.show', 'Back to Recipes', $category->name) }}
	</p>
@stop