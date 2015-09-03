<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
         <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
         <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,800,400' rel='stylesheet' type='text/css'>
         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    </head>
    <body>

    {!! Form::open() !!}
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name')  !!}
    {!! Form::close() !!}
    </body>
</html>