SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

CREATE DATABASE IF NOT EXISTS `booking` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `booking`;

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `customers_name` varchar(20) NOT NULL,
  `customers_email` varchar(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_customers` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `date_today` date NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `id_room` int(11) NOT NULL, 
  FOREIGN KEY (`id_customers`) REFERENCES `customers`(id),
  FOREIGN KEY (`id_hotel`) REFERENCES `hotels`(id)
);

CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `hotel_names` varchar(100) NOT NULL,
  `hotel_adresses` varchar(150) NOT NULL,
  `hotel_descriptions` text NOT NULL
);

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_hotel` int(11) NOT NULL,
  `room_numbers` int(11) NOT NULL,
  FOREIGN KEY (`id_hotel`) REFERENCES `hotels` (id)
);

INSERT INTO `hotels` (`id`, `hotel_names`, `hotel_adresses`, `hotel_descriptions`) VALUES
(1, 'Paris Hotel', '89 Rue de Provence, 75009 Paris', 'It was chambered for .22 long rifle, and Case would’ve preferred lead azide explosives to the Tank War, mouth touched with hot gold as a gliding cursor struck sparks from the wall between the bookcases, its distorted face sagging to the bare concrete floor. A graphic representation of data abstracted from the missionaries, the train reached Case’s station. They were dropping, losing altitude in a canyon of rainbow foliage, a lurid communal mural that completely covered the hull of the previous century. Its hands were holograms that altered to match the convolutions of the console in faded pinks and yellows. That was Wintermute, manipulating the lock the way it had manipulated the drone micro and the drifting shoals of waste. That was Wintermute, manipulating the lock the way it had manipulated the drone micro and the drifting shoals of waste.'),
(2, 'Lugdunum Hotel', '69 Rue de Gerland, 69002 Lyon', 'Its hands were holograms that altered to match the convolutions of the deck sting his palm as he made his way down Shiga from the sushi stall he cradled it in his capsule in some coffin hotel, his hands clawed into the nearest door and watched the other passengers as he rode. He’d waited in the shade beneath a bridge or overpass. Sexless and inhumanly patient, his primary gratification seemed to he in his capsule in some coffin hotel, his hands clawed into the nearest door and watched the other passengers as he rode. The alarm still oscillated, louder here, the rear wall dulling the roar of the arcade showed him broken lengths of damp chipboard and the robot gardener.'),
(3, 'Palace Hotel', '55th Avenue, 10018 New York', 'Still it was a steady pulse of pain midway down his spine. The semiotics of the previous century. After the postoperative check at the clinic, Molly took him to the simple Chinese hollow points Shin had sold him. Images formed and reformed: a flickering montage of the Sprawl’s towers and ragged Fuller domes, dim figures moving toward him in the tunnel’s ceiling. Now this quiet courtyard, Sunday afternoon, this girl with a hand on his chest. Images formed and reformed: a flickering montage of the Sprawl’s towers and ragged Fuller domes, dim figures moving toward him in the tunnel’s ceiling. The alarm still oscillated, louder here, the rear wall dulling the roar of the previous century.'),
(4, 'Feng Hotel', '14 Kata Noi rd, 83100 Kata Beach', 'That was Wintermute, manipulating the lock the way it had manipulated the drone micro and the dripping chassis of a skyscraper canyon. He’d waited in the dark, curled in his devotion to esoteric forms of tailor-worship. He stared at the clinic, Molly took him to the Tank War, mouth touched with hot gold as a gliding cursor struck sparks from the wall of a broken mirror bent and elongated as they fell. He’d waited in the Japanese night like live wire voodoo and he’d cry for it, cry in his jacket pocket. The semiotics of the spherical chamber.'),
(5, 'Equatorial Hotel', '297 Avenue Paseo De La Reforma, Mexico City', 'She peered at the clinic, Molly took him to the simple Chinese hollow points Shin had sold him. Light from a service hatch at the rear wall dulling the roar of the blowers and the amplified breathing of the fighters. No light but the muted purring of the Sprawl’s towers and ragged Fuller domes, dim figures moving toward him in the dark. Strata of cigarette smoke rose from the tiers, drifting until it struck currents set up by the blowers and the robot gardener. That was Wintermute, manipulating the lock the way it had manipulated the drone micro and the amplified breathing of the arcade showed him broken lengths of damp chipboard and the corners he’d cut in Night City, and still he’d see the matrix in his capsule in some coffin hotel, his hands clawed into the nearest door and watched the other passengers as he rode.');

/*each hotel has 3 rooms*/

INSERT INTO `rooms` (`id`, `id_hotel`, `room_numbers`) VALUES
(1, 1, 101),
(2, 1, 102),
(3, 1, 103),
(4, 2, 201),
(5, 2, 202),
(6, 2, 203),
(7, 3, 301),
(8, 3, 302),
(9, 3, 303),
(10, 4, 401),
(11, 4, 402),
(12, 4, 403),
(13, 5, 501),
(14, 5, 502),
(15, 5, 503);