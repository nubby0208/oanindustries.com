<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link href="<?php bloginfo('template_url'); ?>/assets/css/site-style.css" rel="stylesheet" type="text/css">

<link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">

<?php wp_head(); ?>

	<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:0px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:0px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-czi7{text-align:right;vertical-align:middle}
.tg .tg-g7sd{border-color:inherit;color:#ffffff;font-weight:bold;text-align:left;vertical-align:bottom}
.tg .tg-74ys{border-color:inherit;text-align:right;vertical-align:middle}
.tg .tg-yla0{font-weight:bold;text-align:left;vertical-align:middle}
</style>
	
</head>

<body <?php body_class(); ?>>
 
<header id="site-header"> 

<div class="header-top">
<div class="container">
<div class="row">
<div class="col-md-3">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand"><img src="<?php bloginfo('template_url'); ?>/assets/images/oan.png" alt="#"></a>
</div>

	
	

	<table class="tg" style="undefined;table-layout: fixed; width: 783px">
<colgroup>
<col style="width: 50px">
<col style="width: 120px">
<col style="width: 50px">
<col style="width: 190px">
<col style="width: 50px">
<col style="width: 226px">
</colgroup>
<tbody>
  <tr>
    

<td class="tg-czi7" rowspan="2"><span class="adrs-icn"><img src="http://157.230.87.239/wp-content/uploads/2020/11/phone.svg" alt="#"></span>
</td>
<td class="tg-g7sd">Call us<br>+91 141 4035484</td>



<td class="tg-74ys" rowspan="2"><span class="adrs-icn"><img src="http://157.230.87.239/wp-content/uploads/2020/11/email.svg" alt="#"></span></td>
<td class="tg-g7sd">Send us E-mail<br>info@oanindustries.com</td>



<td class="tg-74ys" rowspan="2"><span class="adrs-icn"><img src="http://157.230.87.239/wp-content/uploads/2020/11/loct01.svg" alt="#"></span></td>
<td class="tg-g7sd">Location<br>JAIPUR, RAJASTHAN -INDIA</td>


  </tr>
</tbody>
</table>
	
<br>
	<br>
	
	
	
</div>
</div>
</div>



<div class="min-nav">
<div class="container">
<?php wp_megamenu(array('theme_location' => 'primary')); ?>
</div>
</div>
</header>


