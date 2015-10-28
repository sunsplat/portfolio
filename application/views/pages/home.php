<div id="carousel">
	<?php $this->load->view("templates/snippets/carousel.php"); ?>
</div>

<section id="about">
  <?php $this->load->view("pages/about.php"); ?>
</section>

<section id="portfolio">
  <?php $this->load->view("templates/snippets/thumbnails.php"); ?>
</section>

<section id="resume"> 
	<a name="resume"></a>
<?php $this->load->view("templates/snippets/resume.php"); ?>
</section>


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


		