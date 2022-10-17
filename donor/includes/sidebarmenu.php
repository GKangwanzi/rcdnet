<div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Welcome <?php echo $_SESSION['name']; ?></li>
            
            <li
                class="sidebar-item active ">
                <a href="home.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>Notice Board</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="./notice-board.php">View Posts</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="./new-post.php">New Post</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="./myposts.php">My Posts</a>
                    </li>
                </ul>
            </li> 
            
            <li
                class="sidebar-item ">
                <a href="./projects.php" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Projects</span>
                </a>
            </li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Beneficiaries</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="./beneficiaries.php">Beneficiaries</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="./mybens.php">My Sponsorship</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="./album.php">Students</a>
                    </li>
                </ul>
            </li> 
            <li
                class="sidebar-item">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Project Reports</span>
                </a>
            </li>
             
            <li
                class="sidebar-item">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-chat-dots-fill"></i>
                    <span>My Profile</span>
                </a>

            </li>

            <li
                class="sidebar-item active ">
                <a href="logout.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>