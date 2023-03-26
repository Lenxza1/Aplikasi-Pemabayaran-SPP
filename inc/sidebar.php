<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <?php if ($level == 1) { ?>
            <li class="nav-item">
              <a class="nav-link" href="../dashboard.php">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/lsp/siswa/siswa.php">
                <span class="icon-bg"><i class="mdi mdi-account-multiple"></i></span>
                <span class="menu-title">Data Siswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/lsp/petugas/petugas.php">
                <span class="icon-bg"><i class="mdi mdi-account-key"></i></span>
                <span class="menu-title">Data Petugas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/lsp/kelas/kelas.php">
                <span class="icon-bg"><i class="mdi mdi-library"></i></span>
                <span class="menu-title">Data Kelas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/lsp/spp/spp.php">
                <span class="icon-bg"><i class="mdi mdi-library-books"></i></span>
                <span class="menu-title">Data SPP</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/lsp/transaksi/transaksi.php">
                <span class="icon-bg"><i class="mdi mdi-cash"></i></span>
                <span class="menu-title">Transaksi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/lsp/laporan.php">
                <span class="icon-bg"><i class="mdi mdi-cash-usd"></i></span>
                <span class="menu-title">Laporan</span>
              </a>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <!-- <div class="sidebar-profile-img">
                        <img src="template/assets/images/faces/face28.png" alt="image">
                      </div> -->
                      <div class="sidebar-profile-text">
                        <p class="mb-1"><?php echo $name ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="/lsp/logout.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>
        <?php } else if ($level == 2) { ?>
            <li class="nav-item">
              <a class="nav-link" href="/lsp/dashboard.php">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/lsp/transaksi/transaksi.php">
                <span class="icon-bg"><i class="mdi mdi-cash"></i></span>
                <span class="menu-title">Transaksi</span>
              </a>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <!-- <div class="sidebar-profile-img">
                        <img src="template/assets/images/faces/face28.png" alt="image">
                      </div> -->
                      <div class="sidebar-profile-text">
                        <p class="mb-1"><?php echo $name ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="/lsp/logout.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
        </nav>
        <?php } else if ($level == 3) { ?>
            <li class="nav-item">
              <a class="nav-link" href="/lsp/dashboard.php">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/lsp/transaksi/transaksi.php">
                <span class="icon-bg"><i class="mdi mdi-cash"></i></span>
                <span class="menu-title">Riwayat</span>
              </a>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <!-- <div class="sidebar-profile-img">
                        <img src="template/assets/images/faces/face28.png" alt="image">
                      </div> -->
                      <div class="sidebar-profile-text">
                        <p class="mb-1"><?php echo $name ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="/lsp/logout.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
        <?php } ?>
        </ul>
        </nav>