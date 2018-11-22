<!DOCTYPE html>
<html>
<body style="background-image: url('unique9.jpg'); background-repeat: no-repeat; background-position:center; background-size: 100%;">
	<div class="row"><br>
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4"  style="width:55%; left:0%;">
			<div class="login-panel panel panel-default" style="width:100%;">
				<div class="panel-heading">Login admin </div>
				<div class="panel-body">
                <?php echo form_open_multipart('index.php/mfo_admin/Login_In');?>
                    <div class="form-group">
                        <div class="input-group"  style="width:60%;">
                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                <input type="text" class="form-control" placeholder="entrez votre login" name="login">
                            </div>
                        </div>
                        <div class="input-group"  style="width:60%;">
                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                <input type="text" class="form-control" placeholder="entrez votre mot de passe" name="password">
                            </div>
                        </div>
                        <fieldset><button class="btn btn-primary">Publier</button></fieldset>
                    </div>
					<?php echo form_close();?>
                    
				</div>
			</div>
		</div>
	</div>
</body>
</html>
