<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ $user->gravatar_url or ''}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ $user->first_name or '' }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
           <navigation-menu>

           <menu-item href="{{ url('/') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></menu-item>
           <menu-item href="http://wwww.google.com">Google</menu-item>
           <li>
               <a href="#" onclick="$('#sair').submit();">
                   <i class="fa fa-sign-out"></i> <span>Sair</span>
               </a>
               <form id="sair" action="{{ url('logout') }}" method="post">
                   {{ csrf_field() }}
               </form>
           </li>
           </navigation-menu>

       </ul>
    </section>
</aside>
