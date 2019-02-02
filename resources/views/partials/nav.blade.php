<li class="">
    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <img src="/images/no_image.jpg" alt="">John Doe
        <span class=" fa fa-angle-down"></span>
    </a>
    <ul class="dropdown-menu dropdown-usermenu pull-right">
        <li><a href="javascript:;"> Profile</a></li>
        <li>
            <a href="javascript:;">
                <span class="badge bg-red pull-right">50%</span>
                <span>Settings</span>
            </a>
        </li>
        <li><a href="javascript:;">Help</a></li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out pull-right"></i> Log Out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</li>

<li role="presentation" class="dropdown">
    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-envelope-o"></i>
        <span class="badge bg-green">6</span>
    </a>
    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
        <li>
            <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
            </a>
        </li>
        <li>
            <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
            </a>
        </li>
        <li>
            <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
            </a>
        </li>
        <li>
            <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
            </a>
        </li>
        <li>
            <div class="text-center">
                <a>
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </li>
    </ul>
</li>