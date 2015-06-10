CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `media_location` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `media_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_embed` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_type` tinyint(3) NOT NULL COMMENT '0 = Image, 1 = Video, 2 = Audio',
  `media_created_at` datetime NOT NULL,
  `media_updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_location_unique` (`media_name`,`media_location`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
