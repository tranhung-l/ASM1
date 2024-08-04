
<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.layouts.partails.header')
</head>
<body class="g-sidenav-show  bg-gray-100">
  <aside 
  class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
  id="sidenav-main">
   
    @include('admin.layouts.partails.aside')

  </aside>

  <main class="main-content border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="true">
    @include('admin.layouts.partails.nav')
  </nav>
    @yield('content')

  </main>
  

  @include('admin.layouts.partails.ngu')
  @include('admin.layouts.partails.js')
 
</body>

</html>