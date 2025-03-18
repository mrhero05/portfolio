<header>
    <section class="flex justify-center flex-wrap">
        <div class="w-full m-auto flex justify-center my-5 gap">
            <a href="#" class="font-Inconsolata-Black">Works</a>
            <a href="#">About</a>
            <a href="#">Resume</a>
        </div>
        <div class="block w-max md:absolute right-0">
            <flux:radio.group x-data variant="segmented" x-model="$flux.appearance" class="hover:cursor-pointer">
                <flux:radio value="light" icon="sun" />
                <flux:radio value="dark" icon="moon" />
                <flux:radio value="system" icon="computer-desktop" />
            </flux:radio.group>
        </div>
    </section>
</header>
