"dont run this file manually!"

CREATE TABLE IF NOT EXISTS `widget_options` ( 
`id` INT(11) NOT NULL AUTO_INCREMENT , 
`page_id` INT(11) NULL DEFAULT NULL , 
`widget_name` VARCHAR(256) NOT NULL DEFAULT '' ,
`option_name` VARCHAR(256) NOT NULL DEFAULT '' ,
 PRIMARY KEY (`id`)
);

ALTER TABLE `widget_options` ADD `template` VARCHAR(64) NOT NULL DEFAULT '' AFTER `id`;

CREATE TABLE IF NOT EXISTS `widget_options_lang` ( 
`id` INT(11) NOT NULL AUTO_INCREMENT , 
`widget_options_id` INT(11) NULL DEFAULT NULL , 
`language_id` INT(11) NULL DEFAULT NULL , 
`value` TEXT NOT NULL DEFAULT '' , 
PRIMARY KEY (`id`));

ALTER TABLE `property` CHANGE `is_visible` `is_visible` TINYINT(4) NULL DEFAULT '1';
