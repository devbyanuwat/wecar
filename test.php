<?php
include('style/bootstrap5.php');
include('database/db.php');

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="container">
    <input type="text" name="tooltip" class="samplebox" data-toggle="tooltip" title="Ankit">
    <button type="button" class="close" aria-label="Close">

    </button>
    <script>
        $(document).ready(function() {
            $("[data-toggle=tooltip]").mouseenter(function() {
                var $this = $(this);
                $this.attr('title', $this.val());
            });
        });
    </script>
</div>
<script src="style/validate.js"></script>