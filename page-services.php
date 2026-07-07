<?php
/*
Template Name: Services
*/
get_header(); ?>
<?php $hero_image_url = get_the_post_thumbnail_url(get_queried_object_id(), 'full'); ?>
<?php if (empty($hero_image_url)) {
    $hero_image_url = 'https://lh3.googleusercontent.com/aida-public/AB6AXuC_B9GZPNJr-AasoRnHVRcz_vqUfNFFGcKgkyIBjS75_WaE8oz9yGPT-kVXktVUtVfYo_-PzvlWlt3Q0TBV9nqmW20Wx0Qu00LOsjYRb0Zb3BusHi9z21gpRK3mVRgpM810DYa4pRfRRUmv3Mk5jtjhsMsAaV4KmEOpFgq0tooGcIAdSHXVM9-OBQxOMUkCCxEoYR1yFeJ53iom2ZwmyidBGcZ7MaDqjVCRklzymwr6mXQS2qmL_6HEvMnrqgw9zifPi6rjx5X1lw';
} ?>
<main>
    <section class="bg-tarmac-black text-overcast-white relative py-24 md:py-32 px-margin-mobile md:px-margin-desktop border-b-4 border-secondary overflow-hidden">
        <div class="absolute inset-0 opacity-40 mix-blend-overlay bg-cover bg-center" style="background-image: url('<?php echo esc_url($hero_image_url); ?>');"></div>
        <div class="relative z-10 max-w-container-max mx-auto text-center">
            <span class="inline-block bg-secondary text-on-secondary font-label-caps text-label-caps py-1 px-3 rounded mb-6 uppercase tracking-widest shadow-sm">Professional Fleet</span>
            <h1 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-lg font-extrabold mb-6 uppercase tracking-tight">Our Services</h1>
            <p class="font-body-lg text-body-lg text-surface-dim max-w-2xl mx-auto mb-10">We bring the workshop to you. Experience premium, high-performance tyre and wheel solutions engineered for both urban streets and off-road trails.</p>
            <button class="bg-secondary text-on-secondary font-button-text text-button-text py-4 px-8 rounded hover:bg-secondary-container transition-colors uppercase flex items-center gap-2 mx-auto">
                <span class="material-symbols-outlined">calendar_month</span> Book Mobile Service
            </button>
        </div>
    </section>
    <section class="py-16 md:py-24 px-margin-mobile md:px-margin-desktop bg-surface-bright">
        <div class="max-w-container-max mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <div class="md:col-span-8 bg-surface border border-steel-gray rounded overflow-hidden shadow-sm hover:shadow-md transition-shadow relative flex flex-col md:flex-row group">
                    <div class="absolute top-4 right-4 z-20">
                        <span class="bg-primary text-on-primary font-label-caps text-label-caps py-1 px-2 rounded flex items-center gap-1 uppercase"><span class="material-symbols-outlined text-[14px]">local_shipping</span> Mobile Unit</span>
                    </div>
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXu74ZlE7GvvevMLpaa2rHIU8h25thiD2TK_dxHi8CzKMsvBEO2JcTvmmgcKd9dH-9xBf59gu9hZqE1yCF90CrHzaVJgbe81Adf5tvK5clRw9MnP7t_jOJ4One-hGLT1GImbftFIqqSa0nqb3cmZ9e6IGJPxzD_2ZSOKJZJqWTDPL8VF9dhVi7dS0DJ1qtP3ORKgSd391pZBWu6fYYn9V-Akwpy2iraYncpnJVFi6IcLNYA283CCaTpQQMqh1io58bIaShcMVRyYaA');"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-tarmac-black/60 to-transparent"></div>
                    </div>
                    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center">
                        <h2 class="font-headline-md text-headline-md text-primary uppercase mb-4">Mobile Tyre Fitting</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6">Professional mounting and balancing directly at your home, office, or roadside. We arrive fully equipped to handle all sizes, from sleek street alloys to massive 4x4 mud terrains.</p>
                        <div class="space-y-3 mb-8">
                            <div class="flex items-start gap-3"><span class="material-symbols-outlined text-secondary mt-1">check_circle</span><span class="font-body-md text-body-md text-on-surface">Convenient on-site service</span></div>
                            <div class="flex items-start gap-3"><span class="material-symbols-outlined text-secondary mt-1">settings</span><span class="font-body-md text-body-md text-on-surface">Precision balancing included</span></div>
                        </div>
                        <a class="inline-flex items-center gap-2 text-secondary font-button-text text-button-text uppercase hover:text-secondary-container transition-colors" href="#">Request Fitting <span class="material-symbols-outlined">arrow_forward</span></a>
                    </div>
                </div>
                <div class="md:col-span-4 bg-tarmac-black text-overcast-white border border-surface-tint rounded overflow-hidden shadow-sm relative p-8 flex flex-col group">
                    <div class="mb-6 h-16 w-16 bg-surface-tint/20 rounded flex items-center justify-center border border-surface-tint/50 text-secondary"><span class="material-symbols-outlined text-4xl">tire_repair</span></div>
                    <h3 class="font-headline-sm text-headline-sm uppercase mb-4">Precision Balancing</h3>
                    <p class="font-body-md text-body-md text-surface-dim mb-6 flex-grow">Computerized dynamic balancing to eliminate vibrations, reduce uneven wear, and ensure flawlessly smooth highway driving.</p>
                    <div class="bg-surface-tint/10 border-l-2 border-secondary p-4 mb-6"><p class="font-label-caps text-label-caps text-surface-dim uppercase">Tech Spec</p><p class="font-body-md text-body-md text-overcast-white font-bold">Dynamic Spin Analysis</p></div>
                    <a class="inline-flex items-center gap-2 text-surface-dim font-button-text text-button-text uppercase hover:text-overcast-white transition-colors" href="#">Learn More <span class="material-symbols-outlined text-[18px]">open_in_new</span></a>
                </div>
                <div class="md:col-span-4 bg-surface border border-steel-gray rounded overflow-hidden shadow-sm relative p-8 flex flex-col group hover:border-secondary transition-colors">
                    <div class="mb-6 h-16 w-16 bg-surface-container-low rounded flex items-center justify-center text-primary"><span class="material-symbols-outlined text-4xl">build</span></div>
                    <h3 class="font-headline-sm text-headline-sm text-primary uppercase mb-4">Puncture Repair</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow">Safe, industry-standard plug and patch repairs for tubeless tyres. We assess structural integrity before proceeding to ensure safety.</p>
                    <ul class="space-y-2 mb-6 border-t border-surface-variant pt-4">
                        <li class="flex items-center gap-2 text-sm text-on-surface-variant"><span class="material-symbols-outlined text-[16px] text-primary">radio_button_checked</span>Plug &amp; Patch Method</li>
                        <li class="flex items-center gap-2 text-sm text-on-surface-variant"><span class="material-symbols-outlined text-[16px] text-primary">verified_user</span>Safety First Audit</li>
                    </ul>
                    <a class="inline-flex items-center gap-2 text-primary font-button-text text-button-text uppercase hover:text-secondary transition-colors mt-auto" href="#">Details <span class="material-symbols-outlined">arrow_forward</span></a>
                </div>
                <div class="md:col-span-8 bg-surface-container-low border border-steel-gray rounded overflow-hidden shadow-sm relative p-8 flex flex-col md:flex-row items-center gap-8 group">
                    <div class="w-full md:w-2/3">
                        <div class="flex items-center gap-3 mb-4"><span class="bg-caution-red text-white p-2 rounded-full flex items-center justify-center"><span class="material-symbols-outlined">warning</span></span><h3 class="font-headline-sm text-headline-sm text-primary uppercase">Emergency 24/7 Availability</h3></div>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6">Stuck on the roadside? Our emergency mobile units are dispatched rapidly to get you back moving safely. Available around the clock for urgent tyre replacements and repairs.</p>
                        <div class="flex flex-wrap gap-4"><span class="bg-surface border border-outline-variant font-label-caps text-label-caps px-3 py-1 rounded text-on-surface uppercase shadow-sm">Rapid Response</span><span class="bg-surface border border-outline-variant font-label-caps text-label-caps px-3 py-1 rounded text-on-surface uppercase shadow-sm">Any Terrain</span></div>
                    </div>
                    <div class="w-full md:w-1/3 flex justify-center md:justify-end">
                        <button class="w-full md:w-auto bg-primary text-on-primary font-button-text text-button-text py-4 px-6 rounded border-2 border-primary hover:bg-transparent hover:text-primary transition-all uppercase flex items-center justify-center gap-2 shadow-sm"><span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">phone_in_talk</span> Dispatch Unit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
