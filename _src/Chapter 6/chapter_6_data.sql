CREATE TABLE `BlogPosts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `BlogPosts` (`id`, `title`, `content`, `post_date`)
VALUES
	(1,'Hello World','This is my first post!','2013-05-01 13:05:00'),
	(2,'Another Sample Post','Some more great content.','2013-05-10 14:42:00');
