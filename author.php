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
				<a href="addauthor.php">
                  <span class="fs1" aria-hidden="true" data-icon=""></span>
                  <div class="details">
                    <span class="big">Add</span>
                    <span>Author</span>
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
                          <th class="span3">Author ID</th>
                          <th class="span7">Name</th>
                          <th class="span2">Edit</th>
                        </tr>
                      </thead>
                      <tbody>
						<?php 
						$sql="SELECT tble_id, author_name FROM lib_book_author ";
						$result = mysqli_query($con, $sql);
							while($row = mysqli_fetch_assoc($result)) 
							{
	  
								echo "<tr class='gradeX'>";
								echo "<td>" . $row["tble_id"]. "</td>";
								echo "<td>" . $row["author_name"]. "</td>";
								echo "<td><a href='edit.php?id=". $row["tble_id"]."' class='btn btn-small btn-primary '>edit</a></td>";
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