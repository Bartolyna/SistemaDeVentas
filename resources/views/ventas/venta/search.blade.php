{!! Form::open(array('url'=>'ventas/venta', 'method'=>'GET','autocomplete'=>'off', 'role'=>'search'))!!}
<div class="form-group">
    <div class0+="input-group">
    <input type="text" class="form-control" name="searchText" placeholder="Buscar.." value="{{$searchText}}">
    <span class="input-grup-btn">
        <button type="submit" class="btn btn-prima">Buscar</button>
    </span>
    </div>
</div>
{{form::close()}}