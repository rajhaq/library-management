<?php include 'header.php';?>
<?php include 'head.php';?>
<div class="container-fluid">
<div class="dashboard-wrapper">
<?php include 'navbar.php';?>	
	<div class="main-container">
	

	<div class="row-fluid">
		<div class="span10">

          <div class="page-header">
            <div class="pull-left">
              <h2>Books</h2>
            </div>
            <div class="pull-right">
              <ul class="stats">
                <li class="color-first hidden-phone">
				<a href="addbook.php">
                  <span class="fs1" aria-hidden="true" data-icon=""></span>
                  <div class="details">
                    <span class="big">Add</span>
                    <span>books</span>
                  </div>
				  </a>
                </li>
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="row-fluid">
            <div class="span12">
              <div class="widget no-margin">

               <div class="widget-body">
                  <div id="dt_example" class="example_alt_pagination">
                    <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">    
                      <thead>
                        <tr>
                          <th style="width:20%">Book Name</th>
                          <th style="width:20%">Author</th>
                          <th style="width:10%" class="hidden-phone">Price</th>
                          <th style="width:10%" class="hidden-phone">Year</th>
                          <th style="width:10%%" class="hidden-phone">Stock</th>
                          <th style="width:10%%" class="hidden-phone">S-row</th>
                          <th style="width:10%%" class="hidden-phone">S-column</th>
                          <th style="width:10%" class="hidden-phone">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
						<?php $sql="SELECT book_id, book_name, book_author, book_price, book_publish_year, book_stock, book_shelf_row, book_shelf_column FROM lib_books ";
						$result = mysqli_query($con, $sql);
							while($row = mysqli_fetch_assoc($result)) 
							{
	  
								echo "<tr class='gradeX'>";
								echo "<td>" . $row["book_name"]. "</td>";
								echo "<td>" . $row["book_author"]. "</td>";
								echo "<td>" . $row["book_price"]. "</td>";
								echo "<td>" . $row["book_publish_year"]. "</td>";
								echo "<td>" . $row["book_stock"]. "</td>";
								echo "<td>" . $row["book_shelf_row"]. "</td>";
								echo "<td>" . $row["book_shelf_column"]. "</td>";
								echo "<td><a href='bookedit.php?id=". $row["book_id"]."' class='btn btn-small btn-primary '>edit</a></td>";
							}
						?>
                      </tbody>
                    </table>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
		</div>
	</div>
	</div>


</div>
</div>
<?php include 'footer.php';?>