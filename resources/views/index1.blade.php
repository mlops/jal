@extends('layout.master')
{{--@section('title', '/////#José Antonio Leite Advogados e Associados ')@stop --}}
@section('head-script')
<link rel="stylesheet" href="{!! asset('development/css/style1.css') !!}">
<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    @parent
@stop

@section('content')

<header id="site-header">
  <div class="wrap">

    <div class="logo">
        <a href="http://ran.ge/" class="header-logo">
          <img src="/development/images/lg01.png" alt="logo" />
        </a>
    </div><!-- logo -->

        <a href="http://ran.ge/"  target="blank">
            <div class="call">
                  <div class="call-item">
                  <h2>&nbsp;Contato Urgente! - +55 21 2510-3654<br></h2>
                  <h3>&nbsp;advocacia@joseantonioleite.com.br</h3>
                  </div>
                <!-- nested-item -->
              </div><!-- content -->
          </a>

    <nav id="nav">
      <div class="navbar">
        <ul>
          <li><a class="icon info" href="#hotelinfo"><span>&nbsp;A Empresa</span></a></li>
          <li><a class="icon rooms" href="#rooms"><span>&nbsp;Serviços</span></a></li>
          <li><a class="icon dining" href="#dining"><span>&nbsp;Advogados</span></a></li>
          <li><a class="icon events" href="#events"><span>&nbsp;Contato</span></a></li>
        </ul>
      </div><!-- navbar -->
    </nav><!-- nav -->
  </div><!-- wrap -->
</header><!-- intro -->

<div id="destaque" class="wrap">
    <section>
      <div class="nested-item"><a href="#"><img src="/development/images/combo1.png" alt="Combo1" /></a></div>
      <div class="nested-item"><a href="#"><img src="/development/images/combo2.png" alt="Combo2" /></a></div>
      <div class="nested-item"><a href="#"><img src="/development/images/combo3.png" alt="Combo3" /></a></div>
      <div class="nested-item">
       <div class="about-box">
               <div class="container">
                   <h2>Consulte um dos Nossos Advogados <br>
                    Para uma Completa Solução às Suas Questões Legais.</h2>
              <hr />
           <p>Problemas legais aparecem à todo momento.<br>
           Pensanso nisso, nossos advogados estão a disposição para responder suas perguntas e fornecer-lhe informações a qualquer momento. <br>Para a resolução completa e oportuna aos seus problemas legais, consultar a nossa equipe.
           </p>
                  <div class="help">
                    <a href="#">
                    <i class="fa fa-caret-right"></i> Como Podemos lhe Ajudar? (21) 2510-3654</a>
                  </div> <!--help -->
              </div><!--container -->
        </div><!--about-box -->
      </div><!--nested-item -->
    </section>
</div><!-- /.wrap -->


<div id="assistForm" class="form-ass">
  <div class="form-group wrap">
  Form
  </div><!-- /.form-group -->
</div><!-- /.form-group -->

<section class="wrap">
  <section class="map">
<img src="/development/images/map.jpg" alt="Jose Antonio Leite Advogados e Associados">
  </section>
</section>

<footer class="wrap">
  <div class="rodape">
  <div class="top">

  <div class="logo">

  <img src="/development/images/lg01-pb.png" alt="Jose Antonio Leite Advogados e Associados">

 </div>
 <div class="menus">

  <div class="menu-main-navigation-container">
  <ul id="menu-main-navigation-1" class="menu">
    <li>Rua Xavier da Silveira 45 sala 701 <br />Copacana - Rio de Janeiro - Brasil</li>
 </ul>
 </div>
    <ul class="hidden">
      <li>Rua Xavier da Silveira 45 sala 701 <br />Copacana - Rio de Janeiro - Brasil</li>
    </ul>

       </div>

</div>
  <p> O escritório de advocacia de José Antonio Leite Advogados e Associados, fornece a informação neste site apenas para fins informativos. As informações contidas no site não se destina a fornecer aconselhamento jurídico, a leitura não estabelece uma relação cliente-advogado, e esta informação não deve ser invocado para o aconselhamento jurídico. Jose Antonio Leite Advogados e Associados e / ou seus advogados isentam de qualquer responsabilidade e responsabilidade que pode resultar de qualquer pessoa ou entidade depender de qualquer informação contida neste site.</p>
  <p>Atendemos clientes em todo Brasil, Rio de Janeiro, São Paulo. Nosso alcance dentro destes dois estados é forte, e servimos clientes regularmente nas principais cidades vizinhas, incluindo Macaé, Teresópolis, Volta Redonda e Nova Friburgo.</p>
  </div><!-- /.rodape -->

</footer>
@stop
@section('script-js')
<script type="text/javascript">

</script>
@stop

