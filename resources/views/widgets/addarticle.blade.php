<div class="widget-author widget-register-form boxed">
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <h2>Добавление статьи</h2>
            <p>Заполните все поля</p>
            <form class="form-horizontal" method="POST" enctype="application/x-www-form-urlencoded" action="{{ route('site.articles.addPost') }}">
                {{ csrf_field() }}

<?php				
debug($errors->get('name'));
?>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Автор</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputEmail3" name="author" placeholder="Ivan Ivanov">
							<ul class="ul_tml">
								@foreach ($errors->get('name') as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
							<input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Название статьи">
							<ul class="ul_tml">
								@foreach ($errors->get('name') as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
							<textarea class="form-control"  name="notes" placeholder="Текст статьи"></textarea>
							
							<ul class="ul_tml">
								@foreach ($errors->get('articletext') as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
							
						</div>
                </div>

               
 			
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Опубликовать</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="reset" class="btn btn-gray">Очистить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>