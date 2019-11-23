<?php
  include "debut.htm";
?>  
    <div id="corps">
      <video controls autoplay>
        <source src="presentation.mp4" type="video/mp4" />
        <source src="presentation.ogg" type="video/ogg" />
        <p><a href="presentation.mp4">Télécharger la vidéo</a>.</p>
      </video>
      <div id="slider">
        <img src="slider.jpg" id="imslider">
      </div>
    </div>
    <script>
      $(function(){
          $('img').animate({top: '0px'},0, function suite() {
            $('img').animate({left: '0px'})
                    .delay(3000)
                    .animate({left: '-600px'})
                    .delay(3000)
                    .animate({left: '-1200px'})
                    .delay(3000)
                    .animate({left: '-1800px'})
                    .delay(3000)
                    .animate({left: '-2400px'}, suite)
					.delay(3000);
        });
      });
    </script>
	
<?php
  include "fin.htm";
?>  
