     
//       var postURL = "<?php echo url('addmore'); ?>";
//       var i=1;  


//       $('#add').click(function(){  
//            i++;  
//            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="size[]" placeholder="Enter Size" style="width: 150px" /></td><td><input type="text" name="sku[]" placeholder="Enter Sku" style="width: 150px" /></td><td><input type="text" name="stock[]" placeholder="Enter Stock" style="width: 150px" /></td><td><input type="text" name="price[]" placeholder="Enter Price" style="width: 150px" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
//       });  


//       $(document).on('click', '.btn_remove', function(){  
//            var button_id = $(this).attr("id");   
//            $('#row'+button_id+'').remove();  
//       });  

//       //for append category
//         $('#category_id').on('change',function() {
//         var category_id = $(this).val();
//         // alert(category_id);

//         $.ajax({
//           headers: {
//               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//               },
//             type:'get',
//             url:"/admin/subCat",
//             data:{category_id:category_id},
//             dataType: 'json',
//             success:function (result) {
//               // alert(result);
//             // $('#subcat_id').html('<option value="">-- Select Sub Category --</option>');
//               $.each(result.subcategories, function (key, value) {
//               $("#subcat_id").append('<option value="' + value.id + '">' + value.subcategory_name + '</option>');
//              });

//             }
//           })
//         });

// //for sweet alert



//    function readUrl(input){
//       if(input.files && input.files[0]){
//         var reader = new FileReader();
//         reader.onload=function(e){
//           $('#one').attr('src',e.target.result).width(70).height(80);

//         }
//         reader.readAsDataURL(input.files[0]);
//       }
//     }
    
//    // for datatables
//    $('#allTable').DataTable();

// // use toastr

//    @if(Session::has('message'))
//     var type = "{{ Session::get('alert-type', 'info') }}";
//     switch(type){
//         case 'info':
//             toastr.info("{{ Session::get('message') }}");
//             break;

//         case 'warning':
//             toastr.warning("{{ Session::get('message') }}");
//             break;

//         case 'success':
//             toastr.success("{{ Session::get('message') }}");
//             break;

//         case 'error':
//             toastr.error("{{ Session::get('message') }}");
//             break;
//     }
//   @endif

      // $.ajaxSetup({
      //     headers: {
      //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //     }
      // });


    //   $('#submit').click(function(){            
    //        $.ajax({  
    //             url:postURL,  
    //             method:"POST",  
    //             data:$('#add_name').serialize(),
    //             type:'json',
    //             success:function(data)  
    //             {
    //                 if(data.error){
    //                     printErrorMsg(data.error);
    //                 }else{
    //                     i=1;
    //                     $('.dynamic-added').remove();
    //                     $('#add_name')[0].reset();
    //                     $(".print-success-msg").find("ul").html('');
    //                     $(".print-success-msg").css('display','block');
    //                     $(".print-error-msg").css('display','none');
    //                     $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
    //                 }
    //             }  
    //        });  
    //   });  

    //   function printErrorMsg (msg) {
    //      $(".print-error-msg").find("ul").html('');
    //      $(".print-error-msg").css('display','block');
    //      $(".print-success-msg").css('display','none');
    //      $.each( msg, function( key, value ) {
    //         $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    //      });
    //   }

















    

// for test code
   
//    <button id="out" onclick="listen(this.id)">Submit</button>
//     <button class="mk" data-id="out" type='button'> Status Update </button> -->

// <script type="text/javascript">
//     $(function () {
//     $('.mk').on('click', function () {
//         var mmm=$(this).data('id');
//         alert(mmm);
//         var Status = $(this).val();
//         $.ajax({
//             url: 'Ajax/StatusUpdate.php',
//             data: {
//                 text: $("textarea[name=Status]").val(),
//                 Status: Status
//             },
//             dataType : 'json'
//         });
//     });
// });
// </script>

// <script>
//     function listen(get) {
//         // console.log(this)
//         alert(get);
//     }
// </script> 