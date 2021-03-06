<?php

/*
    Question2Answer (c) Gideon Greenspan

    http://www.question2answer.org/


    File: qa-include/qa-page.php
    Version: See define()s at top of qa-include/qa-base.php
    Description: Routing and utility functions for page requests


    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    More about this license: http://www.question2answer.org/license.php
*/

    return array(
        'allow_change_usernames' => 'Izinkan pengguna yang memiliki kiriman untuk mengganti nama penggunanya:',
        'allow_close_questions' => 'Izinkan penutupan pertanyaan secara manual:',
        'allow_login_email_only' => 'Masuk menggunakan alamat surel (bukan nama pengguna):',
        'allow_multi_answers' => 'Izinkan pengguna mengirim lebih dari satu jawaban:',
        'allow_no_category' => 'Izinkan pertanyaan tanpa kategori',
        'allow_no_sub_category' => 'Izinkan pertanyaan dengan kategori, tetapi tanpa sub-kategori',
        'allow_private_messages' => 'Izinkan pesan pribadi antar pengguna:',
        'allow_user_walls' => 'Izinkan kiriman dinding di profil pengguna:',
        'allow_self_answer' => 'Izinkan pengguna untuk menjawab pertanyaannya sendiri:',
        'allow_view_q_bots' => 'Izinkan mesin pencari untuk melihat laman pertanyaan',
        'approve_user_required' => 'Semua pengguna baru harus diaprove:',
        'avatar_allow_gravatar' => 'Izinkan avatar ^1Gravatar^2:',
        'avatar_allow_upload' => 'Izinkan pengguna mengunggah avatar:',
        'avatar_default_show' => 'Avatar standar:',
        'avatar_message_list_size' => 'Ukuran avatar pada daftar pesan:',
        'avatar_profile_size' => 'Ukuran avatar pada laman profil pengguna:',
        'avatar_q_list_size' => 'Ukuran avatar pada daftar pertanyaan:',
        'avatar_q_page_a_size' => 'Ukuran avatar pada jawaban:',
        'avatar_q_page_c_size' => 'Ukuran avatar pada komentar:',
        'avatar_q_page_q_size' => 'Ukuran avatar pada pertanyaan:',
        'avatar_store_size' => 'Ukuran maksimum avatar:',
        'avatar_users_size' => 'Ukuran maksimum pada bagian atas laman pengguna:',
        'block_bad_words' => 'Kata yang disensor - pisahkan dengan spasi atau koma:',
        'block_ips_write' => 'Alamat IP yang dicekal - pisahkan dengan spasi atau koma:',
        'captcha_module' => 'Gunakan modul captcha:',
        'captcha_on_anon_post' => 'Gunakan captcha untuk kiriman anonim:',
        'captcha_on_feedback' => 'Gunakan captcha untuk formulir masukan:',
        'captcha_on_register' => 'Gunakan captcha untuk registrasi pengguna:',
        'captcha_on_reset_password' => 'Gunakan captcha untuk formulir reset sandi:',
        'captcha_on_unapproved' => 'Gunakan captcha untuk pengguna yang belum diverifikasi:',
        'captcha_on_unconfirmed' => 'Gunakan captcha bila surel belum dikonfirmasi:',
        'columns_tags' => 'Kolom pada laman Tag:',
        'columns_users' => 'Kolom pada laman Pengguna:',
        'comment_on_as' => 'Izinkan komentar terhadap jawaban:',
        'comment_on_qs' => 'Izinkan komentar terhadap pertanyaan:',
        'confirm_user_emails' => 'Minta konfirmasi surel pengguna:',
        'confirm_user_required' => 'Pengguna baru harus melengkapi konfirmasi:',
        'custom_home_content' => 'Konten beranda - HTML diizinkan:',
        'custom_home_heading' => 'Kepala beranda:',
        'default_privacy' => 'Privasi: Alamat surel Anda tidak akan dibagikan atau dijual kepada pihak ketiga.',
        'default_sidebar' => "Selamat datang di ^, tempat Anda dapat mengajukan pertanyaan dan menerima jawaban dari anggota komunitas.",
        'default_subject' => 'Pesan dari ^',
        'default_suffix' => '',
        'do_ask_check_qs' => 'Periksa pertanyaan serupa saat mengirim:',
        'do_close_on_select' => 'Tutup pertanyaan yang memiliki jawaban terpilih:',
        'do_complete_tags' => 'Tampilkan tag sesuai saat menulis:',
        'do_count_q_views' => 'Hitung jumlah tayangan pertanyaan:',
        'do_example_tags' => 'Tampilkan contoh tag berdasarkan pertanyaan:',
        'editor_for_as' => 'Editor standar untuk jawaban:',
        'editor_for_cs' => 'Editor standar untuk komentar:',
        'editor_for_qs' => 'Editor standar untuk pertanyaan:',
        'email_privacy' => 'Catatan privasi untuk alamat surel - HTML diizinkan:',
        'extra_field_active' => 'Bidang suaian untuk informasi tambahan pada formulir pertanyaan:',
        'extra_field_display_label' => 'Tampilkan informasi tambahan pada laman pages dengan label:',
        'extra_field_display' => 'Tampilkan informasi tambahan pada laman pertanyaan',
        'feed_for_activity' => 'Umpan bagi aktivitas terbaru:',
        'feed_for_hot' => 'Umpan bagi pertanyaan seru:',
        'feed_for_qa' => 'Umpan bagi pertanyaan dan jawaban terbaru:',
        'feed_for_questions' => 'Umpan bagi pertanyaan terbaru:',
        'feed_for_search' => 'Umpan bagi hasil pencarian:',
        'feed_for_tag_qs' => 'Umpan untuk tiap tag pertanyaan:',
        'feed_for_unanswered' => 'Umpan untuk pertanyaan yang belum terjawab:',
        'feed_full_text' => 'Sertakan teks lengkap pada umpan:',
        'feed_number_items' => 'Panjang maksimum umpan:',
        'feed_per_category' => 'Umpan individu per kategori:',
        'feedback_email' => 'Alamat surel untuk pesan admin - tidak ditampilkan kepada pengguna:',
        'feedback_enabled' => 'Sediakan laman masukan untuk pengguna',
        'flagging_hide_after' => 'Sembunyikan secara otomatis kiriman yang mencapai:',
        'flagging_notify_every' => 'Sureli saya lagi setelah setiap tambahan:',
        'flagging_notify_first' => 'Sureli saya saat kiriman menerima:',
        'flagging_of_posts' => 'Izinkan penandaan kiriman:',
        'follow_on_as' => 'Izinkan pertanyaan dikaitkan dengan jawaban:',
        'from_email' => 'Alamat pengirim pesan dari situs:',
        'hot_weight_a_age' => 'Pertanyaan mendapat jawaban baru:',
        'hot_weight_answers' => 'Pertanyaan mendapat banyak jawaban:',
        'hot_weight_q_age' => 'Pertanyaan baru:',
        'hot_weight_views' => 'Pertanyaan mendapat banyak tayangan:',
        'hot_weight_votes' => 'Pertanyaan mendapat banyak dukungan:',
        'links_in_new_window' => 'Buka tautan URL pada jendela baru:',
        'logo_height' => 'Tinggi logo:',
        'logo_show' => 'Tampilkan gambar logo pada kepala laman',
        'logo_url' => 'URL logo - absolut atau relatif terhadap akar website:',
        'logo_width' => 'Lebar logo:',
        'mailing_body' => 'Teks pesan:',
        'mailing_enabled' => 'Izinkan kiriman massal kepada semua pengguna',
        'mailing_from_email' => 'Surel pengirim:',
        'mailing_from_name' => 'Nama pengirim:',
        'mailing_per_minute' => 'Kecepatan pengiriman maksimum:',
        'mailing_subject' => 'Baris subjek:',
        'match_1' => 'Paling sempit',
        'match_2' => 'Lebih sempit',
        'match_3' => 'Standar',
        'match_4' => 'Lebih lebar',
        'match_5' => 'Paling lebar',
        'match_ask_check_qs' => 'Pencocokan pertanyaan yang mirip:',
        'match_example_tags' => 'Pencocokan tag contoh:',
        'match_related_qs' => 'Pencocokan pertanyaan terkait:',
        'max_len_q_title' => 'Panjang maksimum judul pertanyaan:',
        'max_num_q_tags' => 'Jumlah maksimum tag:',
        'max_rate_ip_as' => 'Batas kecepatan penambahan jawaban:',
        'max_rate_ip_cs' => 'Batas kecepatan pengiriman komentar:',
        'max_rate_ip_flags' => 'Batas kecepatan penandaan kiriman:',
        'max_rate_ip_logins' => 'Batas kecepatan upaya masuk:',
        'max_rate_ip_messages' => 'Batas kecepatan pengiriman pesan pribadi:',
        'max_rate_ip_qs' => 'Batas kecepatan pengajuan pertanyaan:',
        'max_rate_ip_registers' => 'Batas kecepatan pendaftaran pengguna:',
        'max_rate_ip_uploads' => 'Batas kecepatan pengunggahan berkas:',
        'max_rate_ip_votes' => 'Batas kecepatan pemberian suara:',
        'max_rate_user_as' => 'Jawaban maksimum per pengguna per jam:',
        'max_rate_user_cs' => 'Komentar maksimum per pengguna per jam:',
        'max_rate_user_flags' => 'Tanda maksimum per pengguna per jam:',
        'max_rate_user_messages' => 'Pesan pribadi maksimum per pengguna per jam:',
        'max_rate_user_qs' => 'Pertanyaan maksimum per pengguna per jam:',
        'max_rate_user_uploads' => 'Pengunggahan maksimum per pengguna per jam:',
        'max_rate_user_votes' => 'Pemberian suara maksimum per pengguna per jam:',
        'min_len_a_content' => 'Panjang minimum jawaban:',
        'min_len_c_content' => 'Panjang minimum komentar:',
        'min_len_q_content' => 'Panjang minimum badan pertanyaan:',
        'min_len_q_title' => 'Panjang minimum judul pertanyaan:',
        'min_num_q_tags' => 'Jumlah minimum tag:',
        'moderate_anon_post' => 'Moderasikan kiriman anonim:',
        'moderate_by_points' => 'Moderasikan pengguna berpoin rendah:',
        'moderate_edited_again' => 'Moderasikan kiriman setelah diedit ulang:',
        'moderate_notify_admin' => 'Sureli saya bila ada kiriman yang perlu dimoderasi:',
        'moderate_points_limit' => 'Moderasikan pengguna berpoin lebih rendah daripada:',
        'moderate_unapproved' => 'Moderasikan pengguna yang belum diaprove:',
        'moderate_unconfirmed' => 'Moderasikan pengguna yang tidak terkonfirmasi:',
        'moderate_update_time' => 'Waktu yang ditampilkan pada kiriman yang dimoderasi:',
        'moderate_users' => 'Aktifkan moderasi (approval) untuk pengguna:',
        'neat_urls' => 'Struktur URL:',
        'notify_admin_q_post' => 'Sureli alamat ini saat pertanyaan diajukan',
        'notify_users_default' => 'Centang kotak notifikasi surel:',
        'option_default' => 'Standar',
        'page_size_activity' => 'Panjang laman Semua Aktivitas:',
        'page_size_ask_check_qs' => 'Jumlah maksimum pertanyaan serupa yang ditampilkan:',
        'page_size_ask_tags' => 'Jumlah maksimum petunjuk tag yang ditampilkan:',
        'page_size_home' => 'Panjang laman:',
        'page_size_hot_qs' => 'Panjang laman Seru!:',
        'page_size_q_as' => 'Jawaban maksimum per laman:',
        'page_size_qs' => 'Panjang laman Pertanyaan:',
        'page_size_related_qs' => 'Pertanyaan terkait maksimum:',
        'page_size_search' => 'Hasil pencarian per laman:',
        'page_size_tag_qs' => 'Pertanyaan pada tiap laman tag:',
        'page_size_tags' => 'Panjang laman Tag:',
        'page_size_una_qs' => 'Panjang laman Belum Terjawab:',
        'page_size_users' => 'Panjang laman Pengguna:',
        'page_size_wall' => 'Jumlah kiriman dinding per halaman:',
        'pages_prev_next' => 'Tautan laman sebelumnya/berikutnya:',
        'permit_admins' => 'Administrator',
        'permit_all' => 'Semua orang',
        'permit_approve_users' => 'Menyetujui pengguna yang terdaftar:',
        'permit_approved' => 'Hanya pengguna yang disetujui',
        'permit_approved_points' => 'Hanya pengguna yang disetujui dengan poin yang cukup',
        'permit_block' => 'Mencekal atau melepas cekalan pengguna atau IP:',
        'permit_confirmed' => 'Pengguna terdaftar surel terkonfirmasi',
        'permit_create_admins' => 'Mengangkat administrator:',
        'permit_create_eds_mods' => 'Mengangkat editor dan moderator:',
        'permit_create_experts' => 'Mengangkat pakar:',
        'permit_delete_users' => 'Menghapus pengguna:',
        'permit_editors' => 'Editor, Moderator, Admin',
        'permit_experts' => 'Pakar, Editor, Moderator, Admin',
        'permit_moderators' => 'Moderator dan Admin',
        'permit_points_confirmed' => 'Terdaftar, surel terkonfirmasi, poin cukup',
        'permit_points' => 'Pengguna terdaftar berpoin cukup',
        'permit_see_emails' => 'Melihat alamat surel pengguna:',
        'permit_supers' => 'Administrator Super',
        'permit_users' => 'Pengguna terdaftar',
        'place_full_below_content' => 'Lebar penuh - Setelah konten',
        'place_full_below_footer' => 'Lebar penuh - Setelah kaki',
        'place_full_below_nav' => 'Lebar penuh - Setelah navigasi',
        'place_full_top' => 'Lebar penuh - Atas laman',
        'place_main_below_lists' => 'Area utama - Setelah daftar',
        'place_main_below_title' => 'Area utama - Setelah judul',
        'place_main_bottom' => 'Area utama - Bawah',
        'place_main_top' => 'Area utama - Atas',
        'place_side_below_categories' => 'Panel sisi - Setelah kategori',
        'place_side_below_sidebar' => 'Panel sisi - Setelah kotak bilah sisi',
        'place_side_last' => 'Panel sisi - Terakhir',
        'place_side_top' => 'Panel sisi - Teratas',
        'points_a_selected' => 'Jawaban Anda dipilih sebagai jawaban terbaik:',
        'points_a_voted_max_gain' => 'Batas dukungan terhadap tiap jawaban:',
        'points_a_voted_max_loss' => 'Batas tolakan terhadap tiap jawaban:',
        'points_base' => 'Tambahkan untuk semua pengguna:',
        'points_multiple' => 'Kalikan semua poin:',
        'points_per_a_voted_down' => 'Untuk setiap tolakan terhadap jawaban:',
        'points_per_a_voted_up' => 'Untuk setiap dukungan terhadap jawaban:',
        'points_per_q_voted_down' => 'Untuk setiap tolakan terhadap pertanyaan:',
        'points_per_q_voted_up' => 'Untuk setiap dukungan terhadap pertanyaan:',
        'points_post_a' => 'Mengirim jawaban:',
        'points_post_q' => 'Mengirim pertanyaan:',
        'points_q_voted_max_gain' => 'Batas dukungan terhadap tiap pertanyaan:',
        'points_q_voted_max_loss' => 'Batas tolakan terhadap tiap pertanyaan:',
        'points_select_a' => 'Memilih jawaban terbaik bagi pertanyaan Anda:',
        'points_vote_down_a' => 'Menolak jawaban:',
        'points_vote_down_q' => 'Menolak pertanyaan:',
        'points_vote_up_a' => 'Mendukung jawaban:',
        'points_vote_up_q' => 'Mendukung pertanyaan:',
        'q_urls_remove_accents' => 'Hapus akses dari URL pertanyaan:',
        'q_urls_title_length' => 'Panjang judul pertanyaan pada URL:',
        'register_notify_admin' => 'Kirimi surel jika ada pengguna baru:',
        'search_module' => 'Gunakan modul pencarian:',
        'show_a_form_immediate' => 'Tampilkan langsung formulir jawaban:',
        'show_always' => 'Selalu',
        'show_c_reply_buttons' => 'Tampilkan tombol balas pada komentar:',
        'show_custom_answer' => 'Pesan suaian pada formulir jawaban - HTML diizinkan:',
        'show_custom_ask' => 'Pesan suaian pada formulir pertanyaan - HTML diizinkan:',
        'show_custom_comment' => 'Pesan suaian pada formulir komentar  - HTML diizinkan:',
        'show_custom_footer' => 'HTML suaian pada bagian bawah tiap laman:',
        'show_custom_header' => 'HTML suaian pada bagian atas tiap laman:',
        'show_custom_home' => 'Konten suaian pada beranda; pengganti daftar',
        'show_custom_in_head' => 'HTML suaian pada bagian <HEAD> tiap laman:',
        'show_custom_register' => 'Pesan suaian pada formulir pendaftaran - HTML diizinkan:',
        'show_custom_sidebar' => 'HTML suaian pada kotak bilah sisi pada tiap laman:',
        'show_custom_sidepanel' => 'HTML suaian pada panel sisi pada tiap laman:',
        'show_custom_welcome' => 'Pesan suaian pada surel yang dikirim kepada pengguna terdaftar baru:',
        'show_fewer_cs_count' => 'Jika sebagian tersembunyi, tampilkan yang terbaru:',
        'show_fewer_cs_from' => 'Sembunyikan sebagian komentar jika lebih dari:',
        'show_full_date_days' => 'Tampilkan tanggal lengkap setelah:',
        'show_home_description' => 'Sertakan <META> description pada laman beranda:',
        'show_if_no_as' => 'Jika tidak ada jawaban',
        'show_message_history' => 'Simpan dan tampilkan riwayat pesan pribadi:',
        'show_never' => 'Jangan pernah',
        'show_notice_visitor' => 'Pesan pada bagian atas untuk pengunjung saat pertama datang - HTML diizinkan:',
        'show_notice_welcome' => 'Pesan pada bagian atas untuk pengguna terdaftar baru - HTML diizinkan:',
        'show_selected_first' => 'Pindahkan jawaban terpilih ke bagian atas:',
        'show_url_links' => 'Lacak dan tautkan URL pada kiriman:',
        'show_user_points' => 'Tampilkan poin di samping nama pengguna:',
        'show_user_titles' => 'Tampilkan nama di samping nama pengguna:',
        'show_view_counts' => 'Tampilkan jumlah tayangan pada daftar pertanyaan:',
        'show_view_count_q_page' => 'Tampilkan jumlah tayangan pada halaman pertanyaan:',
        'show_when_created' => 'Tampilkan usia kiriman pengguna:',
        'site_language' => 'Bahasa situs:',
        'site_maintenance' => 'Nonaktifkan situs sementara untuk pemeliharaan',
        'site_theme_mobile' => 'Tema seluler:',
        'site_theme' => 'Tema situs:',
        'site_title' => 'Nama situs:',
        'site_url' => 'URL pilihan:',
        'smtp_active' => 'Kirim surel via SMTP alih-alih lokal',
        'smtp_address' => 'Alamat server SMTP:',
        'smtp_authenticate' => 'Nama pengguna dan sandi SMTP',
        'smtp_password' => 'Sandi SMTP:',
        'smtp_port' => 'Porta server SMTP:',
        'smtp_secure_none' => 'Tidak ada',
        'smtp_secure' => 'Koneksi aman SMTP:',
        'smtp_username' => 'Nama pengguna SMTP:',
        'sort_answers_by' => 'Urutkan jawaban menurut:',
        'sort_time' => 'Waktu',
        'sort_votes' => 'Suara',
        'suspend_register_users' => 'Matikan sementara pendaftaran pengguna baru:',
        'tag_separator_comma' => 'Gunakan koma sebagai satu-satunya pemisah tag:',
        'tags_or_categories' => 'Klasifikasi pertanyaan:',
        'time_approved' => 'Waktu diaprove',
        'time_written' => 'Waktu ditulis',
        'votes_separated' => 'Pisahkan pemberian dukungan dan tolakan:',
        'voting_on_as' => 'Izinkan pemberian suara untuk jawaban:',
        'voting_on_q_page_only' => 'Izinkan pemberian suara hanya pada laman pertanyaan:',
        'voting_on_qs' => 'Izinkan pemberian suara untuk pertanyaan:',
    );


/*
    Omit PHP closing tag to help avoid accidental output
*/