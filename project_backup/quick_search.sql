-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2019 at 10:56 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quick_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `baner_image` text NOT NULL,
  `about_image` text NOT NULL,
  `description` text NOT NULL,
  `about_mission` text NOT NULL,
  `about_vision` text NOT NULL,
  `about_success` text NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `vendor_id`, `baner_image`, `about_image`, `description`, `about_mission`, `about_vision`, `about_success`) VALUES
(7, 35, 'image/banner7.jpg', 'image/about7.jpg', 'There are many variations of passages of electronics Services, but the majority have suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. by injected humour, or randomised words which donot look even\n', 'To fullfill all requriements of customer.', 'There are many variations of passages of electronics repair, but the majority have suffered alteration in some form, by injected humour, or randomised words duskam azer which donot look', 'All customers are greatful for using our services'),
(8, 34, 'image/banner8.jpg', 'image/about8.jpg', 'lapizza is the best fast food in town.we provide all kinds of cusine and fast food and dishes.we provide the unlimited dinner and lunch service at minimum rate.we provide fast food delivery service.we have a expert cooks.', 'To serve the best food to customer.', 'We like to create fast food. But not ordinary fast foot.', 'our food is selected in international food competition.'),
(9, 36, 'image/banner9.jpg', 'image/about9.jpg', 'Excellence in teaching, learning, and research, and to developing leaders in many disciplines who make a difference globally. Harvard faculty are engaged with teaching and research to push the boundaries of human knowledge', ' with over 160 million awarded to more than 60 of our undergraduate students.', 'The University has twelve degree-granting Schools in addition to the Radcliffe Institute for Advanced Study, offering a truly global education.', 'Business program\r\nA Multi-Post story\r\nCheck the feed\r\nClean and fresh design '),
(10, 37, 'image/banner10.png', 'image/about10.jpg', 'EventOrg is extensive Agenda gives attendees access to the latest event schedule at their fingertips. Bid farewell to the outdated, printed event schedules with EventOrg.', 'Our mission is to fulfill all clients requriment.We organise all kinds of events like birthdayparty,marriage,etc', 'Our vision is to plan event all over in the state.We plan to organise event party to our farms.', 'Till now we organise more than 1000 event in all over the city'),
(11, 38, 'image/banner11.jpg', 'image/about11.jpg', 'A Pre-School is your child is first experience away from you.  As your little bundle of joy takes the first step into a new world, he or she is not alone. Buddy is always there to help your child get comfortable in the nurturing environment of our Pre-School. This makes Buddy your child is best friend at EuroKids Pre-School.', 'To ensure, that this transition from home to school is a smooth process, we have Buddy, your child is Fun Partner at EuroKids Pre-School.', 'Our Child-First ideology at the core of our pedagogy enables us to ensure your child is development, safety and engagement needs are met in a home like environment.', 'we are redefining early child care education for over 17 years with focus on providing a fun-based learning environment. ');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_name` (`admin_name`),
  UNIQUE KEY `admin_email` (`admin_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_email`) VALUES
(2, 'smit', 'smit123', 'smitshethiya1307@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_image` text NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`) VALUES
(4, 'Electronics', 'image/category4.jpg'),
(7, 'Food', 'image/category7.jpg'),
(23, 'Event Organisor', 'image/category23.png'),
(24, 'Chemists', 'image/category24.jpg'),
(25, 'Bakery', 'image/category25.jpeg'),
(26, 'Dairy Products', 'image/category26.jpg'),
(27, 'Education', 'image/category27.jpg'),
(28, 'Shopping', 'image/category28.jpg'),
(29, 'Travel', 'image/category29.jpg'),
(30, 'Play School', 'image/category30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `phone_no1` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_image` text NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `phone_no2` bigint(10) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `vendor_id`, `phone_no1`, `email`, `address`, `contact_image`, `contact_name`, `phone_no2`, `latitude`, `longitude`) VALUES
(1, 2, 8511870099, 'smitpatel1307@gmail.com', '2-565 Geet-Deep apt\r\nRustampura Koliwad', 'image/contact1.jpg', 'Smit', 9879539968, 110.52, 152.26),
(2, 35, 8000485086, 'shivamelectronic201@gmail.com', '208,shivam residency,adajan,surat', 'image/contact2.jpg', 'Shivam', 8758433350, 0, 0),
(3, 34, 7852145632, 'shop@gmail.com', 'a-302 new green city apt.behind kharvarnagar surat.', 'image/contact3.jpg', 'john', 9658234523, 0, 0),
(4, 36, 8965230147, 'shop55@gmail.com', 'b-545,shopping mall vip road-surat', 'image/contact4.jpg', 'simran', 7745221100, 0, 0),
(5, 37, 9879539968, 'nicksjohn20@gmail.com', '22,Joshephs society,Vesu road,surat', 'image/contact5.jpg', 'John', 9978107138, 0, 0),
(6, 38, 7405082758, 'lathiajahnvi@gmail.com', '24,Shivam residency,Parvat Patia,Surat', 'image/contact6.jpg', 'Jahnvi', 8965423599, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `logo_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`logo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `vendor_id`, `image`) VALUES
(3, 2, 'image/logo3.jpg'),
(4, 35, 'image/logo4.png'),
(5, 34, 'image/logo5.png'),
(6, 36, 'image/logo6.png'),
(7, 37, 'image/logo7.png'),
(8, 38, 'image/logo8.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `banner_image` text NOT NULL,
  `product_image` text NOT NULL,
  `description` text NOT NULL,
  `sortorder` int(11) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `vendor_id`, `title`, `product_price`, `banner_image`, `product_image`, `description`, `sortorder`, `short_description`, `is_active`) VALUES
(1, 2, 'Title', 5000, 'image/banner1.jpg', 'image/product1.jpg', 'Description', 2, 'Short Description', 0),
(5, 2, 'Burger', 50, 'image/banner5.jpg', 'image/product5.jpg', 'Delicious to eat.', 2, 'Burger with cheese blast.', 1),
(8, 2, 'abc', 1234, 'image/banner8.jpg', 'image/product8.jpg', 'dfgh', 6, 'fghj', 0),
(9, 2, 'pizza', 150, 'image/banner9.jpg', 'image/product9.jpg', 'Dfferent types of pizza include macroni,gelepeno,panner salsa.', 1, 'Best Pizza.', 1),
(11, 2, 'xcvbn', 500, 'image/banner11.jpg', 'image/product11.jpg', 'wsdfghjk', 5, 'wertyuiop', 0),
(12, 35, 'Air Conditioner', 30000, 'image/banner35.jpg', 'image/product12.jpg', 'Air Conditioner is an inherent part of an household with summers getting hotter. You should consider your needs and do your research before finalizing the product', 1, 'All new Features Included.Best for summer.', 1),
(13, 35, 'Camera', 45000, 'image/banner35.jpg', 'image/product13.jpg', 'Buy CANON PowerShot SX540 HS Bridge Camera - Black  TLZ 20 Format Toploader DSLR Camera Bag - Black , Free Delivery , Currys', 2, 'High quality canon camera,best product to buy.', 0),
(14, 35, 'laptop', 60000, 'image/banner35.jpg', 'image/product14.jpg', 'This 14-inch laptop was among the fastest models CR tested, earning it an Excellent performance score, and can easily handle tough tasks like media', 3, 'The revolutionary ZenBook 13 is a laptop that is ultralight, ultrathin and ultrapowerful. It is the first-ever ZenBook to be constructed by the ASUS', 1),
(15, 35, 'Refrigrator', 20000, 'image/banner35.jpg', 'image/product15.jpg', 'This refrigerator cools quickly and evenly, and it will keep ice frozen solid and foods perfectly chilled. It is an excellent value that will bring years of quiet, reliable use.', 4, 'COSTWAY Mini Refrigerator, 2-Door 3.4 cu. ft. Small Compact Under Counter Refrigerator Fridge Freezer Cooler Unit for Dorm, Office, Apartment with Adjustable Removable Glass Shelves ', 0),
(16, 35, 'TV', 35000, 'image/banner35.jpg', 'image/product16.jpg', 'Insignia Full HD Smart TV  Fire TV Edition delivers 1080p picture quality for lifelike detail, rich contrast, and brilliant colors.\r\nWith the Fire TV experience built in, enjoy tens of thousands of channels, apps, and Alexa skills, including Netflix, Prime Video, Hulu, HBO, SHOWTIME, STARZ, and more.', 5, 'Insignia NS-39DF510NA19 39-inch 1080p Full HD Smart LED TV- Fire TV Edition', 1),
(17, 35, 'Microwave', 5000, 'image/banner35.jpg', 'image/product17.jpg', 'MINIMUM COUNTERTOP FOOTPRINT  Smart, compact design devotes less space to electronics and far more interior capacity. Up to eight pounds lighter than conventional microwave ovens', 6, 'Panasonic Microwave Oven NNSD945S Stainless Steel Countertop,Built-In with Inverter Technology and Genius Sensor, 2.2 Cu. Ft, 1250W', 1),
(18, 34, 'Drinks', 100, 'image/banner34.jpg', 'image/product18.jpg', 'Caipiroska is a form of Caipirinha prepared with vodka instead of the usual cachaca.', 1, 'Drinking wine can make you smarter.', 1),
(19, 34, 'Hot Coffee', 60, 'image/banner34.jpg', 'image/product19.jpg', 'Instant coffee powder mixed with cold milk and vanilla ice creams', 2, 'Best quality', 1),
(20, 34, 'Lunch', 350, 'image/banner34.jpg', 'image/product20.jpg', 'Simply Home Food is the Bangalore based that serves and deliver home cooked healthy food with ease. ', 3, 'Order food online in Bangalore with different varieties like Rajsthani, Gujrati, Punjabi etc.', 1),
(21, 36, 'Dolce and Gabbana', 1000, 'image/banner36.jpg', 'image/product21.jpg', 'They can give the consumer the information they need to feel comfortable parting with their money. ', 1, 'They can change thats a nice coat into I MUST have that coat.', 1),
(22, 36, 'levies jeans', 1500, 'image/banner36.jpg', 'image/product22.jpg', 'The good news is that communicating your products value is easy when you follow these simple tips', 2, 'slim fitt', 1),
(23, 36, 'louis philipine shirt', 2000, 'image/banner36.jpg', 'image/product23.jpg', 'Louis Philippe Mens Printed Slim fit Formal Shirt', 3, 'best quality', 1);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `search_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  PRIMARY KEY (`search_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`search_id`, `shop_name`, `description`, `keyword`, `vendor_id`) VALUES
(5, 'pizza plaza', 'All types of Pizza.', 'best pizza', 2),
(6, 'Shivam Electronics', 'all electronics items are available', 'camera', 35),
(7, 'lapizza', 'best restaurant.', 'best food', 34),
(8, 'lapizza', 'All types of dishes included', 'pizza', 34),
(9, 'simran', 'Selling all types of clothes for men and women.', 'tops', 36),
(10, 'simran', 'Selling all products.', 'jeans', 36),
(11, 'simran', 'all cloths.', 't-shirts', 36),
(12, 'simran', 'all products', 'women clothes', 36),
(13, 'innovative', 'Wedding purpose', 'Wedding planer', 37),
(14, 'innovative', 'Birthday party planner', 'organise birthday', 37),
(15, 'innovative', 'Proffessional event planning', 'professional event', 37),
(16, 'Kidzz', 'Best place for kids', 'Best school', 38);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `banner_image` text NOT NULL,
  `service_image` text NOT NULL,
  `icon` text NOT NULL,
  `sortorder` int(11) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`service_id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `vendor_id`, `title`, `description`, `banner_image`, `service_image`, `icon`, `sortorder`, `short_description`, `is_active`) VALUES
(1, 2, 'car service', 'wash', 'image/banner1.jpg', 'image/service1.jpg', 'image/icon1.jpg', 2, 'Provide services with preferable price.', 1),
(2, 2, 'Title', 'Description', 'image/banner2.jpg', 'image/service2.jpg', 'image/icon2.jpg', 3, 'Short Description', 0),
(3, 35, 'Laptop Repair', 'long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters be distracted by the readable content of a page when looking at its layout.', 'image/banner35.jpg', 'image/service3.jpg', 'image/icon3.jpg', 1, 'long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1),
(4, 35, 'Camera Repair', 'long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters be distracted by the readable content of a page when looking at its layout.', 'image/banner35.jpg', 'image/service4.jpg', 'image/icon4.jpg', 2, 'There are many variations of passages of electronics repair, but the majority have suffered alteration in', 1),
(5, 35, 'Smartphone Repair', 'long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters be distracted by the readable content of a page when looking at its layout.', 'image/banner35.jpg', 'image/service5.jpg', 'image/icon5.jpg', 3, 'There are many variations of passages of electronics repair, but the majority have suffered alteration in', 1),
(6, 34, 'Best Dishes', 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum.', 'image/banner34.jpg', 'image/service6.jpg', 'image/icon6.jpg', 1, ' Claritas est etiam processus dynamicus', 1),
(7, 34, 'Premium Restro', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincid  unt ut laoreet.', 'image/banner34.jpg', 'image/service7.jpg', 'image/icon7.jpg', 1, 'Retro style is a style that is imitative or consciously', 1),
(8, 34, 'Fast Food delivery', 'we are providing the jung food and the very cheap rest.', 'image/banner34.jpg', 'image/service8.jpg', 'image/icon8.jpg', 3, 'majority food are available at our place', 1),
(9, 36, 'online order', 'we provide online order facilites and fastest delivery.', 'image/banner36.jpg', 'image/service9.jpg', 'image/icon9.jpg', 1, 'good quality,best services.', 1),
(10, 36, 'Exchange within one week', 'we provice exchange facilites within 2 days after you buying', 'image/banner36.jpg', 'image/service10.jpg', 'image/icon10.jpg', 2, 'money not refundable.', 1),
(11, 36, 'steach', 'we provide steaching of your clothes as per your needs.we will give it back within 1 day.', 'image/banner36.jpg', 'image/service11.jpg', 'image/icon11.jpg', 3, 'Steaches will be done within 1 day and if it is possible we complete as soon as possible', 1),
(12, 37, 'Outdoor Events', 'Corporate Off-Sites, Outdoor Corporate Events are handled with expert precision by our event management services team. From venue finding to executing all outdoor event requirements and keeping in mind all safety and security precautions, Sakura Events can take care of all the essential details for outdoor events.', 'image/banner37.jpg', 'image/service12.jpg', 'image/icon12.jpg', 1, 'Corporate Off-Sites, Outdoor Corporate Events are handled with expert precision by our event management services team.', 1),
(13, 37, 'Automobile Events', 'Every automotive brand has a story of its own. The event planning and production team at Sakura Events researches on the brand and the purpose of the event to create customised solutions. The company designs the event experience based on the objectives such as funnel activities for existing clients, client acquisition events, brand promotion, launch of new features or models, and promotional events.', 'image/banner37.jpg', 'image/service13.jpeg', 'image/icon13.jpeg', 2, 'The event planning and production team at Sakura Events researches on the brand and the purpose of the event to create customised solutions.', 1),
(14, 37, 'Wedding Event', 'For you or your loved one is big day, there are so many actions that are part of the preparations. Indian weddings are generally overwhelming with numerous prewedding events. Sakura Events is one of the trusted wedding event management companies in Mumbai. Let us take care of the nittygritties of your wedding arrangements while you celebrate the big day with family and friends.', 'image/banner37.jpg', 'image/service14.jpg', 'image/icon14.jpg', 3, 'Indian weddings are generally overwhelming with numerous pre-wedding events. Sakura Events is one of the trusted wedding event management companies in Mumbai.', 1),
(16, 38, 'Playgroup', 'Hands-on discovery and exploration with exclusive \r\nEuroKids kits\r\nDeveloping language skills\r\nEncouraging learning of new age skills\r\nEngaging children physically, emotionally and socially\r\nShaping scientific thought in children', 'image/banner38.jpg', 'image/service16.jpg', 'image/icon16.jpg', 1, 'Encouraging learning of new age skills\r\nEngaging children physically, emotionally and socially', 1),
(17, 38, 'EuroJunior', 'Special activities for developing language skills\r\nAge appropriate learning with exclusive EuroKids \r\nlearningtools Encourages children to express their\r\nideas, thoughts and feelings\r\nAllows children to grow at their own pace', 'image/banner38.jpg', 'image/service17.jpeg', 'image/icon17.jpeg', 2, 'Age appropriate learning with exclusive EuroKids \r\nlearningtools Encourages children', 1),
(18, 38, 'Nursery', 'Imparts essential life skills\r\nEnhances learning and interaction through fun with\r\nexclusive EuroKids kits\r\nCultivates creativity and Develop curiosity\r\nImproves imagination through Art and Music', 'image/banner38.jpg', 'image/service18.jpg', 'image/icon18.jpg', 3, 'Imparts essential life skills\r\nEnhances learning and interaction through fun with\r\nexclusive EuroKids kits', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `slider_image` text NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `vendor_id`, `slider_image`) VALUES
(1, 2, 'image/slider1.jpg'),
(2, 2, 'image/slider2.jpg'),
(3, 35, 'image/slider3.jpg'),
(4, 35, 'image/slider4.jpg'),
(5, 34, 'image/slider5.jpg'),
(7, 34, 'image/slider7.jpg'),
(8, 36, 'image/slider8.jpg'),
(9, 36, 'image/slider9.jpg'),
(10, 37, 'image/slider10.jpg'),
(11, 37, 'image/slider11.jpg'),
(12, 37, 'image/slider12.gif'),
(13, 38, 'image/slider13.png'),
(14, 38, 'image/slider14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE IF NOT EXISTS `social_media` (
  `socialmedia_id` int(11) NOT NULL AUTO_INCREMENT,
  `media_name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  PRIMARY KEY (`socialmedia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`socialmedia_id`, `media_name`, `link`, `vendor_id`) VALUES
(1, 'instagram', 'http://www.instragram.com', 2),
(2, 'facebook', 'http://www.facebook.com/accreteit', 2),
(3, 'facebook', 'https://www.facebook.com/shivamelectronics', 35),
(4, 'instagram', 'https://www.instagram.com/shivamelectronics', 35),
(5, 'facebook', 'https://www.facebook.com', 36),
(6, 'instagram', 'https://www.instagram.com', 36),
(7, 'facebook', 'https://www.facebook.com', 37),
(8, 'instagram', 'https://www.instagram.com', 37),
(9, 'facebook', 'https://www.facebook.com', 38),
(10, 'instagram', 'https://www.instagram.com', 38);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `team_image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `vendor_id`, `team_image`, `name`, `designation`, `short_description`) VALUES
(2, 2, 'image/team2.jpg', 'Disha', 'designer', 'Designing the shop.'),
(3, 2, 'image/team3.jpg', 'Bhavika', 'Manager', 'managing the whole shop.'),
(4, 35, 'image/team4.jpg', 'Johnson', 'ShopKeeper', 'Manage the whole shop'),
(5, 35, 'image/team5.jpg', 'Bumrah', 'Worker', 'Show the details of product'),
(6, 35, 'image/team6.jpg', 'Natasha', 'Accountant', 'Manage account details and file the return.'),
(7, 34, 'image/team7.jpg', 'joseph', 'waiter', 'This delicious meal is inspired by the vibrant flavors of Middle Eastern cuisine'),
(8, 34, 'image/team8.jpg', 'zain malik', 'Manager', 'Here at Cerasis we think its important that our clients and customers understand'),
(9, 36, 'image/team9.jpg', 'smit', 'worker', 'show the clothes to the customer.'),
(10, 36, 'image/team10.jpg', 'misha', 'accountant', 'manage money payment.'),
(11, 36, 'image/team11.jpg', 'dhaval', 'worker', 'fault the cloths'),
(12, 37, 'image/team12.jpg', 'Nicks', 'DJ', 'Manage music system for all the parties.'),
(13, 37, 'image/team13.jpg', 'Crysteena', 'Designer', 'Make design for the events based on the clients needs.'),
(14, 37, 'image/team14.jpg', 'Stark', 'Manager', 'Manage the whole events.'),
(15, 37, 'image/team15.jpg', 'Snehal', 'Wedding planer', 'Manage all wedding events.'),
(16, 38, 'image/team16.jpg', 'Sargun', 'Teacher', 'Teach children english and hindi subject.'),
(17, 38, 'image/team17.jpg', 'Rashi', 'Care Taker', 'Take care of all the play school children.'),
(18, 38, 'image/team18.jpg', 'Henish', 'Principal', 'Take care of the whole school.Manage all the event for the school.');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `testimonial_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  PRIMARY KEY (`testimonial_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonial_id`, `title`, `designation`, `review`, `vendor_id`) VALUES
(5, 'Natasha', 'Accountant', 'Best staff for working,good response.', 35),
(6, 'Ravi', 'Customer', 'All good quality products are available.Good response by all the staff.', 35),
(7, 'Harman', 'Customer', 'All types of electronics product are available on best selling price', 35),
(9, 'john', 'Customer', 'five star', 34),
(10, 'buttler', 'waiter', 'good one services.', 34),
(11, 'salman', 'customer', 'best clothing shop.', 36),
(12, 'krishna', 'visitor', 'best shop and available all new fashion cloths.', 36),
(13, 'Bhavika', 'Supplier', 'Use fresh products.Good service provider', 37),
(14, 'Devanshu', 'Client', 'Very good place to plan your events', 37),
(15, 'Devarshis', 'Employee', 'Provide best atmosphere for work', 37),
(16, 'Vyom', 'Parent', 'Best school for the children', 38),
(17, 'Bhavya', 'Teacher', 'Best teaching Experience', 38),
(18, 'saloni', 'Parent', 'My child learn many things from the school', 38);

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `theme_id` int(10) NOT NULL AUTO_INCREMENT,
  `theme_name` varchar(255) NOT NULL,
  `theme_url` text NOT NULL,
  `theme_icon` text,
  PRIMARY KEY (`theme_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`theme_id`, `theme_name`, `theme_url`, `theme_icon`) VALUES
(1, 'Interior', 'interior-1/index.php', 'image/theme1.jpg'),
(2, 'Architecture', 'interior-2/index.php', 'image/theme2.jpg'),
(3, 'Designer', 'interior-3/index.php', 'image/theme3.jpg'),
(4, 'saloon', 'salon-1/index.php', 'image/theme4.jpg'),
(5, 'Barber', 'salon-2/index.php', 'image/theme5.jpg'),
(6, 'Barbarazz', 'salon-3/index.php', 'image/theme6.jpg'),
(7, 'Restaurant', 'restaurant-1/index.php', 'image/theme7.jpg'),
(8, 'Food', 'restaurant-2/index.php', 'image/theme8.jpeg'),
(9, 'Cafe', 'restaurant-3/index.php', 'image/theme9.jpg'),
(10, 'Tour', 'tour-1/index.php', 'image/theme10.jpg'),
(11, 'Traveling', 'tour-2/index.php', 'image/theme11.jpg'),
(12, 'Transport', 'tour-3/index.php', 'image/theme12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) NOT NULL,
  PRIMARY KEY (`type_id`),
  UNIQUE KEY `type_name` (`type_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(3, 'Retailer'),
(1, 'wholeseller');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `contact_no`, `email`) VALUES
(1, 'misha', 'misha123', 8758433350, 'kelawalam76@gmail.com'),
(4, 'krishna', 'krishna123', 8000485086, 'juhidesai2410@gmail.com'),
(5, 'smit', 'smit123', 9723205749, 'smitshethiya1307@gmail.com'),
(6, 'virat', 'virat123', 9652365417, 'virat15@gmail.com'),
(7, 'joseph', 'joseph123', 7496582310, 'joseph1023@gmail.com'),
(8, 'johne', 'johne123', 8574965214, 'johne78@gmail.com'),
(9, 'buttler', 'buttler123', 85577748632, 'buttler1511@gmail.com'),
(10, 'roy', 'roy123', 6525554789, 'roy789@gmail.com'),
(11, 'finch', 'finch123', 7899965584, 'finch007@gmail.com'),
(12, 'warner', 'warner123', 8555698742, 'warner52@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(255) NOT NULL,
  `vendor_image` text NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `vendor_email` varchar(255) NOT NULL,
  `vendor_contactno` bigint(10) NOT NULL,
  `vendor_company_idproof` text NOT NULL,
  `description` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `approve` int(11) NOT NULL DEFAULT '0',
  `theme_id` int(11) NOT NULL,
  PRIMARY KEY (`vendor_id`),
  UNIQUE KEY `shop_name` (`shop_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `shop_name`, `vendor_image`, `vendor_name`, `vendor_email`, `vendor_contactno`, `vendor_company_idproof`, `description`, `address`, `password`, `registration_date`, `category_id`, `type_id`, `approve`, `theme_id`) VALUES
(34, 'lapizza', 'image/vendor34.jpg', 'joseph', 'joseph55@gmail.com', 8545477740, 'image/vendor_idproof34.jpg', 'We will provide unlimited food,All types of pizza,All type of cusine and italian foods available.', 'U-36,safal squre vesu road,surat', 'joseph123', '2019-06-04', 7, 3, 2, 11),
(35, 'Shivam Electronics', 'image/vendor35.JPG', 'smit', 'smitshethiya1307@gmail.com', 9723205749, 'image/vendor_idproof35.jpg', 'we Will provide all types of electronic items like ac,tv,washing machine etc', 'P-365,squre one complex,althan,surat', 'smit123', '2019-06-19', 4, 1, 2, 3),
(36, 'simran', 'image/vendor36.jpg', 'simran', 'simran77@gmail.com', 7896588852, 'image/vendor_idproof36.jpg', 'we are selling all types of womens and man cloths like jeans,top,t-shirt,shorts.', '121,near sharvodaya petrol pump,adajan,surat', 'simran123', '2019-06-04', 28, 3, 2, 2),
(37, 'innovative', 'image/vendor37.jpg', 'john', 'john96@gmail.com', 9666325410, 'image/vendor_idproof37.jpg', 'we organize all types of event birthday,marriage,kitty party. ', '2-565,sagrampura surat', 'john123', '2019-06-04', 23, 1, 2, 5),
(38, 'Kidzz', 'image/vendor38.jpg', 'Jahnvi', 'lathiajahnvi@gmail.com', 9865975367, 'image/vendor_idproof38.jpg', 'We provide all the jewellary for child,women ang men.\r\nThere is gold,silver and platinum jewellary are available in the shop.', '18,Shivam residency,Prime Market,Adajan,Surat', 'jahnvi123', '2019-06-05', 30, 3, 2, 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
