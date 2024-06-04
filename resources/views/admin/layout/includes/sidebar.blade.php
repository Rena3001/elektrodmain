<nav class="navbar navbar-vertical navbar-expand-lg" style="display:block;">
    <script>
        var navbarStyle = window.config.config.phoenixNavbarStyle;
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- parent pages-->

                </li>
                <li class="nav-item">
                    <!-- label-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="apps/chat.html" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="pie-chart"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Dashboard</span></span></div>
                        </a>
                    </div><!-- parent pages-->
                    <hr class="navbar-vertical-line"><!-- parent pages-->
                    <!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-home"
                            role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                </div><span class="nav-link-icon"><span data-feather="columns"></span></span><span
                                    class="nav-link-text">Tables</span><span
                                    class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                    style="font-size: 6px"></span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse"
                                id="nv-home">
                                <li class="collapsed-nav-item-title d-none">Home</li>
                                <li class="nav-item"><a class="nav-link active" href="index-1.html">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon me-0"><span data-feather="globe"></span>
                                            </span>
                                            <span class="nav-link-text ps-2">Language Lines</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>
</nav>
