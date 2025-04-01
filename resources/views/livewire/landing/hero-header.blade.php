<div class="max-w-[400px] md:max-w-[1140px] m-auto">
    @if ($data)
        @foreach ($data as $item)
        <div class="flex justify-center my-[150px] md:my-[120px] content-center flex-wrap w-full md:w-[50%] mx-auto text-center relative">
            <p class="absolute top-[-50px] border border-pf-gray left-0 p-[5px_15px] rounded-full before:content-[''] before:h-[10px] before:w-[10px] before:bg-pf-green before:block flex items-center gap-x-[5px] before:rounded-full rotate-350 font-MavenPro-Medium text-[0.8rem] bg-pf-peach dark:text-pf-gray2 dark:bg-dark">{{ $item->float_text }}</p>
            <h2 class="font-Inconsolata-Black text-[2rem] w-full text-dark dark:text-white">{{ $item->title }}</h2>
            <div class="w-full font-MavenPro-Regular my-5 text-dark hero-desc dark:text-pf-gray3">{!! $item->description !!}</div>
            @if ($item->languages)
                <div class="flex flex-wrap gap-[10px] justify-center mt-5">
                    @foreach ($item->languages as $lang)
                        <a href="https://{{ $lang['language_link'] }}" target="_blank"
                        class="flex flex-wrap border rounded-full p-[8px_20px] gap-x-[10px] dark:bg-dark"
                        style="border-color: {{ $lang['custom_css'] }}"
                        >
                            @if ($lang['language_icon'])
                                <img src="{{ asset('storage/' . $lang['language_icon']) }}"
                                class="w-[25px] h-auto" alt="language_icon">
                            @endif
                            <p class="">
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
