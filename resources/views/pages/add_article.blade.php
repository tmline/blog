<div class="col-xs-8 col-xs-offset-2">
	@if (Auth::check())
		@include('widgets.addarticle')
	@else
		Добавлять статьи могут только зарегистрированные пользователи. 
		Пожалуйста, войдите в систему!
		
		{{ route('site.auth.login') }}


		<a href="{{ route('site.auth.login') }}">
			<div class="read-more">
				Авторизация <span class="glyphicon glyphicon-chevron-right"></span>
			</div>
		</a>

		<a href="{{ route('site.auth.register') }}">
			<div class="read-more">
				Регистрация <span class="glyphicon glyphicon-chevron-right"></span>
			</div>
		</a>

	@endif
</div>
