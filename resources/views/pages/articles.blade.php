@forelse ($posts as $post)
    @include('parts.article')
@empty
    <p>Нет статей для отображения</p>
@endforelse
