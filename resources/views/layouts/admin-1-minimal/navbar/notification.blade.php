<!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
<!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
<!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="icon-bell"></i>
        <span class="badge badge-default"> 7 </span>
    </a>
    <ul class="dropdown-menu">
        <li class="external">
            <h3>
                <span class="bold">12 pending</span> notifications</h3>
            <a href="page_user_profile_1.html">view all</a>
        </li>
        <li>
            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                <li>
                    <a href="javascript:;">
                        <span class="time">just now</span>
                        <span class="details">
                            <span class="label label-sm label-icon label-success">
                                <i class="fa fa-plus"></i>
                            </span> New user registered. </span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <span class="time">3 mins</span>
                        <span class="details">
                            <span class="label label-sm label-icon label-danger">
                                <i class="fa fa-bolt"></i>
                            </span> Server #12 overloaded. </span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>
