<div class="side bg-success">
        <ul class="navbar-nav sidebar text-dark sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hai, Admin!</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider border-solid my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Components 1 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-user"></i>
                    <span>User</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User:</h6>
                        <a class="collapse-item" href="/admin/alluser">All User</a>
                        <a class="collapse-item" href="/admin/create">Tambah User</a>
                    </div>
                </div>
            </li>
            <!-- akhir components1 -->
            <!-- Components 2 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-box-open"></i>
                    <span>Barang</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Barang:</h6>
                        <a class="collapse-item" href="/barang">Barang</a>
                        <a class="collapse-item" href="/kategori">Kategori</a>
                    </div>
                </div>
            </li>
            <!-- akhir components 2 -->
            <!-- Components 3 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fa-solid fa-cart-arrow-down"></i>
                    <span>Pesanan</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pesanan:</h6>
                        <a class="collapse-item" href="/pesanan-check-out">Pesanan Check Out</a>
                        <a class="collapse-item" href="/pesanan-sudah-bayar">Pesanan Sudah Dibayar</a>
                    </div>
                </div>
            </li>
            <!-- Akhir Components 3 -->

            

        

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
</div>