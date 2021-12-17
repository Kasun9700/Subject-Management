var id =0 ;

$(document).ready(function() {

    

 // add new subject or Update subject
 $('#btnAdd').on('click', function () {
    if ($('#btnAdd').html() == "Save") {
        $.ajax({
            type: 'POST',
            url: '/saveSubject',
            data: $('#formSubject').serialize(),
            success: function (response) {
                getSubjectTable();
               
            },
            error: function (data) {
                console.log('An error occurred.');

            }
        });
    } else if ($('#btnAdd').html() == "Update") {
        console.log($('#fid').val());
        $.ajax({
            type: 'PUT',
            url: '/saveSubject/'+$('#fid').val(),
            data: $('#formSubject').serialize(),
            success: function (response) {
                getSubjectTable();
                console.log(response);
               
            },
            error: function (data) {
                console.log('An error occurred.');
                //console.log(data);
            }
        });
    }

});

 // edit subject
 $("body").on("click", ".btn-edit", function () {
    var id = $(this).parents("tr").attr('data-id');
    $.ajax({
        type: 'GET',
        url: '/saveSubject/' + id,
        success: function (data) {
         
                $('#fid').val(data.id);
                $("#subject_name").val(data.subject_name);
                $("#subject_marks").val(data.subject_marks);
                $("#btnAdd").html("Update");
        },
        error: function (data) {
            console.log(data);
        }
    });

});



    // delete subject
    $("body").on("click", "#btnDelete", function () {
        var id = $(this).parents("tr").attr('data-id');
       
        $.ajax({
            type: 'GET',
            url: '/deleteSubject/'+id,
            success: function (data) {
                getSubjectTable();
            },
            error: function (data) {
                $('#msgFail').show();
            }
        });

    });


    
    // subject view table 
    function getSubjectTable(){
        $.ajax({
            type: 'GET',
            url: '/saveSubject',
            success: function (response) {
                console.log(response);
                var html="";
                $.each(response, function( index, value ) {
                    html+="<tr data-id='"+value.id+"'>";
                    html+="<td>"+value.id+"</td>";
                    html+="<td>"+value.subject_name+"</td>";
                    html+="<td>"+value.subject_marks+"</td>";
                    

                    html+="<td> <a  id='btnDelete' class='btn btn-danger'>Delete</a></td>";
                    html+="<td> <a class='btn btn-warning btn-edit'  role='button'>Edit</a></td>";
                    html+="</tr>";
                  });

                  
                  $('#tbodySubject').html(html);

                
            },
            error: function (data) {
                console.log('An error occurred.');
            }
        });
    }

    getSubjectTable();


});



//alert
$(document).ready(function() {
    $("#success-alert").hide();
    $("#btnAdd").click(function showAlert() {
      $("#success-alert").fadeTo(1000, 300).slideUp(300, function() {
        $("#success-alert").slideUp(300);
      });
    });
  });





//min
function doMin(){
    $.ajax({
       url : "subjectMin",
       type: "GET",
       success : function (data) {
          $("#min").html(data);
       }
    });
    setTimeout(function() {
       doMin();
    }, 2000);
 }
 
 $(document).ready(function () {
   doMin(); 
 });




//max
function doMax(){
    $.ajax({
       url : "subjectMax",
       type: "GET",
       success : function (data) {
          $("#max").html(data);
       }
    });
    setTimeout(function() {
       doMax();
    }, 2000);
 }
 
 $(document).ready(function () {
   doMax(); 
 });




 //average
function doAvg(){
    $.ajax({
       url : "subjectAvg",
       type: "GET",
       success : function (data) {
          $("#avg").html(data);
       }
    });
    setTimeout(function() {
       doAvg();
    }, 2000);
 }
 
 $(document).ready(function () {
   doAvg(); 
 });



 
//total
function doSum(){
    $.ajax({
       url : "subjectSum",
       type: "GET",
       success : function (data) {
          $("#sum").html(data);
       }
    });
    setTimeout(function() {
       doSum();
    }, 2000);
 }
 
 $(document).ready(function () {
   doSum(); 
 });


