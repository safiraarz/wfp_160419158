<div class="modal-header">
    <h4 class="modal-title" style="text-transform: uppercase;">{{$dataproduct->generic_name}}</h4>
</div>
<div class="modal-body">
    <img src="{{asset ('images/'.$dataproduct->image)}}" height='200px' style="display:block; margin:auto"/>
    <hr>
    <b>Description</b>
    <p>{{$dataproduct->description}}</p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>