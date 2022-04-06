

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
<div class="sp-tab__tab-content" style="margin:40px;">
								<div id="tab-83971" class="sp-tab__tab-pane sp-tab__show sp-tab__active" role="tabpanel">
<p><!-- wp:heading {"level":4} --></p>
<h4><strong>Staff</strong></h4>
<p><!-- /wp:heading --> <!-- wp:paragraph --></p>
<p>A dedicated team is striving hard to provide services for the utmost satisfaction of the stakeholders.</p>
<p><!-- /wp:paragraph --> <!-- wp:table --></p>
<div style="overflow-x: auto;">
<table class="table table-striped">
<tbody>
<tr style="background-color: #003366;color:#fff;">
<td><strong>S.No</strong></td>
<td><strong>Name of the Staff</strong></td>
<td><strong>Qualification</strong></td>
<td><strong>Designation</strong></td>
</tr>
<tr>
<td>1</td>
<td>Dr. Ch. Srinivasa Rao</td>
<td>Ph.D</td>
<td>Professor of Mathematics &amp; Officer In- Charge, Library</td>
</tr>
<tr>
<td>2</td>
<td>B. Ramu</td>
<td>MLISc</td>
<td>Library Assistant</td>
</tr>
<tr>
<td>3</td>
<td>G. Sanyasappadu</td>
<td>MLISc</td>
<td>Library Assistant</td>
</tr>
<tr>
<td>4</td>
<td>S. Bhaskra Rao</td>
<td>BLISc</td>
<td>Library Assistant</td>
</tr>
<tr>
<td>5</td>
<td>G.V. Satyanarayana&nbsp;</td>
<td>
<table>
<tbody>
<tr>
<td width="192">B.PED</td>
</tr>
</tbody>
</table>
</td>
<td>Helper</td>
</tr>
<tr>
<td>6</td>
<td>N Lalitha</td>
<td>BLISc</td>
<td>Helper</td>
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