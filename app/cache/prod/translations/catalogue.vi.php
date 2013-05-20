<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('vi', array (
  'SMAdminBundle' => 
  array (
    'Welcome' => 'Welcome',
    'Profile' => 'Thông Tin Tài Khoản',
    'Sign Out' => 'Đăng Xuất',
    'System' => 'Hệ Thống',
  ),
));


return $catalogue;
