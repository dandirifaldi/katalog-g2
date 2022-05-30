<!-- jQuery -->
<script src="{{asset('template')}}//plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template')}}//plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template')}}//dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('template')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('template')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function () {
        $('#1').DataTable({
        "paging": true,"lengthChange": false,"searching": true,"ordering": false,"info": true,"autoWidth": false,"responsive": false,
        "buttons":["print","colvis"]
        }).buttons().container().appendTo('#1_wrapper .col-md-6:eq(0)');
        $('#2').DataTable({
        "paging": true,"lengthChange": false,"searching": true,"ordering": false,"info": true,"autoWidth": false,"responsive": false,
        "buttons":["print"]
        }).buttons().container().appendTo('#2_wrapper .col-md-6:eq(0)');
    });
</script>
<!-- Page specific script e-commerce -->
<script>
    $(document).ready(function() {
      $('.product-image-thumb').on('click', function () {
        var $image_element = $(this).find('img')
        $('.product-image').prop('src', $image_element.attr('src'))
        $('.product-image-thumb.active').removeClass('active')
        $(this).addClass('active')
      })
    })
  </script>
  <!-- Page specific script e-commerce -->

 <!-- Boostrap 5.0.1 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{asset('lightslider-master')}}/dist/js/lightslider.js"></script> 
<script>  
  $(document).ready(function() {
    $('#responsive').lightSlider({
      item:6,
      loop:false,
      slideMove:2,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed:600,
      responsive : [
        {
          breakpoint:800,
          settings: {
            item:6,
            slideMove:1,
            slideMargin:6,
          }
        },
        {
          breakpoint:480,
          settings: {
            item:2,
            slideMove:1
          }
        }
      ]
    });  
  });
</script>

<script>  
  $(document).ready(function() {
    $('#responsive2').lightSlider({
      item:6,
      loop:false,
      slideMove:2,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed:600,
      responsive : [
        {
          breakpoint:800,
          settings: {
            item:6,
            slideMove:1,
            slideMargin:6,
          }
        },
        {
          breakpoint:480,
          settings: {
            item:2,
            slideMove:1
          }
        }
      ]
    });  
  });
</script>
<script>  
  $(document).ready(function() {
    $('#responsive3').lightSlider({
      item:6,
      loop:false,
      slideMove:2,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed:600,
      responsive : [
        {
          breakpoint:800,
          settings: {
            item:6,
            slideMove:1,
            slideMargin:6,
          }
        },
        {
          breakpoint:480,
          settings: {
            item:2,
            slideMove:1
          }
        }
      ]
    });  
  });
</script>

<script>  
  $(document).ready(function() {
    $('#responsive4').lightSlider({
      item:6,
      loop:false,
      slideMove:2,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed:600,
      responsive : [
        {
          breakpoint:800,
          settings: {
            item:6,
            slideMove:1,
            slideMargin:6,
          }
        },
        {
          breakpoint:480,
          settings: {
            item:2,
            slideMove:1
          }
        }
      ]
    });  
  });
</script>

