<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .scroll-able {
                overflow-y: auto;
            }
        </style>
        <script>
            function getMessage()
            {
                var para = document.createElement('p');
                para.textContent = 'You Clicked the button';
                document.body.appendChild(para);
                var talkElement = document.getElementById("talk");
                talkElement.appendChild(para);
            }

            function sendMessage()
            {
                let url = "{{ route('auth') }}";
                document.location.href = url;
            }
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ route('logout') }}">Logout</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel Talk Border
                </div>

                @if (Auth::check())
                
                    <table style="border: 5px #cccccc solid;" width="100%" height="300px">
                        <tbody id="talk" class="scroll-able">
                            <p>  </p>
                        </tbody>
                    </table>
                <form action="/authtest" method="post">
                    <input type="text" name="bord" width="300px" height="300px">
                </form>
                <button onclick="sendMessage()">Send</button>
                
                @endif

            </div>
        </div>
    </body>
</html>