    <!-- Footer -->
    <footer style="background-color: #fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p class="copyright text-muted" style="color: #000; font-size: 20px">Copyright &copy; Barracuda Networks 2016</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<?php
 //5. Close the database connection
 if (isset($connection)){
 mysqli_close($connection);
 }
?>

