<?php
/*
Template Name: About Us
*/
get_header(); ?>
<?php $hero_image_url = get_the_post_thumbnail_url(get_queried_object_id(), 'full'); ?>
<?php if (empty($hero_image_url)) {
    $hero_image_url = 'https://lh3.googleusercontent.com/aida-public/AB6AXuBaRyhmf8n_shAmUCTw_S6y9fcBpLnkq7M5PHAEDoa-0R2_l74uiguGjikOqIyz_gTwjDioC1ypw-qPsbbVYqUORP0AVjwGKlsP4slu4alRNfUndPszptvojZNJ0R2BJ2mR1v8r5zgfYKD_HfInUeo1G8hHINDKe-iPkXocRJGRs4_KThkiTIxWI-YtxPkKSOXzD8s73s1dExa_MVWtQ4Y9R9Yk9MCHdkRNqLMAI3p2hEqKXbRgkTFdbVeDdJb_UW5DZZZULkPhUA';
} ?>
<main class="flex-grow">
    <section class="bg-tarmac-black text-overcast-white relative py-24 px-margin-desktop overflow-hidden border-b-4 border-secondary">
        <div class="absolute inset-0 opacity-40 mix-blend-overlay bg-cover bg-center" style="background-image: url('<?php echo esc_url($hero_image_url); ?>');"></div>
        <div class="relative z-10 max-w-container-max mx-auto text-center md:text-left flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg mb-6">Built for the Road.<br><span class="text-secondary">Delivered to You.</span></h1>
                <p class="font-body-lg text-body-lg text-surface-dim mb-8 max-w-xl">We are Melbourne's premier mobile tyre and wheel service, bringing industrial-grade expertise directly to your driveway, worksite, or roadside emergency.</p>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <div class="w-full max-w-md bg-surface p-2 rounded shadow-sm border border-outline">
                    <img alt="Zein Tyres & Wheels Logo" class="w-full h-auto object-cover rounded" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkBNCMSIfpunLET0Jmgbnu-pdUNiggFfesJwqhnE35Ng1AsGaYz3oy8Yymb2L0MrmzxGRKWgaZ2mLhOtFdp-PItjbZmQRIKJaQMc7VoiZbz_mXrO3G-ia9M26sW-YLYnVKRj0TP4zyhx0Nn4I_WhWCybvlwfm0ujT8piWCD4a4yoMoyUumbuaYXXtqNwui7c4uFv9SvPz4E66EXEh0J4lTRG8DRBHdbJSbvNkLTbVEiwJFHjnKBjX7gl9N2JL1n4ojKsOATrz99Q">
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-margin-desktop bg-surface max-w-container-max mx-auto">
        <div class="mb-16 text-center">
            <h2 class="font-headline-md text-headline-md text-primary mb-4">The Mobile Advantage</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Skip the waiting room. Our fully-equipped vans operate as rolling workshops, providing top-tier service without disrupting your day.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-surface-container-low p-8 border border-steel-gray rounded hover:border-secondary transition-colors group">
                <div class="w-16 h-16 bg-primary text-on-primary rounded flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors">
                    <span class="material-symbols-outlined text-3xl">schedule</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm mb-3">Time-Saving</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Your time is valuable. We come to your home or office, allowing you to carry on with your day while we handle the heavy lifting.</p>
            </div>
            <div class="bg-surface-container-low p-8 border border-steel-gray rounded hover:border-secondary transition-colors group">
                <div class="w-16 h-16 bg-primary text-on-primary rounded flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors">
                    <span class="material-symbols-outlined text-3xl">build</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm mb-3">Zero Shop Visits</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Forget arranging transport or sitting in waiting areas. We bring the entire tyre shop experience directly to your location.</p>
            </div>
            <div class="bg-surface-container-low p-8 border border-steel-gray rounded hover:border-secondary transition-colors group">
                <div class="w-16 h-16 bg-caution-red text-on-error rounded flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-3xl">emergency</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm mb-3">Emergency Assist</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Stuck on the side of the road? Our rapid-response units are equipped to get you back on tarmac safely and efficiently.</p>
            </div>
        </div>
    </section>
    <section class="py-24 bg-surface-container px-margin-desktop border-y border-steel-gray">
        <div class="max-w-container-max mx-auto flex flex-col md:flex-row gap-12 items-center">
            <div class="md:w-1/2">
                <span class="inline-block bg-primary text-on-primary font-label-caps text-label-caps px-3 py-1 rounded mb-4">COVERAGE AREA</span>
                <h2 class="font-headline-md text-headline-md text-primary mb-6">Dominating the Northern Suburbs</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-6">Based in Coolaroo, we specialize in rapid deployment across Melbourne's Northern Suburbs. Our localized focus ensures faster response times and reliable service when you need it most.</p>
                <ul class="space-y-3 font-body-md text-body-md text-on-surface-variant">
                    <li class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">location_on</span> Coolaroo (HQ)</li>
                    <li class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">location_on</span> Broadmeadows</li>
                    <li class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">location_on</span> Campbellfield</li>
                    <li class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">location_on</span> Epping &amp; Surrounds</li>
                </ul>
            </div>
            <div class="md:w-1/2 w-full h-[400px] bg-surface border border-steel-gray rounded relative overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCeDYqEhBP0_Y8TNsobZXJQtMvTcLFKDYAIkegmKv9nfeSUZ5rM_jNtg8WR4rvk3W6W16lA_9T1q4EuYNF5GkuCtAqeC_aJ1fCIJL66hbLbE8jjnOmz914MOcQY8yyGfE5SEYf9M8n5GVd6j9sus58_OeehWRmA5oOOvu9G6mgJ8t9M1WOAPD8ru9O5nxymXesCr4KzAtAAy42Yl6jnuhhNWpt-EU0CIWXdLuXRv4wUQhGsOfjQ-Ih_1YgqITiyqjHYDdQftWvZzQ');"></div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
