
var timesun=["1:00","2:00","3:00"]
var timemon=["3:00","4:00","5:00"]
var timetues=["5:00"]
var timewends=["6:00","7:00","8:00"]
var timethurs=["1:00","2:00"]
var timefri=["3:00"]
var timesatur=["10:00"]

// function openForm() {
//     console.log("hi here")
//     if (document.getElementById("myForm").style.display == "none")
//       document.getElementById("myForm").style.display = "block";
//     else
//     document.getElementById("myForm").style.display = "none";
   
//   }


function updateaptime()
{
    

    var apday1=document.getElementById("apday").value
   // alert(apday1)
   document.getElementById("aptime").options.length=1
    switch(apday1){
        case "sun":
            for(i=0;i<timesun.length;i++){
                var opt=document.createElement("option")
                opt.text=timesun[i]
                document.getElementById("aptime").appendChild(opt)
            }
            break;
        case "mon":
            for(i=0;i<timemon.length;i++){
                var opt=document.createElement("option")
                opt.text=timemon[i]
                document.getElementById("aptime").appendChild(opt)
            }
            break;
            case "tues":
            for(i=0;i<timetues.length;i++){
                var opt=document.createElement("option")
                opt.text=timetues[i]
                document.getElementById("aptime").appendChild(opt)
            }
            break;
            case "wends":
            for(i=0;i<timewends.length;i++){
                var opt=document.createElement("option")
                opt.text=timewends[i]
                document.getElementById("aptime").appendChild(opt)
            }
            break;
            case "thurs":
            for(i=0;i<timethurs.length;i++){
                var opt=document.createElement("option")
                opt.text=timethurs[i]
                document.getElementById("aptime").appendChild(opt)
            }
            break;
            case "fri":
                for(i=0;i<timefri.length;i++){
                    var opt=document.createElement("option")
                    opt.text=timefri[i]
                    document.getElementById("aptime").appendChild(opt)
                }
                break;
                case "satur":
                    for(i=0;i<timesatur.length;i++){
                        var opt=document.createElement("option")
                        opt.text=timesatur[i]
                        document.getElementById("aptime").appendChild(opt)
                    }
                    break;
    }
}

// var pettype1=document.getElementById("pettypeid").value
function apvalidate(){
    alert("hiiiiiiiiii")
    console.log("hihelloo")
    return true
    // if(pettype1=="0"){
    //     alert(puttt)
    // }
}



