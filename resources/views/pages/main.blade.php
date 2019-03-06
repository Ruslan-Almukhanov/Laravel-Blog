<div class="boxed  push-down-45">
    <div class="meta">
        <img class="wp-post-image" src="images/dummy-licensed/blog-image.jpg" alt="Blog image" width="748" height="324">
        <div class="row">
            <div class="col-xs-12  col-sm-10  col-sm-offset-1">
                <div class="meta__container--without-image">
                    <div class="row">
                        <div class="col-xs-12  col-sm-8">
                            <div class="meta__info">
                                <a href="#">Статьи</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="meta__comments">
                                <span class="meta__date"><span class="glyphicon glyphicon-calendar"></span> &nbsp; 10 мая 2015 г.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-xs-10  col-xs-offset-1">
            <div class="post-content--front-page">
                <img src="{{ $post->image }}" alt="картинка">
                <h2 class="front-page-title">
                    <a href="/post">{{ $post->title }}</a>
                </h2>
                <h3>{{ $post->preview }}</h3>
            </div>
            <a href="post/{{ $post->id }}/{{ $post->slug }}">
                <div class="read-more">
                    Читать далее <span class="glyphicon glyphicon-chevron-right"></span>
                    <div class="comment-icon-counter">
                        <span class="glyphicon glyphicon-comment comment-icon"></span>
                        <span class="comment-counter"></span>
                    </div>
                </div>
            </a>
            <div class="auhor-rights">
                <a href="/post/edit/{{ $post->id }}" class="edit-post">
                    Редактировать
                </a>
                <a href="/post/delete/{{ $post->id }}" class="delete-post">
                    Удалить
                </a>
            </div>
        </div>
            @endforeach
    </div>
</div>
