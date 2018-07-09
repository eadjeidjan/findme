<<<<<<< HEAD

# Fixed problem from 1.4.2
UPDATE `option` SET `order` = `id` WHERE `order` = 0;

# Insert new setting values
INSERT INTO `settings` (`id`, `field`, `value`) VALUES (NULL, 'noreply', 'webform@my-website.com');
INSERT INTO `settings` (`id`, `field`, `value`) VALUES (NULL, 'zoom', '8');








=======

# Fixed problem from 1.4.2
UPDATE `option` SET `order` = `id` WHERE `order` = 0;

# Insert new setting values
INSERT INTO `settings` (`id`, `field`, `value`) VALUES (NULL, 'noreply', 'webform@my-website.com');
INSERT INTO `settings` (`id`, `field`, `value`) VALUES (NULL, 'zoom', '8');








>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
