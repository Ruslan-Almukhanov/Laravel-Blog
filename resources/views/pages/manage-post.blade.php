{!! Form::open() !!}
<div class="form-group">

    {!! Form::label('title', 'Заголовок:') !!}
    @if ($errors->has('title'))
        <div class="error">{{ $errors->first('title') }}</div>
    @endif
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">

    {!! Form::label('preview', 'Анонс:') !!}
    @if ($errors->has('preview'))
        <div class="error">{{ $errors->first('preview') }}</div>
    @endif
    {!! Form::text('preview', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">

    {!! Form::label('content', 'Контент:') !!}
    @if ($errors->has('content'))
        <div class="error">{{ $errors->first('content') }}</div>
    @endif
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('image', 'Картинка:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tags', 'Теги:') !!}
    {!! Form::textarea('tags', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Создать пост', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

