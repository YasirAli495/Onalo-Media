  <!-- Scripts -->
  <script src="{{ asset('adminjs/coreui.bundle.min.js') }}"></script>
  <script src="{{ asset('adminjs/simplebar.min.js') }}"></script>
  
  <script>
  const header = document.querySelector('header.header');
  
  document.addEventListener('scroll', () => {
  if (header) {
      header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
  }
  });
  </script>
  
  <!-- Plugins and scripts required by this view -->
  <script src="{{ asset('adminjs/chart.umd.js') }}"></script>
  <script src="{{ asset('adminjs/coreui-chartjs.js') }}"></script>
  <script src="{{ asset('adminjs/index.js') }}"></script>
  <script src="{{ asset('adminjs/main.js') }}"></script>
  
  <script></script>
  
  
  </body></html>