<div>
    <section class="content-header">
        <h1>
            {{$menu}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{ $menu }}</a></li>
            @if ($submenu != '')
            <li class="active">{{ $submenu }}</li>
            @endif
        </ol>
    </section>
</div>