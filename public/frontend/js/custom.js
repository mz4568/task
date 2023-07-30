
 $(".product_wishlist").on("click",function(){

        var product_id=$(this).data('id');
        // alert(product_id);

        $.ajax({
             headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
            url:"/addWishlist/"+product_id,
            type:"get",
            dataType:"Json",
            success:function(data){
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true,
                  didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
                });
                if($.isEmptyObject(data.error)){
                Toast.fire({
                  icon: 'success',
                  title: data.success
                 });
                }else{
                 Toast.fire({
                  icon: 'error',
                  title: data.error
                 });
                }
            }
       });
  });

// for cart

    $(".cartProduct").on("click",function(){

        var id=$(this).data('id');
        var name=$("#name").val();
        var price=$("#price").val();
        var image=$("#image").val();
        var quantity=$("#quantity").val();
        $.ajax({
             headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
            url:"/addCartProduct/"+id,
            type:"get",
            data:{name:name,price:price,image:image,quantity:quantity},
            dataType:"Json",
            success:function(data){
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true,
                  didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
                });
                if($.isEmptyObject(data.error)){
                Toast.fire({
                  icon: 'success',
                  title: data.success
                 });
                }else{
                 Toast.fire({
                  icon: 'error',
                  title: data.error
                 });
                }
            }
        });
    });

     $(".singleCartProduct").on("click",function(){

        var id=$(this).data('id');
        var product_name=$("#name").val();
        var product_price=$("#price").val();
        var product_color=$("#color").val();
        var product_code=$("#code").val();
        var product_size=$("#size").val();
        // alert(product_size);
        var product_image=$("#image").val();
        // alert(image);
        var product_quantity=$("#quantity").val();
        $.ajax({
             headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
            url:"/singleCartProduct/"+id,
            type:"get",
            data:{name:product_name,price:product_price,color:product_color,code:product_code,size:product_size,image:product_image,quantity:product_quantity},
            dataType:"Json",
            success:function(data){
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true,
                  didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
                });
                if($.isEmptyObject(data.error)){
                Toast.fire({
                  icon: 'success',
                  title: data.success
                 });
                }else{
                 Toast.fire({
                  icon: 'error',
                  title: data.error
                 });
                }
            }
        });
    });

    // delete cart
    $(".deleteCart").on("click",function(){

        var id=$(this).data('id');
        $.ajax({
             headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
            url:"/deleteCartProduct/"+id,
            type:"get",
            dataType:"Json",
            success:function(data){
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true,
                  didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
                });
                if($.isEmptyObject(data.error)){
                Toast.fire({
                  icon: 'success',
                  title: data.success
                 });
                }else{
                 Toast.fire({
                  icon: 'error',
                  title: data.error
                 });
                }
            }
        });
    });

//  search
 $(document).ready(function(){
      
    $('.search_data').keyup({

        source: function(request, response) {
          $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{url('autoComplete')}}",
            type:"get",
            data: {term:request.term },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.name;
               }); 
  
               response(resp);
            }
         });
        },
        minLength: 2
    });
 });   
    
// for sort

 $("#sort").on('change',function(){
        // this.form.submit();
      var sort=$(this).val();
      $.ajax({
           headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
          url:"/sub-category-product",
          type:"post",
          data:{
              sort:sort,
          },
          dataType:"Json",
          success:function(result){
             $(".filter_product").html(result);
          },error:function(){
              alert("Error");
          }
      });
  })
   
   // for color
  @foreach($productValues as $colors)
  $(".{{$colors['product_color']}}").on("click",function(){
      // var color_id={{$colors['product_color']}}
      @foreach($productValues as $color)
      var {{$color['product_color']}}=get_filter("{{ $color['product_color']}}");
      @endforeach
      // alert( color_id);

      $.ajax({
           headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
          url:"/sub-category-product",
          type:"post",
          data:{
              @foreach($productValues as $color)
              {{$color['product_color']}}:{{$color['product_color']}},
              @endforeach
          },
          dataType:"Json",
          success:function(data){
             $(".filter_product").html(data);
          },error:function(){
              alert("Error");
          }
      });
  });
 @endforeach
  function get_filter(class_name){
   var filter=[];
   $('.'+class_name+':checked').each(function(){
       filter.push($(this).val());
   });
   return filter;
  }
 
 // for Brand
  @foreach($brandnames as $brandname)
  $(".{{$brandname['brand_name']}}").on("click",function(){
      // var color_id={{$colors['product_color']}}
      @foreach($brandnames as $brand)
      var {{$brand['brand_name']}}=get_filter("{{$brand['brand_name']}}");
      @endforeach
      // alert( {{$brand['brand_name']}});

      $.ajax({
           headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
          url:"/sub-category-product",
          type:"post",
          data:{
              @foreach($brandnames as $brand)
              {{$brand['brand_name']}}:{{$brand['brand_name']}},
              @endforeach
          },
          dataType:"Json",
          success:function(data){
             $(".filter_product").html(data);
          },error:function(){
              alert("Error");
          }
      });
  });
  @endforeach
  function get_filter(class_name){
   var filter=[];
   $('.'+class_name+':checked').each(function(){
       filter.push($(this).val());
   });
   return filter;
  }

  // for Size
   @foreach($productSizes as $productSize)
  $(".{{$productSize['size']}}").on("click",function(){
      // var color_id={{$colors['product_color']}}
      @foreach($productSizes as $sizes)
      var {{$sizes['size']}}=get_filter("{{$sizes['size']}}");
      // alert( {{$sizes['size']}} );
      @endforeach
      

      $.ajax({
           headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
          url:"/sub-category-product",
          type:"post",
          data:{
              @foreach($productSizes as $sizes)
              {{$sizes['size']}}:{{$sizes['size']}},
              @endforeach
          },
          dataType:"Json",
          success:function(data){
             $(".filter_product").html(data);
          },error:function(){
              alert("Error");
          }
      });
  });
  @endforeach
  function get_filter(class_name){
   var filter=[];
   $('.'+class_name+':checked').each(function(){
       filter.push($(this).val());
   });
   return filter;
  }
