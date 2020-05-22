<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="headerFooter.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Arimo" />
    <link rel="stylesheet" href="contactStyle.css">
  </head>
  <body>
    <table id="header">
      <tr class="navbar">
        <th><a href="mainpage.html">Zoombox</a></th>
        <td class="navMain"><a href="Songs/all_songs.html">Songs</a></td>
        <td class="navMain"><a href="Artist/all_artists.html">Artist</a></td>
        <td class="navMain"><a href="Songs/sortby_genre.html">Genres</a></td>
        <td class="navMain"><a href="Songs/sortby_lang.html">Languages</a></td>
        <td class="navMainBuffer"></td>
        <td class="navRight"><a href="feedback.html">Feedback</a></td>
      </tr>
      <tr class="content1">
        <td colspan="6"></td>
      </tr>
      <tr class="content2">
        <td colspan="6"></td>
      </tr>
      <tr class="content3">
        <td  colspan="6"></td>
      </tr>
    </table>

    <div class="page">
        <div class="contact">
          <h1 id="head1"> Contact Us </h1>
          <h3>Thank you!</h3>
          <?php
           $nama = $_POST["name"];

           echo "<p>Thanks for your message $nama </p>";
           echo "<p> We will be sure to read it and reply as soon as possible</p>";

           ?>

           <a href="contact.html">return to form </a>
        </div>
    </div>

    <footer>
      <table>
        <tr>
          <td rowspan="6" class="footer1">
            <p>Zoombox is a database-less<br>lyrics collection developed by<br>4 college students.</p><br>
            <div class="socmed">
              <a href="https://twitter.com/ZoomBox_inc" target="_blank"><img width="3%" src="twitter.png"></a>
              <a href="https://www.instagram.com/zoombox_inc/" target="_blank"><img width="3%" src="instagram.png"></a>
              <a href="https://www.facebook.com/ZoomBox-Media-Inc-110291907360656/?modal=admin_todo_tour" target="_blank"><img width="3%" src="facebook.png"></a>
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"><img width="3%" src="youtube.png"></a>
            </div>
            <br>
          </td>
        <!-- DO NOT TOUCH LINE BELOW-->
          <td class="footer2_top"><a href="">About Zoombox</a></td>
        <!--DO NOT TOUCH LINE ABOVE-->
        </tr>
        <tr>
          <td class="footer2"><a href="about.html">About Zoombox</a></td>
        </tr>
        <tr>
          <td class="footer2"><a href="privacy.html">Privacy Policy</a></td>
        </tr>
        <tr>
          <td class="footer2"><a href="devs.html">Developers</a></td>
        </tr>
        <tr>
          <td class="footer2"><a href="contact.html">Contact Us</a></td>
        </tr>
        <tr>
          <td class="footer2"><a href="feedback.html">Feedback</a></td>
        </tr>
        <tr>
          <td id="copyright" colspan="2"><br><br><br><br><br><br><br>©2020 Zoombox Media Inc.</td>
        </tr>
      </table>
    </footer>
  </body>
</html>
