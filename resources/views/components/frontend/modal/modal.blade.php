@props(['name','id','title','url'])
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $id }}">
    {{ $name }}
  </button>
<div class="modal" id="{{ $id }}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">{{ $title }}</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item w-100 " src="{{ $url }}"></iframe>
              </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>
