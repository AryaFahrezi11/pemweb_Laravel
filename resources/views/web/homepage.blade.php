<!-- <x-layout>
    <h3>Ini adalah halaman homepage</h3>
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div id="liveAlertPlaceholder"></div>
<button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
</x-layout> -->

<x-layout> 
 
   <div class="row"> 
       <h3>Categories</h3> 
       @foreach($categories as $category) 
           <div class="col-2"> 
               <div class="card"> 
                   <img src="{{ $category['image'] }}" class="card-img-top" alt="..."> 
                   <div class="card-body"> 
                     <h5 class="card-title">{{ $category['name'] }}</h5> 
                     <p class="card-text"> 
                       {{ $category['description'] }} 
                     </p> 
                     <a href="/category/{{ $category['slug'] }}" class="btn btn-primary">Detail</a> 
                   </div> 
               </div> 
           </div> 
       @endforeach 
   </div> 
</x-layout> 