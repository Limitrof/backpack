<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--title>{{ config('app.name', 'Laravel') }}</title-->
    <title>Мое СТО</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

	$(document).ready(function(){
			$(".brand").click(function(){
                console.log('it is '+$(this).data('brandid'));
        var brandName=$(this).html();
        var brandId=$(this).data('brandid');
            if(brandName!=0)
            {
                $("#models").html("<img src='uploads/getting.gif'/>  идет запрос моделей... пожалуйста, подождите");
                $.ajax({
                            type: "GET",
                            url:"/modelsbyid/"+brandId,
                            success: function (data, textStatus)
                            {
                                if(data!=''){
                                    var rowbyrow='';
                                    data.forEach(function(element) {
                                        rowbyrow+='<a href="#" onclick="getMod('+element.MOD_ID+')">'+element.TEX_TEXT+'</a><br/>';
                                    });
                                    $("#models").html(rowbyrow);
                                    $("#modification").html("");
                                }else{
                                    $("#models").html("Моделей не найдено");
                                    $("#modification").html("");
                                }
                            }
                });

            }
        });
	});
//уникальная модификация по модели
        function getMod(mid){

            console.log('it is '+mid);

            var mod_id=$(this).data('modid');
            if(mod_id!=0)
            {
                $("#modification").html("<img src='uploads/getting.gif'/> идет запрос модификаций... пожалуйста, подождите");
                $.ajax({
                    type: "GET",
                    url: "/modification/"+mid,
                    success: function (data, textStatus)
                    {
                        console.log('ok'+data);
                        var rowbyrow = '';
                        if(data!=''){
                            //textBody
                            data.forEach(function(element) {
                                var modStartYear=[element.yearStart.toString().slice(0, 4), '/', element.yearStart.toString().slice(4)].join('');
                                var modEndYear=[element.yearEnd.toString().slice(0, 4), '/', element.yearEnd.toString().slice(4)].join('');
                                rowbyrow+='<a href="#" onclick="getModific('+element.engineInfo+')">'+element.textEngi+' | Тип кузова: '+element.textBody+' | '+element.engiHorsFrom+' Л.С. |  '+element.engiKw+'  кВт | Объем двигателя: '+element.engiValcm+' | Годы выпуска: '+modStartYear+' - '+modEndYear+'</a><hr/>';
                            });

                            $("#modification").html(rowbyrow);
                        }else{
                            $("#modification").html("Модификации не найдены");
                        }
                    }
                });
            }
        }
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!--{{ config('app.name', 'Laravel') }}-->Мое СТО
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
