<div class="max-w-[400px] md:max-w-[1140px] m-auto">
    <div class="text-center">
        <p class="font-MavenPro-SemiBold text-[1.2rem] bg-linear-to-r from-pf-orange to-pf-gray4 bg-clip-text text-transparent w-max m-auto">WORKS</p>
        <h2 class="font-Inconsolata-Black text-[2rem] w-full text-dark dark:text-white">Featured Projects</h2>
    </div>
    @if ($projects)
        @foreach ($projects as $item)
            <div class="flex flex-col p-5 bg-pf-light-orage rounded-[30px]">
                <p class="font-Inconsolata-Bold text-[1.5rem] text-dark">{{ $item->title }}</p>
                <div class="font-MavenPro-Regular text-dark project-desc">
                    {!! $item->description !!}
                </div>
                <div class="flex">
                    <a class="font-MavenPro-Bold hover:text-white hover:bg-pf-orange transition-all p-[5px_10px] rounded-full"
                    href="{{ $item->github_link }}" target="_blank">View Project</a>
                    <i class="fa-brands fa-github"></i>
                </div>
            </div>
        @endforeach
    @endif
</div>
