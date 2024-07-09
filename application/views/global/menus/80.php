<li <?= ($this->uri->segment(2) == 'dashboard') ? 'active' : '' ?>">
    <a href="<?= BASE_URL ?>user/dashboard" class="nav-link"><i class="fa fa-home"></i> Dashboard</a>
</li>
<li <?= ($this->uri->segment(2) == 'tickets') ? 'active' : '' ?>">
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
<li <?= ($this->uri->segment(2) == 'user' && $this->uri->segment(3) == 'list') ? 'active' : '' ?>">
    <a href="#usersDropdown" aria-expanded="false" data-toggle="collapse" class="nav-link"><i class="fa fa-users"></i> Users</a>
    <ul id="usersDropdown" class="collapse list-unstyled">
        <li><a href="<?= BASE_URL ?>user/list">All Users</a></li>
        <li><a href="<?= BASE_URL ?>user/add_user">Add User</a></li>
    </ul>
</li>
<li <?= ($this->uri->segment(2) == 'user' && $this->uri->segment(3) == 'profile') ? 'active' : '' ?>">
    <a href="<?= BASE_URL ?>user/profile" class="nav-link"><i class="fa fa-user"></i> Profile</a>
</li>
<li <?= ($this->uri->segment(2) == 'listcontrol') ? 'active' : '' ?>">
    <a href="<?= BASE_URL ?>listcontrol/list" class="nav-link"><i class="bi bi-list-nested"></i> List</a>
</li>
<li <?= ($this->uri->segment(2) == 'managecontrol') ? 'active' : '' ?>">
    <a href="#ManagesDropdown" aria-expanded="false" data-toggle="collapse" class="nav-link"><i class="bi bi-gear"></i> Manage</a>
    <ul id="ManagesDropdown" class="collapse list-unstyled">
        <li><a href="<?= BASE_URL ?>managecontrol/type">Type</a></li>
        <li><a href="<?= BASE_URL ?>managecontrol/location">Location</a></li>
    </ul>
</li>