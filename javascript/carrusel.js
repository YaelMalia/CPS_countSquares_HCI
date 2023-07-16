var nPage = 1;

function Next(){
    nPage+=1;
    if(nPage>11){
        nPage = 0;
    }
    if(nPage == 1){
        $("#page1").show(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 2){
        $("#page1").hide(500);
        $("#page2").show(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 3){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").show(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 4){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").show(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 5){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").show(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 6){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").show(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 7){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").show(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 8){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").show(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 9){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").show(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 10){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").show(500);
        $("#page11").hide(500);
    }
    if(nPage == 11){
        nPage = 0;
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").show(500);
    }
    // console.log(nPage);
}

function Back(){
    nPage-=1;
    if(nPage<0){
        nPage = 11;
    }
    if(nPage == 1){
        nPage = 12;
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 2){
        $("#page1").hide(500);
        $("#page2").show(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 3){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").show(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 4){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").show(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 5){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").show(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 6){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").show(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 7){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").show(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 8){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").show(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 9){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").show(500);
        $("#page10").hide(500);
        $("#page11").hide(500);
    }
    if(nPage == 10){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").show(500);
        $("#page11").hide(500);
    }
    if(nPage == 11){
        $("#page1").hide(500);
        $("#page2").hide(500);
        $("#page3").hide(500);
        $("#page4").hide(500);
        $("#page5").hide(500);
        $("#page6").hide(500);
        $("#page7").hide(500);
        $("#page8").hide(500);
        $("#page9").hide(500);
        $("#page10").hide(500);
        $("#page11").show(500);
    }
    // console.log(nPage);
}

