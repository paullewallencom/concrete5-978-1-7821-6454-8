CREATE TABLE `Cities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `Cities` (`id`, `name`, `state_id`)
VALUES
	(1,'New York',2),
	(2,'Buffalo',2),
	(3,'Green Bay',1),
	(4,'Chicago',3),
	(5,'San Francisco',4),
	(6,'San Diego',4),
	(7,'Oakland',4);


CREATE TABLE `States` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
);

INSERT INTO `States` (`id`, `name`)
VALUES
	(1,'Wisconsin'),
	(2,'New York'),
	(3,'Illinois'),
	(4,'California');