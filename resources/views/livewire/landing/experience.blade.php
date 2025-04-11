<div class="max-w-[400px] md:max-w-[1140px] m-auto py-[20px] md:py-[50px] experience-wrapper" id="experience">
    <div class="text-center">
        <p class="font-MavenPro-SemiBold text-[1.2rem] bg-linear-to-r from-pf-orange to-pf-gray4 bg-clip-text text-transparent w-max m-auto"
            data-aos="fade-down"
            data-aos-duration="2000"
        >EXPERIENCE</p>
        <h2 class="font-Inconsolata-Black text-[2rem] w-full text-dark dark:text-white"
            data-aos="fade-down"
            data-aos-duration="2000"
        >Previous Roles</h2>
    </div>
        @if ($experience)
            @foreach ($experience as $item)
            <div class="flex my-[50px] md:m-[50px] flex-col md:flex-row">
                <div class="flex flex-col w-full md:w-[40%]">
                    <p class="font-Inconsolata-SemiBold text-[1.5rem]"
                        data-aos="fade-right"
                        data-aos-duration="2000"
                    >{{ $item->position }} <span class="text-pf-orange2">{{ $item->company }}</span></p>
                    <p class="font-MavenPro-Regular text-dark dark:text-pf-gray2 mb-5"
                        data-aos="fade-right"
                        data-aos-duration="2000"
                    >{{ $item->date }}</p>
                </div>
                <div class="w-full md:w-[60%] description font-MavenPro-Medium text-dark dark:text-pf-gray2"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                >
                    {!! $item->description !!}
                </div>
            </div>
            @endforeach
        @endif
</div>
