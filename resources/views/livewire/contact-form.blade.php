<div>
 
           <form wire:submit.prevent='saveContact' class="space-y-4">
                <div>

                    @if (session()->has('message'))

                        <div class="alert alert-success">

                            {{ session('message') }}

                        </div>

                    @endif

                 </div>
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input wire:model='name' name="name" id="name" type="text" />
                <x-jet-input-error for='name' />
            </div>

            <div>
                <x-jet-label for="email" value="{{ __('Email Address') }}" />
                <x-jet-input name="email" wire:model='email' id="email" type="email" />
                <x-jet-input-error for='email' />
            </div>

            <div>
                <x-jet-label for="message" value="{{ __('Message') }}" />
                <textarea class="w-full" wire:model='message' name="message" id="" cols="30" rows="10"></textarea>
                <x-jet-input-error for='message' />
            </div>

            <x-jet-button type="submit" class="mt-5">
                <div wire:target='saveContact' wire:loading class="mr-2">
                    <span>loading...</span>
                </div>
                {{ _('Send') }}
            </x-jet-button>
        </form>
</div>
