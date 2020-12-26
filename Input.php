<?php 
    include('components/connection.php');
?>

<?php include("components/header.php"); ?>
<title>LeetCode practice record</title>
</head>

<body>
    <?php include("components/menu.php"); ?>
     
    <div class="container-fluid">
        <div class="row">
            <?php include("components/sidebar.php"); ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Input Question</h1>
                    

                </div>
                
                <form action = "Input_update.php">
                    
                    <div class="form-group">
                        <label>LeetCode Number</label>
                        <input type="text" name="LeetCode" class="form-control" placeholder="Enter Number" required>
                    </div>
                    <div class="form-group">
                        <label>Review in how many days</label>
                        <input type="number" min="1" step="1" name="Review" class="form-control" placeholder="Enter dates" required>
                    </div>

                    <div class="form-group">
                        <h6>Need Review?</h6>
                        <label>Yes
                        <input type="radio" name="Remembered" value="true" /></label>
                        <label>No
                        <input type="radio" name="Remembered" value="false" /></label>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                <?php include("components/error.php"); ?>
                
                <div class="clear"></div> 		
                </div>    
        
                <?php include("components/footer.php"); ?>
            
            </main>
        </div>
    </div>

   
</body>
</html>