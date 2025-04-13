<div class="max-w-[400px] md:max-w-[1140px] m-auto py-[20px] md:py-[50px]" id="projects">
    <div class="text-center">
        <p class="font-MavenPro-SemiBold text-[1.2rem] bg-linear-to-r from-pf-orange to-pf-gray4 bg-clip-text text-transparent w-max m-auto"
            data-aos="fade-down"
            data-aos-duration="1000"
        >WORKS</p>
        <h2 class="font-Inconsolata-Black text-[2rem] w-full text-dark dark:text-white"
            data-aos="fade-up"
            data-aos-duration="2000"
        >Featured Projects</h2>
    </div>
    @if ($projects)
        <div class="my-[50px] flex flex-wrap gap-[20px] text">
        @foreach ($projects as $index => $item)
            <div class="transition-all flex shadow-lg flex-col p-5 bg-pf-light-orage hover:bg-pf-orange3 dark:hover:bg-dark2 dark:bg-dark rounded-[30px] w-full md:w-[calc(33.3%-13px)]"
                data-aos="fade-up"
                data-aos-duration="2000"
                data-aos-delay="{{ $index * 100 }}"
            >
                <p class="font-Inconsolata-Bold text-[1.5rem] text-dark dark:text-white">{{ $item->title }}</p>
                <div class="font-MavenPro-Regular text-dark dark:text-pf-gray2 project-desc">
                    {!! $item->description !!}
                </div>
                <div class="flex items-center mt-auto">
                    @if ($item->project_link)
                        <a class="font-MavenPro-Bold text-dark dark:text-pf-gray2 hover:text-white hover:bg-pf-orange transition-all p-[5px_10px] rounded-full"
                        href="{{ $item->project_link }}" target="_blank">Visit Project</a>
                    @endif
                    <div class="ml-auto">
                        @if ($item->github_link)
                            <flux:tooltip content="Visit on Github">
                                <a href="{{ $item->github_link }}" class="dark:text-pf-gray2 text-[1.5rem] hover:text-pf-orange transition-all" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </flux:tooltip>
                        @endif
                        @if ($item->project_images)
                            <flux:tooltip content="View Project Image">
                                <a href="{{ asset('storage/'.$item->project_images[0]) }}" class="dark:text-pf-gray2 text-[1.5rem] hover:text-pf-orange ml-3 transition-all" data-lightbox="{{ $item->title }}">
                                    <i class="fa-solid fa-images"></i>
                                </a>
                            </flux:tooltip>
                            @foreach ($item->project_images as $index => $images)
                                @if ($index > 0)
                                    <a href="{{ asset('storage'/$images) }}" class="hidden" data-lightbox="{{ $item->title }}"></a>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    @endif
</div>
