@forelse ($posts as $post)
    @include('parts.one_post')
@empty
    <p>Нет новостей для отображения</p>
@endforelse
