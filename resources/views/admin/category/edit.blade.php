 <!-- edit driver modal -->
 <div class="modal fade" id="edit{{route('category.edit',$items->id)}}" tabindex="-1" role="dialog"
    aria-labelledby="#edit_vehacle" aria-hiden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header kvm-bg">
                <h3 class="modal-title text-white" id="edit_vehacle">Edit Category</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <form action="{{ route('category.update',$items->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
          @method('PATCH')
                <div class="modal-body">
                    <p class="text-center">
                        <img src=" images/driver/" width="100">
                    </p>
                    <h5 class="text-center"></h5>
                    <input type="number" hidden name="driverid" class="form-control"
                        value="">
                    <div class="row mt-3">
                        <div class="col-xl-6">
                            <label>Category Name</label>
                            <input type="text" name="category_name" class="form-control"
                                value="{{ $items->category_name }}">
                        </div>
                        <div class="col-xl-6">
                            <label>Category Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="{{ $items->status }}">Active</option>
                                <option value="{{ $items->status }}">Not Active</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <label>Category Description</label>
                            <textarea name="category_description" id="" cols="4" class="form-control">{{ $items->category_summary }}</textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" name="edit_driver" class="btn vms-btn">Change</button>
                </div>
            </form>
        </div>
    </div>
</div>