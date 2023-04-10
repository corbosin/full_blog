<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <div class="sidebar">
    <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
    
    <li class="nav-item">
            <a href="{{ route('personal.main.index') }}" method="GET" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Главная
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('personal.liked.index') }}" method="GET" class="nav-link">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Понравилось
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('personal.comment.index') }}" method="GET" class="nav-link">
              <i class="nav-icon fas fa-comment"></i>
              <p>
                Комментарии
              </p>
            </a>
          </li>

</ul>
      </div>

  </aside>