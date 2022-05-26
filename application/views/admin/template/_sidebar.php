   <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link <?php echo $this->uri->segment(1) == 'admin' ? 'active': '' ?>"
                                href="<?= base_url() ?>admin" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link  <?php echo $this->uri->segment(1) == 'siswa' ? 'active': '' ?>"
                                href="<?= base_url() ?>admin/siswa" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                                    class="hide-menu">Data Siswa</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link <?php echo $this->uri->segment(1) == 'pengumuman' ? 'active': '' ?>"
                                href="<?= base_url() ?>admin/pengumuman" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                                    class="hide-menu">Pengumuman</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                    class="hide-menu">Tables</span></a></li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->