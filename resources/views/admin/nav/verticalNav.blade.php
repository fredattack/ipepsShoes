{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: fred--}}
 {{--* Date: 30-09-17--}}
 {{--* Time: 07:13--}}
 {{--*/--}}
    <nav class="navbar navbar-default" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <div class="panel-heading"></div>
            <ul class="nav nav-stacked">
                <li><a href="{{ route('adminHome')}}">Home</a></li>
                <li><a href="{{ route('chaussure.index')}}">Chaussures</a></li>
                <li><a href="#">Commandes</a></li>
            </ul>


        </div><!-- /.navbar-collapse -->
    </nav>
