<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="{{URL::to('/dashboard')}}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
         
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{URL::to('/users')}}">Users</a></li>
			   <li><a class="" href="/posts">Posts</a></li>
			   <li><a class="" href="/allcoment">Comments</a></li>
			    <li><a class="" href="/applylist">JobApplier</a></li>
            </ul>
          </li>

          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>