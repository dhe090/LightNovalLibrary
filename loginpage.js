window.onload=function(){
    function check(){
        var names=['name1','name2'];
        var psws=['123','321'];
        var name=document.getElementsByClassName("name").item(0).value;
        var psw=document.getElementsByClassName("password").item(0).value;
        var k=-1;var url = window.location.href;
        for(i=0;i<names.length;i++){
            if(name==names[i])
                k=i;
        }
        if(k!=-1&&psw==psw[k]){
            alert("Login Successfully");
            window.location.href=url;
        }
        else
            alert("The username does not exist or the password is wrong");
    }
}