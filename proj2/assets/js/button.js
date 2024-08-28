function message(){
    var name=document.getElementById('name');
    var usn=document.getElementById('usn');
    var internalMarks1=document.getElementById('internalMarks1');
    var internalMarks2=document.getElementById('internalMarks2');
    var internalMarks3=document.getElementById('internalMarks3');
    var internalMarks4=document.getElementById('internalMarks4');
    var internalMarks5=document.getElementById('internalMarks5');
    var externalMarks1=document.getElementById('externalMarks1');
    var externalMarks2=document.getElementById('externalMarks2');
    var externalMarks3=document.getElementById('externalMarks3');
    var externalMarks4=document.getElementById('externalMarks4');
    var externalMarks5=document.getElementById('externalMarks5');
    var totalMarks1=document.getElementById('totalMarks1');
    var totalMarks2=document.getElementById('totalMarks2');
    var totalMarks3=document.getElementById('totalMarks3');
    var totalMarks4=document.getElementById('totalMarks4');
    var totalMarks5=document.getElementById('totalMarks5');
    var grade1=document.getElementById('grade1');
    var grade2=document.getElementById('grade2');
    var grade3=document.getElementById('grade3');
    var grade4=document.getElementById('grade4');
    var grade5=document.getElementById('grade5');

    
    
    if(name.value=='' ||usn.value=='' || internalMarks1.value=='' || internalMarks1.value=='' || internalMarks2.value=='' ||internalMarks3.value=='' || internalMarks4.value=='' || internalMarks5.value==''
    || externalMarks2.value==''|| externalMarks3.value==''|| externalMarks4.value==''|| externalMarks5.value==''|| totalMarks1.value==''
    || totalMarks2.value==''|| totalMarks3.value==''|| totalMarks4.value==''|| totalMarks5.value==''|| grade1.value==''|| grade2.value==''
    || grade3.value==''|| grade4.value==''|| grade5.value==''){
        
    alert("Fields can't be empty");
    }
    else{
        setTimeout(() =>{
            refnum.value='';
            name.value='';
            mobileno.value=='';
            email.value=='' ;
            date.value=='';
            address.value=='';
            com.value=='';
            upload.value=='';
        },2000);
    
        // window.location.href = 'http://localhost/WLCM/index.html'; 
        alert("Form is submitted successfully ");
        window.location.href='http://localhost/proj1/indexadmin.html';
       
       
    }
    
    }
    