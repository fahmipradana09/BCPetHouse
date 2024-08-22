<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  
    <div class="sidenav-header">
         <a class="navbar-brand" href="/">
          <img src="<?= base_url('assets/img/bcpet_logo.png') ?>" class="navbar-brand-img justify-content-center " alt="main_logo">
          <span class="ms-1 font-weight-bold me-3 ">BC Pet House</span>
        </a>
    </div>

    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto p-0" id="sidenav-collapse-main">
      <ul class="navbar-nav" id="sidebar-menu">

        <li class="nav-item">
          <a class="nav-link <?= ($active == 'dashboard' ? 'active':'');?>" href="/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <span class="dashboard-color-icon material-symbols-outlined">
                dashboard
              </span>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($active == 'ambulatoir' ? 'active':'');?>" href="<?= base_url('/Ambulatoir');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <span class="ambulatoir-color-icon material-symbols-outlined">
               note_add
              </span>
            </div>
            <span class="nav-link-text ms-1">Ambulatoir</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($active == 'rawatinap' ? 'active':'');?>" href="<?= base_url('/RawatInap');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <span class="inout-color-icon material-symbols-outlined">
                check_in_out
              </span>
            </div>
            <span class="nav-link-text ms-1">Rawat Inap</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($active == 'petlist' ? 'active':'');?>" href="<?= base_url('/PetList');?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <span class="material-symbols-outlined">
               pets
              </span>
            </div>
            <span class="nav-link-text ms-1">Pet List</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>