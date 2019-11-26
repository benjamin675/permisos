@extends('adminlte::layouts.app')
@section('htmlheader_title')
@section('contentheader_title', 'solicitud de permiso administrativo')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-horizontal" action="/guardar_permiso" method="post" name="form_permiso">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Horizontal Form</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEma,il3" required="required" name="nombre" readonly value = '{{$funcionario[0]->nombresFunc}} {{$funcionario[0]->paternoFunc}} {{$funcionario[0]->maternoFunc}} '>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Run</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" required="required" name="rut" readonly value="{{$funcionario[0]->rutFunc}}">

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Estamento</label>
                    <div class="col-sm-8">
                        <select class="form-control select2 select2-hidden-accessible" required="required" name="estamento" tyle="width: 100%;"
                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                            @foreach($estamentos as $estamento)
                                <option value="{{$estamento->idEsta}}">
                                    {{$estamento->nombreEsta}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Gardo</label>
                    <div class="col-sm-8">
                        <select class="form-control select2 select2-hidden-accessible" required="required" name="grado"  style="width: 100%;"
                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="18">1</option>
                            <option value="19">2</option>
                            <option value="20">3</option>
                            <option value="21">4</option>
                            <option value="22">5</option>
                            <option value="23">6</option>
                            <option value="24">7</option>
                            <option value="25">8</option>
                            <option value="26">9</option>
                            <option value="27">10</option>
                            <option value="28">11</option>
                            <option value="29">12</option>
                            <option value="30">13</option>
                            <option value="31">14</option>
                            <option value="32">15</option>
                            <option value="33">16</option>
                            <option value="34">17</option>
                            <option value="35">18</option>
                            <option value="36">19</option>
                            <option value="37">20</option>
                            <option value="38">21</option>
                            <option value="39">22</option>
                            <option value="40">23</option>
                            <option value="41">24</option>
                            <option value="42">25</option>
                            <option value="43">26</option>
                            <option value="44">27</option>
                            <option value="45">28</option>
                            <option value="46">29</option>
                            <option value="47">30</option>
                            <option value="48">31</option>
                        </select>
                    </div>
                </div>
            </div>
    </div>
    <div class="box">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th>cantidad de dias</th>
                <th>jornada</th>
                <th>fecha desde</th>
                <th>fecha hasta</th>
            </tr>
            <td>
                <div>
                    <input type="number" class="form-control" id="inputEmail3" required="required" name="cantidad_de_dias" placeholder="ingrese la cantida de dias">
                </div>
            </td>
            <td>
                <div>

                    <select class="form-control select2 select2-hidden-accessible" required="required" name="jornada" style="width: 100%;"
                            data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option value="18">Mañana</option>
                        <option value="18">Tarde</option>
                        <option value="18">Todo el dia</option>
                    </select>
                </div>
            </td>
            <td>
                <div>
                    <input type="date" class="form-control" id="inputEmail3" required="required" name="fecha_desde" placeholder="ingrese fecha de inicio">
                </div>
            </td>
            <td>
                <input type="date" class="form-control" id="inputEmail3" required="required" name="fecha_hasta" placeholder="ingrese fecha final">
            </td>
            </tr>
            </tbody>
        </table>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Enviar</button>
        </div>
        <!-- /.box-footer -->
    </div>

    </form>
@endsection
