CREATE TABLE IF NOT EXISTS `#__test_construct` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`key` VARCHAR(255)  NOT NULL ,
`question` TEXT NOT NULL ,
`type_answer` VARCHAR(255)  NOT NULL ,
`time_for_test` TIME NOT NULL ,
`test_for_user` INT(11)  NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;

