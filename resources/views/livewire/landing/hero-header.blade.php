<div class="max-w-[400px] md:max-w-[1140px] m-auto">
    @if ($data)
        @foreach ($data as $item)
        <div class="flex justify-center my-[150px_50px] md:my-[120px] content-center flex-wrap w-full md:w-[70%] mx-auto text-center relative">
            <p class="animate__animated animate__swing animate__infinite absolute top-[-50px] border border-pf-gray left-0 p-[5px_15px] rounded-full before:content-[''] before:h-[10px] before:w-[10px] before:bg-pf-green before:block flex items-center gap-x-[5px] before:rounded-full rotate-350 font-MavenPro-Medium text-[0.8rem] bg-pf-peach dark:text-pf-gray2 dark:bg-dark">{{ $item->float_text }}</p>
            <h2 class="font-Inconsolata-Black text-[2rem] w-full text-dark dark:text-white"
                data-aos="fade-down"
                data-aos-duration="1000"
            >{{ $item->title }}</h2>
            <div class="w-full font-MavenPro-Regular my-5 text-dark hero-desc dark:text-pf-gray3"
                data-aos="fade-up"
                data-aos-duration="2000"
            >{!! $item->description !!}</div>
            @if ($item->languages)
                <div class="flex flex-wrap gap-[10px] justify-center mt-5">
                    @foreach ($item->languages as $index => $lang)
                        <a href="https://{{ $lang['language_link'] }}" target="_blank"
                            class="flex flex-wrap border rounded-full p-[8px_20px] gap-x-[10px] dark:bg-dark"
                            style="border-color: {{ $lang['custom_css'] }}"
                            data-aos="fade-up"
                            data-aos-duration="2000"
                            data-aos-delay="{{ $index * 200 }}"
                        >
                            @if ($lang['language_icon'])
                                <img src="{{ asset('storage/' . $lang['language_icon']) }}"
                                class="w-[25px] h-auto" alt="language_icon">
                            @endif
                            <p class="dark:text-pf-gray3">
                                {{ $lang['language_text'] }}
                            </p>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
        @endforeach
    @endif
</div>
