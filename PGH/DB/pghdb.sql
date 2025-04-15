-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2025 at 08:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pghdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(5) NOT NULL,
  `name` text DEFAULT NULL,
  `emailId` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `name`, `emailId`, `password`) VALUES
(1, 'Pratik', 'pratik@gmail.com', '123'),
(2, 'Gaurav', 'gaurav@gmail.com', '123'),
(3, 'Honey', 'honey@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookId` int(5) NOT NULL,
  `bookDate` date NOT NULL,
  `checkinDate` date NOT NULL,
  `checkOutDate` date NOT NULL,
  `userId` int(5) NOT NULL,
  `roomId` int(5) NOT NULL,
  `hotelId` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookId`, `bookDate`, `checkinDate`, `checkOutDate`, `userId`, `roomId`, `hotelId`) VALUES
(23, '2024-10-26', '2024-10-29', '2024-11-02', 8, 8, 3),
(24, '2024-10-29', '2024-10-29', '2024-11-02', 8, 27, 22),
(25, '2024-11-11', '2024-11-14', '2024-11-17', 8, 4, 2),
(26, '2024-11-12', '2024-11-12', '2024-11-17', 9, 19, 7),
(27, '2024-11-12', '2024-12-19', '2024-01-13', 10, 10, 4),
(28, '2024-11-16', '2024-11-09', '2024-11-20', 8, 4, 2),
(29, '2024-12-25', '2024-12-27', '2025-01-07', 11, 20, 7);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contactId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobno` int(10) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactId`, `name`, `mobno`, `msg`, `email`) VALUES
(3, 'daksh', 1234567891, 'plz contact me', 'daksh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `gallId` int(5) NOT NULL,
  `hotelId` int(5) NOT NULL,
  `imageURL` text NOT NULL,
  `title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`gallId`, `hotelId`, `imageURL`, `title`) VALUES
(1, 1, 'gallery/1.jpg', 'Visiting Area'),
(2, 1, 'gallery/2.jpg', 'Restaurant'),
(3, 1, 'gallery/3.jpg', 'SwimmingPool Area'),
(4, 1, 'gallery/4.jpg', 'Gallery View'),
(5, 2, 'gallery/5.jpg', 'Visiting Area'),
(6, 2, 'gallery/6.jpg', 'Restaurant'),
(7, 2, 'gallery/7.jpg', 'SwimmingPool Area'),
(8, 2, 'gallery/8.jpg', 'Sky Park Restaurant'),
(9, 3, 'gallery/9.jpg', 'Visiting Area'),
(10, 3, 'gallery/10.jpg', 'Restaurant'),
(11, 3, 'gallery/11.jpg', 'SwimmingPool Area'),
(12, 3, 'gallery/12.jpg', 'Gym'),
(13, 4, 'gallery/13.jpg', 'Visiting Area'),
(14, 4, 'gallery/14.jpg', 'Restaurant'),
(15, 4, 'gallery/15.jpg', 'Gallery View'),
(16, 4, 'gallery/16.jpg', 'Gym'),
(18, 5, 'gallery/18.jpg', 'Restaurant'),
(17, 5, 'gallery/17.jpg', 'Visiting Area'),
(19, 5, 'gallery/19.jpg', 'Function Hall'),
(20, 5, 'gallery/20.jpg', 'Lobby'),
(25, 7, 'gallery/25.jpg', 'Visiting Area'),
(26, 7, 'gallery/26.jpg', 'Restaurant'),
(27, 7, 'gallery/27.jpg', 'SwimmingPool Area'),
(28, 7, 'gallery/28.jpg', 'Sea View Area'),
(29, 8, 'gallery/29.jpg', 'Visiting Area'),
(30, 8, 'gallery/30.jpg', 'Garden Area'),
(64, 9, 'gallery/31.jpg', 'Visiting Area'),
(65, 9, 'gallery/32.jpg', 'Restaurant'),
(66, 9, 'gallery/33.jpg', 'SwimmingPool Area'),
(67, 9, 'gallery/34.jpg', 'Sky Park Restaurant'),
(21, 6, 'gallery/21.jpg\r\n', 'Lobby'),
(22, 6, 'gallery/22.jpg', 'Restaurant'),
(23, 6, 'gallery/23.jpg', 'SwimmingPool Area'),
(24, 6, 'gallery/24.jpg', 'Sky Park Restaurant'),
(69, 22, 'gallery/35.jpg', 'Visiting Area'),
(70, 22, 'gallery/36.jpg', 'Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotelId` int(5) NOT NULL,
  `hotelName` text NOT NULL,
  `address` mediumtext NOT NULL,
  `city` text NOT NULL,
  `contactNo` text NOT NULL,
  `map` text NOT NULL,
  `logo` text NOT NULL,
  `about` mediumtext NOT NULL,
  `facility` mediumtext NOT NULL,
  `hotelImage` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotelId`, `hotelName`, `address`, `city`, `contactNo`, `map`, `logo`, `about`, `facility`, `hotelImage`) VALUES
(1, 'Taj Skyline Ahmedabad', 'Sankalp Square III, Opp. Saket3, Nr. Nilkanth Green Sindhubhavan Road, Shilaj , Ahmedabad, Thaltej, 380059 Ahmedabad, India ', 'Ahmedabad', '079 4040 0000', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.4445044255885!2d72.47970237485141!3d23.044159815523077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b6318e8da91%3A0x864bb42461cc953f!2sTaj%20Skyline%2C%20Ahmedabad!5e0!3m2!1sen!2sin!4v1693311309795!5m2!1sen!2sin\" width=\"1200\" height=\"450\" \r\nstyle=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'logo/1.png', 'Taj Skyline, Ahmedabad is a great choice for travellers looking for a 5 star hotel in Ahmedabad. It is located in Thaltej.This Hotel stands out as one of the highly recommended hotel in Ahmedabad and is recommended by 88% of our guests. Hotel is rated 4.3 out of 5, which is considered as very good.From all the 5 Star hotels in Ahmedabad, Taj Skyline, Ahmedabad is very much popular among the tourists. A smooth check-in/check-out process, flexible policies and friendly management garner great customer satisfaction for this property. The Hotel has standard Check-In time as 02:00 PM and Check-Out time as 12:00 PM.', 'Dining AreaRestaurantCoffee ShopFree Wi-FiFirst-aid ServicesDoctor on CallTicket/Tour AssistancePaid Pickup/DropPaid Railway Station TransfersIndoor GamesSmoke alarmsCCTVFree Parking24-hour Room ServiceSmoke Detector', 'hotel/1.jpg'),
(3, 'The Ummed  Ahmedabad Airport', 'Near Airport Circle, 382475 Ahmedabad, India ', 'Ahmedabad', '92272 28959', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.3965769934994!2d72.61415337485253!3d23.082574114087308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8158f314cf1b%3A0x87973731d782fc7f!2sThe%20Ummed%20Ahmedabad!5e0!3m2!1sen!2sin!4v1693630779508!5m2!1sen!2sin\" width=\"1200\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'logo/3.png', 'Sitting on the banks of Sabarmati River, Hotel The Ummed offers an outdoor pool and a fitness centre. Just 500 metres from Ahmedabad Airport, it provides 24-hour room service and a 24-hour coffee shop. Free WiFi is available.\r\n\r\nThe spacious air-conditioned rooms are equipped with a satellite TV, tea/coffee making facilities and a personal safe. Suites come with a flat-screen TV and DVD player. All en suite bathrooms have shower facilities.\r\n\r\nHotel The Ummed is 9 km from Ahmedabad Junction Railway Station. It is 17 km from Gandhinagar city centre. Airport shuttles can be arranged at an extra charge.\r\n\r\nFull professional services are offered at the hotel\'s business centre. The hotel also provides laundry services and a doctor on-call. Luggage storage and currency exchange services are also available.', 'Dining Area\r\nRestaurant\r\nCoffee ShoFree Wi-Fi\r\nTicket/Tour Assistance\r\nPaid Pickup/Drop\r\nPaid Railway Station Transfers\r\nIndoor Games\r\nSmoke alarms\r\nCCTV\r\nFree Parking\r\n24-hour Room Service\r\nSmoke Detector\r\nSafety & Hygiene\r\nDispensors for PPE (Personal Protective Equipment) kits', 'hotel/3.jpg'),
(2, 'Vivanta Ahmedabad SG Highway', '147, 53, Sarkhej - Gandhinagar Hwy, opposite Bhagwat Vidhya Peeth, Sola, Ahmedabad, Gujarat 380061', 'Ahmedabad', '079 3555 3555', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.2852010647125!2d72.5263563748527!3d23.086653313934708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83c1ab26d50f%3A0x2ddf53544cd30228!2sVivanta%20Ahmedabad%2C%20SG%20Highway!5e0!3m2!1sen!2sin!4v1693483437853!5m2!1sen!2sin\"width=\"1200\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'logo/2.png', 'Vivanta Ahmedabad SG road is situated 25 km from the famous Akshardham Temple. Ahmedabad Airport and Ahmedabad Railway Station are about 14 km away from the property. The local bus stand is 12 km away.\r\n\r\nAir-conditioned rooms feature a seating area with a sofa and are equipped with a wardrobe, desk, safe, flat-screen TV, minibar and telephone. The en suite bathrooms have complimentary toiletries.\r\n\r\nThe in-house restaurant serves Indian, Chinese and Continental fare. Room service options are also available.\r\n\r\nCouples particularly like the location — they rated it 8.7 for a two-person trip.', 'Dining Area\r\nRestaurant\r\nWi-Fi\r\nFirst-aid Services\r\nDoctor on Call\r\nTicket/Tour Assistance\r\nPaid Pickup/Drop\r\nPaid Railway Station Transfers\r\nCCTV\r\nFree Parking\r\n24-hour Room Service\r\nSmoke Detector\r\nDispensors for PPE (Personal Protective Equipment) kits', 'hotel/2.jpg'),
(4, 'Lemon Tree Premier, Dwarka\r\n', 'Near Iskon Gate Nageshwar Road, 361335 Dwarka, India ', 'Dwarka', '9898444444', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.8960092992247!2d68.96643207482879!3d22.244024044933866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39569dd72b9181d9%3A0x3965c9302c036bd9!2sLemon%20Tree%20Premier%2C%20Dwarka!5e0!3m2!1sen!2sin!4v1693631655947!5m2!1sen!2sin\" width=\"1200\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'logo/4.png', 'Lemon Tree Premier, Dwarka is a 4-star property set in Dwarka. With free WiFi, this 4-star hotel offers room service and a 24-hour front desk.\r\n\r\nAll rooms in the hotel are equipped with a kettle. All rooms are equipped with air conditioning and a flat-screen TV, and certain units at Lemon Tree Premier, Dwarka have a city view. The units feature a safety deposit box.\r\n\r\nGuests at the accommodation can enjoy an Asian breakfast.\r\n\r\nDwarkadhish Temple is less than 1 km from Lemon Tree Premier, Dwarka. The nearest airport is Porbandar Airport, 105 km from the hotel.', 'Dining Area\r\nRestaurant\r\nCoffee ShoFree Wi-Fi\r\nTicket/Tour Assistance\r\nPaid Pickup/Drop\r\nPaid Railway Station Transfers\r\nIndoor Games\r\nSmoke alarms\r\nCCTV\r\nFree Parking\r\n24-hour Room Service\r\nSmoke Detector\r\nSafety & Hygiene\r\nDispensors for PPE (Personal Protective Equipment) kits', 'hotel/4.jpg'),
(5, 'VITS Devbhumi, Dwarka', 'Okha State Highway, Near Ravla Lake, Opp. Main Post Office, 361335 Dwarka, India', 'Dwarka', '75730 09851', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.9093766400692!2d68.96391987482883!3d22.243516944952063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39569c2607813893%3A0xdbce1382e6e38ecc!2sVITS%20Devbhumi%2C%20Dwarka!5e0!3m2!1sen!2sin!4v1694602896454!5m2!1sen!2sin\" width=\"1200\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'logo/5.png', 'Located in Dwarka, 750 metres from Dwarkadhish Temple, VITS Devbhumi, Dwarka provides accommodation with a terrace and free private parking. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi throughout the property. The hotel features family rooms.\r\n\r\nAll units at the hotel are equipped with a seating area. At VITS Devbhumi, Dwarka every room is fitted with a desk, a flat-screen TV and a private bathroom.\r\n\r\nA buffet breakfast is available daily at the accommodation.\r\n\r\nFamilies particularly like the location — they rated it 8.6 for a stay with kids.', 'Dining Area\r\nRestaurant\r\nWi-Fi\r\nFirst-aid Services\r\nDoctor on Call\r\nTicket/Tour Assistance\r\nPaid Pickup/Drop\r\nPaid Railway Station Transfers\r\nCCTV\r\nFree Parking\r\n24-hour Room Service\r\nSmoke Detector\r\nDispensors for PPE (Personal Protective Equipment) kits', 'hotel/5.jpg'),
(6, 'The Fern Seaside Luxurious Tent Diu', 'Survey No.171/0,Tent City,Hillock City,Diu Dadra and Nagar Haveli and Diu and Daman, 362520 Diu,', 'Diu', '6352351709', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119429.89977203276!2d70.80291406865366!3d20.7027366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be31d650efd6da5%3A0xcb4e5ab466fd5472!2sThe%20Fern%20Seaside%20Luxurious%20Tent%20Resort%2C%20Diu!5e0!3m2!1sen!2sin!4v1694606525922!5m2!1sen!2sin\" width=\"1200\" height=\"450\"\r\n style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'logo/6.png', 'Set in Diu, 800 metres from Jalandhar Beach, The Fern Seaside Luxurious Tent Diu offers accommodation with an outdoor swimming pool, free private parking, a fitness centre and a garden. This 5-star hotel offers a concierge service and luggage storage space. The accommodation provides a 24-hour front desk, airport transfers, room service and free WiFi.\r\n', 'Outdoor swimming pool\r\nFree WiFi\r\nFree parking\r\n3 restaurants\r\nRoom service\r\nFitness centre\r\nTea/coffee maker in all rooms\r\nBeachfront\r\nBreakfast\r\nChildren\'s cots (upon request)', 'hotel/6.jpg'),
(7, 'Praveg Beach Hotel Diu, Chakratirth Beach', 'Chakratirth Beach, next to INS Khukri Memorial, Diu, Dadra and Nagar Haveli and Daman and Diu 362520, 362520 Diu, India \r\n', 'Diu', '9090690902', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.132749900446!2d70.97269257478776!3d20.704833298826326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be31db254f464d1%3A0xbb001bf465f96570!2sPraveg%20Beach%20Resort%2C%20Chakratirth%2C%20Diu!5e0!3m2!1sen!2sin!4v1694608003013!5m2!1sen!2sin\"width=\"1200\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>\r\n', 'logo/7.png', 'Located in Diu, within a few steps of Chakratirth Beach and 1.1 km of Jalandhar Beach, Praveg Beach Hotel Diu, Chakratirth Beach provides accommodation with a restaurant and as well as free private parking for guests who drive. This 4-star hotel offers a 24-hour front desk.\r\n\r\nGuests at the hotel can enjoy an à la carte breakfast.\r\n\r\nThe nearest airport is Diu Airport, 6 km from Praveg Beach Resort Diu, Chakratirth Beach.', 'Outdoor swimming pool\r\nFree WiFi\r\nFree parking\r\n3 restaurants\r\nRoom service\r\nTea/coffee maker in all rooms\r\nBeachfront\r\nBreakfast\r\nChildren\'s cots (upon request)\r\nAir conditioning\r\nPrivate bathroom\r\nFlat-screen TV', 'hotel/7.jpg'),
(8, 'Hotel Apaar', 'Bunder Chowk, Opp. Govt. Parking, 362520 Diu, India ', 'Diu', '7041481111', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.3965769934994!2d72.61415337485253!3d23.082574114087308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8158f314cf1b%3A0x87973731d782fc7f!2sThe%20Ummed%20Ahmedabad!5e0!3m2!1sen!2sin!4v1693630779508!5m2!1sen!2sin\" width=\"1200\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'logo/8.png', 'Located in Diu, Hotel Apaar features 3-star accommodation with private balconies. With a restaurant, the 3-star hotel', 'Dining Area\r\nRestaurant\r\nWi-Fi\r\nFirst-aid Services\r\nDoctor on Call\r\nTicket/Tour Assistance\r\nPaid Pickup/Drop\r\nPaid Railway Station Transfers\r\nCCTV\r\nFree Parking\r\n24-hour Room Service\r\nSmoke Detector\r\nDispensors for PPE (Personal Protective Equipment) kits', 'hotel/8.jpg'),
(9, 'Bellevue Sarovar Portico Junagadh', 'Railway Station Road, Near Indralok Hotel, 362001 Junagadh, India ', 'Junagadh', '1800 11 1222', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237527.90593491716!2d70.15418949453128!3d21.532245000000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395803d76fe76ca5%3A0x709953861c6d5711!2sBellevue%20Sarovar%20Premiere%2C%20Junagadh!5e0!3m2!1sen!2sin!4v1694864693030!5m2!1sen!2sin\" width=\"1200\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'logo/9.png', 'Bellevue Sarovar Portico Junagadh features an outdoor swimming pool, fitness centre, a terrace and restaurant in Junagadh. This 4-star hotel offers a concierge service and a tour desk. The accommodation offers a 24-hour front desk, airport transfers, room service and free WiFi throughout the property.\r\n\r\nThe hotel will provide guests with air-conditioned rooms with a desk, a kettle, a minibar, a safety deposit box, a flat-screen TV and a private bathroom with a shower. At Bellevue Sarovar Portico Junagadh every room includes bed linen and towels.\r\n\r\nContinental and vegetarian breakfast options are available every morning at the accommodation.\r\n\r\nThe nearest airport is Keshod Airport, 38 km from Bellevue Sarovar Portico Junagadh.\r\n\r\nCouples particularly like the location — they rated it 8.8 for a two-person trip.', 'Outdoor swimming pool\r\nFree WiFi\r\nFree parking\r\nFamily rooms\r\n2 restaurants\r\nRoom service\r\nAirport shuttle\r\nSpa and wellness centre\r\nTea/coffee maker in all rooms\r\nSuperb breakfast', 'hotel/9.jpg'),
(22, 'HOTEL OM ', 'B/H HOTEL AMBER SOMNATH BY-PASS CIRCLE, PRABHAS PATAN , B/H HOTEL AMBER SOMNATH BY-PASS CIRCLE, PRABHAS PATAN ,, 362268 Somnath, India ', 'Somnath', '8975452536', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.3968432806323!2d70.40703207479277!3d20.896347892314214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bfd33f4d691d021%3A0x769c347231d4d5bf!2sHotel%20Om%20somnath!5e0!3m2!1sen!2sin!4v1695293485845!5m2!1sen!2sin\" width=\"1200\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'logo/10.png', 'Located in Somnath, 2 km from Somnath Beach, HOTEL OM provides accommodation with a shared lounge, free private parking and a restaurant. This 3-star hotel offers a tour desk. The accommodation offers a 24-hour front desk, airport transfers, room service and free WiFi.  The units in the hotel are fitted with a kettle. Complete with a private bathroom equipped with a shower and free toiletries, guest rooms at HOTEL OM have a flat-screen TV and air conditioning, and selected rooms are fitted with a seating area.  A vegetarian breakfast is available daily at the accommodation.  HOTEL OM provides an ironing service, as well as business facilities like fax and photocopying.  Somnath Temple is 2.2 km from the hotel. The nearest airport is Keshod Airport, 54 km from HOTEL OM.', 'Free WiFi Free parking Family rooms 2 restaurants Room service Airport shuttle Spa and wellness centre Tea/coffee maker in all rooms Superb breakfast', 'hotel/10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `revId` int(5) NOT NULL,
  `hotelId` int(5) NOT NULL,
  `revDate` date NOT NULL,
  `message` varchar(100) NOT NULL,
  `rate` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`revId`, `hotelId`, `revDate`, `message`, `rate`) VALUES
(13, 2, '2024-11-16', 'faboulas room', 8),
(12, 4, '2024-11-12', 'Good', 9);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomId` int(11) NOT NULL,
  `hotelId` int(5) NOT NULL,
  `roomNo` int(5) NOT NULL,
  `roomType` text NOT NULL,
  `roomImage` text NOT NULL,
  `roomRent` int(5) NOT NULL,
  `details` varchar(251) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomId`, `hotelId`, `roomNo`, `roomType`, `roomImage`, `roomRent`, `details`) VALUES
(1, 1, 101, 'Deluxe Room Twin Bed   ', 'room/1.jpg', 8960, 'With AC \r\nIroning facilities \r\nTea/Coffee maker \r\nWireless Internet \r\nFree Lunch Or Dinner \r\nFree Breakfast \r\nComfy beds '),
(4, 2, 101, 'Superior Room king bed', 'room/4.jpg', 6480, 'With AC\r\nFree Wi-Fi\r\nIndoor Games\r\nSmoke alarms\r\n24-hour Room Service\r\nSmoke Detector\r\nSafety & Hygiene\r\nDispensors for PPE (Personal Protective Equipment) kits\r\n'),
(2, 1, 102, 'Luxury Room King Bed', 'room/2.jpg', 10150, 'With AC\r\nIroning facilities\r\nTea/Coffee maker \r\nWireless Internet\r\nFree Lunch Or Dinner\r\nFree Breakfast\r\nComfy beds'),
(3, 1, 103, 'Luxury Grande King Bed', 'room/3.jpg', 16000, 'With AC \r\nIroning facilities\r\nTea/Coffee maker \r\nWireless Internet\r\nFree Lunch Or Dinner\r\nFree Breakfast\r\nComfy beds'),
(5, 2, 102, 'Deluxe Room King Bed', 'room/5.jpg', 7840, 'With AC\r\nFree Wi-Fi\r\nIndoor Games\r\nSmoke alarms\r\n24-hour Room Service\r\nSmoke Detector\r\nSafety & Hygiene\r\nDispensors for PPE (Personal Protective Equipment) kits'),
(6, 2, 103, 'Deluxe Suite', 'room/6.jpg', 14850, 'With Ac\r\nFree Breakfast\r\nFree Wi-Fi\r\nIndoor Games\r\nSmoke alarms\r\n24-hour Room Service\r\nSmoke Detector\r\nSafety & Hygiene\r\nDispensors for PPE (Personal Protective Equipment) kits'),
(7, 3, 101, 'Deluxe Double Bed Room with Garden View', 'room/7.jpg', 6650, 'With Ac \r\nFree Breakfast \r\nFree Wi-Fi \r\nIndoor Games \r\nSmoke alarms \r\n24-hour Room Service \r\nSmoke Detector \r\nSafety & Hygiene Dispensors for PPE (Personal Protective Equipment) kits\r\n'),
(8, 3, 102, 'Executive Suite with Pool View', 'room/8.jpg', 8370, 'With Ac  \r\nFree Breakfast  \r\nFree Wi-Fi  \r\nIndoor Games  \r\nSmoke alarms  \r\n24-hour Room Service  \r\nSmoke Detector  \r\nSafety & Hygiene \r\nDispensors for PPE (Personal Protective Equipment) kits\r\n'),
(9, 3, 103, 'Presidential Suite', 'room/9.jpg', 10600, '1 double bed \r\nWith Ac \r\nFree Breakfast \r\nFree Wi-Fi \r\nIndoor Games \r\nSmoke alarms \r\n24-hour Room Service \r\nSmoke Detector \r\nSafety & Hygiene Dispensors for PPE (Personal Protective Equipment) kits'),
(10, 4, 101, 'Deluxe Room with City View', 'room/10.jpg\r\n', 9850, 'City view\r\nFree WiFi\r\nSafety deposit box \r\nTile/marble floor \r\nTV \r\nSlippers \r\nTelephone \r\nSatellite channels \r\nTea/Coffee maker'),
(11, 4, 102, 'Executive Room with Temple and Sea View', 'room/11.jpg', 12500, '2 Large Bed\r\nTemple and Sea View\r\nFree WiFi\r\nSafety deposit box \r\nTile/marble floor \r\nTV \r\nSlippers \r\nTelephone \r\nSatellite channels \r\nTea/Coffee maker'),
(12, 4, 103, 'Presidential Suite', 'room/12.jpg', 13850, 'Presidential Suite\r\nFree WiFi\r\nSafety deposit box \r\nTile/marble floor \r\nTV \r\nSlippers \r\nTelephone \r\nSatellite channels \r\nTea/Coffee maker'),
(13, 5, 101, 'Deluxe Room', 'room/13.jpg', 8299, 'City view\r\nFree WiFi\r\nSafety deposit box \r\nTile/marble floor \r\nTV \r\nSlippers \r\nTelephone \r\nSatellite channels \r\nTea/Coffee maker'),
(14, 5, 102, 'Luxury Bed Room', 'room/14.jpg', 10200, 'City view\r\nFree WiFi\r\nSafety deposit box \r\nTile/marble floor \r\nTV \r\nSlippers \r\nTelephone \r\nSatellite channels \r\nTea/Coffee maker'),
(15, 5, 103, 'Deluxe Double Bed Room', 'room/15.jpg', 9870, 'Double Bed    \r\nCity view\r\nFree WiFi\r\nSafety deposit box \r\nTile/marble floor \r\nTV \r\nSlippers \r\nTelephone \r\nSatellite channels \r\nTea/Coffee maker'),
(16, 6, 101, 'Hazel Suite', 'room/16.jpg', 12850, 'Balcony\r\nSea view\r\nGarden view\r\nPool view\r\nAir conditioning\r\nEnsuite bathroom\r\nFlat-screen TV'),
(17, 6, 102, 'Fern Club Suite', 'room/17.jpg', 14520, 'Balcony\r\nSea view\r\nGarden view\r\nPool view\r\nMountain view\r\nAir conditioning\r\nEnsuite bathroom\r\nFlat-screen TV'),
(18, 6, 103, 'Winter Green Garden View Tent', 'room/18.jpg', 15250, 'Balcony\r\nSea view\r\nGarden view\r\nPool view\r\nAir conditioning\r\nEnsuite bathroom\r\nFlat-screen TV'),
(19, 7, 101, 'Deluxe Room with Sea View', 'room/19.jpg', 14600, 'Air conditioning\r\nPrivate bathroom\r\nFlat-screen TV\r\nDesk\r\nLinen\r\nSafety deposit box\r\nTowels\r\nFlat-screen TV\r\nAir conditioning'),
(20, 7, 102, 'Premium Room', 'room/20.jpg', 18900, 'Air conditioning\r\nPrivate bathroom\r\nFlat-screen TV\r\nDesk\r\nLinen\r\nSafety deposit box\r\nTowels\r\nFlat-screen TV\r\nAir conditioning'),
(21, 8, 101, 'Executive Room', 'room/21.jpg', 5950, 'The spacious double room offers air conditioning, a seating area, as well as a private bathroom boasting a walk-in shower and a bath or a shower.'),
(22, 8, 102, 'Deluxe BedRoom', 'room/22.jpg', 6800, 'The spacious double room offers air conditioning, a seating area, as well as a private bathroom boasting a walk-in shower and a bath or a shower.'),
(23, 9, 101, 'Superior Twin City View Room', 'room/23.jpg', 4950, '2 Large Bed\r\nSafety deposit box \r\nSlippers \r\nTelephone \r\nTea/Coffee maker\r\nAir conditioning\r\nEnsuite bathroom\r\nFlat-screen TV\r\nFree WiFi'),
(24, 9, 102, 'Premium room - 1 King Bed', 'room/24.jpg', 6750, 'Large Bed\r\nSafety deposit box \r\nSlippers \r\nTelephone \r\nTea/Coffee maker\r\nAir conditioning\r\nEnsuite bathroom\r\nFlat-screen TV\r\nFree WiFi'),
(25, 9, 103, 'Suite Room', 'room/25.jpg', 9850, 'Large Bed\r\nSafety deposit box \r\nSlippers \r\nTelephone \r\nTea/Coffee maker\r\nAir conditioning\r\nEnsuite bathroom\r\nFlat-screen TV\r\nFree WiFi'),
(27, 22, 101, 'Premium Quadruple Room', 'room/26.jpg', 9850, '2 Large Bed\r\nSafety deposit box \r\nSlippers \r\nTelephone \r\nTea/Coffee maker\r\nAir conditioning\r\nEnsuite bathroom\r\nFlat-screen TV\r\nFree WiFi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(5) NOT NULL,
  `name` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `emailId` text NOT NULL,
  `password` text NOT NULL,
  `mobileNo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `name`, `gender`, `birthDate`, `emailId`, `password`, `mobileNo`) VALUES
(8, 'daksh', 'Male', '2004-05-04', 'daksh@gmail.com', '1234', '6353193843'),
(9, 'meet', 'Male', '2004-02-14', 'meet@gmail.com', '1234', '9876345677'),
(10, 'dhruv', 'Male', '2005-06-03', 'dhruv@gmail.com', '1234', '8976543457'),
(11, 'PGH', 'Male', '2004-07-05', 'pgh4project@gmail.com', '1234', '7777932591');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`gallId`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotelId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`revId`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `gallId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotelId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `revId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
