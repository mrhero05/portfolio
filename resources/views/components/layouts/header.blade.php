<header>
    <section class="flex justify-center flex-wrap">
        <div class="w-full my-5">
            <div class="border w-max m-auto flex justify-center p-[5px_10px] rounded-full border-dark dark:border-pf-gray2 gap-x-[10px] md:gap-x-[10px] text-dark dark:text-pf-gray2 font-MavenPro-Medium z-10 relative">
                <a href="#projects" class="hover:bg-pf-orange hover:text-white transition-all rounded-full p-[4px_10px]">Works</a>
                <a href="#about" class="hover:bg-pf-orange hover:text-white transition-all rounded-full p-[4px_10px]">About</a>
                <a href="#" class="hover:bg-pf-orange hover:text-white transition-all rounded-full p-[4px_10px]">Resume</a>
            </div>
        </div>
        <div class="block w-max md:fixed md:m-5 right-0 z-1">
            <flux:radio.group x-data variant="segmented" x-model="$flux.appearance" class="hover:cursor-pointer">
                <flux:radio value="light" icon="sun" />
                <flux:radio value="dark" icon="moon" />
                <flux:radio value="system" icon="computer-desktop" />
            </flux:radio.group>
        </div>
    </section>
</header>
