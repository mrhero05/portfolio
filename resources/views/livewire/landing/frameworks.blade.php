<div class="max-w-full m-auto py-[20px] md:py-[100px] dark:bg-dark2" id="about">
    <div class="md:max-w-[1140px] m-auto">
        <div class="text-center">
            <p class="font-MavenPro-SemiBold text-[1.2rem] bg-linear-to-r from-pf-orange to-pf-gray4 bg-clip-text text-transparent w-max m-auto">ABOUT</p>
            <h2 class="font-Inconsolata-Black text-[2rem] w-full text-dark dark:text-white">Frameworks & Tech Stack</h2>
        </div>
        <div class="">
            <div class="flex flex-wrap gap-[10px] justify-center m-[50px] mx-[20px] md:mx-[100px]">
                @if ($frameworks)
                    @foreach ($frameworks as $item)
                        <a href="{{ $item->cta }}" target="_blank"
                            class="flex flex-wrap border border-pf-gray1 rounded-full p-[8px_20px] gap-x-[10px] dark:bg-dark"
                            style="{{ collect($item->custom_css)->pluck('name')->implode(';') }}"
                        >
                            @if ($item->frameworks_img)
                                <img src="{{ url($item->frameworks_img) }}"
                                class="w-[25px] h-auto" alt="language_icon">
                            @endif
                            <p class="">
                                {{ $item->title }}
                            </p>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
