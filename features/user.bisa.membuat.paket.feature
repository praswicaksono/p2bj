Feature:
  User bisa membuat paket

Background:
  Given User sudah teregistrasi di system dengan user id "1" dengan role "skpd"

Scenario:
  When User mengisi Nama Paket dengan "Percobaan Membuat Proyek"
  And User mengisi Sumber Dana dengan "APBD"
  And User mengisi Tahun Anggaran dengan "2015"
  And User mengisi Pagu Anggaran dengan "10000000"
  And User mengisi Kode Rekening dengan "102 BAC"
  And User mengisi Kode RUP dengan "12345"
  And User mengisi Jenis Pembayaran dengan "Tunai"
  And User mengupload "Surat Permintaan Lelang dan SKPD" dengan nama file "file-1.pdf"
  And User mengupload "Hasil Perkiraan Sendiri" dengan nama file "file-2.pdf"
  And User mengupload "Cetak RUP" dengan nama file "file-3.pdf"
  And User mengupload "Kerangka Acuan Kerja" dengan nama file "file-4.pdf"
  And User mengupload "Daftar Kuantitas" dengan nama file "file-5.pdf"
  And User mengupload "Spesifikasi Teknis" dengan nama file "file-6.pdf"
  And User mengupload "Gambar" dengan nama file "file-7.pdf"
  And User mengupload "Rancangan Kontrak" dengan nama file "file-8.pdf"
  And User mengupload "Syarat-Syarat Umum Kontrak" dengan nama file "file-9.pdf"
  And User mengupload "Syarat-Syarat Khusus Kontrak" dengan nama file "file-10.pdf"
  And User mengupload "Dokumen Pendukung Lain" dengan nama file "file-11.pdf"
  And User mengirim aplikasi paket kepada "P2BJ Pelayanan"
  Then Status paket harusnya berisi "p2bj"