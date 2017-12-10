-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2017 at 11:22 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stock_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `Admin_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Admin_Name` varchar(500) NOT NULL,
  `Admin_Email` varchar(500) NOT NULL,
  `Admin_CreatedOn` datetime NOT NULL,
  `Admin_CreatedBy` int(12) NOT NULL,
  `Admin_Status` int(1) NOT NULL DEFAULT '1',
  `Admin_Uname` varchar(500) NOT NULL,
  `Admin_Pass` varchar(500) NOT NULL,
  `Admin_Role` int(1) NOT NULL DEFAULT '0',
  `Admin_ViewOnly` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Admin_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`Admin_Id`, `Admin_Name`, `Admin_Email`, `Admin_CreatedOn`, `Admin_CreatedBy`, `Admin_Status`, `Admin_Uname`, `Admin_Pass`, `Admin_Role`, `Admin_ViewOnly`) VALUES
(1, 'Anurag Singh', 'info@creativewebie.org', '2016-09-04 12:40:24', 1, 1, 'anurag', 'anurag', 1, 0),
(3, 'KDMT Admin', 'shampashte@gmail.com', '2017-11-12 10:38:16', 1, 1, 'kdmtadmin', 'kdmt@2017', 1, 0),
(4, 'KDMT User', 'shampashte@gmail.com', '2017-11-12 10:39:27', 1, 1, 'kdmtuser', 'kdmt@2017', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bus_list`
--

CREATE TABLE IF NOT EXISTS `bus_list` (
  `bus_number` varchar(200) NOT NULL,
  UNIQUE KEY `bus_number` (`bus_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_list`
--

INSERT INTO `bus_list` (`bus_number`) VALUES
('MH05R-0438'),
('MH05R-0440'),
('MH05R-0442'),
('MH05R-0443'),
('MH05R-0445'),
('MH05R-0447'),
('MH05R-0449'),
('MH05R-0451'),
('MH05R-0452'),
('MH05R-0453'),
('MH05R-0454'),
('MH05R-0455'),
('MH05R-0458'),
('MH05R-0460'),
('MH05R-0461'),
('MH05R-0462'),
('MH05R-0463'),
('MH05R-0464'),
('MH05R-0465'),
('MH05R-0466'),
('MH05R-0467'),
('MH05R-0469'),
('MH05R-0470'),
('MH05R-0471'),
('MH05R-0472'),
('MH05R-0473'),
('MH05R-0474'),
('MH05R-0475'),
('MH05R-0476'),
('MH05R-0478'),
('MH05R-1034'),
('MH05R-1035'),
('MH05R-1036'),
('MH05R-1037'),
('MH05R-1038'),
('MH05R-1039'),
('MH05R-1040'),
('MH05R-1041'),
('MH05R-1042'),
('MH05R-1043'),
('MH05R-1059'),
('MH05R-1060'),
('MH05R-1061'),
('MH05R-1062'),
('MH05R-1063'),
('MH05R-1064'),
('MH05R-1065'),
('MH05R-1066'),
('MH05R-1067'),
('MH05R-1068'),
('MH05R-1069'),
('MH05R-1070'),
('MH05R-1071'),
('MH05R-1072'),
('MH05R-1073'),
('MH05R-1074'),
('MH05R-1075'),
('MH05R-1076'),
('MH05R-1077'),
('MH05R-1078'),
('MH05R-1079'),
('MH05R-1080'),
('MH05R-1081'),
('MH05R-1082'),
('MH05R-1083'),
('MH05R-1084'),
('MH05R-1085'),
('MH05R-1086'),
('MH05R-1087'),
('MH05R-1088'),
('MH05R-1089'),
('MH05R-1090'),
('MH05R-1091'),
('MH05R-1092'),
('MH05R-1093'),
('MH05R-1094'),
('MH05R-1095'),
('MH05R-1096'),
('MH05R-1097'),
('MH05R-1098'),
('MH05R-1099'),
('MH05R-1101'),
('MH05R-1102'),
('MH05R-1103'),
('MH05R-1104'),
('MH05R-1105'),
('MH05R-1106'),
('MH05R-1107'),
('MH05R-1108'),
('MH05R-1109'),
('MH05R-1110'),
('MH05R-1113'),
('MH05R-1114'),
('MH05R-1115'),
('MH05R-1116'),
('MH05R-1117'),
('MH05R-1118'),
('MH05R-1119'),
('MH05R-1120'),
('MH05R-1121'),
('MH05R-1122'),
('MH05R-1123'),
('MH05R-1124'),
('MH05R-1125'),
('MH05R-1126'),
('MH05R-1127'),
('MH05R-1128'),
('MH05R-1129'),
('MH05R-1130'),
('MH05R-1131'),
('MH05R-1132'),
('MH05R-1133'),
('MH05R-1134'),
('MH05R-1135'),
('MH05R-1136'),
('MH05R-1137'),
('MH05R-1138'),
('MH05R-1139'),
('MH05R-1140'),
('MH05R-1141'),
('MH05R-1142'),
('MH05R-1143'),
('MH05R-1144'),
('MH05R-1145'),
('MH05R-1146'),
('MH05R-1147'),
('MH05R-1148'),
('MH05R-1149'),
('MH05R-1150'),
('MH05R-1151'),
('MH05R-1152'),
('MH05R-1153'),
('MH05R-1154'),
('MH05R-1155'),
('MH05R-1156'),
('MH05R-1157'),
('MH05R-1158'),
('MH05R-1159'),
('MH05R-1160'),
('MH05R-1161'),
('MH05R-1162'),
('MH05R-1163'),
('MH05R-1164'),
('MH05R-1165'),
('MH05R-1166'),
('MH05R-1167'),
('MH05R-1168'),
('MH05R-1169'),
('MH05R-1170'),
('MH05R-1171'),
('MH05R-1172'),
('MH05R-1173'),
('MH05R-1174'),
('MH05R-1175'),
('MH05R-1176'),
('MH05R-1177'),
('MH05R-1178'),
('MH05R-1179'),
('MH05R-1180'),
('MH05R-1181'),
('MH05R-1182'),
('MH05R-1183'),
('MH05R-1184'),
('MH05R-1185'),
('MH05R-1186'),
('MH05R-1187'),
('MH05R-1188'),
('MH05R-1189'),
('MH05R-1190'),
('MH05R-1191'),
('MH05R-1192'),
('MH05R-1193'),
('MH05R-1194'),
('MH05R-1195'),
('MH05R-1196'),
('MH05R-1197'),
('MH05R-1198'),
('MH05R-1199'),
('MH05R-1201'),
('MH05R-1202'),
('MH05R-1203'),
('MH05R-1204'),
('MH05R-1205'),
('MH05R-1206'),
('MH05R-1207'),
('MH05R-1208'),
('MH05R-1209'),
('MH05R-1210'),
('MH05R-1211'),
('MH05R-1214'),
('MH05R-1215'),
('MH05R-1216'),
('MH05R-1217'),
('MH05R-1218'),
('MH05R-1219'),
('MH05R-1220'),
('MH05R-1222'),
('MH05R-1223'),
('MH05R-1224'),
('MH05R-1225'),
('MH05R-1226'),
('MH05R-1227'),
('MH05R-1228'),
('MH05R-1229'),
('MH05R-1230'),
('MH05R-1231'),
('MH05R-1232'),
('MH05R-1233'),
('MH05R-1235'),
('MH05R-1236'),
('MH05R-1237'),
('MH05R-1238'),
('MH05R-1239'),
('MH05R-1240'),
('MH05R-1241'),
('MH05R-1242'),
('MH05R-1243'),
('MH05R-1244');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `Items_Id` int(12) NOT NULL AUTO_INCREMENT,
  `Items_Name` varchar(250) NOT NULL,
  `Items_Type` int(12) NOT NULL,
  `Items_Description` varchar(250) NOT NULL,
  `Items_Brand` varchar(250) DEFAULT NULL,
  `Items_Qty` int(12) NOT NULL DEFAULT '0',
  `Items_Active` tinyint(1) NOT NULL DEFAULT '1',
  `Items_AddedBy` int(12) NOT NULL DEFAULT '1',
  `Items_CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Items_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `items_transaction`
--

CREATE TABLE IF NOT EXISTS `items_transaction` (
  `transaction_Id` int(12) NOT NULL AUTO_INCREMENT,
  `transaction_Item` int(12) NOT NULL,
  `transaction_Type` tinyint(1) NOT NULL DEFAULT '0',
  `transaction_Qty` int(12) NOT NULL DEFAULT '0',
  `transaction_To` varchar(250) NOT NULL,
  `transaction_CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `transaction_AddedBy` int(12) NOT NULL DEFAULT '1',
  PRIMARY KEY (`transaction_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
