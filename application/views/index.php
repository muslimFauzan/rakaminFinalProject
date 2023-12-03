<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('layouts/header');
$this->load->view('pages/home');
$this->load->view('pages/section2');
$this->load->view('pages/section3');
$this->load->view('pages/section4');

?>
<div class="h-screen bg-white pb-7">
    <div style="color: rgba(213,54,104,255);" class="fixed bottom-8 right-8 z-30 hover:scale-110 transform transition duration-300 ease-in-out">
        <button class="border-2 py-2 pr-2 rounded-full border-semiPurple">
            <i class="fa-solid fa-headset fa-2x fa-pull-right"></i>
        </button>
    </div>

</div>
<?php
$this->load->view('layouts/footer')
?>