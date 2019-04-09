-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2018 at 08:02 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `expert_printer`
--

-- --------------------------------------------------------

--
-- Table structure for table `knowledgebase`
--

CREATE TABLE IF NOT EXISTS `knowledgebase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `alternative` text NOT NULL,
  `yes` text NOT NULL,
  `no` text NOT NULL,
  `answer` text NOT NULL,
  `file` text NOT NULL,
  `nom` text NOT NULL,
  `dat` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `knowledgebase`
--

INSERT INTO `knowledgebase` (`id`, `question`, `alternative`, `yes`, `no`, `answer`, `file`, `nom`, `dat`) VALUES
(1, 'Printing is too slow', '', '', '', '', '', '1', '0000-00-00 00:00:00'),
(2, ' Ink and/or toner costs too much.', '', '', '', '', '', '2', '0000-00-00 00:00:00'),
(3, 'Windows is sending print jobs to the wrong printer.', '', '', '', '', '', '3', '0000-00-00 00:00:00'),
(4, 'My printer says my ink cartridge is empty. I think it''s lying.', '', '', '4', '', '', '4', '0000-00-00 00:00:00'),
(5, 'My wireless printer is too slow.', '', '', '', '', '', '5', '0000-00-00 00:00:00'),
(6, ' I don''t know how to fit more text on one page. How do I do it?', '', '', '', '', '', '6', '0000-00-00 00:00:00'),
(7, 'Grandma called and wants me to fix her "broken" printer. I''m no tech guru. What should I do?', '', '', '', '', '', '7', '0000-00-00 00:00:00'),
(8, 'My paper tray is flimsy', '', '', '', '', '', '8', '0000-00-00 00:00:00'),
(9, 'Why is the print quality poor?', '', '', '', '', '', '9', '0000-00-00 00:00:00'),
(10, 'My printer won’t print', '', '', '', '', '', '10', '0000-00-00 00:00:00'),
(11, 'Do I need to replace the cartridges?', '', '', '', '', '', '11', '0000-00-00 00:00:00'),
(12, 'Web pages, Excel documents and photos won’t print properly', '', '', '12', '', '', '12', '0000-00-00 00:00:00'),
(13, 'My prints are too light, too spotty, or have horizontal lines', '', '', '', '', '', '13', '0000-00-00 00:00:00'),
(14, 'How do I fix paper jams?', '', '', '', '', '', '14', '0000-00-00 00:00:00'),
(15, 'Why is the print quality poor?', '', '', '', '', '', '15', '0000-00-00 00:00:00'),
(17, 'Why is my printing taking so long?', '', '', '', '', '', '17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `yesno`
--

CREATE TABLE IF NOT EXISTS `yesno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` text NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `ans` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `yesno`
--

INSERT INTO `yesno` (`id`, `num`, `q1`, `q2`, `q3`, `q4`, `q5`, `ans`) VALUES
(1, '1', 'Have you checked the printer configuration?', 'Has it been long you serviced the printer?', 'Have you been connecting printer to wrong current?', 'Is the printer output clear enough?', 'Take it to an Engineer!', ' Rev up printer performance--and save ink in the process--by reducing print quality for everyday output. While printer settings vary by model, here''s how to switch to draft-printing mode in most Windows apps. Select Print and Properties, and then look for a setting that reduces print quality. With the HP Photosmart 8450, for instance, change the default print quality setting from Normal to Fast Draft (click screen-shot at right). Other speedup suggestions: Print pages from websites without graphics, and add RAM to your printer, if possible. Read "Speed Up Everything" for more tips'),
(2, '2', 'Have you checked the quality of using other affordable inks?', 'Is the configuration / Settings of the affordable toner easy enough?', 'Do you have access to the user manual?', 'Have you checked for related products?', 'Take it to an Engineer!', ' PC World has written a lot about the printing industry''s sneaky practices over the years. To wit: They snare you with dirt-cheap printers sold at or below cost, and then stick it to you later with ultra-pricey consumables.\r\nBased on our tests, we can''t recommend third party vendors'' remanufactured or refilled ink cartridges, which may not give you your money''s worth. One cost-saving solution is to buy higher-capacity cartridges. If you print a lot, try an ink cartridge with a 250-plus page yield, or a toner cartridge with a 2,000-plus page yield.'),
(3, '3', 'Was the printer connected to the windows earlier ? ', 'Have you checked the printer settings?', 'Did you reset the windows printing hardware?', 'have you been using same windows and printer for a while now?', 'Take it to an Engineer!', 'For some mysterious reason, Windows may select a new default printer--the one it automatically sends print jobs to. (This happened to me when I upgraded from Vista to Windows 7.) To fix this glitch in Windows 7, click Start (the Windows icon in the lower-left corner of the screen) and select Devices and Printers. Under Printers and Faxes, right-click the printer you want to make the default, and select Set as default printer.'),
(4, '4', 'Did you check the ink cartridge to confirm  ?', 'Where you having this problem earlier ?', 'Have you taken the printer to any repairer lately?', 'Do you usually have faint ink on paper when you print?', 'Take it to an Engineer!', 'You may be right. Printer out-of-ink messages are notoriously unreliable. The good news: You can try various hacks to get around those ink cartridge controls. We''re not suggesting that all, or even some, of these reader tips will work with your printer, but they''re worth a try. One tip reveals how to reset ink cartridges for various HP printers. And a video on this page shows how to revive an "out of ink" Epson cartridge. If you''re feeling adventurous, check them out.'),
(5, '5', 'Have you checked the wireless configuration of your printer?', 'Does your printer connect often to other wireless devices?', 'Did adjust the settings earlier?', 'Is your wireless printer''s server connects to supports the 802.11n spec?', 'Take it to an Engineer!', 'To get the best performance from a network printer, it''s hard to beat a wired, Ethernet-cable-to-router connection. Wireless printing may be more convenient in many homes and offices, but it has its limitations. Since Wi-Fi speeds slow down with distance, you''ll want to place your wireless printer as close as possible to the router. Also, make sure your Wi-Fi printer or any wireless print server it connects to supports the 802.11n spec, which can rival the performance of 100-mbps Ethernet.'),
(6, '6', 'Does your printer support the text shrinking function?', 'Have you checked if the text shrinking function is configured in your printer?', 'Did you sometime try to open or fix this your self?', 'Is the fonts of the texts okay?', 'Take it to an Engineer!', 'Shrinking text to fit two pages on one sheet saves money (you''ll buy less paper) and speeds up printing (fewer pages to print). This two-for-one approach is best for spreadsheets, receipts, and other documents that are still legible once shrunken.\r\n\r\nIn any Windows program, select Print and Properties, and then look for a printer setting that lets you increase the number of pages per sheet.'),
(7, '7', 'Do you have the technical capacity to open a printer?', 'Have you ever worked on an electrical appliance before?', 'Will you be okay if the printer goes faulty, further?', 'Do you have a reliable printer engineer around?', 'Take it to an Engineer!', 'You could always pretend you''re not home, but that might lead to bigger problems down the line. We recommend you help Grandma out, because printer problems encountered by the, um, technically challenged are often easy to fix.\r\n\r\nFirst, have her see if the printer is plugged into a wall outlet. (Don''t laugh. It''s fairly common.) Second, she should make sure there''s paper in the tray. And third, have her check the cable (probably USB or Ethernet) that connects the printer to the PC or router. This troubleshooting basics article has more advice.'),
(8, '8', 'Was the paper tray indicating any sign of damage?', 'Have you removed it carelessly before? ', 'Have you taken it to a repairer before?', 'Is the paper tray currently allowing you to print at least?', 'Take it to an Engineer!', '\r\nSo what can you do? Before buying a printer, examine the paper tray carefully. If it looks like it''ll break after the first sideswipe, it''s probably wise to get another model. If the tray is too small for your printing needs, see if there''s a higher-capacity option. Or you could try this guy''s approach to fixing a busted printer.'),
(9, '9', 'have you checked the ink ?', 'Have you verify if the papers are set properly?', 'Did you tamper the settings recently?', 'Was the printer acting slow?', 'Take it to an Engineer!', 'Check if the printer configuration is okay and also check the ink if there is enough ink... If it persists take it to a repairer!'),
(10, '10', 'Is the printer producing active light when put on?', 'Was the printer out clear enough before now?', 'Where you having power problems with your printer?', 'Have you checked if the printer is accepting other paper  than the one you have?', 'Take it to an Engineer!', 'Your printer needs maintenance: Simply engage the printer in a thorough maintenance by opening the cartridge, clean it. check the power cables and ensure it is fine then clean the parts. Also, refill the ink if it is getting less. '),
(11, '11', 'Is the cartridge older than 2 years? ', 'Is the fault serious?', 'Can it carry your workload if repaired?', 'Are you buoyant to replace it? ', 'You can also Adjust to it for  while until you have enough money to replace it', 'Replace the cartridge, It is advised to replace after a while or if it starts becoming very faulty. '),
(12, '12', 'Have you checked printer configuration?', 'Is the web page or Excel page set printable?', 'Have you checked the connection properly?', 'Did you adjust the paper', 'Take it to an Engineer!', 'Check the papers, the configuration and connection if they are okay. If they are try it again if it persists then take it to a engineer. '),
(13, '13', 'Is there enough ink in the cartridge ?', 'How about the papers, are they positioned properly ?', 'Did you check the printer configuration?', 'Did you check out for printer utility programs?', 'Take it to an Engineer!', 'You may have a clogged print head, a problem that can occur if you use an inkjet printer infrequently. Your printer''s utility program can clean out the dried ink, and print a test page for inspection. The step-by-step instructions on how to do this vary by printer. From the Windows 7 Start menu, click Devices and Printers or Control Panel, and look for your printer''s utility app. For additional details, read "Solve Inkjet Printer Problems." For more tips on unclogging ink nozzles, go here. (Again, these steps may vary slightly for Vista and XP users.)'),
(14, '14', 'Are you having so many papers in the printer?', 'Have you checked If the printer is printing simultaneously? ', 'Did you check the printer configuration?', 'Also, have you been checking the paper footers properly before inserting into the printer?', 'Take it to an Engineer!', 'While printer settings vary by model, here''s how to switch to draft-printing mode in most Windows apps. Select Print and Properties, and then look for a setting that reduces print quality. With the HP Photosmart 8450, for instance, change the default print quality setting from Normal to Fast Draft (click screen-shot at right). Other speedup suggestions: Print pages from websites without graphics, and add RAM to your printer, if possible. Read "Speed Up Everything" for more tips.'),
(15, '15', 'Is the papers well inserted into the printer?', 'Printers also varies base on their model. Do you have the technical capacity of using the printer, Did you use it base on step by step procedure ?', 'Also, did you check the ink, if there is enough ?', 'Is there adequate power supply for the printer?', 'Take it to an Engineer!', 'Check printer Model, then align it to printer settings and configurations afterwards, Check out for the papers, ink and if the configuration is okay!'),
(17, '17', 'Is printer having low power supply?', 'Does this issue come up often?', 'Have you checked if the printer settings is resulting the delay?', 'Most times, when printer becomes very dirty inside this issue comes up, have you checked inside to confirm if dirt is causing it?', 'Take it to an Engineer!', 'Clean printer, check the printer configuration and also ensure the printer power is sufficient!'),
(18, '12345678', 'Is it powering?', 'How fast is working ?', 'Do you have a cleaner on?', 'Checked the power?', 'Is the printer light bright?', 'wefwf'),
(19, '292462964294', 'Is it powering?', 'How fast is working ?', 'Do you have a cleaner on?', 'Checked the power?', 'Is the printer light bright?', 'breofborehfore');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
