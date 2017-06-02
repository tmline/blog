@forelse ($posts as $post)
    @include('parts.post')
@empty
    <p>Нет новостей для отображения</p>
@endforelse
