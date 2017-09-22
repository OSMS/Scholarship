<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FindScholar</title>

    <!-- Bootstrap -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet" />   
    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
 

<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog" style="min-width: 800px;min-height:300px;">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="">x</span></a>
                <h3 class="modal-title">Scholarship Info</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 product_img">
                        <img src="assets/images/portfolio/recent/item2.png" style="border: 1px solid gray;border-radius: 10px;" class="img-responsive">
                    </div>
                    <div class="col-md-8 product_content">

                        <h5><strong>Name  &nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp </strong> <span>51526</span></h5>
                        <h5><strong>Location : &nbsp</strong> <span>51526 </span></h5>
                        <h5><strong>Contact &nbsp&nbsp: &nbsp</strong> <span>51526</span></h5>
                        <h5><strong>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp</strong> <span>51526</span></h5>
                        
                        <div class="btn-ground">
                            <button type="button" class="btn btn-primary btn-xs"> Apply</button>
                            <button type="button" class="btn btn-primary btn-xs"> Visit Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    <header>       
        <?php
            require 'nav.php';
        ?>  
    </header>
    
    <div id="breadcrumb">
        <div class="container"> 
            <div class="breadcrumb">                            
                <li></li>           
            </div>  
        </div>  
    </div>
    
    <section id="portfolio" style="min-height: 700px; margin-top: 60px;">   
        <div class="col-md-8 col-md-offset-2" style="padding-top: 20px;padding-bottom: 5px;border: 1px solid #CCC;margin-bottom: 20px;text-align: center;color: #000; box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);">
            <img src="" width="200px" height="200px"/>
            <h1 class="page-header">Program Name</h1>
         </div>
           <div class="col-md-8 col-md-offset-2" style="border-color: 1px solid #CCC;min-height: 300px;margin-bottom: 40px;box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);">
            <h3 class="page-header"><strong>Description</strong></h3>
            <ul style="list-style: none; color: #000;">
                <li><h4><strong>Sponsor : <strong></h4></li>
                <li><h4><strong>Location : <strong></h4></li>
                <li><h4><strong>Grant : <strong></h4></li>
                <li><h4><strong>Status: <strong><button type="button" class="btn btn-success">Open</button></h4></li>
            </ul>
            <button class='btn btn-link btn-md pull-right' onclick='display()'>Edit</button>
            </div>

            <div class="col-md-8 col-md-offset-2" style="border-color: 1px solid #CCC;min-height: 300px;margin-bottom: 40px;box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);">
            <h3 class="page-header"><strong>Requirements</strong></h3>
            <ul style="list-style: none; color: #000;">
                <li><h4><strong>Requirements 1:<strong></h4></li>
                <li><h4><strong>Requirements 2:<strong></h4></li>
                <li><h4><strong>Requirements 3:<strong></h4></li>
                <li><h4><strong>Requirements 4:<strong></h4></li>
            </ul>
            <button class='btn btn-link btn-md pull-right' onclick='display()'>Edit</button>
            </div>
    </section><!--/#portfolio-item-->
    

    <footer style="margin-top: 30px;padding: 0px;" class="col-md-12">
        <div class="footer">
            <div class="container">
                <div class="social-icon">
                    <div class="col-md-4">
                        <ul class="social-network">
                        
                        </ul>   
                    </div>
                </div>
                
                <div class="col-md-4 col-md-offset-4">
                    
                </div>                      
            </div>
            <div class="pull-right">
                <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
            </div>
        </div>
    </footer>
    
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-2.1.1.min.js"></script>   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>  
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/functions.js"></script>
    
</body>
</html>