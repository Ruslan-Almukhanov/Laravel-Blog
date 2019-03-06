<div class="boxed  push-down-60">
    <div class="meta">
        <img class="wp-post-image" src="{{ $post->image }}" alt="Blog image" width="1138" height="493">
        <div class="row">
            <div class="col-xs-12  col-sm-10  col-sm-offset-1  col-md-8  col-md-offset-2">
                <div class="meta__container--without-image">
                    <div class="row">
                        <div class="col-xs-12  col-sm-8">
                            <div class="meta__info">
                                <span class="meta__date"><span class="glyphicon glyphicon-calendar"></span>{{ $post->updated_at }}</span>
                            </div>
                        </div>
                        <div class="col-xs-12  col-sm-4">
                            <div class="comment-icon-counter-detail">
                                <span class="glyphicon glyphicon-comment comment-icon"></span>
                                <span class="comment-counter">{{ $commentCount }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1  col-md-8  col-md-offset-2  push-down-60">

            <div class="post-content">
                <h1>
                    <a href="#">{{ $post->title }}</a>
                </h1>
                <h3>{{ $post->excerpt }}</h3>
                <p>
                    {{ $post->content }}
                </p>
            </div>
            <div class="row">
                <div class="col-xs-12  col-sm-6">
                    <div class="post-comments">
                        <a class="btn  btn-primary" href="single-post-without-image.html">Комментарии ({{ $commentCount }})</a>
                    </div>
                </div>
                <div class="col-xs-12  col-sm-6">

                    <div class="social-icons">
                        <a href="#" class="social-icons__container"> <span class="zocial-facebook"></span> </a>
                        <a href="#" class="social-icons__container"> <span class="zocial-twitter"></span> </a>
                        <a href="#" class="social-icons__container"> <span class="zocial-email"></span> </a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="tags">
                        <h6>Тэги</h6>
                        <hr>
                        @foreach($tags as $tag)
                        <a href="#" class="tags__link">{{ $tag->name }}</a>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="comments">
                        <h6>Комментарии</h6>
                        <hr>
                        @foreach($comments as $comment)
                        <div class="comment clearfix">
                            <div class="comment-avatar pull-left">
                                <img src="{{ asset('images/dummy/about-5.jpg') }}" alt="User Avatar" class="img-circle comment-avatar-image">
                            </div>
                            <div class="comment-body clearfix">
                                <div class="comment-header">
                                    <strong class="primary-font">{{ $comment->user->profile->name }}</strong>
                                    <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;{{ $comment->updated_at }}
                                    </small>
                                </div>
                                <p class="comment-text">
                                    {{ $comment->body }}
                                </p>
                            </div>
                        </div>
                            @endforeach
                    </div>
                    {!! Form::open() !!}
                    <div class="form-group">
                        {!! Form::label('body', 'Напишите комментарий') !!}
                        @if ($errors->has('body'))
                            <div class="error">{{ $errors->first('body') }}</div>
                        @endif
                        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Оставить комментарий', ['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

</div>