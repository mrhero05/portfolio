<div class="max-w-[400px] md:max-w-[1140px] m-auto">
    <div class="text-center">
        <p class="font-MavenPro-SemiBold text-[1.2rem] bg-linear-to-r from-pf-orange to-pf-gray4 bg-clip-text text-transparent w-max m-auto">WORKS</p>
        <h2 class="font-Inconsolata-Black text-[2rem] w-full text-dark dark:text-white">Featured Projects</h2>
    </div>
    @if ($projects)
        <div class="my-[50px] flex flex-wrap gap-[20px]">
        @foreach ($projects as $item)
            <div class="flex flex-col p-5 bg-pf-light-orage rounded-[30px] w-full md:w-[calc(33.3%-13px)]">
                <p class="font-Inconsolata-Bold text-[1.5rem] text-dark">{{ $item->title }}</p>
                <div class="font-MavenPro-Regular text-dark project-desc">
                    {!! $item->description !!}
                </div>
                <div class="flex items-center mt-auto">
                    @if ($item->project_link)
                        <a class="font-MavenPro-Bold hover:text-white hover:bg-pf-orange transition-all p-[5px_10px] rounded-full"
                        href="{{ $item->github_link }}" target="_blank">Visit Project</a>
                    @endif
                    @if ($item->github_link)
                        <a href="{{ $item->github_link }}" class="ml-auto text-[1.5rem] hover:text-pf-orange" target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    @endif
                    @if ($item->project_images)
                        <a href="{{ url($item->project_images[0]) }}" class=" text-[1.5rem] hover:text-pf-orange ml-5" data-lightbox="{{ $item->title }}">
                            <i class="fa-solid fa-images"></i>
                        </a>
                        @foreach ($item->project_images as $index => $images)
                            @if ($index > 0)
                                <a href="{{ url($images) }}" class="hidden" data-lightbox="{{ $item->title }}"></a>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        @endforeach
        </div>
    @endif
</div>
