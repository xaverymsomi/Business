<div class="modal fade" id="mantainance" tabindex="-1" role="dialog" aria-labelledby="mantainance" aria-hiden="true">
    <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
          <div class="modal-header kvm-bg">
             <h3 class="modal-title text-white" id="mantainance">Banner</h3>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true" class="text-white">&times;</span>
             </button>
          </div>
          <form action="{{ route('banner.store') }}" class="" method="POST">
             @csrf
             <div class="modal-body">
                <div class="row">
                   <div class="col-xl-6 ">
                      <input type="text" name="title" value="{{ old('title') }}" placeholder="Tiltle" class="form-control">
                   </div>
                   <div class="col-xl-12 mt-3">
                      <div class="form-group">
                         <textarea type="text" rows="2" name="description" class="form-control"
                            placeholder="Description"></textarea>
                      </div>
                   </div>
                   <div class="col-xl-6 mt-2">
                      <input type="file" name="image" class="filemanager">
                   </div>
                </div>
             </div>
             <div class="modal-footer">
                <button type="submit" name="add_banner" class="btn vms-btn">Register</button>
             </div>
          </form>
       </div>
    </div>
 </div>