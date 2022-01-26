        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="https://www.padmaacademy.com/admin/index">Index</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                     <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Blogs</span>
                        </a>
                        <ul aria-expanded="true">
                            <li><a href="https://www.padmaacademy.com/admin/blogcategory">Create Category</a></li>
                            <li><a href="https://www.padmaacademy.com/admin/selectblogcategory">Write Blogs</a></li>
                            <li><a href="https://www.padmaacademy.com/admin/tableblogs">Edit Blogs</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://www.padmaacademy.com/admin/category" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Category</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="https://www.padmaacademy.com/admin/class" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Class</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.padmaacademy.com/admin/chapter" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Chapter</span>
                        </a>
                    </li>
                    
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Post Content</span>
                        </a>
                        <ul aria-expanded="true">
                            <li><a href="https://www.padmaacademy.com/admin/selector">Post</a></li>
                            <li><a href="https://www.padmaacademy.com/admin/tablecontent">View Post</a></li>
                       
                        </ul>
                    </li>
                    
                    
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Study Abroad</span>
                        </a>
                        <ul aria-expanded="true">
                            <li><a href="https://www.padmaacademy.com/admin/studyabroadcontent">Post Blog</a></li>
                            <li><a href="https://www.padmaacademy.com/admin/tablecontentstudyabroad">View Posted Blog</a></li>
                       
                        </ul>
                    </li>
                    
                    @if(Auth::user()->email=="wanibhavesh767@gmail.com")
                        
                    
                    
                    <li>
                        <a href="https://www.padmaacademy.com/admin/registerieltstest" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Reg IELTS Test</span>
                        </a>
                    </li>
                    
                    
                     <li>
                        <a href="https://www.padmaacademy.com/admin/ielts-users" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">IELTS USERS</span>
                        </a>
                    </li>
                     <li>
                        <a href="https://www.padmaacademy.com/admin/addieltswriting" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">ADD IELTS Writing Question</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="https://www.padmaacademy.com/admin/addieltslistening" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">ADD IELTS Listening</span>
                        </a>
                    </li>

                     <li>
                        <a href="https://www.padmaacademy.com/admin/tableieltswriting" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Table Writing Question</span>
                        </a>
                    </li>                    
                    
                     <li>
                        <a href="https://www.padmaacademy.com/admin/table-ans-ielts-writing" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Evaluate IELTS Writing</span>
                        </a>
                    </li>

                    
                    <li>
                        <a href="https://www.padmaacademy.com/admin/team" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Team</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.padmaacademy.com/admin/news" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">News</span>
                        </a>
                    </li>
                    
                    @endif
                </ul>
            </div>
        </div>