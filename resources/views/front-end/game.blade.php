@extends('front-end.core')

@section('game')
    @if(auth()->check())
        <div class="container">
            {!! Form::open(
                array(
                    'route' => 'app.upload.image',
                    'class' => 'form',
                    'novalidate' => 'novalidate',
                    'files' => true))
           !!}
            <div class="form-group">
                {!! Form::label('Image') !!}
                {!! Form::file('image', null) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Upload image!') !!}
            </div>
            {!! Form::close() !!}
        </div>
    @else
        <a href="http://pizza_maker/login" style="border: 1px solid #333; padding: 10px;">Log in</a>
        <a href="http://pizza_maker/register" style="border: 1px solid #333; padding: 10px;">Register</a>

    @endif


@endsection