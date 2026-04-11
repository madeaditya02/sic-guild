<nav class="nav-menu md:items-center gap-6 font-nunito bg-white w-full md:w-auto shrink-0 flex-col md:flex-row items-start mt-5 md:mt-0">
    <a href="/">Home</a>
    <a href="/stories">Stories</a>
    @can('user-only')
        <a href="/dashboard/post">Write</a>
    @endcan
    @can('admin-only')
        <a href="/dashboard/post">Manage Stories</a>
        <a href="/dashboard/user">Manage Users</a>
    @endcan
</nav>