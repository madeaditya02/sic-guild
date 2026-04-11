<nav class="nav-menu md:items-center gap-6 font-nunito bg-white w-full md:w-auto shrink-0 flex-col md:flex-row items-start mt-5 md:mt-0">
    <a href="/">Home</a>
    <a href="/stories">Stories</a>
    @can('user-only')
        <a href="/dashboard/posts">Write</a>
    @endcan
    @can('admin-only')
        <a href="/dashboard/categories">Manage Categories</a>
        <a href="/dashboard/posts">Manage Stories</a>
        <a href="/dashboard/users">Manage Users</a>
    @endcan
</nav>