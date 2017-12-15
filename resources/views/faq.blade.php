
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/gif">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Preguntas</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?famisly=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/news.css') }}" rel="stylesheet">
        <link href="{{ asset('css/faq.css') }}" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Styles -->
        <!-- Latest compiled and minified CSS -->
    </head>
    
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Oswald" rel="stylesheet">
    <title> Mis Finanzas</title>
  </head>
  <body>
<section class="header">
  <div class="header-content">
    <h1 class="title">
       Mis <span id="js-rotating">Consultas, Inversiones, Posibilidades, Finanzas</span>
    </h1>
  </div>
    
     <div>
     <a class='btn btn-primary' href="/"> Ir atras</a>
     </div>

</section>

<div class="container text-justified" id="contenedor">

 
 <article class="text">
  

     <h2>¿Cómo puedo obtener mi clave de acceso ?</h2>
    <h3>Para registrarte ten en cuenta los siguientes pasos:</h3>

<ul>
  <li>Ingresa a www.misfinanzas.com.</li>
  <li> Selecciona la opción “Log In”, y completa los campos solicitados por el sistema. </li>
</ul>

<h2> Olvidé mi clave de acceso ¿Cómo puedo restablecerla? </h2>
<h3> Ten en cuenta los siguientes pasos: </h3>

<ul>
  <li> Ingresa a www.misfinanzas.com  ubica la sección Contacto</li>
  <li> Envia un mail con el asunto “Restablecer contraseña”. </li>
  <li>Recibirás un mail donde tendrás que validar la imagen y frase de seguridad sean correctas, si es así ingresa a la opción "¿Olvidaste tu clave?" que aparece en pantalla.
  </li>
</ul>

  <h2>¿Mis datos están seguros? </h2>
  <ul>
    <li> En Mis Finanzas Accounting Group contamos con los más altos estándares de seguridad para que tu información solo quede en nuestras manos.</li>
  </ul>

  <h2>¿Qué soporte voy a recibir? </h2>
  <ul>
    <li> Contamos con atención y soporte al cliente las 24hs , solo debes enviarnos un mail detallando la ayuda que estes requiriendo e inmediatamente obtendrás respuesta.</li>
  </ul>
   </p>

 </article>
</div>

</div>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app2.js') }}"></script>
    <script type="text/javascript">/*! Morphext - v2.4.7 - 2016-11-04 */!function(a){"use strict";function b(b,c){this.element=a(b),this.settings=a.extend({},d,c),this._defaults=d,this._init()}var c="Morphext",d={animation:"bounceIn",separator:",",speed:2e3,complete:a.noop};b.prototype={_init:function(){var b=this;this.phrases=[],this.element.addClass("morphext"),a.each(this.element.text().split(this.settings.separator),function(c,d){b.phrases.push(a.trim(d))}),this.index=-1,this.animate(),this.start()},animate:function(){this.index=++this.index%this.phrases.length,this.element[0].innerHTML='<span class="animated '+this.settings.animation+'">'+this.phrases[this.index]+"</span>",a.isFunction(this.settings.complete)&&this.settings.complete.call(this)},start:function(){var a=this;this._interval=setInterval(function(){a.animate()},this.settings.speed)},stop:function(){this._interval=clearInterval(this._interval)}},a.fn[c]=function(d){return this.each(function(){a.data(this,"plugin_"+c)||a.data(this,"plugin_"+c,new b(this,d))})}}(jQuery);

$("#js-rotating").Morphext({
    animation: "flipInX",
    separator: ",",
    speed: 2000,
    complete: function () {
        // Called after the entrance animation is executed.
    }
});


/*setInterval(function(){ 
  changeWord();  
}, 3000);

$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});

var x = ['new', 'cool', 'your'];
var i = 0;

function changeWord() {
  var y = $('.anim');
  
  i++
  if(i== 3){i=0;}
  
  y.html(x[i]);
  y.animateCss('bounce');
}*/
</script>
  </body>
</html>