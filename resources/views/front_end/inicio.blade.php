@extends('adminlte::layouts.app')
@section('htmlheader_title')
@section('contentheader_title', 'FORMULARIO DE SOLICITUD DE COMETIDO FUNCIONAL')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')



<div class="box box-info">
	<div class="form-horizontal">
            <div class="box-header with-border">
              <h3 class="box-title" style="color: #00c0ef;">Cometido Funcional</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Pasajero</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="pasajero">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Conductor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="conductor">
                  </div>
                  <label  class="col-sm-2 control-label">Conductor Tiene Poliza</label>
                  <div class="col-sm-2">
                    <div class="radio">
                    <label>
                      <input  type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                      SI
                    </label>
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                      NO
                    </label>
                  </div>
                  </div>
                </div>
                <div class="col-md-12"><p>Agradeceré a Ud., autorizar la realización de cometido funcional a:</p></div>
                <div class="form-group">
                	<label  class="col-sm-2 control-label">Nombre</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nombre">
                  </div>
                </div>
                <div class="form-group">
                	<label  class="col-sm-2 control-label">Rut</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="rut">
                  </div>
                  <label  class="col-sm-1 control-label">Estamento</label>

                  <div class="col-sm-2">
                    <select class="form-control">
                    <option>Directivo</option>
                    <option>Profesional</option>
                    <option>Tecnico</option>
                    <option>Administrativo</option>
                    <option>Auxiliar</option>
                  </select>
                  </div>
                        	<label  class="col-sm-1 control-label">Grado</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="nombre">
                  </div>
                </div>
                <div style="margin: 20px 0;" class="box-header with-border">
                <h3  class="box-title" style="color: #00c0ef;">Detalle del Viaje</h3>
                </div>	
            	<div class="form-group">
            	<div class="col-sm-2">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Vehiculo Particular
                    </label>
                  </div>
                </div>  
                <div class="col-sm-2">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Vehiculo Institucional
                    </label>
                  </div>
              </div>
              <div class="col-sm-2">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" >
                      Tren
                    </label>
                  </div>
               </div>  
               <div class="col-sm-2">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" >
                      Bus
                    </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" >
                      Avion
                    </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" >
                      Otro
                    </label>
                  </div>
               </div> 
              </div>
              <div style="margin: 20px 0;" class="box-header with-border">
                <h3  class="box-title">Destino</h3>
                </div>
              <div class="form-group">
                  <label  class="col-sm-2 control-label">Fecha Desde</label>

                  <div class="col-sm-3">
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                  </div>
                  <label  class="col-sm-2 control-label">Fecha Hasta</label>

                  <div class="col-sm-3">
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                  </div>
                </div>  
                              <div class="form-group">
                  <label  class="col-sm-2 control-label">Hora Salida</label>

                  <div class="col-sm-3">
                    <div class="input-group">
                    	<div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="time" class="form-control timepicker">

                    
                  </div>
                  </div>
                  <label  class="col-sm-2 control-label">Hora Regreso</label>

                  <div class="col-sm-3">
                     <div class="input-group">
                    	<div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="time" class="form-control timepicker">

                    
                  </div>
                  </div>
                </div>	
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Motivo</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" rows="3" placeholder="Haga clic aquí para escribir texto."></textarea>
                  </div>
                </div>
               <div style="margin: 20px 0;" class="box-header with-border">
                <h3  class="box-title" style="color: #00c0ef;">Detalle del Viático</h3>


                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Solicita Anticipo</label>

                  <div class="col-sm-2">
                    <div class="radio">
                    <label>
                      <input  type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                      SI    
                    </label>
                  </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                      NO
                    </label>
                  </div>
                  </div>
            
                </div>
                <div class="col-md-12"><strong>VIATICO</strong>: Se solicita la siguiente suma de dinero por concepto de viático.
Cuadro a visar por Departamento de Finanzas, Administración y Operaciones, dependiendo de disponibilidad presupuestaria. 
</p></div>
                <p>
             <div class="col-md-6">
             <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tipo de Viático</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th >Tipo de Viático</th>
                  <th style="width: 10px">Días</th>
                  <th>Valor Solicitado</th>
                  <th style="width: 100px">Total</th>
                </tr>
                <tr>
                  <td>Días con pernoctar</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Días sin pernoctar </td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Solo alojamiento</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td><strong>Total</strong></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
             <div class="col-md-6">
             <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Rango de Viático</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th >Rango viáticos</th>
                  <th>Con Pernoctar(100%)</th>
                  <th>Sin pernoctar(40%)</th>
                  <th>Solo alojamiento(60%)</th>
                </tr>
                <tr>
                  <td>1° al 4°</td>
                  <td>$78.621</td>
                  <td>$31.448</td>
                  <td>$47.173</td>
                </tr>
                <tr>
                  <td>5° al 10°</td>
                  <td>$57.644</td>
                  <td>$23.058</td>
                  <td>$34.586</td>
                </tr>
                <tr>
                  <td>11° al 21°</td>
                  <td>$46.782</td>
                  <td>$18.713</td>
                  <td>$28.069</td>
                </tr>
                <tr>
                  <td>22° al 31°</td>
                  <td>$34.796</td>
                  <td>$13.918</td>
                  <td>$20.878</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>          	
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Enviar</button>
              </div>
              <!-- /.box-footer -->
            </div>
          </div>     
@endsection