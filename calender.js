let calender = [
    ["_", "_", "_", "_", "_", "_", "_", ], 
    ["_", "_", "_", "_", "_", "_", "_", ], 
    ["_", "_", "_", "_", "_", "_", "_", ], 
    ["_", "_", "_", "_", "_", "_", "_", ], 
    ["_", "_", "_", "_", "_", "_", "_", ]
                ];



function insert (){
    document.getElementById("demo").innerHTML = "";

    var i = prompt("Please enter row no. less than 5");
    var j = prompt("Please enter column no. less than 7");
    var val = prompt("Please enter value no.");
    

    calender[i][j] = val;
    if (val != null) {


        for(let a=0; a<5; a++){
            document.getElementById("demo").innerHTML += `<span><b>week${a+1}-> </b></span>`;
            for(let b=0; b<7; b++){
                document.getElementById("demo").innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " + calender[a][b] ;
            }
            document.getElementById("demo").innerHTML += "<br>";
        } 

        
    }

}

function remove (){
    document.getElementById("demo").innerHTML = "";

    var x = prompt("Please enter row no. for removal");
    var y = prompt("Please enter column no. for removal");
    

    calender[x][y] = "_";
    for(let a=0; a<5; a++){
        document.getElementById("demo").innerHTML += `<span><b>week${a+1}-> </b></span>`;
        for(let b=0; b<7; b++){
            document.getElementById("demo").innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " + calender[a][b] ;
        }
        document.getElementById("demo").innerHTML += "<br>";
    } 

} 