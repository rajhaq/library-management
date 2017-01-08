 <?php include 'header.php';?>
	<?php include 'head.php';?>
	<div class="container-fluid">
	<div class="dashboard-wrapper">
	<?php include 'navbar.php';?>	

	<div class="main-container">

	<div class="row-fluid">
		<div class="span8">
		    <div class="widget">
			<div class="widget-header">
			  <div class="title">
				<span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>Add Author
			  </div>
			</div>
			<div class="widget-body">
			  <form action="newauthor.php" method="post" enctype="multipart/form-data" class="form-horizontal no-margin" data-toggle="validator">
				<div class="control-group">
				  <label class="control-label">
					Author Name
				  </label>
				  <div class="controls controls-row">
					<input class="span12" type="text" name="name" placeholder="Name" required/>
				  </div>
				</div>

                    <div class="form-actions no-margin">
                      <button type="submit" class="btn btn-info pull-right">
                        Add
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
