-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 11:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniekclothier`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `image`, `pwd`) VALUES
(1, 'sharplinkmpconcept@gmail.com', '', '8d9b8c2ac6c59c0b44f42d832a7ab1e9');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `sn` int(45) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` varchar(2000) NOT NULL,
  `picture` varchar(30) NOT NULL,
  `timedate` varchar(24) NOT NULL,
  `date_updated` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`sn`, `title`, `body`, `picture`, `timedate`, `date_updated`) VALUES
(2, 'The Gem Look', 'She comes in peace. Elegance is in her blood, beauty is her DNA. \r\nCould she be the new CEO? Everyone was expectant, but not one with such beauty enwrapped in intellect. \r\nYes, she got what she prepared for. The Focus. The listening ear. People knowing the reason for her presence before she gets to say a word. \r\n\r\nThe color, the seam, the trimming, the flare sleeve, the transparent sleeve, the surplice neckline, the fitting....all speak of the woman she is. \r\n\r\n&quot;White&quot; shows her simplicity and determination to explore the new image of herself.\r\nThe crossed silver trimmings shows elegance without bounds.\r\nThe stylish flare sleeve exudes confidence\r\nThe Net sleeve capped with glittering wrist speaks of her transparency, open-mindedness with no hidden agenda\r\nThe surplice neckline, slightly below her collarbone giving the needed confidence. \r\n\r\nThe fitting reveals her smartness. No dull moment with her. \r\n\r\n\r\nThe value of beauty and elegance is reflected in a clean and charming appearance', 'download (7).jpg', '2021-05-20 13:04:21', '2021-10-11 17:05:21'),
(3, 'The Teaching Grace Part Two', 'The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace.', 'Lawrence.jpg', '2021-07-18 13:04:21', '2021-10-13 03:49:11'),
(4, 'The Teaching Grace. The Teaching Grace.', 'The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace. The Teaching Grace.', 'ANG.png', '2021-09-22 13:04:21', '2021-10-11 17:10:54'),
(11, 'The Teaching Grace', 'This is what the Lord is doing this season, He is releasing the teaching grace in abundance to His people. This is the outpouring we crave for!', '7-25.jpg', '2021-10-11 16:44:35', '2021-10-11 16:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `sn` int(10) NOT NULL,
  `blog_id` int(24) NOT NULL,
  `email` varchar(20) NOT NULL,
  `c_name` varchar(25) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `timedate` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`sn`, `blog_id`, `email`, `c_name`, `comment`, `timedate`) VALUES
(3, 0, 'okeoluwaseun79@gmail', 'Oke Oluwaseun', 'ddd', ''),
(4, 0, 'okeoluwaseun79@gmail', 'Oke Oluwaseun', 'I love this blog but it needs to be improved', ''),
(5, 2, 'okeoluwaseun79@gmail', 'Oke Oluwaseun', 'I will read it when I have the time', '2021-10-09 11:15:56'),
(6, 2, 'mondayoke93@gmal.com', 'Monday Oke', 'Monday is a programmer. Hope Paul is aware!', '2021-10-09 11:21:38'),
(7, 3, 'mondayoke93@gmal.com', 'Monday Oke', 'Pppppppppppppppppppppppppppppppppppppppppppppppp', '2021-10-09 11:26:32'),
(8, 4, 'my@gmail.com', 'Mooooooooo', 'Waaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-10-09 13:47:24'),
(9, 11, 'jjjj@gmail.com', 'paul', 'hggg', '2021-10-11 23:25:37'),
(10, 11, 'mddddd@ymail.com', 'See you', 'Seeeeeeeeeeeeeeeeeeeeeeeee', '2021-10-11 23:26:53'),
(11, 3, 'me@you.com', 'Yes Me', 'And you!', '2021-10-12 00:04:23'),
(12, 3, 'ola@ola.co.za', 'Olawunmi Yesm', 'Alright', '2021-10-12 00:05:02'),
(13, 3, 'md1@ymail.com', 'Oke W. Emmanuel', 'This story stirred up something in me! Thanks so much for this.', '2021-10-13 04:08:01'),
(14, 3, 'testinfg@gmail.com', 'Mondayuuuuuuuuuuuu', 'I wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', '2021-10-19 15:10:15'),
(15, 11, 'mondayoke@cmail.com', 'Emma Mon', 'Commenting here is good', '2021-10-20 00:57:23'),
(16, 11, 'itunu@gmail.com', 'Paul', 'I am here working', '2021-10-23 06:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `t_len` decimal(10,0) NOT NULL,
  `t_waist` decimal(10,0) NOT NULL,
  `t_flap` decimal(10,0) NOT NULL,
  `t_lap` decimal(10,0) NOT NULL,
  `t_hip` decimal(10,0) NOT NULL,
  `t_knee` decimal(10,0) NOT NULL,
  `t_feet` decimal(10,0) NOT NULL,
  `s_glen` decimal(10,0) NOT NULL,
  `s_len` decimal(10,0) NOT NULL,
  `s_chest` decimal(10,0) NOT NULL,
  `s_stomach` decimal(10,0) NOT NULL,
  `s_shoulder` decimal(10,0) NOT NULL,
  `s_neck` decimal(10,0) NOT NULL,
  `s_arm` decimal(10,0) NOT NULL,
  `s_wrist` decimal(10,0) NOT NULL,
  `s_sleeve` decimal(10,0) NOT NULL,
  `s_rsleeve` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `name`, `email`, `phone`, `address`, `image`, `pwd`, `t_len`, `t_waist`, `t_flap`, `t_lap`, `t_hip`, `t_knee`, `t_feet`, `s_glen`, `s_len`, `s_chest`, `s_stomach`, `s_shoulder`, `s_neck`, `s_arm`, `s_wrist`, `s_sleeve`, `s_rsleeve`) VALUES
(1, 'Oke Monday', 'mondayoke93@gmail.com', '08068869769', 'Joyi Compound, Thojigbo, Agosasa, Ago-Egu, Ipokia Local Governemnt Area', '08068869769_Passport.jpg', '$2y$10$.73gX2kXTBpeMepLZMSBBuNiP6ZQ.BjWUwtenawCe2UnNXRYL2UUK\r\n', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, 'Oke Oluwaseun Paul', 'okeoluwaseun79@gmail.com', '07082614612', '11, surulere streret, volks, Ojo, Lagos.', 'Ezekiel.jpg', '$2y$10$EATGZyAvcSPn5ROCpXMJIejkiJWVU7QjZxoNZ1YUdN5L5XOee.bcW', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, 'Oke Emmanuel', 'mdconnect@yahoo.com', '08068869769', '2, God Habitation Estate, Ipokia Ogun State', 'Oke Monday.jpg', '$2y$10$1f19tZCn.9uzkK94eL7vdugKXCEd.0y4V9QAw3ea70C1GNT.vh7Du', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, 'Oke Oluwaseun', 'okeoluwaseun2024@gmail.com', '07082614612', 'abakaliki', '', '$2y$10$3KVWmITFYdh7/w.Hb/4oxO8AoM1JOZkNTbT/GvBwVnTizU86NqfU.', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `pd_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `color` varchar(25) NOT NULL,
  `date` datetime NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cus_id`, `pd_id`, `order_no`, `quantity`, `color`, `date`, `amount`) VALUES
(1, 1, 1, 454544, 1, 'orange', '2020-02-17 09:35:27', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pd_id` int(11) NOT NULL,
  `pd_name` varchar(25) NOT NULL,
  `description` varchar(1255) NOT NULL,
  `pd_category` varchar(11) NOT NULL,
  `pd_type` varchar(25) NOT NULL,
  `size6_12_price` int(11) NOT NULL,
  `size14_16_price` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `picture2` varchar(255) NOT NULL,
  `picture3` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pd_id`, `pd_name`, `description`, `pd_category`, `pd_type`, `size6_12_price`, `size14_16_price`, `color`, `picture`, `picture2`, `picture3`, `keywords`) VALUES
(1, 'Zeacon Shirt Dress', 'Calm and playful, yes! It\'s a synergy of two parallels- a blend of both worlds. A versatile piece is suitable for corporate and casual events. A wardrobe essential. \r\n\r\nThis unique piece portrays the peace of the deep blue sea. No wonder her presence in the office always makes a statement that exudes her calmness. \r\n\r\n\r\nThe dress lengths, the sleeve lengths, the pleated high-low hemlines, the neckline, and the pattern, all send a cue of ease.\r\n\r\n\r\nThe loyalty and stability of the woman in it remain one unique feature you don\'t want to trade for anything. When I look closely, I realized her outfit was only staying true to who she is. For she loves to wear clothes that portray who she is and remain true to her becoming. \r\n', 'women', 'casual', 9000, 10500, '', '3b.jpg\r\n', '3a.jpg', '3c.jpg', 'casual wears, casual, office wears'),
(2, 'Pearl', 'She is the haven for everyone around her.  Her teammates do not need to fear. They know with her lead, they have the right motivation to get the task done. She is trusted, dependable, and reliable.   Feel the freshness of a simple and harmonious woman.  She is complete in herself.   The slanted pleat says it all. The dynamic folding technique creating an accordion-like appearance which speaks to the bold, organized, and up to the task woman.  The sleeves lend a stylish effect to her look.  The classic round neck is a staple for a reason.    Does this describe you or the woman you aspire to be?   Wait no longer. Get the Olive  dress and Be You! ', 'women', 'casual', 9000, 11000, 'Yellow', '2a.jpg', '2b.jpg', '2c.jpg', 'native, casual'),
(3, 'Olive', 'She is the haven for everyone around her. \r\nHer teammates do not need to fear. They know with her lead, they have the right motivation to get the task done.\r\nShe is trusted, dependable, and reliable. \r\n\r\nFeel the freshness of a simple and harmonious woman. \r\nShe is complete in herself. \r\n\r\nThe slanted pleat says it all. The dynamic folding technique creating an accordion-like appearance which speaks to the bold, organized, and up to the task woman. \r\nThe sleeves lend a stylish effect to her look. \r\nThe classic round neck is a staple for a reason. \r\n\r\n\r\nDoes this describe you or the woman you aspire to be? \r\n\r\nWait no longer. Get the Olive  dress and Be You! ', 'women', 'casual', 8700, 9500, 'Green', '1a.jpg', '1b.jpg', '1c.jpg', ' casual, gown'),
(4, 'Women wears', 'She is the haven for everyone around her.  Her teammates do not need to fear. They know with her lead, they have the right motivation to get the task done. She is trusted, dependable, and reliable.   Feel the freshness of a simple and harmonious woman.  She is complete in herself.   The slanted pleat says it all. The dynamic folding technique creating an accordion-like appearance which speaks to the bold, organized, and up to the task woman.  The sleeves lend a stylish effect to her look.  The classic round neck is a staple for a reason.    Does this describe you or the woman you aspire to be?   Wait no longer. Get the Olive  dress and Be You! ', 'women', 'casual', 9500, 9500, '', '4a.jpg', '4b.jpg', '4a.jpg', 'casual, casual wears'),
(5, 'Women wears', 'She is the haven for everyone around her.  Her teammates do not need to fear. They know with her lead, they have the right motivation to get the task done. She is trusted, dependable, and reliable.   Feel the freshness of a simple and harmonious woman.  She is complete in herself.   The slanted pleat says it all. The dynamic folding technique creating an accordion-like appearance which speaks to the bold, organized, and up to the task woman.  The sleeves lend a stylish effect to her look.  The classic round neck is a staple for a reason.    Does this describe you or the woman you aspire to be?   Wait no longer. Get the Olive  dress and Be You! ', 'women', 'casual', 0, 0, '', '6a.jpg', '6b.jpg', '6a.jpg', 'casual, casual wears, gown, gowns'),
(6, 'Skater Dress', 'With an enchanting and lively color --this dress portrays cheerfulness, comfort, and class. No wonder she\'s always full of energy when she\'s in it. \r\n\r\nDo you know the key to nailing the perfect V-neck dress for your shape? Confidence…and the right bra. \r\nThis style draws the eye inward, lengthening the neck and torso. \r\nThe front line is designed to enhance your beauty.\r\nThe full circle flare (720°) will make the hourglass silhouette look more dramatic and fun. \r\n\r\nThe most happy-looking girl I have seen.\r\nEach time I speak with her, it\'s always fun and I have butterflies in my stomach. She certainly has those positive vibes. \r\n\r\nComparing her with other girls I had known, I noticed she always have a matching outfit that symbolized her happy nature. \r\nWith her Yellow Skater dress, she looks so happy and never seemed to get it wrong to those around her. \r\n\r\nDo you want that friendly, inviting, and lively look that will bring out your lady-like silhouette?\r\nThis Yellow Skater Dress is a sure plug. ', 'women', 'casual', 11600, 0, 'Yellow', '7a.jpg', '7b.jpg', '7c.jpg', 'casual, casual wears, casuals'),
(7, 'Alexandrite', 'Alexandrite with the aura of attraction. Simple and classic.  Off-the-shoulder shape, also known as Bardot, highlight her shoulders and collarbone, drawing the eye upwards to her gorgeous face. Romantic and flirty. The perfect go-to for date nights or for adding some glamour to your day-to-day wardrobe. It looks extremely versatile and comfortable in an effortless way. \r\nThe gathered drape giving the dress a stunning look perfect for casual, or semi-formal occasions. \r\n\r\nWho wouldn\'t take a second look. She\'s indeed a spec. ', 'women', 'casual', 10000, 11000, 'Purple', '8a.jpg', '8b.jpg', '8c.jpg', 'casual, gown, gowns, casuals'),
(8, 'Sapphire', 'She comes in her noble and sophisticated appearance ready to tackle any difficult tasks. Her calmness buffers her more explosive personality. \r\n\r\nAside from qualifications and intellect, her beauty and elegance stood her out. The details on her dress say a lot about her. \r\n\r\nThe Jewel neckline - classic, simple, the close-to-the-face shape is a staple for a reason. Most often, you don’t need to worry about this neckline competing with any accessories.\r\nThe pleat speaks of her systematic and organized way. She keeps track of what she needs to accomplish and when.\r\nThe crossed peplum- frill and edgy  that fit all body shape\r\nThe sleeve enhances her beauty. \r\n\r\nSo, do you want to stand out in your workplace? You can start with this dress. If you want to look noble with some blend of style and sophistication, then this dress is the best bet for you. It\'s all you need to look smart, professional, and elegant. And the good news is you can get this bespoke dress perfectly tailored to suit your body shape.', 'women', 'casual', 10000, 11000, 'Purple', '9a.jpg ', '9b.jpg', '9c.jpg', 'casual, casual wears, gown, gowns'),
(9, 'The  Gem Look ', 'She comes in peace. Elegance is in her blood, beauty is her DNA. \r\nCould she be the new CEO? Everyone was expectant, but not one with such beauty enwrapped in intellect. \r\nYes, she got what she prepared for. The Focus. The listening ear. People knowing the reason for her presence before she gets to say a word. \r\n\r\nThe color, the seam, the trimming, the flare sleeve, the transparent sleeve, the surplice neckline, the fitting....all speak of the woman she is. \r\n\r\n\"White\" shows her simplicity and determination to explore the new image of herself.\r\nThe crossed silver trimmings shows elegance without bounds.\r\nThe stylish flare sleeve exudes confidence\r\nThe Net sleeve capped with glittering wrist speaks of her transparency, open-mindedness with no hidden agenda\r\nThe surplice neckline, slightly below her collarbone giving the needed confidence. \r\n\r\nThe fitting reveals her smartness. No dull moment with her. \r\n\r\n\r\nThe value of beauty and elegance is reflected in a clean and charming appearance. \r\n', 'women', 'casual', 12000, 0, 'White', '10c.jpg', '10d.jpg', '10a.jpg', 'casual, casual wears, gown, gowns'),
(10, 'The Glam Look', 'An improbable encounter, you might think, but consider the facts.\r\n\r\nThey both gave a 30secnds elevator pitch in a contest for a multimillion naira grant, only to see that they were both qualified for the grant.\r\n\r\nTheir social life is on a fleek. As they slay to any event, they make statements and get that glam look.\r\n\r\nThe most convincing evidence, however, is the jumpsuit. Clearly the result of them working together since early school days.\r\n\r\nIt combines confidence and elegance. Speak of the bold, simple yet visually arresting effect outfit. A jumpsuit is a sure winner when it comes to mixing sophistication with that corporate look.\r\n\r\nThere\'s the grey, the wine, the architecture, and yes, the attitude. For the cool crispness insists on good behavior.\r\n\r\nThe peplum extending below the waistline exhibit true craftsmanship.\r\n\r\nThe cap sleeve slightly brought forward for ease of movement. The classic simple and jewel neckline just a perfect fit.\r\nThe fitting- a win for that business deal.', 'women', 'casual', 12000, 13500, 'Wine', '5a.jpg', '5b.jpg', '5c.jpg', 'casual, casual wears, wears'),
(11, 'LARIMAR', 'Call her LARIMAR the incomparable blue, loyal and trustworthy, the main woman\'s outfit. \r\n\r\nHer palazzo pant gives her the comfort that allo.\r\nws her leg to move freely as she walks and gives a graceful flair to her figure. To emphasize the flaring nature of palazzo, go for a fitted top. \r\n\r\nThe superb comfort of larimar makes it a natural choice for a casual look. \r\nIf you don\'t want to overdress or underdress,  Go for LARIMAR.', 'women', 'casual', 11000, 12500, 'Deep Blue', '11a.jpg', '11b.jpg', '11c.jpg', 'casual, casual wears, office wears'),
(12, 'Sapphire', 'She comes in her noble and sophisticated appearance ready to tackle any difficult tasks. Her calmness buffers her more explosive personality. \r\n\r\nAside from qualifications and intellect, her beauty and elegance stood her out. The details on her dress say a lot about her. \r\n\r\nThe Jewel neckline - classic, simple, the close-to-the-face shape is a staple for a reason. Most often, you don’t need to worry about this neckline competing with any accessories.\r\nThe pleat speaks of her systematic and organized way. She keeps track of what she needs to accomplish and when.\r\nThe crossed peplum- frill and edgy  that fit all body shape\r\nThe sleeve enhances her beauty. \r\n\r\nSo, do you want to stand out in your workplace? You can start with this dress. If you want to look noble with some blend of style and sophistication, then this dress is the best bet for you. It\'s all you need to look smart, professional, and elegant. And the good news is you can get this bespoke dress perfectly tailored to suit your body shape.', 'women', 'casual', 10000, 11000, 'Purple', '12a.jpg ', '12a.jpg', '12a.jpg', 'wears, office wears, casual, casual wears'),
(13, 'Women wears', '', 'women', 'casual', 0, 0, '', '1.jpg', '4.jpg', '1.jpg', 'casual, casual wears, '),
(14, 'Women wears', '', 'women', 'casual', 0, 0, '', '8.jpg', '8.jpg', '8.jpg', 'casual, casual wears, wears, office wears'),
(15, 'Peridot Palazzo', 'She had done what no one had done before; She had broken records and risen above the obstacles and traditions. \r\n\r\nWhenever she rocked her palazzo -- she symbolized that daring Nigerian woman who has achieved so much despite all odds. Her outfit evoked the aura of a successful Nigerian woman who is and is still living the Nigerian dream-  a daring highflyer. \r\n\r\nWhenever she\'s on the look out for that comforting outfit that gives her joy, youthfulness, evoking a sense of warmth....that vintage feel, a palazzo with godet never go wrong. \r\n\r\nThe godet (cone-like shape), gives that extra glam look that dazzles the runway. \r\nShe is a woman in her own class. \r\n\r\nWant that vintage feel? \r\n\r\nWear a Peridot Palazzo', 'women', 'casual', 9000, 10000, 'Nude', '13a.jpg', '13b.jpg', '13c.jpg', 'office wears, office, casual, casuals wears'),
(16, 'Women wears', '', 'women', 'casual', 0, 0, '', '14a.jpg', '14a.jpg', '14a.jpg', 'casual, casual wears, office, office wears'),
(17, 'Women wears', '', 'women', 'casual', 0, 0, '', '15a.jpg', '15b.jpg', '15c.jpg', 'gown, gowns, wear, office wears'),
(35, 'women wears', 'dfhdjfdfidfd', 'men', 'casual', 23000, 0, '', '', '', '', 'casual'),
(36, 'ddddd', 'ddddd', 'men', 'casual', 300000, 0, '', '', '', '', 'casual'),
(37, 'women wears', 'drjtjgyujih', 'children', 'casual', 200000000, 0, '', '', '', '', 'casual'),
(38, 'women wears', 'drjtjgyujih', 'children', 'casual', 200000000, 0, '', '', '', '', 'casual'),
(39, 'Lady Wears', 'Details of', 'men', 'native', 0, 0, '', '', '', '', 'unuu'),
(40, 'Lady Wears', 'Details of', 'men', 'native', 0, 0, '', '', '', '', 'unuu'),
(41, 'Lady Wears', 'Details of', 'men', 'native', 0, 0, '', '', '', '', 'unuu'),
(42, 'women wears', 'nrjjfhujiugftfddoooooooooooooooooooooooooooooooooo', 'women', 'suit', 12212121, 0, '', 'download.jpg', '', '', 'sfsfss'),
(43, 'women wears', 'nrjjfhujiugftfddoooooooooooooooooooooooooooooooooo', 'women', 'suit', 12212121, 0, '', '', '', '', 'sfsfss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `sn` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
