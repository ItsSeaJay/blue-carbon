CREATE TABLE `blue_carbon`.`projects` ( `id` INT(16) NOT NULL AUTO_INCREMENT , `title` VARCHAR(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `description` TEXT NOT NULL , `release_date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `thumbnail` VARCHAR(512) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
