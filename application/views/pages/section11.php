<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div>
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                <g class="wave" fill="#f8fafc">
                    <path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"></path>
                </g>
                <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                    <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                        <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                        <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                        <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                    </g>
                </g>
            </g>
        </g>
    </svg>
</div>
<section class="h-screen">
    <div>
        <div class="flex justify-center">
            <div class="w-3/4 text-center text-5xl font-bold">
                Pertanyaan seputar Layanan Web Hosting <span class="text-black">Qwords</span>
            </div>
        </div>
        <div class="cursor-pointer mt-12" id="question-1" onclick="hide(1)">
            <div class=" w-4/5 h-auto py-4 px-4 border border-white rounded-xl  mx-auto">
                <div class="flex justify-between">
                    <span class="text-center font-bold text-xl">
                        Apa itu web hosting?
                    </span>
                    <div>
                        <img src="<?= base_url() . 'assets/img/circle-down-solid.svg' ?>" alt="" class="w-7 h-auto">
                    </div>
                </div>
                <div class="flex justify-center mt-2 hidden " id="hr-1">
                    <hr class="relative w-full border-b border-gray-100 my-0 py-0" />
                </div>
                <div class="mt-4 font-bold text-lg hidden " id="desc-1">
                    Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.
                </div>
            </div>
        </div>
        <div class="cursor-pointer mt-12" id="question-2" onclick="hide(2)">
            <div class=" w-4/5 h-auto py-4 px-4 border border-white rounded-xl  mx-auto">
                <div class="flex justify-between">
                    <span class="text-center font-bold text-xl">
                        Ada berapa jenis hosting di Qwords??
                    </span>
                    <div>
                        <img src="<?= base_url() . 'assets/img/circle-down-solid.svg' ?>" alt="" class="w-7 h-auto">
                    </div>
                </div>
                <div class="flex justify-center mt-2 hidden " id="hr-2">
                    <hr class="relative w-full border-b border-gray-100 my-0 py-0" />
                </div>
                <div class="mt-4 font-bold text-lg hidden " id="desc-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, sed et iusto impedit voluptatum fugiat a eum ad expedita quasi, exercitationem doloribus eaque nisi eveniet ratione inventore consequatur iste at incidunt, voluptate saepe. Assumenda sunt adipisci mollitia autem nulla quisquam nam accusantium, incidunt provident ipsam maxime quos deleniti exercitationem at non natus accusamus id aperiam eaque reiciendis libero praesentium sit? Tempore reiciendis omnis, tenetur nihil fuga sequi vero molestias commodi ipsam ut totam tempora libero iusto ipsum velit minima reprehenderit doloribus non consequatur accusamus! Deleniti tempora, voluptates, delectus nobis debitis ducimus magni consectetur itaque quaerat sint rerum iste provident alias.
                </div>
            </div>
        </div>
        <div class="cursor-pointer mt-12" id="question-3" onclick="hide(3)">
            <div class=" w-4/5 h-auto py-4 px-4 border border-white rounded-xl  mx-auto">
                <div class="flex justify-between">
                    <span class="text-center font-bold text-xl">
                        Apa kelebihan dari cloud hosting Qwords?
                    </span>
                    <div>
                        <img src="<?= base_url() . 'assets/img/circle-down-solid.svg' ?>" alt="" class="w-7 h-auto">
                    </div>
                </div>
                <div class="flex justify-center mt-2 hidden " id="hr-3">
                    <hr class="relative w-full border-b border-gray-100 my-0 py-0" />
                </div>
                <div class="mt-4 font-bold text-lg hidden " id="desc-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, hic voluptas! Cumque, dolor animi eligendi dolorem assumenda molestiae minima tempore quasi voluptates. Animi vero, excepturi explicabo ea, hic ipsam, et at nemo quidem optio aspernatur facere voluptatum eveniet sunt beatae. Quisquam enim minima quaerat earum illo eveniet possimus! Ea quod quidem debitis architecto tempore nulla autem consequuntur, nam molestias quia tenetur a obcaecati doloribus repellat velit corrupti exercitationem. Dolores voluptatum aspernatur adipisci ex. Dolorem suscipit ullam, doloribus quas sed magni voluptatem quasi exercitationem, laudantium necessitatibus magnam possimus ad repudiandae officiis cum quaerat quia sequi ipsum assumenda. Magni facilis totam eum dolor veniam error? Beatae id assumenda illo aut ex praesentium atque quia rerum! Saepe iure quod maxime! Libero nulla molestiae voluptatibus repellat maxime blanditiis, dignissimos, fuga ad aperiam placeat recusandae eaque nam quos et alias voluptatum rerum corporis architecto ducimus tempore sed ex? Reprehenderit quos vero architecto debitis veniam corporis?
                </div>
            </div>
        </div>
        <div class="cursor-pointer mt-12" id="question-4" onclick="hide(4)">
            <div class=" w-4/5 h-auto py-4 px-4 border border-white rounded-xl  mx-auto">
                <div class="flex justify-between">
                    <span class="text-center font-bold text-xl">
                        Mengapa saya perlu web hosting?
                    </span>
                    <div>
                        <img src="<?= base_url() . 'assets/img/circle-down-solid.svg' ?>" alt="" class="w-7 h-auto">
                    </div>
                </div>
                <div class="flex justify-center mt-2 hidden " id="hr-4">
                    <hr class="relative w-full border-b border-gray-100 my-0 py-0" />
                </div>
                <div class="mt-4 font-bold text-lg hidden " id="desc-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo labore quibusdam doloribus placeat totam cum quas, fugiat ullam laboriosam in perspiciatis eveniet quam aspernatur. Sint sed ea maiores laudantium. Velit perferendis repudiandae odio minima quis ad voluptatum dolor assumenda! Ut omnis asperiores veniam error provident laborum aut fugit officia laudantium neque. Vel harum nostrum, deleniti laudantium iste mollitia ducimus rerum itaque, quos enim ipsam similique dolore. Nobis repellat quae odio harum cumque deserunt fuga eligendi quas ab quidem distinctio blanditiis autem neque quam explicabo corrupti veniam recusandae voluptatum delectus voluptatibus quo, impedit, hic eaque. Nihil recusandae amet eum aspernatur? Quaerat, fuga accusantium ut quae deserunt voluptates quod omnis iusto autem quis quam debitis harum non doloremque enim soluta provident molestias adipisci. Explicabo, facilis. Odit, assumenda error tenetur magni delectus nam! Saepe, ipsam. Maiores ex autem modi consectetur illo, ipsum sapiente. Mollitia itaque fuga veritatis, deleniti est, impedit labore similique dolorem maiores facere fugiat nisi excepturi nam commodi pariatur et iure cupiditate assumenda optio sequi eveniet quibusdam culpa. Fugiat explicabo ipsum quasi provident, similique error architecto. Inventore eveniet minus culpa nisi assumenda dolor fuga pariatur asperiores hic, consequatur obcaecati, voluptatem corrupti velit voluptatibus harum neque. Quibusdam ea officia iusto impedit delectus.
                </div>
            </div>
        </div>
        <div class="cursor-pointer mt-12" id="question-5" onclick="hide(5)">
            <div class=" w-4/5 h-auto py-4 px-4 border border-white rounded-xl  mx-auto">
                <div class="flex justify-between">
                    <span class="text-center font-bold text-xl">
                        Bagaimana cara membeli hosting?
                    </span>
                    <div>
                        <img src="<?= base_url() . 'assets/img/circle-down-solid.svg' ?>" alt="" class="w-7 h-auto">
                    </div>
                </div>
                <div class="flex justify-center mt-2 hidden " id="hr-5">
                    <hr class="relative w-full border-b border-gray-100 my-0 py-0" />
                </div>
                <div class="mt-4 font-bold text-lg hidden " id="desc-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eos dolore hic atque voluptatem quia assumenda ex nobis quibusdam aut corrupti excepturi et earum, cumque officia omnis expedita? Ab obcaecati dolores sequi eius quaerat modi blanditiis repellat pariatur asperiores cum? Enim expedita tempora ex doloribus dolorem molestiae et a fugiat dolores fugit eaque officia quasi esse voluptatem nisi ipsam explicabo temporibus, corporis consequuntur, nostrum nam voluptas. Eveniet nemo accusamus dignissimos assumenda ullam adipisci quae error non, magnam vero, aut soluta, sapiente laudantium dolore minus eaque tempore alias quasi laboriosam impedit recusandae reiciendis reprehenderit autem ducimus. Sed et officiis vero ut cumque commodi ullam fugit tempore, accusantium earum est, dolor placeat libero. Animi soluta, esse ut, alias, nisi nihil deserunt neque officiis temporibus quaerat blanditiis laudantium debitis necessitatibus quidem doloremque optio asperiores delectus corrupti sunt eligendi ipsum voluptatem. Minus enim fugiat non reprehenderit nisi, expedita facilis similique alias, facere, explicabo laborum ex excepturi libero perferendis dolore laboriosam corporis? Expedita doloremque velit dolor laboriosam sit repellat perferendis iusto quos ducimus! Aliquid in, adipisci voluptas debitis eaque reprehenderit est. Sequi consequatur praesentium officiis dolorum! Corrupti asperiores, dignissimos et qui architecto temporibus at. Tempora ducimus dolorum alias, quas id consectetur doloremque labore rem debitis nulla fugit, tempore veritatis dolore. Autem provident neque atque rerum veniam nam aliquid minima, quasi in et, dolorum nisi, distinctio rem totam hic vero consequuntur temporibus! Doloremque placeat cum vel, error quis, atque enim perspiciatis qui sed delectus provident ut sunt dolore, eius explicabo nulla. Quis distinctio voluptas ea eius!
                </div>
            </div>
        </div>
        <div class="cursor-pointer mt-12" id="question-6" onclick="hide(6)">
            <div class=" w-4/5 h-auto py-4 px-4 border border-white rounded-xl  mx-auto">
                <div class="flex justify-between">
                    <span class="text-center font-bold text-xl">
                        Apakah saya bisa transfer hosting ke Qwords Cloud Web Hosting Indonesia?
                    </span>
                    <div>
                        <img src="<?= base_url() . 'assets/img/circle-down-solid.svg' ?>" alt="" class="w-7 h-auto">
                    </div>
                </div>
                <div class="flex justify-center mt-2 hidden " id="hr-6">
                    <hr class="relative w-full border-b border-gray-100 my-0 py-0" />
                </div>
                <div class="mt-4 font-bold text-lg hidden " id="desc-6">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque excepturi incidunt nemo sequi exercitationem impedit ipsam dolore omnis amet libero. Temporibus, id velit? Vero minima nesciunt sit, quo earum eligendi voluptatibus, magnam itaque esse ex quos reprehenderit voluptates officia qui dolorum necessitatibus ea dicta. Praesentium voluptas in quos minima mollitia ratione assumenda delectus iusto, architecto ipsam laudantium aperiam obcaecati. Tenetur ex non, vero asperiores temporibus et fugit consequuntur sit voluptatem est esse culpa officiis maxime nam saepe iste porro inventore dolores voluptate eligendi! Cumque, voluptatem fugiat, consequuntur amet excepturi corrupti nostrum accusamus sed quasi assumenda libero numquam dolores atque harum aut voluptatum tempore. Praesentium, iste necessitatibus! Sequi quisquam debitis perspiciatis ducimus saepe corrupti similique corporis quas quae accusantium. Dolore, ad placeat, obcaecati eos officiis accusamus nam ullam, consequuntur sequi doloremque facere pariatur cumque officia laborum modi eum molestias iste mollitia porro rem possimus magni sed aliquam. Quia ipsa nam eaque perferendis ab aperiam repudiandae beatae dignissimos id deleniti? Iure ad corrupti perferendis quia ut quis id eos, vero eum dignissimos autem nulla nam reiciendis iusto cumque veniam sequi obcaecati soluta porro modi commodi incidunt quasi optio quos! Accusantium eius architecto sunt corrupti rem. Dolor sapiente quibusdam repudiandae laudantium, fugit, delectus quaerat mollitia placeat, quisquam alias itaque. Provident iusto explicabo adipisci. Aliquam facere laboriosam mollitia nisi eaque doloribus cum, hic suscipit placeat corporis totam numquam in dolore. Voluptate sed exercitationem magni ad quibusdam blanditiis, explicabo voluptas repellendus accusamus reiciendis. Pariatur aliquid illum quasi animi atque sed, accusamus accusantium a nisi dolorum vel sit? Animi mollitia id temporibus, magni in illo facilis, laudantium nemo commodi totam obcaecati accusamus molestias voluptate placeat minima nulla amet illum ipsum! Obcaecati laboriosam ab eius quas aliquam suscipit debitis labore provident possimus voluptate deserunt, nisi optio amet placeat similique. Itaque est, cupiditate mollitia voluptates fugit veniam laboriosam?
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function hide(row) {
        // console.log(row);
        var question = document.getElementById("question" + "-" + row);
        var hr = document.getElementById("hr" + "-" + row)
        var desc = document.getElementById("desc" + "-" + row)

        if (question.classList.contains('active')) {

            question.classList.remove('active');

            desc.classList.remove("descExpand");

            hr.classList.add("hidden");
            desc.classList.add("hidden");


            // hr.style.transition = '0.5s ease-out';
            // desc.style.transition = '0.5s ease-out';
        } else {

            question.classList.add('active');

            desc.classList.add("descExpand");

            hr.classList.remove("hidden");
            desc.classList.remove("hidden");


            // hr.style.transition = '0.5s ease-out';
            // desc.style.transition = '0.5s ease-out';
        }
    }
</script>