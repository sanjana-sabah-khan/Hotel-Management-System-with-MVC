<!doctype html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/stylesheet1.css">
        <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/style_service.css">
        <link rel="stylesheet" href=" <?php echo URLROOT ?>/public/css/contact.css">
      
<!-- ADDITIONAL STYLESHEET HERE -->
        
        <title>Forum - RTH</title>
    </head>
    
    
    
    <body>
        
<!-- ALL OF YOUR SITE CODE HERE -->
        
        <div class="container-fluid">
      
       
<!-- NAVIGATION BAR -->
            
            
            <?php
                
                require APPROOT . '/views/navigationBar.php';
    
            ?>
            
            
            
<!-- FORUM IMAGE -->
            
          <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12 p-0">
                    
                    <div class="hero_section_forum"> </div>
                
                </div>
            </div>
            
            
<!-- LOGO -->
            
            <div class="row">
                <div class="col-md-12 p-0">
                    
                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src=" <?php echo URLROOT ?>/public/images/Royal_Tulip_Hotel_Logo.png" alt="Card image cap">
                    </div>
                
                </div>
            </div>
          
          
<!-- ABOUT SECTION -->
            
            <div class="row">
                <div class="offset-md-1 col-md-10 p-0">
                    
                    <div class="about_us_forum">
                        <h1> QUESTION / ANSWER FORUM </h1>
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nunc lacus, pretium vitae rhoncus elementum, eleifend quis sem. Cras vel tincidunt risus, viverra consequat felis.
                        </p>
                    </div>
                
                </div>
            </div>
                    
            
<!-- FORUM SECTION -->
            
            <div class="row">
                <div class="offset-2 col-md-8">
                    
                    <div class="container-fluid mx-4" style="margin-bottom: 80px;">
                        
   <!-- forum_action.php is for the php part done for forum -->
                                              
                        <form action= " <?php echo URLROOT ?>/Forums/send" method="POST">      
                                      
   <!-- NAME -->
                            
                            <div class="form-group row">
                                <label for= "name" class="col-sm-3 col-form-label">Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="forum_name" placeholder="Enter Name..." required>
                                </div>
                            </div>
                            
   <!-- ASK QUESTIONS -->                            
                            
                            <div class="form-group row">
                                <label for="message" class="col-sm-3 col-form-label">Ask Questions:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="message" name="forum_message" rows="6" placeholder= "Any Questions?" required>
                                </div>
                            </div>
                            
   <!-- BUTTONS -->                            
                            
                            <div class="row">
                                <div class="col-sm-9 offset-sm-3">
                                    
                                    <button name="forum_submit" type="submit" class="btn btn-primary"> Send Message </button>
                                                                       
                                </div>
                            </div>
                        
                        
                        </form>
                    
                    </div>
                    
                </div>
            </div>
            
            
<!-- FORUM DISPLAY SECTION -->
            
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    
                    
                        <table class="table">
                        
                            <thead>
                                <tr>
                                    <th> User Name </th>
                                    <th> User Message </th>
                                    <th> Reply from Admin </th>
                                </tr>
                            </thead>      
                            
                            
                    <?php 

                        foreach($data['forums'] as $forum):
        
                    ?>    
                            
                            <tr>
                                <td><b> <?php echo $forum->forum_name; ?> </b></td> 
                                <td> <?php echo $forum->forum_message; ?> </td>
                                <td>&nbsp;&nbsp;&nbsp; <?php echo $forum->forum_admin_reply; ?> </td>
                            </tr>
                            
                    <?php
                            
                        endforeach;
                    ?>

                        </table>


                </div>
            </div>

            <br>
            <br>
            <br>
            
            
<!--FOOTER-->
            
            
            <?php
                
                require APPROOT . '/views/footer.php';
    
            ?>
            
            

        </div>       
        
<!-- ALL OF YOUR SITE CODE HERE -->
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
<!-- ADDITIONAL JS HERE -->
    
    </body>
    
</html>