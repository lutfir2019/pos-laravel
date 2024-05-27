<div>
    <div class="flex flex-row">
        <div class="lg:w-1/2 sm:w-full px-3">
            <form wire:submit.prevent="update">
                <div class="flex flex-wrap">
                    <div class="w-1/2 sm:w-full px-2">
                        <x-label for="name" :value="__('Name')" required />
                        <x-input
                            class="block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md mt-1"
                            type="text" name="name" wire:model.defer="name" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="w-1/2 sm:w-full px-2">
                        <x-label for="email" :value="__('Email')" required />
                        <x-input
                            class="block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md mt-1"
                            type="email" name="email" wire:model.defer="email" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="w-1/2 sm:w-full px-2">
                        <x-label for="phone" :value="__('Phone')" required />
                        <x-input
                            class="block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md mt-1"
                            type="text" name="phone" wire:model.defer="phone" required />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <div class="w-full px-2">
                        <x-button type="submit" primary class="mt-4">
                            {{ __('Update') }}
                        </x-button>
                    </div>
                </div>
            </form>
        </div>

        <div class="lg:w-1/2 sm:w-full px-3">
            <form wire:submit.prevent="updatePassword">
                <div class="mb-4">
                    <label for="current_password">{{ __('Current Password') }} <span
                            class="text-danger">*</span></label>
                    <x-input type="password" name="current_password" wire:model.defer="current_password" required />
                    <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="password">{{ __('New Password') }} <span class="text-danger">*</span></label>
                    <x-input type="password" name="password" wire:model.defer="password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="password_confirmation">{{ __('Confirm Password') }} <span
                            class="text-danger">*</span></label>
                    <x-input type="password" name="password_confirmation" wire:model.defer="password_confirmation" required />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <x-button type="submit" primary>
                        {{ __('Update Password') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</div>
