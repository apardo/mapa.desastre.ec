<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2015-05-25 06:22+0000
// PO revision date:  2015-05-25 04:58+0000
$lang = array(
	'upgrade' => array(
		'between' => 'Data yang dimasukkan tidak dalam format yang bisa diterima. Masukkan 0 untuk Tidak atau 1 untuk Ya.',
	) ,
	'upgrade_automatic' => 'Pembaruan Otomatis',
	'upgrade_available' => 'Pembaruan (Upgrade) Tersedia',
	'upgrade_continue_btn_text' => 'Berlanjut',
	'upgrade_db_btn_text' => 'Pembaruan',
	'upgrade_db_text_1' => 'Jadi, kami akan meningkatkan basis data anda dari versi',
	'upgrade_db_text_2' => 'ke basis data versi terbaru',
	'upgrade_db_text_3' => 'Klik tombol "Perbaruan", santai dan saksikan pertunjukan yang ajaib.',
	'upgrade_db_text_4' => 'Oh ya, jika Anda ingin membackup basis data, beri tanda centang di bawah ini dan kami akan melakukannya untuk Anda.',
	'upgrade_db_text_5' => 'Backup basis data sebelum pembaruan? (<strong style="color:#FF0000;">Sangat direkomendasikan</strong>)',
	'upgrade_db_title' => 'Pembaruan basis data Ushahidi',
	'upgrade_db_info' => 'Ushahidi sudah diperbarui! Sebelum melanjutkan, Anda perlu memperbarui basis data ke dalam versi terkini (%s).',
	'upgrade_db_up_to_date' => 'Versi basis data Anda adalah versi terkini.',
	'upgrade_failed' => 'Ada kegagalan dalam proses pembaruan ',
	'upgrade_manual' => 'Pembaruan Manual',
	'upgrade_status' => 'Status pembaruan Ushahidi',
	'upgrade_text_1' => 'Instruksi di bawah ini menjelaskan cara memperbarui Ushahidi.',
	'upgrade_text_2' => '<dl><dt><strong>Unduh</strong></dt>',
	'upgrade_text_3' => '<dd>- Unduh versi terkini Ushahidi dari',
	'upgrade_text_4' => '<dt><strong>Backup</strong></dt><dd>- .htaccess, ./applications/config/config.php, ./applications/config/database.php dan ./applications/config/auth.php files. </dd><dd>- Untuk menghindari hal-hal yang tidak diinginkan, kami sarankan Anda men-backup semua isi Ushahidi terlebih dahulu.</dd><dt><strong>Salin berkas-berkas</strong></dt><dd>- Ekstrak zip hasil unduhan</dd><dd>- Tergantung sistem operasi dalam server Anda, gunakan aplikasi yang Anda sukai (misalnya Telnet, FTP, SSH) untuk masuk dalam server dan mengganti semua isinya dengan yang terbaru.</dd><dt><strong>Perbarui database</strong></dt><dd>- Pertama, periksa dulu versi database Anda dalam <strong>db_version</strong> bagian pengaturan table atau simak informasi Ushahidi di bagian paling atas halaman ini. </dd><dd>- Jika Anda masih menggunakan versi 25, Anda bisa memperbarui dari versi 25 ke 26, kemudian 26 ke 27, dan seterusnya hingga versi berkas SQL terkini di folder <strong>/sql</strong>.</dd><dd>- Dengan klien database Anda, perbarui database dengan mengeksekusi berkas upgradex-x.sql yang sesuai.</dd></dl>',
	'upgrade_tables' => '<strong>Langkah 3:</strong> Lihat folder <strong>sql</strong>. Jalankan secara manual pembaruan berkas <xx>-<xx>.sql file dari versi db saat ini menjadi berkas sql versi terakhir.',
	'upgrade_text_5' => '<strong>Langkah 4:</strong> Klik tombol <strong>"Continue"</strong> untuk memperbarui tabel yang diperlukan.',
	'upgrade_text_6' => 'Untuk perbaruan otomatis, klik tombol di bawah ini.',
	'upgrade_title_text' => 'Saat ini, Anda menggunakan Ushahidi v%1$s dengan database %2$d yang berjalan pada %3$s',
	'upgrading' => 'Sedang menjalankan proses upgrade',
	'upgrade_ftp_text' => 'Untuk melanjutkan pembaruan dengan mudah, informasi server FTP di hosting Anda berikut ini perlu dilengkapi.',
	'upgrade_ftp_hostname' => 'FTP Hostname: <span>Contoh: "localhost"</span>',
	'upgrade_ftp_password' => 'Kata sandi FTP:',
	'upgrade_ftp_username' => 'Nama Pengguna FTP:',
	'upgrade_status_info' => 'Anda saat ini sudah menggunakan versi terakhir Ushahidi.',
	'upgrade_status_info_2' => 'Anda tidak memerlukan pembaruan versi.',
	'upgrade_db_version' => 'Versi basis data: %d',
	'upgrade_warning_software_version' => 'Perhatian: Versi piranti lunak dalam version.php dan basis data tidak cocok.',
	'upgrade_warning_db_version' => 'Perhatian: Versi basis data dalam version.php dan basis data tidak cocok.',
	'upgrade_database' => 'Basis data:',
	'ushahidi_release_version' => 'Ushahidi %s',
	'beta' => 'BETA!',
	'download' => 'Mengunduh Ushahidi versi terkini...',
	'log_file' => 'Berkas Log',
	'successfully_downloaded' => 'Pengunduhan Berhasil. Bongkar berkas-berkas...',
	'failed_downloading' => 'Pengunduhan gagal.',
	'successfully_unpacked' => 'Proses bongkar berhasil. Berkas diduplikasi...',
	'failed_unpacking' => 'Proses bongkar gagal.',
	'successfully_copied' => 'Berkas berhasil Diduplikasi. Database diperharui...',
	'failed_copying' => 'Duplikasi berkas gagal.',
	'backup_success' => 'Backup basis data dan pembaruan berhasil.',
	'backup_failed' => 'Backup basis data gagal.',
	'dbupgrade_success' => 'Perbaruan basis data berhasil.',
	'deleting_files' => 'Menghapus berkas yang sudah diunduh...',
	'upgrade_success' => 'Pembaruan BERHASIL. Lihat <a href="%s" target="_blank">Berkas Log</a>',
);
