-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 12 月 31 日 13:34
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db_cook`
--
CREATE DATABASE IF NOT EXISTS `db_cook` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_cook`;

-- --------------------------------------------------------

--
-- 表的结构 `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '当前发表用户id',
  `menu` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `difficulty_level` varchar(255) NOT NULL,
  `make_time` varchar(255) NOT NULL,
  `flavor` varchar(255) NOT NULL COMMENT '口味',
  `Reminder` varchar(255) NOT NULL,
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=257 ;

--
-- 转存表中的数据 `food`
--

INSERT INTO `food` (`id`, `uid`, `menu`, `title`, `content`, `filename`, `imgpath`, `difficulty_level`, `make_time`, `flavor`, `Reminder`, `addtime`) VALUES
(17, 1, 'firth', '花样吃水果', 'shuiguoshuiguo', 'ico-right.png', 'upload/2.jpg', '11', '1', '2', '1', '2017-09-20 21:08:06'),
(243, 1, '苹果', '凉拌醋苹果', '处理苹果醋的边角料', '', 'upload/20120425154903846996088.jpg', '0', '0', '0', '处理苹果醋的边角料——凉拌醋苹果', '2017-11-30 17:52:32'),
(244, 1, '苹果', '苹果淮山扇骨汤', '“此汤具有健脾养胃之功效”', '', 'upload/201102171455240.jpg', '1', '2', '1', '“此汤具有健脾养胃之功效”\r\n', '2017-11-30 18:01:37'),
(245, 1, '芒果', '芒果蜜汁排骨', '本款芒果蜜汁排骨，美容养胃，排骨带着淡淡的芒果清香，外酥里嫩，入口脱骨', '', 'upload/20170806150198438727613.jpg', '2', '2', '1', '芒果最后入锅，翻炒几下即可', '2017-11-30 18:07:30'),
(246, 1, '芒果', '香蕉果蔬卷', '香蕉果蔬卷', '', 'upload/201007091338229.jpg', '1', '1', '0', '所属分类： 儿童   老人   下午茶   素菜  ', '2017-11-30 18:15:20'),
(247, 1, '榴莲', '榴莲炖鸡', '滋补，温补', '', 'upload/20120713130123548733331.jpg', '2', '2', '1', '使用的厨具：瓦煲、炖盅、汤锅、煮锅、炒锅', '2017-11-30 18:44:03'),
(256, 2, '苹果', '苹果银耳羹', '苹果有“智慧果”、“记忆果”的美称。多吃有增进记忆、提高智能的效果。有丰富的糖、维生素', '', 'upload/201110111100196.jpg', '1', '1', '0', '1、苹果不宜与海鲜同食，易引起腹泻、恶心、呕吐等不良反应。\r\n\r\n2、苹果榨汁饮用，对高血压有辅助治疗作用。\r\n\r\n3、孕妇每天吃一个苹果，可以减轻孕期反应。\r\n', '2017-12-31 16:38:28');

-- --------------------------------------------------------

--
-- 表的结构 `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '发布用户的id',
  `title` varchar(255) NOT NULL,
  `num` varchar(100) NOT NULL COMMENT '赞',
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='food.html' AUTO_INCREMENT=94 ;

--
-- 转存表中的数据 `friend`
--

INSERT INTO `friend` (`id`, `uid`, `title`, `num`, `addtime`) VALUES
(86, 1, 'good', '17', '2017-09-25 18:19:58'),
(87, 1, 'beautiful', '25', '2017-09-25 18:27:17'),
(88, 2, 'very 美味', '124', '2017-09-26 11:57:04'),
(92, 4, '第一次做炸苹果', '13', '2017-11-30 16:37:30'),
(93, 4, '苹果银耳红枣汤，大赞', '36', '2017-12-31 16:33:41');

-- --------------------------------------------------------

--
-- 表的结构 `friendcomment`
--

CREATE TABLE IF NOT EXISTS `friendcomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `friendid` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `num` int(11) NOT NULL,
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- 转存表中的数据 `friendcomment`
--

INSERT INTO `friendcomment` (`id`, `uid`, `friendid`, `comment`, `num`, `addtime`) VALUES
(2, 1, 88, '哇哦·', 16, '2017-08-29 00:00:00'),
(3, 2, 88, '1233211234567', 20, '2017-08-29 00:00:00'),
(8, 1, 88, 'verygood', 12, '2017-08-30 16:13:31'),
(43, 1, 86, '111', 0, '2017-08-30 17:12:10'),
(44, 1, 86, '大的沙发', 2, '2017-08-30 17:17:03'),
(53, 4, 87, 'myboy', 0, '2017-11-30 00:00:00'),
(54, 4, 88, 'is me', 1, '2017-11-30 15:42:11'),
(55, 4, 92, '镇楼', 14, '2017-11-30 16:38:15'),
(56, 1, 92, '呜嗷', 5, '2017-12-10 15:46:06'),
(57, 1, 92, '', 1, '2017-12-10 15:47:02'),
(58, 2, 93, '做法麻烦么？', 3, '2017-12-31 16:35:03');

-- --------------------------------------------------------

--
-- 表的结构 `friendimg`
--

CREATE TABLE IF NOT EXISTS `friendimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `friendid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='圈子_发话题' AUTO_INCREMENT=74 ;

--
-- 转存表中的数据 `friendimg`
--

INSERT INTO `friendimg` (`id`, `friendid`, `uid`, `imgpath`) VALUES
(60, 86, 1, 'upload/2.jpg'),
(61, 86, 1, 'upload/2.jpg'),
(62, 86, 1, 'upload/2.jpg'),
(63, 87, 1, 'upload/3.jpg'),
(64, 87, 1, ''),
(65, 87, 1, ''),
(66, 88, 2, 'upload/201102181325182.jpg'),
(67, 88, 2, 'upload/201001291635212.jpg'),
(68, 88, 2, ''),
(71, 92, 4, 'upload/4197b517168402be94769e11f7830958_150x150.jpg'),
(72, 92, 4, 'upload/2226705e7e5c83a4c88f3616c9a603d0_150x150.jpg'),
(73, 93, 4, 'upload/b90e7bec54e736d126f0d65b92504fc2d4626985.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `fscdoing`
--

CREATE TABLE IF NOT EXISTS `fscdoing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_id` int(11) NOT NULL,
  `ingredientname` varchar(50) NOT NULL COMMENT '食材名称',
  `ingredientamount` varchar(50) NOT NULL COMMENT '食材用量',
  `practiceimg` varchar(255) NOT NULL COMMENT '做法图片',
  `practicemes` varchar(255) NOT NULL COMMENT '做法描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='做法表' AUTO_INCREMENT=113 ;

--
-- 转存表中的数据 `fscdoing`
--

INSERT INTO `fscdoing` (`id`, `f_id`, `ingredientname`, `ingredientamount`, `practiceimg`, `practicemes`) VALUES
(1, 1, '五花肉', '2斤', '', '洗净切薄片，姜末盐腌制半小时'),
(48, 242, '芒果', '2个', '', ''),
(49, 242, '沙拉', '1瓶', '', ''),
(50, 242, '番石榴', '1个', '', ''),
(51, 242, '西瓜', '1块', '', ''),
(52, 242, '', '', 'upload/5.jpg', '123'),
(53, 242, '', '', 'upload/4.jpg', '321'),
(58, 243, '醋泡苹果', '适量', '', ''),
(59, 243, '胡萝卜', '适量', '', ''),
(60, 243, '蒜', '适量', '', ''),
(61, 243, '鸡精', '适量', '', ''),
(62, 243, '盐', '适量', '', ''),
(63, 243, '', '', 'upload/201204251552551336199418.JPG', '将苹果和胡萝卜切片'),
(64, 243, '', '', 'upload/201204251553341335608022.JPG', '醋泡苹果用水过一下。'),
(65, 243, '', '', 'upload/201204251553551335509349.JPG', '加入切碎的蒜。'),
(66, 243, '', '', 'upload/201204251555101335763169.JPG', '加入辣椒油。'),
(67, 244, '苹果', '适量', '', ''),
(68, 244, '扇骨', '一斤', '', ''),
(69, 244, '鲜淮山', '半条', '', ''),
(70, 244, '蜜枣', '二枚', '', ''),
(71, 244, '', '', 'upload/201001181231419.JPG', '苹果去皮去核切块，淮山去皮切块。'),
(72, 244, '', '', 'upload/201001181234205.JPG', '扇骨洗净斩大块，煲前最好加姜片出一出水，去掉血水。'),
(73, 244, '', '', 'upload/201001181237389.JPG', '汤煲中注入适量清水，放入材料，先大火煮沸十至十五分钟左右，然后转中小火煲一小时，再转最小火煲半小时。'),
(74, 244, '', '', 'upload/201001181239065.JPG', '熄火加盐调味即可。'),
(75, 245, '排骨', '600克', '', ''),
(76, 245, '芒果', '1个', '', ''),
(77, 245, '食用油', '适量', '', ''),
(78, 245, '老抽', '适量', '', ''),
(79, 245, '料酒', '适量', '', ''),
(80, 245, '蜂蜜', '适量', '', ''),
(81, 245, '西红柿', '1个', '', ''),
(82, 245, '', '', 'upload/2017080615019771877248843388.jpg', '西红柿洗净、切块，芒果肉切小块，青椒切块，姜、葱、蒜切粒。'),
(83, 245, '', '', 'upload/2017080615019771915098843388.jpg', '排骨冷水下锅，煮去血水，捞出。'),
(84, 245, '', '', 'upload/2017080615019771953458843388.jpg', '放入蚝油、老抽、料酒腌制30分钟'),
(85, 245, '', '', 'upload/2017080615019772063818843388.jpg', '倒入热水，水量不要太多，没过排骨即可，盖上锅盖，大火烧开后，转小火慢炖'),
(86, 245, '', '', 'upload/2017080615019772141978843388.jpg', '放入西红柿稍翻炒，调入盐、鸡精、蜂蜜，翻炒匀'),
(87, 245, '', '', 'upload/2017080615019772271688843388.jpg', '装盘'),
(88, 246, '卷心菜', '一个', '', ''),
(89, 246, '香蕉', '3根', '', ''),
(90, 246, '土豆', '4个', '', ''),
(91, 246, '鸡蛋', '3个', '', ''),
(92, 246, '紫菜', '两张', '', ''),
(93, 246, '面包糠', '适量', '', ''),
(94, 246, '', '', 'upload/201007091340135.jpg', '材料:卷心菜一个（其实只用了几片叶子），香蕉三根，土豆四个，鸡蛋一个，紫菜两张，面包糠适量。'),
(95, 246, '', '', 'upload/201007091340254.jpg', '土豆去皮，放微波炉里叮成土豆泥，香蕉切条，鸡蛋搅成蛋液。卷心菜放开水中快速烫下，使其变软，土豆泥加少许椒盐。'),
(96, 246, '', '', 'upload/201007091340375.jpg', '烫好的卷心菜平铺，放上紫菜，然后抹上土豆泥，放上香蕉'),
(97, 246, '', '', 'upload/201007091340540.jpg', '把卷心菜两边翻进去，卷成卷。'),
(98, 246, '', '', 'upload/201007091342598.jpg', '把果蔬卷放蛋液滚一下，在沾满面包糠，放油里炸，时间不要长哦，里面都是熟的'),
(99, 246, '', '', 'upload/201007091344126.jpg', '香喷喷的的蔬果卷就做好了，再配上自己做的番茄酱就更棒了，我想孩子都会爱吃的，很有营养的，丰富的维生素在里面哦。'),
(100, 247, '土鸡', '1个', '', ''),
(101, 247, '榴莲', '1个', '', ''),
(102, 247, '姜', '若干', '', ''),
(103, 247, '', '', 'upload/201207131303101342369905.JPG', '榴莲剥好，盛盘'),
(104, 247, '', '', 'upload/201207131304061342250722.JPG', '入砂锅，放入姜片，在鸡的肚子里塞两块榴莲，其余的放在鸡的周围即可~注入刚煮开的开水刚好没过所有食材'),
(105, 247, '', '', 'upload/201207131305041342771029.JPG', '炖24小时后起锅，是不是很赞啊？鸡肉算不烂软，也木有丝毫榴莲味i，汤十分的清香，并且粘稠~'),
(106, 256, '苹果', '1个', '', ''),
(107, 256, '银耳', '适量', '', ''),
(108, 256, '枸杞', '适量', '', ''),
(109, 256, '冰糖', '适量', '', ''),
(110, 256, '', '', 'upload/201110102145548.jpg', '准备好苹果、银耳、枸杞子、冰糖'),
(111, 256, '', '', 'upload/201110102149032.jpg', '银耳倒入电饭煲，加入适量冷水；调至煮饭档，熬煮30分钟'),
(112, 256, '', '', 'upload/201110102150101.jpg', '切好的苹果倒入饭煲，继续熬煮10分钟，至苹果呈透明状即可盛入碗中，温热食用。');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `cont` varchar(100) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`n_id`, `title`, `cont`) VALUES
(1, '黑暗料理', '制作的富有“创意”的食物，出没在各大高校食堂。'),
(6, ' 网红橙子的打开方式', '你家的橙子只是切开直接吃么？快来看看网红橙子的打开方式吧～'),
(7, '植物果实', '含有丰富的营养，而且能够帮助消化');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `user_img`, `email`, `tel`, `datetime`) VALUES
(1, '周星驰', 'zxc', 'upload/599ff8757047a.jpg', 'zxc@163.com', '7895123', '2017-08-01 00:00:00'),
(2, '周润发', 'zrf', 'upload/599ff83402cf7.jpg', 'zrf@qq.com', '196196186', '2017-07-31 00:00:00'),
(4, '张学友', 'zxy', 'upload/u=4158526553,1954247253&fm=27&gp=0.jpg', '', '', '0000-00-00 00:00:00'),
(24, '周星星', 'zxx', '', '', '', '0000-00-00 00:00:00'),
(32, 'admin', 'admin', '', '', '', '2017-08-03 15:38:00'),
(53, 'abc', '111', '', '', '', '2017-11-25 11:36:09'),
(71, '周星驰1', '111', '', '', '', '2017-12-30 15:25:58');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
