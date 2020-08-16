-- we don't know how to generate root <with-no-name> (class Root) :(
create table admins
(
	id bigint unsigned auto_increment
		primary key,
	name varchar(191) not null,
	email varchar(191) not null,
	email_verified_at timestamp null,
	password varchar(191) not null,
	remember_token varchar(100) null,
	created_at timestamp null,
	updated_at timestamp null,
	constraint admins_email_unique
		unique (email)
)
collate=utf8mb4_unicode_ci;

create table akte_peru
(
	id bigint unsigned auto_increment
		primary key,
	id_perusahaan bigint unsigned not null,
	Akte_Pendirian_No varchar(191) not null,
	Bank varchar(191) not null,
	Rek varchar(191) not null,
	File_Akte varchar(191) not null,
	File_Pengesahan varchar(191) not null,
	Apt_No varchar(191) not null,
	Tgl_Apt date not null,
	File_Apt varchar(191) not null,
	Tgl_Direksi varchar(191) not null,
	File_ktp varchar(191) not null,
	File_Skm varchar(191) not null,
	File_Sp varchar(191) not null,
	remember_token varchar(100) null,
	created_at timestamp null,
	updated_at timestamp null
)
collate=utf8mb4_unicode_ci;

create table data_perusahaan
(
	id bigint unsigned auto_increment
		primary key,
	user_id bigint unsigned not null,
	divisi varchar(191) not null,
	jenisVendor varchar(191) not null,
	jenisbrg_pekerjaan varchar(191) not null,
	namaperusahaan varchar(191) not null,
	almtperusahan varchar(191) not null,
	telp varchar(12) not null,
	email varchar(191) not null,
	PIC varchar(191) not null,
	remember_token varchar(100) null,
	created_at timestamp null,
	updated_at timestamp null
)
collate=utf8mb4_unicode_ci;

create table keu_pjk
(
	id bigint unsigned auto_increment
		primary key,
	id_perusahaan int not null,
	NPWP_No varchar(191) not null,
	File_NPWP varchar(191) not null,
	Sppkp_No varchar(191) not null,
	File_Sppkp varchar(191) not null,
	Spt_No varchar(191) not null,
	File_Spt varchar(191) not null,
	Spp_No varchar(191) not null,
	File_Spp varchar(191) not null,
	bank varchar(191) not null,
	rekening int(25) not null,
	File_bank varchar(191) not null,
	Ekuitas varchar(191) not null,
	Kwalifikasi varchar(191) not null,
	File_Kd varchar(191) not null,
	remember_token varchar(100) null,
	created_at timestamp null,
	updated_at timestamp null
)
collate=utf8mb4_unicode_ci;

create table migrations
(
	id int unsigned auto_increment
		primary key,
	migration varchar(191) not null,
	batch int not null
)
collate=utf8mb4_unicode_ci;

create table password_resets
(
	email varchar(191) not null,
	token varchar(191) not null,
	created_at timestamp null
)
collate=utf8mb4_unicode_ci;

create index password_resets_email_index
	on password_resets (email);

create table persyaratanumum
(
	id bigint unsigned auto_increment
		primary key,
	id_perusahaan int not null,
	Skd_No varchar(191) not null,
	Tgl_Dom_Mul date not null,
	Tgl_Dom_Sel date not null,
	File_SDOM varchar(191) not null,
	File_Spmr varchar(191) not null,
	Tdp_no varchar(191) not null,
	Tgl_Tdp_Mul date not null,
	Tgl_Tdp_Sel date not null,
	File_Tdp varchar(191) not null,
	File_Spkd varchar(191) not null,
	lama_perushndirikan int not null,
	lamaprshn_krjsamapp int not null,
	File_srtifktkalibrasi varchar(191) not null,
	remember_token varchar(100) null,
	created_at timestamp null,
	updated_at timestamp null
)
collate=utf8mb4_unicode_ci;

create table qshe
(
	id bigint unsigned auto_increment
		primary key,
	id_perusahaan int not null,
	File_Iso varchar(191) not null,
	Penanggung_Jwb varchar(191) not null,
	File_OrgCV varchar(191) not null,
	File_Teknis varchar(191) not null,
	remember_token varchar(100) null,
	created_at timestamp null,
	updated_at timestamp null
)
collate=utf8mb4_unicode_ci;

create table users
(
	id bigint unsigned auto_increment
		primary key,
	name varchar(191) not null,
	email varchar(191) not null,
	email_verified_at timestamp null,
	password varchar(191) not null,
	is_admin tinyint(1) null,
	remember_token varchar(100) null,
	created_at timestamp null,
	updated_at timestamp null,
	constraint users_email_unique
		unique (email)
)
collate=utf8mb4_unicode_ci;



INSERT INTO eprocurement.admins (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES (1, 'Administrator', 'administrator@mail.com', null, '$2y$10$pOHd1ynmV.sUjIJCmarv2egSf6D6gWf7Ie.E0O9nVFWxM4/Jenmbu', null, '2020-08-11 03:38:39', '2020-08-11 03:38:39');
INSERT INTO eprocurement.akte_peru (id, id_perusahaan, Akte_Pendirian_No, Bank, Rek, File_Akte, File_Pengesahan, Apt_No, Tgl_Apt, File_Apt, Tgl_Direksi, File_ktp, File_Skm, File_Sp, remember_token, created_at, updated_at) VALUES (5, 31, '1212', 'bni', '121213', 'akte_1212_Kartu Uas.pdf', 'Pngshan_1212_Kartu Uas.pdf', '323', '2000-11-12', 'apt_1212_Kartu Uas.pdf', '12', 'ktp_1212_Kartu Uas.pdf', 'skm_1212_Kartu Uas.pdf', 'sp_1212_Kartu Uas.pdf', null, '2020-08-15 07:36:09', '2020-08-15 07:36:09');
INSERT INTO eprocurement.akte_peru (id, id_perusahaan, Akte_Pendirian_No, Bank, Rek, File_Akte, File_Pengesahan, Apt_No, Tgl_Apt, File_Apt, Tgl_Direksi, File_ktp, File_Skm, File_Sp, remember_token, created_at, updated_at) VALUES (6, 31, '1212', 'bni', '121213', 'akte_1212_Kartu Uas.pdf', 'Pngshan_1212_Kartu Uas.pdf', '323', '2000-11-12', 'apt_1212_Kartu Uas.pdf', '12', 'ktp_1212_Kartu Uas.pdf', 'skm_1212_Kartu Uas.pdf', 'sp_1212_Kartu Uas.pdf', null, '2020-08-15 07:36:25', '2020-08-15 07:36:25');
INSERT INTO eprocurement.akte_peru (id, id_perusahaan, Akte_Pendirian_No, Bank, Rek, File_Akte, File_Pengesahan, Apt_No, Tgl_Apt, File_Apt, Tgl_Direksi, File_ktp, File_Skm, File_Sp, remember_token, created_at, updated_at) VALUES (7, 32, '12', 'bni', '121212', 'akte_12_Kartu Uas.pdf', 'Pngshan_12_Kartu Uas.pdf', '2121', '2000-01-12', 'apt_12_Kartu Uas.pdf', '12', 'ktp_12_Kartu Uas.pdf', 'skm_12_Kartu Uas.pdf', 'sp_12_Kartu Uas.pdf', null, '2020-08-15 10:26:02', '2020-08-15 10:26:02');
INSERT INTO eprocurement.akte_peru (id, id_perusahaan, Akte_Pendirian_No, Bank, Rek, File_Akte, File_Pengesahan, Apt_No, Tgl_Apt, File_Apt, Tgl_Direksi, File_ktp, File_Skm, File_Sp, remember_token, created_at, updated_at) VALUES (8, 33, '123', '12de', '123', 'akte_123_FINAL TEST.pdf', 'Pngshan_123_FINAL TEST.pdf', '123', '2020-01-01', 'apt_123_FINAL TEST.pdf', '1', 'ktp_123_FINAL TEST.pdf', 'skm_123_FINAL TEST.pdf', 'sp_123_FINAL TEST.pdf', null, '2020-08-16 06:33:29', '2020-08-16 06:33:29');
INSERT INTO eprocurement.data_perusahaan (id, user_id, divisi, jenisVendor, jenisbrg_pekerjaan, namaperusahaan, almtperusahan, telp, email, PIC, remember_token, created_at, updated_at) VALUES (32, 1, 'q', 'q', 'q', 'q', 'q', '1213', 'q', 'q', null, '2020-08-15 10:23:36', '2020-08-15 10:23:36');
INSERT INTO eprocurement.data_perusahaan (id, user_id, divisi, jenisVendor, jenisbrg_pekerjaan, namaperusahaan, almtperusahan, telp, email, PIC, remember_token, created_at, updated_at) VALUES (33, 3, 'a', 's', 'd', 'd', 'd', '234324', 'admin@99auto.com', 'q', null, '2020-08-16 06:30:50', '2020-08-16 06:34:18');
INSERT INTO eprocurement.keu_pjk (id, id_perusahaan, NPWP_No, File_NPWP, Sppkp_No, File_Sppkp, Spt_No, File_Spt, Spp_No, File_Spp, bank, rekening, File_bank, Ekuitas, Kwalifikasi, File_Kd, remember_token, created_at, updated_at) VALUES (15, 31, '2121', 'npwp_2121_Kartu Uas.pdf', '1213', 'sppkp_2121_Kartu Uas.pdf', '121', 'spt_2121_Kartu Uas.pdf', '2323', 'spp_2121_Kartu Uas.pdf', 'bni', 121213, 'bank_2121_Kartu Uas.pdf', '233311', '< 1M', 'kd_2121_Kartu Uas.pdf', null, '2020-08-15 07:33:31', '2020-08-15 07:33:31');
INSERT INTO eprocurement.keu_pjk (id, id_perusahaan, NPWP_No, File_NPWP, Sppkp_No, File_Sppkp, Spt_No, File_Spt, Spp_No, File_Spp, bank, rekening, File_bank, Ekuitas, Kwalifikasi, File_Kd, remember_token, created_at, updated_at) VALUES (16, 32, '2121313', 'npwp_2121313_Kartu Uas.pdf', '232323', 'sppkp_2121313_Kartu Uas.pdf', '21212', 'spt_2121313_Kartu Uas.pdf', '12121', 'spp_2121313_Kartu Uas.pdf', 'bni', 2131121, 'bank_2121313_Kartu Uas.pdf', '2000323', '< 1M', 'kd_2121313_Kartu Uas.pdf', null, '2020-08-15 10:25:24', '2020-08-15 10:25:24');
INSERT INTO eprocurement.keu_pjk (id, id_perusahaan, NPWP_No, File_NPWP, Sppkp_No, File_Sppkp, Spt_No, File_Spt, Spp_No, File_Spp, bank, rekening, File_bank, Ekuitas, Kwalifikasi, File_Kd, remember_token, created_at, updated_at) VALUES (17, 33, '123', 'npwp_123_FINAL TEST.pdf', '123', 'sppkp_123_FINAL TEST.pdf', '123', 'spt_123_FINAL TEST.pdf', '123', 'spp_123_FINAL TEST.pdf', '2', 2, 'bank_123_FINAL TEST.pdf', '123', '1 < 10M', 'kd_123_FINAL TEST.pdf', null, '2020-08-16 06:33:03', '2020-08-16 06:37:09');
INSERT INTO eprocurement.persyaratanumum (id, id_perusahaan, Skd_No, Tgl_Dom_Mul, Tgl_Dom_Sel, File_SDOM, File_Spmr, Tdp_no, Tgl_Tdp_Mul, Tgl_Tdp_Sel, File_Tdp, File_Spkd, lama_perushndirikan, lamaprshn_krjsamapp, File_srtifktkalibrasi, remember_token, created_at, updated_at) VALUES (28, 32, '2121', '2020-08-15', '2020-08-15', 'sdom_2121_Kartu Uas.pdf', 'spmr_2121_Kartu Uas.pdf', '21212', '2020-08-15', '2020-08-15', 'tdp_2121_Kartu Uas.pdf', 'skpd_2121_Kartu Uas.pdf', 12, 3, 'sfk_2121_Kartu Uas.pdf', null, '2020-08-15 10:24:21', '2020-08-15 10:24:21');
INSERT INTO eprocurement.persyaratanumum (id, id_perusahaan, Skd_No, Tgl_Dom_Mul, Tgl_Dom_Sel, File_SDOM, File_Spmr, Tdp_no, Tgl_Tdp_Mul, Tgl_Tdp_Sel, File_Tdp, File_Spkd, lama_perushndirikan, lamaprshn_krjsamapp, File_srtifktkalibrasi, remember_token, created_at, updated_at) VALUES (29, 33, 'a', '2020-08-03', '2020-08-03', 'sdom_a_FINAL TEST.pdf', 'spmr_a_FINAL TEST.pdf', 's', '2020-08-03', '2020-08-03', 'tdp_a_FINAL TEST.pdf', 'skpd_a_FINAL TEST.pdf', 2, 3, 'sfk_a_FINAL TEST.pdf', null, '2020-08-16 06:31:23', '2020-08-16 06:31:23');
INSERT INTO eprocurement.qshe (id, id_perusahaan, File_Iso, Penanggung_Jwb, File_OrgCV, File_Teknis, remember_token, created_at, updated_at) VALUES (4, 32, 'iso_C:\\xampp\\tmp\\phpEA17.tmp_Kartu Uas.pdf', 'def', 'org_C:\\xampp\\tmp\\phpEA17.tmp_Kartu Uas.pdf', 'teknis_C:\\xampp\\tmp\\phpEA17.tmp_Kartu Uas.pdf', null, '2020-08-15 10:26:18', '2020-08-15 10:26:18');
INSERT INTO eprocurement.qshe (id, id_perusahaan, File_Iso, Penanggung_Jwb, File_OrgCV, File_Teknis, remember_token, created_at, updated_at) VALUES (5, 33, 'iso_/tmp/phpyV1wpS_FINAL TEST.pdf', '123', 'org_/tmp/phpyV1wpS_FINAL TEST.pdf', 'teknis_/tmp/phpyV1wpS_FINAL TEST.pdf', null, '2020-08-16 06:33:38', '2020-08-16 06:33:38');
INSERT INTO eprocurement.users (id, name, email, email_verified_at, password, is_admin, remember_token, created_at, updated_at) VALUES (1, 'ari', 'ari@mail.com', null, '$2y$10$C8aW4vPLRR1lRn/nBIXjg.XFwsq4GN9T4SEis/eidAVkjOgT3FMSW', null, 'sylSyB3UIOzSVDDPgKgJc3kjbgqbKIRbNhxkLRpDVLxOHqtd31bgMCtzEBA8', '2020-07-28 08:58:19', '2020-07-28 08:58:19');
INSERT INTO eprocurement.users (id, name, email, email_verified_at, password, is_admin, remember_token, created_at, updated_at) VALUES (2, 'Bagus Sadewo', 'bagussadewo42@gmail.com', null, '$2y$10$AzRQ1YQ2u36bBOpYNyi2BeNecCK0yUl9h3LuNCQr.TbjwyUjtfMMu', 1, null, '2020-08-16 06:29:31', '2020-08-16 06:29:31');
INSERT INTO eprocurement.users (id, name, email, email_verified_at, password, is_admin, remember_token, created_at, updated_at) VALUES (3, 'Gil Xyclo', 'gilxyclo@gmail.com', null, '$2y$10$n849ykXQ8iuG9.zsIFZVtu8lGEXN.kC14J3CoSecqsT3u3P/hY/nm', null, null, '2020-08-16 06:30:34', '2020-08-16 06:30:34');