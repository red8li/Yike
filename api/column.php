<?php

/**
 * @Author: Administrator
 * @Date:   2017-11-21 14:38:49
 * @Last Modified by:   Administrator
 * @Last Modified time: 2017-11-21 14:59:44
 */
$colunm = 'https://moment.douban.com/api/columns?alt=json&apikey=0bcf52793711959c236df76ba534c0d4&app_version=1.7.4&douban_udid=d623045db9fcb0d5243174c1bf1a675f887047c0&udid=9a34d8b038ff38971050199b0c5ee9c60c6d1ca3&version=6';

$colunm = file_get_contents($colunm);

echo $colunm;
