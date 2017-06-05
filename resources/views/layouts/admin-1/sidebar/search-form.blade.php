<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
<li class="sidebar-search-wrapper">
    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
    <form class="sidebar-search  sidebar-search-bordered" action="page_general_search_3.html" method="POST">
        <a href="javascript:;" class="remove">
            <i class="icon-close"></i>
        </a>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <a href="javascript:;" class="btn submit">
                    <i class="icon-magnifier"></i>
                </a>
            </span>
        </div>
    </form>
</li>