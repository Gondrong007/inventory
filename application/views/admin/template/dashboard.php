<?php $this->load->view('admin/template/header');?>
<!--start content-->
<main class="page-content">
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-pink">
                            <p>Total Orders</p>
                            <h4 class="text-pink">8,542</h4>
                        </div>
                        <div class="w-50 bg-pink p-3">
                            <p class="mb-3 text-white">+ 16% <i class="fa fa-arrow-up"></i></p>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-purple">
                            <p>Total Views</p>
                            <h4 class="text-purple">12.5M</h4>
                        </div>
                        <div class="w-50 bg-purple p-3">
                            <p class="mb-3 text-white">- 3.4% <i class="fa fa-arrow-down"></i></p>
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-success">
                            <p>Revenue</p>
                            <h4 class="text-success">$64.5K</h4>
                        </div>
                        <div class="w-50 bg-success p-3">
                            <p class="mb-3 text-white">+ 24% <i class="fa fa-arrow-up"></i></p>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-orange">
                            <p>Customers</p>
                            <h4 class="text-orange">25.8K</h4>
                        </div>
                        <div class="w-50 bg-orange p-3">
                            <p class="mb-3 text-white">+ 8.2% <i class="fa fa-arrow-up"></i></p>
                            <div id="chart4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</main>
<!--end page main-->
<?php $this->load->view('admin/template/footer');?>