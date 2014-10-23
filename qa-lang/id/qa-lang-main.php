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
        '1_answer' => '1 jawaban',
		'1_unanswered' => '1 belum terjawab',
        '1_comment' => '1 komentar',
        '1_day' => '1 hari',
        '1_disliked' => '1 tolak',
        '1_flag' => '1 tanda',
        '1_hour' => '1 jam',
        '1_liked' => '1 terima',
        '1_minute' => '1 menit',
        '1_month' => '1 bulan',
        '1_point' => '1 poin',
        '1_question' => '1 pertanyaan',
        '1_second' => '1 detik',
        '1_tag' => '1 tag',
        '1_user' => '1 pengguna',
        '1_view' => '1 tayangan',
        '1_vote' => '1 suara',
        '1_week' => '1 minggu',
        '1_year' => '1 tahun',
        'add_category_x_favorites' => 'Tambahkan kategori ^ ke favorit saya',
        'add_favorites' => 'Tambahkan ke favorit saya',
        'add_tag_x_favorites' => 'Tambahkan tag ^ ke favorit saya',
        'all_categories' => 'Kategori',
        'anonymous' => 'anonim',
        'answer_edited' => 'jawaban diedit',
        'answer_reshown' => 'jawaban ditampilkan ulang',
        'answer_selected' => 'jawaban dipilih',
        'answered_qs_in_x' => 'Pertanyaan yang terbanyak dijawab pada ^',
        'answered_qs_title' => 'Pertanyaan yang terbanyak dijawab',
        'answered' => 'dijawab',
        'asked_related_q' => 'tanyakan pertanyaan terkait',
        'asked' => 'ditanyakan',
        'by_x' => 'oleh ^',
        'cancel_button' => 'Batal',
        'closed' => 'ditutup',
        'comment_edited' => 'komentar diedit',
        'comment_moved' => 'komentar dipindahkan',
        'comment_reshown' => 'komentar ditampilkan ulang',
        'commented' => 'dikomentari',
        'date_day_min_digits' => 1, // 1 or 2
        'date_format_other_years' => '^day ^month ^year',
        'date_format_this_year' => '^day ^month',
        'date_month_1' => 'Jan',
        'date_month_2' => 'Feb',
        'date_month_3' => 'Mar',
        'date_month_4' => 'Apr',
        'date_month_5' => 'Mei',
        'date_month_6' => 'Jun',
        'date_month_7' => 'Jul',
        'date_month_8' => 'Agu',
        'date_month_9' => 'Sep',
        'date_month_10' => 'Okt',
        'date_month_11' => 'Nov',
        'date_month_12' => 'Des',
        'date_year_digits' => 4, // 2 or 4
        'edited' => 'diedit',
        'field_required' => 'Harap isi bidang ini',
        'general_error' => 'Terjadi galat pada server - harap coba lagi.',
        'hidden' => 'disembunyikan',
        'highest_users' => 'Pengguna berskor tertinggi',
        'hot_qs_in_x' => 'Pertanyaan seru di ^',
        'hot_qs_title' => 'Pertanyaan seru',
        'image_not_read' => 'Gambar tidak dapat dibaca. Harap unggah salah satu dari: ^',
        'image_too_big_x_pc' => 'Gambar ini terlalu besar. Harap perkecil menjadi ^%, lalu coba lagi.',
        'in_category_x' => 'dalam ^',
        'ip_address_x' => 'Alamat IP ^',
        'logged_in_x' => 'Halo ^',
        'max_length_x' => 'Panjang karakter maksimum adalah ^',
        'me' => 'saya',
        'meta_order' => '^what^when^where^who', // you can reorder but DO NOT translate! e.g. <answered> <15 hours ago> <in Problems> <by me (500 points)>
        'min_length_x' => 'Harap berikan informasi lebih lengkap - paling tidak ^ karakter',
        'max_upload_size_x' => 'Ukuran berkas maksimal adalah ^',
        'moved' => 'dipindahkan',
        'nav_activity' => 'Aktivitas',
        'nav_admin' => 'Admin',
        'nav_ask' => 'Ajukan Pertanyaan',
        'nav_categories' => 'Kategori',
        'nav_feedback' => 'Kirim masukan',
        'nav_home' => 'Beranda',
        'nav_hot' => 'Seru!',
        'nav_login' => 'Masuk',
        'nav_logout' => 'Keluar',
        'nav_most_answers' => 'Jawaban terbanyak',
        'nav_most_recent' => 'Terbaru',
        'nav_most_views' => 'Tayangan terbanyak',
        'nav_most_votes' => 'Suara terbanyak',
        'nav_no_answer' => 'Tanpa jawaban',
        'nav_no_selected_answer' => 'Tanpa jawaban terpilih',
        'nav_no_upvoted_answer' => 'Tanpa jawaban terdukung',
        'nav_qa' => 'Beranda',
        'nav_qs' => 'Pertanyaan',
        'nav_register' => 'Mendaftar',
        'nav_tags' => 'Tag',
        'nav_unanswered' => 'Belum Terjawab',
        'nav_updates' => 'Pembaruan Saya',
        'nav_users' => 'Pengguna',
        'no_active_users' => 'Tidak ada pengguna aktif',
        'no_answers_found' => 'Tidak ada jawaban',
        'no_answers_in_x' => 'Tidak ada jawaban di ^',
        'no_categories_found' => 'Tidak ada kategori',
        'no_category' => 'Tidak berkategori',
        'no_comments_found' => 'Tidak ada komentar',
        'no_comments_in_x' => 'Tidak ada komentar di ^',
        'no_questions_found' => 'Tidak ada pertanyaan',
        'no_questions_in_x' => 'Tidak ada pertanyaan di ^',
        'no_related_qs_title' => 'Tidak ada pertanyaan terkait',
        'no_results_for_x' => 'Tidak ada hasil di ^',
        'no_tags_found' => 'Tidak ada tag',
        'no_una_questions_found' => 'Tidak ada pertanyaan yang belum dijawab',
        'no_una_questions_in_x' => 'Tidak ada pertanyaan yang belum dijawab di ^',
        'no_unselected_qs_found' => 'Tidak ada pertanyaan tanpa jawaban terpilih',
        'no_unupvoteda_qs_found' => 'Tidak ada pertanyaan tanpa jawaban terdukung',
        'page_label' => 'Laman:',
        'page_next' => 'berikutnya',
        'page_not_found' => 'Laman tak ditemukan',
        'page_prev' => 'sebelumnya',
        'popular_tags' => 'Tag terpopuler',
		'powered_by' => 'Diberdayakan oleh ^',
        'questions_tagged_x' => 'Pertanyaan terbaru bertag ^',
        'recategorized' => 'dikategorikan ulang',
        'recent_activity_in_x' => 'Aktivitas terbaru di ^',
        'recent_activity_title' => 'Aktivitas terbaru',
        'recent_as_in_x' => 'Pertanyaan yang baru dijawab di ^',
        'recent_as_title' => 'Pertanyaan yang baru dijawab',
        'recent_cs_in_x' => 'Komentar yang baru ditambahkan di ^',
        'recent_cs_title' => 'Komentar yang baru ditambahkan',
        'recent_qs_as_in_x' => 'Pertanyaan dan jawaban terbaru di ^',
        'recent_qs_as_title' => 'Pertanyaan dan jawaban terbaru',
        'recent_qs_in_x' => 'Pertanyaan terbaru di ^',
        'recent_qs_title' => 'Pertanyaan terbaru',
        'related_qs_title' => 'Pertanyaan terkait',
        'remove_favorites' => 'Hapus dari favorit saya',
        'remove_x_favorites' => 'Hapus ^ dari favorit saya',
        'reopened' => 'dibuka ulang',
        'reshown' => 'ditampilkan ulang',
        'results_for_x' => 'Hasil pencarian untuk ^',
        'retagged' => 'ditag ulang',
        'save_button' => 'Simpan Perubahan',
        'search_button' => 'Cari',
        'search_explanation' => 'Harap masukkan teks pada kotak pencarian dan coba lagi.',
        'search_title' => 'Hasil pencarian',
        'selected' => 'dipilih',
        'send_button' => 'Kirim',
        'suggest_ask' => 'Bantu untuk memulai dengan ^1mengajukan pertanyaan^2.',
        'suggest_category_qs' => 'Untuk melihat lebih banyak, klik semua ^1pertanyaan pada kategori ini^2.',
        'suggest_qs_tags' => 'Untuk melihat lebih banyak, klik ^1daftar lengkap pertanyaan^2 atau ^3tag populer^4.',
        'suggest_qs' => 'Untuk melihat lebih banyak, klik ^1daftar lengkap pertanyaan^2.',
        'unanswered_qs_in_x' => 'Pertanyaan tanpa jawaban di ^',
        'unanswered_qs_title' => 'Pertanyaan tanpa jawaban terbaru',
        'unselected_qs_in_x' => 'Pertanyaan tanpa jawaban terpilih di ^',
        'unselected_qs_title' => 'Pertanyaan tanpa jawaban terpilih terbaru',
        'unupvoteda_qs_in_x' => 'Pertanyaan tanpa jawaban terdukung di ^',
        'unupvoteda_qs_title' => 'Pertanyaan tanpa jawaban terdukung terbaru',
        'upload_limit' => 'Terlalu banyak unggahan - harap coba satu jam lagi',
        'view_q_must_be_approved' => 'Akun anda harus diverifikasi terlebih dahulu untuk melihat halaman pertanyaan.',
        'view_q_must_confirm' => 'Harap ^5konfirmasikan alamat surel Anda^6 untuk melihat laman pertanyaan.',
        'view_q_must_login' => 'Harap ^1masuk^2 atau ^3mendaftar^4 untuk melihat laman pertanyaan.',
        'viewed_qs_in_x' => 'Pertanyaan dengan tayangan terbanyak di ^',
        'viewed_qs_title' => 'Pertanyaan dengan tayangan terbanyak',
        'vote_disabled_approve' => 'Akun anda harus diapprove terlebih dahulu sebelum memberikan suara',
        'vote_disabled_down' => 'Pemberian suara hanya dapat dilakukan pengguna tertentu',
        'vote_disabled_down_approve' => 'Pemberian suara hanya dapat dilakukan pengguna yang telah diapprove',
        'vote_disabled_hidden_a' => 'Anda tidak dapat memberi suara kepada jawaban tersembunyi',
        'vote_disabled_hidden_q' => 'Anda tidak dapat memberi suara kepada pertanyaan tersembunyi',
        'vote_disabled_level' => 'Pemberian suara hanya dapat dilakukan pengguna tertentu',
        'vote_disabled_my_a' => 'Anda tidak dapat memberi suara kepada jawaban Anda sendiri',
        'vote_disabled_my_q' => 'Anda tidak dapat memberi suara kepada pertanyaan Anda sendiri',
        'vote_disabled_q_page_only' => 'Lihat pertanyaan ini untuk memberi suara',
        'vote_down_must_confirm' => 'Harap ^5konfirmasikan alamat surel Anda^6 untuk memberi suara.',
        'vote_down_popup' => 'Klik untuk memberi suara',
        'vote_limit' => 'Terlalu banyak suara diberikan - harap coba satu jam lagi',
        'vote_must_confirm' => 'Harap ^5konfirmasikan alamat surel Anda^6 untuk memberi suara.',
        'vote_must_login' => 'Harap ^1masuk^2 atau ^3mendaftar^4 untuk memberi suara.',
        'vote_not_allowed' => 'Pemberian suara tidak diizinkan',
        'vote_up_popup' => 'Klik untuk memberi suara',
        'voted_down_popup' => 'Anda telah memberi suara - klik untuk membatalkan',
        'voted_qs_in_x' => 'Pertanyaan dengan suara terbanyak di ^',
        'voted_qs_title' => 'Pertanyaan dengan suara terbanyak',
        'voted_up_popup' => 'Anda telah memberi suara - klik untuk membatalkan',
        'written' => '', // blank in English - placeholder for other languages
        'x_ago' => '^ yang lalu',
        'x_answers' => '^ jawaban',
		'x_unanswered' => '^ belum terjawab',
        'x_comments' => '^ komentar',
        'x_days' => '^ hari',
        'x_disliked' => '^ tolak',
        'x_flags' => '^ tanda',
        'x_hours' => '^ jam',
        'x_liked' => '^ terima',
        'x_minutes' => '^ menit',
        'x_months' => '^ bulan',
        'x_points' => '^ poin',
        'x_questions' => '^ pertanyaan',
        'x_seconds' => '^ detik',
        'x_tags' => '^ tag',
        'x_users' => '^ pengguna',
        'x_views' => '^ tayangan',
        'x_votes' => '^ suara',
        'x_weeks' => '^ minggu',
        'x_years' => '^ tahun',
    );


/*
    Omit PHP closing tag to help avoid accidental output
*/