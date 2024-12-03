        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url.'home'; ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $user_data['username']; ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if($page_title == 'Dashboard' || $page_title == 'Home'){echo 'active';} ?>">
                <a class="nav-link" href="<?php echo base_url.'teacher'; ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item <?php if($page_title == 'Student Issues'){echo 'active';} ?>">
                <a class="nav-link" href="<?php echo base_url.'admin/student-issues'; ?>">
                    <i class="fas fa-calendar"></i>
                    <span>Student Issues</span></a>
            </li>
            <li class="nav-item <?php if($page_title == 'Messages'){echo 'active';} ?>">
                <a class="nav-link" href="<?php echo base_url.'admin/messages'; ?>">
                    <i class="fas fa-envelope"></i>
                    <span>Messages</span></a>
            </li>
        </ul>