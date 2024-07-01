<li><a href="<?= BASE_URL ?>user/dashboard"> <i class="fa fa-home"></i>Dashboard</a></li>

<li><a href="#ticketsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Tickets </a>
    <ul id="ticketsDropdown" class="collapse list-unstyled ">
        <li><a href="<?= BASE_URL ?>tickets/create_new">New Ticket </a></li>
        <li><a href="<?= BASE_URL ?>tickets/assigned_to_me">Assigned to me</a></li>
        <li><a href="<?= BASE_URL ?>tickets/my_tickets"></i>My Tickets </a></li>
        <li><a href="<?= BASE_URL ?>tickets/cc_to_me">Following</a></li>
    </ul>
</li>
<li><a href="<?= BASE_URL ?>user/profile"> <i class="fa fa-user"></i>Profile </a></li>

<li><a href="<?= BASE_URL ?>itemcontrol/add_item"><i class="bi bi-plus-circle"></i>Add </a></li>

<li><a href="<?= BASE_URL ?>listcontrol/list"><i class="bi bi-list-nested"></i>List </a></li>

<li><a href="#ManagesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="bi bi-gear"></i>Menage</a>
    <ul id="ManagesDropdown" class="collapse list-unstyled ">
        <li><a href="<?= BASE_URL ?>managecontrol/type">Type</a></li>
        <li><a href="<?= BASE_URL ?>ManageControl/location">Location</a></li>
    </ul>
</li>