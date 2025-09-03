<div>
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{'/panel-admin'}}" class="navbar-brand"><b>RENTA CAR</b></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">

                @foreach ($itemsMenu as $key=>$item)
                @if ($item['dropdown'])
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $item['label'] }}<span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach ($item['dropdown'] as $key => $dropdown)
                        @if ($key >= 1)
                        <li class="divider"></li>
                        @endif
                        <li><a href="{{$dropdown['url']}}">{{$dropdown['label']}}</a></li>
                        @endforeach

                    </ul>
                </li>
                @else
                <li class="{{ $type == $item['type'] ? 'active' : null }}"><a
                        href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
                @endif
                @endforeach

            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Pesquisar...">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name ?? null }} <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{'/auth/profile' }}">Perfil</a></li>
                        <li class="divider"></li>
                        <li><a href="/auth/logout">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

</div>
