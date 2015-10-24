<div class="resume">

<?php $this->load->view("templates/snippets/main.php"); ?>
</div>

<div id="about">
<?php $this->load->view("pages/about.php"); ?>
</div>

<a name="portfolio">
<?php $this->load->view("templates/snippets/thumbnails.php"); ?>
</a>

<!-- <script type="text/javascript">
//     $(document).ready(function(){
//         $('input#submit').click(function(){
//             var data = $('form').serialize();
//             $.ajax({
//                 method: 'POST',
//                 cache: false,
//                 url: 'pages/create',
//                 datatype: 'json',
//                 data: data,
//                 success: function(data){
//                     alert('yay it worked');
//                     $('#myModal').modal('hide');
//                     $('input:text, textarea').val('');
//                 },
//                 failure: function(){
//                     console.log('It didnt work');
//                 }
//             });
          
//         });
//     });
// </script> -->

		