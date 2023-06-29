    <script src="<?php echo URL_LAYOUT; ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>/js/jquery.slicknav.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>/js/mixitup.min.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo URL_LAYOUT; ?>/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <script type="text/javascript">
        $('a.addCart').click(function(even){
            even.preventDefault();
            var href=$(this).attr("href");
            $.ajax({
                url:href,
                type:'GET',
                data:{},
                success:function(res){
                    swal(STRING,"","success");
                    $("#num_cart_parent").load("http://localhost:8080/php2023/buoi7_mvc/ #num_cart");
                }
            });
        }) ;
    </script>
    