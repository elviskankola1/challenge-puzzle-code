<!DOCTYPE html>
<html>
<body style="background-image: url('unique9.jpg'); background-repeat: no-repeat; background-position:center; background-size: 100%;">
	<div class="row"><br>
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4"  style="width:55%; left:0%;">
			<div class="login-panel panel panel-default" style="width:100%;">
				<div class="panel-heading">Formulaire d'ajout</div>
				<div class="panel-body">
					<?php echo form_open();?>
                    <div class="form-group">
                                    <div class="input-group"  style="width:60%;">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input type="text" class="form-control" placeholder="entez un titre" name="titre">
                                    </div>
                                </div>
                             
                                <input type="file" name="userfile" width="50%"><br>
                                <div class="form-group" >
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <textarea cols="65" rows="5" placeholder="  entrez la description" width="100%" name="description"></textarea>
                                    </div>
                                </div>
							<a href="" class="btn btn-primary">Publier</a></fieldset>
					<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
