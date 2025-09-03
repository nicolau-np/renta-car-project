@extends('layouts.app-painel-admin')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{'0'}}</h3>
                            <p>Utilizadores</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{'0'}}</h3>
                            <p>Viaturas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-car"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{'0'}}</h3>
                            <p>Clientes</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-group"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

            </div><!-- /.row -->
            <!-- Main row -->


        </div>
    </div>
@endsection
