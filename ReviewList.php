<?php include('components/connection.php');?>

<?php include("components/header.php"); ?>
<title>LeetCode practice record</title>
</head>

<body>
    <?php include("components/menu.php"); ?>
     
    <div class="container-fluid">
        <div class="row">
            <?php include("components/sidebar.php"); ?>
            <?php $current_date = date("Y-m-d"); ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Review List</h1>
                    

                </div>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>LeetCode</th>
                            <th>Last Time Practice</th>
                            <th>Review Days Left</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php								
                                    
                                    $query = "Select LC_ID, date(Input_Date) as date , TIMESTAMPDIFF(Day, Input_Date, Review_Date) as Days from LeetCode 
                                    where Is_Remembered = 0
                                    having Days > 0
                                    order by Days asc
                                    ";
                                    $result = mysqli_query($db, $query);
                                    if ( empty($result) || !empty($result) && (mysqli_num_rows($result) == 0) ) {
                                        array_push($error_msg,  "SELECT ERROR: find Friendship <br>" . __FILE__ ." line:". __LINE__ );
                                    }
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                        print "<tr>";
                                        print "<td>{$row['LC_ID']}</td>";
                                        print "<td>{$row['date']}</td>";
                                        print "<td>{$row['Days']}</td>";
                                        print "<td><a href='TodoList_date.php?lcid={$row['LC_ID']}'/>update</a></td>";
                                        print "</tr>";
                                    }
                                ?>
                                </tbody>										
                                
                </table>	
            </div>
                

                 
                <?php include("components/error.php"); ?>
                
                <div class="clear"></div> 		
                </div>    
        
                <?php include("components/footer.php"); ?>
            
            </main>
        </div>
    </div>

   
</body>
</html>