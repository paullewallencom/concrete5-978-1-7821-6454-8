$(document).ready(function() {
   $('.delete').on('click', function(e) {
      return confirm('Are you sure you want to delete this item?');
   });
});