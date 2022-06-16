
<?php include('include/admin/header.php');?>
    <section>
		<div class="container">
			<div class="row">
				<?php include('include/admin/sidebar.php');?>

                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Всі товари</h2>
                        
          
          <label for="filter">Фільтр</label> <input type="text" name="filter" value="" id="filter" />
					<a rel="facebox" href="addproduct.php">Додати товар</a>
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> ID </th>
								<th> Зображення </th>
								<th> Товар </th>
								<th> Опис </th>
								<th> Ціна </th>
								<th> Категорія товару </th>
                                <th> Дії над товаром </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$conn = mysqli_connect($servername, $username, $password, $database);
							$result = mysqli_query($conn, "SELECT * FROM products");
							while($row = mysqli_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['ID'].'</td>';
									echo '<td><a rel="facebox" href="editproductimage.php?id='.$row['ID'].'"><img src="reservation/img/products/'.$row['imgUrl'].'" width="80" height="50"></a></td>';
									echo '<td><div align="right">'.$row['Product'].'</div></td>';
									echo '<td><div align="right">'.$row['Description'].'</div></td>';
									echo '<td><div align="right">'.$row['Price'].'</div></td>';
									echo '<td><div align="right">'.$row['Category'].'</div></td>';
									echo '<td><div align="center"><a rel="facebox" href="editproductdetails.php?id='.$row['ID'].'"><i class="fa fa-edit fa-lg text-success"></i></a> | <a href="#" id="'.$row['ID'].'" class="delbutton" title="Натисність щоб видалити"><i class="fa fa-times-circle fa-lg text-danger"></i></a></div></td>';
									echo '</tr>';
								}
?> 
						</tbody>
					</table>
              </section>
<?php include('include/admin/footer.php'); ?>