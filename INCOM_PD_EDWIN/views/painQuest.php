<?php

	session_start();

	if(isset($_SESSION['name'])){

  require_once "../class/pdconnect.php";

  $n=22; /* # bodysites */

  $bodySite = $_SESSION['bodySite'];
  $side = $_SESSION['side'];
  $btns = $_SESSION['btns'];
  $k=2;
  $JE=0;
  for ($a=0; $a < $n; $a++) {
  if ($btns[$a][0]==$bodySite && $btns[$a][1]==$side){
    $JE = $a;
    };
  };
  $k=$btns[$JE][2];

?>

<!DOCTYPE html>
<html>
<head>

	<title> PD Pain Questionnarie </title>
	<?php require_once "dependencies.php"; ?>
  <link rel="stylesheet" type="text/css" href="../css/painQuest.css">
	

</head>
<body style="background-color: #F0F8FF;">

	<nav class="navbar navbar-light bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img src="../images/LogoPD.jpg" alt="1-10 Scale Image" width="230" height="100" class="d-inline-block align-text-center">
        <b> Body Part Pain Questionnarie </b>
      </a>
        <ul class="nav navbar-nav navbar-left">
            <li class="active"><a class="btn btn-secondary" href="painSelect.php"> < Change Body Part </a>
        </ul>
    </div>
  </nav>

  <br>

<! PAIN QUESTIONNARIE TITLE >
<div class="container"; >
  <table class="table" style="text-align: center;">
    <thead>
      <tr>
        <td> <h6> Patient: </h6> <h4> <?php echo $_SESSION['name']; ?> </h4> </td>
        <td> <h6> Body Part: </h6> <h4> <?php echo "$bodySite"; ?> </h4> </td>
        <td> <h6> Side: </h6> <h4> <?php echo "$side"; ?> </h4> </td>
      </tr>
    </thead>
  </table>
</div>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" >

  <div class="container" >
    <div class="row">
      <div class="col-sm-5" >  <!-- SLIDER - painful ---------------------------------------------> 
        <legend><p><h5>Select Pain Intensity:</h5></p></legend>

        <table class="table" style="text-align: center;">
          <thead>
            <tr>
              <td> 
                <img src="../images/PainDScale.png" width="230" height="60" /> 
              </td>
            </tr>
            <tr>
              <td>
                <div class="rangeslider">
                  <input type="range" name=painful min="1" max="10" value="1" class="myslider" id="sliderRange"> 
                  <p>Value: <span id="demo"></span></p>
                </div>
              </td>
            </tr>
          </thead>
        </table>
      </div>
      <div class="col-sm-2" >  <!-- PERIOD - period -------------------------------------------->  
        <legend><p><h5>Since when?</h5></p></legend>
        <table class="table table-hover table-condensed" style="text-align: center;">
          <thead>
            <tr>
              <td> 
                <p><input type="text" name="period1" size="3" placeholder="#" /></p>
              </td>
              <td>
                <p> <select name="period2" >
                  <option>day</option>
                  <option>week</option>
                  <option>month</option>
                </select> </p>
              </td>
            </tr>
          </thead>
        </table>
      </div>
      <div class="col-sm-5" > <!-- WHAT TIME A DAY - dayTime ---------------------------------->
        <legend><p><h5>At which time of the day?</h5></p></legend>
        <table class="table table-hover table-condensed" style="text-align: center;">
          <thead>
            <tr>
              <td>
                <p> <input type="checkbox" name="dayTime[]" value="Morning"/> Morning </p>
                <p><img src="../images/morning.jpg" width="60" height="60"/></p>
                <p><input type="checkbox" name="dayTime[]" value="Evening"/> Evening </p> 
                <p><img src="../images/evening.jpg" width="60" height="60"/></p>
              </td>
              <td> 
                <p><input type="checkbox" name="dayTime[]" value="Lunch"/> Lunch </p>
                <p><img src="../images/lunch.jpg" width="60" height="60"/></p>
                <p><input type="checkbox" name="dayTime[]" value="Night"/> Night </p> 
                <p><img src="../images/night.jpg" width="60" height="60"/></p>
              </td>
              <td> 
                <p><input type="checkbox" name="dayTime[]" value="Afternoon"/> Afternoon </p>
                <p><img src="../images/afternoon.jpg" width="60" height="60"/></p>
                <p><input type="checkbox" name="dayTime[]" value="The whole day"/> The whole day </p>
                <p><img src="../images/day.jpg" width="60" height="60"/></p>
              </td>
            </tr>
          </thead>
        </table>  
      </div>
    </div>
  </div>

  <div class="container" >
    <div class="row"> 

      <div class="col-sm-4" >  <!-- PAIN INTERVALL - intervall --------------------------------->
        <legend><p><h5>How is the Pain Intervall?</h5></p></legend>
        <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
          <thead>
            <tr>
              <td> 
                <img src="../images/Constant pain with slight fluctuations.png" width="80" height="80"/>        
              </td>
              <td> 
                <p><input type="radio" name="intervall" value="Constant pain with slight fluctuations"/> 
                Constant pain with slight fluctuations </p>
              </td>
            </tr>
            <tr>
              <td>
                <img src="../images/Constant pain with strong fluctuations.png" width="80" height="80"/>
              </td>
              <td>
                <p> <input type="radio" name="intervall" value="Constant pain with strong fluctuations"/>
                Constant pain with strong fluctuations </p>
              </td>
            </tr>
            <tr>
              <td>
                <img src="../images/Pain attacks, painless in between.png" width="80" height="80"/>
              </td>
              <td>
                <p><input type="radio" name="intervall" value="Pain attacks, painless in between"/>
                Pain attacks, painless in between</p>
              </td>
            </tr>
            <tr>
              <td>
                <img src="../images/Pain attacks, also between.png" width="80" height="80"/>
              </td>
              <td>
                <p><input type="radio" name="intervall" value="Pain attacks, also between"/>
                Pain attacks, also between</p>
              </td>
            </tr>
          </thead>
        </table>
      </div>

      <div class="col-sm-3" > <!-- KIND OF PAIN - kind ---------------------------------------->
        <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
          <legend><p><h5>Kind of pain:</h5></p></legend>
          <thead>
            <tr>
              <td> 
                <p><input type="checkbox" name="kind[]" value="Dull"/> Dull </p>
                <p><input type="checkbox" name="kind[]" value="Pungent"/> Pungent  </p>
                <p><input type="checkbox" name="kind[]" value="Oppressive"/> Oppressive  </p>
                <p><input type="checkbox" name="kind[]" value="Pulling"/> Pulling </p> 
                <p><input type="checkbox" name="kind[]" value="Throbbing"/> Throbbing </p>
                <p><input type="checkbox" name="kind[]" value="Hot"/> Hot </p>
                <p><input type="checkbox" name="kind[]" value="Knocking"/> Knocking </p>
                <p><input type="checkbox" name="kind[]" value="Burning"/> Burning </p>
              </td>
            </tr>
          </thead>
        </table>
      </div>

      <div class="col-sm-5" > <!-- IMPAIRMENT - impairment ---------------------------------------->
        <legend><p><h5> Do you have any impairments in daily activities? </h5></p></legend>
        <table class="table table-hover table-condensed " style="text-align: center;">
          <thead>
            <tr>
              <td> 
                <p><input type="checkbox" name="impairment[]" value="Sitting"/> &#129681 Sitting </p>
                <p><input type="checkbox" name="impairment[]" value="Eating"/> &#129385 Eating </p>
                <p><input type="checkbox" name="impairment[]" value="Cooking"/> &#127859 Cooking </p>
                <p><input type="checkbox" name="impairment[]" value="Walking"/> &#128694 Walking </p>
                <p><input type="checkbox" name="impairment[]" value="Car driving"/> &#128663 Car driving </p>
                <p><input type="checkbox" name="impairment[]" value="Gardening"/> &#127799 Gardening </p>
                <p><input type="checkbox" name="impairment[]" value="Lifting things"/> &#128230 Lifting things </p>
              </td>
              <td>
                <p><input type="checkbox" name="impairment[]" value="Shopping"/> &#128717 Shopping </p>
                <p><input type="checkbox" name="impairment[]" value="Laundry"/> &#129530 Laundry </p>
                <p><input type="checkbox" name="impairment[]" value="Cycling"/> &#128692 Cycling </p>
                <p><input type="checkbox" name="impairment[]" value="Running"/> &#127939 Running </p>
                <p><input type="checkbox" name="impairment[]" value="Swimming"/> &#127946 Swimming </p>
                <p><input type="checkbox" name="impairment[]" value="Work"/> &#128188 Working </p>
                <p><input type="checkbox" name="impairment[]" value="Long standing"/> &#129485 Long standing </p>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <p> Other: <input type="text" name="impairment[]" size="20"/> </p>
              </td>
            </tr>
          </thead>
        </table>
      </div>

    </div>
  </div>

  <div class="container" >
    <div class="row"> 

      <div class="col-sm-6" > <!-- ¿USE OF PAINKILLERS? - painkillers ----------------------------->
        <table class="table table-hover table-condensed" style="text-align: center;">
          <legend><p><h5>Did you take painkillers because of this pain?</h5></p></legend>
          <thead>
            <tr>
              <td> 
                <p><input type="radio" name="painkillers" value="yes"/> &#128138 Yes </p>
              </td>
              <td> 
                <p><input type="radio" name="painkillers" value="no"/> &#10060 No </p>
              </td>
            </tr>
          </thead>
        </table>
      </div>

      <div class="col-sm-6" > <!-- SAVE BTN -------------------------------------------------------->
        <table class="table table-hover table-condensed" style="text-align: center;">
          <legend><p><h5> Save your <?php echo $bodySite." ".$side; ?> pain information </h5></p></legend>
          <thead>
            <tr>
              <td> 
                <button type="submit" class="btn btn-primary btn-lg" id="SaveOB" name="SaveOB"/> Confirm and Save </button>
              </td>
            </tr>
          </thead>
        </table>
      </div> 

    </div>
  </div>

</form>


<?php if(isset($_POST['SaveOB'])){ ?>

  <! RECIBE SPECIFIC PAIN DATA >

  <! CHECK AND SEND PAIN DATA TO `paindocalldata` DATABASE >
    <?php
      if( empty($_POST['painful']) || empty($_POST['period1']) || empty($_POST['dayTime']) || empty($_POST['period2']) || empty($_POST['painkillers']) || empty($_POST['kind']) || empty($_POST['intervall']) ) { 
      ?>
        <script type="text/JavaScript">
            alertify.alert('ALL information is required');
            location.assign(painQuest.php);
        </script>";

    <?php } else { ?>

      <?php
        /* Form SESSION variables */
        $name = $_SESSION['name'];
        $OB = $_SESSION['OB'];

        /* Form POST variables*/
        $painful = $_POST['painful'];
        $period = $_POST['period1']." ".$_POST['period2'];

        $dayTime = $_POST['dayTime'];
        $N1 = count($dayTime);
        $AlldayTime = "";
        for($i=0; $i < $N1; $i++) { 
          $AlldayTime = $AlldayTime.$dayTime[$i].", "; 
        };

        $intervall = $_POST['intervall'];

        $kind = $_POST['kind'];
        $N2 = count($kind);
        $Allkind = "";
        for($i=0; $i < $N2; $i++) {
          $Allkind = $Allkind.$kind[$i].", ";
        };

        $impairment = $_POST['impairment'];
        $N3 = count($impairment);
        $Allimpairment = "";
        for($i=0; $i < $N3; $i++) {
          $Allimpairment = $Allimpairment.$impairment[$i].", ";
        };

        $painkillers = $_POST['painkillers'];
    ?>

      <?php
        if($k==1){  
      ?>

        <! UPDATE PAIN DATA IN DB 'paindocalldata' - PHP SERVER>

          <?php
            $c=new connect();
            $connection=$c->con();
            $toUP_data = "UPDATE  paindocdata SET painful='$painful', period='$period', dayTime='$AlldayTime', intervall='$intervall', kind='$Allkind', impairment='$Allimpairment', painkillers='$painkillers' WHERE `OB`='$OB' AND `bodySite`='$bodySite' AND `side`='$side' ";
            $R2 = mysqli_query($connection, $toUP_data);
          ?>

      <?php } else { ?>

        <! SEND PAIN DATA TO DB 'paindocalldata' - PHP SERVER>
          <?php
            $c=new connect();
            $connection=$c->con();
            $to_data = "INSERT INTO  paindocdata (OB, name, side, bodySite, painful, period, dayTime, intervall, kind, impairment, painkillers) VALUES ('$OB', '$name', '$side', '$bodySite', '$painful', '$period', '$AlldayTime', '$intervall', '$Allkind', '$Allimpairment', '$painkillers')";
            $R1 = mysqli_query($connection, $to_data);
            $btns[$JE][2] = 1;
          ?>

          <?php } ?>

    <! CHANGE COLOR OF THE BUTTON >

      <?php 

        $EJ=0;
        for ($b=0; $b < $n; $b++) {
        if ($btns[$b][0]==$bodySite && $btns[$b][1]==$side){
            $EJ = $b;
          };
        };
        $btns[$EJ][3]="PD".$painful;
        $_SESSION['btns']=$btns;
        $_SESSION['L']=1;

      ?>  
    <! RELOAD PAGE >
      <script type="text/javascript"> 
       location.href = "painSelect.php"; 
     </script> 

    <?php }; ?>

  <?php }; ?>

<hr>

<footer class="footer" >
  <p> Student: Edwin Sebna Albarrán García</p>
  <p>INCOM Proyect UAEMéx-DIT Winter 2022-2023 </p>
</footer>

</body>
</html>

  <script>
  // Script Slider -------------------------------------------------------- 
    var rangeslider = document.getElementById("sliderRange");
    var output = document.getElementById("demo");
    output.innerHTML = rangeslider.value;
      
    rangeslider.oninput = function() { output.innerHTML = this.value; }  

  </script>

<?php 
	
	} else {
			header("location:../index.php");
	};

?>