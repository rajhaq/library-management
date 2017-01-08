 <?php include 'header.php';?>
	<?php include 'head.php';?>
	<div class="container-fluid">
	<div class="dashboard-wrapper">
	<?php include 'navbar.php';?>	

	<?php
	$sql="SELECT * FROM lib_book_author WHERE tble_id='$_GET[id]' ";
	$result = mysqli_query($con, $sql);
	$row=mysqli_fetch_assoc($result);
	$value=$row["author_name"];
	$id=$_GET["id"];
	?>
	<div class="main-container">

	<div class="row-fluid">
		<div class="span8">
		    <div class="widget">
			<div class="widget-header">
			  <div class="title">
				<span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>Edit Author
			  </div>
			</div>
			<div class="widget-body">
			  <form action="update.php" method="post" enctype="multipart/form-data" class="form-horizontal no-margin" data-toggle="validator">
				<div class="control-group">
				  <label class="control-label">
					Author Name
				  </label>
				  <div class="controls controls-row">
					<input class="span12" type="text" name="name" value="<?php echo $value; ?>"/>
				  </div>
				</div>

                    <div class="form-actions no-margin">
					<a href="delete.php?id=<?php echo $id; ?>" ><button class="btn btn-danger pull-right" type="button">
                    Delete
					</button>
					</a>
                      <button type="submit" class="btn btn-info pull-right">
                        Save
                      </button>
                      <div class="clearfix">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

		</div>
	</div>
	</div>
	<?php include 'footer.php';?>
