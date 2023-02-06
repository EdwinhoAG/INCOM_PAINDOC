<?php

    $L=$_SESSION['L'];
 if($L == 0){
    $_SESSION['btns']=array(
        array("Head", "R", 0, "PD0"),
        array("Head", "L", 0, "PD0"),
        array("Neck", "R", 0, "PD0"),
        array("Neck", "L", 0, "PD0"),
        array("Shoulder", "R", 0, "PD0"),
        array("Shoulder", "L", 0, "PD0"),
        array("Elbow", "R", 0, "PD0"),
        array("Elbow", "L", 0, "PD0"),
        array("Hand", "R", 0, "PD0"),
        array("Hand", "L", 0, "PD0"),
        array("Fingers", "R", 0, "PD0"),
        array("Fingers", "L", 0, "PD0"),
        array("Hip", "R", 0, "PD0"),
        array("Hip", "L", 0, "PD0"),
        array("Knee", "R", 0, "PD0"),
        array("Knee", "L", 0, "PD0"),
        array("Ankle", "R", 0, "PD0"),
        array("Ankle", "L", 0, "PD0"),
        array("Foot", "R", 0, "PD0"),
        array("Foot", "L", 0, "PD0"),
        array("Toes", "R", 0, "PD0"),
        array("Toes", "L", 0, "PD0"),
    );

    $btns = $_SESSION['btns'];

} else {

    $btns = $_SESSION['btns'];    

}
  

?>