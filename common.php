<?php
class common
{
  public function uploadData($connection,$SI_No,$Institution,$Type_of_Institution,$State,$Branch,$Quota,$Category,$Gender,$Openning_Rank,$Closing_Rank)
  {
    $mainQuery = "INSERT INTO  raw_data SET SI_No='$SI_No',Institution='$Institution',Type_of_Institution='$Type_of_Institution',State='$State',Branch='$Branch',Quota='$Quota',Category='$Category',Gender='$Gender',Openning_Rank='$Openning_Rank',Closing_Rank='$Closing_Rank'";
      $result1 = $connection->query($mainQuery) ;
      return $result1;

   }
}
