@forelse ($posts as $post)
    @include('parts.one_breeze')
@empty
    <p>Нет новостей для отображения</p>
@endforelse
