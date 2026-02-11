 </main>
<footer>
    <?php
$filename = $_SERVER['SCRIPT_FILENAME'];
$filenamebasename = basename($filename);
$time = filemtime($filename);
$date = date("d-m-Y H:i:s", $time);
echo "<p>
 File: $filenamebasename <br> Last modified Date and time: $date</p>";
?>
        <p>&copy; 2025 Your Website. All rights reserved.</p>
    </footer>

    </body>
</html>