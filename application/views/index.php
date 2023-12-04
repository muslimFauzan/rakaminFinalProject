<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('layouts/header');
$this->load->view('pages/home');
$this->load->view('pages/section2');
$this->load->view('pages/section3');
$this->load->view('pages/section4');
$this->load->view('pages/section5');
$this->load->view('pages/section6');
$this->load->view('pages/section7');
$this->load->view('pages/section8');
$this->load->view('pages/section9');
$this->load->view('pages/section10');
$this->load->view('pages/section11');

?>

<div style="color: rgba(213,54,104,255);" class="fixed bottom-24 right-8 z-30 hover:scale-110 transform transition duration-300 ease-in-out" id="arrowUp">
    <a href="#home" class="border-2 h-12 w-12 rounded-full border-semiPurple flex justify-center items-center">
        <!-- <i class="fa-solid fa-headset fa-2x fa-pull-right"></i> -->
        <img src="<?= base_url() . 'assets/img/arrow-up-solid.svg' ?>" alt="" srcset="" class="h-9 w-auto">
    </a>
</div>
<div style="color: rgba(213,54,104,255);" class="fixed bottom-8 right-8 z-30 hover:scale-110 transform transition duration-300 ease-in-out">
    <button class="border-2 py-2 px-2 rounded-full border-semiPurple">
        <!-- <i class="fa-solid fa-headset fa-2x fa-pull-right"></i> -->
        <img src="<?= base_url() . 'assets/img/headset-solid.svg' ?>" alt="" srcset="" class="h-9 w-auto">
    </button>
</div>
<script>
    var posArrow = 0;
    var arrow = document.getElementById('arrowUp')
    window.addEventListener('scroll', function() {
        var lastPosArrow = window.scrollY;
        if (lastPosArrow > 200) {
            arrow.style.opacity = '100';
            arrow.style.transition = '0.5s';
        } else {
            arrow.style.opacity = '0'
            arrow.style.transition = '0.5s';
        }
    })
</script>
<?php
$this->load->view('layouts/footer')
?>