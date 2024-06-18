<?php

namespace Database\Seeders;

use App\Models\Workspace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkspaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Workspace::create([
            'name' => 'Sahid Sudirman',
            'price' => 100000,
            'description' => 'Sahid Sudirman adalah simbol kemewahan dan prestise di pusat kota Jakarta. Ruang kerja mewah ini menawarkan pengalaman bekerja yang luar biasa, dengan desain interior yang elegan dan fasilitas kelas atas. Nikmati pemandangan ikonik kota Jakarta dari jendela Anda, sementara Anda mencapai kesuksesan dalam karier Anda.',
            'address' => 'Jl. Jenderal Sudirman No.Kav. 13-15',
            'city' => 'Jakarta',
            'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4001170278657!2d106.8186673!3d-6.210842400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f402650f551d%3A0x6004b088aa5ea110!2sSahid%20Sudirman%20Centre%2C%20Jl.%20Jenderal%20Sudirman%20No.Kav.%2013-15%2C%20RT.10%2FRW.11%2C%20Karet%20Tengsin%2C%20Kecamatan%20Tanah%20Abang%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010250!5e0!3m2!1sen!2sid!4v1718719664953!5m2!1sen!2sid" width="495" height="279" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'rating_avg' => 4,
            'rating_count' => 185,
        ]);

        Workspace::create([
            'name' => 'BSD Green Office Park',
            'price' => 10000,
            'description' => 'Nikmati pengalaman bekerja yang luar biasa di BSD Green Office Park, sebuah oasis hijau yang menyatukan keindahan alam dengan fasilitas modern. Ruang kerja yang dirancang dengan sempurna, dilengkapi dengan teknologi terkini, memastikan Anda dapat berkonsentrasi secara maksimal dan mencapai produktivitas tertinggi. Letaknya yang strategis, dikelilingi oleh taman hijau yang asri, menjadikan tempat ini sebagai tempat kerja idaman yang menginspirasi dan menenangkan pikiran.',
            'address' => 'Jl. BSD Green Office Park',
            'city' => 'Banten',
            'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.699294969176!2d106.652819!3d-6.3031838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb4a1a899447%3A0xcbbbc474f91f780f!2sBSD%20Green%20Office%20Park%206!5e0!3m2!1sen!2sid!4v1718721733980!5m2!1sen!2sid" width="495" height="297" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'rating_avg' => 5,
            'rating_count' => 190,
        ]);

        Workspace::create([
            'name' => 'Central Park',
            'price' => 100000,
            'description' => 'Nikmati suasana kota yang hidup di Central Park, sebuah ruang kerja yang terletak di jantung metropolitan Jakarta. Desain kontemporer yang menawan, dilengkapi dengan teknologi mutakhir, akan memastikan Anda selalu berada di garis terdepan dalam dunia bisnis yang kompetitif. Akses yang mudah ke berbagai sarana dan prasarana kota menjadikan Central Park pilihan yang sempurna bagi mereka yang menginginkan gaya hidup urban yang dinamis.',
            'address' => 'Letjen S. Parman St No.RT.12',
            'city' => 'Jakarta',
            'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6421030551387!2d106.7911202!3d-6.1786387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6f59fa97dbb%3A0x9cdcd956ab8be06e!2sCentral%20Park%20Mall%2C%20Jl.%20Letjen%20S.%20Parman%20No.RT.12%2C%20RW.1%2C%20Tj.%20Duren%20Sel.%2C%20Kec.%20Grogol%20petamburan%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011470!5e0!3m2!1sen!2sid!4v1718721676061!5m2!1sen!2sid" width="495" height="297" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'rating_avg' => 5,
            'rating_count' => 165,
        ]);

        Workspace::create([
            'name' => 'Conclave',
            'price' => 100000,
            'description' => 'Conclave di Jakarta menyediakan coworking space yang modern dengan berbagai pilihan ruang kerja mulai dari hot desk hingga private office. Dilengkapi dengan fasilitas seperti internet cepat, ruang rapat, dan area lounge, Conclave menciptakan suasana kerja yang produktif dan kolaboratif.',
            'address' => 'Jl. Casablanca Raya Kav. 88, Menteng Dalam',
            'city' => 'Jakarta',
            'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15866.4895429744!2d106.8670735!3d-6.181268950000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4f8c2ffea73%3A0x8b3c9d1a03648bbb!2sCempaka%20Putih%2C%20Central%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1718721629284!5m2!1sen!2sid" width="495" height="297" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'rating_avg' => 5,
            'rating_count' => 78,
        ]);

        Workspace::create([
            'name' => 'Lippo Mall Puri',
            'price' => 100000,
            'description' => 'Lippo Mall Puri menawarkan kombinasi yang sempurna antara bekerja dan gaya hidup. Ruang kerja modern yang terhubung langsung dengan pusat perbelanjaan dan hiburan terkemuka, memastikan Anda selalu memiliki waktu yang cukup untuk bekerja keras dan menikmati hidup. Nikmati fasilitas kelas atas dan lokasi strategis yang hanya bisa ditawarkan oleh Lippo Mall Puri.',
            'address' => 'Jl. Puri Indah Raya Puri Indah',
            'city' => 'Jakarta',
            'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.568470877121!2d106.73890940000001!3d-6.1884554000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f76e37136e23%3A0x41cca4768f8bf65b!2sLippo%20Mall%20Puri!5e0!3m2!1sen!2sid!4v1718721579520!5m2!1sen!2sid" width="495" height="297" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'rating_avg' => 4,
            'rating_count' => 59,
        ]);

        Workspace::create([
            'name' => 'Plaza Indonesia',
            'price' => 100000,
            'description' => 'Plaza Indonesia, sebuah ikon di dunia bisnis Jakarta, menawarkan ruang kerja eksklusif yang terhubung langsung dengan pusat perbelanjaan dan hiburan terkemuka. Bekerja di sini tidak hanya menjanjikan produktivitas tinggi, tetapi juga gaya hidup mewah yang hanya bisa dinikmati oleh sedikit orang beruntung.',
            'address' => 'Jl. M.H. Thamrin No.Kav.28-30',
            'city' => 'Jakarta',
            'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5298535249794!2d106.82194679999999!3d-6.193597699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42108e6d503%3A0x7d7fe17ad64a053f!2sPlaza%20Indonesia!5e0!3m2!1sen!2sid!4v1718721470694!5m2!1sen!2sid" width="495" height="297" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'rating_avg' => 5,
            'rating_count' => 35,
        ]);

        Workspace::create([
            'name' => 'Pondok Indah',
            'price' => 100000,
            'description' => 'Terletak di pusat kota Jakarta, Pondok Indah menawarkan ruang kerja yang sempurna bagi mereka yang menginginkan lokasi strategis dan aksesibilitas tinggi. Desain interior yang menarik dan fasilitas lengkap akan memastikan Anda bekerja dengan nyaman dan efisien. Sebuah oasis di tengah hiruk-pikuk kota, Pondok Indah adalah tempat ideal untuk mewujudkan impian bisnis Anda.',
            'address' => 'Pondok Pinang, Kebayoran Lama',
            'city' => 'Jakarta',
            'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.99368993719!2d106.7846188!3d-6.264558999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a5f4fbee47%3A0x682837113c4ea854!2sPondok%20Indah%20Mall%201!5e0!3m2!1sen!2sid!4v1718721534331!5m2!1sen!2sid" width="495" height="297" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'rating_avg' => 5,
            'rating_count' => 15,
        ]);

        Workspace::create([
            'name' => 'Park 23 Bali',
            'price' => 100000,
            'description' => 'Bekerja di Park 23 Bali bukanlah sekedar mencari tempat untuk bekerja, tetapi merupakan pengalaman yang merangkul kekayaan budaya Bali. Suasana hangat khas Pulau Dewata menyambut Anda di setiap sudut ruang kerja yang elegan dan modern. Nikmati pemandangan indah dari jendela Anda, sementara Anda menyelesaikan pekerjaan dengan semangat baru yang membara.',
            'address' => 'Jl. Kediri No.27 Bali 80361',
            'city' => 'Bali',
            'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.5227657057517!2d115.1759419!3d-8.7367831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2441cdc9d8b31%3A0xaa3987c8b6eaa53d!2sPark%2023%20XXI!5e0!3m2!1sen!2sid!4v1718721333126!5m2!1sen!2sid" width="495" height="297" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'rating_avg' => 4,
            'rating_count' => 123,
        ]);
        
        Workspace::create([
            'name' => 'Do Work',
            'price' => 100000,
            'description' => 'DoWork adalah ruang kerja kolaboratif yang terletak di BSD City. Dikenal dengan desain interior yang modern dan suasana yang nyaman, UnionSPACE menawarkan berbagai fasilitas seperti ruang rapat, internet berkecepatan tinggi, dan layanan virtual office. Rasakan pengalaman bekerja yang menyenangkan di lingkungan yang mendukung produktivitas dan kreativitas.',
            'address' => 'Jl. Pahlawan Seribu No.17',
            'city' => 'Tangerang',
            'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.686880603809!2d106.66725707499099!3d-6.304807393684397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb233d5426bd%3A0x78865061c6fcd681!2sSinotif%20BSD%20Tol%20Boulevard!5e0!3m2!1sid!2sid!4v1718721850567!5m2!1sid!2sid" width="495" height="297" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'rating_avg' => 5,
            'rating_count' => 45,
        ]);

        Workspace::create([
            'name' => 'Kolla Space',
            'price' => 100000,
            'description' => 'Kolla Space menawarkan ruang kerja yang dinamis dan modern. Dilengkapi dengan fasilitas seperti internet cepat, ruang rapat, dan area kolaboratif, Kolla Space menciptakan lingkungan yang mendukung produktivitas dan inovasi. Nikmati suasana kerja yang inspiratif di Kolla Space.',
            'address' => 'Jl. Scientia Boulevard, Curug Sangereng',
            'city' => 'Tangerang',
            'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0507744136085!2d106.61292547499062!3d-6.257041993731495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc651e649223%3A0x3b96f2ef67285cd9!2sScientia%20Square%20Park!5e0!3m2!1sen!2sid!4v1718721966532!5m2!1sen!2sid" width="495" height="297" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'rating_avg' => 3,
            'rating_count' => 598,
        ]);
}
}

