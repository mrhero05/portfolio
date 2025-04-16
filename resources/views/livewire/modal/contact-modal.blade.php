<div x-data x-on:close-contact-modal.window="$closeModal('contactModal')">
    <x-modal name="contactModal" align="center" blur="md" width="w-full md:!w-[550px]">
        <form wire:submit.prevent='send'>
            <x-card>
                <x-slot name="title" class="w-full">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/logos/logo.png') }}" class="w-6 h-6" alt="Logo">
                        <span class="text-black dark:text-white font-MavenPro-SemiBold text-[1.2rem]">
                            Get in Touch
                        </span>
                        <x-icon name="x-circle" class="w-8 h-8 ml-auto cursor-pointer" x-on:click="$closeModal('contactModal')" />
                    </div>
                </x-slot>
                <div class="px-[20px]">
                    <p class="font-Inconsolata-Black text-[1.8rem]" size="lg">Let’s Connect</p>
                    <p class="text-dark dark:text-white">Have a project in mind, a job opportunity, or just want to say hi? I'd love to hear from you.</p>
                    <p class="text-dark dark:text-white">Fill out the form below and I’ll get back to you as soon as I can.</p>
                </div>
                <div class="px-[20px]">
                    <x-input
                        label="Name"
                        class="my-[10px]"
                        placeholder="Your Name"
                        wire:model='name'
                    />
                    <x-input
                        label="Email"
                        class="my-[10px]"
                        placeholder="Your Email"
                        wire:model='email'
                    />
                    <x-textarea label="Message" placeholder="I’m all ears — share the details!"
                        class="my-[10px]"
                        wire:model='message'
                    />
                </div>
                <x-slot name="footer" class="flex justify-end gap-x-4">
                    <button class="flex items-center gap-x-[10px] cursor-pointer bg-pf-dark3 text-white p-[8px_20px] rounded-full hover:bg-pf-orange transition-all" type="submit" wire:loading.attr="disabled" wire:target="send">
                        <div wire:loading wire:target='send'>
                            <x-fields.loading></x-fields.loading>
                        </div>
                        Send <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </x-slot>
            </x-card>
        </form>
    </x-modal>
    {{-- <form wire:submit='send'>
        <div class="space-y-6">
            <flux:field class="mb-2">
                <flux:label badge="Required">Email</flux:label>
                <flux:input type="email" wire:model='email' required />
                <flux:error name="email" />
            </flux:field>
            <flux:field class="mb-2">
                <flux:label badge="Required">Message</flux:label>
                <flux:textarea class="h-[60px]" rows="auto" wire:model='message' placeholder="I’m all ears — share the details!" required />
                <flux:error name="message" />
            </flux:field>

            <div class="flex">
                <flux:spacer />

                <flux:button class="mt-2 cursor-pointer bg-pf-dark3 text-white p-[8px_20px] rounded-full hover:bg-pf-orange transition-all" type="submit">
                    <div wire:loading>
                        <x-fields.loading></x-fields.loading>
                    </div>
                    Send <i class="fa-solid fa-paper-plane"></i>
                </flux:button>
            </div>
        </div>
    </form> --}}
</div>
