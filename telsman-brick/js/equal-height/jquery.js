// JavaScript Document


$(document).ready(function(){

    
        $('.container-equal').each(function(){  
            
            var highestBox = 0;
            $('.column-equal', this).each(function(){
            
                if($(this).height() > highestBox) 
                   highestBox = $(this).height(); 
            });  
            
            $('.column-equal',this).height(highestBox);
            
        
    });    
    
    
   

});

