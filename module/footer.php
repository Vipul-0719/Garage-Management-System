
<!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
       Designed and Developed by <a href="https://wolfox.in/">Wolfox</a>.
</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
        </div>
       
    </div>
   
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url.'assets/libs/jquery/dist/jquery.min.js';?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url.'assets/libs/popper.js/dist/umd/popper.min.js';?>"></script>
    <script src="<?php echo base_url.'assets/libs/bootstrap/dist/js/bootstrap.min.js';?>"></script>
    <!-- apps -->
    <script src="<?php echo base_url.'dist/js/app.min.js';?>"></script>
    <script src="<?php echo base_url.'dist/js/app.init.js';?>"></script>
    <script src="<?php echo base_url.'dist/js/app-style-switcher.js';?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url.'assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js';?>"></script>
    <script src="<?php echo base_url.'assets/extra-libs/sparkline/sparkline.js';?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url.'dist/js/waves.js';?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url.'dist/js/sidebarmenu.js';?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url.'dist/js/custom.js';?>"></script>
    <script src="<?php echo base_url.'assets/libs/jquery-steps/build/jquery.steps.min.js';?>"></script>
    <script src="<?php echo base_url.'assets/libs/jquery-validation/dist/jquery.validate.min.js';?>"></script>

<!-- Table JS -->


    <script>



var form = $(".validation-wizard").show();

$(".validation-wizard").steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: "Submit"
    },
    onStepChanging: function(event, currentIndex, newIndex) {
        return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
    },
    onFinishing: function(event, currentIndex) {
        return form.validate().settings.ignore = ":disabled", form.valid()
    },
    onFinished: function (event, currentIndex) {
    $('button[type="submit"]').trigger('click');
}
}), $(".validation-wizard").validate({
    ignore: "input[type=hidden]",
    errorClass: "text-danger",
    successClass: "text-success",
    highlight: function(element, errorClass) {
        $(element).removeClass(errorClass)
    },
    unhighlight: function(element, errorClass) {
        $(element).removeClass(errorClass)
    },
    errorPlacement: function(error, element) {
        error.insertAfter(element)
    },
    rules: {
        email: {
            email: !0
        }
    }
})
    </script>
</body>


</html>