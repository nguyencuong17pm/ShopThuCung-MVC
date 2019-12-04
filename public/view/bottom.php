
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<footer class="text-center">
  <a class="up-arrow" href="#abc" data-toggle="tooltip" title="Lên trên">
    <span class="glyphicon glyphicon-triangle-top"></span>
  </a>
  <div class="container">
  <h3 class="text-primary"><img top="5px" width="50px" height="50px" src="images/ico-footer.png">Meow - Shop thú cưng</h3>
    <hr>
        <div class="text-center center-block">
            <p class="text-info">- 29 Võ Thị Sáu, Thành phố Long Xuyên, An Giang, Việt Nam -<h3><a href="https://www.google.com/maps/@10.3752895,105.433005,16z"><span class="glyphicon glyphicon-map-marker"></span></a></h3></p>      
            <h3 class="text-info">Follow us</h3>
              <a  target="_blank" href="https://www.facebook.com/IFM.Lion"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
              <a target="_blank" href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
              <a target="_blank" href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
              <a target="_blank" href="mailto:h3al3r11090909@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
    <hr>
</div>
</footer>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#abc']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>