<?php
?>
<footer class="bg-tarmac-black text-overcast-white border-t-4 border-secondary">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter px-margin-mobile md:px-margin-desktop py-12 max-w-container-max mx-auto text-center md:text-left">
        <div class="space-y-4">
            <img alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo" class="h-16 mx-auto md:mx-0 object-contain mb-4" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPhSuJVyJW_3r5VicOIHjzR0CvLIbUxSTLL1DqD5D7vtfCbPqftdxvbyL9CH0hlgZIDQ2kif9Wvli6UEWJkcWHIKL7HcHXrJaeKka_SARUC2u79TDAYWpzROpy5-O397abUfDJZxOxjUwCZTM4m6-S-HSaf2sNO8KyHObRfnRGQPdgJp2ypIyhTB3w0bI_LUCxsM3wUddelIw3P2btCpS1a9oJCm7mNhCMFW18ESaGqpvoZ2LEyyYI7EjJzccFQ0kRl_8n59Ip1w">
            <p class="font-headline-sm text-headline-sm font-bold text-overcast-white uppercase"><?php echo esc_html(get_bloginfo('name')); ?></p>
            <?php $footer_address = zeintheme_get_contact_field('zeintheme_contact_address', null, '12-14 Motto Dr, Coolaroo VIC 3048'); ?>
            <p class="font-body-md text-body-md text-steel-gray"><?php echo wp_kses_post(nl2br(esc_html($footer_address))); ?></p>
        </div>
        <div class="flex flex-col space-y-3">
            <h4 class="font-label-caps text-label-caps text-secondary uppercase tracking-widest mb-2">Links</h4>
            <a class="font-body-md text-body-md text-steel-gray hover:text-overcast-white hover:underline decoration-secondary decoration-2 transition-all" href="#">Privacy Policy</a>
            <a class="font-body-md text-body-md text-steel-gray hover:text-overcast-white hover:underline decoration-secondary decoration-2 transition-all" href="#">Terms of Service</a>
            <a class="font-body-md text-body-md text-steel-gray hover:text-overcast-white hover:underline decoration-secondary decoration-2 transition-all" href="#">Contact</a>
        </div>
        <div class="flex flex-col space-y-3">
            <h4 class="font-label-caps text-label-caps text-secondary uppercase tracking-widest mb-2">Connect</h4>
            <div class="flex justify-center md:justify-start gap-4">
                <a class="text-steel-gray hover:text-secondary transition-colors" href="#" aria-label="Email"><span class="material-symbols-outlined text-[28px]">mail</span></a>
                <a class="text-steel-gray hover:text-secondary transition-colors" href="#" aria-label="Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                <a class="text-steel-gray hover:text-secondary transition-colors" href="#" aria-label="Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
            </div>
        </div>
    </div>
    <div class="border-t border-surface-variant/20 py-6 text-center">
        <p class="font-body-md text-body-md text-steel-gray text-sm">© <?php echo date('Y'); ?> Zein Theme. Professional Mobile Service.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
