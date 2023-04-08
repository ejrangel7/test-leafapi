CREATE TABLE `Person`  (
  `id` int(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
);

INSERT INTO `Person` (`name`, `created_at`, `updated_at`) VALUES 
('William', NOW(), NOW()),
('Marc', NOW(), NOW()),
('John', NOW(), NOW()),
('Antonio Moreno', NOW(), NOW());
