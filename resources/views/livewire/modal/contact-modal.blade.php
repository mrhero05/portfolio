<div>
    <flux:modal name="contact-modal" class="w-[90%] md:w-120">
        <form wire:submit.prevent='send'>
            <div class="space-y-6">
                <div>
                    <div class="flex items-center gap-x-[10px]">
                        <flux:avatar class="w-[30px] flex items-center" src="{{ asset('images/logos/logo.png') }}" />
                        <flux:text class="text-black font-MavenPro-SemiBold text-[1.2rem]">Get in Touch</flux:text>
                    </div>
                    <flux:heading class="font-Inconsolata-Black text-[1.8rem]" size="lg">Let’s Connect</flux:heading>
                    <flux:text class="mt-2 text-dark">Have a project in mind, a job opportunity, or just want to say hi? I'd love to hear from you.</flux:text>
                    <flux:text class="mt-2 text-dark">Fill out the form below and I’ll get back to you as soon as I can.</flux:text>
                </div>

                <flux:field class="mb-2">
                    <flux:label badge="Optional">Name</flux:label>
                    <flux:input type="text" wire:model='name' />
                </flux:field>
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

                    <button class="mt-2 cursor-pointer bg-pf-dark3 text-white p-[8px_20px] rounded-full hover:bg-pf-orange transition-all" type="submit">
                        <div wire:loading>
                            <x-fields.loading></x-fields.loading>
                        </div>
                        Send <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </form>
    </flux:modal>
</div>
