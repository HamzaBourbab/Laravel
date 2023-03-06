<html>
    <head>
        @vite(['resources/css/app.css','resources/js/app.js'])
        @yield("meta")
    </head>
    <body>

        @include("header")
        <article>
                @yield("content")
        </article>
    
        @include("footer")
    </body>
</html>