<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>NBA</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>


  <nav class="white lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="https://www.ticketmaster.ca/" class="brand-logo center"><img src="https://pbs.twimg.com/profile_images/1063091728398323712/zGJd2_dQ_400x400.jpg" alt="ticketmaster" height="50px" width="50px";/></a>
      <a id="logo-container" href="https://mansci-db.uwaterloo.ca/~r2abdall/nba-design2/index.php" class="brand-logo left"><img src="https://img.icons8.com/material/24/000000/circled-left--v3.png" alt="back-button";/></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">


      <div class="container">


      <center>
        <h1 style="color:black">Live News</h1>
      </center>
      <br />
      <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/pE-j-6BnYBc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div>

      <center>
      <br />
      <h5>
        National Basketball Association
      </h5>
        <!-- start sw-rss-feed code -->
        <script type="text/javascript">
        <!--
        rssfeed_url = new Array();
        rssfeed_url[0]="http://www.nbl.com.au/feed";
        rssfeed_frame_width="500";
        rssfeed_frame_height="1000";
        rssfeed_scroll="on";
        rssfeed_scroll_step="6";
        rssfeed_scroll_bar="on";
        rssfeed_target="_blank";
        rssfeed_font_size="15";
        rssfeed_font_face="GillSans,Trebuchet, sans-serif;";
        rssfeed_border="off";
        rssfeed_css_url="";
        rssfeed_title="off";
        rssfeed_title_name="";
        rssfeed_title_bgcolor="#3366ff";
        rssfeed_title_color="#fff";
        rssfeed_title_bgimage="";
        rssfeed_footer="off";
        rssfeed_footer_name="rss feed";
        rssfeed_footer_bgcolor="#fff";
        rssfeed_footer_color="#333";
        rssfeed_footer_bgimage="";
        rssfeed_item_title_length="50";
        rssfeed_item_title_color="black";
        rssfeed_item_bgcolor="#fff";
        rssfeed_item_bgimage="";
        rssfeed_item_border_bottom="on";
        rssfeed_item_source_icon="off";
        rssfeed_item_date="off";
        rssfeed_item_description="on";
        rssfeed_item_description_length="120";
        rssfeed_item_description_color="#666";
        rssfeed_item_description_link_color="#333";
        rssfeed_item_description_tag="off";
        rssfeed_no_items="";
        rssfeed_cache = "be5a2ba9463007b69278578f20eb2ca7";
        //-->
        </script>
        <script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script>


    </div>
  </div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <script>


  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tap-target');
    var instances = M.TapTarget.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.tap-target').tapTarget();
  });
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
coll[i].addEventListener("click", function() {
this.classList.toggle("active");
var content = this.nextElementSibling;
if (content.style.maxHeight){
content.style.maxHeight = null;
} else {
content.style.maxHeight = content.scrollHeight + "px";
}
});
}
</script>
  </body>
</html>
