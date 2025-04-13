<div class="max-w-[400px] md:max-w-[1140px] m-auto py-[20px] md:py-[50px]" id="contact">
    @if ($data)
        @foreach ($data as $item)
            @if ($item['info_data'][0])
            <div class="flex flex-row flex-wrap">
                <div class="flex flex-col items-center w-full md:w-4/12">
                    <img src="{{ $item->profile }}" class="w-[230px] h-auto" alt="Portfolio_Image"
                        data-aos="fade-right"
                        data-aos-duration="1000"
                    >
                        <a href="{{ $item['info_data'][0]['hire_link'] }}" target="_blank" class="bg-pf-peach py-[10px] px-[20px] rounded-full my-5 font-MavenPro-Medium dark:border-pf-gray2 dark:text-pf-gray2 dark:bg-dark border hover:text-white hover:bg-pf-orange transition-all"
                            data-aos="fade-right"
                            data-aos-duration="2000"
                        >Let’s Work Together</a>
                </div>
                <div class="flex flex-col w-full md:w-8/12">
                    <h2 class="font-MavenPro-Black text-7xl text-center mx-auto"
                        data-aos="fade-left"
                        data-aos-duration="1000"
                    >{{ $item['info_data'][0]['heading'] }}</h2>
                    <div class="sub-heading font-Inconsolata-Black text-[1.8rem] font-bold text-center"
                        data-aos="fade-left"
                        data-aos-duration="1000"
                    >
                        {!! $item['info_data'][0]['sub_heading'] !!}
                    </div>
                    <p class="justify-start mt-5 my-2 font-MavenPro-Medium font-bold"
                        data-aos="fade-left"
                        data-aos-duration="2000"
                    >Personal Information:</p>
                    <div class="text-dark dark:text-pf-gray2"
                        data-aos="fade-left"
                        data-aos-duration="2000"
                    >
                        {!! $item['info_data'][0]['description'] !!}
                    </div>
                    <p class="text-center mt-5 font-MavenPro-Bold text-[1.3rem]"
                        data-aos="fade-left"
                        data-aos-duration="1000"
                    >Download</p>
                    <div class="flex justify-center my-5 gap-x-[10px]">
                        <a class="bg-pf-orange py-[8px] w-[120px] px-[20px] text-white rounded-full font-MavenPro-Bold text-center" href="{{ $item['info_data'][0]['resume'] }}" target="_blank"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                        >RESUME</a>
                        <a class="bg-pf-dark3 py-[8px] w-[120px] px-[20px] text-white rounded-full font-MavenPro-Bold text-center border dark:border-pf-gray2 dark:text-pf-gray2 dark:bg-dark" href="{{ $item['info_data'][0]['cv'] }}" target="_blank"
                            data-aos="fade-up"
                            data-aos-duration="2000"
                        >CV</a>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    @endif
</div>
