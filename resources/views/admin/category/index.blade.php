@include('admin.includes.sidebar')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Management</h1>
    <button class="d-none d-sm-inline-block btn vms-btn btn-sm shadow-sm" data-toggle="modal"
        data-target="#driver">Add New
        Category <i class="fa fa-plus fa-sm"></i> </button>
    </div>
    <div class="row animated--grow-in">
    <div class="col-xl-12">
        <div class="card card-body">
            {{-- message --}}
            <div class="table-responsive">
                <table class="table table-striped table-hover dt-responsive display nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th>SN</th>
                           <th>Category Name</th>
                           <th>Category Image</th>
                           <th>Category Description</th>
                           <th>Category status</th>
                           <th>action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($category as $items)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $items->category_name }}</td>
                            <td>{{ $items->category_image }}</td>
                            <td>{{ $items->category_summary }}</td>
                            <td>{{ $items->status }}</td>
                            <td>
                             <button class="btn text-warning btn-sm btn-circle shadow-sm" data-toggle="modal"
                                   data-target="#edit{{route('category.edit',$items->id)}}">
                                   <b><i class="fas fa-pencil-alt fa-lg"></i></b>
                               </button>
                               <a type="button" class="btn text-danger btn-sm btn-circle shadow-sm" data-toggle="modal"
                                   data-target="#delete{{route('category.destroy',$items->id)}}">
                                   <i class="fas fa-trash fa-lg"></i>
                               </a>
                           </td>
                           @include('admin.category.edit')
                           @include('admin.category.delete')
                         </tr>
                     
                        @endforeach
                     </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

 @include('admin.includes.footer')
@include('admin.category.create')
<script type="text/javascript">
   $(document).ready(function() {
       $('.count').each(function () {
           $(this).prop('Counter',0).animate({
               Counter: $(this).text()
               }, {
                   duration: 1000,
                   easing: 'swing',
                       step: function (now) {
                           $(this).text(Math.ceil(now));
                       }
               });
           });
   })
</script> 