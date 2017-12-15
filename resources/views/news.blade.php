    <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>News Application with Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?famisly=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/news.css') }}" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Oswald" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
    <section class="header">
  <div class="header-content">
    <h1 class="title">
       Mis <span id="js-rotating">Noticias, Inversiones, Posibilidades, Finanzas</span>
    </h1>
  </div>
    
     <div>
     <a class='btn btn-primary' href="/"> Ir atras</a>
     </div>

</section>
    <div id="appendDivNews">
        

            {{ csrf_field() }}
<section id="content" class="section-dropdown">
<p class="select-header">Seleccione un diario : </p>
<label class="select"> 
    <select name="news_sources" id="news_sources">
    <option value="{{@$source_id}} : {{@$source_name}}">{{$source_name}}</option>
    @foreach ($news_sources as $news_source)
      <option value="{{$news_source['id']}} : {{$news_source['name'] }}">{{$news_source['name']}}</option>
    @endforeach
    </select>
</label>

 </section> 
<p> Fuente : {{$source_name}}</p>
    <section class="news">
    @foreach($news as $selected_news)
    <article>
        <img src="{{$selected_news['urlToImage']}}" alt="" />
        <div class="text">
            <h1>{{$selected_news['title']}}</h1>
            <p style="font-size: 14px">{{$selected_news['description']}} <a href="{{$selected_news['url']}}" target="_blank"><small>read more...</small></a> </p>
            <div style="padding-top: 5px;font-size: 12px">Author: {{$selected_news['author'] or "Unknown" }}</div>
            @if($selected_news['publishedAt'] != null)
             <div style="padding-top: 5px;">Date Published: {{ Carbon\Carbon::parse($selected_news['publishedAt'])->format('l jS \\of F Y ') }}</div>
             @else
             <div style="padding-top: 5px;">Date Published: Unknown</div>

             @endif

        </div>
    </article>
    @endforeach
</section>
</div>

         </body>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Scripts -->
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

</html>