@include('admin.includes.sidebar')
<div class="main_container">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('admin.profile.update')
                </div>
            </div>

            <div class="p-4 sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('admin.profile.update-password-form')
                </div>
            </div>

            {{-- <div class="p-4 sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('admins.profile.delete-user-form')
                </div>
            </div> --}}
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