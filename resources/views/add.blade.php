@extends('base')

	@section('content')
		 <br>
						<form  method="post" id="application">
							
							<br>
							<br>
							<input type="text" name="fio" placeholder="Укажите Ф. И. О." required id="applicationName">
							
							<br>
							<br>
							
							<input type="text" name="phone" placeholder="Укажите номер телефона" required id="applicationEmail">
							
							<br>
							<br>
							
							<input type="text" name="email" placeholder="Укажите E-mail" required id="applicationPhone">
							
							<br>
							<br>
							<br>
							
							<input type="submit" value="Отправить" class="applicationButton">

							<div class="g-recaptcha" data-sitekey="6LcD1R8UAAAAACbMuPSXImR6hMXtQnjC1zkPjt3m"></div>
						</form>    

	@endsection
	
	
	@section('header')
		<span>Это новый хедер</span>
	@endsection
