function j(el){
   return document.getElementById(el);
}
function data(file,el,data){
    j(el).innerHTML="Loading";
    var hr=new XMLHttpRequest();
    hr.open('POST',file,true);
    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    hr.onreadystatechange=function(){
        if(hr.readyState==4 && hr.status==200){
            j(el).innerHTML=hr.responseText;
        }
    };
    hr.send(data);
}
function relad(){
    data("tresuts.php","paste",null);
}
function tablek(){
    var sub=j("subject").value;
    var clas=j("class").value;
    var stream=j("stream").value;
    var date=j("date").value;
    var info=
    "&sub=" +sub+
    "&clas="+clas+
    "&stream="+stream+
    "&date="+date;

    data("attendancetable.php","responce",info);
}
function relad3(){
    data("sresults.php","paste",null);
}
function students(){
    
    var id=j("id").value;
    var name=j("name").value;
    var stream=j("stream").value;
    var age=j("age").value;
    var gender=j("gender").value;
    var clas=j("class").value;
    var dob=j("dob").value;


    var info=
    "&id=" +id+
    "&name="+name+
    "&age="+age+
    "&gender="+gender+
    "&clas="+clas+
    "&stream="+stream+
    "&dob="+dob;
    
    console.log(info);
    data("addstudent.php","resp",info);

relad3();
}
function ed(){
    $(".edit").click(function(){
    var element =$(this);
    var id=element.attr('id');
    var info='id=' +id;
    
    
    console.log(info);
    data("editstudents.php","res",info);
    j("id02").style.display="block";
});}
function add(){
    
    var id=j("id").value;
    var name=j("name").value;
    var email=j("email").value;
    var age=j("age").value;
    var gender=j("gender").value;
    var phone=j("phone").value;



    var info=
    "&id=" +id+
    "&name="+name+
    "&email="+email+
    "&age="+age+
    "&gender="+gender+
    "&phone="+phone;
    
    console.log(info);
    data("addteacher.php","responce",info);

relad();
}
function edit(){
    $(".edit").click(function(){
    var element =$(this);
    var id=element.attr('id');
    var info='id=' +id;
    
    
    console.log(info);
    data("editteacher.php","res",info);
    j("id02").style.display="block";
});

}
function faster(){
    $(".edit").click(function(){
    var element =$(this);
    var id=element.attr('id');
    var info='id=' +id;
    
    
    console.log(info);
    data("editteacher.php","res",info);
    j("id02").style.display="block";
});

}
function viewp1(){
    $(".prof").click(function(){
    var element =$(this);
    var id=element.attr('id');
    var info='id=' +id;
    
    
    console.log(info);
    data("tprofile.php","prod",info);
    j("id02").style.display="block";
});

}
function relad1(){
    data("cresults.php","paste",null);
}
function add1(){
    
   
    var name=j("name").value;
    var info="name="+name;
    
    console.log(info);
    data("addclass.php","responce",info);

relad1();
}
function relad2(){
    data("stresults.php","paste",null);
}
function add2(){
    var name=j("name").value;
    var info="name="+name;
    
    console.log(info);
    data("addstream.php","responce",info);

relad2();
}

