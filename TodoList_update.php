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
                    <button type="button" class="btn btn-info pull-right" onclick="location.href='ReviewList.php';">Back</button>


                </div>

                <?php
                    $selected_LCid = htmlspecialchars($_GET["LeetCode"]);
                    $selected_date = htmlspecialchars($_GET["Review"]);
                    $selected_ok = htmlspecialchars($_GET["Remembered"]);
                    $current_date = date("Y-m-d");
                    if($selected_ok == 'false'){
                        $query = "update LeetCode
                        set Input_Date = $current_date
                        where LC_ID = $selected_LCid";  
                        $result = mysqli_query($db, $query);

                        $query = "update LeetCode
                        set Is_Remembered = 1
                        where LC_ID = $selected_LCid";  
                        $result = mysqli_query($db, $query);
                        print "<h3>Your old question $selected_LCid is updated into the database</h3>";
                        
                    }else{
                        $future_date = date("Y-m-d", strtotime("$selected_date day"));
                        $query = "update LeetCode
                        set Input_Date = '$current_date'
                        where LC_ID = '$selected_LCid';";  
                        $result = mysqli_query($db, $query);
                        

                        $query = "update LeetCode
                        set Review_Date = '$future_date'
                        where LC_ID = '$selected_LCid';";  
                        $result = mysqli_query($db, $query);
                        
                        
                        $query = "update LeetCode
                        set Is_Remembered = '0'
                        where LC_ID = '$selected_LCid';";  
                        $result = mysqli_query($db, $query);
                        
                        print "<h3>Your old question $selected_LCid will be reviewed on $future_date</h3>";
                        
                        
                        
                    }
                ?>
                
                
                <?php include("components/error.php"); ?>
                
                <div class="clear"></div> 		
                </div>    
        
                <?php include("components/footer.php"); ?>
            
            </main>
        </div>
    </div>

   
</body>
</html>