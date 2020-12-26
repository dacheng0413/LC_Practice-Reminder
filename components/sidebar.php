<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="TodoList.php" class="nav-link 
                            <?php
                             if($current_filename=='TodoList.php')
                             echo "active"; 
                             ?>" href="#">
                        <span data-feather="home"></span>
                        Todo List <span class="sr-only">(current)</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="Input.php" class="nav-link 
                            <?php
                             if($current_filename=='Input.php')
                             echo "active"; 
                             ?>" href="#">
                        <span data-feather="home"></span>
                        Input New Questions <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="ReviewList.php" class="nav-link 
                            <?php
                             if($current_filename=='ReviewList.php')
                             echo "active"; 
                             ?>" href="#">
                        <span data-feather="home"></span>
                        Quetions Need Review <span class="sr-only">(current)</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="Finished.php" class="nav-link 
                            <?php
                             if($current_filename=='Finished.php')
                             echo "active"; 
                             ?>" href="#">
                        <span data-feather="home"></span>
                        Remembered question <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>