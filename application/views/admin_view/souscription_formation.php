<!DOCTYPE html>
<html>
<body style="background-image: url('unique9.jpg'); background-repeat: no-repeat; background-position:center; background-size: 100%;">
	<div class="row"><br>
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4"  style="width:55%; left:0%;">
        <? if($souscription): ?>
        <?php foreach($souscription as $value):?>
        <div class="login-panel panel panel-default" style="width:100%;">
            <div class="profile-userpic">
				<img src="<?php echo base_url('assets/images/3.jpg');?>" class="img-responsive" alt="image">
			</div>
            <div class="panel-body">
				<div class="panel-heading"><?php echo $value->nom_user;?></div>
				<div class="panel-body">
                    <b>
                        <h5><a href="mailto:<?php echo $value->adresse_user;?>"><?php echo $value->adresse_user;?></a>/<?php echo $value->telephone_user;?></h5>
                        <h3><?php echo"   Formation:             ".$value->titre_formation?></h3>
                    </b>
                    <hr>
                    <a href="<?php echo base_url('index.php/mfo_admin/delete_souscription/').$value->id_user;?>">
                        <img src="<?php echo base_url('assets/images/sup1.png');?>" width="4%">
                    </a>
				</div>
			</div>
        </div>
        <?php endforeach?>
        <?php else:?>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><b><h1 style="text-align:center;">aucune Souscription!  <img src="<?php echo base_url('assets/images/M.F.png');?>" width="10%"></h1>
        <?php endif?>
	</div>
</body>
</html>
