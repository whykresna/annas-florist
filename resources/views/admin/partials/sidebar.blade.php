<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href={{ url('/') }}>{{ env('APP_NAME') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href={{ url('/') }}>AF</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fa fa-columns"></i> <span>Dashboard</span></a></li>
        <li class="{{ Request::route()->getName() == 'product.index' ? ' active' : '' }}"><a class="nav-link" href="{{ route('product.index') }}"><i class="fa fa-leaf"></i> <span>Product</span></a></li>
        <li class="{{ Request::route()->getName() == 'portfolio.index' ? ' active' : '' }}"><a class="nav-link" href="{{ route('portfolio.index') }}"><i class="fa fa-image"></i> <span>Portfolio</span></a></li>
        <li class="{{ Request::route()->getName() == 'article.index' ? ' active' : '' }}"><a class="nav-link" href="{{ route('article.index') }}"><i class="fa fa-newspaper"></i> <span>Article</span></a></li>
    </ul>
</aside>
