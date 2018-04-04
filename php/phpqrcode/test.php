<?php
# 生成指定字符串/网址的二维码
include './code/phpqrcode.php';

$text = uniqid(); // 编码的文本（字符串）
$outfile = false; // 保存在本地的文件路径，如果 === false 则只在页面输出
$level = QR_ECLEVEL_L; // 纠错级别，QR_ECLEVEL_L，QR_ECLEVEL_M，QR_ECLEVEL_Q，QR_ECLEVEL_H
$size = 3; // 生成的图片大小，数字越大图片越大
$margin = 4; // 边缘空白区域的大小，数字越大空白越宽
$saveAndPrint = true; // 是否在保存文件的同时在页面输出（$outfile !== false时生效）
QRcode::png($text, $outfile, $level, $size, $margin, $saveAndPrint);
