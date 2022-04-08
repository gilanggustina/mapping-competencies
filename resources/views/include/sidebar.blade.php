  <!-- BEGIN: Main Menu-->
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
          <li class="nav-item">
              <a class="nav-link" href="{{ route('Dashboard') }}">
                  <i class="icon-grid menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('Member') }}">
                  <i class="icon-head menu-icon"></i>
                  <span class="menu-title">Member CG</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Grade') }}">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Master Grade</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('SkillCategory')  }}">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Master Skill Category</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('Curriculum') }}">
                  <i class="icon-grid-2 menu-icon"></i>
                  <span class="menu-title">Curriculum</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('CompetenciesDirectory') }}">
                  <i class="icon-book menu-icon"></i>
                  <span class="menu-title">Competencies Directory</span>
              </a>
          </li>
          {{-- <li class="nav-item">
              <a class="nav-link" href="{{ route('CompetenciesGroup') }}">
                  <i class="icon-grid-2 menu-icon"></i>
                  <span class="menu-title">Competencies Group</span>
              </a>
          </li> --}}
          <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                  <i class="icon-grid-2 menu-icon"></i>
                  <span class="menu-title">Competencies Directory</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                  </ul>
              </div>
          </li> -->
          <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                  <i class="icon-contract menu-icon"></i>
                  <span class="menu-title">Competencies Group</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="icons">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                  </ul>
              </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('WhiteTag') }}">
                <i class="icon-flag menu-icon"></i>
                <span class="menu-title">White Tag</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('TagList') }}">
                <i class="icon-tag menu-icon"></i>
                <span class="menu-title">Tagging List</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('ceme') }}">
                  <i class="icon-bar-graph menu-icon"></i>
                  <span class="menu-title">CEME</span>
              </a>
          </li>
          {{-- <li class="nav-item">
              <a class="nav-link" href="pages/documentation/documentation.html">
                  <i class="icon-paper menu-icon"></i>
                  <span class="menu-title">Internal Trainer Report</span>
              </a>
          </li> --}}
      </ul>
  </nav>
  <!-- END: Main Menu-->