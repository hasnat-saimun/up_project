<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Language" content="en" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ষোালনল ইউনিয়ন পরিষদ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components." />

        <meta name="msapplication-tap-highlight" content="no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  

        <!-- font awesome kit setup -->
        <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link href="{{asset('public/up/demo.dashboardpack.com/architectui-html-pro/')}}/main.d810cf0ae7f39f28f336.css" rel="stylesheet" />
    </head>

    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
            <div class="app-header header-shadow">
                <div class="app-header__logo">
                    <div>ষোালনল ইউনিয়ন পরিষদ</div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="app-header__content">
                    <div class="app-header-left">
                        <div class="search-wrapper">
                            <div class="input-holder">
                                <input type="text" class="search-input" placeholder="Type to search" />
                                <button class="search-icon"><span></span></button>
                            </div>
                            <button class="close"></button>
                        </div>
                        <ul class="header-megamenu nav"></ul>
                    </div>
                    <div class="app-header-right">
                        <div class="header-dots">
                            <div class="dropdown">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                    <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                        <span class="icon-wrapper-bg bg-danger"></span>
                                        <i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>
                                        <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                    </span>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header mb-0">
                                        <div class="dropdown-menu-header-inner bg-deep-blue">
                                            <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                            <div class="menu-header-content text-dark">
                                                <h5 class="menu-header-title">Notifications</h5>
                                                <h6 class="menu-header-subtitle">You have <b>Null</b> unread messages</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                                <span>Messages</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                                <span>Events</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                                <span>System Errors</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <div class="p-3">
                                                        <div class="notifications-box">
                                                            <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <div class="p-3">
                                                        <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <div class="no-results pt-3 pb-0">
                                                        <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                            <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                            <span class="swal2-success-line-tip"></span>
                                                            <span class="swal2-success-line-long"></span>
                                                            <div class="swal2-success-ring"></div>
                                                            <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                            <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                        </div>
                                                        <div class="results-subtitle">All caught up!</div>
                                                        <div class="results-title">There are no system errors!</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-center nav-item">
                                            <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="header-btn-lg">
                            <button type="button" class="btn btn-info">
                            ওয়েবসাইট
                            </button>
                        </div>
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">লগ আউট</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="active">
                                    <a href=""> <i class="fa-sharp fa-solid fa-house-chimney"></i> <span>ড্যাশবোর্ড</span> </a>
                                </li>
                                <li class="mm-active">
                                    <a href="#">
                                        <i class="fa-solid fa-user"></i> <span> করদাতা সদস্য </span>

                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('taxmember')}}" class=""> <i class="metismenu-icon"></i>সদস্য নিবন্ধন করুন </a>
                                        </li>
                                        <li>
                                            <a href="{{route('wardMemList')}}"> <i class="metismenu-icon"></i> ওয়ার্ড ভিত্তিক দেখুন </a>
                                        </li>
                                        <li>
                                            <a href="{{route('memberList')}}"> <i class="metismenu-icon"> </i>সবগুলো দেখুন </a>
                                        </li>
                                        <li>
                                            <a href="{{route('regWardlist')}}"> <i class="metismenu-icon"></i> রেজিস্টার ওয়ার্ড ভিত্তিক </a>
                                        </li>
                                        <li>
                                            <a href="{{route('holdingWard')}}"> <i class="metismenu-icon"></i> হোল্ডিং প্লেট </a>
                                        </li>
                                    </ul>
                                </li>
                                <li >
                                    <a href="#">
                                        <i class="fa-solid fa-percent"></i> কর আদায়
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('taxReceive')}}"> <i class="metismenu-icon"></i> কর আদায় ফরম </a>
                                        </li>
                                        <li>
                                            <a href="{{route('taxList')}}"> <i class="metismenu-icon"></i> সবগুলোর দেখুন </a>
                                        </li>
                                        <li>
                                            <a href="{{route('taxWardlist')}} "> <i class="metismenu-icon"></i>ওয়ার্ড ভিত্তিক দেখুন </a>
                                        </li>
                                        <li>
                                            <a href="{{route('billPaper')}}"> <i class="metismenu-icon"></i>বিল পেপার তৈরী করুণ </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-duotone fa-solid fa-cake-candles"></i> জম্ম নিবন্ধন তালিকা
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('birthAdd')}} "> <i class="metismenu-icon"></i>নিবন্ধন করুন </a>
                                        </li>
                                        <li>
                                            <a href="{{route('birthList')}} "> <i class="metismenu-icon"></i>নিবন্ধন তালিকা দেখুন </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-sharp fa-solid fa-registered"></i> ব্যবসা নিবন্ধন তালিকা
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('addBusiness')}} "> <i class="metismenu-icon"></i>ব্যবসা নিবন্ধন করুন</a>
                                        </li>
                                        <li>
                                            <a href="{{route('busList')}}"> <i class="metismenu-icon"></i>ব্যবসায় নিবন্ধন তালিকা</a>
                                        </li>
                                        <li>
                                            <a href="{{route('busregList')}}"> <i class="metismenu-icon"></i>রেজিষ্টার তালিকা </a>
                                        </li>
                                        <li>
                                            <a href="{{route('busWard')}}"> <i class="metismenu-icon"></i>ব্যবসায়িক প্লেট </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-sharp fa-solid fa-trademark"></i> ট্রেড লাইসেন্স
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('licensePd')}}"> <i class="metismenu-icon"></i>ট্রেড লাইসেন্স পেন্ডিং </a>
                                        </li>
                                        <li>
                                            <a href="{{route('licenseList')}}"> <i class="metismenu-icon"></i>ট্রেড লাইসেন্স </a>
                                        </li>
                                        <li>
                                            <a href="{{route('reliPd')}} "> <i class="metismenu-icon"></i> নবায়নকৃত ট্রেড লাইসেন্স পেন্ডিং </a>
                                        </li>
                                        <li>
                                            <a href="{{route('riLicense')}}"> <i class="metismenu-icon"></i> নবায়নকৃত ট্রেড লাইসেন্স </a>
                                        </li>
                                        <li>
                                            <a href="{{route('liReg')}} "> <i class="metismenu-icon"></i>রেজিস্টার তালিকা </a>
                                        </li>
                                        <li>
                                            <a href="{{route('cpTax')}} "> <i class="metismenu-icon"></i> মূলধন কর </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-duotone fa-solid fa-memo-pad"></i> ওয়ারিশ সনদ
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('warishPd')}} "> <i class="metismenu-icon"> </i>আবেদন পেন্ডিং </a>
                                        </li>
                                        <li>
                                            <a href="{{route('warishLi')}}"> <i class="metismenu-icon"></i> ওয়ারিশ সনদ তালিকা </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-sharp fa-solid fa-people-roof"></i> পারিবারিক সনদ
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('sonodPd')}}"> <i class="metismenu-icon"></i>আবেদন পেন্ডিং </a>
                                        </li>
                                        <li>
                                            <a href="{{route('sonodLi')}}"> <i class="metismenu-icon"></i>পারিবারিক সনদ তালিকা </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-sun"></i> সকল প্রত্যয়নপত্রের সনদ
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('prtynCatpd')}}"> <i class="metismenu-icon"></i> আবেদন পেন্ডিং </a>
                                        </li>
                                        <li>
                                            <a href="{{route('prtynCat')}} "> <i class="metismenu-icon"></i> প্রত্যয়নপত্রের তালিকা </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-memo-pad"></i> বিবিধ প্রত্যয়নপত্র
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('bibidhoCatpd')}} "> <i class="metismenu-icon"></i> আবেদন পেন্ডিং </a>
                                        </li>
                                        <li>
                                            <a href="{{route('bibidhoCat')}}"> <i class="metismenu-icon"></i> প্রত্যয়নপত্রের তালিকা </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-sharp fa-solid fa-tally"></i> আয়-ব্যয় হিসাব
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('incomeLi')}} "> <i class="metismenu-icon"></i> আয় হিসাব </a>
                                        </li>
                                        <li>
                                            <a href="{{route('costLi')}}"> <i class="metismenu-icon"></i> ব্যয় হিসাব </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-sharp fa-solid fa-building-columns"></i> ব্যাংক হিসাব
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('bankDepo')}}"> <i class="metismenu-icon"></i>হিসাব দেখুন </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-sharp fa-solid fa-file"></i> রিপোর্ট
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('memReport')}} "> <i class="metismenu-icon"></i> করদাতা সদস্য</a>
                                        </li>
                                        <li>
                                            <a href="{{route('taxReport')}}"> <i class="metismenu-icon"></i> কর আদায় </a>
                                        </li>
                                        <li>
                                            <a href="{{route('busReport')}} "> <i class="metismenu-icon"></i> ব্যবসা নিবন্ধন </a>
                                        </li>
                                        <li>
                                            <a href="{{route('liReport')}}"> <i class="metismenu-icon"></i>ট্রেড লাইসেন্স </a>
                                        </li>
                                        <li>
                                            <a href="{{route('waReport')}} "> <i class="metismenu-icon"></i> ওয়ারিশ </a>
                                        </li>
                                        <li>
                                            <a href="{{route('faReport')}} "> <i class="metismenu-icon"></i> পারিবারিক </a>
                                        </li>
                                        <li>
                                            <a href="{{route('proReport')}}"> <i class="metismenu-icon"></i> প্রত্যয়নপত্র </a>
                                        </li>
                                        <li>
                                            <a href="{{route('accReport')}}"> <i class="metismenu-icon"></i>আয়-ব্যয় রিপোর্ট </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-sharp fa-solid fa-people-group"></i> উপকারভোগীর তালিকা
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('upokarAdd')}}"> <i class="metismenu-icon"></i>উপকারভোগী সদস্য</a>
                                        </li>
                                        <li>
                                            <a href="{{route('upokarLi')}}"> <i class="metismenu-icon"></i>সকল উপকারভোগী </a>
                                        </li>
                                        <li>
                                            <a href="{{route('upokarReceiveLi')}} "> <i class="metismenu-icon"></i>সেবা গ্রহনকারীর তালিকা</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="{{route('casBook')}}"> <i class="fa-sharp fa-solid fa-id-card "></i> <span> ক্যাশ বহি</span> </a>
                                </li>
                                <li class="active">
                                    <a href=""> <i class="fa-sharp fa-solid fa-chart-line"></i> <span>প্রকল্প </span> </a>
                                    <ul>
                                    <li>
                                            <a href="{{route('projectAdd')}} "> <i class="metismenu-icon"></i>উন্নয়নমূলক প্রকল্প</a>
                                        </li>
                                    <li>
                                            <a href=" {{route('projectLi')}}"> <i class="metismenu-icon "></i>উন্নয়নমূলক প্রকল্প তালিকা</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="{{route('sonodCusto')}}"> <i class="fa-sharp fa-solid fa-pen-to-square"></i> <span> সনদ কাস্টমাইজেশন </span> </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-sharp fa-regular fa-globe-pointer"></i><span>ওয়েবসাইট </span>
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{route('addSlider')}}"> <i class="metismenu-icon"></i>স্লাইডার </a>
                                        </li>
                                        <li>
                                            <a href="{{route('addMember')}}"> <i class="metismenu-icon"></i> সদস্য যোগ</a>
                                        </li>
                                        <li>
                                            <a href="{{route('memberLi')}}"> <i class="metismenu-icon"></i> সদস্য তালিকা </a>
                                        </li> 
                                        <li>
                                            <a href="{{route('citizen')}}"> <i class="metismenu-icon "></i> সিটিজেন্ট চার্টার  তালিকা </a>
                                        </li>
                                        <li>
                                            <a href="{{route('addPage')}}"> <i class="metismenu-icon"></i>পেজেস </a>
                                        </li>
                                        <li>
                                            <a href="{{route('pageLi')}}"> <i class="metismenu-icon"></i>পেজেস তালিকা </a>
                                        </li>
                                        <li>
                                            <a href="{{route('noticBord')}} "> <i class="metismenu-icon"></i>নোটিশ বোর্ড</a>
                                        </li>
                                        <li>
                                            <a href="{{route('servicList')}} "> <i class="metismenu-icon"></i>সেবা সমূহ </a>
                                        </li>
                                        <li>
                                            <a href="{{route('photo')}} "> <i class="metismenu-icon"></i>ফটো গ্যালারি </a>
                                        </li>
                                        <li>
                                            <a href="{{route('videoLi')}}"> <i class="metismenu-icon"></i>ভিডিও গ্যালারি </a>
                                        </li>
                                        <li>
                                            <a href="{{route('cngVoice')}}"> <i class="metismenu-icon"></i>স্লোগান</a>
                                        </li>
                                        <li>
                                            <a href="forms-range-slider.html"> <i class="metismenu-icon"></i>অভিযোগ / পরামর্শ</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            @yield('adminContent')
        </div>


        <div class="app-drawer-overlay d-none animated fadeIn"></div>
       
        <script type="text/javascript" src="{{asset('public/up/demo.dashboardpack.com/architectui-html-pro/')}}/assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
    </body>

    
</html>
