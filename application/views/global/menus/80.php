<li class="nav-item <?= ($active_page == 'dashboard') ? 'active' : '' ?>">
    <a href="<?= BASE_URL ?>user/dashboard" class="nav-link"><i class="fa fa-home"></i> Dashboard</a>
</li>
<li class="nav-item <?= ($active_page == 'tickets') ? 'active' : '' ?>">
    <a href="#ticketsDropdown" aria-expanded="false" data-toggle="collapse" class="nav-link"><i class="fa fa-list"></i> Tickets</a>
    <ul id="ticketsDropdown" class="collapse list-unstyled">
        <li><a href="<?= BASE_URL ?>tickets/create_new">New Ticket</a></li>
        <li><a href="<?= BASE_URL ?>tickets/list_all">All Tickets</a></li>
        <li><a href="<?= BASE_URL ?>tickets/unassigned_tickets">Unassigned Tickets</a></li>
        <li><a href="<?= BASE_URL ?>tickets/assigned_tickets">Assigned Tickets</a></li>
        <li><a href="<?= BASE_URL ?>tickets/closed_tickets">Closed Ticket</a></li>
        <li><a href="<?= BASE_URL ?>tickets/my_tickets">My Tickets</a></li>
        <li><a href="<?= BASE_URL ?>tickets/cc_to_me">Following</a></li>
    </ul>
</li>
<li class="nav-item <?= ($active_page == 'users') ? 'active' : '' ?>">
    <a href="#usersDropdown" aria-expanded="false" data-toggle="collapse" class="nav-link"><i class="fa fa-users"></i> Users</a>
    <ul id="usersDropdown" class="collapse list-unstyled">
        <li><a href="<?= BASE_URL ?>user/list">All Users</a></li>
        <li><a href="<?= BASE_URL ?>user/add_user">Add User</a></li>
    </ul>
</li>
<li class="nav-item <?= ($active_page == 'profile') ? 'active' : '' ?>">
    <a href="<?= BASE_URL ?>user/profile" class="nav-link"><i class="fa fa-user"></i> Profile</a>
</li>
<li class="nav-item <?= ($active_page == 'list') ? 'active' : '' ?>">
    <a href="<?= BASE_URL ?>listcontrol/list" class="nav-link"><i class="bi bi-list-nested"></i> List</a>
</li>
<li class="nav-item <?= ($active_page == 'manage') ? 'active' : '' ?>">
    <a href="#ManagesDropdown" aria-expanded="false" data-toggle="collapse" class="nav-link"><i class="bi bi-gear"></i> Manage</a>
    <ul id="ManagesDropdown" class="collapse list-unstyled">
        <li><a href="<?= BASE_URL ?>managecontrol/type">Type</a></li>
        <li><a href="<?= BASE_URL ?>managecontrol/location">Location</a></li>
    </ul>
</li>