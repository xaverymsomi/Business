<div class="modal fade" id="driver" tabindex="-1" role="dialog" aria-labelledby="driver" aria-hiden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header kvm-bg">
                <h3 class="modal-title text-white" id="driver">New Category</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row mt-3">
                        <div class="col-xl-12">
                            <label>Category Name</label>
                            <input type="text" name="category_name" class="form-control" placeholder="Category name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xl-12">
                            <label>Category Image</label>
                            <input type="file" name="category_image" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xl-12">
                            <label>Category description</label>
                            <textarea name="category_summary" class="form-control" placeholder="category description" id="" cols="4"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xl-12">
                            <label>Category Status</label>
                            <select name="category_status" id="" class="form-control">
                                <option value="" class="form-control">Active</option>
                                <option value="" class="form-control">Not Active</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="add_driver" class="btn vms-btn">Register</button>
                </div>
            </form>
        </div>
    </div>