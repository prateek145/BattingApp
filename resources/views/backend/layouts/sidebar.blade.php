    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{route('dashboard')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
            @inject('ApiTraits', 'App\Http\Controllers\backend\BackendController')
            @php
                $data = $ApiTraits->typeofevent();
            @endphp
            @for ($i = 0; $i < count($data); $i++)
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav{{$i}}" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>{{$data[$i]['name']}}</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav{{$i}}" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    @php
                        $matches = $ApiTraits->specificevent($data[$i]['eventType']);
                        // print_r($matches);
                    @endphp
                    @for ($j = 0; $j < count($matches); $j++)
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>{{$matches[$j]->competition->name}}</span>
                        </a>
                    </li>
                        
                    @endfor
                </ul>

            </li><!-- End Components Nav -->
            @endfor

            <!-- End Icons Nav -->

            <li class="nav-heading">IN PLAY</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>V GRACHEVA VS STEPHENS</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>NEW ZEALANDENGLAND</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                    <i class="bi bi-envelope"></i>
                    <span>SANTOS LAGUNATOLUCA</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>KUDLANI CHAPPELL</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item d-none">
                <a class="nav-link collapsed" href="pages-login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Login</span>
                </a>
            </li><!-- End Login Page Nav -->

            <li class="nav-item d-none">
                <a class="nav-link collapsed" href="pages-error-404.html">
                    <i class="bi bi-dash-circle"></i>
                    <span>Error 404</span>
                </a>
            </li><!-- End Error 404 Page Nav -->

            <li class="nav-item d-none">
                <a class="nav-link collapsed" href="pages-blank.html">
                    <i class="bi bi-file-earmark"></i>
                    <span>Blank</span>
                </a>
            </li><!-- End Blank Page Nav -->

        </ul>
        
        
        
        
        
        
        
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-navx" data-bs-toggle="collapse" href="#" aria-expanded="false">
                    <i class="bi bi-menu-button-wide"></i><span>New Soccer</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-navx" class="nav-content collapse " data-bs-parent="#sidebar-nava">
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="bi bi-circle"></i><span>ABC</span>
                        </a>
                        <ul>
                            <li>
                        
                                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="bi bi-circle"></i><span>KLF</span>
                        </a>
                        <ul>
                            <li>
                        
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 3 </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 4 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                </ul>

            </li>

        

        </ul>
        

    </aside><!-- End Sidebar-->
