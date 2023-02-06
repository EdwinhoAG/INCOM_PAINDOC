<?php

	session_start();

	if(isset($_SESSION['name'])){

    require_once "../processes/Btnsinit.php";

?>

<!DOCTYPE html>
<html>
<head>

	<title> PD Pain Review </title>
	<?php require_once "dependencies.php"; ?>
	
</head>

<body style="background-color: #F0F8FF;">

	<nav class="navbar navbar-light bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img src="../images/LogoPD.jpg" alt="" width="230" height="100" class="d-inline-block align-text-center">
        <b> Review </b>
      </a>
        <ul class="nav navbar-nav navbar-left">
            <li class="active"><a class="btn btn-danger" href="../index.php"> End Session </a>
        </ul>
    </div>
  </nav>

  <br>

    <div class="container-fluid">
     <figure style="margin:auto; background-color: #B0E0E6; border-color: #008B8B;" >
        <img src="../images/Body4.jpg" class="img-fluid"  alt="Body Reference Image"/>

            <?php if($btns[0][2]==1){ ?>
              <button id="bHeadR" name="bHeadR" class="sbtn pHeadR <?php echo $btns[0][3] ?>" >&#10003</button>
            <?php } ?>
            
            <?php if($btns[1][2]==1){ ?>
              <button id="bHeadL" name="bHeadL" class="sbtn pHeadL <?php echo $btns[1][3] ?>" >&#10003</button>
            <?php } ?>

            <?php if($btns[2][2]==1){ ?>
              <button id="bNeckR" name="bNeckR" class="sbtn pNeckR <?php echo $btns[2][3] ?>" >&#10003</button>
            <?php } ?>
            <?php if($btns[3][2]==1){ ?>
              <button id="bNeckL" name="bNeckL" class="sbtn pNeckL <?php echo $btns[3][3] ?>" >&#10003</button>
            <?php } ?>

            <?php if($btns[4][2]==1){ ?>
              <button id="bShouR" name="bShouR" class="sbtn pShouR <?php echo $btns[4][3] ?>">&#10003</button>
            <?php } ?>
            <?php if($btns[5][2]==1){ ?>
              <button id="bShouL" name="bShouL" class="sbtn pShouL <?php echo $btns[5][3] ?>">&#10003</button>
            <?php } ?>

            <?php if($btns[6][2]==1){ ?>
              <button id="bElbowR" name="bElbowR" class="sbtn pElbowR <?php echo $btns[6][3]  ?>">&#10003</button>
            <?php } ?>
            <?php if($btns[7][2]==1){ ?>
              <button id="bElbowL" name="bElbowL" class="sbtn pElbowL <?php echo $btns[7][3]  ?>">&#10003</button>
            <?php } ?>
              
            <?php if($btns[8][2]==1){ ?>
              <button id="bHandR" name="bHandR" class="sbtn pHandR <?php echo $btns[8][3] ?>">&#10003</button>
            <?php } ?>
            <?php if($btns[9][2]==1){ ?>
              <button id="bHandL" name="bHandL" class="sbtn pHandL <?php echo $btns[9][3] ?>">&#10003</button>
            <?php } ?>
            
            <?php if($btns[10][2]==1){ ?>
              <button id="bFingersR" name="bFingerR" class="sbtn pFingerR <?php echo $btns[10][3] ?>">&#10003</button>
            <?php } ?>
            <?php if($btns[11][2]==1){ ?>
              <button id="bFingersL" name="bFingerL" class="sbtn pFingerL <?php echo $btns[11][3] ?>">&#10003</button>
            <?php } ?>
            
            <?php if($btns[12][2]==1){ ?>
              <button id="bHipR" name="bHipR" class="sbtn pHipR <?php echo $btns[12][3] ?>">&#10003</button>
            <?php } ?>
            <?php if($btns[13][2]==1){ ?>
              <button id="bHipL" name="bHipL" class="sbtn pHipL <?php echo $btns[13][3] ?>">&#10003</button>
            <?php } ?>
            
            <?php if($btns[14][2]==1){ ?>
              <button id="bKneeR" name="bKneeR" class="sbtn pKneeR <?php echo $btns[14][3] ?>">&#10003</button>
            <?php } ?>
            <?php if($btns[15][2]==1){ ?>
              <button id="bKneeL" name="bKneeL" class="sbtn pKneeL <?php echo $btns[15][3] ?>">&#10003</button>
            <?php } ?>
            
            <?php if($btns[16][2]==1){ ?>
              <button id="bAnkleR" name="bAnkleR" class="sbtn pAnkleR <?php echo $btns[16][3] ?>">&#10003</button>
            <?php } ?>
            <?php if($btns[17][2]==1){ ?>
              <button id="bAnkleL" name="bAnkleL" class="sbtn pAnkleL <?php echo $btns[17][3] ?>">&#10003</button>
            <?php } ?>
            
            <?php if($btns[18][2]==1){ ?>
              <button id="bFootR" name="bFootR" class="sbtn pFootR <?php echo $btns[18][3] ?>">&#10003</button>
            <?php } ?>
            <?php if($btns[19][2]==1){ ?>
              <button id="bFootL" name="bFootL" class="sbtn pFootL <?php echo $btns[19][3] ?>">&#10003</button>
            <?php } ?>

            <?php if($btns[20][2]==1){ ?>
              <button id="bToesR" name="bToeR" class="sbtn pToeR <?php echo $btns[20][3] ?>">&#10003</button>
            <?php } ?>
            <?php if($btns[21][2]==1){ ?>
              <button id="bToesL" name="bToeL" class="sbtn pToeL <?php echo $btns[21][3] ?>">&#10003</button>
            <?php } ?>

      </figure>
    </div>

  <hr>

  <footer class="footer">
    <p> Student: Edwin Sebna Albarrán García </p>
    <p>INCOM Proyect UAEMéx-DIT Winter 2022-2023</p>
  </footer>

</body>
</html>


<script type="text/javascript">
  

</script>

<?php 
	
	}else{
			header("location:../index.php");
	}

?>