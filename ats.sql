-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: Sep 10, 2011, 12:33 AM
-- 伺服器版本: 5.1.54
-- PHP 版本: 5.3.5-1ubuntu7.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `ats`
--
CREATE DATABASE `ats` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ats`;

-- --------------------------------------------------------

--
-- 資料表格式： `announce`
--

CREATE TABLE IF NOT EXISTS `announce` (
  `ID` int(11) NOT NULL,
  `contents` text NOT NULL,
  `time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `announce`
--

INSERT INTO `announce` (`ID`, `contents`, `time`) VALUES
(1, 'system is work', '2011-08-04'),
(2, 'teacher1 give a new homework', '2011-08-04'),
(3, 'The homework will be end', '2011-08-06');

-- --------------------------------------------------------

--
-- 資料表格式： `artical`
--

CREATE TABLE IF NOT EXISTS `artical` (
  `artical_id` int(11) NOT NULL AUTO_INCREMENT,
  `editor` int(11) NOT NULL,
  `title` text,
  `contents` text NOT NULL,
  `cover_letter` text NOT NULL,
  `time` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `father_artical` smallint(6) NOT NULL,
  PRIMARY KEY (`artical_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 列出以下資料庫的數據： `artical`
--

INSERT INTO `artical` (`artical_id`, `editor`, `title`, `contents`, `cover_letter`, `time`, `class`, `father_artical`) VALUES
(1, 1, 'first artical', '(CNN) -- Usain Bolt put his 100m nightmare behind him to claim gold in the 200m final at the world championships in Daegu Saturday.\r\nBolt, disqualified for a false start in the final of the shorter sprint, made no mistake this time as he powered to victory in 19.40 seconds, the fourth fastest of all time.\r\n&quot;I feel great. I''m still the best. After the false start on Sunday, I was extremely disappointed not to have given myself the chance to defend my 100m title,&quot; Bolt said, AFP reported.\r\n&quot;The 200m represented a great opportunity for me to put it behind me and move on, and I''ve been determined to do so all week,&quot; he added, AFP reported.', '', 1315134842, 1, 1),
(2, 1, '[phpmyadmin]', 'Meanwhile, South African Oscar Pistorius received his silver medal in a ceremony for the men''s 4 x 400m relay, won Friday by the United States.\r\nPistorius is the first non-able bodied athlete to win a medal in the world championships, but controversially was left of the the South African team for the final, having run the first leg in the qualifier.\r\nSouth African officials claimed he was omitted on merit, but the double amputee clearly remained unhappy with the decision despite the team''s success.\r\n&quot;Well done to the SA 4x400 relay team, they got a silver. Was really hard watching knowing I deserved to be part of it. Off to my bed, nyt all,&quot; he wrote on this Twitter blog after the race.\r\n&quot;Re all the messages, receiving a lot of questions I dont know the answers to. Have the 2nd fastest time in SA and ran a 45.3 this wk,&quot; he added.\r\nIn other final action Saturday in South Korea, the United States extended their dominance in the women''s 4 x 400 meter relay, claiming a fourth straight world championship gold ahead of Jamaica and Russia.', '', 1315134974, 1, 1),
(3, 1, '&lt;h1&gt;hey2&lt;/h1&gt;', 'Altova StyleVision - XSLT Stylesheet Design Tool\r\n\r\nGenerate advanced XSLT stylesheets, Web pages, and reports using intuitive drag-and-drop functionality, intelligent entry-helpers, and more. See how easy it is to work with XSLT in this tool from the makers of XMLSpy.\r\n\r\nDownload a free, 30-day trial!\r\n\r\nBuild a Customized Facebook Page, Free!\r\n\r\nWix.com offers you a simple, powerful, drag &amp; drop editing platform to create stunning Flash Facebook pages. No coding. No downloading. Totally free.\r\n\r\nSimply choose one of our templates or start from scratch. Upload your own content and use from our huge library. Click publish when you''re ready to see your design live on your Facebook page.\r\n\r\neStores let visitors shop from your page\r\nStunning graphics enhance your brand\r\nImage galleries promote your products\r\nContact forms &amp; maps make connecting easy\r\nCreate Your Free Custom Branded FB Page\r\n\r\n \r\n 	 \r\n\r\n \r\nWEB HOSTING\r\nBest Web Hosting\r\nPHP MySQL Hosting\r\nTop 10 Web Hosting\r\nUK Reseller Hosting\r\nCloud Hosting\r\nTop Web Hosting\r\n$7.95/mo SEO Hosting\r\nWEB BUILDING\r\nXML Editor - Free Trial!\r\nFREE Website BUILDER\r\nFree Website Templates Free WordPress Themes\r\nW3SCHOOLS EXAMS\r\nGet Certified in:\r\nHTML, CSS, JavaScript, XML, PHP, and ASP\r\nW3SCHOOLS BOOKS\r\nNew Books:\r\nHTML, CSS\r\nJavaScript, and Ajax\r\nSTATISTICS\r\nBrowser Statistics\r\nBrowser OS\r\nBrowser Display\r\nSHARE THIS PAGE\r\nShare with »\r\n\r\n REPORT ERROR | HOME | TOP | PRINT | FORUM | ABOUT\r\n', '', 1315193872, 2, 3),
(4, 101, '&amp;#26368;&amp;#36817;&amp;#29983;&amp;#27963;&amp;#20841;&amp;#19977;&amp;#20107;', 'Border Color\r\n\r\nThe border-color property is used to set the color of the border. The color can be set by:\r\n\r\nname - specify a color name, like &quot;red&quot;\r\nRGB - specify a RGB value, like &quot;rgb(255,0,0)&quot;\r\nHex - specify a hex value, like &quot;#ff0000&quot;\r\nYou can also set the border color to &quot;transparent&quot;.\r\n\r\nNote: The &quot;border-color&quot; property does not work if it is used alone. Use the &quot;border-style&quot; property to set the borders first.', '', 1315201788, 1, 4),
(5, 101, 'qawqweqweqweqwe', 'Stylus Studio® 2011 XML Enterprise Suite raises the bar for productivity in XML development tools. Millions of XML developers and data integration specialists turn to Stylus Studio''s comprehensive and intuitive XML toolset to tackle today''s advanced XML data transformation and aggregation challenges.\r\n\r\n 	\r\nXML Pipeline Editor, Debugger and Code Generator\r\nDataDirect XML Converters\r\nXQuery Mapper, Editor, Debugger, and Profiler\r\nXSLT Mapper, Editor, Debugger, Designer, and Profiler\r\nJava and C# for .Net Code Generation\r\nXML Schema Designer With Documentation Generator\r\nXML Editor With Full XPath Integration\r\n\r\nDownload a free trial now', '', 1315202599, 1, 5),
(6, 101, '', 'Test', '', 1315212482, 1, 6),
(7, 101, 'Test', 'test again', '', 1315212540, 1, 7);

-- --------------------------------------------------------

--
-- 資料表格式： `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `ID` int(11) NOT NULL,
  `begin` int(11) NOT NULL,
  `deadline` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `poster` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `class`
--

INSERT INTO `class` (`ID`, `begin`, `deadline`, `name`, `description`, `poster`) VALUES
(1, 1000000000, 2000000000, 'English writing', '', 3),
(2, 1000000001, 2000000002, 'grammer', '', 4),
(3, 2011, 2011, 'conversation', '', 3),
(4, 2011, 2011, 'English hearing', '', 4);

-- --------------------------------------------------------

--
-- 資料表格式： `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comments_id` int(11) NOT NULL AUTO_INCREMENT,
  `editor` int(9) NOT NULL,
  `time` int(11) NOT NULL,
  `stars` smallint(6) NOT NULL,
  `father_artical` int(11) NOT NULL,
  `quote` text NOT NULL,
  `global` text NOT NULL,
  `local` text NOT NULL,
  `summary` text NOT NULL,
  PRIMARY KEY (`comments_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 列出以下資料庫的數據： `comments`
--

INSERT INTO `comments` (`comments_id`, `editor`, `time`, `stars`, `father_artical`, `quote`, `global`, `local`, `summary`) VALUES
(1, 1, 1315134894, 0, 1, '\r\n		(CNN) -- Usa<span class="global">in Bolt put his 100m nightmare behind him to claim gold in the 200m final at the world championships in Daegu Saturday.\r\nBolt, disqualified <span class="local">for a fals<sup>[1]</sup></span>e star<sup>[1]</sup></span>t in the final of the shorter sprint, made no mistake this time as he powered to victory in 19.40 seco<span class="global">nds, the fourth fastest of all time.\r\n"I feel great. I''m still the best. After the false start on Sunday, I was extremely disappointed not to have given myself the chance to defend my 100m title," Bolt said, AFP reported.\r\n"The 200m represented a great opportunity f<sup>[2]</sup></span>or <span class="local">me to <sup>[2]</sup></span>put i<span class="local">t behind<sup>[3]</sup></span> me and move on, and I''ve been determined to do so all week," he added, AFP reported.		', '123/456/', '123/33333/3333/', 'Olympic champion Bolt was defending the title he won in Berlin in 2009 and the outcome never looked in doubt once he had come safely out of his blocks and quickly made up ground on Walter Dix of the United States on his outside.'),
(2, 1, 1315134935, 0, 1, '\r\n		(CNN) -- <span class="global">Usain Bolt put his 100m nightmare behind him to claim gold in the 200m final at the world championships i<sup>[1]</sup></span>n Daegu Saturday.<span class="global">\r\nBolt, disqualified for a false start in the final of the shorter sprint, made no mistake this time as he powered to victory in 19.40<sup>[2]</sup></span> seconds,<span class="global"> the fourth fastest of all time.\r\n"I feel great. I''m still the best. After the false start on Sunday, I was extremely disappointed not t<sup>[3]</sup></span>o have<span class="local"> given myself the chance to defend my 100m title," Bolt said, AFP reported.\r\n"The 200m represented a great opportunity for me <sup>[1]</sup></span>to put it be<span class="local">hind me and move on, and I''v<sup>[2]</sup></span>e been determined to do so all week," he added, AFP reported.		', '1/2/3/', '4/5/', 'Dix took silver in 19.70 seconds with France''s Christophe Lemaitre in bronze as he broke the 20 seconds barrier for the first time.'),
(3, 1, 1315193539, 0, 2, '\r\n			Mean<span class="global">while, South African Oscar Pistorius received his silver medal in a ceremony for the men''s 4 x 400m relay, won Friday by the U<sup>[1]</sup></span>nited St<span class="global">ates.\r\nPistorius is the first non-able bodied athlete to win a medal in the world championships, but controversially <sup>[2]</sup></span>was left of the the South African team for the final, having run the first leg in the qualifier.\r\nSouth African officials claimed he was omitted on merit, but the double amputee cl<span class="global">early remained unhappy with the decision despite the team''s success.\r\n"Well done to the SA 4x400 relay team, th<sup>[3]</sup></span>ey got a silver. Was really hard watching knowing I deserved to be part of it. Off to my bed, nyt all," he wrote on <span class="local">this Twitter blog after the race.\r\n"Re all the messages, receiving a lot of questions I dont know the answers to. Hav<sup>[1]</sup></span>e the 2nd <span class="local">fastest<sup>[2]</sup></span> time in SA and ran a 45.3 this wk," he added.\r\nIn other final action Saturday in South Korea, the United States extended their dominance in the women''s 4 x 400 meter relay, claiming a fourth straight world championship gold ahead of Jamaica and Russia.			', '11/111/111/', '2/2/', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq'),
(4, 1, 1315212378, 0, 1, '\r\n			(CNN) -- <span class="global">Usain Bolt put his 100m <span class="local">nightmare<sup>[1]</sup></span> behind him to claim gold in the 200m final at the world championships in Daegu Saturday.\r\nBolt, disqualified for a false start in the final of the shorter sprint, made no mistake this time as he powered to victory in 19.4<sup>[1]</sup></span>0 <span class="local">second<sup>[2]</sup></span>s, the fourth fastest of all time.\r\n"I feel great. I''m still the best. <span class="global">After the false start on Sunday, I was extremely disappointed not to have given myself the chance to defend my 100m title,"<sup>[2]</sup></span> Bolt said, <span class="global">AFP reported.\r\n"The 200m represented a great opportunity for me to put it behind me and move on, and I''ve been determined to do so all week," he added, AFP reported.<sup>[3]</sup></span>			', '1/123/234/', 'qwe/asd/', 'qweqwe'),
(5, 1, 1315212789, 0, 7, '\r\n			<span class="global">test <span class="local">again<sup>[1]</sup></span><sup>[1]</sup></span>			', 'No paragraphs./', 'no punctuation/', ''),
(6, 101, 1315380536, 0, 7, '\r\n			te<span class="global">st aga<sup>[1]</sup></span>in			', '1/', '', '12'),
(7, 101, 1315382729, 0, 5, '\r\n			Stylus Studi<span class="global">o® 2011 XML Enterp<sup>[1]</sup></span>rise Suite raises the bar for productivity in XML development tools. Millions of XML developers and data integration specialists turn to Stylus Studio''s comprehensive and intuitive XML toolset to tackle today''s advanced XML data transformation and aggregation challenges.\r\n\r\n 	\r\nXML Pipeline Editor, Debugger and Code Gen<span class="local">erator\r\nDat<sup>[1]</sup></span>aDirect XML Converters\r\nXQuery Mapper, Editor, Debugger, and Profiler\r\nXSLT Mapper, Editor, Debugger, Designer, and Profiler\r\nJava and C# for .Net Code Generation\r\nXML Schema Designer With Documentation Generator\r\nXML Editor With Full XPath Integration\r\n\r\nDownload a free trial now			', '12/', '222/', '121212'),
(8, 101, 1315382997, 0, 5, '\r\n			Stylus Studio® 2011 XML Enterprise Suite raises the bar for productivity in XML development tools. Millions of XML developers an<span class="global">d data integration specialists turn to Stylus Studio''s comprehensive and intuitive XML toolset to tackle today''s advanced XML data transformation and aggregation challenges.\r\n\r\n 	\r\nXML Pipeline Editor, Debugger and Code Generator\r\nDataDirect XML Convert<sup>[1]</sup></span>ers\r\nXQuery Mapper, Editor, Debugger, and Profiler\r\nXSLT Mapper, Editor, Debug<span class="local">ger, Designer, and Profiler\r\nJava and C# for .Net Code Generation\r\nXML Schema Designer With D<sup>[1]</sup></span>ocumentation Generator\r\nXML Editor With Full XPath Integration\r\n\r\nDownload a free trial now			', '1/', '2/', '2'),
(9, 101, 1315383016, 0, 2, '\r\n			Meanwhile, South African Oscar Pistorius received his silver medal in a ceremony for the men''s 4 x 400m relay, won Friday by the United States.\r\nPistorius is the first non-able bodied athlete to win a medal in the world championships, but controversially was left of the the South African team for the final, having run the first leg in the qualifier.\r\nSouth African officials claimed he was omitted on merit, but the double amputee clearly remained unhappy with the decision d<span class="global">espite the team''s success.\r\n"Well done to the SA 4x400 relay team, they got a silver. Was really hard watching knowing I deserve<sup>[1]</sup></span>d to be part of it. Off to my bed, nyt all," he wrote on this Twitter blog after the race.\r\n"Re all the messages, receiving a lot of questions I dont know the answers to. Have the 2nd fastest time in SA an<span class="local">d ran a 45.3 this wk," he added.\r\nIn other final action Saturday in South Korea, the United States extended their domina<sup>[1]</sup></span>nce in the women''s 4 x 400 meter relay, claiming a fourth straight world championship gold ahead of Jamaica and Russia.			', '1/', '2/', '1212'),
(10, 101, 1315383536, 0, 2, '\r\n			Meanwhile, South African Oscar Pistorius received his silver medal in a ceremony for the men''s 4 x 400m relay, won Friday by the United States.\r\nPistorius is the first non-able bodied athlete to win a medal in the world championships, but controversially was left of the the South African team for the final, having run the first leg in the qualifier.\r\nSouth African officials claimed he was omitted on merit, but the double amputee clearly remained unhappy with the decision despite the team''s success.\r\n"Well done to the SA 4x400 relay team, they got a silver. <span class="global">Was really hard watching<sup>[1]</sup></span> know<span class="local">ing I <sup>[1]</sup></span>deserved to be part of it. Off to my bed, nyt all," he wrote on this Twitter blog after the race.\r\n"Re all the messages, receiving a lot of questions I dont know the answers to. Have the 2nd fastest time in SA and ran a 45.3 this wk," he added.\r\nIn other final action Saturday in South Korea, the United States extended their dominance in the women''s 4 x 400 meter relay, claiming a fourth straight world championship gold ahead of Jamaica and Russia.			', '1/', '2/', '12121');

-- --------------------------------------------------------

--
-- 資料表格式： `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `ID` int(11) NOT NULL,
  `teacher` char(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `course`
--

INSERT INTO `course` (`ID`, `teacher`, `name`) VALUES
(1, 'teacher1', 'English writing'),
(2, 'teacher2', 'English  hearing'),
(3, 'teacher1', 'conversation '),
(4, 'teacher2', 'grammer');

-- --------------------------------------------------------

--
-- 資料表格式： `discuss`
--

CREATE TABLE IF NOT EXISTS `discuss` (
  `discuss_id` int(11) NOT NULL AUTO_INCREMENT,
  `editor` int(9) NOT NULL,
  `time` int(11) NOT NULL,
  `contents` text NOT NULL,
  `father_comments` int(11) NOT NULL,
  PRIMARY KEY (`discuss_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 列出以下資料庫的數據： `discuss`
--

INSERT INTO `discuss` (`discuss_id`, `editor`, `time`, `contents`, `father_comments`) VALUES
(1, 0, 2011, 'i think you say right', 1),
(2, 0, 2011, 'i don''t think you are good', 2),
(3, 0, 2011, 'maybe you need to think youself', 2),
(4, 0, 2011, 'eveything is so strange', 3),
(5, 0, 2011, 'me,too', 3),
(6, 0, 2011, 'do youself', 3),
(7, 0, 2011, 'XD', 6),
(8, 0, 2011, 'XD', 6);

-- --------------------------------------------------------

--
-- 資料表格式： `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `ID` int(11) NOT NULL,
  `number` smallint(6) NOT NULL,
  `name` char(5) NOT NULL,
  `decription` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `level`
--

INSERT INTO `level` (`ID`, `number`, `name`, `decription`) VALUES
(1, 1, 'admin', ''),
(2, 2, 'teach', ''),
(3, 3, 'stude', '');

-- --------------------------------------------------------

--
-- 資料表格式： `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL,
  `account` char(9) NOT NULL,
  `password` char(8) NOT NULL,
  `level` int(11) NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `user`
--

INSERT INTO `user` (`ID`, `account`, `password`, `level`, `course`) VALUES
(1, 'admin1', '1234', 1, 0),
(2, 'admin2', '1234', 1, 0),
(3, 'teacher1', '1234', 2, 0),
(4, 'teacher2', '1234', 2, 0),
(101, 'F74970000', '1234', 3, 1),
(102, 'F74970001', '1234', 3, 1),
(103, 'F74970002', '1234', 3, 2),
(104, 'F74970003', '1234', 3, 2),
(105, 'F74970004', '1234', 3, 3),
(106, 'F74970005', '1234', 3, 3);
