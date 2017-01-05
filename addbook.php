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
				<span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>Add book
			  </div>
			</div>
			<div class="widget-body">
			  <form action="newbook.php" method="post" enctype="multipart/form-data" class="form-horizontal no-margin" data-toggle="validator">
				<div class="control-group">
				  <label class="control-label">
					Book Name
				  </label>
				  <div class="controls controls-row">
					<input class="span12" type="text" name="book_name" placeholder="Name" required/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="author_name">
					Author
				  </label>
				  <div class="controls">
					<input type="text" name="author_name" id="author_name" class="span12" placeholder=""  required/>
					<div class="help-block with-errors"></div>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="publish_year">
					Publish year
				  </label>
				  <div class="controls">
					<input type="number" name="publish_year" id="publish_year" class="span12" placeholder="ex: 1996" >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="price">
					Price
				  </label>
				  <div class="controls">
					<input type="number" name="price" id="price" class="span12" placeholder="" >
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="shelf_row">
					Shelf row
				  </label>
				  <div class="controls">
					<input type="text" name="shelf_row" id="shelf_row" class="span12" placeholder=""  />
				  </div>
				</div>
				


				
				
				<div class="control-group">
				  <label class="control-label" for="shelf_column">
					Shelf column
				  </label>
				  <div class="controls">
					<input type="text" name="shelf_column" id="shelf_column" class="span12" placeholder=""  />
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="stock">
					Book stock
				  </label>
				  <div class="controls">
					<input type="text" name="stock" id="stock" class="span12" placeholder=""  />
				  </div>
				</div>

				<div class="control-group">
				<label class="control-label" for="file">
					Cover
				  </label>
				<div class="controls">
					<input type="file" class="form-control-file span12" name="fileUpload" id="file" aria-describedby="fileHelp">
					<small id="fileHelp" class="form-text text-muted">MAX Size: 20MB</small>
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
