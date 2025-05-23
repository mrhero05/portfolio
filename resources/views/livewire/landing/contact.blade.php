<div class="max-w-[400px] md:max-w-[1140px] m-auto py-[20px] md:py-[50px]">
    <div class="w-full flex bg-linear-to-r from-pf-orange to-pf-gray4 p-[40px] rounded-[30px] items-center flex-col md:flex-row flex-wrap gap-y-[20px]"
        data-aos="fade-up"
        data-aos-duration="1000"
    >
        <div class="flex flex-col text-center md:text-left">
            <p class="font-Inconsolata-Black text-[1.5rem] text-white">Say Hello!</p>
            <p class="text-white font-MavenPro-Medium">Reach out to me for project proposals, inquiries, or just to say hello.</p>
        </div>
        <x-button label="Contact me" class="font-MavenPro-Bold text-[1rem] animate-pulse hover:cursor-pointer ml-0 md:ml-auto text-white !bg-pf-dark3 !p-[10px_30px] h-max flex gap-x-[10px] items-center hover:underline" rounded="full" right-icon="arrow-long-right" x-on:click="$openModal('contactModal')" />
    </div>
    <div class="flex my-[50px] text-center flex-col items-center">
        <p class="font-MavenPro-Bold text-[3.5rem] text-pf-orange"
            data-aos="fade-right"
            data-aos-duration="1000"
        >Get in Touch</p>
        <p class="font-MavenPro-Regular text-pf-gray5 dark:text-pf-gray2"
            data-aos="fade-left"
            data-aos-duration="1000"
        >Contact me through any of these platforms</p>
        <div class="flex mt-[20px] gap-x-[10px]">
            @if (isset($contacts[0]))
                @foreach ($contacts[0]['social_data'] as $index => $contact)
                    <a href="{{ $contact['link'] }}" target="_blank"
                        data-aos="fade-up"
                        data-aos-duration="2000"
                        data-aos-delay="{{ $index * 100 }}"
                    >
                        <div class="group transition-all dark:bg-transparent dark:border-pf-gray2 bg-white border-[1px] hover:bg-pf-orange border-pf-gray6 w-[45px] h-[45px] rounded-full relative">
                            <div class="group-hover:text-white absolute dark:text-pf-gray2 text-pf-black translate-[-50%] left-[50%] top-[50%]">
                                {!! $contact['icon'] !!}
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
    <div class="footer text-center text-dark dark:text-pf-gray2">
        <p>© 2025 Ogie Sanchez</p>
    </div>
</div>
