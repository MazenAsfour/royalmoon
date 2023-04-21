@php 
$countUnreadRating = App\Models\Rating::where("is_read","0")->count();
$countUnreadApp = App\Models\Appointments::where("is_read","0")->count();

@endphp
<style>
   .headercount {
    font-size: 13px;
    line-height: 16px;
    padding: 5px 9px;
    background: #d1c286;
    border-radius: 100%;
    color: #fff;
    font-weight: 600;
}
</style>
<div class="dashboard dashboard_1">
    <div class="full_container" style="top: 0;
    position: absolute;">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="/dashboard"><img class="logo_icon img-responsive"
                                    src="/images/logo.png" style="object-fit: contain" alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive" src="{{ $admin[0]->image }}"
                                    alt="#" /></div>
                            <div class="user_info">
                                <h6>{{ $admin[0]->name }}</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="/dashboard"><i class="fa fa-dashboard yellow_color"></i>
                                <span>Dashboard</span></a>

                        </li>
                        <li><a href="/dashboard-admins"><i class="fa fa-user-plus green_color" aria-hidden="true"></i>
                                <span>Admins</span></a></li>

                        <li><a href="/dashboard-users"><i class="fa fa-users orange_color" aria-hidden="true"></i>
                                <span>Users</span></a></li>

                        <li><a href="/dashboard-products"><i class="fa fa-product-hunt  purple_color2"
                                    aria-hidden="true"></i>
                                </i> <span>Prdoucts</span></a></li>
                        <li>
                            <a href="/dashboard-appointments"><i class="fa fa fa-calendar yellow_color"></i>
                                <span>Appointments</span> <span  class=" badge headercount">{{$countUnreadApp}}</span></a>
                        </li>
                        <li>
                            <a href="/dashboard-contact"><i class="fa fa-paper-plane red_color"></i>
                                <span>Contact</span></a>
                        </li>
                        <li><a href="/dashboard-subscribe"><i class="fa fa-inbox  purple_color2"></i>
                                <span>Subscribes</span></a></li>
                        <li><a href="/dashboard-rating"><i class="fa fa-star yellow_color" style="color:#e0e001 !important"></i>
                             <span>Rating
                                    Products <span class=" badge headercount">{{$countUnreadRating}}</span></span></a>
                        </li>
                        <li><a href="/dashboard-invoice"><i class="fa fa-th-large green_color" ></i>
                                <span>Invoice</span></a>
                        </li>


                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- topbar -->
            <div class="topbar">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="full">
                        <button type="button" style="min-height: 60px;" id="sidebarCollapse" class="sidebar_toggle"><i
                                class="fa fa-bars"></i></button>
                        <div class="logo_section">
                            <a href="/dashboard"><img class="img-responsive" src="/images/logo.png"
                                    alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                            <div class="icon_info">
                                <ul>
                                    <li>
                                        <div class="notification">
                                            <a href="#">
                                                <div class="notBtn" href="#" style="margin-top: -9px;">
                                                    <!--Number supports double digets and automaticly hides itself when there is nothing between divs -->
                                                    <i class="fa fa-bell-o fa-bell"><span
                                                            class="badge messageNotification">0</span></i>
                                                    <div class="box text-left">
                                                        <div class="display">
                                                            <div class="nothing">
                                                                <i class="fas fa-child stick"></i>
                                                                <div class="cent">Looks Like your all caught up!
                                                                </div>
                                                            </div>
                                                            <div class="cont" id="area-notifications">
                                                                <!-- Fold this div and try deleting evrything inbetween -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                    <li><a href="/dashboard-contact"><i class="fa fa-envelope-o"></i><span
                                                class="badge messageCount">0</span></a></li>
                                </ul>
                                <ul class="user_profile_dd">
                                    <li>
                                        <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                class="img-responsive rounded-circle" src="{{ $admin[0]->image }}"
                                                alt="#" /><span
                                                class="name_user">{{ $admin[0]->name }}</span></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/dashboard-admin-profile">My
                                                Profile</a>
                                            <a class="dropdown-item" href="/logout"><span>Log Out</span> <i
                                                    class="fa fa-sign-out"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <input type="hidden" name="" id="TopBar">
            <!-- end topbar -->
            <script>
                $("#sidebarCollapse").click(function() {
                    if ($("#TopBar").val() == 1) {
                        $("#TopBar").val(0)
                        $(".topbar").css("padding-left", "280px")
                        $("#content").css("padding-left", "305px")
                    } else {
                        $("#TopBar").val(1)
                        $(".topbar").css("padding-left", "86px")
                        $("#content").css("padding-left", "116px")
                    }


                })
            </script>
