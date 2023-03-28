# My Dog Health App

![image](https://user-images.githubusercontent.com/87254760/226127173-af2127bf-3554-43fc-892f-058471ac9092.png)

## Description
This project will allow users to keep track of information relevant to their dog's well-being. Users can create dog profiles and save their basic information, medication information, health conditions information, and food information. Users can also save veterinarian information and appointment information. It is currently undergoing development; login/logout, update, and delete features do not work. <br><br>See more at <a href="dog6501.wordpress.com">The Dog Group's Site</a>.

## How to Use
This is a php and mysql-based system implementation.
<br><br>![Screenshot (47)](https://user-images.githubusercontent.com/87254760/228097474-f120cf22-6d8f-4671-ae79-be399380e9c2.png)
<br><br>
Step 1. <a href="https://www.apachefriends.org/download.html">Download XAMPP</a>
<br><br>
Step 2. <a href="https://www.geeksforgeeks.org/how-to-run-php-programs/">Setup</a><br>
    phpMyAdmin  username: MyUser <br>
                password: myPasswd<br>
    start the apache and mysql modules<br>
Step 3. Import <a href="https://github.com/maxaeon/MyDogHealth/blob/maxaeon-CR/db/myschema.sql">the myschema db file</a> to phpMyAdmin <br>
  make sure MyUser has full privileges for the myschema database<br><br>
Step 4. Download <a href="https://github.com/maxaeon/MyDogHealth">repository files</a> to c:/ > XAMPP > htdocs<br><br>
Step 5. Run <a href="http://localhost/welcome.php">localhost/welcome.php</a> <br>Note: login/logout, update, and delete features are currently non-functional<br>Database information can be edited and deleted through <a href="http://localhost/phpmyadmin/index.php">phpMyAdmin</a>

## Credits
This project was created by Max, Feroz, Kamal, and Chris. 

## License
MIT License

Copyright (c) [2023] Max Feroz Kamal & Chris

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
