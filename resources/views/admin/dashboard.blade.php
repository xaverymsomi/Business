@include('admin.includes.sidebar')
<div class="main_container">
   <div class="row">
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        
                     </div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">#</div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-bu fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Earnings (Monthly) Card Example -->
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Orders
                     </div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{-- Tsh.<span class="count">#</span>/=  --}}
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-dolla-sign fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sellers
                     </div>
                     <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                           <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
                              <span class="count">#</span>
                           </div>
                        </div>
                        <div class="col">
                           <!--  <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax=""></div>
                              </div> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-user fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Registered customers
                     </div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <span class="count">#</span>
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-user fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-xl-7 mb-4">
         <div class="card">
            <div class="card-header bg-success text-white">
               New Sellers
            </div>
            <div class="card-body">
               <table class="table">
                  <thead>
                     <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                     </tr>
                  </thead>
                  <tr>
                     <td>#</td>
                     <td>#</td>
                     <td>
                     </td>
                     <td>#</td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
      <div class="col-xl-5">
         <div class="card">
            <div class="card-header bg-dark text-white">
               <div class="d-flex justify-content-between">
                  <span>Comission </span>
                  <a data-toggle="modal" data-target="#expenditure-modal"><i class="fa fa-plus text-white"></i> </a>
               </div>
            </div>
            <div class="card-body">
               <table class="table">
                  <thead>
                     <tr>
                        <th></th>
                        <th></th>
                     </tr>
                  </thead>
                  <tr>
                     <td>#</td>
                     <td>
                        <span class="badge bg-success text-white">#</span>
                     </td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@include('admin.includes.footer')
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