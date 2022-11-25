<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                // ANALGESIK NARKOTIK (1)
                //1
                'generic_name' => 'Fentanil',
                'form' => 'inj 0,05 mg/mL (i.m./i.v.)',
                'restriction_formula' => '5 amp/kasus',
                'description' => 'inj Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi. patch Untuk nyeri kronik pada pasien kanker yang tidak terkendali dan Tidak untuk nyeri akut.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1,
                'image'=> 'Fentanil.jpg',
            ],
            //2
            [
                'generic_name' => 'Morfin',
                'form' => 'tab 10mg',
                'restriction_formula' => 'initial dosis 3-4 tab/hari',
                'description' => 'A. Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit;\n
                B. Untuk mengatasi nyeri kanker yang tidak respons terhadap analgesik non narkotik;\n
                C. Untuk nyeri pada serangan jantung.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1,
                'image'=> 'Morfin.jpg',
            ],
            //3
            [
                'generic_name' => 'Petidin',
                'form' => 'inj 50 mg/mL (i.m./i.v.)',
                'restriction_formula' => '2 amp/hari',
                'description' => 'A. Hanya untuk nyeri sedang hingga berat pada pasien yang dirawat di Rumah Sakit.\n
                B. Tidak digunakan untuk nyeri kanker',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1,
                'image'=> 'Petidin.jpg',
            ],
            //ANALGESIK NON NARKOTIK(2)
            //1
            [
                'generic_name' => 'Asam Mefenamat',
                'form' => 'kaps 250 mg',
                'restriction_formula' => '30 kaps/bulan',
                'description' => 'Salah satu obat antiinflamasi nonsteroid golongan fenamat yang digunakan dalam pengobatan nyeri ringan hingga sedang. ',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 2,
                'image'=> 'AsamMefenamat.jpg',
            ],
            //2
            [
                'generic_name' => 'Ketorolac',
                'form' => 'inj 30 mg/mL',
                'restriction_formula' => '2-3 amp/hari, maks 2 hari',
                'description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 2,
                'image'=> 'Ketorolac.jpg',
            ],
            //3
            [
                'generic_name' => 'Metamizol',
                'form' => 'inj 500 mg/mL',
                'restriction_formula' => '4 amp selama dirawat.',
                'description' => 'Untuk nyeri post operatif dan hanya dalam waktu singkat.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 2,
                'image'=> 'Metamizol.jpg',
            ],
            //ANTIPIRAI(3)
            //1
            [
                'generic_name' => 'Alopurinol',
                'form' => 'tab 100 mg*',
                'restriction_formula' => '30 tab/bulan',
                'description' => 'Tidak diberikan pada saat nyeri akut.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 3,
                'image'=> 'Alopurinol.jpg',
            ],
            //2
            [
                'generic_name' => 'Kolkisin',
                'form' => 'tab 500 mcg',
                'restriction_formula' => '30 tab/bulan',
                'description' => 'Obat yang digunakan untuk meredakan gout akut',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 3,
                'image'=> 'Kolkisin.jpg',
            ],
            //3
            [
                'generic_name' => 'Probenesid',
                'form' => 'tab 500 mcg',
                'restriction_formula' => '30 tab/bulan',
                'description' => 'Obat yang meningkatkan ekskresi asam urat dalam urin. Ini terutama digunakan dalam mengobati asam urat dan hiperurisemia.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 3,
                'image'=> 'Probenesid.jpg',
            ],
            //NYERI NEUROPATIK(4)
            //1
            [
                'generic_name' => 'Amitriptilin',
                'form' => 'tab 25 mg',
                'restriction_formula' => '30 tab/bulan',
                'description' => 'Obat antidepresan yang dapat digunakan masyarakat pada umumnya untuk mengatasi depresi.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 4,
                'image'=> 'Amitriptilin.jpg',
            ],
            //2
            [
                'generic_name' => 'Gabapentin',
                'form' => 'kaps 100 mg',
                'restriction_formula' => '30 kaps/bulan',
                'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 4,
                'image'=> 'Gabapentin.jpg',
            ],
            //3
            [
                'generic_name' => 'Karbamazepin',
                'form' => 'tab 100 mg',
                'restriction_formula' => '60 tab/bulan',
                'description' => 'Hanya untuk neuralgia trigeminal',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 4,
                'image'=> 'Karbamazepin.png',
            ],
            //ANESTETIK LOKAL(5)
            //1
            [
                'generic_name' => 'Bupivakain Heavy',
                'form' => 'inj 0,5% + glukosa 8%',
                'restriction_formula' => '-',
                'description' => 'Khusus untuk analgesia spinal',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 5,
                'image'=> 'BupivakainHeavy.jpg',
            ],
            //2
            [
                'generic_name' => 'Etil Klorida',
                'form' => 'spray 100 mL',
                'restriction_formula' => '-',
                'description' => 'Obat untuk mengatasi nyeri akibat operasi, cedera olahraga, dan nyeri otot mendalam.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 5,
                'image'=> 'EtilKlorida.jpg',
            ],
            //3
            [
                'generic_name' => 'Ropivakain',
                'form' => 'inj 7,5 mg/mL',
                'restriction_formula' => 'ANALGESIK NARKOTIK',
                'description' => 'Anestesi (obat bius) yang menghambat impuls saraf yang mengirim sinyal nyeri ke otak',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 5,
                'image'=> 'Ropivakain.jpg',
            ],
            //ANESTETIK UMUM dan OKSIGEN(6)
            //1
            [
                'generic_name' => 'Deksmedetomidin',
                'form' => 'inj 100 mcg/mL',
                'restriction_formula' => '-',
                'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 6,
                'image'=> 'Deksmedetomidin.jpg',
            ],
            //2
            [
                'generic_name' => 'Halotan',
                'form' => 'ih',
                'restriction_formula' => '-',
                'description' => 'Tidak boleh digunakan berulang dan Tidak untuk pasien dengan gangguan fungsi hati.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 6,
                'image'=> 'Halotan.jpg',
            ],
            //3
            [
                'generic_name' => 'Ketamin',
                'form' => 'inj 50 mg/mL (i.v.)',
                'restriction_formula' => '-',
                'description' => 'Obat yang terutama digunakan untuk memulai dan mempertahankan anestesi',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 6,
                'image'=> 'Ketamin.jpg',
            ],
            // OBAT untuk PROSEDUR PRE OPERATIF(7)
            //1
            [
                'generic_name' => 'Atropin',
                'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
                'restriction_formula' => '-',
                'description' => '-',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 7,
                'image'=> 'Atropin.jpg',
            ],
            //2
            [
                'generic_name' => 'Diazepam',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '-',
                'description' => '-',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 7,
                'image'=> 'Diazepam.jpg',
            ],
            //3
            [
                'generic_name' => 'Midazolam',
                'form' => 'inj 1 mg/mL (i.v.)',
                'restriction_formula' => 'Dosis rumatan 1 mg/jam (24 mg/hari) dan Dosis premedikasi: 8 vial/kasus.',
                'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 7,
                'image'=> 'Midazolam.jpg',
            ],
            // ANTIALERGI dan OBAT untuk ANAFILAKSIS(8)
            //1
            [
                'generic_name' => 'Deksametason',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '20 mg/hari',
                'description' => 'Obat yang efektif untuk menangani berbagai jenis penyakit yang berkaitan dengan peradangan',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 8,
                'image'=> 'Deksametason.jpg',
            ],
            //2
            [
                'generic_name' => 'Difenhidramin',
                'form' => 'inj 10 mg/mL (i.v./i.m.)',
                'restriction_formula' => '30 mg/hari',
                'description' => 'Obat untuk mengendalikan tanda-tanda alergi',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 8,
                'image'=> 'Difenhidramin.jpg',
            ],
            //3
            [
                'generic_name' => 'Klorfeniramin',
                'form' => 'tab 4 mg',
                'restriction_formula' => '3 tab/hari, maks 5 hari',
                'description' => 'Obat golongan antihistamin yang berguna untuk mengatasi reaksi alergi',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 8,
                'image'=> 'Klorfeniramin.jpg',
            ],
            //ANTIDOT dan OBAT LAIN untuk KERACUNAN(KHUSUS) (9)
            //1
            [
                'generic_name' => 'Efedrin',
                'form' => 'inj 50 mg/mL',
                'restriction_formula' => '-',
                'description' => 'Obat ini sering digunakan untuk mencegah tekanan darah rendah selama prosedur anestesi spinal',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 9,
                'image'=> 'Efedrin.jpg',
            ],
            //2
            [
                'generic_name' => 'Kalsium Glukonat',
                'form' => 'inj 10%',
                'restriction_formula' => '-',
                'description' => 'Suplemen kalsium untuk mencegah atau mengatasi rendahnya kadar kalsium dalam darah (hipokalsemia)',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 9,
                'image'=> 'KalsiumGlukonat.jpg',
            ],
            //3
            [
                'generic_name' => 'Nalokson',
                'form' => 'inj 0,4 mg/mL',
                'restriction_formula' => '-',
                'description' => 'Hanya untuk mengatasi depresi pernapasan akibat morfin atau opioid',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 9,
                'image'=> 'Nalokson.jpg',
            ],
            //ANTIEPILEPSI - ANTIKONVULSI (10)
            //1
            [
                'generic_name' => 'Diazepam',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '10 amp/kasus',
                'description' => 'kecuali untuk kasus di ICU.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 10,
                'image'=> 'Diazepam.jpg',
            ],
            //2
            [
                'generic_name' => 'Fenitoin',
                'form' => 'kaps 30 mg',
                'restriction_formula' => '90 kaps/bulan',
                'description' => '-',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 10,
                'image'=> 'Fenitoin.jpg',
            ],
            //3
            [
                'generic_name' => 'Klonazepam',
                'form' => 'tab 2 mg',
                'restriction_formula' => '30 tab/bulan',
                'description' => '-',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 10,
                'image'=> 'Klonazepam.jpg',
            ],
        ]);
    }
}
