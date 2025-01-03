<nav class="navbar-vertical navbar">
    <div id="myScrollableElement" class="h-screen" data-simplebar>
        <!-- brand logo -->
        <a class="navbar-brand" href="index.html">
            <img src="assets/images/brand/logo/logo.svg" alt="" />
        </a>

        <!-- navbar nav -->
        <ul class="navbar-nav flex-col" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i data-feather="home" class="w-4 h-4 mr-2"></i>
                    Dashboard
                </a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#navEcommerce"
                    aria-expanded="false" aria-controls="navPages">
                    <i data-feather="layers" class="w-4 h-4 mr-2"></i>
                    Ecommerce
                </a>
                <div id="navEcommerce" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="/produk">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/produk_tambah">Add Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ecommerce-order-list.html">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ecommerce-order-detail.html">Orders Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ecommerce-cart.html">Shopping cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ecommerce-checkout.html">Checkout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ecommerce-customer.html">Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ecommerce-seller.html">Seller</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#navEmail"
                    aria-expanded="false" aria-controls="navEmail">
                    <i data-feather="mail" class="w-4 h-4 mr-2"></i>
                    Email
                </a>

                <div id="navEmail" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="mail.html">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mail-details.html">Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mail-draft.html">Draft</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#navKanban"
                    aria-expanded="false" aria-controls="navKanban">
                    <i data-feather="layout" class="w-4 h-4 mr-2"></i>
                    Kanban
                </a>

                <div id="navKanban" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="task-kanban-grid.html">Grid</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="task-kanban-list.html">List</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Nav item -->
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#navProject"
                    aria-expanded="false" aria-controls="navProject">
                    <i class="w-4 h-4 mr-2" data-feather="file"></i>
                    Project
                </a>
                <div id="navProject" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="project-grid.html">Grid</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="project-list.html">List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navprojectSingle" aria-expanded="false"
                                aria-controls="navprojectSingle">Single</a>
                            <div id="navprojectSingle" class="collapse" data-bs-parent="#navProject">
                                <ul class="nav flex-col">
                                    <li class="nav-item">
                                        <a class="nav-link" href="project-overview.html">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="project-task.html">Task</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="project-budget.html">Budget</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="project-files.html">Files</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="project-team.html">Team</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add-project.html">Create Project</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="apps-file-manager.html">
                    <i data-feather="folder-plus" class="w-4 h-4 mr-2"></i>
                    File Manager
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#navCRM"
                    aria-expanded="false" aria-controls="navCRM">
                    <i data-feather="pie-chart" class="w-4 h-4 mr-2"></i>

                    CRM
                </a>

                <div id="navCRM" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="crm-contacts.html">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="crm-company.html">Company</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#navinvoice"
                    aria-expanded="false" aria-controls="navinvoice">
                    <i data-feather="clipboard" class="w-4 h-4 mr-2"></i>
                    Invoice
                </a>

                <div id="navinvoice" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="invoice-list.html">List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="invoice-detail.html">Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="invoice-generator.html">Invoice Generator</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navprofilePages" aria-expanded="false" aria-controls="navprofilePages">
                    <i data-feather="user" class="w-4 h-4 mr-2"></i>
                    Profile
                </a>
                <div id="navprofilePages" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="profile-overview.html">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile-project.html">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile-files.html">Files</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="profile-team.html">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile-followers.html">Followers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile-activity.html">Activity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile-settings.html">Settings</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#navblog"
                    aria-expanded="false" aria-controls="navblog">
                    <i data-feather="edit" class="w-4 h-4 mr-2"></i>
                    Blog
                </a>

                <div id="navblog" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="blog-author.html">Author</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-author-detail.html">Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create-blog-post.html">Create Post</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Layouts & Pages</div>
            </li>

            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navlayoutPage" aria-expanded="false" aria-controls="navlayoutPage">
                    <i class="nav-icon w-4 h-4 mr-2" data-feather="file"></i>
                    Pages
                </a>
                <div id="navlayoutPage" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="starter.html">Starter</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pricing.html">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="maintenance.html">Maintenance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="404-error.html">404 Error</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                    <i data-feather="lock" class="w-4 h-4 mr-2"></i>
                    Authentication
                </a>
                <div id="navAuthentication" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="sign-in.html">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sign-up.html">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="forget-password.html">Forget Password</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link" href="layout.html">
                    <i data-feather="sidebar" class="w-4 h-4 mr-2"></i>
                    Layouts
                </a>
            </li>
            <!-- nav heading -->
            <li class="nav-item">
                <div class="navbar-heading">UI Components</div>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navComponents" aria-expanded="false" aria-controls="navComponents">
                    <i data-feather="package" class="w-4 h-4 mr-2"></i>
                    Components
                </a>
                <div id="navComponents" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="components/accordions.html">Accordions</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="components/alerts.html">Alerts</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="components/avatar.html">Avatar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/badge.html">Badges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/buttons.html">Buttons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/button-group.html">Button Group</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/blockquote.html">Blockquote</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/breadcrumb.html">Breadcrumb</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/card.html">Card</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/collapse.html">Collapse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/dropdown.html">Dropdown</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/forms.html">Forms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/offcanvas.html">Offcanvas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/lists.html">Lists</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/modal.html">Modal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/navbar.html">Navbar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/navs-tabs.html">Nav & Tabs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/pagination.html">Pagination</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/progress.html">Progress</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/spinners.html">Spinners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/tables.html">Tables</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/toast.html">Toast</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/tooltips.html">Tooltips</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                    <i data-feather="corner-left-down" class="w-4 h-4 mr-2"></i>
                    Menu Level
                </a>
                <div id="navMenuLevel" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navMenuLevelSecond" aria-expanded="false"
                                aria-controls="navMenuLevelSecond">Two Level</a>
                            <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                <ul class="nav flex-col">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!">NavItem 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!">NavItem 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navMenuLevelThree" aria-expanded="false"
                                aria-controls="navMenuLevelThree">
                                Three Level
                            </a>
                            <div id="navMenuLevelThree" class="collapse" data-bs-parent="#navMenuLevel">
                                <ul class="nav flex-col">
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                            data-bs-target="#navMenuLevelThreeOne" aria-expanded="false"
                                            aria-controls="navMenuLevelThreeOne">
                                            NavItem 1
                                        </a>
                                        <div id="navMenuLevelThreeOne" class="collapse"
                                            data-bs-parent="#navMenuLevelThree">
                                            <ul class="nav flex-col">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!">NavChild Item 1</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!">Nav Item 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Documentation</div>
            </li>
            <li class="nav-item">
                <a class="nav-link has-arrow collapsed" href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navDocs" aria-expanded="false" aria-controls="navDocs">
                    <i data-feather="clipboard" class="w-4 h-4 mr-2"></i>
                    Docs
                </a>
                <div id="navDocs" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item"><a href="docs/index.html" class="nav-link">Introduction</a>
                        </li>
                        <li class="nav-item"><a href="docs/environment-setup.html" class="nav-link">Environment
                                setup</a></li>
                        <li class="nav-item"><a href="docs/working-with-gulp.html" class="nav-link">Working with
                                Gulp</a></li>
                        <li class="nav-item"><a href="docs/tailwindcss.html" class="nav-link">TailwindCSS</a></li>
                        <li class="nav-item"><a href="docs/compiled-files.html" class="nav-link">Compiled
                                Files</a></li>
                        <li class="nav-item"><a href="docs/file-structure.html" class="nav-link">File
                                Structure</a></li>
                        <li class="nav-item"><a href="docs/resources-assets.html" class="nav-link">Resources &
                                assets</a></li>
                        <li class="nav-item"><a href="docs/changelog.html" class="nav-link">Changelog</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- nav heading -->
            <li class="nav-item">
                <a class="nav-link"
                    href="https://dashui.codescandy.com/tailwindcss-admin-dashboard-html-template.html"
                    target="_blank">
                    <i data-feather="download" class="w-4 h-4 mr-2"></i>
                    Download
                </a>
            </li>
        </ul>
    </div>
</nav>
