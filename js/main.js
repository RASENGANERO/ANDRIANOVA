var slds=0;
var sldscli=0;
var calcitems=0;

function prev_elem(){
    let pqr=document.getElementsByClassName("slidimg");
    if(slds==-3||slds>0){
        slds=0;
    }
    switch(slds){
        case 0:
            pqr[0].setAttribute("src","/img/item-sld2.png");
            pqr[1].setAttribute("src","/img/item-sld3.png");
            pqr[2].setAttribute("src","/img/item-sld1.png");
            break;
        case -1:
            pqr[0].setAttribute("src","/img/item-sld3.png");
            pqr[1].setAttribute("src","/img/item-sld1.png");
            pqr[2].setAttribute("src","/img/item-sld2.png");
            break;
        case -2:
            pqr[0].setAttribute("src","/img/item-sld1.png");
            pqr[1].setAttribute("src","/img/item-sld2.png");
            pqr[2].setAttribute("src","/img/item-sld3.png");
            break;
    }
    slds--;
}
function next_elem(){
    
    let pqr=document.getElementsByClassName("slidimg");
    slds++;
    if(slds==3||slds<0){
        slds=0;
    }
    switch(slds){
        case 0:
            pqr[0].setAttribute("src","/img/item-sld2.png");
            pqr[1].setAttribute("src","/img/item-sld3.png");
            pqr[2].setAttribute("src","/img/item-sld1.png");
            break;
        case 1:
            pqr[0].setAttribute("src","/img/item-sld3.png");
            pqr[1].setAttribute("src","/img/item-sld1.png");
            pqr[2].setAttribute("src","/img/item-sld2.png");
            break;
        case 2:
            pqr[0].setAttribute("src","/img/item-sld1.png");
            pqr[1].setAttribute("src","/img/item-sld2.png");
            pqr[2].setAttribute("src","/img/item-sld3.png");
            break;
    }
}
function prev_elem_cli(){
    let pqr=document.getElementsByClassName("clientimg");
    if(sldscli==-3||sldscli>0){
        sldscli=0;
    }
    switch(sldscli){
        case 0:
            pqr[0].setAttribute("src","/img/item-sld2.png");
            pqr[1].setAttribute("src","/img/item-sld3.png");
            pqr[2].setAttribute("src","/img/item-sld1.png");
            break;
        case -1:
            pqr[0].setAttribute("src","/img/item-sld3.png");
            pqr[1].setAttribute("src","/img/item-sld1.png");
            pqr[2].setAttribute("src","/img/item-sld2.png");
            break;
        case -2:
            pqr[0].setAttribute("src","/img/item-sld1.png");
            pqr[1].setAttribute("src","/img/item-sld2.png");
            pqr[2].setAttribute("src","/img/item-sld3.png");
            break;
    }
    sldscli--;
}
function next_elem_cli(){
    let pqr=document.getElementsByClassName("clientimg");
    sldscli++;
    if(sldscli==3||sldscli<0){
        sldscli=0;
    }
    switch(sldscli){
        case 0:
            pqr[0].setAttribute("src","/img/item-sld2.png");
            pqr[1].setAttribute("src","/img/item-sld3.png");
            pqr[2].setAttribute("src","/img/item-sld1.png");
            break;
        case 1:
            pqr[0].setAttribute("src","/img/item-sld3.png");
            pqr[1].setAttribute("src","/img/item-sld1.png");
            pqr[2].setAttribute("src","/img/item-sld2.png");
            break;
        case 2:
            pqr[0].setAttribute("src","/img/item-sld1.png");
            pqr[1].setAttribute("src","/img/item-sld2.png");
            pqr[2].setAttribute("src","/img/item-sld3.png");
            break;
    }
}
function next_slide_calc(){
    let sqp=document.getElementsByClassName("calculator-item");
    for(let i=0;i<sqp.length;i++){
        sqp[i].setAttribute("class","calculator-item");
    }
    calcitems++;
    sqp[calcitems].setAttribute("class","calculator-item-active calculator-item");
}
function send_mess(){
    $.ajax({
        url:'/send.php',
        type:'POST',
        dataType:'json',
        data:{
            type:"demand",
            name:document.getElementById("namemess").value,
            phone:document.getElementById("phonemess").value,
        },
        success:function(data){
            window.location.reload();
        },
        error:function(data){
            alert(data);
            console.log(data);
        },
    });
}
function send_calcmess(){
    let s=document.getElementsByClassName("itemses-ceiling-item-text");
    let qs="";
    for(let i=0;i<s.length;i++){
        if(s[i].hasAttribute("selection")==true){
            qs=s[i].textContent;
            break;
        }
    }
    $.ajax({
        url:'/send.php',
        type:'POST',
        dataType:'json',
        data:{
            type:"calcmess",
            ceiling_type:qs,
            square:document.getElementById("calcsquare").value,
            corners:document.getElementById("calccorners").value,
            pipes:document.getElementById("calcpipes").value,
            fixtures:document.getElementById("calcfixtures").value,
            chandeliers:document.getElementById("calcchandeliers").value,
            name:document.getElementById("calcname").value,
            phone:document.getElementById("calcphone").value,
        },
        success:function(data){
            window.location.reload();
        },
        error:function(data){
            alert(data);

        },
    });
}
function select1(event){
    let sq=document.getElementsByClassName("itemses-ceiling-item-text");
    for(let i=0;i<sq.length;i++){
        sq[i].setAttribute("class","itemses-ceiling-item-text");
        if(sq[i].hasAttribute("selection")==true){
            sq[i].removeAttribute("selection");
        }
    }
    event.currentTarget.childNodes[3].setAttribute("class","text-orange itemses-ceiling-item-text");
    event.currentTarget.childNodes[3].setAttribute("selection","select");
}
function select2(event){
    let sq=document.getElementsByClassName("itemses-ceiling-item-text");
    for(let i=0;i<sq.length;i++){
        sq[i].setAttribute("class","itemses-ceiling-item-text");
        if(sq[i].hasAttribute("selection")==true){
            sq[i].removeAttribute("selection");
        }
    }
    event.currentTarget.setAttribute("class","text-orange itemses-ceiling-item-text");
    event.currentTarget.setAttribute("selection","select");
}
function select3(event){
    let sq=document.getElementsByClassName("itemses-ceiling-item-text");
    for(let i=0;i<sq.length;i++){
        sq[i].setAttribute("class","itemses-ceiling-item-text");
        if(sq[i].hasAttribute("selection")==true){
            sq[i].removeAttribute("selection");
        }
    }
    event.currentTarget.parentNode.childNodes[3].setAttribute("class","text-orange itemses-ceiling-item-text");
    event.currentTarget.parentNode.childNodes[3].setAttribute("selection","select");
}
document.addEventListener("DOMContentLoaded",()=>{
    if(document.getElementById("see-left")!=null){
        document.getElementById("see-left").addEventListener("click",prev_elem);
        document.getElementById("see-right").addEventListener("click",next_elem);
    }
    if(document.getElementById("client-left")!=null){
        document.getElementById("client-left").addEventListener("click",prev_elem_cli);
        document.getElementById("client-right").addEventListener("click",next_elem_cli);
    }
    if(document.getElementsByClassName("info-next-btn").length!=0){
        let s=document.getElementsByClassName("info-next-btn");
        for(let i=0;i<s.length;i++){
            s[i].addEventListener("click",next_slide_calc);
        }
    }
    
    if(document.getElementById("id1")!=null){
        document.getElementById("id1").addEventListener("click",()=>{
            document.getElementsByClassName("chose-main-text")[0].scrollIntoView();
        });
    }
    if(document.getElementById("id2")!=null){
        document.getElementById("id2").addEventListener("click",()=>{
            document.getElementsByClassName("calculator-main-text")[0].scrollIntoView();
        });
    }
    if(document.getElementById("id3")!=null){
        document.getElementById("id3").addEventListener("click",()=>{
            document.getElementsByClassName("customers-main-text")[0].scrollIntoView();
        });
    }
    if(document.getElementById("id4")!=null){
        document.getElementById("id4").addEventListener("click",()=>{
            document.getElementsByClassName("see-main-text")[0].scrollIntoView();
        });
    }
    if(document.getElementById("id5")!=null){
        document.getElementById("id5").addEventListener("click",()=>{
            document.getElementsByClassName("clients-main-text")[0].scrollIntoView();
        });
    }
    if(document.getElementById("id6")!=null){
        document.getElementById("id6").addEventListener("click",()=>{
            document.getElementsByClassName("contacts-main-text")[0].scrollIntoView();
        });
    }




    if(document.getElementById("idmob1")!=null){
        document.getElementById("idmob1").addEventListener("click",()=>{
            document.getElementById("myNav").style.width = "0%";
            document.getElementsByClassName("chose-main-text")[0].scrollIntoView();
        });
    }
    if(document.getElementById("idmob2")!=null){
        document.getElementById("idmob2").addEventListener("click",()=>{
            document.getElementById("myNav").style.width = "0%";
            document.getElementsByClassName("calculator-main-text")[0].scrollIntoView();
        });
    }
    if(document.getElementById("idmob3")!=null){
        document.getElementById("idmob3").addEventListener("click",()=>{
            document.getElementById("myNav").style.width = "0%";
            document.getElementsByClassName("customers-main-text")[0].scrollIntoView();
        });
    }
    if(document.getElementById("idmob4")!=null){
        document.getElementById("idmob4").addEventListener("click",()=>{
            document.getElementById("myNav").style.width = "0%";
            document.getElementsByClassName("see-main-text")[0].scrollIntoView();
        });
    }
    if(document.getElementById("idmob5")!=null){
        document.getElementById("idmob5").addEventListener("click",()=>{
            document.getElementById("myNav").style.width = "0%";
            document.getElementsByClassName("clients-main-text")[0].scrollIntoView();
        });
    }
    if(document.getElementById("idmob6")!=null){
        document.getElementById("idmob6").addEventListener("click",()=>{
            document.getElementById("myNav").style.width = "0%";
            document.getElementsByClassName("contacts-main-text")[0].scrollIntoView();
        });
    }


    
    if(document.getElementById("main-zav")!=null){
        document.getElementById("main-zav").addEventListener("click",()=>{
            document.getElementsByClassName("chose-main-text")[0].scrollIntoView();
        });
    }
    if(document.getElementById("main-calc")!=null){
        document.getElementById("main-calc").addEventListener("click",()=>{
            document.getElementsByClassName("calculator-main-text")[0].scrollIntoView();
        });
    }

    if(document.getElementsByClassName("menu-mobile").length!=0){
        document.getElementsByClassName("menu-mobile")[0].addEventListener("click",()=>{
            document.getElementById("myNav").style.width = "100%";
        });
    }
    if(document.getElementsByClassName("closebtn").length!=0){
        document.getElementsByClassName("closebtn")[0].addEventListener("click",()=>{
            document.getElementById("myNav").style.width = "0%";
        });
    }

    if(document.getElementById("sendmess")!=null){
        document.getElementById("sendmess").addEventListener("click",send_mess);
    }
    if(document.getElementById("btncon")!=null){
        document.getElementById("btncon").addEventListener("click",send_calcmess);
    }
    if(document.getElementsByClassName("itemses-ceiling-item").length!=0){
        let s=document.getElementsByClassName("itemses-ceiling-item");
        for(let i=0;i<s.length;i++){
            s[i].addEventListener("click",select1);
        }
    }
    if(document.getElementsByClassName("itemses-ceiling-item-text").length!=0){
        let s=document.getElementsByClassName("itemses-ceiling-item-text");
        for(let i=0;i<s.length;i++){
            s[i].addEventListener("click",select2);
        }
    }
    if(document.getElementsByClassName("itemses-ceiling-img").length!=0){
        let s=document.getElementsByClassName("itemses-ceiling-img");
        for(let i=0;i<s.length;i++){
            s[i].addEventListener("click",select3);
        }
    }
});