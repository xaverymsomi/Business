<div class="col-xl-12 mb-4">
    <div class="card">
       <div class="card-header bg-success text-white">
          Admin Profile
       </div>
       <div class="card-body">
          <form id="send-verification" method="post" action="{{ route('verification.send') }}">
             @csrf
          </form>
          <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
             @csrf
             @method('patch')
             <div>
                <div class="row">
                   <div class="col-xl-6">
                      <label for="name">Name</label>
                      <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                      <x-input-error class="mt-2" :messages="$errors->get('name')" />
                   </div>
                </div>
             </div>
             <div>
                <div class="row">
                   <div class="col-xl-6">
                      <x-input-label for="email" :value="__('Email')" />
                      <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
                      <x-input-error class="mt-2" :messages="$errors->get('email')" />
                   </div>
                </div>
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                   <p class="text-sm mt-2 text-gray-800">
                      {{ __('Your email address is unverified.') }}
                      <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      {{ __('Click here to re-send the verification email.') }}
                      </button>
                   </p>
                   @if (session('status') === 'verification-link-sent')
                   <p class="mt-2 font-medium text-sm text-green-600">
                      {{ __('A new verification link has been sent to your email address.') }}
                   </p>
                   @endif
                </div>
                @endif
             </div>
             <div class="flex items-center gap-4">
                <button type="submit" class="btn btn-primary">Send</button>
                @if (session('status') === 'profile-updated')
                <p
                   x-data="{ show: true }"
                   x-show="show"
                   x-transition
                   x-init="setTimeout(() => show = false, 2000)"
                   class="text-sm text-gray-600"
                   >{{ __('Saved.') }}</p>
                @endif
             </div>
          </form>
       </div>
    </div>
 </div>