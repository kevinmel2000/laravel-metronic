<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
<li class="dropdown dropdown-user">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <img alt="" class="img-circle" src="{{ asset('assets/layouts/layout/img/avatar3_small.jpg') }}">
        <span class="username username-hide-on-mobile"> Nick </span>
        <i class="fa fa-angle-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-menu-default">
        <li>
            <a href="page_user_profile_1.html">
                <i class="icon-user"></i> My Profile </a>
        </li>
        <li>
            <a href="app_inbox.html">
                <i class="icon-envelope-open"></i> My Inbox
                <span class="badge badge-danger"> 3 </span>
            </a>
        </li>
        <li class="divider"> </li>
        <li>
            <a href="page_user_login_1.html">
                <i class="icon-key"></i> Log Out </a>
        </li>
    </ul>
</li>
