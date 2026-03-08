<section class="px-4 md:px-20 py-8" id="beranda">
    <div class="relative overflow-hidden rounded-xl bg-navy-custom">
        <div class="flex min-h-[520px] flex-col gap-6 bg-cover bg-center bg-no-repeat items-center justify-center p-8 text-center"
            style='background-image: linear-gradient(rgba(0, 33, 71, 0.75) 0%, rgba(0, 33, 71, 0.9) 100%), url("{{ $hero['image'] }}");'>
            <div class="max-w-3xl flex flex-col gap-4">
                <span class="text-gold-custom font-bold tracking-widest uppercase text-sm">{{ $hero['eyebrow'] }}</span>
                <h2 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight">{{ $hero['title'] }}
                </h2>
                <p class="text-slate-200 text-lg md:text-xl font-normal leading-relaxed">{{ $hero['description'] }}</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 mt-4">
                <a class="inline-flex min-w-[200px] items-center justify-center rounded-lg h-14 px-8 bg-primary text-white text-base font-bold hover:bg-primary/90 transition-colors"
                    href="{{ $hero['primaryCta']['url'] }}">{{ $hero['primaryCta']['label'] }}</a>
                <a class="inline-flex min-w-[200px] items-center justify-center rounded-lg h-14 px-8 bg-white/10 text-white border border-white/20 text-base font-bold backdrop-blur-sm hover:bg-white/20 transition-all"
                    href="{{ $hero['secondaryCta']['url'] }}">{{ $hero['secondaryCta']['label'] }}</a>
            </div>
        </div>
    </div>
</section>
