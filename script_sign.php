<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
    swal({
  title: "<?php echo $_SESSION['status']; ?>",
//   text: "You clicked the button!",
  icon: "<?php echo $_SESSION['status_code']; ?>",
});
</script>