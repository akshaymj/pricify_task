@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Bind Click Event to Dynamically added Elements</title>
<style>
/*#addChildsection{
  cursor:pointer;
   background: red;
    padding: 5px;
    border: 3px solid red;
    color: white;
    font-weight: bold;
    border-radius: 10px;
}
#addsubChildsection1{
    cursor: pointer;
     background: green;
    padding: 5px;
    border: 3px solid green;
    color: white;
    font-weight: bold;
    border-radius: 10px;
}
#addChildsection{

}*/
button{
    background: blue;
    padding: 5px;
    border: 3px solid blue;
    color: white;
    font-weight: bold;
    border-radius: 10px;
    margin-left: -22px;
}
.remove{
    background-color: red;
    margin-left: 10px;
    border: 3px solid red;
    padding: 0px 13px;
    color: white;
    font-weight: bold;
    border-radius: 10px;
}
li{
    display: flex;
    margin-top: 20px;
}
#addsection{
    margin-left: 20px;

}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#addsection").click(function(){
            var contentLength = $('ul#myList > li').length;
            if(contentLength==0){
          var content = `<li><input value='Main Category` + (contentLength+1) + `'class='input_value_maincat' ><a href='javascript:void(0);' class='remove'> &times;</a><ul id='myList1'><button id='addChildsection'>ADD</button></ul></li>`;
          $('ul#myList').append(content);
            }
             if(contentLength == 1){
             var content = `<li><input value= 'Main Category` + (contentLength+1) +`'class='input_value_maincat'><a href='javascript:void(0);' class='remove'> &times;</a><ul id='myList2'><button id='addChildsection1'>ADD</button></ul></li>`;
          $('ul#myList').append(content);
        }
         if(contentLength == 2){
             var content = `<li><input value='Main Category` + (contentLength+1) +`'class='input_value_maincat'><a href='javascript:void(0);' class='remove'> &times;</a><ul id='myList3'><button id='addChildsection2'>ADD</button></ul></li>`;
          $('ul#myList').append(content);
        }
        });
    $(document).on("click","button#addChildsection",function(){
        var contentLength1=$('ul#myList1 >li').length;
    // for(var i=0;i<1;i++){
        var content1=`<li><input value='Category1.` + (contentLength1+1) + `'class='input_value_cat'><a href='javascript:void(0);' class='remove'> &times;</a><ul id='mysubList1`+(contentLength1+1)+`'><button id='addsubChildsection1`+(contentLength1+1)+ `'>ADD</button></ul></li>`;
      $("ul#myList1").append(content1); 
        // }
      
    });
    $(document).on("click","button#addChildsection1",function(){
        var contentLength1=$('ul#myList2 >li').length;
    // for(var i=0;i<1;i++){
        var content1=`<li><input value='Category2.` + (contentLength1+1) + `'class='input_value_cat'><a href='javascript:void(0);' class='remove'> &times;</a><ul id='mysubList2`+(contentLength1+1)+`'><button id='addsubChildsection2`+(contentLength1+1)+`'>ADD</button></ul></li>`;
      $("ul#myList2").append(content1); 
        // }
      
    });
    $(document).on("click","button#addChildsection2",function(){
        var contentLength1=$('ul#myList3 >li').length;
    // for(var i=0;i<1;i++){
        var content1=`<li><input value='Category3.`+ (contentLength1+1) + `'class='input_value_cat'><a href='javascript:void(0);' class='remove'> &times;</a><ul id='mysubList3`+(contentLength1+1)+`'><button id='addsubChildsection3`+(contentLength1+1)+`'>ADD</button></ul></li>`;
      $("ul#myList3").append(content1); 
        // }
      
    });
    $(document).on("click",'button#addsubChildsection11',function(){
        var contentLength1=$('ul#mysubList11 >li').length;
    // for(var i=0;i<1;i++){
        var content1=`<li><input value='Sub Category1.1.` + (contentLength1+1) + `'class='input_value_subcat'><a href='javascript:void(0);' class='remove'> &times;</a></li>`;
            $("ul#mysubList11").append(content1); 
        // }
      
    });
    $(document).on("click",'button#addsubChildsection12',function(){
        var contentLength1=$('ul#mysubList12 >li').length;
    // for(var i=0;i<1;i++){
        var content1=`<li><input value='Sub Category1.2.` + (contentLength1+1) + `'class='input_value_subcat'><a href='javascript:void(0);' class='remove'> &times;</a></li>`;
            $("ul#mysubList12").append(content1); 
        // }
      
    });
     $(document).on("click",'button#addsubChildsection13',function(){
        var contentLength1=$('ul#mysubList13 >li').length;
    // for(var i=0;i<1;i++){
        var content1=`<li><input value='Sub Category1.3.` + (contentLength1+1) + `'class='input_value_subcat'><a href='javascript:void(0);' class='remove'> &times;</a></li>`;
            $("ul#mysubList13").append(content1); 
        // }
      
    });
    $(document).on("click","button#addsubChildsection21",function(){
        var contentLength1=$('ul#mysubList21 >li').length;
    // for(var i=0;i<1;i++){
        var content1=`<li><input value='Sub Category1.2.` + (contentLength1+1) + `'class='input_value_subcat'><a href='javascript:void(0);' class='remove'> &times;</a></li>`;
            $("ul#mysubList21").append(content1); 
        // }
      
    });
    $(document).on("click","button#addsubChildsection22",function(){
        var contentLength1=$('ul#mysubList22 >li').length;
    // for(var i=0;i<1;i++){
        var content1=`<li><input value='Sub Category1.3.` + (contentLength1+1) + `'class='input_value_subcat'><a href='javascript:void(0);' class='remove'> &times;</a></li>`;
            $("ul#mysubList22").append(content1); 
        // }
      
    });
    $(document).on("click","button#addsubChildsection23",function(){
        var contentLength1=$('ul#mysubList23 >li').length;
    // for(var i=0;i<1;i++){
        var content1=`<li><input value='Sub Category1.1.` + (contentLength1+1) + `'class='input_value_subcat'><a href='javascript:void(0);' class='remove'> &times;</a></li>`;
            $("ul#mysubList23").append(content1); 
        // }
      
    });
    $(document).on("click","button#addsubChildsection32",function(){
        var contentLength1=$('ul#mysubList32 >li').length;
    // for(var i=0;i<1;i++){
        var content1=`<li><input value='Sub Category1.2.` + (contentLength1+1) + `class='input_value_subcat'><a href='javascript:void(0);' class='remove'> &times;</a></li>`;
            $("ul#mysubList32").append(content1); 
        // }
      
    });
     $(document).on("click","button#addsubChildsection33",function(){
        var contentLength1=$('ul#mysubList33 >li').length;
    // for(var i=0;i<1;i++){
        var content1=`<li><input value='Sub Category1.3.` + (contentLength1+1) + `class='input_value_subcat'><a href='javascript:void(0);' class='remove'> &times;</a></li>`;
            $("ul#mysubList33").append(content1); 
        // }
      
    });
      $(document).on("click","button#addsubChildsection31",function(){
        var contentLength1=$('ul#mysubList31 >li').length;
    // for(var i=0;i<1;i++){
        var content1=`<li><input value='Sub Category1.3.` + (contentLength1+1) + `class='input_value_subcat'><a href='javascript:void(0);' class='remove'> &times;</a></li>`;
            $("ul#mysubList31").append(content1); 
        // }
      
    });
        $(document).on("click", "a.remove" , function() {
            $(this).parent().remove();
        });
    });
    $(document).on("click","#Final_Submit",function(){
        var associatedData=[];
        var subcat=[];
        var Category=[];
        var maincategory=[];
        var tempData={};
        

    
        $(this).parent().find("input.input_value_maincat").each(function() {
            var maincat1 = $(this).val();
            var temp = {};
            temp[maincat1] = Category;
            maincategory.push(temp);
            $(this).parent().find("input.input_value_cat").each(function() {
                var cat1 = $(this).val();
                var temp1 = {};
                temp1[cat1] = subcat;
                Category.push(temp1);
                $(this).parent().find("input.input_value_subcat").each(function() {
                    var subcat1 = $(this).val();
                    subcat.push(subcat1);
                });
            });
            associatedData.push(maincategory);
            maincategory = [];
            Category = [];
            subcat = [];
        });
        
       
        
        data = {};
        data['data'] = associatedData;
        url = '/category_insert';

        $.ajax({
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:data,
            type: 'POST',
            success: function(result) {
                // associatedData['_method']='PUT'
                // bootbox.alert("data is saved successfully");
                console.log(result);


                },
            error: function(err) {
                var alrtMsg = "Error: \n";
                $.each(err, function(key, value) {
                    $.each(value.data, function(i, v) {
                        $.each(v, function(index, msg) {
                            alrtMsg += (msg + "\n");
                        });
                    });
                });
            }
        });

    });
</script>
</head>
<body>
    <button id="addsection">Add new list item</button>
     <ul id="myList">
        <!-- <li>Setion1</li> -->
    </ul>
   <button type="submit" id="Final_Submit" style="float: right;">Submit</button>
</body> 
</html>    



@endsection
