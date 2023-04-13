<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SARAGA
        $eqt = Booking::create([
            'court_name' => 'Saraga',
            'location' => 'Jl. Siliwangi Dalam 3, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
            'buka' => '06.00',
            'tutup' => '21.00',
            'category' => 'basketball',
            'coord' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.7857972945235!2d107.6069453735055!3d-6.884702195252124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f823040e25%3A0xf1b82cb8be54c4ce!2sSasana%20Olahraga%20Ganesha%20(Saraga)%20ITB!5e0!3m2!1sid!2sid!4v1681223380192!5m2!1sid!2sid" style="border:0;width: 100%;min-height: 350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'price' => '50.000',
        ]);
        $eqt = Booking::create([
            'court_name' => 'Saraga',
            'location' => 'Jl. Siliwangi Dalam 3, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
            'buka' => '06.00',
            'tutup' => '21.00',
            'category' => 'futsal',
            'coord' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.7857972945235!2d107.6069453735055!3d-6.884702195252124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f823040e25%3A0xf1b82cb8be54c4ce!2sSasana%20Olahraga%20Ganesha%20(Saraga)%20ITB!5e0!3m2!1sid!2sid!4v1681223380192!5m2!1sid!2sid" style="border:0;width: 100%;min-height: 350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'price' => '50.000',
        ]);
        $eqt = Booking::create([
            'court_name' => 'Saraga',
            'location' => 'Jl. Siliwangi Dalam 3, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
            'buka' => '06.00',
            'tutup' => '21.00',
            'category' => 'tennis',
            'coord' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.7857972945235!2d107.6069453735055!3d-6.884702195252124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f823040e25%3A0xf1b82cb8be54c4ce!2sSasana%20Olahraga%20Ganesha%20(Saraga)%20ITB!5e0!3m2!1sid!2sid!4v1681223380192!5m2!1sid!2sid" style="border:0;width: 100%;min-height: 350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'price' => '50.000',
        ]);

        //Padjajaran
        $eqt = Booking::create([
            'court_name' => 'GOR Pajajaran',
            'location' => 'Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40171',
            'buka' => '08.00',
            'tutup' => '18.00',
            'category' => 'basketball',
            'coord' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.858084552691!2d107.59877751455893!3d-6.907567895008856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e638a7f08167%3A0x64e8cf1ef376ab76!2sGOR%20Pajajaran!5e0!3m2!1sid!2sid!4v1681223959513!5m2!1sid!2sid" style="border:0;width: 100%;min-height: 350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'price' => '50.000',
        ]);
        //bikasoga
        $eqt = Booking::create([
            'court_name' => 'GOR Bikasoga',
            'location' => 'Jl. Suryalaya Indah No.1-3, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat 40265',
            'buka' => '07.00',
            'tutup' => '22.00',
            'category' => 'tennis',
            'coord' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5553014979027!2d107.62249091455908!3d-6.943627794983304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e861eecddf31%3A0xf82fde475caf7494!2sSport%20Center%20di%20Bandung%20-%20Bikasoga!5e0!3m2!1sid!2sid!4v1681224139381!5m2!1sid!2sid" style="border:0;width: 100%;min-height: 350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'price' => '50.000',
        ]);
        $eqt = Booking::create([
            'court_name' => 'GOR Bikasoga',
            'location' => 'Jl. Suryalaya Indah No.1-3, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat 40265',
            'buka' => '07.00',
            'tutup' => '22.00',
            'category' => 'futsal',
            'coord' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5553014979027!2d107.62249091455908!3d-6.943627794983304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e861eecddf31%3A0xf82fde475caf7494!2sSport%20Center%20di%20Bandung%20-%20Bikasoga!5e0!3m2!1sid!2sid!4v1681224139381!5m2!1sid!2sid" style="border:0;width: 100%;min-height: 350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'price' => '50.000',
        ]);

        //The Groove
        $eqt = Booking::create([
            'court_name' => "d'Groove Sport and Wellness Center",
            'location' => 'Jl. Soekarno Hatta No.27, Cibuntu, Kec. Bandung Kulon, Kota Bandung, Jawa Barat 40212',
            'buka' => '06.00',
            'tutup' => '22.00',
            'coord' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.746969890832!2d107.57263131455895!3d-6.920822794999447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5fd65d8b6bb%3A0xc7a499747589e914!2sd&#39;Groove%20Sport%20and%20Wellness%20Center!5e0!3m2!1sid!2sid!4v1681224364107!5m2!1sid!2sid" style="border:0;width: 100%;min-height: 350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'category' => 'futsal',
            'price' => '50.000',
        ]);
        $eqt = Booking::create([
            'court_name' => "d'Groove Sport and Wellness Center",
            'location' => 'Jl. Soekarno Hatta No.27, Cibuntu, Kec. Bandung Kulon, Kota Bandung, Jawa Barat 40212',
            'buka' => '06.00',
            'tutup' => '22.00',
            'category' => 'basketball',
            'coord' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.746969890832!2d107.57263131455895!3d-6.920822794999447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5fd65d8b6bb%3A0xc7a499747589e914!2sd&#39;Groove%20Sport%20and%20Wellness%20Center!5e0!3m2!1sid!2sid!4v1681224364107!5m2!1sid!2sid" style="border:0;width: 100%;min-height: 350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'price' => '50.000',
        ]);

        //batununggal
        $eqt = Booking::create([
            'court_name' => "GOR Batununggal",
            'location' => 'Jl. Soekarno Hatta Jl. Batununggal Indah IX No.2, Mengger, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40266',
            'buka' => '07.00',
            'tutup' => '18.00',
            'category' => 'badminton',
            'coord' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3903886448124!2d107.62364271455921!3d-6.963189894969502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e856985f0d29%3A0xefec387f13dd8eee!2sBatununggal%20Sport%20Centre!5e0!3m2!1sid!2sid!4v1681224275623!5m2!1sid!2sid" style="border:0;width: 100%;min-height: 350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'price' => '50.000',
        ]);
        $eqt = Booking::create([
            'court_name' => "GOR Batununggal",
            'location' => 'Jl. Soekarno Hatta Jl. Batununggal Indah IX No.2, Mengger, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40266',
            'buka' => '07.00',
            'tutup' => '18.00',
            'category' => 'ping_pong',
            'coord' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3903886448124!2d107.62364271455921!3d-6.963189894969502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e856985f0d29%3A0xefec387f13dd8eee!2sBatununggal%20Sport%20Centre!5e0!3m2!1sid!2sid!4v1681224275623!5m2!1sid!2sid" style="border:0;width: 100%;min-height: 350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'price' => '50.000',
        ]);
        $eqt = Booking::create([
            'court_name' => "GOR Batununggal",
            'location' => 'Jl. Soekarno Hatta Jl. Batununggal Indah IX No.2, Mengger, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40266',
            'buka' => '07.00',
            'tutup' => '18.00',
            'category' => 'basketball',
            'coord' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3903886448124!2d107.62364271455921!3d-6.963189894969502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e856985f0d29%3A0xefec387f13dd8eee!2sBatununggal%20Sport%20Centre!5e0!3m2!1sid!2sid!4v1681224275623!5m2!1sid!2sid" style="border:0;width: 100%;min-height: 350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'price' => '50.000',
        ]);
        $eqt = Booking::create([
            'court_name' => "GOR Batununggal",
            'location' => 'Jl. Soekarno Hatta Jl. Batununggal Indah IX No.2, Mengger, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40266',
            'buka' => '07.00',
            'tutup' => '18.00',
            'category' => 'futsal',
            'coord' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3903886448124!2d107.62364271455921!3d-6.963189894969502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e856985f0d29%3A0xefec387f13dd8eee!2sBatununggal%20Sport%20Centre!5e0!3m2!1sid!2sid!4v1681224275623!5m2!1sid!2sid" style="border:0;width: 100%;min-height: 350px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'price' => '50.000',
        ]);
    }
}
