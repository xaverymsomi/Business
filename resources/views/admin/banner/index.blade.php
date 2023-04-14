use App\Models\Category;
@include('admin.includes.sidebar')

<div class="main_container">


   <style type="text/css">
      
  
   </style>
   <!-- Page Heading -->
   <div class="row animated--grow-in">
       <div class="col-xl-12">
         
           <div class="card card-body">
               <div class="d-sm-flex align-items-center justify-content-between mb-4">
                   <div></div>
           
                   <div class="d-flex">
                       <button class="d-none d-sm-inline-block btn vms-btn btn-sm shadow-sm ml-3" data-toggle="modal" data-target="#mantainance">
                           Add Banner <i class="fa fa-plus-circle fa-sm"></i>
                        </button>
                   </div>
               </div>
               
               <div class="table-responsive">
                  <table class="table">
                     <thead>
                        <tr>
                          <th>SN</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th>status</th>
                           <th>action</th>
                        </tr>
                     </thead>
                     @foreach ($banners as $banner)
                     <tr>
                       <td>{{ $loop->iteration }}</td>
                       <td>{{ $banner->title }}</td>
                       <td>{{ $banner->description }}</td>
                       <td>
                          <input type="checkbox" name="toogle" data-toggle="switchbutton" value="{{ $banner->id }}" checked data-onlabel="active" data-offlabel="inactive" data-onstyle="succes" data-offstyle="danger" id="">
                       </td>
                       <td>
                                     
                          <button class="btn text-warning btn-sm btn-circle shadow-sm" data-toggle="modal"
                              data-target="#edit{{route('banner.edit',$banner->id)}}">
                              <b><i class="fas fa-pencil-alt fa-lg"></i></b>
                          </button>
                          <a type="button" class="btn text-danger btn-sm btn-circle shadow-sm" data-toggle="modal"
                              data-target="#delete{{route('banner.edit',$banner->id)}}">
                              <i class="fas fa-trash fa-lg"></i>
                          </a>
                      </td>
                      @include('admin.banner.edit')
                  </tr>
                     @endforeach
                  </table>
               </div>
           </div>
       </div>
   </div>
</div>

@include('admin.includes.footer')
@include('admin.banner.create')
<script type="text/javascript">

   $('input[name=toogel]').change(function(){
       var mode = $(this).prop('checked');
       alert(mode);
   });


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