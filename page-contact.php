<?php
/*
Template Name: Contact
*/
get_header(); ?>
<?php $hero_image_url = get_the_post_thumbnail_url(get_queried_object_id(), 'full'); ?>
<?php if (empty($hero_image_url)) {
    $hero_image_url = 'https://lh3.googleusercontent.com/aida-public/AB6AXuB3LS6_RdMOD276AIYvsyhAgUmjf5_X0TcOO4tVL1ErsKYnqTG3Dwpprskz3TLXYB9BZsaiFcKJ-kk_qBnf_e22DtLoXRkhMwLcBpftD1d0cL8MyKawQRT9_SUxNLaXm0ZHq2JIz-DcY1cEIsSr_Yt3wM9e8R-dOSNG6thvAWxTAPOQiY7U9NptAvbCoaE6bP0-EuHIBXjUCxsrRCjUgrBRL4TpCtTiQItd7Yhkup2EkA3UmSGSyuw9aIVaBBcpYsoYbUJ9ln4rVg';
} ?>
<main class="min-h-screen">
    <section class="bg-tarmac-black text-overcast-white py-16 md:py-24 px-margin-mobile md:px-margin-desktop relative overflow-hidden border-b-4 border-secondary">
        <div class="absolute inset-0 z-0">
            <img alt="Hero Image" class="w-full h-full object-cover opacity-40" src="<?php echo esc_url($hero_image_url); ?>">
            <div class="absolute inset-0 bg-tarmac-black/70"></div>
        </div>
        <div class="max-w-container-max mx-auto relative z-10 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <?php $contact_page_id = get_queried_object_id(); ?>
                <?php $phone_number = zeintyres_get_contact_field('zeintyres_phone_number', $contact_page_id, '0400 000 000'); ?>
                <?php $contact_address = zeintyres_get_contact_field('zeintyres_contact_address', $contact_page_id, '12-14 Motto Dr, Coolaroo VIC 3048'); ?>
                <?php $open_hours = zeintyres_get_contact_field('zeintyres_open_hours', $contact_page_id, 'Mon-Fri: 9:00am - 5:30pm | Sat: 9:00am - 3:00pm'); ?>

                <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg mb-6">Contact Zein Tyres &amp; Wheels</h1>
                <p class="font-body-lg text-body-lg text-surface-variant mb-8 max-w-lg">Get in touch for expert mobile tyre fitting, wheel alignments, and professional automotive advice. We're here to keep you moving.</p>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <span class="material-symbols-outlined text-secondary text-3xl" style="font-variation-settings: 'FILL' 1;">phone_in_talk</span>
                        <div>
                            <h3 class="font-label-caps text-label-caps text-outline-variant uppercase mb-1">Call Us Directly</h3>
                            <a class="font-headline-md text-headline-md font-bold hover:text-secondary transition-colors" href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone_number)); ?>"><?php echo esc_html($phone_number); ?></a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <span class="material-symbols-outlined text-secondary text-3xl" style="font-variation-settings: 'FILL' 1;">location_on</span>
                        <div>
                            <h3 class="font-label-caps text-label-caps text-outline-variant uppercase mb-1">Workshop Address</h3>
                            <p class="font-body-lg text-body-lg"><?php echo wp_kses_post(nl2br(esc_html($contact_address))); ?></p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <span class="material-symbols-outlined text-secondary text-3xl" style="font-variation-settings: 'FILL' 1;">schedule</span>
                        <div>
                            <h3 class="font-label-caps text-label-caps text-outline-variant uppercase mb-1">Operating Hours</h3>
                            <p class="font-body-lg text-body-lg"><?php echo wp_kses_post(nl2br(esc_html($open_hours))); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block w-full h-[400px] bg-surface-container-lowest rounded-lg overflow-hidden border border-surface-tint">
                <div class="w-full h-full bg-surface-dim flex items-center justify-center">
                    <span class="material-symbols-outlined text-outline text-6xl opacity-50">map</span>
                    <img alt="Map" class="w-full h-full object-cover opacity-50" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3LS6_RdMOD276AIYvsyhAgUmjf5_X0TcOO4tVL1ErsKYnqTG3Dwpprskz3TLXYB9BZsaiFcKJ-kk_qBnf_e22DtLoXRkhMwLcBpftD1d0cL8MyKawQRT9_SUxNLaXm0ZHq2JIz-DcY1cEIsSr_Yt3wM9e8R-dOSNG6thvAWxTAPOQiY7U9NptAvbCoaE6bP0-EuHIBXjUCxsrRCjUgrBRL4TpCtTiQItd7Yhkup2EkA3UmSGSyuw9aIVaBBcpYsoYbUJ9ln4rVg" />
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 md:py-24 px-margin-mobile md:px-margin-desktop bg-surface">
        <div class="max-w-container-max mx-auto">
            <div class="bg-surface-container-lowest border-2 border-steel-gray rounded-DEFAULT shadow-sm max-w-3xl mx-auto overflow-hidden">
                <div class="bg-primary text-on-primary p-6 md:p-8 border-b-2 border-secondary">
                    <h2 class="font-headline-md text-headline-md font-bold mb-2 flex items-center gap-2"><span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">build_circle</span> Request a Booking</h2>
                    <p class="font-body-md text-body-md text-surface-variant">Fill out the details below and our team will get back to you shortly to confirm your appointment.</p>
                </div>
                <form class="p-6 md:p-8 space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-label-caps text-label-caps text-on-surface-variant uppercase mb-2" for="fullName">Full Name</label>
                            <input class="w-full bg-surface border-0 border-b-2 border-outline-variant focus:border-tertiary-fixed-dim focus:ring-0 px-4 py-3 font-body-md text-body-md text-on-surface transition-colors" id="fullName" placeholder="John Doe" type="text">
                        </div>
                        <div>
                            <label class="block font-label-caps text-label-caps text-on-surface-variant uppercase mb-2" for="phone">Phone Number</label>
                            <input class="w-full bg-surface border-0 border-b-2 border-outline-variant focus:border-tertiary-fixed-dim focus:ring-0 px-4 py-3 font-body-md text-body-md text-on-surface transition-colors" id="phone" placeholder="0400 000 000" type="tel">
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-label-caps text-label-caps text-on-surface-variant uppercase mb-2" for="vehicle">Vehicle Make &amp; Model</label>
                            <input class="w-full bg-surface border-0 border-b-2 border-outline-variant focus:border-tertiary-fixed-dim focus:ring-0 px-4 py-3 font-body-md text-body-md text-on-surface transition-colors" id="vehicle" placeholder="e.g. Ford Ranger 2022" type="text">
                        </div>
                        <div>
                            <label class="block font-label-caps text-label-caps text-on-surface-variant uppercase mb-2" for="suburb">Suburb (For Mobile Service)</label>
                            <input class="w-full bg-surface border-0 border-b-2 border-outline-variant focus:border-tertiary-fixed-dim focus:ring-0 px-4 py-3 font-body-md text-body-md text-on-surface transition-colors" id="suburb" placeholder="e.g. Coolaroo" type="text">
                        </div>
                    </div>
                    <div>
                        <label class="block font-label-caps text-label-caps text-on-surface-variant uppercase mb-2" for="service">Tyre Size or Required Service</label>
                        <textarea class="w-full bg-surface border-0 border-b-2 border-outline-variant focus:border-tertiary-fixed-dim focus:ring-0 px-4 py-3 font-body-md text-body-md text-on-surface transition-colors resize-none" id="service" placeholder="Please describe the service needed or enter your tyre size (e.g. 265/65R17)" rows="3"></textarea>
                    </div>
                    <div class="flex items-center gap-3 pt-2">
                        <input class="w-5 h-5 rounded-DEFAULT border-2 border-outline text-secondary focus:ring-secondary bg-surface" id="parking" type="checkbox">
                        <label class="font-body-md text-body-md text-on-surface" for="parking">Off-street parking available (required for mobile service)</label>
                    </div>
                    <div class="pt-6">
                        <button class="w-full md:w-auto bg-secondary text-on-secondary font-button-text text-button-text px-8 py-4 rounded-DEFAULT hover:bg-secondary-container transition-colors uppercase tracking-wider flex justify-center items-center gap-2" type="submit">
                            Submit Request
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">send</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
