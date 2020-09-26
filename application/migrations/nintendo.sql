CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `login` varchar(255),
  `password` varchar(255)
);

CREATE TABLE `consoles` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `version` varchar(255),
  `memory` varchar(255),
  `cores` int,
  `price` double,
  `color` varchar(255)
);

CREATE TABLE `acessories` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `price` double,
  `description` varchar(255),
  `type` varchar(255),
  `console_id` int
);

CREATE TABLE `games` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `price` double,
  `description` varchar(255),
  `category` varchar(255),
  `age` int,
  `medium` varchar(255),
  `exclusive` boolean
);

CREATE TABLE `games_consoles` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `game_id` int,
  `console_id` int
);

CREATE TABLE `sale_chanels` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `stores` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `location` varchar(255),
  `max_storage` int,
  `phone` varchar(255),
  `sale_chanel_id` int
);

CREATE TABLE `staff` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `role` varchar(255),
  `salary` double,
  `cpf` varchar(255),
  `store_type` varchar(255),
  `store_id` int
);

CREATE TABLE `online_stores` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `url` varchar(255),
  `sale_chanel_id` int
);

CREATE TABLE `products` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `product_type` varchar(255),
  `product_id` int,
  `store_type` varchar(255),
  `store_id` int
);

ALTER TABLE `acessories` ADD FOREIGN KEY (`console_id`) REFERENCES `consoles` (`id`);

ALTER TABLE `games_consoles` ADD FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);

ALTER TABLE `games_consoles` ADD FOREIGN KEY (`console_id`) REFERENCES `consoles` (`id`);

ALTER TABLE `stores` ADD FOREIGN KEY (`sale_chanel_id`) REFERENCES `sale_chanels` (`id`);

ALTER TABLE `online_stores` ADD FOREIGN KEY (`sale_chanel_id`) REFERENCES `sale_chanels` (`id`);
