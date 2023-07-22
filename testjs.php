<?php
  function removeday() { echo 'Day removed'; }

  if (isset($_GET['remove'])) { return removeday(); }
?>


<!DOCTYPE html><html><title>Days</title><body>

  <a href="" onclick="removeday(event)" class="deletebtn">Delete</a>
  <input type="text">
  <script>
  async function removeday(e) {
    e.preventDefault(); 
    document.body.innerHTML+= '<br>'+ await(await fetch('?remove')).text();
  }
  </script>

</body></html>