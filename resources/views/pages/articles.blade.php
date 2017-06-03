@forelse ($posts as $post)
    @include('parts.post')
@empty
    <p>Нет статей для отображения</p>
@endforelse
