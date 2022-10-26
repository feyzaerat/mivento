
<footer class="footer">
    <p class="footer-text">All rights reserved | <a href="https://feyzaerat.com">F.K.Erat</a><i>  <?php echo date('Y')?></i> © </p>
</footer>

<script type="text/javascript" rel="script" src="assets/js/navbar.js"></script>
<script type="text/javascript" rel="script" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" rel="script" src="assets/js/input.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
         $('#table_id').DataTable( {
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );
</script>