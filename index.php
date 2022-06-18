<?php
    include_once 'header.php';
?>
    <h1>Odin Recipes</h1>
    <!--Trying to make a nav bar-->
    <nav class="breadcrumb">
      <a href="#spaghetti"><strong>Spaghetti</strong></a>
      <a href="#alfredo"><strong>Alfredo</strong></a>
      <a href="#biscotti"><strong>Biscotti</strong></a>
    </nav>
    <!---Seperating recipes with divs and similar backgrounds-->
    <div class="background-1">
      <a href="./recipes/spaghetti.html" id="spaghetti"
        ><h2>Spaghetti Recipe</h2></a
      >
      <img
        class="spag"
        src="https://www.thespruceeats.com/thmb/L63zyY92suQLmn2CWz-rI621b5o=/3602x3602/smart/filters:no_upscale()/skillet-spaghetti-481948-final-hero-01-340363d6ed1c402a9a10b0a176e2a649.jpg"
      />
    </div>
    <hr />
    <div class="background-1">
      <a href="./recipes/alfredo.html" id="alfredo"><h2>Alfredo Recipe</h2></a>
      <img
        class="alfr"
        src="https://img.sndimg.com/food/image/upload/f_auto,c_thumb,q_73,ar_16:9,w_768/v1/img/recipes/18/07/97/picuRT88I.jpg"
      />
    </div>
    <hr />
    <div class="background-1">
      <a href="./recipes/biscotti.html" id="biscotti"
        ><h2>Biscotti Recipe</h2></a
      >
      <img class="bisc" src="./images/1371609387702.jpeg" />
    </div>
  </body>
  <!---Can't align the github logo yet-->
<?php
    include_once 'footer.php';
?>