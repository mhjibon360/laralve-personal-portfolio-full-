  @php
      $id = Auth::user()->id;
      $admin = App\Models\User::findOrFail($id);
  @endphp
  <!--sidebar wrapper -->
  <div class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
          <div>
              <img src="{{ asset('backend') }}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
          </div>
          <div>
              <h4 class="logo-text">{{ $admin->name }}</h4>
          </div>
          <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
          </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
          <li>
              <a href="{{ route('admin.dashboard') }}">
                  <div class="parent-icon"><i class='bx bx-home-circle'></i>
                  </div>
                  <div class="menu-title">Dashboard</div>
              </a>
          </li>


          <li class="menu-label">Home Page</li>

          <li>
              <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class='bx bx-cart'></i>
                  </div>
                  <div class="menu-title">Header/Banner</div>
              </a>
              <ul>
                  <li> <a href="{{ route('type.index') }}"><i class="bx bx-right-arrow-alt"></i>Typed</a>
                  </li>
                  <li> <a href="{{ route('edit.home') }}"><i class="bx bx-right-arrow-alt"></i>Hero
                      </a>
                  </li>

              </ul>
          </li>

          <li>
              <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class='bx bx-cart'></i>
                  </div>
                  <div class="menu-title">Services</div>
              </a>
              <ul>
                  <li> <a href="{{ route('services.index') }}"><i class="bx bx-right-arrow-alt"></i>Manage Services</a>
                  </li>


              </ul>
          </li>

          <li>
              <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class='bx bx-cart'></i>
                  </div>
                  <div class="menu-title">Home/About</div>
              </a>
              <ul>
                  <li> <a href="{{ route('edit.home.about') }}"><i class="bx bx-right-arrow-alt"></i>Manage About</a>
                  </li>


              </ul>
          </li>

          <li>
              <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class='bx bx-cart'></i>
                  </div>
                  <div class="menu-title">Portfolio</div>
              </a>
              <ul>
                  <li> <a href="{{ route('edit.portfolioCaoption') }}"><i class="bx bx-right-arrow-alt"></i>Portflio
                          Caption</a>
                  </li>
                  <li> <a href="{{ route('portfolio-category.index') }}"><i class="bx bx-right-arrow-alt"></i>Portflio
                          Category</a>
                  </li>
                  <li> <a href="{{ route('portfolio-item.index') }}"><i class="bx bx-right-arrow-alt"></i>Portflio
                          Item</a>
                  </li>


              </ul>
          </li>

          <li>
              <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class='bx bx-cart'></i>
                  </div>
                  <div class="menu-title">Skill</div>
              </a>
              <ul>
                  <li> <a href="{{ route('edit.skillCaoption') }}"><i class="bx bx-right-arrow-alt"></i>Skill
                          Caption</a>
                  </li>
                  <li> <a href="{{ route('skill-item.index') }}"><i class="bx bx-right-arrow-alt"></i>Skill
                          Item</a>
                  </li>
              </ul>
          </li>

          <li>
              <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class='bx bx-cart'></i>
                  </div>
                  <div class="menu-title">Experience</div>
              </a>
              <ul>
                  <li> <a href="{{ route('edit.experience') }}"><i class="bx bx-right-arrow-alt"></i>Manage Experience
                      </a>
                  </li>

              </ul>
          </li>

          <li>
              <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class='bx bx-cart'></i>
                  </div>
                  <div class="menu-title">Client</div>
              </a>
              <ul>
                  <li> <a href="{{ route('edit.clientCaoption') }}"><i class="bx bx-right-arrow-alt"></i>Cleint
                          Captions
                      </a>
                  </li>
                  <li> <a href="{{ route('client-item.index') }}"><i class="bx bx-right-arrow-alt"></i>All Client
                      </a>
                  </li>

              </ul>
          </li>



          <li class="menu-label">Manage Blog</li>
          <li>
              <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class='bx bx-cart'></i>
                  </div>
                  <div class="menu-title">Blog</div>
              </a>
              <ul>
                  <li> <a href="{{ route('edit.blogCaoption') }}"><i class="bx bx-right-arrow-alt"></i>Blog
                          Captions
                      </a>
                  </li>
                  <li> <a href="{{ route('blog-category.index') }}"><i class="bx bx-right-arrow-alt"></i>Category All
                      </a>
                  </li>
                  <li> <a href="{{ route('blog-item.index') }}"><i class="bx bx-right-arrow-alt"></i>All Blog Post
                      </a>
                  </li>
              </ul>
          </li>
          <li class="menu-label">Contact</li>
          <li>
              <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class='bx bx-cart'></i>
                  </div>
                  <div class="menu-title">Contact </div>
              </a>
              <ul>
                  <li> <a href="{{ route('edit.contactCaoption') }}"><i class="bx bx-right-arrow-alt"></i>Contact
                          Captions
                      </a>
                  </li>

              </ul>
          </li>
          <li class="menu-label">Footer</li>
          <li>
              <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class='bx bx-cart'></i>
                  </div>
                  <div class="menu-title">Footer </div>
              </a>
              <ul>
                  <li> <a href="{{ route('edit.footer.top') }}"><i class="bx bx-right-arrow-alt"></i>Manage
                          Footer Top
                      </a>
                  </li>
                  <li> <a href="{{ route('footer.edit') }}"><i class="bx bx-right-arrow-alt"></i>Manage
                          Footer
                      </a>
                  </li>

              </ul>
          </li>
          <li class="menu-label">setting</li>
          <li>
              <a href="{{ route('setting.page') }}">
                  <div class="parent-icon"><i class='bx bx-home-circle'></i>
                  </div>
                  <div class="menu-title">Manage Setting</div>
              </a>
          </li>


      </ul>
      <!--end navigation-->
  </div>
  <!--end sidebar wrapper -->
