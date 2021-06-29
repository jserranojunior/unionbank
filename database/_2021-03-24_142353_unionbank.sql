DROP TABLE IF EXISTS admins;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS bonus_pasanaku;
CREATE TABLE `bonus_pasanaku` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS migrations;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS password_resets;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS saldos;
CREATE TABLE `saldos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) NOT NULL,
  `valor` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_efetuada` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_bonus` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS smart_saldos;
CREATE TABLE `smart_saldos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) NOT NULL,
  `valor` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_efetuada` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS smart_transacoes;
CREATE TABLE `smart_transacoes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) NOT NULL,
  `valor` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `data_efetuada` datetime NOT NULL,
  `data_agendada` datetime NOT NULL,
  `id_admin` bigint(20) DEFAULT NULL,
  `pagamento_feito` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_transfer_user` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipodeposito` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localdeposito` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS transacoes;
CREATE TABLE `transacoes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) NOT NULL,
  `valor` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `data_efetuada` datetime NOT NULL,
  `data_agendada` datetime NOT NULL,
  `id_admin` bigint(20) DEFAULT NULL,
  `pagamento_feito` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_bonus` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_transfer_user` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` bigint(20) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `celular` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mae` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conjugue` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logradouro` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dependente` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banco` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conta` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agencia` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipodeconta` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacoes` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_cpf_unique` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS user_portal_saude;
CREATE TABLE `user_portal_saude` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS valores_smartcoin;
CREATE TABLE `valores_smartcoin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;






INSERT INTO migrations(id,migration,batch) VALUES(1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_11_17_124008_create_admins_table',1),(4,'2017_11_17_191916_admins',1),(5,'2017_11_28_114656_users_info',1),(6,'2017_12_01_113651_add_coluns_phone_dt_nascimento',1),(7,'2017_12_05_125940_transacoes',1),(8,'2017_12_22_163331_saldos',1),(9,'2018_01_29_092603_smart_transacoes',1),(10,'2018_01_29_093419_smart_saldos',1),(11,'2018_02_23_115157_bonus_pasanaku',1),(12,'2018_02_23_134825_add_bonus_id',1),(13,'2018_02_23_135213_add_bonus_id_transacoes',1),(14,'2018_03_12_154352_add_colluns',1),(15,'2018_04_11_112744_valores_smartcoin',1),(16,'2018_06_08_155248_modify-cpf-cnpj',1),(17,'2018_06_22_153307_id_transfer_user_add_transacoes',1),(18,'2018_06_22_153324_id_transfer_user_add_smart_transacoes',1),(19,'2019_11_06_235248_users_portal_saude',1),(20,'2019_11_12_190029_deposito_tipo_local',1),(21,'2019_11_26_175138_user_banco',1);

INSERT INTO password_resets(email,token,created_at) VALUES('contato@alvitre.com.br','$2y$10$oZS868yMeiuW1piOwdq.1eJkntdJxXMUKtbsjw4rhGaOCgFxUYS.K','2021-01-26 14:37:19');





INSERT INTO users(id,name,image,email,password,cpf,remember_token,created_at,updated_at,data_nascimento,celular,rg,mae,conjugue,cep,bairro,logradouro,cidade,numero,estado,facebook,dependente,banco,conta,agencia,tipodeconta,observacoes) VALUES(2,'Admin',NULL,'contato@alvitre.com.br','$2y$10$akmxsztVYCkmAeOwIpQi8.cRuLhF0plXQLan4r7U/3ouw88/cz0H6',NULL,'a8uwfZ8NW8mbDWlElNdtZ8Hm3xQoa4Hnq6p0RYkwoxiAD1YrNNkw0GIGvhLB','2021-01-26 14:40:46','2021-01-26 14:40:46',NULL,'+055(11)94643-9695',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'David de Oliveira Lira',NULL,'daviddelira@live.com','$2y$10$NMihpEDPG8e95dfMeYGUsOzBlRQ5lvZMpzrPPCvkpG1GNxfZ1YDB6',NULL,NULL,'2021-01-26 15:56:47','2021-01-26 15:56:47',NULL,'+055(11)19980-6893',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);








