/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50534
Source Host           : localhost:3306
Source Database       : cbb

Target Server Type    : MYSQL
Target Server Version : 50534
File Encoding         : 65001

Date: 2014-01-16 17:21:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cbb_admin_log
-- ----------------------------
DROP TABLE IF EXISTS `cbb_admin_log`;
CREATE TABLE `cbb_admin_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `groupid` smallint(6) NOT NULL COMMENT '用户组',
  `ip` varchar(20) NOT NULL COMMENT '登陆IP',
  `time` int(11) NOT NULL COMMENT '登陆时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COMMENT='后台登陆日志';

-- ----------------------------
-- Records of cbb_admin_log
-- ----------------------------
INSERT INTO `cbb_admin_log` VALUES ('1', '1', 'admin', '1', '127.0.0.1', '1388552870');
INSERT INTO `cbb_admin_log` VALUES ('2', '1', 'admin', '1', '127.0.0.1', '1388553206');
INSERT INTO `cbb_admin_log` VALUES ('3', '1', 'admin', '1', '127.0.0.1', '1388609351');
INSERT INTO `cbb_admin_log` VALUES ('4', '1', 'admin', '1', '127.0.0.1', '1388715036');
INSERT INTO `cbb_admin_log` VALUES ('5', '1', 'admin', '1', '127.0.0.1', '1388721917');
INSERT INTO `cbb_admin_log` VALUES ('6', '1', 'admin', '1', '127.0.0.1', '1388721935');
INSERT INTO `cbb_admin_log` VALUES ('7', '1', 'admin', '1', '127.0.0.1', '1388721968');
INSERT INTO `cbb_admin_log` VALUES ('8', '1', 'admin', '1', '127.0.0.1', '1388722014');
INSERT INTO `cbb_admin_log` VALUES ('9', '1', 'admin', '1', '127.0.0.1', '1388806420');
INSERT INTO `cbb_admin_log` VALUES ('10', '1', 'admin', '1', '127.0.0.1', '1388806467');
INSERT INTO `cbb_admin_log` VALUES ('11', '2', 'tiandi', '10', '127.0.0.1', '1388806578');
INSERT INTO `cbb_admin_log` VALUES ('12', '2', 'tiandi', '10', '127.0.0.1', '1388806726');
INSERT INTO `cbb_admin_log` VALUES ('13', '2', 'tiandi', '10', '127.0.0.1', '1388806807');
INSERT INTO `cbb_admin_log` VALUES ('14', '2', 'tiandi', '10', '127.0.0.1', '1388807131');
INSERT INTO `cbb_admin_log` VALUES ('15', '2', 'tiandi', '10', '127.0.0.1', '1388807162');
INSERT INTO `cbb_admin_log` VALUES ('16', '1', 'admin', '1', '127.0.0.1', '1388807173');
INSERT INTO `cbb_admin_log` VALUES ('17', '1', 'admin', '1', '127.0.0.1', '1388807227');
INSERT INTO `cbb_admin_log` VALUES ('18', '1', 'admin', '1', '127.0.0.1', '1388807260');
INSERT INTO `cbb_admin_log` VALUES ('19', '2', 'tiandi', '10', '127.0.0.1', '1388807793');
INSERT INTO `cbb_admin_log` VALUES ('20', '2', 'tiandi', '1', '127.0.0.1', '1388808388');
INSERT INTO `cbb_admin_log` VALUES ('21', '2', 'tiandi', '2', '127.0.0.1', '1388808512');
INSERT INTO `cbb_admin_log` VALUES ('22', '1', 'admin', '1', '127.0.0.1', '1388808535');
INSERT INTO `cbb_admin_log` VALUES ('23', '2', 'tiandi0228', '2', '127.0.0.1', '1388809199');
INSERT INTO `cbb_admin_log` VALUES ('24', '1', 'admin', '1', '127.0.0.1', '1388809446');
INSERT INTO `cbb_admin_log` VALUES ('25', '2', 'tiandi0228', '2', '127.0.0.1', '1388809478');
INSERT INTO `cbb_admin_log` VALUES ('26', '2', 'tiandi0228', '2', '127.0.0.1', '1388809717');
INSERT INTO `cbb_admin_log` VALUES ('27', '1', 'admin', '1', '127.0.0.1', '1388809949');
INSERT INTO `cbb_admin_log` VALUES ('28', '1', 'admin', '1', '127.0.0.1', '1388809969');
INSERT INTO `cbb_admin_log` VALUES ('29', '2', 'tiandi0228', '2', '127.0.0.1', '1388810010');
INSERT INTO `cbb_admin_log` VALUES ('30', '2', 'tiandi0228', '2', '127.0.0.1', '1388810035');
INSERT INTO `cbb_admin_log` VALUES ('31', '2', 'tiandi0228', '2', '127.0.0.1', '1388810868');
INSERT INTO `cbb_admin_log` VALUES ('32', '1', 'admin', '1', '127.0.0.1', '1388810879');
INSERT INTO `cbb_admin_log` VALUES ('33', '2', 'tiandi0228', '2', '127.0.0.1', '1388810900');
INSERT INTO `cbb_admin_log` VALUES ('34', '2', 'tiandi0228', '2', '127.0.0.1', '1388811370');
INSERT INTO `cbb_admin_log` VALUES ('35', '2', 'tiandi0228', '2', '127.0.0.1', '1388811835');
INSERT INTO `cbb_admin_log` VALUES ('36', '2', 'tiandi0228', '2', '127.0.0.1', '1388811870');
INSERT INTO `cbb_admin_log` VALUES ('37', '2', 'tiandi0228', '2', '127.0.0.1', '1388811903');
INSERT INTO `cbb_admin_log` VALUES ('38', '1', 'admin', '1', '127.0.0.1', '1388811912');
INSERT INTO `cbb_admin_log` VALUES ('39', '2', 'tiandi0228', '2', '127.0.0.1', '1388811948');
INSERT INTO `cbb_admin_log` VALUES ('40', '1', 'admin', '1', '127.0.0.1', '1388811955');
INSERT INTO `cbb_admin_log` VALUES ('41', '5', '测试', '10', '127.0.0.1', '1388816824');
INSERT INTO `cbb_admin_log` VALUES ('42', '1', 'admin', '1', '127.0.0.1', '1388859470');
INSERT INTO `cbb_admin_log` VALUES ('43', '2', 'tiandi0228', '2', '127.0.0.1', '1388861759');
INSERT INTO `cbb_admin_log` VALUES ('44', '2', 'tiandi0228', '2', '127.0.0.1', '1388861779');
INSERT INTO `cbb_admin_log` VALUES ('45', '1', 'admin', '1', '127.0.0.1', '1388861786');
INSERT INTO `cbb_admin_log` VALUES ('46', '2', 'tiandi0228', '2', '127.0.0.1', '1388861896');
INSERT INTO `cbb_admin_log` VALUES ('47', '1', 'admin', '1', '127.0.0.1', '1388861911');
INSERT INTO `cbb_admin_log` VALUES ('48', '2', 'tiandi0228', '2', '127.0.0.1', '1388862324');
INSERT INTO `cbb_admin_log` VALUES ('49', '2', 'tiandi0228', '2', '127.0.0.1', '1388865739');
INSERT INTO `cbb_admin_log` VALUES ('50', '1', 'admin', '1', '127.0.0.1', '1388865745');
INSERT INTO `cbb_admin_log` VALUES ('51', '1', 'admin', '1', '127.0.0.1', '1388868969');
INSERT INTO `cbb_admin_log` VALUES ('52', '1', 'admin', '1', '127.0.0.1', '1388971747');
INSERT INTO `cbb_admin_log` VALUES ('53', '1', 'admin', '1', '127.0.0.1', '1389055865');
INSERT INTO `cbb_admin_log` VALUES ('54', '1', 'admin', '3', '127.0.0.1', '1389143437');
INSERT INTO `cbb_admin_log` VALUES ('55', '1', 'admin', '1', '127.0.0.1', '1389143461');
INSERT INTO `cbb_admin_log` VALUES ('56', '1', 'admin', '1', '127.0.0.1', '1389153316');
INSERT INTO `cbb_admin_log` VALUES ('57', '1', 'admin', '1', '127.0.0.1', '1389230519');
INSERT INTO `cbb_admin_log` VALUES ('58', '1', 'admin', '1', '127.0.0.1', '1389252029');
INSERT INTO `cbb_admin_log` VALUES ('59', '1', 'admin', '1', '127.0.0.1', '1389315233');
INSERT INTO `cbb_admin_log` VALUES ('60', '1', 'admin', '1', '127.0.0.1', '1389331211');
INSERT INTO `cbb_admin_log` VALUES ('61', '1', 'admin', '1', '127.0.0.1', '1389332019');
INSERT INTO `cbb_admin_log` VALUES ('62', '1', 'admin', '1', '127.0.0.1', '1389333406');
INSERT INTO `cbb_admin_log` VALUES ('63', '1', 'admin', '1', '127.0.0.1', '1389334327');
INSERT INTO `cbb_admin_log` VALUES ('64', '1', 'admin', '1', '127.0.0.1', '1389337854');
INSERT INTO `cbb_admin_log` VALUES ('65', '1', 'admin', '1', '127.0.0.1', '1389337864');
INSERT INTO `cbb_admin_log` VALUES ('66', '1', 'admin', '1', '127.0.0.1', '1389401668');
INSERT INTO `cbb_admin_log` VALUES ('67', '1', 'admin', '1', '127.0.0.1', '1389410764');
INSERT INTO `cbb_admin_log` VALUES ('68', '1', 'admin', '1', '127.0.0.1', '1389412288');
INSERT INTO `cbb_admin_log` VALUES ('69', '1', 'admin', '1', '127.0.0.1', '1389576563');
INSERT INTO `cbb_admin_log` VALUES ('70', '1', 'admin', '1', '127.0.0.1', '1389579750');
INSERT INTO `cbb_admin_log` VALUES ('71', '1', 'admin', '1', '127.0.0.1', '1389592567');
INSERT INTO `cbb_admin_log` VALUES ('72', '1', 'admin', '1', '127.0.0.1', '1389593740');
INSERT INTO `cbb_admin_log` VALUES ('73', '1', 'admin', '1', '127.0.0.1', '1389766627');
INSERT INTO `cbb_admin_log` VALUES ('74', '1', 'admin', '1', '127.0.0.1', '1389841898');

-- ----------------------------
-- Table structure for cbb_config
-- ----------------------------
DROP TABLE IF EXISTS `cbb_config`;
CREATE TABLE `cbb_config` (
  `id` int(11) NOT NULL,
  `sitename` varchar(255) NOT NULL DEFAULT '' COMMENT '网站名称',
  `website` varchar(255) NOT NULL COMMENT '站点地址',
  `email` varchar(50) NOT NULL COMMENT '管理员邮箱',
  `icp` varchar(255) DEFAULT NULL COMMENT '备案号',
  `statisticscode` text COMMENT '统计代码',
  `visitstate` int(11) NOT NULL COMMENT '站点状态',
  `visitmessage` text COMMENT '限制访问提示信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='网站配置表';

-- ----------------------------
-- Records of cbb_config
-- ----------------------------
INSERT INTO `cbb_config` VALUES ('1', 'CBB 1.0', 'http://www.cbb.com', 'admin@cbb.com', '', null, '1', '站点升级中……');

-- ----------------------------
-- Table structure for cbb_credit_log
-- ----------------------------
DROP TABLE IF EXISTS `cbb_credit_log`;
CREATE TABLE `cbb_credit_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ctype` varchar(8) NOT NULL DEFAULT '',
  `affect` int(10) NOT NULL DEFAULT '0',
  `logtype` varchar(40) NOT NULL DEFAULT '',
  `descrip` varchar(255) NOT NULL DEFAULT '',
  `created_userid` int(10) unsigned NOT NULL DEFAULT '0',
  `created_username` varchar(15) NOT NULL DEFAULT '',
  `created_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_createduserid_createdtime` (`created_userid`,`created_time`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='积分日志表';

-- ----------------------------
-- Records of cbb_credit_log
-- ----------------------------
INSERT INTO `cbb_credit_log` VALUES ('1', '2', '2', 'login', '登录;积分变化【威望:+2】', '1', 'admin', '1388644755');
INSERT INTO `cbb_credit_log` VALUES ('2', '2', '2', 'login', '登录;积分变化【威望:+2】', '1', 'admin', '1388977374');

-- ----------------------------
-- Table structure for cbb_nav
-- ----------------------------
DROP TABLE IF EXISTS `cbb_nav`;
CREATE TABLE `cbb_nav` (
  `navid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '导航ID',
  `parentid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '导航上级ID',
  `rootid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '导航类ID',
  `type` varchar(32) NOT NULL DEFAULT '' COMMENT '所属类型',
  `sign` varchar(32) NOT NULL DEFAULT '' COMMENT '当前定位标识',
  `name` char(50) NOT NULL DEFAULT '' COMMENT '导航名称',
  `style` char(50) NOT NULL DEFAULT '' COMMENT '导航样式',
  `link` char(100) NOT NULL DEFAULT '' COMMENT '导航链接',
  `alt` char(50) NOT NULL DEFAULT '' COMMENT '链接ALT信息',
  `image` varchar(100) NOT NULL DEFAULT '' COMMENT '导航小图标',
  `target` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否新窗口打开',
  `isshow` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否使用',
  `orderid` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`navid`),
  KEY `idx_type` (`type`),
  KEY `idx_rootid` (`rootid`),
  KEY `idx_orderid` (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=utf8 COMMENT='导航表';

-- ----------------------------
-- Records of cbb_nav
-- ----------------------------
INSERT INTO `cbb_nav` VALUES ('1', '0', '1', 'main', 'default|index|run|', '首页', '', 'index.php', '', '', '0', '0', '1');
INSERT INTO `cbb_nav` VALUES ('2', '0', '2', 'main', 'bbs|index|run|', '论坛', '|||', 'index.php?m=bbs', '', '', '0', '1', '2');
INSERT INTO `cbb_nav` VALUES ('3', '0', '3', 'main', 'bbs|forumlist|run|', '版块', '', 'index.php?m=bbs&c=forumlist', '', '', '0', '1', '3');
INSERT INTO `cbb_nav` VALUES ('4', '0', '4', 'main', 'like|like|run|', '喜欢', '|||', 'index.php?m=like&c=like', '', '', '0', '1', '4');
INSERT INTO `cbb_nav` VALUES ('5', '0', '5', 'main', '', '云平台', '|||', 'http://open.phpwind.com', '', '', '1', '1', '7');
INSERT INTO `cbb_nav` VALUES ('6', '0', '6', 'main', 'tag|index|run|', '话题', '|||', 'index.php?m=tag', '', '', '0', '1', '5');
INSERT INTO `cbb_nav` VALUES ('7', '0', '7', 'main', 'appcenter|index|run|', '应用', '', 'index.php?m=appcenter', '', '', '0', '1', '6');
INSERT INTO `cbb_nav` VALUES ('8', '0', '8', 'my', 'space', '我的空间', '', 'index.php?m=space', '', '', '0', '1', '1');
INSERT INTO `cbb_nav` VALUES ('9', '0', '9', 'my', 'fresh', '我的关注', '', 'index.php?m=my&c=fresh', '', '', '0', '1', '2');
INSERT INTO `cbb_nav` VALUES ('10', '0', '10', 'my', 'forum', '我的版块', '', 'index.php?m=bbs&c=forum&a=my', '', '', '0', '1', '3');
INSERT INTO `cbb_nav` VALUES ('11', '0', '11', 'my', 'article', '我的帖子', '', 'index.php?m=my&c=article', '', '', '0', '1', '4');
INSERT INTO `cbb_nav` VALUES ('12', '0', '12', 'my', 'vote', '我的投票', '', 'index.php?m=vote&c=my', '', '', '0', '1', '5');
INSERT INTO `cbb_nav` VALUES ('13', '0', '13', 'my', 'task', '我的任务', '', 'index.php?m=task', '', '', '0', '1', '6');
INSERT INTO `cbb_nav` VALUES ('14', '0', '14', 'my', 'medal', '我的勋章', '', 'index.php?m=medal', '', '', '0', '1', '7');
INSERT INTO `cbb_nav` VALUES ('15', '0', '15', 'bottom', '', '关于phpwind', '', 'http://www.phpwind.com/index.php?m=aboutus&a=index&menuid=16', '', '', '0', '1', '1');
INSERT INTO `cbb_nav` VALUES ('16', '0', '16', 'bottom', '', '联系我们', '|||', 'http://www.phpwind.com/index.php?m=aboutus&a=index&menuid=20', '', '', '0', '1', '2');
INSERT INTO `cbb_nav` VALUES ('17', '0', '17', 'bottom', '', '程序建议', '', 'http://www.phpwind.net/thread-htm-fid-39.html', '', '', '0', '1', '3');
INSERT INTO `cbb_nav` VALUES ('18', '0', '18', 'bottom', '', '问题反馈', '', 'http://www.phpwind.net/thread-htm-fid-54.html', '', '', '0', '1', '4');

-- ----------------------------
-- Table structure for cbb_users
-- ----------------------------
DROP TABLE IF EXISTS `cbb_users`;
CREATE TABLE `cbb_users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户编号',
  `usercode` varchar(16) NOT NULL COMMENT '用户编号，用户名MD5加密（16位）',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `groupid` smallint(6) NOT NULL COMMENT '用户组',
  `realname` varchar(50) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `regip` varchar(20) NOT NULL COMMENT '注册IP',
  `regtime` int(11) NOT NULL COMMENT '注册时间',
  `loginip` varchar(20) NOT NULL COMMENT '登陆IP',
  `logintime` int(11) NOT NULL COMMENT '登陆时间',
  `logincount` varchar(20) NOT NULL DEFAULT '0' COMMENT '登陆次数',
  `credits` int(10) NOT NULL DEFAULT '0' COMMENT '积分',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='用户信息';

-- ----------------------------
-- Records of cbb_users
-- ----------------------------
INSERT INTO `cbb_users` VALUES ('1', '', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '', 'test@126.com', '127.0.0.1', '1389245807', '127.0.0.1', '1389841898', '16', '0');
INSERT INTO `cbb_users` VALUES ('2', '', 'tiandi', 'e10adc3949ba59abbe56e057f20f883e', '0', '', 'test@126.com', '127.0.0.1', '1389245807', '127.0.0.1', '1389245807', '0', '0');
INSERT INTO `cbb_users` VALUES ('3', '', 'test', 'e10adc3949ba59abbe56e057f20f883e', '0', '测试', 'test@126.com', '127.0.0.1', '1389245807', '127.0.0.1', '1389245807', '0', '0');

-- ----------------------------
-- Table structure for cbb_users_ban
-- ----------------------------
DROP TABLE IF EXISTS `cbb_users_ban`;
CREATE TABLE `cbb_users_ban` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `typeid` char(20) NOT NULL DEFAULT '' COMMENT '类型',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '开始时间',
  `endtime` int(10) NOT NULL DEFAULT '0' COMMENT '结束时间',
  `operator` varchar(50) NOT NULL DEFAULT '0' COMMENT '执行者',
  `reason` varchar(80) NOT NULL DEFAULT '' COMMENT '操作原因',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_uid_typeid_fid` (`uid`,`typeid`),
  KEY `idx_createdUid` (`operator`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='用户禁止记录表';

-- ----------------------------
-- Records of cbb_users_ban
-- ----------------------------
INSERT INTO `cbb_users_ban` VALUES ('8', '3', '1,2', '1389404223', '1389456000', 'admin', 'test');

-- ----------------------------
-- Table structure for cbb_users_groups
-- ----------------------------
DROP TABLE IF EXISTS `cbb_users_groups`;
CREATE TABLE `cbb_users_groups` (
  `gid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户组ID',
  `name` varchar(64) NOT NULL DEFAULT '' COMMENT '用户组名字',
  `type` enum('default','member','system','special','vip') NOT NULL COMMENT '用户组类型',
  `image` varchar(32) NOT NULL DEFAULT '' COMMENT '用户组图标',
  `creditshigher` int(10) NOT NULL DEFAULT '0' COMMENT '用户组需要的点',
  `creditslower` int(10) NOT NULL DEFAULT '0' COMMENT '用户组需要的点',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='用户组表';

-- ----------------------------
-- Records of cbb_users_groups
-- ----------------------------
INSERT INTO `cbb_users_groups` VALUES ('1', '会员', 'default', '0.gif', '0', '0');
INSERT INTO `cbb_users_groups` VALUES ('2', '游客', 'default', '0.gif', '0', '0');
INSERT INTO `cbb_users_groups` VALUES ('3', '管理员', 'system', '20.gif', '0', '0');
INSERT INTO `cbb_users_groups` VALUES ('4', '总版主', 'system', '19.gif', '0', '0');
INSERT INTO `cbb_users_groups` VALUES ('5', '论坛版主', 'system', '18.gif', '0', '0');
INSERT INTO `cbb_users_groups` VALUES ('6', '禁止发言', 'default', '0.gif', '0', '0');
INSERT INTO `cbb_users_groups` VALUES ('7', '未验证会员', 'default', '0.gif', '0', '0');
INSERT INTO `cbb_users_groups` VALUES ('8', '贫民', 'member', '1.gif', '-99999999', '0');
INSERT INTO `cbb_users_groups` VALUES ('9', '新手', 'member', '3.gif', '0', '50');
INSERT INTO `cbb_users_groups` VALUES ('10', '侠客', 'member', '5.gif', '50', '100');
INSERT INTO `cbb_users_groups` VALUES ('11', '骑士', 'member', '6.gif', '100', '500');
INSERT INTO `cbb_users_groups` VALUES ('12', '圣骑士', 'member', '8.gif', '1000', '5000');
INSERT INTO `cbb_users_groups` VALUES ('13', '精灵王', 'member', '10.gif', '5000', '10000');
INSERT INTO `cbb_users_groups` VALUES ('14', '风云使者', 'member', '12.gif', '10000', '20000');
INSERT INTO `cbb_users_groups` VALUES ('15', '光明使者', 'member', '13.gif', '20000', '999999999');
INSERT INTO `cbb_users_groups` VALUES ('16', 'VIP', 'special', '13.gif', '0', '0');

-- ----------------------------
-- Table structure for cbb_users_info
-- ----------------------------
DROP TABLE IF EXISTS `cbb_users_info`;
CREATE TABLE `cbb_users_info` (
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `gender` tinyint(1) NOT NULL DEFAULT '0' COMMENT '性别',
  `birthday` text NOT NULL COMMENT '出生日期',
  `location` varchar(100) NOT NULL DEFAULT '' COMMENT '居住地ID',
  `hometown` varchar(100) NOT NULL DEFAULT '' COMMENT '家乡',
  `homepage` varchar(75) NOT NULL DEFAULT '' COMMENT '主页',
  `qq` varchar(12) NOT NULL DEFAULT '' COMMENT 'QQ 号码',
  `msn` varchar(40) NOT NULL DEFAULT '' COMMENT 'MSN号码',
  `aliww` varchar(30) NOT NULL DEFAULT '' COMMENT '阿里旺旺号码',
  `mobile` varchar(16) NOT NULL DEFAULT '' COMMENT '手机号码',
  `alipay` varchar(30) NOT NULL DEFAULT '' COMMENT '支付宝帐号',
  `signature` text COMMENT '个性签名',
  `profile` text COMMENT '个人简介',
  `regreason` varchar(200) NOT NULL DEFAULT '' COMMENT '注册原因',
  `telphone` varchar(20) NOT NULL DEFAULT '' COMMENT '电话号码',
  `address` varchar(100) NOT NULL DEFAULT '' COMMENT '邮寄地址',
  `zipcode` varchar(10) NOT NULL DEFAULT '' COMMENT '邮政编码',
  `secret` varchar(500) NOT NULL DEFAULT '' COMMENT '隐私设置',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户扩展基本信息表二';

-- ----------------------------
-- Records of cbb_users_info
-- ----------------------------
INSERT INTO `cbb_users_info` VALUES ('1', '0', '2014-01-16', '', '杭州市', 'http://www.syuchun.com', '', '', '', '13867820265', '', '', null, '', '', '', '', '');
INSERT INTO `cbb_users_info` VALUES ('2', '0', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '');
INSERT INTO `cbb_users_info` VALUES ('3', '0', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '');
