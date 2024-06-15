<!doctype html>
<html lang=en>
@include('includes.head', [
    'title' => 'Joey Dalu - Native Mobile Developer', 'css' => 'css/home.css'
])
<body>
<div class=top></div>
<div class=content-container>
    <div class=content>
        <div class="avatar"></div>
        <p>Hi, I’m Joey.</p>
        <p>I’m a Native Android & iOS developer, and computer programmer.</p>
        <p>Check out stuff I've worked on in my <a
                href={{route('portfolio')}}>portfolio</a>.</p>

        @php
            $links = \App\Link::query()->take(5)->get();
        @endphp

        @if(count($links))
            <p>Or find me online on</p>
            <div class=icons>
                @foreach($links as $link)
                    <a rel=me target="_blank" href="{{$link->url}}" title="{{$link->title}}" class="icons">
                        <img class="link-icon" src="img/res/{{$link->res}}">
                    </a>
            @endforeach
            <!--<a rel=me target="_blank" title=Email class="email obfuscated" href="mailto:josephdalughut@gmail.com"></a>-->
            </div>
        @endif
    </div>
</div>
<div class=bottom></div>
<script src={{asset("js/lib/jquery/dist/jquery.min.js")}}></script>
<script src={{asset("js/lib/fastclick/lib/fastclick.js")}}></script>
<script src={{asset("js/scripts/landing.js")}}></script>

</body>
</html>
