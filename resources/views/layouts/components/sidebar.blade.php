        
            <aside class="app-sidebar" id="sidebar">

                <!-- Start::main-sidebar-header -->
                <div class="main-sidebar-header">
                    <a href="{{url('index')}}" class="header-logo">
                        <img src="{{asset('build/assets/img/brand-logos/desktop-logo.png')}}" alt="logo" class="main-logo desktop-logo">
                        <img src="{{asset('build/assets/img/brand-logos/toggle-logo.png')}}" alt="logo" class="main-logo toggle-logo">
                        <img src="{{asset('build/assets/img/brand-logos/desktop-dark.png')}}" alt="logo" class="main-logo desktop-dark">
                        <img src="{{asset('build/assets/img/brand-logos/toggle-dark.png')}}" alt="logo" class="main-logo toggle-dark">
                    </a>
                </div>
                <!-- End::main-sidebar-header -->

                <!-- Start::main-sidebar -->
                <div class="main-sidebar " id="sidebar-scroll">

                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills flex-column sub-open">
                        <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg></div>
                        <ul class="main-menu">
                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">Main</span></li>
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <li class="slide  has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                        <path fill="#9399a1"
                                            d="M18 22H6a3.003 3.003 0 0 1-3-3v-8.75a3 3 0 0 1 1.023-2.257l6.001-5.25a3.012 3.012 0 0 1 3.952 0l6 5.25A3 3 0 0 1 21 10.25V19a3.003 3.003 0 0 1-3 3Z" />
                                        <path fill="#4b5563" d="M16 22H8v-7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3Z" />
                                    </svg>
                                    <span class="side-menu__label">Dashboards</span>
                                    <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1"><a href="javascript:void(0)">Dashboards</a></li>
                                    <li class="slide"><a href="{{url('index')}}" class="side-menu__item">Sales</a></li>
                                    <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Ecommerce</a></li>
                                    <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Crypto</a></li>
                                    <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Jobs</a></li>
                                    <li class="slide"><a href="javascript:void(0);" class="side-menu__item">NFT</a></li>
                                    <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Analytics</a></li>
                                    <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Projects</a></li>
                                    <li class="slide"><a href="javascript:void(0);" class="side-menu__item">HRM</a></li>
                                    <li class="slide"><a href="javascript:void(0);" class="side-menu__item">CRM</a></li>
                                    <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Personal</a></li>
                                    <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Stocks</a></li>
                                    <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Course</a></li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">Levels</span></li>
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path fill="#9399a1"
                                            d="M21,19H11c-0.55258-0.00037-1.00024-0.44862-0.99988-1.0012c0.00012-0.18707,0.05269-0.37036,0.15174-0.52907l5-8c0.33258-0.46842,0.98192-0.57853,1.45033-0.24595c0.09521,0.0676,0.17835,0.15074,0.24595,0.24595l5,8c0.29256,0.46878,0.14971,1.08597-0.31907,1.37853C21.37037,18.94731,21.18707,18.99988,21,19z" />
                                        <path fill="#4b5563"
                                            d="M10.00012,17.99878c0.00012-0.18707,0.05267-0.37036,0.15173-0.52905l3.98083-6.36932l-3.26892-5.60431C10.68463,5.18878,10.35571,4.99988,10,5C9.64429,4.99988,9.31537,5.18878,9.13623,5.49609l-7,12C2.047,17.64905,2,17.82294,2,18c0,0.55231,0.44769,1,1,1h8C10.44739,18.99963,9.99976,18.55139,10.00012,17.99878z" />
                                    </svg>
                                    <span class="side-menu__label">NestedMenu</span>
                                    <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1"><a href="javascript:void(0)">Nested Menu</a></li>
                                    <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Nested-1</a></li>
                                    <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Nested-2<i
                                                class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                            </li>
                                            <li class="slide has-sub"><a href="javascript:void(0);"
                                                    class="side-menu__item">Nested-2-2<i
                                                        class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide"><a href="javascript:void(0);"
                                                            class="side-menu__item">Nested-2-2-1</a></li>
                                                    <li class="slide"><a href="javascript:void(0);"
                                                            class="side-menu__item">Nested-2-2-2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                            </svg></div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->

            </aside>