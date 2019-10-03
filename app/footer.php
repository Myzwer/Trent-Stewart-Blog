<?php
/**
 * The template for displaying the footer
 *
 */

?>

<footer>
<div class="grid-container fluid" id = "footer-links">
  <div class="grid-x grid-margin-x">
    
    <div class="cell small-12 large-1 footer-link large-offset-2">
		<a href = "http://trentstewart.org">Home </a>
    </div>
    <div class="cell small-12 large-1 footer-link">
		<a href = "http://trentstewart.org/about">About </a>
    </div>
    <div class="cell small-12  large-1  footer-link">
		<a href = "http://trentstewart.org/blog">Blog </a>
    </div>
    <div class="cell small-12 large-1  footer-link">
		<a href = "http://trentstewart.org/broadcast">Media </a>
    </div>
    <div class="cell small-12 large-1  footer-link">
		<a href = "http://trentstewart.org/consult">Consulting </a>
    </div>
    <div class="cell small-12 large-1 footer-link">
		<a href = "http://trentstewart.org/contact">Contact </a>
    </div>
    <div class="cell large-2 footer-link two-word">
		<a href = "https://foothillschurch.com">Foothills Church </a>
    </div>

  </div>
</div>


<div class="grid-container">
<div class="grid-x grid-margin-x">
  <div class="cell small-12 align-center"><ul class="social-icons icon-circle list-unstyled list-inline" id = "social-links"> 
	      <li><a href="https://www.instagram.com/trentonjstewart/?hl=en"><i class="fa fa-instagram fi-social-instagram"></i></a> </li>   
	      <li><a href="https://www.facebook.com/trentonjstewart"><i class="fa fa-twitter fi-social-twitter"></i></a> </li>   
	  </ul></div>
</div>
</div>

<div class = "copyright">&copy; <?php echo date("Y"); ?> Foothills Church - All Rights Reserved</div>
</footer>





<script>
	jQuery(document).foundation();
</script>
		
<?php wp_footer(); ?>

</body>
</html>
