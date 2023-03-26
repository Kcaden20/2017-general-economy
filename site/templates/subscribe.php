<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap scene_element scene_element--fadein">
      <h1>Keep up with the Gen Eco</h1>
      <div class="intro text">
        <?= $page->text()->kirbytext() ?>
      </div>
       <form style="padding:3px;text-align:center;" action="https://tinyletter.com/geneconyc" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/geneconyc', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">

<!--         <p><label for="tlemail">Enter your email address</label></p> -->
        <p><input class="search-bar subscribebar"  type="text" name="email" id="tlemail" value="example@genconyc.com" onfocus="if (this.value=='example@genconyc.com') this.value='';" /></p>
        <input type="hidden" value="1" name="embed"/>
        <input class="btn sub" type="submit" value="Subscribe" />

        </form>

    </header>

  </main>

<?php snippet('footer') ?>