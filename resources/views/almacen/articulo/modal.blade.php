<div class="modal fade modal-slide-in-rigth" aria-hidden="true" tabnidex="-1" id="modal-delete-{{$art->idarticulo}}">

    {{form::Open(array('action'=>array('ArticuloController@destroy', $art->idarticulo), 'method'=>'delete'))}}
    <div class="modal-dialog">
     <div class="modal-content">
        <div class="model-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
            </button>
            <h4 class="modal-title">Eliminar Articulo</h4>
        </div>
        <div class="modal-body">
            <p>Confirme si desea eliminar el articulo</p>
        </div>
        <div class="modal-footer">
            <button type="buttos" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
     </div>
    </div>

    {{Form::Close()}}
</div>