
@extends('layouts.theme')
@section('content')

<body>
	<!-- page -->
	<div id="page" class="page">

	
  
<!-- Header --><!--  Main banner section -->
 
 <!--  //Main banner section --><!--  About section -->
 
 <!--  //About section --><!--  services section -->

 <!--  //services section --><!--  Work gallery section -->
 
 <!--  //Work gallery section --><!-- Footer -->
  
  <!-- Footer --><!--  Work gallery section -->
  
 <div class="w3l-gallery2" id="gallery">
   <div class="insta-picks py-5 editContent">
   @auth
   <a href="/edit"><button style="margin-left: 50%;" class="btn btn-primary text-center">Add Images</button></a>
   @endauth
     <div class="container py-lg-5">
       
       <h3 class="global-title editContent" style="outline: none; cursor: inherit;">MY WORKS</h3>
       <div class="row no-gutters masonry">
         @foreach($img as $imgs)
         
         <div class="col-md-4 col-sm-6 brick p-3">
            
           <img src="../public/images/{{$imgs->image}}" class="img-fluid  insta-pic" alt="insta-pic"   style="border-radius: 6px; border-color: rgb(33, 37, 41); border-style: none; border-width: 1px;">
           </a>
         </div>
         @endforeach
         
       </div>
       
      
     </div>
   </div>
 </div>
 

 <div class="powr-reviews" id="29d0c7b2_1598367406"></div><script src="https://www.powr.io/powr.js?platform=html"></script>
 <!--  //Work gallery section --><script type="text/javascript">
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
 


@endsection