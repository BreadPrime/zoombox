<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Feedback Response</title>
    <link rel="stylesheet" href="headerFooter.css">
    <link rel="stylesheet" href="feedbackStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monoton&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap">
  </head>
  <body>
    <table>
      <tr class="navbar">
        <th><a href="mainpage.html">Zoombox</a></th>
        <td class="navMain"><a href="Songs/all_songs.html">Songs</a></td>
        <td class="navMain"><a href="Artist/all_artists.html">Artist</a></td>
        <td class="navMain"><a href="Songs/sortby_genre.html">Genres</a></td>
        <td class="navMain"><a href="Songs/sortby_lang.html">Languages</a></td>
        <td class="navMainBuffer"></td>
        <td class="navRight"><a href="feedback.html">Feedback</a></td>
      </tr>
    </table>

    <div class="page">
        <div class="contact">
              <h1 id="head1" style="text-align:center;"> Feedback Form </h1>
              <div class="response">
              <?php
                $masa = $_POST["time"];
                $tarikh = $_POST["date"];

                echo "<h2>Your response has been recorded</h3>";
                echo "<p>Thank you for helping to make the site better</p>";
                echo "<p>This form was submitted on $masa $tarikh" ;
               ?>
             </div>
            </form>
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
         <td id="copyright" colspan="2"><br><br><br><br><br><br>©2020 Zoombox Media Inc.</td>
       </tr>
     </table>
   </footer>
 <!--<script>
   $("form1").validate();
 </script>-->

 </body>
 </html>
