<?php
header('Location: public');
//禁用错误报告，也就是不显示错误
error_reporting(0);
//报告运行时错误
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//报告所有错误
error_reporting(E_ALL);
?>
