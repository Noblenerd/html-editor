-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2020 at 08:08 PM
-- Server version: 10.1.41-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamch1_noble`
--

-- --------------------------------------------------------

--
-- Table structure for table `signatures`
--

CREATE TABLE `signatures` (
  `ID` int(5) NOT NULL,
  `Head` varchar(1500) NOT NULL,
  `Social` varchar(1500) NOT NULL,
  `Contact` varchar(1500) NOT NULL,
  `Logo` varchar(1500) NOT NULL,
  `Head_t` varchar(150) NOT NULL,
  `Social_t` varchar(150) NOT NULL,
  `Contact_t` varchar(150) NOT NULL,
  `Logo_t` varchar(150) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Tables` varchar(80) NOT NULL,
  `Username` varchar(60) NOT NULL,
  `Date` datetime(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signatures`
--

INSERT INTO `signatures` (`ID`, `Head`, `Social`, `Contact`, `Logo`, `Head_t`, `Social_t`, `Contact_t`, `Logo_t`, `Name`, `Tables`, `Username`, `Date`) VALUES
(59, '&lt;img class=&quot;chead_1 head_1&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/ARBP - NATIONAL DAY 47.jpg&quot; height=&quot;90px&quot; width=&quot;95%&quot; style=&quot;width: 95%; height: 150px;&quot;&gt;~', '&lt;img class=&quot;csocial_1 social_1&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/EXCLAIMER.png&quot; height=&quot;60px&quot; width=&quot;60px&quot; style=&quot;width: 95%; height: 200px; display: block; margin-top: 10%;&quot;&gt;~', '&lt;label class=&quot;ccontact_1 contact_1&quot; style=&quot;font-weight: bold; text-align: left; color: rgb(163, 21, 5); display: inline;&quot;&gt;BIPIN PATEL&lt;/label&gt;~&lt;label class=&quot;ccontact_2 contact_2&quot; style=&quot;font-weight: bold; color: rgb(27, 109, 111); text-align: center;&quot;&gt;ARBP WORLDWIDE COMPUTER TRADING LLC&lt;/label&gt;~', '&lt;img class=&quot;clogo_1 logo_1&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/DRIVELOCK.png&quot; height=&quot;60px&quot; width=&quot;60px&quot; style=&quot;width: 95%; height: 200px; margin-top: 10%;&quot;&gt;~', 'border-bottom:1px solid #d01616;', '', 'border-left:1px solid #d50707;border-right:1px solid #c40e0e;', '', 'TEST3', '2x3', 'exclaimer', '2020-12-27 10:32:18.000000'),
(55, '&lt;img class=&quot;chead_1 head_1&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/Penguins.jpg&quot; height=&quot;90px&quot; width=&quot;90px&quot; style=&quot;width: 95%; height: 150px;&quot;&gt;~', '&lt;p class=&quot;csocial_1 social_1&quot; style=&quot;text-align: center; font-size: 30px; font-weight: bold; text-decoration: underline; color: rgb(52, 183, 122); background-color: rgb(91, 42, 42); font-family: fantasy;&quot;&gt;Hello to the world&lt;/p&gt;~&lt;p class=&quot;csocial_2 social_2&quot; style=&quot;padding: 0px; margin: 0px;&quot;&gt;Hello to the world&lt;/p&gt;~~&lt;p class=&quot;csocial_4 social_4&quot; style=&quot;padding: 0px; margin: 0px; font-size: 20px; font-style: italic;&quot;&gt;Hello to the world&lt;/p&gt;~&lt;p class=&quot;csocial_5 social_5&quot; style=&quot;padding: 0px; margin: 0px; text-align: left;&quot;&gt;Hello to the world&lt;/p&gt;~&lt;a href=&quot;https://www.youtube.com/&quot; class=&quot;csocial_6 social_6&quot; style=&quot;padding: 5px; margin: 5px;&quot;&gt;&lt;span class=&quot;fab fa-facebook x2&quot;&gt;&lt;/span&gt;&lt;/a&gt;~&lt;a href=&quot;https://www.youtube.com/&quot; class=&quot;csocial_7 social_7&quot; style=&quot;padding: 5px; margin: 5px;&quot;&gt;&lt;span class=&quot;fab fa-twitter x2&quot;&gt;&lt;/span&gt;&lt;/a&gt;~&lt;p class=&quot;csocial_8 social_8&quot; style=&quot;padding: 5px;&quot;&gt;Helo to the world&lt;/p&gt;~&lt;a href=&quot;https://www.youtube.com/&quot; class=&quot;csocial_9 social_9&quot; style=&quot;padding: 0px; margin: 0px;&quot;&gt; Youtube &lt;/a&gt;~&lt;p class=&quot;csocial_10 social_10&quot; style=&quot;padding: 0px; margin: 0px; color: rgb(193, 227, 22); text-decoration: underline;&quot;&gt;Hello t', '&lt;img class=&quot;ccontact_1 contact_1&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/Jellyfish.jpg&quot; height=&quot;90px&quot; width=&quot;90px&quot; style=&quot;width: 95%; height: 200px;&quot;&gt;~', '&lt;img class=&quot;clogo_1 logo_1&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/WhatsApp Image 2020-12-24 at 12.50.47 AM.jpeg&quot; height=&quot;90px&quot; width=&quot;90px&quot; style=&quot;width: 95%; height: 200px;&quot;&gt;~&lt;p class=&quot;clogo_2 logo_2&quot;&gt;Hello to the worldHello to the worldHello to the worldHello to the Hello to the worldHello to the worldHello to the worldHello to the worldHello to the worldHello to the worldHello to the worldHello to the worldHello to the worldHello to the worldHello to the worldHello to the worldHello to the worldworldHello to the worldHello to the worldHello to the worldHello to the worldHello to the world&lt;/p&gt;~', '', '', '', 'border-top:1px solid #c03535;border-bottom:1px solid #df7272;', 'Final testing', '1x3', 'exclaimer', '2020-12-25 13:57:05.000000'),
(56, '&lt;img class=&quot;chead_1 head_1&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/1.gif&quot; height=&quot;60px&quot; width=&quot;60px&quot; style=&quot;width: 95%; height: 100px; margin-top: 10%;&quot;&gt;~', '&lt;p class=&quot;csocial_1 social_1&quot; style=&quot;display: block; font-weight: bold; color: rgb(186, 28, 28); margin: 0px;&quot;&gt;Bipin Patel&lt;/p&gt;~&lt;p class=&quot;csocial_2 social_2&quot; style=&quot;font-weight: bold; margin: 0px;&quot;&gt;ARBP WORLDWIDE COMPUTER TRADING LLC&lt;/p&gt;~~&lt;p class=&quot;csocial_4 social_4&quot; style=&quot;margin: 0px;&quot;&gt;1902, Silver Tower&lt;/p&gt;~&lt;address class=&quot;csocial_5 social_5&quot; style=&quot;margin: 0px;&quot;&gt;Business Bay, Dubai&lt;/address&gt;~&lt;address class=&quot;csocial_6 social_6&quot; style=&quot;margin: 0px;&quot;&gt;Mob. : +971 55855 4258&lt;/address&gt;~&lt;address class=&quot;csocial_7 social_7&quot; style=&quot;margin: 0px;&quot;&gt;Email : bipin@arbpworldwide.com&lt;/address&gt;~&lt;a href=&quot;www.fb.com&quot; class=&quot;csocial_8 social_8&quot; style=&quot;padding: 5px; margin: 5px;&quot;&gt;&lt;span class=&quot;fab fa-facebook x2&quot;&gt;&lt;/span&gt;&lt;/a&gt;~&lt;a href=&quot;www.linkedin.com&quot; class=&quot;csocial_9 social_9&quot; style=&quot;padding: 5px; margin: 5px;&quot;&gt;&lt;span class=&quot;fab fa-linkedin x2&quot;&gt;&lt;/span&gt;&lt;/a&gt;~&lt;a href=&quot;www.insta.com&quot; class=&quot;csocial_10 social_10&quot; style=&quot;padding: 5px; margin: 5px;&quot;&gt;&lt;span class=&quot;fab fa-instagram x2&quot;&gt;&lt;/span&gt;&lt;/a&gt;~~~~&lt;a href=&quot;google.com&quot; class=&quot;csocial_14 social_14&quot;&gt; dunamis &lt;/a&gt;~', '&lt;img class=&quot;ccontact_1 contact_1&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/ARBP - NATIONAL DAY 47.jpg&quot; height=&quot;90px&quot; width=&quot;95%&quot; style=&quot;width: 95%; height: 150px;&quot;&gt;~', '&lt;address class=&quot;clogo_1 logo_1&quot; style=&quot;font-weight: bold; color: rgb(52, 50, 159);&quot;&gt;This message contains confidential information and is intended only for the individual named. If you are not the named addressee you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately by e-mail if you have received this e-mail by mistake and delete this e-mail from your system. E-mail transmission cannot be guaranteed to be secure or error-free as information could be intercepted, corrupted, lost, destroyed, arrive late or incomplete, or contain viruses. The sender therefore does not accept liability for any errors or omissions in the contents of this message, which arise as a result of e-mail transmission. If verification is required please request a hard-copy version.&lt;/address&gt;~', 'border-top:1px solid #a81010;border-bottom:1px solid #900e0e;border-right:1px solid #292c7f;border-left:1px solid #2c2b5e;', '', 'border-top:1px solid #416f34;border-bottom:1px solid #12691c;', '', '26.12.2020 Email Signature1', '1x2', 'exclaimer', '2020-12-26 10:31:59.000000'),
(57, '&lt;img class=&quot;chead_1 head_1&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/arbp_worldwide.png&quot; height=&quot;60px&quot; width=&quot;60px&quot; style=&quot;width: 95%; height: 100px; margin-top: 10%;&quot;&gt;~', '&lt;p class=&quot;csocial_1 social_1&quot; style=&quot;font-weight: bold; margin: 0px;&quot;&gt;Bipin Patel&lt;/p&gt;~~&lt;address class=&quot;csocial_3 social_3&quot; style=&quot;margin: 0px;&quot;&gt;1902, Silver Tower&lt;/address&gt;~&lt;address class=&quot;csocial_4 social_4&quot; style=&quot;margin: 0px;&quot;&gt;Business Bay, DUBAI&lt;/address&gt;~&lt;address class=&quot;csocial_5 social_5&quot; style=&quot;margin: 0px;&quot;&gt;Mob.: +971 55855 4258&lt;/address&gt;~&lt;address class=&quot;csocial_6 social_6&quot; style=&quot;margin: 0px;&quot;&gt;Email : bipin@arbpworldwide.com&lt;/address&gt;~&lt;address class=&quot;csocial_7 social_7&quot; style=&quot;margin: 0px;&quot;&gt;Web. : www.arbpworldwide.com&lt;/address&gt;~&lt;a href=&quot;www.arbpworldwide.com&quot; class=&quot;csocial_8 social_8&quot;&gt; www.arbpworldwide.com &lt;/a&gt;~', '&lt;img class=&quot;ccontact_1 contact_1&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/christmas banner.jpg&quot; height=&quot;90px&quot; width=&quot;95%&quot; style=&quot;width: 95%; height: 100px;&quot;&gt;~', '&lt;address class=&quot;clogo_1 logo_1&quot; style=&quot;color: rgb(90, 51, 163); font-weight: bold; display: block;&quot;&gt;This message contains confidential information and is intended only for the individual named. If you are not the named addressee you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately by e-mail if you have received this e-mail by mistake and delete this e-mail from your system. E-mail transmission cannot be guaranteed to be secure or error-free as information could be intercepted, corrupted, lost, destroyed, arrive late or incomplete, or contain viruses. The sender therefore does not accept liability for any errors or omissions in the contents of this message, which arise as a result of e-mail transmission. If verification is required please request a hard-copy version. 							&lt;/address&gt;~', '', '', 'border-top:1px solid #e00000;border-bottom:1px solid #db0a0a;', '', 'ARBP TEST SIGNATURE1', '1x2', 'exclaimer', '2020-12-27 06:45:50.000000'),
(58, '&lt;img class=&quot;chead_1 head_1&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/arbp_worldwide.png&quot; height=&quot;90px&quot; width=&quot;90px&quot; style=&quot;width: 95%; height: 100px; margin-top: 80px;&quot;&gt;~', '&lt;p class=&quot;csocial_1 social_1&quot; style=&quot;font-weight: bold; color: rgb(217, 13, 13); margin: 0px;&quot;&gt;Bipin Patel&lt;/p&gt;~&lt;p class=&quot;csocial_2 social_2&quot; style=&quot;color: rgb(114, 110, 110); font-weight: bold; margin: 0px;&quot;&gt;ARBP WORLDWIDE COMPUTER TRADING LLC&lt;/p&gt;~&lt;p class=&quot;csocial_3 social_3&quot; style=&quot;margin: 0px;&quot;&gt;1902, Silver Tower&lt;/p&gt;~&lt;p class=&quot;csocial_4 social_4&quot; style=&quot;margin: 0px;&quot;&gt;Business Bay, DUBAI&lt;/p&gt;~&lt;label class=&quot;csocial_5 social_5&quot; style=&quot;margin: 0px;&quot;&gt;Mob. +971 55855 4258&lt;/label&gt;~&lt;label class=&quot;csocial_6 social_6&quot; style=&quot;padding: 5px; margin: 0px;&quot;&gt;         +971 52365 3456 &lt;/label&gt;~&lt;address class=&quot;csocial_7 social_7&quot; style=&quot;margin: 0px;&quot;&gt;Email : bipin@arbpworldwide.com&lt;/address&gt;~~&lt;a href=&quot;www.arbpworldwide.com&quot; class=&quot;csocial_9 social_9&quot;&gt; Website &lt;/a&gt;~&lt;label class=&quot;csocial_10 social_10&quot; style=&quot;margin: 0px;&quot;&gt;www.arbpworldwide.com&lt;/label&gt;~', '&lt;img class=&quot;ccontact_1 contact_1&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/04d0e9974a33a3d60beeea4f3bcc8cc4.jpg&quot; height=&quot;90px&quot; width=&quot;95%&quot; style=&quot;width: 95%; height: 150px;&quot;&gt;~&lt;img class=&quot;ccontact_2 contact_2&quot; src=&quot;https://www.dreamchasers.com.ng/exclaimer/images/images (1).jpg&quot; height=&quot;90px&quot; width=&quot;90px&quot; style=&quot;width: 95%; height: 100px; display: block;&quot;&gt;~', '&lt;h1 class=&quot;clogo_1 logo_1&quot; style=&quot;font-size: 12px; color: rgb(42, 46, 178); font-family: cambria;&quot;&gt;This message contains confidential information and is intended only for the individual named. If you are not the named addressee you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately by e-mail if you have received this e-mail by mistake and delete this e-mail from your system. E-mail transmission cannot be guaranteed to be secure or error-free as information could be intercepted, corrupted, lost, destroyed, arrive late or incomplete, or contain viruses. The sender therefore does not accept liability for any errors or omissions in the contents of this message, which arise as a result of e-mail transmission. If verification is required please request a hard-copy version.&lt;/h1&gt;~', '', '', 'border-top:1px solid #f20707;border-bottom:1px solid #e10e0e;', '', 'Test - 2', '1x2', 'exclaimer', '2020-12-27 10:23:04.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signatures`
--
ALTER TABLE `signatures`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signatures`
--
ALTER TABLE `signatures`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
