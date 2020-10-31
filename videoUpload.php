<?php
if(isset($_FILES['file'])) {
    //specifying the supported file extension
    $validextensions=['mp4','avi','3gp'];
    $ext=explode('.',basename($_FILES['file']['name']));
    //explode file name from dot(.)
    $file_extension=end($ext);
    //generate Name for the video;
    $videoName="video_".rand(100000,900000).".".$file_extension;
    $target_path=$videoName;
    $filesize= 5000000;
    if(($_FILES['file']['size'] <= $filesize) and in_array($file_extension,$validextensions)) {
        if(move_uploaded_file($_FILES['file']['tmp_name'],"videos/".$videoName)) {
            echo "Video successfully uploaded";
        }
    } else{
        echo "File,not valid!!";
    }

} else{
    echo "error";
}

?>

<html>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="file"/>
            <input type="submit"/>
        </form>
    </body>
</html>