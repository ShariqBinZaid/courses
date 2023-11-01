<script>
    (function ($){
        "use strict";

        $('.icp-dd').iconpicker();
        $('body').on('iconpickerSelected','.icp-dd', function (e) {
            var selectedIcon = e.iconpickerValue;
            $(this).parent().parent().children('input').val(selectedIcon);
            $('body .dropdown-menu.iconpicker-container').removeClass('show');
        });

    })(jQuery);
</script><?php /**PATH C:\laragon\www\courses\@core\resources\views/backend/partials/icon-field/js.blade.php ENDPATH**/ ?>