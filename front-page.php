<?php get_header(); ?>
<?php $hero_image_url = get_the_post_thumbnail_url(get_queried_object_id(), 'full'); ?>
<?php if (empty($hero_image_url)) {
    $hero_image_url = 'https://lh3.googleusercontent.com/aida-public/AB6AXuDVyYTLBSvQEVarHAiI_Bg-QQlm3va-Va7Ine8FmGGzR58_r4O6FJjB6dB0hTbb1G_8IHH_tqpAV5ZC0ZEtsFr9mEmeufgDr24YUd3uTcI59sE0skTo6gLIsUPcyOk61zFSN6PLEncuZ1gDT4bSGChhJGoFpIgtT7YFt_xzIoDVKTcf7qe2MzemVbTk41yanRlQaipyJB2ggnImiD1gI0tPoMp6s8njBCgJJIQX9lJ-pTTLEQPxc-1qg1GtRkEIUUh6L8h0L3-rdw';
} ?>
<main>
    <section class="relative bg-tarmac-black min-h-[80vh] flex items-center pt-24 pb-32 overflow-hidden border-b-4 border-secondary">
        <div class="absolute inset-0 z-0">
            <img alt="Hero Image" class="w-full h-full object-cover opacity-40" src="<?php echo esc_url($hero_image_url); ?>">
            <div class="absolute inset-0 bg-gradient-to-r from-tarmac-black via-tarmac-black/80 to-transparent"></div>
        </div>
        <div class="relative z-10 w-full px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 bg-secondary text-on-secondary px-3 py-1 mb-6 uppercase font-label-caps text-label-caps">
                    <span class="material-symbols-outlined text-[16px]">bolt</span>EXPERT AUTO ELECTRICAL SERVICE
                </div>
                <h1 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-lg text-overcast-white mb-6 uppercase">
                    Expert Auto Electrical Service in Melbourne
                </h1>
                <p class="font-body-lg text-body-lg text-steel-gray mb-10 max-w-xl">
                    Specializing in diagnostics, wiring repairs, and battery systems for all makes and models. Fast, reliable, and professional electrical solutions at our Melbourne workshop.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a class="inline-flex items-center justify-center bg-secondary text-on-secondary font-button-text text-button-text px-8 py-4 uppercase tracking-widest hover:bg-caution-red transition-all duration-300 hover:scale-[1.02]" href="#quote">
                        Get a Quote
                    </a>
                    <a class="inline-flex items-center justify-center border-2 border-outline-variant text-overcast-white font-button-text text-button-text px-8 py-4 uppercase tracking-widest hover:bg-surface-variant/10 transition-all duration-300" href="#services">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 bg-surface" id="services">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-lg text-primary uppercase mb-4">Our Services</h2>
                <div class="h-1 w-24 bg-secondary mx-auto mb-6"></div>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Precision automotive services delivered to your location. Industrial grade equipment for premium results.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-surface-container-lowest border border-outline-variant p-8 hover:border-secondary transition-colors duration-300 group cursor-pointer">
                    <div class="mb-6 flex justify-between items-start">
                        <div class="bg-surface-container p-4 inline-flex group-hover:bg-secondary group-hover:text-on-secondary transition-colors duration-300">
                            <span class="material-symbols-outlined text-[32px]">tire_repair</span>
                        </div>
                        <span class="font-label-caps text-label-caps text-secondary uppercase border border-secondary px-2 py-1">Workshop</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-3 uppercase">Comprehensive Diagnostics</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-6">Advanced vehicle electrical diagnostics and fault finding to pinpoint wiring, sensor, and ECU issues quickly.</p>
                    <div class="pt-4 border-t border-surface-variant flex justify-between items-center text-primary group-hover:text-secondary transition-colors">
                        <span class="font-button-text text-button-text uppercase">Book Now</span>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </div>
                </div>
                <div class="bg-surface-container-lowest border border-outline-variant p-8 hover:border-secondary transition-colors duration-300 group cursor-pointer">
                    <div class="mb-6 flex justify-between items-start">
                        <div class="bg-surface-container p-4 inline-flex group-hover:bg-secondary group-hover:text-on-secondary transition-colors duration-300">
                            <span class="material-symbols-outlined text-[32px]">balance</span>
                        </div>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-3 uppercase">Battery & Charging Systems</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-6">Battery testing, alternator repair and charging system maintenance to keep your vehicle starting strong.</p>
                    <div class="pt-4 border-t border-surface-variant flex justify-between items-center text-primary group-hover:text-secondary transition-colors">
                        <span class="font-button-text text-button-text uppercase">Book Now</span>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </div>
                </div>
                <div class="bg-surface-container-lowest border border-outline-variant p-8 hover:border-secondary transition-colors duration-300 group cursor-pointer">
                    <div class="mb-6 flex justify-between items-start">
                        <div class="bg-surface-container p-4 inline-flex group-hover:bg-secondary group-hover:text-on-secondary transition-colors duration-300">
                            <span class="material-symbols-outlined text-[32px]">build</span>
                        </div>
                        <span class="font-label-caps text-label-caps text-secondary uppercase border border-secondary px-2 py-1">Certified</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-3 uppercase">Engine Electronics & Lighting</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-6">Repair and replacement for starter motors, alternators, ECU faults, headlights, and interior electrical systems.</p>
                    <div class="pt-4 border-t border-surface-variant flex justify-between items-center text-primary group-hover:text-secondary transition-colors">
                        <span class="font-button-text text-button-text uppercase">Book Now</span>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 bg-surface-container-high border-t border-outline-variant" id="quote">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div>
                    <h2 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-lg text-primary uppercase mb-6">Request an Auto Electrical Service</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-8">Fill out the details below and our team will contact you shortly to confirm your appointment and provide a precise quote.</p>
                    <div class="space-y-6">
                        <?php $zeintheme_contact_address = zeintheme_get_contact_field('zeintheme_contact_address', null, '12-14 Motto Dr, Coolaroo VIC 3048'); ?>
                        <?php $zeintheme_open_hours = zeintheme_get_contact_field('zeintheme_open_hours', null, 'Mon-Fri: 9:00am - 5:30pm | Sat: 9:00am - 3:00pm'); ?>
                        <div class="flex items-center gap-4 border-l-4 border-secondary pl-4">
                            <span class="material-symbols-outlined text-[32px] text-secondary">location_on</span>
                            <div>
                                <h4 class="font-headline-sm text-headline-sm text-primary uppercase">Address</h4>
                                <p class="font-body-md text-body-md text-on-surface-variant"><?php echo wp_kses_post(nl2br(esc_html($zeintheme_contact_address))); ?></p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 border-l-4 border-secondary pl-4">
                            <span class="material-symbols-outlined text-[32px] text-secondary">schedule</span>
                            <div>
                                <h4 class="font-headline-sm text-headline-sm text-primary uppercase">Operating Hours</h4>
                                <p class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html($zeintheme_open_hours); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-8 border border-outline-variant shadow-sm relative">
                    <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-bl from-surface-variant to-transparent opacity-50"></div>
                    <form class="space-y-6 relative z-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block font-label-caps text-label-caps text-on-surface-variant uppercase mb-2">Full Name</label>
                                <input class="w-full bg-surface border-0 border-b-2 border-outline-variant focus:border-secondary focus:ring-0 px-0 py-3 font-body-md text-primary transition-colors" placeholder="John Doe" type="text">
                            </div>
                            <div>
                                <label class="block font-label-caps text-label-caps text-on-surface-variant uppercase mb-2">Phone Number</label>
                                <input class="w-full bg-surface border-0 border-b-2 border-outline-variant focus:border-secondary focus:ring-0 px-0 py-3 font-body-md text-primary transition-colors" placeholder="0400 000 000" type="tel">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block font-label-caps text-label-caps text-on-surface-variant uppercase mb-2">Vehicle Make &amp; Model</label>
                                <input class="w-full bg-surface border-0 border-b-2 border-outline-variant focus:border-secondary focus:ring-0 px-0 py-3 font-body-md text-primary transition-colors" placeholder="e.g. Toyota Hilux 2022" type="text">
                            </div>
                            <div>
                                <label class="block font-label-caps text-label-caps text-on-surface-variant uppercase mb-2">Suburb</label>
                                <input class="w-full bg-surface border-0 border-b-2 border-outline-variant focus:border-secondary focus:ring-0 px-0 py-3 font-body-md text-primary transition-colors" placeholder="e.g. Coolaroo" type="text">
                            </div>
                        </div>
                        <div>
                            <label class="block font-label-caps text-label-caps text-on-surface-variant uppercase mb-2">Service Required</label>
                            <input class="w-full bg-surface border-0 border-b-2 border-outline-variant focus:border-secondary focus:ring-0 px-0 py-3 font-body-md text-primary transition-colors" placeholder="e.g. Battery replacement, wiring repair, check engine light" type="text">
                        </div>
                        <!-- <div class="flex items-center gap-3 py-2">
                            <input id="parking-checkbox" type="checkbox" class="w-5 h-5 border-2 border-outline-variant text-secondary focus:ring-secondary rounded-sm bg-surface transition-colors cursor-pointer">
                            <label for="parking-checkbox" class="font-label-caps text-label-caps text-on-surface-variant uppercase cursor-pointer">Need a courtesy vehicle?</label>
                        </div> -->
                        <button class="w-full bg-primary text-on-primary font-button-text text-button-text py-4 uppercase tracking-widest hover:bg-secondary transition-colors duration-300 mt-4" type="button">Submit Request</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
