@section('main')
	<h2>{{ $categories->name }} - {{ $recipes->name }}</h2>
	{{ $recipes->recipe }}
@stop