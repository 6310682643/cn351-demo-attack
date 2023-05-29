# cn351-demo-attack
# G09
## SQLI
1. นำ folder SQLI ไปใส่ไว้ใน xampp -> htdocs
2. check ว่ารัน XAMPP control panel ว่าได้ start ทั้ง apache & MySQL
3. จากนั้นกด admin ของ MySQL เข้า phpMyAdmin เพื่อสร้าง database test_db ตั้งชื่อตารางว่า users โดยมีข้อมูลด้านในเป็น id, username, password, name
4. รัน [http://localhost/demo-attack/](http://localhost/demo-attack/) และสามารถ login โดยข้อมูลที่กรอกใน database

## XSS
1. นำ folder XSS ไปใส่ไว้ใน xampp -> htdocs
2. check ว่ารัน XAMPP control panel ว่าได้ start ทั้ง apache & MySQL
3. จากนั้นกด admin ของ MySQL เข้า phpMyAdmin เพื่อสร้าง database xss_db ตั้งชื่อตารางว่า data โดยมีข้อมูลด้านในเป็น id, title, content
4. รัน [http://localhost/xss/](http://localhost/xss/) 
