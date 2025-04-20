<div class="max-w-full m-auto py-[20px] md:py-[100px] dark:bg-dark2" id="about">
    <div class="md:max-w-[1140px] m-auto">
        <div class="text-center">
            <p class="font-MavenPro-SemiBold text-[1.2rem] bg-linear-to-r from-pf-orange to-pf-gray4 bg-clip-text text-transparent w-max m-auto"
                data-aos="fade-down"
                data-aos-duration="2000"
            >ABOUT</p>
            <h2 class="font-Inconsolata-Black text-[2rem] w-full text-dark dark:text-white"
                data-aos="fade-up"
                data-aos-duration="3000"
            >Frameworks & Tech Stack</h2>
        </div>
        <div class="">
            <div class="flex flex-wrap gap-[20px] justify-center m-[50px] mx-[20px] md:mx-[100px]">
                @if ($frameworks)
                    @foreach ($frameworks as $index => $item)
                        @php
                            $delay = rand(0, 100); // 0ms to 500ms random delay
                            $duration = rand(1500, 3000); // 1.5s to 3s random duration
                        @endphp
                        <a href="{{ $item->cta }}" target="_blank"
                            class="bounce-custom flex flex-wrap border border-pf-gray1 rounded-full p-[8px_20px] gap-x-[10px] dark:bg-dark"
                            style="animation-delay: {{ $delay }}ms; animation-duration: {{ $duration }}ms; {{ collect($item->custom_css)->pluck('name')->implode(';') }};"
                            data-aos="fade-up"
                            data-aos-duration="2000"
                            data-aos-delay="{{ $index * 100 }}"
                        >
                            @if ($item->frameworks_img)
                                <img src="{{ asset('storage/'.$item->frameworks_img) }}"
                                class="w-[25px] h-auto" alt="language_icon">
                            @endif
                            <p class="dark:text-pf-gray3">
                                {{ $item->title }}
                            </p>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
