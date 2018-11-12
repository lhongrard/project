<?php
// $target_dir = "./uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["img"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
        $target_dir = "./uploads/images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "ขออภัย มีไฟล์นี้ในระบบแล้ว";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "ขออภัย ขนาดไฟล์ของท่านใหญ่เกินไป";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "ขออภัย ไม่สามารถอัพโหลดไฟล์นอกเหนือจาก JPG, JPEG, PNG และ GIF ได้";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "ขออภัย ไฟล์ของท่านอัพโหลดไม่สำเร็จ";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "ขออภัย มีปัญหาเกิดขึ้นขฯะทำการอัพโหลดไฟล์ของท่าน";
            }
        }

        // if (isset($_FILES['fileToUpload'])){
        //     pre_r($_FILES);
        //     move_uploaded_file($_FILES['fileToUpload']['tmp_name'], './uploads/images/'.$_FILES['fileToUpload']['name']); 
            
        //     }       
        // function pre_r($array){
        //     echo '<pre>';
        //     print_r($array);
        //     echo '</pre>';

?>

<!DOCTYPE html>
<html>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>