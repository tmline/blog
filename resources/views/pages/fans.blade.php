@forelse ($posts as $post)
    @include('parts.one_post')
@empty
    <p>Нет постов для отображения</p>
@endforelse
