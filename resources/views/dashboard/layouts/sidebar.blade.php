  <aside class="left-sidebar">
      <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
              <a href="/dashboard" class="text-nowrap logo-img">
                  <img src="{{ asset('assets/images/logos/dark-logo.svg') }}" width="180" alt="" />
              </a>
              <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                  <i class="ti ti-x fs-8"></i>
              </div>
          </div>
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
              <ul id="sidebarnav">
                  <li class="nav-small-cap">
                      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                      <span class="hide-menu">Home</span>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                          <span>
                              <i class="ti ti-layout-dashboard"></i>
                          </span>
                          <span class="hide-menu">Dashboard</span>
                      </a>
                  </li>
                  <li class="nav-small-cap">
                      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                      <span class="hide-menu">Master</span>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="/dashboard/master/kategori_buku" aria-expanded="false">
                          <span>
                              <i class="ti ti-article"></i>
                          </span>
                          <span class="hide-menu">Kategori Buku</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="/dashboard/master/buku" aria-expanded="false">
                          <span>
                              <i class="ti ti-article"></i>
                          </span>
                          <span class="hide-menu">Buku</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="/dashboard/master/mahasiswa" aria-expanded="false">
                          <span>
                              <i class="ti ti-article"></i>
                          </span>
                          <span class="hide-menu">Data Mahasiswa</span>
                      </a>
                  </li>
              </ul>
          </nav>
      </div>
  </aside>
