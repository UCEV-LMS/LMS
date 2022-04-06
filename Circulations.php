<!DOCTYPE html>
<html>
<head>
	<title>Facilities</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 -->   

 	<?php 
 	include 'links.php';
 	?>
 	<link rel="stylesheet" type="text/css" href="assets/css/achievement.css">
     <style>
p{
			text-align: justify;
		}
    .table th{
      text-decoration-color: white;
      color: snow;
  }
  @media(max-width: 768px){
      .table thead{
          display: none;
      }
      .table, .table tbody, .table tr, .table td{
          display: block;
          width: 100%
      }
      .table tr{
          margin-bottom: 15px;
      }
      .table td{
          text-align: justify-all;
          padding-left: 50%;
          position: relative;
      }
      .table td::before{
          content:attr(data-label);
          position: absolute;
          left:0;
          width: 50%;
          padding-left: 15px;
          font-size: 15px;
          font-weight: bold;
          text-align: left;
      }
  }
</style>
</head>
<body style="">

<?php
	include 'nav.php';
?>
<div class="sp-tab__tab-content" style="margin:50px">
								<div id="tab-83971" class="sp-tab__tab-pane sp-tab__show sp-tab__active" role="tabpanel">
<p><!-- wp:heading {"level":4} --> </p> <h4>Circulation</h4>
<p> Theese are the books available for Circulation</p>
<p><!-- /wp:heading --> <!-- wp:paragraph --></p>
<p><!-- /wp:paragraph --> <!-- wp:table --></p>
<div style="overflow-x: auto;">
<table class="table table-striped">
<tbody>
<tr style="background-color: #003366;">
<th style="text-align: center;" width="56"><strong>S. No</strong></th>
<th width="92"><strong>Name of the Branch</strong></th>
<th style="text-align: center;" width="117"><strong>Number of Titles</strong></th>
<th style="text-align: center;" width="101"><strong>Number of Volumes</strong></th>
</tr>
<tr>
<td style="text-align: center;" width="56"><strong>1</strong></td>
<td style="text-align: center;" width="92">CE</td>
<td style="text-align: center;" width="117">228</td>
<td style="text-align: center;" width="101">1018</td>
</tr>
<tr>
<td style="text-align: center;" width="56"><strong>2</strong></td>
<td style="text-align: center;" width="92">ME</td>
<td style="text-align: center;" width="117">563</td>
<td style="text-align: center;" width="101">2874</td>
</tr>
<tr>
<td style="text-align: center;" width="56"><strong>3</strong></td>
<td style="text-align: center;" width="92">EEE</td>
<td style="text-align: center;" width="117">492</td>
<td style="text-align: center;" width="101">2515</td>
</tr>
<tr>
<td style="text-align: center;" width="56"><strong>4</strong></td>
<td style="text-align: center;" width="92">ECE</td>
<td style="text-align: center;" width="117">564</td>
<td style="text-align: center;" width="101">3002</td>
</tr>
<tr>
<td style="text-align: center;" width="56"><strong>5</strong></td>
<td style="text-align: center;" width="92">CSE</td>
<td style="text-align: center;" width="117">465</td>
<td style="text-align: center;" width="101">2978</td>
</tr>
<tr>
<td style="text-align: center;" width="56"><strong>6</strong></td>
<td style="text-align: center;" width="92">IT</td>
<td style="text-align: center;" width="117">333</td>
<td style="text-align: center;" width="101">2728</td>
</tr>
<tr>
<td style="text-align: center;" width="56"><strong>7</strong></td>
<td style="text-align: center;" width="92">MET</td>
<td style="text-align: center;" width="117">115</td>
<td style="text-align: center;" width="101">832</td>
</tr>
<tr>
<td style="text-align: center;" width="56"><strong>8</strong></td>
<td style="text-align: center;" width="92">BS&amp;HSS</td>
<td style="text-align: center;" width="117">320</td>
<td style="text-align: center;" width="101">2632</td>
</tr>
<tr>
<td style="text-align: center;" width="56"><strong>9</strong></td>
<td style="text-align: center;" width="92">Management, MCA, M.Tech, Other general books</td>
<td style="text-align: center;" width="117">--</td>
<td style="text-align: center;" width="101">5706</td>
</tr>
<tr>
<td style="text-align: center;" colspan="2" width="150"><strong>Total Books</strong></td>
<td style="text-align: center;" width="117">3080</td>
<td style="text-align: center;" width="101">24585</td>
</tr>
</tbody>
</table>
</div>
</figure>
</div>
</div>
<?php
include 'footer.php';
?>

</body>
</html>