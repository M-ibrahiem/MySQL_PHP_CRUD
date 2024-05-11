<script src="resources/js/jquery.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
<script src="resources/js/icons.js"></script>
<script src="resources/js/toster.js"></script>
<script src="resources/js/main.js"></script>

<?php if ($action != false && $action === 'add'): ?>
    <script>
        show_add(); // استدعاء وظيفة JavaScript
    </script>
<?php endif; ?>

<?php if ($action != false && $action === 'del'): ?>
    <script>
        show_del(); // استدعاء وظيفة JavaScript
    </script>
<?php endif; ?>


<script>
    feather.replace();
</script>
</body>

</html>