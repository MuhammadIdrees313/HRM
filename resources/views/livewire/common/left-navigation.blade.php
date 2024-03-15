<div>

    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="leftside-menu position-fixed">

        <!-- Brand Logo Light -->
        <a href="" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ asset(AppConst::AGENT_IMAGES . '/logo.png') }}" alt="logo">
            </span>
            <span class="logo-sm">
                <img src="{{ asset(AppConst::AGENT_IMAGES . '/logo-sm.png') }}" alt="small logo">
            </span>
        </a>

        <!-- Brand Logo Dark -->
        <a href="" class="logo logo-dark">
            <span class="logo-lg">
                <img src="{{ asset(AppConst::AGENT_IMAGES . '/logo-dark.png') }}" alt="dark logo">
            </span>
            <span class="logo-sm">
                <img src="{{ asset(AppConst::AGENT_IMAGES . '/logo-dark-sm.png') }}" alt="small logo">
            </span>
        </a>

        <!-- Sidebar Hover Menu Toggle Button -->
        <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
            <i class="ri-checkbox-blank-circle-line align-middle"></i>
        </div>

        <!-- Full Sidebar Menu Close Button -->
        <div class="button-close-fullsidebar">
            <i class="ri-close-fill align-middle"></i>
        </div>

        <!-- Sidebar -left -->
        <div class="h-100" id="leftside-menu-container">
            <!-- Leftbar User -->
            <div class="leftbar-user">
                <a href="pages-profile.html">
                    <img src="{{ asset(AppConst::AGENT_IMAGES . '/users/avatar-1.jpg') }}" alt="user-image"
                        height="42" class="rounded-circle shadow-sm">
                    <span class="leftbar-user-name mt-2">Dominic Keller</span>
                </a>
            </div>
            <!--- Sidemenu -->
            <ul class="side-nav">

                <li class="side-nav-title side-nav-item">Apps</li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebaremployee" aria-expanded="false"
                        aria-controls="sidebaremployee" class="side-nav-link">
                        <i class="uil-store"></i>
                        <span> Employee </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebaremployee">
                        <ul class="side-nav-second-level">
                            <li >
                                <a href="" >Dashboard</a>
                            </li>
                            <li>
                                <a href="">All Employee</a>
                            </li>
                            <li>
                                <a href="">Country</a>
                            </li>
                            <li>
                                <a href="">Branches</a>
                            </li>
                            <li>
                                <a href="">Departments</a>
                            </li>

                        </ul>
                    </div>
                </li>





            </ul>

            <!--- End Sidemenu -->

            <div class="clearfix"></div>
        </div>
    </div>

</div>
