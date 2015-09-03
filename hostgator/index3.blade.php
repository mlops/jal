@extends('layout.master')
{{--@section('title', '/////#José Antonio Leite Advogados e Associados ')@stop --}}
@section('head-script')
<link rel="stylesheet" href="{!! asset('development/css/style3.css') !!}">
<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="{!! asset('/js/source/jquery.fancybox.css?v=2.1.5') !!}" type="text/css" media="screen" />
<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="{!! asset('/js/source/helpers/jquery.fancybox-buttons.css?v=1.0.5') !!}" type="text/css" media="screen" />
<link rel="stylesheet" href="{!! asset('/js/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7') !!}" type="text/css" media="screen" />
<script src={!! asset('/js/jquery.validate.js') !!}></script>

<script>
$().ready(function() {
    // validate the comment form when it is submitted
    //$("#frmContato").validate();

    // validate signup form on keyup and submit
    $("#frmContato").validate({
      rules: {
        name: "required",
        email: "required",
        comment: "required",
        name: {
          required: true,
          minlength: 2
        },
        comment: {
          required: true,
          minlength: 5
        },
        email: {
          required: true,
          email: true
        },
      messages: {
        name: "Please enter your firstname1",
        lastname: "Please enter your lastname",
        name: {
          required: "Please enter your firstname1",
          minlength: "Your username must consist of at least 2 characters"
        },
        comment: {
          required: "Please provide a password2",
          minlength: "Your password must be at least 5 characters long"
        },
        email: "Please enter a valid email address"
      }
    });
   });
  });
</script>
<style>

  .fancybox-lock {
    overflow-x: hidden !important;
    overflow-y: scroll !important;
    width: auto;
      }
      .fancybox-lock .fancybox-overlay {
      /*  overflow: auto;
          overflow-y: scroll;*/
          overflow: hidden !important;
      }
      /* This only works with JavaScript, 
      if it's not present, don't show loader */
      .no-js #loader { display: none;  }
      .js #loader { display: block; position: absolute; left: 100px; top: 0; }
      .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('/development/images/gif-load2.gif') center no-repeat #fff;
      }
      .alert {
        text-align: center;
        font-size: 20px;
        }
/*  #frmContato label {
    width: 250px;
  }

  #frmContato label.error {
    margin-left: 10px;
    width: auto;
    display: inline;
  }*/
</style>
    @parent
@stop

@section('content')
  
<div class="se-pre-con"></div>
<header id="site-header">
<a href="#" id="zero" class="bk-top"></a>
  <div class="wrap">
    <div class="call-phone">
      <div class="call-item">
      <h3>&nbsp;Contato Urgente&nbsp;!<span>&nbsp;&nbsp;&nbsp;21 2510-3654</span></h3>
      </div><!-- nested-item -->
    </div>
      <div class="logo">
          <a href="#" class="header-logo" alt="Jose Antonio Advogados Associados">
            <img src="/development/images/lg01.png" alt="Jose Antonio Advogados Associados" />
          </a>
      </div><!-- logo -->
    <div class="call-mail">
      <div class="call-item">
        <h3>&nbsp;advocacia@joseantonioleite.com.br</h3>
      </div><!-- nested-item -->
    </div><!-- nested-item -->
    </div><!-- wrap -->
</header><!-- intro -->
<nav id="nav">
  <div class="navbar">
    <ul>
      <li><a class="icon home" href="#empresa"><span>&nbsp;A Empresa</span></a></li>
      <li><a class="icon service" href="#servicos"><span>&nbsp;Serviços</span></a></li>
      <li><a class="icon lawyers" href="#lawyerlist"><span>&nbsp;Advogados</span></a></li>
      <li><a class="icon contact" href="#contato"><span>&nbsp;Contato</span></a></li>
    </ul>
  </div><!-- navbar -->
</nav><!-- nav -->

<div id="destaque" class="destaque-header">
    <section class="wrap">
        <div class="column-left">
            <h2>
              <span>Consulte um dos Nossos Advogados Para uma&nbsp; &nbsp;Completa Solução de Seus Problemas.</span>
            </h2>
            <p>
            Problemas legais aparecem à todo momento.
            Pensanso nisso, nossos advogados estão a disposição para responder suas perguntas e fornecer-lhe informações a qualquer momento. 
            Para a resolução completa e oportuna aos seus problemas legais, consulte a nossa equipe.</p>
        </div><!-- /.column-left -->
        <div class="column-right">
            <h2>Consulte-se, Agora!</h2>
            <hr />
            @if(Session::has('success'))
                <div>
                    <p class="alert alert-success">{{Session::get('success')}}</p>
                </div>
            @endif
                @if(Session::has('error'))
                    <div>
                        <p class="alert alert-danger">{{Session::get('error')}}</p>
                    </div>
                @endif
            <fieldset>

            {!! Form:: open(array('action' => 'ContactController@getContactUsForm', 'id' => 'frmContato', 'class' => 'form-contact', 'role' => 'form')) !!}
              <p>
              <span class="name">
              <i class="fa fa-user"></i>
              {!! Form::text('name', '', array('id' => 'name','class' => 'i-name', 'size'=>'40', 'placeholder' => 'Nome*', 'tabindex'=> '1','required' => '')) !!}
              </span>
              <span class="email">
              <i class="fa fa-envelope"></i>
              {!! Form::email('email', '', array('id' => 'email','class' => 'i-email', 'size'=>'80', 'placeholder' => 'Email', 'tabindex'=> '2')) !!}
              </span>
              <span class="mensagem">
              <i class="fa fa-comment"></i>
              {!! Form::textarea('comment', null, array('id' => 'comment','class' => 'i-mensagem', 'placeholder' => 'Fale um pouco sobre seu problema', 'rows' => '10', 'cols' => '50','tabindex'=> '3', 'required' => '')) !!}
              </span>
              {!! Form::submit('Enviar Consulta', array('class' => 'submit', 'tabindex'=> '4')) !!}
              </p>
            {!! Form::close() !!}
        </fieldset>
        </div><!-- /.column-right -->
    </section><!-- /.wrap -->
</div><!-- #destaque -->

<div id="servicos">
  <div class="wrap">
    <div class="servico">
      <ul>
        <li class="serv-01"><a href="#">11</a></li>
        <li class="serv-02"><a href="#">12</a></li>
        <li class="serv-03"><a href="#">13</a></li>
      </ul>
    </div><!-- /.servico -->
  </div><!-- /.wrap -->
</div><!-- /#servicos -->




<div id="lawyerlist">
  <section class="layout">
    <h1><img src="/development/images/bala3.png" alt="" />&nbsp;&nbsp;Nossos Advogados</h1>
    <div class="lawyers">
      <article class="lawyer">
        <h3>OAB 0001 Advogado Criminal <span class="small"><a href="#">José Antonio Leite</a></span></h3>
        <a href="#"><img src="/development/images/lawyers/thumbnails/jose_tn.jpg" alt="Foto de jose" class="lawyer" /></a>
        <p>Distinctively strategize premier content before top-line sources. Distinctively evisculate corporate expertise vis-a-vis professional alignments. Energistically create leading-edge core competencies after integrated testing procedures. Holisticly create vertical interfaces via just in time human capital. Dramatically optimize low-risk high-yield intellectual capital via tactical networks.</p>
      </article><!-- /.lawyer -->
      <article class="lawyer">
        <h3>OAB 0002  Advogada Trabalhista <span class="small"><a href="#">Jaciara Mello</a></span></h3>
        <a href="#"><img src="/development/images/lawyers/thumbnails/jaciara_tn.jpg" alt="Foto de Jaciara" class="lawyer" /></a>
        <p>Distinctively strategize premier content before top-line sources. Distinctively evisculate corporate expertise vis-a-vis professional alignments. Energistically create leading-edge core competencies after integrated testing procedures. Holisticly create vertical interfaces via just in time human capital. Dramatically optimize low-risk high-yield intellectual capital via tactical networks.</p>
      </article><!-- /.lawyer -->
      <article class="lawyer">
        <h3>OAB 0003 Advogado Cívil <span class="small"><a href="#">Gabriel Aranha</a></span></h3>
        <a href="#"><img src="/development/images/lawyers/thumbnails/gabriel_tn.jpg" alt="Foto de gabriel" class="lawyer" /></a>
        <p>Distinctively strategize premier content before top-line sources. Distinctively evisculate corporate expertise vis-a-vis professional alignments. Energistically create leading-edge core competencies after integrated testing procedures. Holisticly create vertical interfaces via just in time human capital. Dramatically optimize low-risk high-yield intellectual capital via tactical networks.</p>
      </article><!-- /.lawyer -->
      <article class="lawyer">
        <h3>OAB 0004 Advogado Cívil <span class="small"><a href="#">Igor Nascimento</a></span></h3>
        <a href="#"><img src="/development/images/lawyers/thumbnails/igor_tn.jpg" alt="Foto de gabriel" class="lawyer" /></a>
        <p>Distinctively strategize premier content before top-line sources. Distinctively evisculate corporate expertise vis-a-vis professional alignments. Energistically create leading-edge core competencies after integrated testing procedures. Holisticly create vertical interfaces via just in time human capital. Dramatically optimize low-risk high-yield intellectual capital via tactical networks.</p>
      </article><!-- /.lawyer -->
    </div><!-- /.lawyers -->
  </section><!-- /.layout -->
</div><!-- /.lawyerlist -->

<section id="contato" class="map">
<div class="wrap">
  <div class="googleMap">
                          {{-- <img src="http://www.bloomlegal.com/wp-content/themes/paperstreet/images/map_img1.jpg" alt=""> --}}
                          <address>
                              <span>Xavier da Silveira 45 Sala - 701 </span><br>
                              <span>Copacabana - Rio de Janeiro</span><br>
                              <span>CEP: 22061-010</span>
                          </address>
                          <a class="fancybox fancybox.iframe" id="mapa1" rel="group" title="Jose Antonio Leite Advogados Associados" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.2722338712824!2d-43.190693499999995!3d-22.977014699999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd540eb74e697%3A0x620034cacc0da86f!2sR.+Xavier+da+Silveira%2C+45+-+Copacabana%2C+Rio+de+Janeiro+-+RJ%2C+22061-010%2C+Brasil!5e0!3m2!1spt-BR!2sbr!4v1438881992803"></a>
                          {{-- <a class="fancybox" rel="group" href="big_image_2.jpg"><img src="small_image_2.jpg" alt="" /></a> --}}
  </div><!-- /.googleMap -->
</div><!-- /.wrap -->
</section><!-- /.map -->


<footer  class="rodape">
<div class="wrap">
    <div class="top">
      <div class="logo">

        <img src="/development/images/lg01-pb.png" alt="Jose Antonio Leite Advogados e Associados">

     </div><!--logo -->
   <div class="menus">
    <div class="menu-nav">
      <ul class="menu-nav-item">
        <li>Rua Xavier da Silveira 45 sala 701 - Cep: 22061-010 - Copacabana</li>
        <li>Rio de Janeiro - Brasil</li>

     </ul>
     <span class="btn-footer">
       <span class="icon-phone">&nbsp;&nbsp;</span><span>Contato Urgente&nbsp;!&nbsp;&nbsp;&nbsp;21 2510-3654</span><br/>
       <span class="icon-edit">&nbsp;&nbsp;</span>
       <span>advocacia@joseantonioleite.com.br</span>
      </span>
     </div><!--menus -->
     </div><!--menus-nav -->
     </div>
      <p>O escritório de advocacia de José Antonio Leite Advogados e Associados, fornece a informação neste site apenas para fins informativos. As informações contidas no site não se destina a fornecer aconselhamento jurídico, a leitura não estabelece uma relação cliente-advogado, e esta informação não deve ser invocado para o aconselhamento jurídico. Jose Antonio Leite Advogados Associados e seus advogados isentam de qualquer responsabilidade e que pode resultar de qualquer pessoa ou entidade depender de qualquer informação contida neste site.<br/>Atendemos clientes em todo Brasil, Rio de Janeiro, São Paulo. Nosso alcance dentro destes dois estados é forte, e servimos clientes regularmente nas principais cidades vizinhas, incluindo Macaé, Niterói Teresópolis, Volta Redonda e Nova Friburgo.
      </p>
      <h2>©&nbsp;Copyright 2015 Jose Antonio Leite Advogados Associados</h2>
<a href="#zero" class="scrollup"></a>
</div><!-- /.wrap -->
</footer>


@stop
@section('script-js')
{!! Html::script('development/js/script.js') !!}
@stop

