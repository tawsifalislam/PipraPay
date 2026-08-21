<?php
// এই স্ক্রিপ্ট Railway-এর Environment Variables থেকে পড়ে pp-config.php তৈরি করে
// এতে কোনো সরাসরি পাসওয়ার্ড লেখা নেই, তাই এটা নিরাপদে পাবলিক রিপোতে রাখা যায়

$configContent = "<?php\n";
$configContent .= "\$db_host = '" . addslashes(getenv('DB_HOST') ?: 'localhost') . "';\n";
$configContent .= "\$db_port = '" . addslashes(getenv('DB_PORT') ?: '3306') . "';\n";
$configContent .= "\$db_user = '" . addslashes(getenv('DB_USERNAME') ?: 'root') . "';\n";
$configContent .= "\$db_pass = '" . addslashes(getenv('DB_PASSWORD') ?: '') . "';\n";
$configContent .= "\$db_name = '" . addslashes(getenv('DB_DATABASE') ?: '') . "';\n";
$configContent .= "\$db_prefix = '" . addslashes(getenv('DB_PREFIX') ?: 'pp_') . "';\n";
$configContent .= "?>";

file_put_contents(__DIR__ . '/pp-config.php', $configContent);
echo "pp-config.php generated successfully.\n";
