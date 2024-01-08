#!/bin/sh
oracle_date_format='d-M-y'
file_1='vendor/codeigniter4/shield/src/Models/UserModel.php'
file_2='vendor/codeigniter4/shield/src/Models/UserIdentityModel.php'
file_3='vendor/codeigniter4/framework/system/BaseModel.php'
file_4='vendor/codeigniter4/shield/src/Models/LoginModel.php'
file_5='vendor/codeigniter4/framework/system/RememberModel.php'
file_6='vendor/codeigniter4/framework/system/TokenLoginModel.php'
sed -i "s/Y-m-d H:i:s/${oracle_date_format}/" ${file_1}
sed -i "s/Y-m-d H:i:s/${oracle_date_format}/" ${file_2}
sed -i "s/Y-m-d H:i:s/${oracle_date_format}/" ${file_3}
sed -i "s/Y-m-d/${oracle_date_format}/" ${file_3}
sed -i "s/Y-m-d H:i:s/${oracle_date_format}/" ${file_4}
sed -i "s/Y-m-d H:i:s/${oracle_date_format}/" ${file_5}
sed -i "s/Y-m-d H:i:s/${oracle_date_format}/" ${file_6}
