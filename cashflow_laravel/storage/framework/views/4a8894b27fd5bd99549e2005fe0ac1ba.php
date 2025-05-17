<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">CASH FLOW</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            

            <li class="nav-item">
                <a href="<?php echo e(route('user.index')); ?>" class="nav-link "><i class="fas fa-fire"></i><span>Users</span></a>



            </li>

            <li class="nav-item">
                <a href="<?php echo e(route('categories.index')); ?>" class="nav-link "><i
                        class="fas fa-fire"></i><span>Categories</span></a>

            </li>

            <li class="nav-item ">
                <a href="<?php echo e(route('product.index')); ?>" class="nav-link"><i
                        class="fas fa-fire"></i><span>Products</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('product.index')); ?>">All Products</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="<?php echo e(route('order.index')); ?>" class="nav-link "><i
                        class="fas fa-fire"></i><span>Orders</span></a>

            </li>

    </aside>
</div>
<?php /**PATH C:\cashflow_laravel\cashflow_laravel\resources\views/components/sidebar.blade.php ENDPATH**/ ?>