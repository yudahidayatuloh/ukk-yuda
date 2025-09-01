<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body class="bg-blue-50">
    <x-navbar></x-navbar>
    <div class="hero min-h-screen"
        style="background-image: url(https://sdmntprnorthcentralus.oaiusercontent.com/files/00000000-0464-622f-bd91-173a22715df9/raw?se=2025-09-01T02%3A55%3A14Z&sp=r&sv=2024-08-04&sr=b&scid=c1bd17bf-17eb-579b-9ca1-eb67f7b4da9c&skoid=0b778285-7b0b-4cdc-ac3b-fb93e8c3686f&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-08-31T17%3A33%3A48Z&ske=2025-09-01T17%3A33%3A48Z&sks=b&skv=2024-08-04&sig=J%2B/k8yov2Q0wfxqZfFuVmSlW2jDoJDWQI8uz%2B25iJAA%3D);"
        >
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-lg">
            <h1 class="mb-5 text-5xl font-bold">Selamat Datang di Smkn 4 Tasikmalaya</h1>
            <p class="mb-5">
                Generasi unggul dan berprestasi
            </p>
            <button class="btn bg-white hover:bg-cyan-600 hover:text-white">Get Started</button>
            </div>
        </div>
    </div>


    <div class="container mx-auto">
        <!--- Sambutan --->
        <h1 class="card-title justify-center text-3xl font-bold my-7">Sambutan Kepala Sekolah</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 justify-center items-center">
                
            <div>
                <img src="https://smkn4-web.netlify.app/_nuxt/kepsek.CR668aGV.png" alt="">
            </div>
            <div class="col-span-2">
                <div class="card card-border w-full bg-white h-50 shadow-sm">
                    <div class="card-body text-[11px] md:text-[11px] lg:text-sm">
                        <h1>Assalamu’alaikum warahmatullahi wabarakatuh.
                            Salam sejahtera bagi kita semua.
                            Puji syukur kita panjatkan ke hadirat Allah SWT atas rahmat dan karunia-Nya sehingga kita dapat berkumpul dalam keadaan sehat wal afiat. Pendidikan adalah fondasi penting dalam membangun generasi bangsa yang cerdas, berkarakter, dan berdaya saing. Kami di SMK Negeri 4 Tasikmalaya berkomitmen untuk memberikan pendidikan terbaik bagi siswa-siswi kami.
                            Semoga website ini dapat menjadi sarana informasi, komunikasi, dan inspirasi bagi seluruh warga sekolah dan masyarakat. Terima kasih atas dukungan dan partisipasi semua pihak.Wassalamu’alaikum warahmatullahi wabarakatuh.
                        </h1>
                        <h1 class="text-end font-bold">
                            - Kurniawan, S.Pd, M.Pd.
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <!--- Tutup Sambutan --->

        <!--- Jumlah --->
        <h1 class="mt-7 card-title text-3xl font-bold justify-center">Guru, Staf dan Peserta Didik</h1>
        <p class="my-5 text-center">Tahun Pelajaran 2023/2024</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center justify-center">
            <div class="card card-border w-75 bg-white shadow-sm mx-auto hover:bg-cyan-600 hover:text-white transition transform hover:scale-105">
                <div class="card-body justify-center items-center text-center">
                    <h1 class="card-title font-bold text-3xl">60</h1>
                    <p>Guru</p>
                </div>
            </div>
            <div class="card card-border w-75 bg-white shadow-sm mx-auto hover:bg-cyan-600 hover:text-white transition transform hover:scale-105">
                <div class="card-body justify-center items-center text-center">
                    <h1 class="card-title font-bold text-3xl">60</h1>
                    <p>Guru</p>
                </div>
            </div>
            <div class="card card-border w-75 bg-white shadow-sm mx-auto hover:bg-cyan-600 hover:text-white transition transform hover:scale-105">
                <div class="card-body justify-center items-center text-center">
                    <h1 class="card-title font-bold text-3xl">60</h1>
                    <p>Guru</p>
                </div>
            </div>
        </div>
        <!--- Tutup Jumlah --->

        <!--- Jurusan --->
        <div class="grid grid-cols-3 text-center items-center justify-center">
            <div class="col-span-3 my-10">
                <h1 class="card-title font-bold text-3xl justify-center">Kompetensi Keahlian</h1>
            </div>
            <div class="card card-side bg-base-100 shadow-sm mx-auto mb-5">
                <figure>
                    <svg class="w-20 mx-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M280 152L360 152L360 200L280 200L280 152zM272 96C245.5 96 224 117.5 224 144L224 208C224 234.5 245.5 256 272 256L288 256L288 288L64 288C46.3 288 32 302.3 32 320C32 337.7 46.3 352 64 352L160 352L160 384L144 384C117.5 384 96 405.5 96 432L96 496C96 522.5 117.5 544 144 544L240 544C266.5 544 288 522.5 288 496L288 432C288 405.5 266.5 384 240 384L224 384L224 352L416 352L416 384L400 384C373.5 384 352 405.5 352 432L352 496C352 522.5 373.5 544 400 544L496 544C522.5 544 544 522.5 544 496L544 432C544 405.5 522.5 384 496 384L480 384L480 352L576 352C593.7 352 608 337.7 608 320C608 302.3 593.7 288 576 288L352 288L352 256L368 256C394.5 256 416 234.5 416 208L416 144C416 117.5 394.5 96 368 96L272 96zM480 440L488 440L488 488L408 488L408 440L480 440zM224 440L232 440L232 488L152 488L152 440L224 440z"/></svg>
                </figure>
                <div class="card-body bg-cyan-600 rounded-e-sm text-white">
                    <h2 class="card-title">Teknik Otomasi Industri</h2>
                    <h3 class="card-title text-sm">Sarana pendukung pembelajaran</h3>
                    <ul class="text-start">
                        <li>1. Bengkel TOI</li>
                        <li>2. Unik Produksi</li>
                        <li>3. Techno Park</li>
                        <li>4. Dll</li>
                    </ul>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-sm mx-auto mb-5">
                <figure>
                    <svg class="w-20 mx-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M392.8 65.2C375.8 60.3 358.1 70.2 353.2 87.2L225.2 535.2C220.3 552.2 230.2 569.9 247.2 574.8C264.2 579.7 281.9 569.8 286.8 552.8L414.8 104.8C419.7 87.8 409.8 70.1 392.8 65.2zM457.4 201.3C444.9 213.8 444.9 234.1 457.4 246.6L530.8 320L457.4 393.4C444.9 405.9 444.9 426.2 457.4 438.7C469.9 451.2 490.2 451.2 502.7 438.7L598.7 342.7C611.2 330.2 611.2 309.9 598.7 297.4L502.7 201.4C490.2 188.9 469.9 188.9 457.4 201.4zM182.7 201.3C170.2 188.8 149.9 188.8 137.4 201.3L41.4 297.3C28.9 309.8 28.9 330.1 41.4 342.6L137.4 438.6C149.9 451.1 170.2 451.1 182.7 438.6C195.2 426.1 195.2 405.8 182.7 393.3L109.3 320L182.6 246.6C195.1 234.1 195.1 213.8 182.6 201.3z"/></svg>
                </figure>
                <div class="card-body bg-green-800 rounded-e-sm text-white">
                    <h2 class="card-title">Teknik Otomasi Industri</h2>
                    <h3 class="card-title text-sm">Sarana pendukung pembelajaran</h3>
                    <ul class="text-start">
                        <li>1. Bengkel TOI</li>
                        <li>2. Unik Produksi</li>
                        <li>3. Techno Park</li>
                        <li>4. Dll</li>
                    </ul>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-sm mx-auto mb-5">
                <figure>
                    <svg class="w-20 mx-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256.1 161.1L256.1 210.7L256.6 211.2C263.1 128.8 332 64 416.1 64C436.2 64 455.5 67.7 473.2 74.5C483.2 78.3 485 91 477.5 98.6L388.8 187.3C385.8 190.3 384.1 194.4 384.1 198.6L384.1 240C384.1 248.8 391.3 256 400.1 256L441.5 256C445.7 256 449.8 254.3 452.8 251.3L541.5 162.6C549.1 155 561.8 156.9 565.6 166.9C572.4 184.6 576.1 203.9 576.1 224C576.1 284.6 542.4 337.4 492.6 364.5L574.1 446C592.8 464.7 592.8 495.1 574.1 513.9L514 574C495.3 592.7 464.9 592.7 446.1 574L320.1 448C292.7 420.6 286.5 380.1 301.6 346.7L210.9 256L161.3 256C150.6 256 140.6 250.7 134.7 241.8L55.4 122.9C51.2 116.6 52 108.1 57.4 102.7L102.8 57.3C108.2 51.9 116.6 51.1 123 55.3L241.9 134.5C250.8 140.4 256.1 150.4 256.1 161.1zM247.6 360.6C241.3 397.6 250 436.7 274 468L179 562.9C150.9 591 105.3 591 77.2 562.9C49.1 534.8 49.1 489.2 77.2 461.1L212.6 325.7L247.6 360.7z"/></svg>
                </figure>
                <div class="card-body bg-red-800 rounded-e-sm text-white">
                    <h2 class="card-title">Teknik Otomasi Industri</h2>
                    <h3 class="card-title text-sm">Sarana pendukung pembelajaran</h3>
                    <ul class="text-start">
                        <li>1. Bengkel TOI</li>
                        <li>2. Unik Produksi</li>
                        <li>3. Techno Park</li>
                        <li>4. Dll</li>
                    </ul>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-sm mx-auto mb-5">
                <figure>
                    <svg class="w-20 mx-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M213.1 128.8L202.7 160L128 160C92.7 160 64 188.7 64 224L64 480C64 515.3 92.7 544 128 544L512 544C547.3 544 576 515.3 576 480L576 224C576 188.7 547.3 160 512 160L437.3 160L426.9 128.8C420.4 109.2 402.1 96 381.4 96L258.6 96C237.9 96 219.6 109.2 213.1 128.8zM320 256C373 256 416 299 416 352C416 405 373 448 320 448C267 448 224 405 224 352C224 299 267 256 320 256z"/></svg>
                </figure>
                <div class="card-body bg-orange-500 rounded-e-sm text-white">
                    <h2 class="card-title">Teknik Otomasi Industri</h2>
                    <h3 class="card-title text-sm">Sarana pendukung pembelajaran</h3>
                    <ul class="text-start">
                        <li>1. Bengkel TOI</li>
                        <li>2. Unik Produksi</li>
                        <li>3. Techno Park</li>
                        <li>4. Dll</li>
                    </ul>
                </div>
            </div>
            <div class="card card-side bg-base-100 shadow-sm mx-auto mb-5">
                <figure>
                    <svg class="w-20 mx-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M96 96C78.3 96 64 110.3 64 128L64 496C64 522.5 85.5 544 112 544L528 544C554.5 544 576 522.5 576 496L576 216.2C576 198 556.6 186.5 540.6 195.1L384 279.4L384 216.2C384 198 364.6 186.5 348.6 195.1L192 279.4L192 128C192 110.3 177.7 96 160 96L96 96z"/></svg>
                </figure>
                <div class="card-body bg-gray-500 rounded-e-sm text-white">
                    <h2 class="card-title">Teknik Otomasi Industri</h2>
                    <h3 class="card-title text-sm">Sarana pendukung pembelajaran</h3>
                    <ul class="text-start">
                        <li>1. Bengkel TOI</li>
                        <li>2. Unik Produksi</li>
                        <li>3. Techno Park</li>
                        <li>4. Dll</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--- Tutup Jurusan --->
    </div>



    <x-footer></x-footer>
  </body>
</html>