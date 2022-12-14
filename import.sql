/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `solarsys` (
  `Stars` varchar(50) NOT NULL,
  `Diameter` int(50) NOT NULL,
  `Mass` int(255) NOT NULL,
  `Distance` int(100) NOT NULL,
  `DateAproach` varchar(25) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

INSERT INTO `solarsys` (`Stars`, `Diameter`, `Mass`, `Distance`, `DateAproach`, `id`) VALUES
('Re: Zero', 9, 3652, 151513, NULL, 1);
INSERT INTO `solarsys` (`Stars`, `Diameter`, `Mass`, `Distance`, `DateAproach`, `id`) VALUES
('Ishizoku Reviewers', 8, 5441, 98790170, NULL, 2);
INSERT INTO `solarsys` (`Stars`, `Diameter`, `Mass`, `Distance`, `DateAproach`, `id`) VALUES
('Great Pretender', 8, 877, 12967, NULL, 3);
INSERT INTO `solarsys` (`Stars`, `Diameter`, `Mass`, `Distance`, `DateAproach`, `id`) VALUES
('Isekai Quartet', 6, 5666, 0, NULL, 4),
('Mushoku Tensei', 8, 0, 0, NULL, 6),
('DBZ Kai', 6, 0, 0, NULL, 7),
('Your Name', 9, 0, 0, NULL, 8),
('Return of Bio Broly', 3, 0, 0, NULL, 9);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;