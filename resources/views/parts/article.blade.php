<div class="boxed sticky push-down-45">

    <div class="sticky__box">
        <span class="sticky__circle"></span>
        <span class="sticky__circle"></span>
        <span class="sticky__circle"></span>
        <span class="sticky__circle"></span>
    </div>
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <div class="post-content--front-page">
                <h2 class="front-page-title">
                    <a href="{{ route('site.posts.post', ['id' => $post->id]) }}">{{ $post->name }}</a>
                </h2>
                @if ($post->author)
                    <h3>{{ $post->author }}</h3>
                @endif
                @if ($post->notes)
                    <p>
                        {!! $post->notes !!}
                    </p>
                @endif
            </div>
            <a href="{{ route('site.articles.article', ['id' => $post->id]) }}">
                <div class="read-more">
                    Читать далее <span class="glyphicon glyphicon-chevron-right"></span>
                    <div class="comment-icon-counter">
                        <span class="glyphicon glyphicon-comment comment-icon"></span>
                        <span class="comment-counter">10</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>