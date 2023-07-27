<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/jqueryui/jquery-ui.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../lib/feather-icons/feather.min.js"></script>
<script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../../lib/prismjs/prism.js"></script>
<script src="../../lib/js-cookie/js.cookie.js"></script>
<script src="../../assets/js/dashforge.js"></script>
<script src="../../assets/js/dashforge.aside.js"></script>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<!-- Script base -->

<!-- data table-->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>

<script>
    let table = new DataTable('#myTable');
</script>
<script>
    $(function(){
        'use strict'

        $('.off-canvas-menu').on('click', function(e){
            e.preventDefault();
            var target = $(this).attr('href');
            $(target).addClass('show');
        });

        $('.off-canvas .close').on('click', function(e){
            e.preventDefault();
            $(this).closest('.off-canvas').removeClass('show');
        })

        $(document).on('click touchstart', function(e){
            e.stopPropagation();
            if(!$(e.target).closest('.off-canvas-menu').length) {
            var offCanvas = $(e.target).closest('.off-canvas').length;
            if(!offCanvas) {
                $('.off-canvas.show').removeClass('show');
            }
            }
        });
    });
</script>

<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>

<script>
    $(document).on('click', '.allow-focus', function (e) {
    e.stopPropagation();
    });
</script>

<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

<!-- Sementara -->
<script>
    var goBtn = document.getElementById("goBtn");
    var menu = document.getElementById("menu");

    goBtn.onclick = function() {
    window.location = menu.value;
    }
</script>

<!-- Tahun Saat Ini -->
<script>
    const d = new Date();
    let year = d.getFullYear();
    document.getElementById("thn").innerHTML = year;
</script>


<script>
    jQuery(($) => {
  $('.attachment input[type="file"]')
    .on('change', (event) => {
    let el = $(event.target).closest('.attachment').find('.btn-file');

    el
      .find('.btn-file__actions__item')
      .css({
        'padding': '135px'
      });

    el
      .find('.btn-file__preview')
      .css({
        'background-image': 'url(' + window.URL.createObjectURL(event.target.files[0]) + ')'
      });
  });
});
</script>
