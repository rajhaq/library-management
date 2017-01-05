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
				<span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>Sign up
			  </div>
			</div>
			<div class="widget-body">
			  <form action="form.php" method="post" enctype="multipart/form-data" class="form-horizontal no-margin" data-toggle="validator">
				<div class="control-group">
				  <label class="control-label">
					Name
				  </label>
				  <div class="controls controls-row">
					<input class="span12" type="text" name="name" placeholder="Name">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="email">
					Email ID
				  </label>
				  <div class="controls">
					<input type="text" name="email" id="email" class="span12" placeholder="Enter your Email Address"  data-error="Bruh, that email address is invalid" required/>
					<div class="help-block with-errors"></div>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="password5">
					Password
				  </label>
				  <div class="controls">
					<input type="password" name="password" id="password5" class="span12" placeholder="6 or more characters"  required/>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="mobile">
					Mobile
				  </label>
				  <div class="controls">
					<input type="text" name="mobile" id="mobile" class="span12" placeholder="Enter mobile number"  />
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="phone">
					Home Phone
				  </label>
				  <div class="controls">
					<input type="text" name="phone" id="phone" class="span12" placeholder="Enter home phone number"  />
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="address">
					Address
				  </label>
				  <div class="controls">
					<input type="text" name="address" id="address" class="span12" placeholder="Enter address"  />
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="sex">
					Sex
				  </label>
				  <div class="controls">
					<select class="span12" name="sex" id="sex">
					<option class="span12" value="1">Male</option>
					<option class="span12" value="2">Female</option>
					</select>
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="nid">
					NID
				  </label>
				  <div class="controls">
					<input type="text" name="nid" id="nid" class="span12" placeholder="Enter national id"  />
				  </div>
				</div>

				<div class="control-group">
				<label class="control-label" for="file">
					Picture
				  </label>
				<div class="controls">
					<input type="file" class="form-control-file span12" name="fileUpload" id="file" aria-describedby="fileHelp">
					<small id="fileHelp" class="form-text text-muted">MAX Size: 20MB</small>
				</div>				
				</div>

				<div class="control-group">
				  <label class="control-label" for="role">
					User role
				  </label>
				  <div class="controls">
					<select class="span12" name="role" id="role">
					<option class="span12" value="1">User</option>
					<option class="span12" value="2">Admin</option>
					</select>
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="notes">
					Notes
				  </label>
				  <div class="controls">
				  <textarea name="notes" class="input-block-level no-margin" style="height: 75px"></textarea>
				  </div>
				</div>

                    <div class="form-actions no-margin">
                      <button type="submit" class="btn btn-info pull-right">
                        Create Account
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
