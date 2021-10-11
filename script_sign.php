
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if(isset($_SESSION['status']) && $_SESSION['status']!=''){
    ?>
    <script>
    swal({
  title: "<?php echo $_SESSION['status']; ?>",
//   text: "You clicked the button!",
  icon: "<?php echo $_SESSION['status_code']; ?>",
});
</script>
    <?php
    unset($_SESSION['status']);
}
?>
<!-- <script>
    swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
});
</script> -->
