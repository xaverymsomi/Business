<!-- edit mantainance modal -->
<div class="modal fade" id="edit{{route('banner.edit',$banner->id)}}" tabindex="-1" role="dialog"
  aria-labelledby="#edit_mant" aria-hiden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header kvm-bg">
           <h3 class="modal-title text-white" id="edit_mant">Edit Banner</h3>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="text-white">&times;</span>
           </button>
        </div>
        <form action="{{ route('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
           <div class="modal-body">
              <div class="row">
                 <div class="col-xl-12">
                    <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{ $banner->title }}" class="form-control">
                    @error('title')
                    <span class="text-danger"></span>
                    @enderror
                 </div>
              </div>
              <div class="row mt-3">
                 <div class="col-xl-12">
                    <div class="input-group">
                       <input id="thumbnail" class="form-control" type="file" name="photo" value="{{ $banner->image }}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                    <span class="text-danger">#</span>
                    @enderror
                 </div>
              </div>
              <div class="row mt-3">
                <div class="col-xl-12">
                   <div class="form-group">
                      <textarea type="text" rows="4" name="description" class="form-control"
                         placeholder="Description">{{ $banner->description }}</textarea>
                   </div>
                </div>
             </div>
           </div>
           <div class="modal-footer">
            <button type="submit" name="edit_vehicle" class="btn vms-btn">Change</button>
            </div>
          
     </div>
     
     </form>
  </div>
</div>
</div>
<!-- delete vehicle modal -->
<div class="modal fade" id="delete{{route('banner.edit',$banner->id)}}" tabindex="-1" role="dialog"
  aria-labelledby="#delete_vehicle" aria-hiden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header bg">
           <h3 class="modal-title text-white" id="delete_vehicle">Delete Banner</h3>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="text-white">&times;</span>
           </button>
        </div>
        <form action="{{route('banner.destroy',$banner->id)}}" method="POST">
          @csrf
          @method('delete')
           <p class=" pl-4 h5">Are you sure you want to delete this</p>
           <div class="modal-body">
            {{ $banner->title }}
           </div>
           <div class="modal-footer">
              <button type="submit" data-id="{{ $banner->id }}" name="delete" class="btn vms-btn">Yes Delete</button>
           </div>
        </form>
     </div>
  </div>
</div>