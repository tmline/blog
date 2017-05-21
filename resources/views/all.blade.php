@extends('base')

	@section('content')
		{{ $key1 or '' }}
		 <br>
		{{ $key2 or '' }}
		 <br>
		 
		@if ($isAdmin)
			 Я админ
		@endif
		
		@unless ($isAdmin)
			 Я НЕ админ
		 
		@endunless 

	@endsection
	
	
	@section('header')
		<span>Это новый хедер</span>
	@endsection
