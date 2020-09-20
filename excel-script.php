<?php
include  "config.php";
include_once  "common.php";

if($_FILES['excelDoc']['name']) {
    $arrFileName = explode('.', $_FILES['excelDoc']['name']);
    if ($arrFileName[1] == 'csv') {
        $handle = fopen($_FILES['excelDoc']['tmp_name'], "r");
        $count = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $count++;
            if ($count == 1) {
                continue; // skip the heading header of sheet
            }
                $SI_No = $connection->real_escape_string($data[0]);
                $Institution = $connection->real_escape_string($data[1]);
                $Type_of_Institution = $connection->real_escape_string($data[2]);
                $State = $connection->real_escape_string($data[3]);
                $Branch = $connection->real_escape_string($data[4]);
                $Quota = $connection->real_escape_string($data[5]);
                 $Category = $connection->real_escape_string($data[6]);
                $Gender = $connection->real_escape_string($data[7]);
                $Openning_Rank = $connection->real_escape_string($data[8]);
                $Closing_Rank = $connection->real_escape_string($data[9]);
                 $common = new Common();
                 $SheetUpload = $common->uploadData($connection,$SI_No,$Institution,$Type_of_Institution,$State,$Branch,$Quota,$Category,$Gender,$Openning_Rank,$Closing_Rank);
        }
        if ($SheetUpload){
            echo "<script>alert('Excel file has been uploaded successfully !');window.location.href='index.php';</script>";
        }
    }
}