@extends('layouts.blank')

@push('stylesheets')
        <!-- iCheck -->
<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- jVectorMap -->
<link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>
@endpush

@section('main_container')

        <!-- page content -->
<div class="right_col" role="main">
    <div class="col-md-8 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Alerta tus paquetes</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <form class="form-horizontal form-label-left input_mask" action="{{url('/add_package')}}">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Carrier</label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select name="carrier" class="form-control">
                                <option value="">Selecciona tu Carrier</option>
                                <option value="FEDEX">FEDEX</option>
                                <option value="UPS">UPS</option>
                                <option value="DHL">DHL</option>
                                <option value="USPS">USPS</option>
                                <option value="OTHERS">OTHERS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                             Numero de Tracking  </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input class="form-control"  placeholder="Numero de Tracking"  name="tracking" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lugar de la compra</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input class="form-control" name="shop" placeholder="Lugar de la compra" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">valor de tu compra</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input class="form-control" name="value" placeholder="Valor de tu compra" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="description" placeholder="Descripción" type="text"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Adjunta tu factura</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Alertar paquete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- footer content -->

<!-- /footer content -->

<!-- /page content -->
@endsection
