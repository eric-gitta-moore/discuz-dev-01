<?php
/*
 *魔趣吧：www.moqu8.com
 *更多商业插件/模版免费下载 就在魔趣吧
 *本资源来源于网络收集,仅供个人学习交流，请勿用于商业用途，并于下载24小时后删除!
 *如果侵犯了您的权益,请及时告知我们,我们即刻删除!
 */

error_reporting(E_ERROR);
require_once 'phpqrcode/phpqrcode.php';
$url = urldecode($_GET["data"]);
QRcode::png($url);