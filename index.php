<!DOCTYPE html>
        <html>
             <head> <!--initiating base for webpage-->
                 <meta charset="utf-8">
                 <meta name = "viewport" content = "width=device-width, initial-scale=1">

                 <!--declaring webpage name-->
                 <title> 
                     PDF to Text File Converter
                 </title>

             </head>
                  <!--referencing css and bootstrap for fonts and icons-->
                  <link rel = "stylesheet" href= "style.css" >
                  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

             <body>

                  <!--declaring webpage title-->
                  <h1 id="main">
                       ⤜ PDFlick ⤛
                  </h1>
                
                  <!--creating box for upload,convert and download-->
                  <div class="box" id="body">  
                       <b> Let your PDF file sneak in here ! </b>
                  <div class="border"> 
                        
                  <div><p>  
                        <!--create input file button-->                
                        <form method="POST" action="upload.php" enctype="multipart/form-data">
                        <input type="file" name="userfile" id="upload.php" class="upload">
                  <p>
                        <!--create convert button-->   
                        <button type="submit" class="btn" name="submit">
                            <span class = "btn__text"> CONVERT </span>
                            <span class = "btn__icon"><i class="fa fa-exchange" aria-hidden="true"></i></span>
                        </button>
                    
                        <!--downloading process after being converted-->  
                        <?php
                            $uploadedFiles=scandir("uploads");
                            $convertedFiles=scandir("converted");
                    
                            for($a=2;$a<count($uploadedFiles);$a++)
                            {
                                ?>
                                <p><!--create download button-->  
                                <a href="converted/<?php echo $convertedFiles[$a]?>" download= "<?php echo $convertedFiles[$a];?>" class = "dw_btn">
                                    <span class = "dw__text"><b> DOWNLOAD </b></span>
                                    <span class = "dw__icon"><i class="fa fa-cloud-download" aria-hidden="true"></i></span>
                                    </a>
                                <?php
                            }
                                ?>

                        <?php

                        //After sending the text file to server, delete files from the folder
                        //The name of the folder.
    
                        $targetedFolder = 'uploads';

                        //Get a list of all of the file names in the folder.
                        $filesToDelete = glob($targetedFolder . '/*');

                        //Loop through the file list.
                        foreach($filesToDelete as $file){
                        //Make sure that this is a file and not a directory.
                        if(is_file($file)){
                        //Use the unlink function to delete the file.
                        unlink($file); }}   
                        
                        ?>

                  </p></div></div></div>
                  
                  <p>
                  <!--Steps to Convert Section-->  
                  <h1 id="main" style= "font-size: 40px"> 
                        ࿐ Steps to convert ࿐
                  </h1>

                  </p>
                  <!--Form boxes to explain every steps to convert a file-->  
                  <!--Upload Step--> 
                  <p><div class="container">
                        <div class = "box1"> <div class = "icon"><i class="fa fa-upload" aria-hidden="true"></i></div>
                            <div class = "content"> 
                                <h3>Upload</h3>
                                <p>Upload or drag your PDF file into the box</p>
                            </div>
                        </div>
            
                        <!--Convert Step--> 
                        <div class = "box1"> <div class = "icon"><i class="fa fa-exchange" aria-hidden="true"></i></div>
                            <div class = "content">
                                <h3>Convert</h3>
                                <p>Click 'convert' to do the magic</p>
                            </div>
                        </div>

                        <!--Waiting Step--> 
                        <div class = "box1"> <div class = "icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                            <div class = "content">
                                <h3>Relax</h3>
                                <p>Wait a bit for us to convert</p>
                            </div>
                        </div>

                        <!--Download Step--> 
                        <div class = "box1"> <div class = "icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                            <div class = "content">
                                <h3>Download</h3>
                                <p>All set, click the link to download the text file</p>
                            </div>
                        </div>
              
                 </div></p>

            </body>

        </html>

