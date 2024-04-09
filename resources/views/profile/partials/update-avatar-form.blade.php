<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Avatar') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile picture.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="POST" action="{{ route('profile.avatar') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div>
            {{-- @if (count($avatar->avatar) == 0) --}}
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRshXPk7aFNFHDBmUSNcWp9vA5_zl_KSVyxnGxFZiJEpQ&s"
                alt="" class="img-fluid rounded-full ms-3" style="width:120px; height:120px;">
            {{-- @else --}}

            {{-- @endif --}}

        </div>

        <div>
            <x-input-label for="avatar" :value="__('Avatar')" />
            <x-text-input type="file" name="avatar" id="avatar" class="form-control p-2 mt-2" />
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
