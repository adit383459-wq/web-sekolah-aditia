<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Ekstrakurikuler;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@smkn1cijati.sch.id'],
            ['name' => 'Administrator SMK Negeri 1 Cijati', 'password' => Hash::make('admin12345')]
        );

        $jurusan = [
            ['nama'=>'Pengembangan Perangkat Lunak dan Gim','kode'=>'PPLG','deskripsi'=>'Mempelajari pemrograman, pengembangan aplikasi, website, basis data, dan gim.','icon'=>'💻'],
            ['nama'=>'Agribisnis Tanaman Pangan dan Hortikultura','kode'=>'APHP','deskripsi'=>'Mempelajari budidaya tanaman pangan, hortikultura, pengelolaan hasil, dan kewirausahaan pertanian.','icon'=>'🌱'],
            ['nama'=>'Teknik Kendaraan Ringan Otomotif','kode'=>'TKRO','deskripsi'=>'Mempelajari teknologi kendaraan ringan, perawatan, perbaikan, dan sistem otomotif modern.','icon'=>'🚗'],
            ['nama'=>'Bisnis Daring dan Pemasaran','kode'=>'BDP','deskripsi'=>'Mempelajari pemasaran, bisnis digital, e-commerce, pelayanan pelanggan, dan kewirausahaan.','icon'=>'📈'],
        ];
        foreach ($jurusan as $j) Jurusan::updateOrCreate(['kode'=>$j['kode']], $j);

        // Data Guru & Pegawai dari foto yang diberikan (48 entri).
        // Setiap seed mengosongkan data guru lama agar tidak terjadi duplikasi.
        Guru::query()->delete();
        $guru = [
            ['nama'=>'SARIPUL BASAR','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'AHMAD SUHENDRA','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'ELI MARYAMAH','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'BUDIANA HERMAWAN','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'SAKTI ALMASYAH','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'D. JAMALUDIN','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'RINA SUSANA','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'EDEH KURNIAHSIH','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'AYI SURYATI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'FERISKA ROSYANTI SPD','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'NANANG SURYANA','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'ROMI DARMAYADI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'ASEP PURNAMA','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'DIDI MEI SOMANTRI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'H. HAJANG RIDWAN','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'INDRA MURGIANTO','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'INDRA PRIATNA','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'INDRA MURGIANTO','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'SETIAWAN','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'NURDIANSHAH','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'MEGA NURUNNISA','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'NOPI LYANTI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'MIA RUSMIATI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'SILVI DANU RESPITA','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'DEDI SUKARDI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'NURAENI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'TATANG RUNSTANDI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'SITI RAHMAWATI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'AI NURHASANAH','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'DINI ANDRIANI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'ISNAN WIRANURSYEAH','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'LESTARI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'EMI RESMIYATI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'BANI FUDOLY','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'NURAH ALWAINI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'NURDIANSHAH','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'RAMDAN BASTAMAN','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'ASEP MUHLIS SULAEMAN','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'YAYUP HINDRIYANI','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'WAHYUDIN','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'WAHYUDIN','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'SANTI MUSTIKA','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'KAMALIA','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'ANDRI MUHOIR','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'ENDE ISKANDAR','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'RAHMAT WIDODO','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'MULDIANSYAH','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
            ['nama'=>'SIMA KRISTINA','nip'=>'','jabatan'=>'Guru / Pegawai','mapel'=>''],
        ];
        foreach ($guru as $g) Guru::create($g);

        $ekskul = [
            ['nama'=>'Volleyball','deskripsi'=>'Kegiatan olahraga untuk membangun kebugaran, kerja sama, dan sportivitas.','jadwal'=>'Sabtu','pembina'=>'Pembina Olahraga','icon'=>'🏐'],
            ['nama'=>'Pramuka','deskripsi'=>'Melatih kepemimpinan, kedisiplinan, kemandirian, dan kepedulian.','jadwal'=>'Jumat','pembina'=>'Pembina Pramuka','icon'=>'🏕️'],
            ['nama'=>'Futsal','deskripsi'=>'Kegiatan olahraga tim yang mengembangkan teknik, strategi, dan sportivitas.','jadwal'=>'Sabtu','pembina'=>'Pembina Olahraga','icon'=>'⚽'],
            ['nama'=>'Seni & Kreativitas','deskripsi'=>'Wadah pengembangan bakat seni, kreativitas, dan ekspresi siswa.','jadwal'=>'Rabu','pembina'=>'Pembina Seni','icon'=>'🎨'],
        ];
        foreach ($ekskul as $e) {
            Ekstrakurikuler::updateOrCreate(['nama' => $e['nama']], $e);
        }

        Berita::updateOrCreate(['slug'=>'selamat-datang-di-website-smk-negeri-1-cijati'], [
            'judul'=>'Selamat Datang di Website SMK Negeri 1 Cijati',
            'ringkasan'=>'Portal informasi sekolah untuk mengenal program, kegiatan, prestasi, dan berita terbaru.',
            'isi'=>'Website SMK Negeri 1 Cijati menjadi pusat informasi digital yang menampilkan profil sekolah, jurusan, guru, ekstrakurikuler, dan berita sekolah.',
            'published_at'=>now()
        ]);
        Berita::updateOrCreate(['slug'=>'empat-jurusan-unggulan'], [
            'judul'=>'Empat Jurusan Unggulan SMK Negeri 1 Cijati',
            'ringkasan'=>'Kenali empat program keahlian yang tersedia di SMK Negeri 1 Cijati.',
            'isi'=>'SMK Negeri 1 Cijati memiliki PPLG, TKRO, APHP, dan BDP sebagai pilihan program keahlian untuk mengembangkan kompetensi siswa.',
            'published_at'=>now()->subDay()
        ]);
        Berita::updateOrCreate(['slug'=>'smk-negeri-1-cijati-official-di-media-sosial'], [
            'judul'=>'SMK Negeri 1 Cijati Official di Media Sosial',
            'ringkasan'=>'SMK Negeri 1 Cijati hadir di media sosial sebagai sarana informasi kegiatan, program keahlian, dan kabar terbaru sekolah.',
            'isi'=>'SMK Negeri 1 Cijati terus memperkuat informasi digital melalui kanal resmi sekolah. Masyarakat dan siswa dapat mengikuti informasi terbaru mengenai kegiatan sekolah, program keahlian PPLG, APHP, TKRO, dan BDP, serta berbagai aktivitas siswa melalui media sosial resmi sekolah.',
            'gambar'=>'images/berita-smkn1-cijati-official.png',
            'published_at'=>now()
        ]);
    }
}
