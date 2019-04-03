<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontendadmin/css/reset.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontendadmin/css/text.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontendadmin/css/grid.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontendadmin/css/layout.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontendadmin/css/nav.css')}}" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <link href="{{ URL::asset('frontendadmin/css/fancy-button/fancy-button.css')}}" rel="stylesheet" type="text/css" />
    <!--Jquery UI CSS-->
    <link href="{{ URL::asset('frontendadmin/css/themes/base/jquery.ui.all.css')}}" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="{{ URL::asset('frontendadmin/js/jquery-1.6.4.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.core.min.js')}}"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.widget.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.accordion.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.effects.core.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.effects.slide.min.js')}}" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!--jQuery Date Picker-->
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.widget.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.datepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.progressbar.min.js')}}" type="text/javascript"></script>
    <!-- jQuery dialog related-->
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/external/jquery.bgiframe-2.1.2.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.mouse.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.draggable.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.position.min.js')
}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.resizable.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.dialog.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.effects.core.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.effects.blind.min.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.effects.explode.min.js')}}" type="text/javascript"></script>
    <!-- jQuery dialog end here-->
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.accordion.min.js')}}" type="text/javascript"></script>
    <!--Fancy Button-->
    <script src="{{ URL::asset('frontendadmin/js/fancy-button/fancy-button.js')}}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/setup.js')}}" type="text/javascript"></script>
    <!-- Load TinyMCE -->
    <script src="{{ URL::asset('frontendadmin/js/tiny-mce/jquery.tinymce.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
        <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>
    <!-- /TinyMCE -->
  
    <!-- END: load jquery -->
    <script type="text/javascript" src="{{ URL::asset('frontendadmin/js/table/table.js') }}"></script>
    <script src="{{ URL::asset('frontendadmin/js/setup.js') }}" type="text/javascript"></script>
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>
    
   </head>
<body>
<style>
.img{
	height:60px;
	width:400px;
	border-radius:50%;
}
.img1{
	height:40px;
	width:50px;
	border-radius:50%;
}
<style>
.error{color:red;}
.green{color:green;}
</style>
</style>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                
				<div class="floatleft middle">
					<h1>Food Distribution</h1>
					
				</div>
                      <div class="floatright">
                     
                    
						
                    <div class="floatleft marginleft10">
                         
                        <ul class="inline-ul floatleft">
                           
                              <li></li>
                            <li>  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                                                       
                                                                </ul>
                       
                    </div>
                   
                </div>
                
                <div class="clear">
                </div>
            </div>
         </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="{{ URL::to('admin/index') }}"><span>Dashboard</span></a> </li>
               
				<li class="ic-grid-tables"><a href="{{ URL::to('admin/inbox') }}"><span>Inbox({{($count)}})
			</span></a></li>
             
                 <li class="ic-grid-tables"><a href="{{ URL::to('admin/donorInbox') }}"><span>Donor({{($count1)}})</span></a></li>
                     <li class="ic-grid-tables"><a href="{{ URL::to('admin/volunteerInbox') }}"><span>Volunteer({{($count2)}})</span></a></li>
        
   
				
                <li class="ic-charts"><a href="{{ URL::to ('/index')}}"><span>Visit Website</span></a></li>
            </ul>
        </div>
        <div class="clear">
        </div>

              <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                       <li><a class="menuitem">Site Option</a>
                            
                        <li><a class="menuitem">Information List</a>
                            <ul class="submenu">
                                <li><a href="{{ URL::to ('admin/volunteerlist')}}">Volunteers</a> </li>
                                <li><a href="{{ URL::to ('admin/donorlist')}}">Donors</a> </li>
                            </ul>
                        </li>
                        
                         
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid_10">
        
                      <div class="box round first grid">
                <h2> Dashbord</h2>
                <div class="block"> 
                 @yield('content')  
               
            
                </div>
            </div>
        </div>
        <div class="clear">
 
    </div>
   @include('admin/inc/footer')