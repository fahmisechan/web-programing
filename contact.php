<?php ob_start(); ?>

<div class="container-start bg-header">
    <h2>Contact Us</h2>
    <p class="pt-2">Pilih metode yang Anda inginkan untuk terhubung dengan tim customer service, atau Anda dapat
        mengetahui informasi lebih lanjut melalui halaman FAQ</p>
</div>

<div class="grid-container">
    <div class="grid-item-contact">
        <div class="container-start">
            <h3>Contact Us</h3>
            <div class="pt-2">
                Client advisor kami akan dengan senang hati menjawab pertanyaan Anda
            </div>
            <div class="contact-number mt-12 text-center">
                0813 8787 2904
            </div>
        </div>
    </div>
    <div class="grid-item-contact">
        <div class="container-start">
            <h3>Send Email</h3>
            <div class="pt-2">
                Client advisor kami akan dengan senang hati menjawab pertanyaan Anda
            </div>
            <div class="contact-number text-center mt-12">
                Kirim Email
            </div>
        </div>
    </div>
    <div class="grid-item-contact br-0">
        <div class="container-start">
            <h3>Send Message</h3>
            <div class="pt-2">
                Client advisor kami akan dengan senang hati membantu Anda
            </div>
            <div class="contact-number text-center mt-5">
                Whatssapp
            </div>
            <div class="contact-number text-center mt-3">
                Apple Message
            </div>
        </div>
    </div>
</div>
<div class="container-start bg-header"></div>
<div class="container-start">
    <h2 class="pt-3">JAM OPERASIONAL CLIENT SERVICE</h2>
    <p class="pt-2">Senin sampai Minggu: 9 pagi – 7 malam (kecuali hari libur nasional)</p>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>