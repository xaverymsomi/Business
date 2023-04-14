<!-- delete driver modal -->
<div class="modal fade" id="delete{{route('category.destroy',$items->id)}}" tabindex="-1" role="dialog"
    aria-labelledby="#delete_driver" aria-hiden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header kvm-bg">
                <h3 class="modal-title text-white" id="delete_driver">Delete Category</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <form action="crude_driver_logic.php" method="POST">
                <p class=" pl-4 h5">Are you sure you want to delete this</p>
                <div class="modal-body">
                    <input hidden type="number" name="driverid" value="">
                </div>
                <div class="modal-footer">
                    <button type="submit" name="delete_driver" class="btn vms-btn">Yes Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>