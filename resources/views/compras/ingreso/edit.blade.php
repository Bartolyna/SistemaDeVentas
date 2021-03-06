@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <h3>Editar Proveedor: {{$persona->nombre}}</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div> 
            @endif
        </div>
    </div>
            {!!Form::model($persona, ['method'=>'PATCH','route'=>['compras.proveedor.update', $persona->idpersona]])!!}
            {{Form::token()}}
            <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                    <label for="nombre">Nombre</label>    
                    <input type="text" name="nombre" required value="{{$persona->nombre}}" class="form-control" placeholder="Nombre del proveedor...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                    <label for="nombre">Direccion</label>    
                    <input type="text" name="direccion"  value="{{$persona->direccion}}" class="form-control" placeholder="Direccion del proveedor...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label>Documento</label>
                <select name="tipo_documento" class="form-control">
                    @if($persona->tipo_documento=='Cedula')
                        <option value="Cedula" selected>Cedula</option>
                        <option value="TI">Tarjeta de Identidad</option>
                        <option value="PAS">Pasaporte</option>
                    @elseif($persona->tipo_documento=='TI')
                        <option value="Cedula">Cedula</option>
                        <option value="TI" selected>Tarjeta de Identidad</option>
                        <option value="PAS">Pasaporte</option>
                    @else
                        <option value="Cedula">Cedula</option>
                        <option value="TI">Tarjeta de Identidad</option>
                        <option value="PAS" selected>Pasaporte</option>
                    @endif
                </select>
            </div>
        </div>
        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                    <label for="num_documento">Numero documento</label>    
                    <input type="text" name="num_documento" required value="{{$persona->num_documento}}" class="form-control" placeholder="Numero de documento...">
            </div>
        </div>
        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                    <label for="telefono">Telefono</label>    
                    <input type="text" name="telefono" required value="{{$persona->telefono}}" class="form-control" placeholder="Telefono del proveedor...">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                    <label for="email">Email</label>    
                    <input type="email" name="email"  value="{{$persona->email}}" class="form-control" placeholder="Email del proveedor...">
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           <div class="from-group">
               <button class="btn btn-primary" type="submit">Guardar</button>
               <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    </div>           
            {!!Form::close()!!}
@endsection