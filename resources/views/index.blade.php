<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>José Antonio Leite Advogados e Associados</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
       <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,800,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>
<div class="wrap">
    <header class="site-header">
                <div class="top-navigation-wrapper">
                        <div class="top-navigation-right">
                            <div class="top-navigation-right-text">
                                <div class="top-bar-right-text-inner"><i class="fa fa-envelope-o"></i> advocacia@joseantonioleite.com.br</div>
                                <div class="top-bar-right-text-inner"><i class="fa fa-phone"></i> +21 2510-3654</div>
                            </div>
                        </div>
                    <div class="logo">
                        <div class="top-logo">
                            <a href="#" class="header-logo">
                                <span class="linkMainCaption"></span>
                            </a>
                        </div>
                    </div>
                    <div class="wrapperBg">
                        <nav class="wrapperMenu">
                            <ul class="mainMenu">
                                <li class="mainMenuItem">
                                    <div class="Gamma_Link">
                                        <a href="#" class="TopLinkHome">
                                            <span class="linkMainCaption">O Escritório</span>
                                        </a>

                                    </div>
                                </li>
                                <li class="mainMenuItem">

                                    <a href="#" class="TopLinkHome">
                                        <span class="linkMainCaption">Serviços</span>
                                    </a>

                                </li>
                                <li class="mainMenuItem">

                                    <a href="#" class="TopLinkHome ">
                                        <span class="linkMainCaption">Advogados</span>
                                    </a>

                                </li>
                                <li class="mainMenuItem">

                                    <a href="#" class="TopLinkHome ">
                                        <span class="linkMainCaption">Planos</span>
                                    </a>

                                </li>
                                <li class="mainMenuItem">

                                    <a href="#" class="TopLinkHome ">
                                        <span class="linkMainCaption">Contato</span>
                                    </a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
    </header>
      <div class="content-wrapper">
            <div class="content-wrapper-img">
              <img src="../images/rio.jpg" alt="">
            </div>
          <div class="content-wrapper-form">
          <div class="gdlr-item-title-wrapper">
              <div class="gdlr-item-title-head">
                <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">
                  Don't hesitate to ask</h3>
                </div>
                <div class="gdlr-item-title-caption gdlr-skin-info">
                  Law is complicate matter. It can cause you a big problem <br>if you ignore it. Let us help you!
                </div>
              </div>
              <hr/>
              {!! Form::open() !!}
              <div class="form-group gdlr-skin-info">
                  {!! Form::label('name', 'Name:') !!}
                  {!! Form::text('name', null, ['class' => 'form-control'])  !!}
              </div>
              <div class="form-group gdlr-skin-info">
                  {!! Form::label('email', 'Email:') !!}
                  {!! Form::text('email', null, ['class' => 'form-control'])  !!}
              </div>
              <div class="form-group gdlr-skin-info">
                  {!! Form::label('mensagem', 'Mensagem:') !!}
                  {!! Form::textarea('mensagem', null, ['class' => 'form-control'])  !!}
              </div>
              <div class="form-group gdlr-skin-info">
                  {!! Form::submit('enviar', ['class' => 'btn btn-primary form-control']) !!}
              </div>
              {!! Form::close() !!}
          </div>

    </div>
</div>
</body>


</html>